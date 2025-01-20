@extends('layouts.tabler')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Dashboard Admin
                </div>
                <h2 class="page-title">
                    {{ date('d-m-Y', strtotime(date('Y-m-d')))}}
                </h2>
            </div>

            <!-- Filter Kategori Voting -->
            <div class="col-auto ms-auto">
                <form method="GET" action="{{ route('dashboard') }}">
                    <select name="kategori_voting_id" class="form-select" onchange="this.form.submit()">
                        <option value="">-- Pilih Kategori Voting --</option>
                        @foreach($kategoriVoting as $kategori)
                            <option value="{{ $kategori->id }}" 
                                    {{ request('kategori_voting_id') == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Perolehan Suara -->
<div class="container-xl mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Perolehan Suara</h3>
        </div>
        <div class="card-body">
            @if($hasilVoting->isEmpty())
                <p>Tidak ada data hasil voting.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Calon</th>
                            <th>Jumlah Suara</th>
                            <th>Kategori Voting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hasilVoting as $hasil)
                            <tr>
                                <td>{{ $hasil->calon->nama_calon }}</td>
                                <td>{{ $hasil->jumlah_suara }}</td>
                                <td>{{ $hasil->kategoriVoting->nama_kategori }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
