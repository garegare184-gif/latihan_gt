@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Pembayaran</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
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
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->user->name }}</td>
                    <td>Rp {{ number_format($payment->nominal, 0, ',', '.') }}</td>
                    <td>{{ $payment->created_at->format('d M Y') }}</td>
                    <td>
                        <span class="badge {{ $payment->status == 'sudah_bayar' ? 'bg-success' : 'bg-danger' }}">
                            {{ $payment->status }}
                        </span>
                    </td>
                    <td>
                        <form action="{{ route('payment.toggle', $payment->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-warning">
                                {{ $payment->status == 'sudah_bayar' ? 'Tandai Belum Bayar' : 'Tandai Sudah Bayar' }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
