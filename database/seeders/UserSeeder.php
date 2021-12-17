<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'quangbn1609@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 1,
            'active' => 0
         ]);
    }
}
