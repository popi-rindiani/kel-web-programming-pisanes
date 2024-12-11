<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaporanRequest;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        return view('laporan.index', compact('laporan'));
    }

    public function create()
    {
        return view('laporan.form');
    }

    public function store(LaporanRequest $request)
    {
        Laporan::create($request->validated());
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditambahkan!');
    }

    public function edit(Laporan $laporan)
    {
        return view('laporan.form', compact('laporan'));
    }

    public function update(LaporanRequest $request, Laporan $laporan)
    {
        $laporan->update($request->validated());
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diperbarui!');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus!');
    }
}
