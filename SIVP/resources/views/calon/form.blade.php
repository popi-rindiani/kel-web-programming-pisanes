@extends('layouts.app')

@section('content')
<h1>{{ isset($calon) ? 'Edit Calon' : 'Tambah Calon' }}</h1>

<form action="{{ isset($calon) ? route('calon.update', $calon->id) : route('calon.store') }}" method="POST">
    @csrf
    @if(isset($calon))
        @method('PUT')
    @endif

    <div class="form-group mb-3">
        <label for="nama_calon">Nama Calon</label>
        <input type="text" name="nama_calon" id="nama_calon" class="form-control" value="{{ old('nama_calon', $calon->nama_calon ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori', $calon->kategori ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="1" {{ old('status', $calon->status ?? '') == 1 ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ old('status', $calon->status ?? '') == 0 ? 'selected' : '' }}>Non-Aktif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($calon) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
