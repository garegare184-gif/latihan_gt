@extends('template')

@section('content')
<div class="container mt-5">
    <h3>Edit Warga</h3>
    <form action="{{ route('warga.update', $warga->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $warga->name }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $warga->alamat }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $warga->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('warga.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
