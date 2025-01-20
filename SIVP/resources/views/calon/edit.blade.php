@extends('layouts.tabler')

@section('content')
<div class="container">
    <form action="{{ isset($calon) ? route('calon.update', $calon->id) : route('calon.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($calon))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nama_calon" class="form-label">Nama Calon</label>
            <input type="text" name="nama_calon" class="form-control" value="{{ $calon->nama_calon ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
            @if (isset($calon) && $calon->foto)
                <img src="{{ asset('storage/' . $calon->foto) }}" width="100" alt="Foto">
            @endif
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $calon->deskripsi ?? '' }}</textarea>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-control">
                <option value="RT" {{ isset($calon) && $calon->kategori == 'RT' ? 'selected' : '' }}>RT</option>
                <option value="RW" {{ isset($calon) && $calon->kategori == 'RW' ? 'selected' : '' }}>RW</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="aktif" {{ isset($calon) && $calon->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="non-aktif" {{ isset($calon) && $calon->status == 'non-aktif' ? 'selected' : '' }}>Non-aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($calon) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
