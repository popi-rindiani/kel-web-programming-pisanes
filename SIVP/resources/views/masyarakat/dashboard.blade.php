@extends('layouts.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Dashboard Vote Masyarakat
          </div>
          <h2 class="page-title">
            Presensi {{ date('d-m-Y', strtotime(date('Y-m-d')))}}
          </h2>
        </div>
        <!-- Page title actions -->
      </div>
    </div>
  </div>
@endsection