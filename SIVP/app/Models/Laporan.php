<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan'; // Nama tabel
    protected $fillable = ['judul_laporan', 'file_path', 'tanggal_laporan']; // Kolom yang bisa diisi
}
