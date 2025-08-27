@extends('admin.admin')

@section('content')
<div class="container mt-3">
    <h3>Dashboard Warga</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Status</th>
                <th>Tanggal Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $pay)
            <tr>
                <td>{{ $pay->category->name }}</td>
                <td>{{ ucfirst($pay->status) }}</td>
                <td>{{ $pay->payment_date?->format('d-m-Y') ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
