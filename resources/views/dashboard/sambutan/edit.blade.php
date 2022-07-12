@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-9">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Sambutan</h1>
        </div>
        <form method="POST" action="/dashboard/sambutan/{{ $sambutan->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    required value="{{ old('title', $sambutan->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pembawa Sambutan</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required value="{{ old('name', $sambutan->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto Pembawa Sambutan</label>
                <input type="hidden" name="oldImage" value="{{ $sambutan->image }}">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="preview()">

                @if ($sambutan->image)
                    <img id="frame" src="{{ asset('storage/' . $sambutan->image) }}"
                        class="img-fluid col-sm-3 mt-3 " />
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
                <label for="konten" class="form-label">Isi Sambutan</label>
                <input id="konten" type="hidden" name="konten" value="{{ old('konten', $sambutan->konten) }}">
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
