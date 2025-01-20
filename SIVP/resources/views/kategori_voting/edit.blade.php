@extends('layouts.tabler')

@section('content')
<div class="container my-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Kategori Voting</h1>
    </div>

    <!-- Form Section -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Form Edit Kategori Voting</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori_voting.update', $kategoriVoting->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama Kategori -->
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" value="{{ old('nama_kategori', $kategoriVoting->nama_kategori) }}" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" required>{{ old('deskripsi', $kategoriVoting->deskripsi) }}</textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Perbarui
                </button>
                <a href="{{ route('kategori_voting.index') }}" class="btn btn-secondary ms-2">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
