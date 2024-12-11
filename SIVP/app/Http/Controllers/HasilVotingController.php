<?php

namespace App\Http\Controllers;

use App\Models\HasilVoting;
use App\Models\Pemilih;
use App\Models\Calon;
use Illuminate\Http\Request;

class HasilVotingController extends Controller
{
    // Menampilkan Daftar Hasil Voting
    public function index()
    {
        // Ambil data hasil voting beserta relasi dengan pemilih dan calon
        $hasilVoting = HasilVoting::with(['pemilih', 'calon'])->get();
        return view('hasil_voting.index', compact('hasilVoting'));
    }

    // Menampilkan Form untuk Tambah/Edit Hasil Voting
    public function form($id = null)
    {
        // Ambil data hasil voting jika ID diberikan
        $hasilVoting = $id ? HasilVoting::findOrFail($id) : null;

        // Ambil data pemilih dan calon untuk dropdown di form
        $pemilih = Pemilih::all();
        $calon = Calon::all();

        // Tampilkan view form
        return view('hasil_voting.form', compact('hasilVoting', 'pemilih', 'calon'));
    }

    // Menyimpan Data Hasil Voting
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pemilih_id' => 'required|exists:pemilih,id',
            'calon_id' => 'required|exists:calon,id',
            'kategori_voting' => 'required|string|max:255',
            'status_voting' => 'required|boolean',
        ]);

        HasilVoting::create($validated);

        return redirect()->route('hasil_voting.index')->with('success', 'Hasil voting berhasil ditambahkan!');
    }

    // Mengupdate Data Hasil Voting
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'pemilih_id' => 'required|exists:pemilih,id',
            'calon_id' => 'required|exists:calon,id',
            'kategori_voting' => 'required|string|max:255',
            'status_voting' => 'required|boolean',
        ]);

        $hasilVoting = HasilVoting::findOrFail($id);
        $hasilVoting->update($validated);

        return redirect()->route('hasil_voting.index')->with('success', 'Hasil voting berhasil diperbarui!');
    }

    // Menghapus Data Hasil Voting
    public function destroy($id)
    {
        $hasilVoting = HasilVoting::findOrFail($id);
        $hasilVoting->delete();

        return redirect()->route('hasil_voting.index')->with('success', 'Data berhasil dihapus!');
    }
}

