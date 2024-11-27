<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    use HasFactory;

    protected $table = 'voting'; // Nama tabel
    protected $fillable = ['pemilih_id', 'calon_id', 'kategori_voting']; // Kolom yang bisa diisi

    // Relasi ke tabel pemilih
    public function pemilih()
    {
        return $this->belongsTo(Pemilih::class, 'pemilih_id');
    }

    // Relasi ke tabel calon
    public function calon()
    {
        return $this->belongsTo(Calon::class, 'calon_id');
    }
}
