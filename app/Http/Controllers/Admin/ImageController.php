<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Models\ImageDirectory;

class ImageController extends Controller
{
    const DIRECTORIES = [
        ['name' => 'slider', 'title' => 'Slider principal'],
        ['name' => 'gallery', 'title' => 'Galeria']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories = [];

        foreach(self::DIRECTORIES as $dir) {
            array_push($directories, new ImageDirectory($dir['name'], $dir['title']));
        }

        return view('admin.images.index', compact('directories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $path = $request->file('image')->store('public/'.$request->name); // storage path

        session()->flash('success', 'Imagen guardada exitosamente.');
        return redirect(route('admin.images'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($image)
    {
        Storage::delete(str_replace('_', '/', $image));

        session()->flash('success', 'Imagen eliminda exitosamente.');
        return redirect(route('admin.images'));
    }
}
