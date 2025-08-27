<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kas Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Kas Warga</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(auth()->check() && auth()->user()->level === 'admin')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.warga.index') }}">Kelola Warga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.kategori.index') }}">Kelola Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.pembayaran.index') }}">Kelola Pembayaran</a>
          </li>
        @elseif(auth()->check() && auth()->user()->level === 'warga')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('warga.dashboard') }}">Dashboard</a>
          </li>
        @endif
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
            </form>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 