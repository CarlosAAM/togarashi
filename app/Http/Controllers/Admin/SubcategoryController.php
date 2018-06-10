<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Subcategory::validate($request->all());

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $subcategory = Subcategory::create($request->all());

        session()->flash('success', 'Subcategoria creada correctamente.');
        return redirect(route('admin.categories.show', ['id' => $subcategory->category->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('admin.subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        return view('admin.subcategories.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $validator = Subcategory::validate($request->all());

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $subcategory->name = $request->name;
        $subcategory->save();

        session()->flash('success', 'Subcategoria actualizada correctamente.');
        return redirect(route('admin.categories.show', ['id' => $subcategory->category->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $category = $subcategory->category;
        $subcategory->delete();

        session()->flash('success', 'Subcategoria eliminada correctamente.');
        return redirect(route('admin.categories.show', ['id' => $category->id]));
    }
}
