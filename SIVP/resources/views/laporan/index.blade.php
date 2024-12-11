@extends('layouts.app')

@section('content')
<h1>Daftar Laporan</h1>

<a href="{{ route('laporan.create') }}" class="btn btn-primary mb-3">Tambah Laporan</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul Laporan</th>
            <th>Isi Laporan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($laporan as $l)
            <tr>
                <td>{{ $l->judul_laporan }}</td>
                <td>{{ $l->isi_laporan }}</td>
                <td>
                    <a href="{{ route('laporan.edit', $l->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('laporan.destroy', $l->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
