@extends('layouts.tabler')

@section('content')
<h1>Tambah Pemilih</h1>

<form action="{{ route('pemilih.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Pemilih</label>
        <input type="text" name="nama_pemilih" class="form-control" value="{{ $pemilih->nama_pemilih }}" required>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="no_telepon" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Status Voting</label>
        <select name="status_voting" class="form-control">
            <option value="sudah">Sudah</option>
            <option value="belum">Belum</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
