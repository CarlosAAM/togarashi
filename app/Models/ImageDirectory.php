<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class ImageDirectory
{
    var $name, $title, $images;

    function __construct($name, $title){
        $this->name = $name;
        $this->title = $title;
        $this->images = collect(Storage::cloud()->listContents($name, false));
    }
}