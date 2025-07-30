<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home Warga - Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="text-danger">Selamat Datang, {{ Auth::user()->username }}</h1>
    <p class="lead">Anda login sebagai <b>Warga</b>.</p>
    <p>Di sini Anda bisa melihat informasi tagihan dan riwayat pembayaran iuran Anda.</p>

    <hr>

    <h3>Menu Warga</h3>
    <ul class="list-group">
        <li class="list-group-item">Lihat Tagihan Iuran</li>
        <li class="list-group-item">Riwayat Pembayaran</li>
    </ul>

    <hr>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
