<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasilVotingSeeder extends Seeder
{
    public function run()
    {
        DB::table('hasil_voting')->insert([
            [
                'kategori_voting_id' => 1, // ID kategori RT
                'calon_id' => 1,          // ID calon RT 1
                'jumlah_suara' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_voting_id' => 1, // ID kategori RT
                'calon_id' => 2,          // ID calon RT 2
                'jumlah_suara' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_voting_id' => 2, // ID kategori RW
                'calon_id' => 3,          // ID calon RW 1
                'jumlah_suara' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_voting_id' => 2, // ID kategori RW
                'calon_id' => 4,          // ID calon RW 2
                'jumlah_suara' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_voting_id' => 1, // ID kategori RT
                'calon_id' => 5,          // ID calon RT 3
                'jumlah_suara' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
