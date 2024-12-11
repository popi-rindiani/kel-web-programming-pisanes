@extends('layouts.app')

@section('content')
<h1>{{ isset($hasilVoting) ? 'Edit Hasil Voting' : 'Tambah Hasil Voting' }}</h1>

<form action="{{ isset($hasilVoting) ? route('hasil_voting.update', $hasilVoting->id) : route('hasil_voting.store') }}" method="POST">
    @csrf
    @if(isset($hasilVoting))
        @method('PUT')
    @endif

    <div class="form-group mb-3">
        <label for="pemilih_id">Pemilih</label>
        <select name="pemilih_id" id="pemilih_id" class="form-control">
            @foreach($pemilih as $p)
                <option value="{{ $p->id }}" {{ old('pemilih_id', $hasilVoting->pemilih_id ?? '') == $p->id ? 'selected' : '' }}>
                    {{ $p->nama_pemilih }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="calon_id">Calon</label>
        <select name="calon_id" id="calon_id" class="form-control">
            @foreach($calon as $c)
                <option value="{{ $c->id }}" {{ old('calon_id', $hasilVoting->calon_id ?? '') == $c->id ? 'selected' : '' }}>
                    {{ $c->nama_calon }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="kategori_voting">Kategori Voting</label>
        <input type="text" name="kategori_voting" id="kategori_voting" class="form-control" value="{{ old('kategori_voting', $hasilVoting->kategori_voting ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label for="status_voting">Status Voting</label>
        <input type="number" name="status_voting" id="status_voting" class="form-control" value="{{ old('status_voting', $hasilVoting->status_voting ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($hasilVoting) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
