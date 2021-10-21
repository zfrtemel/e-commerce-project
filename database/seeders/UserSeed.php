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
                'password'=>'$2y$10$DiNgDT9da9V/kxYaIbNwE.tKyHfegB7XIBdR3RtL86NQvL4MTtKQ.',//12345678
                'is_Admin'=>1,
            ]);
    }
}
