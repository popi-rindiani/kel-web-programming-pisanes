<?php

namespace App\Http\Controllers;

use App\Http\Requests\PenggunaRequest;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.index', compact('pengguna'));
    }

    public function create()
    {
        return view('pengguna.form');
    }

    public function store(PenggunaRequest $request)
    {
        Pengguna::create($request->validated());
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function edit(Pengguna $pengguna)
    {
        return view('pengguna.form', compact('pengguna'));
    }

    public function update(PenggunaRequest $request, Pengguna $pengguna)
    {
        $pengguna->update($request->validated());
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil diperbarui!');
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil dihapus!');
    }
}
