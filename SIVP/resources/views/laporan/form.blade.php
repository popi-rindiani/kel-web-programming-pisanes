@extends('layouts.app')

@section('content')
<h1>{{ isset($laporan) ? 'Edit Laporan' : 'Tambah Laporan' }}</h1>

<form action="{{ isset($laporan) ? route('laporan.update', $laporan->id) : route('laporan.store') }}" method="POST">
    @csrf
    @if(isset($laporan))
        @method('PUT')
    @endif

    <div class="form-group mb-3">
        <label for="judul_laporan">Judul Laporan</label>
        <input type="text" name="judul_laporan" id="judul_laporan" class="form-control" value="{{ old('judul_laporan', $laporan->judul_laporan ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label for="isi_laporan">Isi Laporan</label>
        <textarea name="isi_laporan" id="isi_laporan" class="form-control">{{ old('isi_laporan', $laporan->isi_laporan ?? '') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($laporan) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
