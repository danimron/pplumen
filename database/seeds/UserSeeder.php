<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            [
                'npm' => '140810170009',
                'nama' => 'Rizal',
                'password' => Hash::make('aaa'),
                'email' => 'rijal@gmail.com',
                'no_hp' => '08170009',
                'vote' => false
            ],
        	[
                'npm' => '140810170057',
                'nama' => 'Victor',
                'password' => Hash::make('aaa'),
                'email' => 'victor@gmail.com',
                'no_hp' => '08170057',
                'vote' => false
            ],
            [
                'npm' => '140810170061',
                'nama' => 'Dani',
                'password' => Hash::make('aaa'),
                'email' => 'dani@gmail.com',
                'no_hp' => '08170061',
                'vote' => false    
            ]
        ]);
    }
}
