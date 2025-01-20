<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    use HasFactory;

    protected $table = 'pemilih';

    protected $fillable = [
        'nama_pemilih',
        'alamat',
        'no_telepon',
        'email',
        'status_voting',
    ];

    // Relasi One-to-Many dengan Voting
    public function voting()
    {
        return $this->hasMany(Voting::class);
    }

        
    
}
