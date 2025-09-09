@extends('template')
@section('content')
<div class="container mt-4">

    {{-- Tombol tambah warga --}}
    <a href="{{ route('warga.create') }}" class="btn btn-primary mb-3">+ Tambah Warga</a>
    <a href="{{ url('users/export') }}" class="btn btn-succes mb-3"> Export Warga</a>
    {{-- Pesan sukses kalau ada --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h4>Daftar Warga</h4>
    <table class="table table-bordered">
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
            @foreach($warga as $index => $warga)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $warga->name }}</td>
                    <td>{{ $warga->alamat }}</td>
                    <td>{{ $warga->email }}</td>
                    <td>
       
                        <a href="{{ route('warga.edit', $warga->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('warga.destroy', $warga->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau hapus warga ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
