<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    use HasFactory;
    
    protected $table = 'calon'; // Tentukan nama tabel secara eksplisit

    protected $fillable = [
        'nama_calon',
        'foto',
        'deskripsi',
        'kategori',
        'status',
        'kategori_voting_id', // Menambahkan kolom kategori_voting_id
    ];

    public function kategoriVoting()
    {
        return $this->belongsTo(KategoriVoting::class, 'kategori_voting_id');
    }

    public function voting()
    {
        return $this->hasMany(Voting::class);
    }

}
