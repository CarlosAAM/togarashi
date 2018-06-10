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

        $path = $request->file('image')->store('public/categories'); // storage path

        $category = Category::create([
            'name' => $request->name,
            'image' => str_replace('public', 'storage', $path) // web accessible path
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

            Storage::delete(str_replace('storage', 'public', $category->image)); // delete old image with storage path
            $path = $request->file('image')->store('public/categories');
            $category->image = str_replace('public', 'storage', $path); // new image with web accessible path
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
        Storage::delete(str_replace('storage', 'public', $category->image));
        $category->delete();

        session()->flash('success', 'Categoria eliminada correctamente.');
        return redirect(route('admin.categories'));
    }
}
