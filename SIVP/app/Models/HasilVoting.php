<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilVoting extends Model
{
    use HasFactory;

    protected $table = 'hasil_voting';

    protected $fillable = [
        'kategori_voting_id',
        'calon_id',
        'jumlah_suara',
    ];

    // Relasi
    public function kategoriVoting()
    {
        return $this->belongsTo(KategoriVoting::class, 'kategori_voting_id');
    }

    public function calon()
    {
        return $this->belongsTo(Calon::class, 'calon_id');
    }
}
