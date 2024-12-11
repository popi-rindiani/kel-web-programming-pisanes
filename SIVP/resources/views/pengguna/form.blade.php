@extends('layouts.app')

@section('content')
<h1>{{ isset($pengguna) ? 'Edit Pengguna' : 'Tambah Pengguna' }}</h1>

<form action="{{ isset($pengguna) ? route('pengguna.update', $pengguna->id) : route('pengguna.store') }}" method="POST">
    @csrf
    @if(isset($pengguna))
        @method('PUT')
    @endif

    <div class="form-group mb-3">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $pengguna->nama ?? '') }}" required>
    </div>

    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $pengguna->email ?? '') }}" required>
    </div>

    <div class="form-group mb-3">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-select" required>
            <option value="admin" {{ (old('role', $pengguna->role ?? '') == 'admin') ? 'selected' : '' }}>Admin</option>
            <option value="masyarakat" {{ (old('role', $pengguna->role ?? '') == 'masyarakat') ? 'selected' : '' }}>Masyarakat</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($pengguna) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
