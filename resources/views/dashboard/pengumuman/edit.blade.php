@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pengurus</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/pengumuman/{{ $pengumuman->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required value="{{ old('name', $pengumuman->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Poster Pengumuman</label>
                <input type="hidden" name="oldImage" value="{{ $pengumuman->image }}">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="preview()">

                @if ($pengumuman->image)
                    <img id="frame" src="{{ asset('storage/' . $pengumuman->image) }}"
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

            <button type="submit" class="btn btn-primary mb-3">Update</button>
        </form>
    </div>
    <script>
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
