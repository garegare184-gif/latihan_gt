@extends('admin.admin')

@section('content')
<div class="container mt-3">
    <h3>Edit Kategori</h3>

    <form action="{{ route('admin.kategori.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="number" class="form-control" id="nominal" name="nominal"
                   value="{{ old('nominal', $category->nominal) }}" required>
        </div>

        <button class="btn btn-success" type="submit">Update</button>
        <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
