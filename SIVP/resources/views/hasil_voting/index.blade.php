@extends('layouts.tabler')

@section('content')
    <h1>Daftar Hasil Voting</h1>
    <a href="{{ route('hasil_voting.create') }}">Tambah Hasil Voting</a>
    <table>
        <thead>
            <tr>
                <th>Kategori Voting</th>
                <th>Calon</th>
                <th>Jumlah Suara</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hasilVoting as $hasil)
                <tr>
                    <td>{{ $hasil->kategoriVoting->nama_kategori }}</td>
                    <td>{{ $hasil->calon->nama_calon }}</td>
                    <td>{{ $hasil->jumlah_suara }}</td>
                    <td>
                        <a href="{{ route('hasil_voting.edit', $hasil->id) }}">Edit</a>
                        <form action="{{ route('hasil_voting.destroy', $hasil->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
