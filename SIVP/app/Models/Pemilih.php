<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    use HasFactory;

    protected $table = 'pemilih'; // Nama tabel
    protected $fillable = ['nama_pemilih', 'alamat', 'no_telepon', 'email', 'status_voting']; // Kolom yang bisa diisi

    // Relasi ke tabel voting
    public function voting()
    {
        return $this->hasMany(Voting::class, 'pemilih_id');
    }
}
