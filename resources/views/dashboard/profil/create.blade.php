@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Profil Baru</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/profil/create" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    required value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar Profil</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="preview()">
                <img id="frame" src="" class="img-fluid col-sm-5 mt-3 " />
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


            <button type="submit" class="btn btn-primary"><span data-feather="save"></span> Simpan</button>
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
