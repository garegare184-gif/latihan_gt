
@extends('layouts.app')
@section('content')
<div class="mt-5 text-center">
    <h1 class="text-danger fw-bold">Selamat Datang di Aplikasi Kas Iuran Warga</h1>
    <p>Pantau iuran warga secara mudah dan transparan</p>
</div>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Total Warga</h5>
                <h3>20</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Total Iuran</h5>
                <h3>Rp 5.000.000</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Iuran Bulan Ini</h5>
                <h3>Rp 500.000</h3>
            </div>
        </div>
    </div>
</div>
@endsection
