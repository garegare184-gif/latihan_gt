<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kas Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">🏠 Iuran Warga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('warga') ? 'active' : '' }}" href="{{ route('warga.index') }}">Warga</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('kategori') ? 'active' : '' }}" href="{{ route('kategori.index') }}">Kategori</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('pembayaran') ? 'active' : '' }}" href="{{ route('pembayaran.konfirmasi') }}">Pembayaran</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('profil') ? 'active' : '' }}" href="{{ route('profil.index') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="/login">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten -->
<div class="container py-5">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
