@extends('layouts.app')

@section('content')
<h1>Daftar Calon</h1>

<a href="{{ route('calon.create') }}" class="btn btn-primary mb-3">Tambah Calon</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Calon</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($calon as $c)
            <tr>
                <td>{{ $c->nama_calon }}</td>
                <td>{{ $c->kategori }}</td>
                <td>{{ $c->status ? 'Aktif' : 'Non-Aktif' }}</td>
                <td>
                    <a href="{{ route('calon.edit', $c->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('calon.destroy', $c->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus calon ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
