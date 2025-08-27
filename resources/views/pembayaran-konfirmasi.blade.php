@extends('template')

@section('content')
<div class="container mt-5">
    <h2>Konfirmasi Pembayaran</h2>

    {{-- Form Input Pembayaran --}}
    <form action="{{ route('pembayaran.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="user_id" class="form-label">Nama Warga</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    <option value="">-- Pilih Warga --</option>
                    @foreach($warga as $user)
                        <option value="{{ $user->id }}">{{ $user->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label for="periode" class="form-label">Periode</label>
                <select name="periode" id="periode" class="form-control" required>
                    <option value="">-- Pilih Periode --</option>
                    <option value="bulanan">Bulanan</option>
                    <option value="mingguan">Mingguan</option>
                    <option value="tahunan">Tahunan</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="nominal" class="form-label">Nominal</label>
                <input type="number" name="nominal" id="nominal" class="form-control" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Pembayaran</button>
    </form>

    {{-- Tabel Pembayaran --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID User</th>
                <th>Periode</th>
                <th>Nominal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayaranList as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->user_id }}</td>
                    <td>{{ ucfirst($pembayaran->periode) }}</td>
                    <td>Rp {{ number_format($pembayaran->nominal, 0, ',', '.') }}</td>
                    <td>
                        @if ($pembayaran->status === 'sudah')
                            <span class="badge bg-success">Sudah Bayar</span>
                        @else
                            <span class="badge bg-danger">Belum Bayar</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('pembayaran.form') }}" class="btn btn-secondary mt-3">Kembali ke Form</a>
</div>
@endsection
