@extends('layouts.tabler')

@section('content')
    <h1>Edit Hasil Voting</h1>
    <form action="{{ route('hasil_voting.update', $hasilVoting->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="kategori_voting_id">Kategori Voting</label>
        <select name="kategori_voting_id" id="kategori_voting_id">
            @foreach($kategoriVoting as $kategori)
                <option value="{{ $kategori->id }}" {{ $hasilVoting->kategori_voting_id == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>

        <label for="calon_id">Calon</label>
        <select name="calon_id" id="calon_id">
            @foreach($calons as $calon)
                <option value="{{ $calon->id }}" {{ $hasilVoting->calon_id == $calon->id ? 'selected' : '' }}>
                    {{ $calon->nama_calon }}
                </option>
            @endforeach
        </select>

        <label for="jumlah_suara">Jumlah Suara</label>
        <input type="number" name="jumlah_suara" id="jumlah_suara" value="{{ $hasilVoting->jumlah_suara }}" required>

        <button type="submit">Perbarui</button>
    </form>
@endsection
