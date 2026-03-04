<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@example.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Staff/Kasir',
                'email' => 'staff@example.com',
                'password' => Hash::make('12345'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}