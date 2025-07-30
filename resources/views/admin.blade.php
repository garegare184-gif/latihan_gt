<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Iuran Warga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Data Warga</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pembayaran</a></li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-light ms-2">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten -->
<div class="container py-5">
    <div class="mb-4">
        <h1 class="text-danger">Selamat Datang, {{ Auth::user()->username }}</h1>
        <p class="lead">Anda login sebagai <b>Admin</b>.</p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title text-danger">Data Warga</h5>
                    <p class="card-text">Kelola dan lihat daftar warga.</p>
                    <a href="#" class="btn btn-danger">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title text-danger">Pembayaran Iuran</h5>
                    <p class="card-text">Pantau dan catat pembayaran iuran.</p>
                    <a href="#" class="btn btn-danger">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title text-danger">Laporan</h5>
                    <p class="card-text">Lihat laporan iuran dan status pembayaran.</p>
                    <a href="#" class="btn btn-danger">Lihat Laporan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
