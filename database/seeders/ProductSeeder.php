<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<10;$i++){
       // DB::table('products')->truncate();
        $ProductName = Str::random(10).' '.Str::random(10);
        DB::table("products")->insert([
            'ProductName'=>Str::title($ProductName),
            'slug'=>Str::slug($ProductName),
            'ProductDescription'=>Str::random(15),
            'Price'=>rand(10,2000)/10,
        ]);
        }
    }
}
