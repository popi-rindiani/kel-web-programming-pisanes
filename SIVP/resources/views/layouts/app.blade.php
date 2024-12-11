<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Voting</title>
    <!-- Menambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Aplikasi Voting</h1>
            <div>
                <a href="{{ route('pengguna.index') }}" class="btn btn-info">Pengguna</a>
                <a href="{{ route('calon.index') }}" class="btn btn-info">Calon</a>
                <a href="{{ route('pemilih.index') }}" class="btn btn-info">Pemilih</a>
                <a href="{{ route('voting.index') }}" class="btn btn-info">Voting</a>
                <a href="{{ route('hasil_voting.index') }}" class="btn btn-info">Hasil Voting</a>
                <a href="{{ route('pengaturan.index') }}" class="btn btn-info">Pengaturan</a>
            </div>
        </div>
        <!-- Konten utama -->
        @yield('content')
    </div>

    <!-- Menambahkan JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
