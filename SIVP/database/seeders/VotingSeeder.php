<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class VotingSeeder extends Seeder
{
    public function run()
    {
        DB::table('voting')->insert([
            [
                'pemilih_id' => 1, // ID dari pemilih John Doe
                'calon_id' => 1,   // ID dari calon RT 1
                'kategori_voting' => 'RT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pemilih_id' => 2, // ID dari pemilih Jane Doe
                'calon_id' => 2,   // ID dari calon RT 2
                'kategori_voting' => 'RT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pemilih_id' => 3, // ID dari pemilih Michael Smith
                'calon_id' => 3,   // ID dari calon RW 1
                'kategori_voting' => 'RW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pemilih_id' => 4, // ID dari pemilih Sarah Johnson
                'calon_id' => 4,   // ID dari calon RW 2
                'kategori_voting' => 'RW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pemilih_id' => 5, // ID dari pemilih David Lee
                'calon_id' => 5,   // ID dari calon RT 3
                'kategori_voting' => 'RT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
