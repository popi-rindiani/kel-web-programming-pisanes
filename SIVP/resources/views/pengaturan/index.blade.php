@extends('layouts.app')

@section('content')
<h1>Daftar Pengaturan</h1>

<a href="{{ route('pengaturan.create') }}" class="btn btn-primary mb-3">Tambah Pengaturan</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Pengaturan</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaturan as $p)
            <tr>
                <td>{{ $p->nama_pengaturan }}</td>
                <td>{{ $p->nilai_pengaturan }}</td>
                <td>
                    <a href="{{ route('pengaturan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pengaturan.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengaturan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
