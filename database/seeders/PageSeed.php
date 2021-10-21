<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
                'page_title'=>"Hakkımızda",
                'slug'=>'hakkimizda',
                'page_content'=>'hakkımızda demo content alanı',
                'page_image_id'=>1,
                'meta_description'=>'demo',
                'meta_keywords'=>'demo',
                'status'=>1,
            ]);

            DB::table('pages')->insert([
                'page_title'=>"İletişim",
                'slug'=>'iletisim',
                'page_content'=>'İletişim demo content alanı',
                'page_image_id'=>1,
                'meta_description'=>'demo',
                'meta_keywords'=>'demo',
                'status'=>1,
            ]);
            
    }
}
