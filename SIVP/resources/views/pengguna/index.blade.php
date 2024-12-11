@extends('layouts.app')

@section('content')
<h1>Daftar Pengguna</h1>

<a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengguna as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->role }}</td>
                <td>
                    <a href="{{ route('pengguna.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pengguna.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
