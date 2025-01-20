<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    // Menambahkan middleware pada konstruktor
    public function __construct()
    {
        // Hanya pengguna dengan role 'masyarakat' yang bisa mengakses controller ini
        $this->middleware('role:masyarakat');
    }

    public function dashboard()
    {
        return view('masyarakat.dashboard'); // Pastikan Anda memiliki view ini
    }
}
