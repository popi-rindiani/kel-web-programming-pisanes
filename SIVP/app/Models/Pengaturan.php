<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;

    protected $table = 'pengaturan'; // Nama tabel
    protected $fillable = ['nama_pengaturan', 'nilai']; // Kolom yang bisa diisi
}
