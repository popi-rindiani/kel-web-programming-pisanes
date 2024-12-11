<?php

namespace App\Http\Controllers;

use App\Http\Requests\PemilihRequest;
use App\Models\Pemilih;

class PemilihController extends Controller
{
    public function index()
    {
        $pemilih = Pemilih::all();
        return view('pemilih.index', compact('pemilih'));
    }

    public function create()
    {
        return view('pemilih.form');
    }

    public function store(PemilihRequest $request)
    {
        Pemilih::create($request->validated());
        return redirect()->route('pemilih.index')->with('success', 'Pemilih berhasil ditambahkan!');
    }

    public function edit(Pemilih $pemilih)
    {
        return view('pemilih.form', compact('pemilih'));
    }

    public function update(PemilihRequest $request, Pemilih $pemilih)
    {
        $pemilih->update($request->validated());
        return redirect()->route('pemilih.index')->with('success', 'Pemilih berhasil diperbarui!');
    }

    public function destroy(Pemilih $pemilih)
    {
        $pemilih->delete();
        return redirect()->route('pemilih.index')->with('success', 'Pemilih berhasil dihapus!');
    }
}
