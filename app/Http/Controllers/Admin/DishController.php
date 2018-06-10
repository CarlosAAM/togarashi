<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Dish;

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
        $categories = Categories::all()->sortBy('name');

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
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Dish::validate($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->description = $request->description;
        $dish->subcategory_id = $request->subcategory->id;
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
    public function destroy($id)
    {
        $dish->delete();

        session()->flash('success', 'Platillo eliminado correctamente.');
        return redirect(route('admin.dished'));
    }
}
