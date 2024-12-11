<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriVotingRequest;
use App\Models\KategoriVoting;

class KategoriVotingController extends Controller
{
    public function index()
    {
        $kategoriVoting = KategoriVoting::all();
        return view('kategori_voting.index', compact('kategoriVoting'));
    }

    public function create()
    {
        return view('kategori_voting.form');
    }

    public function store(KategoriVotingRequest $request)
    {
        KategoriVoting::create($request->validated());
        return redirect()->route('kategori_voting.index')->with('success', 'Kategori Voting berhasil ditambahkan!');
    }

    public function edit(KategoriVoting $kategoriVoting)
    {
        return view('kategori_voting.form', compact('kategoriVoting'));
    }

    public function update(KategoriVotingRequest $request, KategoriVoting $kategoriVoting)
    {
        $kategoriVoting->update($request->validated());
        return redirect()->route('kategori_voting.index')->with('success', 'Kategori Voting berhasil diperbarui!');
    }

    public function destroy(KategoriVoting $kategoriVoting)
    {
        $kategoriVoting->delete();
        return redirect()->route('kategori_voting.index')->with('success', 'Kategori Voting berhasil dihapus!');
    }
}
