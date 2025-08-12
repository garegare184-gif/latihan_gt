@extends('template')

@section('content')
<div class="container mt-5">
    <h3>Tambah Warga</h3>
    <form action="{{ route('warga.store') }}" method="GET">
        @csrf
        <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" required>
</div>

        <button type="submit" class="btn btn-success">Simpan</button>
</div>
@endsection
