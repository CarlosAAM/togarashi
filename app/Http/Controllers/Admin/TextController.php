<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TextController extends Controller
{
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
}
