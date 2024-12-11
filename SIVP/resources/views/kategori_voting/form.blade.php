@extends('layouts.app')

@section('content')
<h1>{{ isset($kategoriVoting) ? 'Edit Kategori Voting' : 'Tambah Kategori Voting' }}</h1>

<form action="{{ isset($kategoriVoting) ? route('kategori_voting.update', $kategoriVoting->id) : route('kategori_voting.store') }}" method="POST">
    @csrf
    @if(isset($kategoriVoting))
        @method('PUT')
    @endif

    <div class="form-group mb-3">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ old('nama_kategori', $kategoriVoting->nama_kategori ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($kategoriVoting) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
