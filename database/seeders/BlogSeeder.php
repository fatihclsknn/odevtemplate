<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        for ($i=0;$i<8;$i++){
            $BlogTitle=$faker->sentence(2);
            $Blog = Blog::create([
                'Blog_Title'=>Str::title($BlogTitle),
                'Blog_content'=>$faker->paragraph(5),
                'date'=>$faker->date(),

            ]);
        }

    }
}
