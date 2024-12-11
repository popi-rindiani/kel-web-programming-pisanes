@extends('layouts.app')

@section('content')
<h1>Daftar Voting</h1>

<a href="{{ route('voting.create') }}" class="btn btn-primary mb-3">Tambah Voting</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Pemilih</th>
            <th>Calon</th>
            <th>Kategori Voting</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($voting as $v)
            <tr>
                <td>{{ $v->pemilih->nama_pemilih }}</td>
                <td>{{ $v->calon->nama_calon }}</td>
                <td>{{ $v->kategori_voting }}</td>
                <td>
                    <a href="{{ route('voting.edit', $v->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('voting.destroy', $v->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus voting ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
