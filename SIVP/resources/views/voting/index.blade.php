<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Ketua RT dan RW</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Pemilihan Ketua RT dan</h1>

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('voting.vote') }}" method="post">
        @csrf

        <label for="pemilih_id">ID Pemilih:</label>
        <input type="text" name="pemilih_id" required><br><br>

        <label for="kategori_voting">Kategori Voting:</label>
        <select name="kategori_voting" required>
            <option value="RT">Ketua RT</option>
            <option value="RW">Ketua RW</option>
        </select><br><br>

        <h3>Pilih Calon:</h3>
        @foreach ($calons as $calon)
            <div>
                <input type="radio" name="calon_id" value="{{ $calon->id }}" required>
                <img src="{{ asset('storage/'.$calon->foto) }}" alt="{{ $calon->nama_calon }}" width="100px">
                <p><strong>{{ $calon->nama_calon }}</strong></p>
                <p>{{ $calon->deskripsi }}</p>
            </div>
        @endforeach

        <br>
        <button type="submit">Vote</button>
    </form>
</body>
</html>
