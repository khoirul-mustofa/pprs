@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-9">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Data pengurus</h1>
        </div>

        <div class="">
            <a href="/dashboard/pengurus" class="btn btn-success my-3"><span data-feather="chevron-left"></span> Kembali</a>
        </div>

        <form method="POST" action="/dashboard/pengurus" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Pengurus</label>
                <select class="form-select" name="genre">
                    @foreach ($pengurus as $d)
                        @if (old('genre') == $d)
                            <option value="{{ $d }}" selected>{{ $d }}</option>
                        @else
                            <option value="{{ $d }}">{{ $d }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="devisi_id" class="form-label">Devisi</label>
                <select class="form-select" name="devisi_id">
                    @foreach ($devisi as $d)
                        @if (old('devisi_id') == $d->id)
                            <option value="{{ $d->id }}" selected>{{ $d->name }}</option>
                        @else
                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar Berita</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="preview()">
                <img id="frame" src="" class="img-fluid col-sm-5 mt-3 " />
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
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
