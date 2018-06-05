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
            'created_at' => Carbon::now('America/Mexico_City')
        ]);

        DB::table('categories')->insert([
            'name' => 'Makis',
            'created_at' => Carbon::now('America/Mexico_City')
        ]);
    }
}
