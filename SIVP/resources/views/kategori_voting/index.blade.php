@extends('layouts.app')

@section('content')
<h1>Daftar Kategori Voting</h1>

<a href="{{ route('kategori_voting.create') }}" class="btn btn-primary mb-3">Tambah Kategori Voting</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kategoriVoting as $k)
            <tr>
                <td>{{ $k->nama_kategori }}</td>
                <td>
                    <a href="{{ route('kategori_voting.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kategori_voting.destroy', $k->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori voting ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
