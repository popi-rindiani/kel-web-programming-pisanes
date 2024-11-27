<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\Clock\now;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengguna')->insert([
            [
                'nama' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Masyarakat 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
                'role' => 'masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Masyarakat 2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
                'role' => 'masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Masyarakat 3',
                'email' => 'user3@example.com',
                'password' => Hash::make('password'),
                'role' => 'masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Masyarakat 4',
                'email' => 'user4@example.com',
                'password' => Hash::make('password'),
                'role' => 'masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
