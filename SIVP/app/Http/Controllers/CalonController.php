<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalonRequest;
use App\Models\Calon;

class CalonController extends Controller
{
    public function index()
    {
        $calon = Calon::all();
        return view('calon.index', compact('calon'));
    }

    public function create()
    {
        return view('calon.form');
    }

    public function store(CalonRequest $request)
    {
        Calon::create($request->validated());
        return redirect()->route('calon.index')->with('success', 'Calon berhasil ditambahkan!');
    }

    public function edit(Calon $calon)
    {
        return view('calon.form', compact('calon'));
    }

    public function update(CalonRequest $request, Calon $calon)
    {
        $calon->update($request->validated());
        return redirect()->route('calon.index')->with('success', 'Calon berhasil diperbarui!');
    }

    public function destroy(Calon $calon)
    {
        $calon->delete();
        return redirect()->route('calon.index')->with('success', 'Calon berhasil dihapus!');
    }
}
