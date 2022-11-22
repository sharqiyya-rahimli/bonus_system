<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $password;
        DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);
        
    }
}
