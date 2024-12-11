@extends('layouts.app')

@section('content')
<h1>{{ isset($voting) ? 'Edit Voting' : 'Tambah Voting' }}</h1>

<form action="{{ isset($voting) ? route('voting.update', $voting->id) : route('voting.store') }}" method="POST">
    @csrf
    @if(isset($voting))
        @method('PUT')
    @endif

    <div class="form-group mb-3">
        <label for="pemilih_id">Pemilih</label>
        <select name="pemilih_id" id="pemilih_id" class="form-control">
            @foreach($pemilih as $p)
                <option value="{{ $p->id }}" {{ old('pemilih_id', $voting->pemilih_id ?? '') == $p->id ? 'selected' : '' }}>
                    {{ $p->nama_pemilih }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="calon_id">Calon</label>
        <select name="calon_id" id="calon_id" class="form-control">
            @foreach($calon as $c)
                <option value="{{ $c->id }}" {{ old('calon_id', $voting->calon_id ?? '') == $c->id ? 'selected' : '' }}>
                    {{ $c->nama_calon }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="kategori_voting">Kategori Voting</label>
        <input type="text" name="kategori_voting" id="kategori_voting" class="form-control" value="{{ old('kategori_voting', $voting->kategori_voting ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($voting) ? 'Update' : 'Tambah' }}</button>
</form>
@endsection
