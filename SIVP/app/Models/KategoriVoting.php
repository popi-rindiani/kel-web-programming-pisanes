<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriVoting extends Model
{
    use HasFactory;

    protected $table = 'kategori_voting';

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];
}
