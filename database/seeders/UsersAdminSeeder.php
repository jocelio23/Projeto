<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UsersAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'secult',
            'email' => 'secult@secult.com',            
            'password' => bcrypt('teste123'),
            'super_usuario' =>('@secult22')
        ]);
    }
}