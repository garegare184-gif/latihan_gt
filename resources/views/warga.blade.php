@extends('template')
@section('content')
<div class="container mt-4">

    <a href="{{ route('warga.create') }}" class="btn btn-primary mb-3">+ Tambah Warga</a>
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
            @foreach($user as $index => $warga)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $warga->name }}</td>
                    <td>{{ $warga->alamat }}</td>
                    <td>{{ $warga->email }}</td>
                    <td>
                        <a href="{{ route('warga.edit', $warga->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection