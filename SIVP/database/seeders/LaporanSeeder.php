<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        DB::table('laporan')->insert([
            ['judul_laporan' => 'Laporan Pemilu RT 2024', 'file_path' => 'laporan/pemilu_rt.pdf', 'tanggal_laporan' => '2024-11-01', 'created_at' => now(), 'updated_at' => now()],
            ['judul_laporan' => 'Laporan Pemilu RW 2024', 'file_path' => 'laporan/pemilu_rw.pdf', 'tanggal_laporan' => '2024-11-02', 'created_at' => now(), 'updated_at' => now()],
            ['judul_laporan' => 'Laporan Pemilu DPD 2024', 'file_path' => 'laporan/pemilu_dpd.pdf', 'tanggal_laporan' => '2024-11-03', 'created_at' => now(), 'updated_at' => now()],
            ['judul_laporan' => 'Laporan Pemilu Presiden 2024', 'file_path' => 'laporan/pemilu_presiden.pdf', 'tanggal_laporan' => '2024-11-04', 'created_at' => now(), 'updated_at' => now()],
            ['judul_laporan' => 'Laporan Hasil Survei 2024', 'file_path' => 'laporan/survei_hasil.pdf', 'tanggal_laporan' => '2024-11-05', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
