<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=['Bilgisayar','Telefon','Tablet','Ekran Kartı','Monitör','Klavye'];
        $category=['bilgisayar','telefon','tablet','ekran-karti','monitor','klavye'];
        foreach ($category as $key) {
            $slug =Str::slug($key, '-');
            DB::table('categories')->insert([
                'name'=>$key,
                'slug'=> $slug,
            ]);

        }
    }
}
