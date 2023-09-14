<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Stringable;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 10; $i++){
            DB::table('order')->insert([
                'product_name' => Str::random(10),
                'price_product' => rand(100, 100000),
                'address_delivery' => Str::random(100),
            ]);    
        }
        
    }
}
