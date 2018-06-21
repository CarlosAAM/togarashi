<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Models\Category;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->sortBy('name');

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Category::validate($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|dimensions:min_width=1900,min_height=545'
        ]);

        $path = $request->image->store('/10HqUyM9OuYz-LmBgyDcGbOpRbc5w3ZTg', 'google'); // guardarlo en el directorio categorias
        $files = collect(Storage::cloud()->listContents('/10HqUyM9OuYz-LmBgyDcGbOpRbc5w3ZTg', false));
        $file = (object) $files->where('filename', pathinfo($path, PATHINFO_FILENAME))->first();

        $category = Category::create([
            'name' => $request->name,
            'image' => $file->basename // web accessible path
        ]);

        session()->flash('success', 'Categoria creada correctamente.');

        return redirect(route('admin.categories.show', ['id' => $category->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validator = Category::validate($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if($request->hasFile('image')){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,jpg,png|dimensions:min_width=1900,min_height=545'
            ]);

            $path = $request->image->store('/10HqUyM9OuYz-LmBgyDcGbOpRbc5w3ZTg', 'google'); // guardarlo en el directorio categorias
            $files = collect(Storage::cloud()->listContents('/10HqUyM9OuYz-LmBgyDcGbOpRbc5w3ZTg', false));
            
            $old = (object) $files->where('type', 'file')->where('basename', $category->image)->first();
            Storage::cloud()->delete($old->dirname.'/'.$old->basename);
            
            $file = (object) $files->where('filename', pathinfo($path, PATHINFO_FILENAME))->first();

            $category->image = $file->basename;
        }

        $category->name = $request->name;
        $category->save();

        session()->flash('success', 'Categoria actualizada correctamente.');

        return redirect(route('admin.categories.show', ['id' => $category->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $files = collect(Storage::cloud()->listContents('/', true));
        $file = (object) $files->where('type', 'file')->where('basename', $category->image)->first();
        Storage::cloud()->delete($file->dirname.'/'.$file->basename);

        $category->delete();

        session()->flash('success', 'Categoria eliminada correctamente.');
        return redirect(route('admin.categories'));
    }
}
