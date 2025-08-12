@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home Warga - Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
 
    <a href="{{ route('warga.create') }}" class="btn btn-primary mb-3">+ Tambah Warga</a>

   
    <h3>Daftar Warga</h3>
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $item)
                <tr>
                    <td>{{ $item + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('warga.edit', $warga->id) }}" class="btn btn-sm btn-warning">Edit</a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

 
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
