<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;

use App\Models\Subcategory;

class Dish extends Model
{
    // Fields available to fill in this model
    protected $fillable = ['name', 'description', 'price', 'subcategory_id'];

    /**
     * Validations
    */

    // Validates data to create or update the model
    public static function validate($data) {
        return Validator::make($data, [
            'name' => 'required|max:100|string',
            'description' => 'required|max:255|string',
            'price' => 'required|numeric',
            'subcategory_id' => 'required|numeric|exists:subcategories,id'
        ]);
    }

    /**
     * Relations
    */

    // Belongs to relation with Subcategory
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }
}
