<?php

namespace App\Http\Controllers;

use App\Http\Requests\VotingRequest;
use App\Models\Voting;

class VotingController extends Controller
{
    public function index()
    {
        $voting = Voting::all();
        return view('voting.index', compact('voting'));
    }

    public function create()
    {
        return view('voting.form');
    }

    public function store(VotingRequest $request)
    {
        Voting::create($request->validated());
        return redirect()->route('voting.index')->with('success', 'Voting berhasil ditambahkan!');
    }

    public function edit(Voting $voting)
    {
        return view('voting.form', compact('voting'));
    }

    public function update(VotingRequest $request, Voting $voting)
    {
        $voting->update($request->validated());
        return redirect()->route('voting.index')->with('success', 'Voting berhasil diperbarui!');
    }

    public function destroy(Voting $voting)
    {
        $voting->delete();
        return redirect()->route('voting.index')->with('success', 'Voting berhasil dihapus!');
    }
}
