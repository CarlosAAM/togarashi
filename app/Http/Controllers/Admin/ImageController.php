<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

use App\Models\ImageDirectory;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories = collect(Storage::cloud()->listContents('/', false));

        $directories->transform(function($dir, $key) {
            $files = collect(Storage::cloud()->listContents($dir['path'], false));
            $files->transform(function($file, $key) {
                return (object) $file;
            }); 

            $dir['files'] = $files->where('type', 'file')->sortBy('name');
            return (object) $dir;
        });

        $directories = $directories->sortBy('name');

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
            'dir' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('image');
        $path = $request->image->store('/'.$request->dir, 'google');
        
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
        $files = collect(Storage::cloud()->listContents('/', true));
        $file = (object) $files->where('type', 'file')->where('basename', $image)->first();

        if($file) { // file exists
            $files = collect(Storage::cloud()->listContents('/'.$file->dirname, false))->where('type', 'file');
            
            if(count($files) > 1) { // is not the only image
                Storage::cloud()->delete($file->dirname.'/'.$file->basename);
                session()->flash('success', 'Imagen eliminda exitosamente.');
            }
            else{
                session()->flash('warning', 'No puedes eliminar esta imagén. Esta sección requiere tener al menos una imagen.');
            }
        }
        
        return redirect(route('admin.images'));
    }
}
