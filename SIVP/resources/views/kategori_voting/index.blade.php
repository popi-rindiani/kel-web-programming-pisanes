@extends('layouts.tabler')

@section('content')
<div class="container my-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Daftar Kategori Voting</h1>
        <a href="{{ route('kategori_voting.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Tambah Kategori
        </a>
    </div>

    <!-- Alert Success -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Table Section -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Daftar Kategori Voting</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategoriVotings as $kategoriVoting)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kategoriVoting->nama_kategori }}</td>
                        <td>{{ $kategoriVoting->deskripsi }}</td>
                        <td>
                            <a href="{{ route('kategori_voting.show', $kategoriVoting->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                            <a href="{{ route('kategori_voting.edit', $kategoriVoting->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('kategori_voting.destroy', $kategoriVoting->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
