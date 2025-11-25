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
        // Admin
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Students
        User::create([
            'name' => 'Mahasiswa Satu',
            'email' => 'student1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);

        User::create([
            'name' => 'Mahasiswa Dua',
            'email' => 'student2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);

        User::create([
            'name' => 'Mahasiswa Tiga',
            'email' => 'student3@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
        ]);

        // Lecturers
        User::create([
            'name' => 'Dosen Satu',
            'email' => 'lecturer1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'lecturer',
        ]);

        User::create([
            'name' => 'Dosen Dua',
            'email' => 'lecturer2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'lecturer',
        ]);
    }
}
