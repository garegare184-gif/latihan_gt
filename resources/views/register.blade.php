<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffe6e6, #fff);
            font-family: 'Segoe UI', sans-serif;
        }
        .register-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        h3 {
            font-weight: bold;
            color: #b71c1c;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="register-card col-md-6 mx-auto">
        <h3 class="text-center mb-4">Daftar Warga Baru</h3>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-danger w-100">Daftar</button>
        </form>
        <p class="text-center mt-3">Sudah punya akun? <a href="/login">Login</a></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
