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
            VotingSeeder::class,
            KategoriVotingSeeder::class,
            LaporanSeeder::class,
            HasilVotingSeeder::class,
            PengaturanSeeder::class,
        ]);
    }
}
