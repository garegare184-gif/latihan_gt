@extends('template')
@section('content')
<div class="container mt-4">

    <h3>Daftar Kategori</h3>
      <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-warning">Tambah</a>
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Periode</th>
                <th>Nominal</th>
                <th>Aksi</th> <!-- Tambahkan kolom aksi -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->periode }}</td>
                    <td>Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
                    <td>
                       
                        <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
