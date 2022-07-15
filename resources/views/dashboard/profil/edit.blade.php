@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-9">
        <div class="row pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Profile</h1>
        </div>
        <div class="">
            <a href="/dashboard/profil" class="btn btn-success my-3"><span data-feather="chevron-left"></span> Kembali</a>
        </div>
        <div class="row">
            <form method="POST" action="/dashboard/profil/{{ $profil->id }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" required value="{{ old('title', $profil->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="konten_first" class="form-label">Konten Pertama</label>
                    <input id="konten_first" type="hidden" name="konten_first"
                        value="{{ old('konten_first', $profil->konten_first) }}">
                    <trix-editor input="konten_first"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Profil</label>
                    <input type="hidden" name="oldImage" value="{{ $profil->image }}">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="preview()">

                    @if ($profil->image)
                        <img id="frame" src="{{ asset('storage/' . $profil->image) }}"
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
                    <input id="konten" type="hidden" name="konten" value="{{ old('konten', $profil->konten) }}">
                    <trix-editor input="konten"></trix-editor>
                </div>


                <button type="submit" class="btn btn-primary mb-3">Update</button>
            </form>
        </div>

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
