<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class KategoriVotingSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategori_voting')->insert([
            ['nama_kategori' => 'RT', 'deskripsi' => 'Pemilihan Ketua RT', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'RW', 'deskripsi' => 'Pemilihan Ketua RW', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'DPR', 'deskripsi' => 'Pemilihan Anggota DPR', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Presiden', 'deskripsi' => 'Pemilihan Presiden', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Bupati', 'deskripsi' => 'Pemilihan Bupati', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
