@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h3>Form Pembayaran</h3>
    <form action="{{ route('payment.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Warga</label>
            <select name="user_id" class="form-control" required>
                <option value="">-- Pilih Warga --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Periode</label>
            <select name="periode" class="form-control" required>
                <option value="">-- Pilih Periode --</option>
                <option value="Bulanan">Bulanan</option>
                <option value="Mingguan">Mingguan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Bayar</button>
        <a href="{{ route('payment.index') }}" class="btn btn-secondary">Riwayat Pembayaran</a>
    </form>
</div>
@endsection
