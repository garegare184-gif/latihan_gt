@extends('template')

@section('content')
<div class="container py-5">
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <div class="mb-3">
        <label for="periode" class="form-label">Periode</label>
        <input type="text" name="periode" id="periode" class="form-control" 
            value="{{ old('periode', $kategori->periode) }}" required>
        @error('periode')
        <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nominal" class="form-label">Nominal</label>
        <input type="text" name="nominal" id="nominal" class="form-control" 
            value="{{ old('nominal', $kategori->nominal) }}" required>
        @error('nominal')
        <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary ms-2">Batal</a>
</form>
@endsection