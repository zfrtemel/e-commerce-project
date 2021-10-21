<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=['Bilgisayar 1','Bilgisayar 2','Bilgisayar 3',
                   'Tablet 1','Tablet 2','Tablet 3',
                    'Telefon3 1','Telefon3 2','Telefon 3',
                    'Ekran Kartı 1','Ekran Kartı 2','Ekran Kartı 3',
                    'Monitör 1','Monitör 2','Monitör 3',
                    'Klavye 1','Klavye 2','Klavye 3'
    ];
        foreach ($products as $key) {
            $slug =Str::slug($key, '-');
            DB::table('products')->insert([
                'title'=>$key,
                'slug'=> $slug,
                'price'=> 75,
                'description'=>$key.'kısa açıklama',
                'featured'=>1,
            ]);

        }
        
        for ($i=1; $i < 7; $i++) { 
            for ($x=1; $x < 4; $x++) { 
                DB::table('product_categories')->insert([
                    'product_id'=>$i,
                    'category_id'=>$i,
            ]);
            }
        }


$sayi=1;

        for ($z=1; $z < 19; $z++) { 
            if ($sayi ==4) {
                $sayi=1;
            }
           

            for ($i=1; $i < 4; $i++) { 
            
                
                
                    DB::table('product_images')->insert([
                        'images_id'=>$sayi,
                        'product_id'=>$z,
                     ]);
            }
            $sayi=$sayi+1;
                
        }
        for ($i=1; $i <5 ; $i++) { 
            DB::table('sliders')->insert([
                        'slider_url'=>'\assets\img\slider.jpg',
                        'slider_order'=>$i,
                     ]);
            
        }

       
    }
}
