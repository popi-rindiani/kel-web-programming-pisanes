<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    use HasFactory;

    protected $table = 'voting';

    protected $fillable = ['pemilih_id', 'calon_id', 'kategori_voting_id']; // Pastikan kolom ini ada

    public function calon()
    {
        return $this->belongsTo(Calon::class, 'calon_id');
    }

    public function kategoriVoting()
    {
        return $this->belongsTo(KategoriVoting::class, 'kategori_voting_id');
    }

    public function hasilvoting()
    {
        return $this->belongsTo(HasilVoting::class, 'kategori_voting_id');
    }

    public function pemilih()
    {
        return $this->belongsTo(Pemilih::class, 'pemilih_id');
    }
}
