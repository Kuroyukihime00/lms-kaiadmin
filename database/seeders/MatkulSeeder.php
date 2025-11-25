<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('matkul')->insert([
            [
                'kode' => 'IF101',
                'nama' => 'Pemrograman Dasar',
                'sks' => 3,
                'semester' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'IF202',
                'nama' => 'Basis Data',
                'sks' => 3,
                'semester' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'IF303',
                'nama' => 'Struktur Data',
                'sks' => 3,
                'semester' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
