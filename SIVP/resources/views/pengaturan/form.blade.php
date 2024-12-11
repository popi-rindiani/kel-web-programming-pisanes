@extends('layouts.app')

@section('content')
<h1>{{ isset($pengaturan) ? 'Edit Pengaturan' : 'Tambah Pengaturan' }}</h1>

<form action="{{ isset($pengaturan) ? route('pengaturan.update', $pengaturan->id) : route('pengaturan.store') }}" method="POST">
    @csrf
    @if(isset($pengaturan))
        @method('PUT') <!-- Jika sedang edit, gunakan metode PUT -->
    @endif

    <div class="form-group">
        <label for="nama_pengaturan">Nama Pengaturan</label>
        <input type="text" name="nama_pengaturan" id="nama_pengaturan" class="form-control" value="{{ old('nama_pengaturan', $pengaturan->nama_pengaturan ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="nilai_pengaturan">Nilai Pengaturan</label>
        <input type="text" name="nilai_pengaturan" id="nilai_pengaturan" class="form-control" value="{{ old('nilai_pengaturan', $pengaturan->nilai_pengaturan ?? '') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($pengaturan) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
