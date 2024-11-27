<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalonSeeder extends Seeder
{
    public function run()
    {
        DB::table('calon')->insert([
            [
                'nama_calon' => 'Calon RT 1',
                'foto' => null,
                'deskripsi' => 'Calon RT terbaik',
                'kategori' => 'RT',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_calon' => 'Calon RT 2',
                'foto' => null,
                'deskripsi' => 'Calon RT dengan pengalaman',
                'kategori' => 'RT',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_calon' => 'Calon RW 1',
                'foto' => null,
                'deskripsi' => 'Calon RW dengan visi baru',
                'kategori' => 'RW',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_calon' => 'Calon RW 2',
                'foto' => null,
                'deskripsi' => 'Calon RW yang peduli lingkungan',
                'kategori' => 'RW',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_calon' => 'Calon RT 3',
                'foto' => null,
                'deskripsi' => 'Calon RT dengan program pembangunan',
                'kategori' => 'RT',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
