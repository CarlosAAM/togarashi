<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class Helper
{
    // Transforms a collection of arrays, to a collection of objects
    static function transformCollectionContent(Collection $collection) {
        return $collection->transform(function($value, $key){
            return (object) $value;
        });
    }
}