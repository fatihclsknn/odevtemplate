<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<10;$i++){
        DB::table('contacts')->insert([
             'Name' => Str::random(10),
            'Email' => Str::random(10).'@gmail.com',
            'Phone'=>Str::random(11),
            'Message'=>Str::random(255),
        ]);
        }
    }
}
