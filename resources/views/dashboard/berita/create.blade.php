@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Berita Baru</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/berita/create">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="kategori">
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Konten</label>
            <input id="konten" type="hidden" name="konten">
            <trix-editor input="konten"></trix-editor>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

<script>
    // const title = document.querySelector('#title');
    // const slug = document.querySelector('#slug');

    // title.addEventListener('change', function() {
    //     fetch('/dashboard/berita/checkSlug?title=' + title.value)
    //     .then(response => response.json())
    //     .then(data => slug.value = data.slug)
    // });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>
@endsection
