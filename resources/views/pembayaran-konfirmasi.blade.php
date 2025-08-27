@extends('template')
@section('content')
<div class="container mt-5">
    <h2>Konfirmasi Pembayaran</h2>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>{{ $pembayaran['nama'] }}</td>
                <td>Rp {{ number_format($pembayaran['nominal'], 0, ',', '.') }}</td>
                <td>{{ now()->format('d-m-Y') }}</td>
                <td>
    @if (isset($pembayaran['status']) && $pembayaran['status'] === 'sudah')
        <span class="badge bg-success">Sudah Bayar</span>
    @else
        <span class="badge bg-danger">Belum Bayar</span>
    @endif
</td>
<td>
    <form action="{{ route('pembayaran.updateStatus') }}" method="POST">
        @csrf
        @if (isset($pembayaran['status']) && $pembayaran['status'] === 'sudah')
            <button type="submit" class="btn btn-sm btn-danger">Tandai Belum Bayar</button>
        @else
            <button type="submit" class="btn btn-sm btn-success">Tandai Sudah Bayar</button>
        @endif
    </form>
</td>

            </tr>
        </tbody>
    </table>

    <a href="{{ route('pembayaran.form') }}" class="btn btn-secondary mt-3">Kembali ke Form</a>
</div>
@endsection
