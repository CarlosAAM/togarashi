<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Dish;
use App\Models\Category;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all()->sortBy('name');
        $categories = Category::all()->sortBy('name');

        return view('admin.dishes.index', compact('dishes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Dish::validate($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $dish = Dish::create($request->all());

        session()->flash('success', 'Platillo creado correctamente.');
        return redirect(route('admin.dishes.show', ['id' => $dish->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $categories = Category::all()->sortBy('name');
        return view('admin.dishes.edit', compact('dish', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $validator = Dish::validate($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $dish->fill($request->all());
        $dish->save();

        session()->flash('success', 'Platillo actualizado correctamente.');
        return redirect(route('admin.dishes.show', ['id' => $dish->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        session()->flash('success', 'Platillo eliminado correctamente.');
        return redirect(route('admin.dishes'));
    }
}
