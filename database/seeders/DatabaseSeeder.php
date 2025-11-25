<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        // Generate 50 mahasiswa
        User::factory()
            ->count(50)
            ->student()
            ->create();

        // Generate 10 dosen
        User::factory()
            ->count(10)
            ->lecturer()
            ->create();

        $this->call([
        UserSeeder::class,
        ClassSeeder::class,
        MatkulSeeder::class,
        EnrollmentSeeder::class,
        ActivityLogSeeder::class,
        ]);
    }
}
