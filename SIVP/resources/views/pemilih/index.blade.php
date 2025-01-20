@extends('layouts.tabler')

@section('content')
<div class="container my-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Daftar Pemilih</h1>
        <a href="{{ route('pemilih.create') }}" class="btn btn-primary">
            <i class="fas fa-user-plus"></i> Tambah Pemilih
        </a>
    </div>

    <!-- Alert Success -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Card Section -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Daftar Pemilih</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 10%;">id untuk voting</th>
                        <th style="width: 30%;">Nama</th>
                        <th style="width: 20%;">Status Voting</th>
                        <th style="width: 20%;">Pemilih ID (Voting)</th>
                        <th style="width: 30%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pemilih as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{ $p->nama_pemilih }}</td>
                            <td>
                                @if ($p->status_voting === 'belum')
                                    <span class="badge bg-warning text-dark">Belum Voting</span>
                                @else
                                    <span class="badge bg-success">Sudah Voting</span>
                                @endif
                            </td>
                            <td>
                                @if ($p->voting_pemilih_id)
                                    {{ $p->voting_pemilih_id }}
                                @else
                                    <span class="text-muted">Belum Terkait</span>
                                @endif
                            </td>
                            <td>
                                @if ($p->status_voting === 'belum')
                                    <form action="{{ route('pemilih.vote', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success">
                                            <i class="fas fa-check"></i> Vote
                                        </button>
                                    </form>
                                @else
                                    <span class="text-muted">Tidak Ada Aksi</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada data pemilih.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
