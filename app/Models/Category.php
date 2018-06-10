<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Validator;

use App\Models\Subcategory;

class Category extends Model
{
    // Fields available to fill in this model
    protected $fillable = ['name', 'image'];

    /**
     * Validations
    */

    // Validates data to create or update the model
    public static function validate($data) {
        return Validator::make($data, [
            'name' => 'required|max:100'
        ]);
    }

    /**
     * Relations
    */

    // Has many relation with Category
    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }
}
