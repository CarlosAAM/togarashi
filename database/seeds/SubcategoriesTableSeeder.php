<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'name' => 'Especiales',
            'category_id' => 1,
            'created_at' => Carbon::now('America/Mexico_City')
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Exóticos',
            'category_id' => 2,
            'created_at' => Carbon::now('America/Mexico_City')
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Empanizados',
            'category_id' => 2,
            'created_at' => Carbon::now('America/Mexico_City')
        ]);
    }
}
