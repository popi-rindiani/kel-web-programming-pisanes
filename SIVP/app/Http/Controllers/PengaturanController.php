<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    // Menampilkan semua pengaturan
    public function index()
    {
        // Ambil semua data pengaturan
        $pengaturan = Pengaturan::all();

        // Kirim ke view
        return view('pengguna.index', compact('pengaturan'));
    }

    // Fungsi untuk menambah pengaturan
    public function create()
    {
        return view('pengguna.create'); // Ganti dengan nama view sesuai kebutuhan
    }

    // Fungsi untuk menyimpan pengaturan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengaturan' => 'required|string|max:255',
            'nilai_pengaturan' => 'required|string|max:255',
        ]);

        Pengaturan::create($request->all());

        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil ditambahkan!');
    }

    // Fungsi untuk mengedit pengaturan
    public function edit(Pengaturan $pengaturan)
    {
        return view('pengguna.edit', compact('pengaturan'));
    }

    // Fungsi untuk memperbarui pengaturan
    public function update(Request $request, Pengaturan $pengaturan)
    {
        $request->validate([
            'nama_pengaturan' => 'required|string|max:255',
            'nilai_pengaturan' => 'required|string|max:255',
        ]);

        $pengaturan->update($request->all());

        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil diperbarui!');
    }

    // Fungsi untuk menghapus pengaturan
    public function destroy(Pengaturan $pengaturan)
    {
        $pengaturan->delete();
        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil dihapus!');
    }
}
