@extends('layouts.app')

@section('content')
<h1>Daftar Pemilih</h1>

<a href="{{ route('pemilih.create') }}" class="btn btn-primary mb-3">Tambah Pemilih</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Pemilih</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Status Voting</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pemilih as $p)
            <tr>
                <td>{{ $p->nama_pemilih }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->status_voting }}</td>
                <td>
                    <a href="{{ route('pemilih.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pemilih.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pemilih ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
