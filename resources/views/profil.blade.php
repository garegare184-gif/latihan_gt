<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Profil Warga</h2>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <td>{{ $warga->nama }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $warga->alamat }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $warga->email }}</td>
        </tr>
    </table>
    <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>
