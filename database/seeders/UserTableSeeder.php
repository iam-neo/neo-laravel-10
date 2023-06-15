<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => hash::make('password'),
            ],

            //agent
            [
                'name' => 'agent',
                'email' => 'agent@agent.com',
                'role' => 'agent',
                'password' => hash::make('password'),
            ],
            
            //user
            [
                'name' => 'uesr',
                'email' => 'user@user.com',
                'role' => 'user',
                'password' => hash::make('password'),
            ]
            ]);
    }
}
