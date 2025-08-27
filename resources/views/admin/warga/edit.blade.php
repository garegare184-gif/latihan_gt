@extends('admin.admin')

@section('content')
<div class="container mt-3">
    <h3>Edit Warga</h3>

    <form action="{{ route('admin.warga.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" name="username" class="form-control" value="{{ old('username', $user->username) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password <small>(kosongkan jika tidak ingin diubah)</small></label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Isi jika ingin ganti password">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('admin.warga.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
