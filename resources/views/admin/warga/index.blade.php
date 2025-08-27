@extends('admin.admin')

@section('content')
<div class="container mt-3">
    <h3>Kelola Warga</h3>

    {{-- Form tambah warga --}}
    <form action="{{ route('admin.warga.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required value="{{ old('username') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button class="btn btn-primary" type="submit">Tambah Warga</button>
    </form>

    {{-- List warga --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($warga as $w)
            <tr>
                <td>{{ $w->name }}</td>
                <td>{{ $w->username }}</td>
                <td>
                    <a href="{{ route('admin.warga.edit', $w->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.warga.destroy', $w->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin mau hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
