@extends('layouts.tabler')

@section('content')
<div class="container my-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Tambah Pemilih</h1>
        <a href="{{ route('pemilih.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Form Section -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('pemilih.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_pemilih" class="form-label">Nama Pemilih</label>
                    <input type="text" name="nama_pemilih" id="nama_pemilih" class="form-control" placeholder="Masukkan nama pemilih" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan alamat pemilih" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="Masukkan nomor telepon" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email pemilih" required>
                </div>
                <div class="mb-3">
                    <label for="status_voting" class="form-label">Status Voting</label>
                    <select name="status_voting" id="status_voting" class="form-select">
                        <option value="sudah">Sudah</option>
                        <option value="belum">Belum</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
