@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Berita Baru</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/berita/create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title')
              is-invalid
          @enderror" id="title" name="title" required value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')
            is-invalid
        @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="kategori_id">
                @foreach ($categories as $category)
                    @if(old('kategori_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar Berita</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <input id="konten" type="hidden" name="konten" value="{{ old('konten') }}">
            <trix-editor input="konten"></trix-editor>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>
@endsection
