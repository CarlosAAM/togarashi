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
        ['name' => 'gallery', 'title' => 'Imágenes de la galeria'],
        ['name' => 'welcome', 'title' => 'Sección de bienvenida'],
        ['name' => 'contact', 'title' => 'Sección de contacto'],
        ['name' => 'menu', 'title' => 'Sección de menu'],
        ['name' => 'gallery-header', 'title' => 'Principal de la galería']
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
        $name = explode("_", $image)[1];
        $directory = new ImageDirectory($name, '');

        if(count($directory->images) > 1){
            Storage::delete(str_replace('_', '/', $image));
            session()->flash('success', 'Imagen eliminda exitosamente.');
        }
        else{
            session()->flash('warning', 'No puedes eliminar esta imagén. Esta sección require tener al menos una imagen.');
        }
        
        return redirect(route('admin.images'));
    }
}
