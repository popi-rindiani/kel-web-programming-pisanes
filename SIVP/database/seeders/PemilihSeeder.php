<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemilihSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama
        DB::table('pemilih')->delete();

        // Menambahkan data pemilih baru
        DB::table('pemilih')->insert([
            ['nama_pemilih' => 'John Doe', 'email' => 'john@example.com', 'alamat' => 'Jl. Merdeka', 'no_telepon' => '081234567890', 'status_voting' => 'belum'],
            ['nama_pemilih' => 'Jane Doe', 'email' => 'jane@example.com', 'alamat' => 'Jl. Sudirman', 'no_telepon' => '081987654321', 'status_voting' => 'sudah'],
            ['nama_pemilih' => 'Michael Smith', 'email' => 'michael@example.com', 'alamat' => 'Jl. Raya', 'no_telepon' => '085123456789', 'status_voting' => 'belum'],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ]);
    }
}
