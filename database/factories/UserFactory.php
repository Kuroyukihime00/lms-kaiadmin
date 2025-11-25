<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), 
            'role' => 'student', // default student
            'remember_token' => Str::random(10),
        ];
    }

    // State khusus mahasiswa
    public function student()
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'student',
        ]);
    }

    // State khusus dosen
    public function lecturer()
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'lecturer',
        ]);
    }
}
