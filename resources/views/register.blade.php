<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Register</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <div>
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required autofocus>
                </div>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required autofocus>
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" required autofocus>
                </div>
                
                <button type="submit" class="btn btn-secondary w-100">Register</button>
            </form>
            <p>Sudah punya akun? <a href="{{ url('/login') }}">Login di sini</a></p>
        </div>
    </div>
</div>
</body>
</html>