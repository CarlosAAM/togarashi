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
            'image' => '1DxP40owhsQzvSRn0zXm6IwytCcCldsrt',
            'created_at' => Carbon::now('America/Mexico_City')
        ]);

        DB::table('categories')->insert([
            'name' => 'Makis',
            'image' => '1yR0QMxP7cXKq7yQ2Zxq1XF10wCRBrouK',
            'created_at' => Carbon::now('America/Mexico_City')
        ]);
    }
}
