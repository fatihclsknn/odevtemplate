<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Provider\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::table('products')->truncate();
        for ($i=0;$i<12;$i++){
            $ProductName=$faker->sentence(2);
            $product = Product::create([
                'ProductName'=>Str::title($ProductName),
                'slug'=>Str::slug($ProductName),
                'ProductDescription'=>$faker->sentence(20),
                'Price'=>$faker->randomFloat(2,1,10)

            ]);
        }

    }
}
