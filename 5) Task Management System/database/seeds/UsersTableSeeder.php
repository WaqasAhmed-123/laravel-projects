<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alvin Gordin',
            'contact' => '0000-0000000',
            'email' => 'alvingordin@gmail.com',
            'password' => bcrypt('123'),
            'role' => 1,
            'is_active' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => null
        ]);
    }
}
