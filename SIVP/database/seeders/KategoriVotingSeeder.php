<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriVoting;

class KategoriVotingSeeder extends Seeder
{
    public function run()
    {
        KategoriVoting::create([
            'kategori' => 'Pemilihan Ketua RT',
        ]);

        KategoriVoting::create([
            'kategori' => 'Pemilihan Ketua RW',
        ]);

        KategoriVoting::create([
            'kategori' => 'Pemilihan Anggota DPR',
        ]);

        KategoriVoting::create([
            'kategori' => 'Pemilihan Presiden',
        ]);

        KategoriVoting::create([
            'kategori' => 'Pemilihan Bupati',
        ]);
    }
}
