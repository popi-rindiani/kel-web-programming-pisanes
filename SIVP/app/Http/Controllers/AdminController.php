<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriVoting;
use App\Models\HasilVoting;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $kategoriVoting = KategoriVoting::all(); // Ambil semua kategori voting

        // Ambil hasil voting berdasarkan kategori yang dipilih
        $hasilVoting = HasilVoting::with(['kategoriVoting', 'calon'])
            ->when($request->kategori_voting_id, function ($query) use ($request) {
                $query->where('kategori_voting_id', $request->kategori_voting_id);
            })
            ->get();
    
        return view('admin.dashboard', compact('kategoriVoting', 'hasilVoting'));
        
    }

}
