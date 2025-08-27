@extends('admin.admin')

@section('content')
<div class="container mt-4">

    <h3 class="mb-4">Dashboard Admin</h3>

    {{-- Notifikasi --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Kategori --}}
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Kategori Iuran</h5>
        </div>
        <div class="card-body">
            <!-- <form action="{{ route('admin.kategori.store') }}" method="POST" class="row g-2 mb-3">
                @csrf
                <div class="col-auto">
                    <input type="text" name="name" class="form-control" placeholder="Tambah kategori baru" required>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </form> -->

            <ul class="list-group">
                @foreach($categories as $cat)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $cat->name }}
                        <form action="{{ route('admin.kategori.destroy', $cat->id) }}" method="POST" onsubmit="return confirm('Hapus kategori?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Pembayaran --}}
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Pembayaran Warga</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Warga</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tanggal Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($payments as $pay)
                        <tr>
                            <td>{{ $pay->user->name }}</td>
                            <td>{{ $pay->category->name }}</td>
                            <td>
                                <form action="{{ route('admin.pembayaran.update', $pay->id) }}" method="POST" class="d-flex gap-2">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="form-select form-select-sm" required>
                                        <option value="belum bayar" {{ $pay->status === 'belum bayar' ? 'selected' : '' }}>Belum Bayar</option>
                                        <option value="sudah bayar" {{ $pay->status === 'sudah bayar' ? 'selected' : '' }}>Sudah Bayar</option>
                                    </select>
                                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                                </form>
                            </td>
                            <td>{{ $pay->payment_date?->format('d-m-Y') ?? '-' }}</td>
                            <td>
                                <form action="{{ route('admin.pembayaran.destroy', $pay->id) }}" method="POST" onsubmit="return confirm('Hapus data pembayaran?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data pembayaran</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
