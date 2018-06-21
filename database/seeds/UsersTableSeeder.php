<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'carlosaam96@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => Carbon::now('America/Mexico_City'),
            'updated_at' => Carbon::now('America/Mexico_City')
        ]);
    }
}
