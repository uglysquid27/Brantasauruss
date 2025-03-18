<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 1, // Assuming 1 means admin
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // Encrypt password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
