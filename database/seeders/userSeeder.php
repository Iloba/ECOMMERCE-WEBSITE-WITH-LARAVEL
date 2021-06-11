<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//import Db query
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add test data to the database
        DB::table('users')->insert([
            'name' => 'Timothy Iloba',
            'email' => 'ilobatimothy@gmail.com',
            'password' => Hash::make('holyspirit')
      ]);
    }
}
