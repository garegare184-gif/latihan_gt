<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kas Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(to bottom, #ffe6e6, #fff);
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .hero-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            font-weight: bold;
            color: #b71c1c;
        }
        p.lead {
            color: #555;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">🏠 Iuran Warga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="warga">Warga</a></li>
                <li class="nav-item"><a class="nav-link" href="kategori">Kategori</a></li>
                <li class="nav-item"><a class="nav-link" href="pembayaran">Pembayaran</a></li>
                <li class="nav-item"><a class="nav-link" href="profile">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="/login">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten Utama -->
<div class="container py-5">
    <div class="hero-card text-center mx-auto col-md-8">
        <h1 class="mb-4">Selamat Datang di Aplikasi Kas Iuran Warga</h1>
        <p class="lead mb-0">Pantau iuran warga secara mudah dan transparan</p>
    </div>
</div>

<!-- Menu 3 Tombol dengan Icon -->
<div class="container pb-5">
    <div class="row justify-content-center text-center mt-4">
        <div class="col-md-3 mb-3">
            <a href="warga" class="text-decoration-none">
                <div class="p-4 bg-primary text-white rounded shadow">
                    <i class="bi bi-people-fill fs-1 mb-2 d-block"></i>
                    <h5>Daftar Warga</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="pembayaran" class="text-decoration-none">
                <div class="p-4 bg-danger text-white rounded shadow">
                    <i class="bi bi-cash-stack fs-1 mb-2 d-block"></i>
                    <h5>Pembayaran</h5>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="kategori" class="text-decoration-none">
                <div class="p-4 bg-warning text-white rounded shadow">
                    <i class="bi bi-tags-fill fs-1 mb-2 d-block"></i>
                    <h5>Category</h5>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
