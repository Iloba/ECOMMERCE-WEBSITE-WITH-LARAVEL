<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Iphone 11 Pro Max',
                'price' => '500000',
                'category' => 'Mobile Devices',
                'description' => 'Apple Iphone 11, 250GB 6GB ram',
                'gallery' => 'iphone11.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Iphone X Pro Max',
                'price' => '500000',
                'category' => 'Mobile Devices',
                'description' => 'Apple Iphone X, 150GB 2GB ram',
                'gallery' => 'iphone11.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Iphone 8 ',
                'price' => '200000',
                'category' => 'Mobile Devices',
                'description' => 'Apple Iphone 8, 50GB 4GB ram',
                'gallery' => 'iphone11.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Iphone 7 Plus',
                'price' => '90000',
                'category' => 'Mobile Devices',
                'description' => 'Apple Iphone 7 Plus, 50GB 3GB ram',
                'gallery' => 'iphone11.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
