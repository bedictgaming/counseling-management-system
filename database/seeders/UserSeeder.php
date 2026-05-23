<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create an Admin Account
        User::create([
            'name' => 'System Admin',
            'email' => 'admin@counseling.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. Create Counselor Accounts
        User::create([
            'name' => 'Maria Santos (Counselor)',
            'email' => 'maria@counseling.com',
            'password' => Hash::make('password123'),
            'role' => 'counselor',
        ]);

        User::create([
            'name' => 'Juan Dela Cruz (Counselor)',
            'email' => 'juan@counseling.com',
            'password' => Hash::make('password123'),
            'role' => 'counselor',
        ]);

        // 3. Create Student Accounts
        User::create([
            'name' => 'Mark Cruz (Student)',
            'email' => 'mark@student.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);

        User::create([
            'name' => 'Sarah Gomez (Student)',
            'email' => 'sarah@student.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);
    }
}