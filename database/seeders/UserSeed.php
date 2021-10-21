<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'name'=>'admin',
                'email'=>'admin@admin.com',
                'password'=>md5(1),
                'is_Admin'=>1,
            ]);
    }
}
