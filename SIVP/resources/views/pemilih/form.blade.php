@extends('layouts.app')

@section('content')
<h1>{{ isset($pemilih) ? 'Edit Pemilih' : 'Tambah Pemilih' }}</h1>

<form action="{{ isset($pemilih) ? route('pemilih.update', $pemilih->id) : route('pemilih.store') }}" method="POST">
    @csrf
    @if(isset($pemilih))
        @method('PUT')
    @endif

    <div class="form-group mb-3">
        <label for="nama_pemilih">Nama Pemilih</label>
        <input type="text" name="nama_pemilih" id="nama_pemilih" class="form-control" value="{{ old('nama_pemilih', $pemilih->nama_pemilih ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $pemilih->email ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label for="status_voting">Status Voting</label>
        <input type="text" name="status_voting" id="status_voting" class="form-control" value="{{ old('status_voting', $pemilih->status_voting ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($pemilih) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
