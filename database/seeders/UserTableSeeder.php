<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ozhick',
            'email' => 'ozhickb87@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Pangestu',
            'email' => 'pangestu.sye@gmail.com',
            'password' => Hash::make('87654321')
        ]);
    }
}
