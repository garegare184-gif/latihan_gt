<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Iuran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="text-danger">Tambah Iuran</h1>

    <form action="/iuran" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Pilih Warga</label>
            <select name="user_id" class="form-select">
                @foreach($warga as $w)
                    <option value="{{ $w->id }}">{{ $w->username }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="number" name="nominal" class="form-control">
        </div>
        <button type="submit" class="btn btn-danger">Simpan</button>
    </form>
</div>
</body>
</html>
