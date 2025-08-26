@extends('template')

@section('content')
<div class="container py-5">
    <h3>Tambah Kategori</h3>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Periode" class="form-label">periode</label>
            <input type="text" name="periode" id="periode" class="form-control" value="{{ old('name') }}" required>
            @error('periode')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
            <label for="Periode" class="form-label">nominal </label>
            <input type="text" name="nominal" id="nominal" class="form-control" value="{{ old('name') }}" required>
            @error('nominal')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary ms-2">Batal</a>
    </form>
</div>
@endsection
