<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memanggil semua seeder
        $this->call([
            PenggunaSeeder::class,
            CalonSeeder::class,
            PemilihSeeder::class,
            LaporanSeeder::class,
            PengaturanSeeder::class,
            KategoriVotingSeeder::class,
            HasilVotingSeeder::class,
            VotingSeeder::class,
        ]);
    }
}
