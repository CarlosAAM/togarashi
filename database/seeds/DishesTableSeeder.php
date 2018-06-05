<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            'name' => 'Oniguiri tampico',
            'description' => 'Triangulos de arroz empanizados ...',
            'price' => 70.00,
            'subcategory_id' => 1,
            'created_at' => Carbon::now('America/Mexico_City')
        ]);

        DB::table('dishes')->insert([
            'name' => 'Mango maki',
            'description' => 'Rollitos cubiertos de mango con camarón ...',
            'price' => 75.00,
            'subcategory_id' => 2,
            'created_at' => Carbon::now('America/Mexico_City')
        ]);

        DB::table('dishes')->insert([
            'name' => 'Arrachera maki',
            'description' => 'Rollitos con carne arrachera por dentro ...',
            'price' => 80.00,
            'subcategory_id' => 3,
            'created_at' => Carbon::now('America/Mexico_City')
        ]);
    }
}
