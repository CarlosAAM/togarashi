<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;

use App\Models\Category;
use App\Models\Dish;

class Subcategory extends Model
{
    // Fields available to fill in this model
    protected $fillable = ['name', 'category_id'];

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

    // Belongs to relation with Category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Has many relation with Dish
    public function dishes() {
        return $this->hasMany(Dish::class);
    }
}
