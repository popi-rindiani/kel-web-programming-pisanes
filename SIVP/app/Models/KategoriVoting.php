<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriVoting extends Model
{
    use HasFactory;

    protected $table = 'kategori_voting'; // Nama tabel
    protected $fillable = ['nama_kategori', 'deskripsi']; // Kolom yang bisa diisi

    // Relasi ke tabel hasil_voting
    public function hasilVoting()
    {
        return $this->hasMany(KategoriVoting::class, 'kategori_voting_id');
    }
}
