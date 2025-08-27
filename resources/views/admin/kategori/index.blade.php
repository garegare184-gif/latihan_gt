@extends('admin.admin')

@section('content')
<div class="container mt-3">
    <h3>Kelola Kategori</h3>

    {{-- Form tambah kategori --}}
    <form action="{{ route('admin.kategori.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori (Bulanan / Mingguan)</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
        </div>
        <button class="btn btn-primary" type="submit">Tambah Kategori</button>
    </form>

    {{-- List kategori --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->name }}</td>
                <td>{{ number_format($cat->nominal, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('admin.kategori.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('admin.kategori.destroy', $cat->id) }}" method="POST" 
                          onsubmit="return confirm('Yakin mau hapus kategori?')" 
                          style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
