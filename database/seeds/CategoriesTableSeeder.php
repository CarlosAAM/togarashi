<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Oniguiris',
            'image' => 'storage/categories/1.png',
            'created_at' => Carbon::now('America/Mexico_City')
        ]);

        DB::table('categories')->insert([
            'name' => 'Makis',
            'image' => 'storage/categories/2.png',
            'created_at' => Carbon::now('America/Mexico_City')
        ]);
    }
}
