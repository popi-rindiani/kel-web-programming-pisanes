<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    use HasFactory;

    protected $table = 'calon'; // Nama tabel
    protected $fillable = ['nama_calon', 'foto', 'deskripsi', 'kategori', 'status']; // Kolom yang bisa diisi

    // Relasi ke tabel hasil_voting
    public function hasilVoting()
    {
        return $this->hasOne(Calon::class, 'calon_id');
    }
}
