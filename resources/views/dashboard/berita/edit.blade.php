@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Berita</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/berita/{{ $berita->slug }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    required value="{{ old('title', $berita->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required value="{{ old('slug', $berita->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($categories as $category)
                        @if (old('kategori_id', $berita->kategori_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar Berita</label>
                <input type="hidden" name="oldImage" value="{{ $berita->image }}">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="preview()">

                @if ($berita->image)
                    <img id="frame" src="{{ asset('storage/' . $berita->image) }}"
                        class="img-fluid col-sm-5 mt-3 " />
                @else
                    <img id="frame" src="" class="img-fluid col-sm-5 mt-3 " />
                @endif

                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <input id="konten" type="hidden" name="konten" value="{{ old('konten', $berita->konten) }}">
                <trix-editor input="konten"></trix-editor>
            </div>


            <button type="submit" class="btn btn-primary mb-3">Update</button>
        </form>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        // Function untuk Perview gambar
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('image').value = null;
            frame.src = "";
        }
    </script>
@endsection
