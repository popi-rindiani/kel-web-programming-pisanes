@extends('layouts.app')

@section('content')
<h1>Daftar Hasil Voting</h1>

<a href="{{ route('hasil_voting.create') }}" class="btn btn-primary mb-3">Tambah Hasil Voting</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Pemilih</th>
            <th>Nama Calon</th>
            <th>Kategori Voting</th>
            <th>Status Voting</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hasilVoting as $hv)
            <tr>
                <td>{{ $hv->pemilih->nama_pemilih }}</td>
                <td>{{ $hv->calon->nama_calon }}</td>
                <td>{{ $hv->kategori_voting }}</td>
                <td>{{ $hv->status_voting == 1 ? 'Sukses' : 'Gagal' }}</td>
                <td>
                    <a href="{{ route('hasil_voting.edit', $hv->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('hasil_voting.destroy', $hv->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
