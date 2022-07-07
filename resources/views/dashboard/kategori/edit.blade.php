@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Kategori</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/kategori/{{ $kategori->id }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name')
              is-invalid
          @enderror" id="name" name="name" required value="{{ old('name', $kategori->name) }}">
          @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')
            is-invalid
        @enderror" id="slug" name="slug" required value="{{ old('slug', $kategori->slug) }}">
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
@endsection
