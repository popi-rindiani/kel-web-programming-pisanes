<?php

namespace App\Http\Controllers;

use App\Models\KategoriVoting;
use Illuminate\Http\Request;

class KategoriVotingController extends Controller
{
    public function index()
    {
        $kategoriVotings = KategoriVoting::all();
        return view('kategori_voting.index', compact('kategoriVotings'));
    }

    public function create()
    {
        return view('kategori_voting.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        KategoriVoting::create($request->all());
        return redirect()->route('kategori_voting.index')->with('success', 'Kategori Voting berhasil ditambahkan.');
    }

    public function show(KategoriVoting $kategoriVoting)
    {
        return view('kategori_voting.show', compact('kategoriVoting'));
    }

    public function edit(KategoriVoting $kategoriVoting)
    {
        return view('kategori_voting.edit', compact('kategoriVoting'));
    }

    public function update(Request $request, KategoriVoting $kategoriVoting)
    {
        $request->validate([
            'nama_kategori' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $kategoriVoting->update($request->all());
        return redirect()->route('kategori_voting.index')->with('success', 'Kategori Voting berhasil diperbarui.');
    }

    public function destroy(KategoriVoting $kategoriVoting)
    {
        $kategoriVoting->delete();
        return redirect()->route('kategori_voting.index')->with('success', 'Kategori Voting berhasil dihapus.');
    }
}
