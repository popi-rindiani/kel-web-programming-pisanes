<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Voting</title>
</head>
<body>
    <h1>Hasil Voting</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID Pemilih</th>
                <th>Nama Pemilih</th>
                <th>Nama Calon</th>
                <th>Kategori Voting</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($votes as $vote)
                <tr>
                    <td>{{ $vote->pemilih->id }}</td>
                    <td>{{ $vote->pemilih->nama_pemilih }}</td>
                    <td>{{ $vote->calon->nama_calon }}</td>
                    <td>{{ $vote->kategori_voting }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
