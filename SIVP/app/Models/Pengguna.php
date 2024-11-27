<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna'; // Nama tabel
    protected $fillable = ['nama', 'email', 'password', 'role']; // Kolom yang bisa diisi
}
