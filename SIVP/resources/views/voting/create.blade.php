@extends('layouts.tabler')
@section('content')

<h1>Tambah Voting</h1>

<form action="{{ route('voting.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Pemilih</label>
        <select name="pemilih_id" class="form-control" required>
            @foreach ($pemilih as $p)
                <option value="{{ $p->id }}">{{ $p->nama_pemilih }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Calon</label>
        <select name="calon_id" class="form-control" required>
            @foreach ($calon as $c)
                <option value="{{ $c->id }}">{{ $c->nama_calon }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Kategori Voting</label>
        <select name="kategori_voting" class="form-control">
            <option value="RT">RT</option>
            <option value="RW">RW</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
