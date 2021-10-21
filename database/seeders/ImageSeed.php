<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=['\assets\img\laptop-24.jpg',
        '\assets\img\tablet-8.jpg',
        '\assets\img\phone-1.jpg',
        '\assets\img\macbook-pro-laravel.png',
        '\assets\img\tv-6.jpg',
        '\assets\img\camera-1.jpg'];
        foreach ($category as $key) {
            DB::table('images')->insert([
                'image_url'=>$key,
            ]);
        }
    }
}
