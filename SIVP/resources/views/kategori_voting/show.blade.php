@extends('layouts.tabler')

@section('content')
<div class="container my-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Detail Kategori Voting</h1>
        <a href="{{ route('kategori_voting.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Card Section for Detail -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Informasi Kategori Voting</h3>
        </div>
        <div class="card-body">
            <!-- Nama Kategori -->
            <div class="mb-3">
                <strong>Nama Kategori:</strong>
                <p class="mb-0">{{ $kategoriVoting->nama_kategori }}</p>
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <strong>Deskripsi:</strong>
                <p class="mb-0">{{ $kategoriVoting->deskripsi }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
