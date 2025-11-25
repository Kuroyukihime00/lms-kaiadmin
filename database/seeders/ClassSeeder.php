<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('classes')->insert([
            [
                'name' => 'Kelas A',
                'year' => 2025,
                'major' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kelas B',
                'year' => 2025,
                'major' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
