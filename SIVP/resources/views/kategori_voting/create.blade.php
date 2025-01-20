@extends('layouts.tabler')

@section('content')
<div class="container my-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Tambah Kategori Voting</h1>
    </div>

    <!-- Form Section -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Kategori Voting</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori_voting.store') }}" method="POST">
                @csrf

                <!-- Nama Kategori -->
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('kategori_voting.index') }}" class="btn btn-secondary ms-2">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
