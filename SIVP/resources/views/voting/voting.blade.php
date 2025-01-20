@extends('layouts.tabler')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Pemilihan Ketua RT dan RW</h1>

    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{ route('voting.vote') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="pemilih_id">ID Pemilih:</label>
                    <input type="text" name="pemilih_id" class="form-control" required>
                </div>
                
                <div class="form-group mt-3">
                    <label for="kategori_voting">Kategori Voting:</label>
                    <select name="kategori_voting" class="form-control" required>
                        <option value="RT">Ketua RT</option>
                        <option value="RW">Ketua RW</option>
                    </select>
                </div>

                <h3 class="mt-4">Pilih Calon:</h3>
                <div class="row">
                    @foreach ($calons as $calon)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('storage/'.$calon->foto) }}" class="card-img-top" alt="{{ $calon->nama_calon }}" height="200px">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $calon->nama_calon }}</h5>
                                    <p class="card-text">{{ $calon->deskripsi }}</p>
                                    <input type="radio" name="calon_id" value="{{ $calon->id }}" class="btn-check" id="calon_{{ $calon->id }}" required>
                                    <label class="btn btn-outline-primary" for="calon_{{ $calon->id }}">Pilih</label>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="form-group text-center mt-4">
                    <button type="submit" class="btn btn-success btn-lg">Vote</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
