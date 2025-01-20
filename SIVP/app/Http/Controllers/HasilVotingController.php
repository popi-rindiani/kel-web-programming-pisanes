<?php

namespace App\Http\Controllers;

use App\Models\HasilVoting;
use App\Models\KategoriVoting;
use App\Models\Calon;
use Illuminate\Http\Request;

class HasilVotingController extends Controller
{
    // Menampilkan daftar hasil voting
    public function index()
    {
        $hasilVoting = HasilVoting::with(['kategoriVoting', 'calon'])->get();
        return view('hasil_voting.index', compact('hasilVoting'));
    }

    // Menampilkan form untuk membuat hasil voting baru
    public function create()
    {
        $kategoriVoting = KategoriVoting::all();
        $calons = Calon::all();
        return view('hasil_voting.create', compact('kategoriVoting', 'calons'));
    }

    // Menyimpan hasil voting baru
    public function store(Request $request)
    {
        $request->validate([
            'kategori_voting_id' => 'required|exists:kategori_voting,id',
            'calon_id' => 'required|exists:calon,id',
            'jumlah_suara' => 'required|integer|min:0',
        ]);

        HasilVoting::create($request->all());

        return redirect()->route('hasil_voting.index')->with('success', 'Data berhasil disimpan!');
    }

    // Menampilkan form untuk mengedit hasil voting
    public function edit($id)
    {
        $hasilVoting = HasilVoting::findOrFail($id);
        $kategoriVoting = KategoriVoting::all();
        $calons = Calon::all();

        return view('hasil_voting.edit', compact('hasilVoting', 'kategoriVoting', 'calons'));
    }

    // Mengupdate hasil voting
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori_voting_id' => 'required|exists:kategori_voting,id',
            'calon_id' => 'required|exists:calon,id',
            'jumlah_suara' => 'required|integer|min:0',
        ]);

        $hasilVoting = HasilVoting::findOrFail($id);
        $hasilVoting->update($request->all());

        return redirect()->route('hasil_voting.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus hasil voting
    public function destroy($id)
    {
        $hasilVoting = HasilVoting::findOrFail($id);
        $hasilVoting->delete();

        return redirect()->route('hasil_voting.index')->with('success', 'Data berhasil dihapus!');
    }
}
