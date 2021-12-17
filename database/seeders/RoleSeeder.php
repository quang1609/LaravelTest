<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 1,
            'name' => 'Admin'
         ]);
         DB::table('roles')->insert([
            'role' => 2,
            'name' => 'Staff'
         ]);
         DB::table('roles')->insert([
            'role' => 3,
            'name' => 'User'
         ]);
    }
}
