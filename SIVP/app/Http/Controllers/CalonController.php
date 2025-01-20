<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CalonController extends Controller
{
    public function index()
    {
        $calon = Calon::all();
        return view('calon.index', compact('calon'));
    }

    public function create()
    {
        return view('calon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_calon' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required|string',
            'kategori' => 'required|in:RT,RW',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $path = $request->file('foto')->store('calon', 'public');

        Calon::create([
            'nama_calon' => $request->nama_calon,
            'foto' => $path,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'status' => $request->status,
        ]);

        return redirect()->route('calon.index')->with('success', 'Calon berhasil ditambahkan.');
    }

    public function show(Calon $calon)
    {
        return view('calon.show', compact('calon'));
    }

    public function edit(Calon $calon)
    {
        return view('calon.edit', compact('calon'));
    }

    public function update(Request $request, Calon $calon)
    {
        $request->validate([
            'nama_calon' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required|string',
            'kategori' => 'required|in:RT,RW',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        if ($request->hasFile('foto')) {
            if ($calon->foto) {
                Storage::disk('public')->delete($calon->foto);
            }
            $path = $request->file('foto')->store('calon', 'public');
            $calon->foto = $path;
        }

        $calon->update([
            'nama_calon' => $request->nama_calon,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'status' => $request->status,
        ]);

        return redirect()->route('calon.index')->with('success', 'Calon berhasil diupdate.');
    }

    public function destroy(Calon $calon)
    {
        if ($calon->foto) {
            Storage::disk('public')->delete($calon->foto);
        }
        $calon->delete();

        return redirect()->route('calon.index')->with('success', 'Calon berhasil dihapus.');
    }
}
