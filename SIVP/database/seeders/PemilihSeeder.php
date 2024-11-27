<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class PemilihSeeder extends Seeder
{
    public function run()
    {
        DB::table('pemilih')->insert([
            [
                'nama_pemilih' => 'John Doe',
                'alamat' => 'Jl. Merdeka No. 1',
                'no_telepon' => '081234567890',
                'email' => 'johndoe@example.com',
                'status_voting' => 'belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemilih' => 'Jane Doe',
                'alamat' => 'Jl. Sudirman No. 10',
                'no_telepon' => '081987654321',
                'email' => 'janedoe@example.com',
                'status_voting' => 'sudah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemilih' => 'Michael Smith',
                'alamat' => 'Jl. Raya No. 5',
                'no_telepon' => '085123456789',
                'email' => 'michael@example.com',
                'status_voting' => 'belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemilih' => 'Sarah Johnson',
                'alamat' => 'Jl. Pahlawan No. 7',
                'no_telepon' => '082112233445',
                'email' => 'sarah@example.com',
                'status_voting' => 'sudah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemilih' => 'David Lee',
                'alamat' => 'Jl. Merdeka No. 8',
                'no_telepon' => '081233445566',
                'email' => 'david@example.com',
                'status_voting' => 'belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
