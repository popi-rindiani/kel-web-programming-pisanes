<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class PengaturanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengaturan')->insert([
            [
                'nama_pengaturan' => 'Tanggal Pemilu',
                'nilai' => '2024-12-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pengaturan' => 'Status Voting',
                'nilai' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pengaturan' => 'Durasi Pemilihan',
                'nilai' => '8 Jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pengaturan' => 'Pendaftaran Pemilih',
                'nilai' => '2024-11-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pengaturan' => 'Batas Usia Pemilih',
                'nilai' => '17 Tahun',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
