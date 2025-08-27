<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h3>Riwayat Pembayaran Iuran {{ $warga->nama }}</h3>

    <table class="table table-bordered mt-3">
        <thead class="table-primary">
            <tr>
                <th>Pembayaran ke</th>
                <th>Nominal</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($warga->iurans as $iuran)
            <tr>
                <td>{{ $iuran->pembayaran_ke }}</td>
                <td>Rp {{ number_format($iuran->nominal, 0, ',', '.') }}</td>
                <td>{{ $iuran->status }}</td>
                <td>{{ $iuran->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h4 class="mt-4">Tambah Pembayaran Baru</h4>
    <form action="{{ route('iuran.store') }}" method="POST">
        @csrf
        <input type="hidden" name="warga_id" value="{{ $warga->id }}">

        <div class="mb-2">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="Sudah Bayar">Sudah Bayar</option>
                <option value="Belum Bayar">Belum Bayar</option>
            </select>
        </div>
        <div class="mb-2">
            <label>Pembayaran ke</label>
            <input type="number" name="pembayaran_ke" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>

</body>
</html>
