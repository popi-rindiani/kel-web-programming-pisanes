@extends('layouts.tabler')

@section('content')
<div class="container">
    <a href="{{ route('calon.create') }}" class="btn btn-primary mb-3">Tambah Calon</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Foto</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calon as $item)
                <tr>
                    <td>{{ $item->nama_calon }}</td>
                    <td><img src="{{ asset('storage/' . $item->foto) }}" width="100" alt="Foto"></td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('calon.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('calon.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
