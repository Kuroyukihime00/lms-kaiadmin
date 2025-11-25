<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityLogSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('activity_logs')->insert([
            [
                'user_id' => 1,
                'activity' => 'Login ke sistem',
                'ip_address' => '127.0.0.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'activity' => 'Melihat materi Pemrograman Dasar',
                'ip_address' => '127.0.0.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'activity' => 'Mengikuti kelas Struktur Data',
                'ip_address' => '192.168.1.10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
