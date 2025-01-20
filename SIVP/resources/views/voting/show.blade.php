@extends('layouts.tabler')

@section('content')
<h1>Detail Voting</h1>

<p><strong>Pemilih:</strong> {{ $voting->pemilih->nama_pemilih }}</p>
<p><strong>Calon:</strong> {{ $voting->calon->nama_calon }}</p>
<p><strong>Kategori Voting:</strong> {{ $voting->kategori_voting }}</p>
@endsection
