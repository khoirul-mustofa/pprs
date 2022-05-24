@extends('layouts.main')
@section('konten')
<div class="container">
  <div class="album py-4 py-md-5">
      <h1 class="text-light text-center mb-3">{{ $title }}</h1>
      <div class="row justify-content-center mb-3">
          <div class="col-md-6">
                <form action="/berita" method="GET">

                    @if(request('kategori'))
                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                    @endif
                    @if(request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request("search") }}">
                        <button class="btn btn-outline-light" type="submit" >Search</button>
                      </div>
                </form>
          </div>
      </div>

        @if($semuaBerita->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/700x400?mosque" class="center " alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $semuaBerita[0]->title }}</h5>

              <small class="fw-normal font-Roboto">
                  Oleh: <a class="text-decoration-none" href="/berita?author={{ $semuaBerita[0]->user->username }}">{{ $semuaBerita[0]->user->name }}</a> pada kategori <a class="text-decoration-none" href="/berita?kategori={{ $semuaBerita[0]->kategori->name }}">{{ $semuaBerita[0]->kategori->name }}</a> {{ $semuaBerita[0]->created_at->diffForHumans() }}
                </small>

              <p class="card-text">{{ $semuaBerita[0]->excerpt }}</p>
              <a href="/berita/{{ $semuaBerita[0]->slug }}" class="btn text-decoration-none btn-primary">Selengkapnya..</a>
            </div>
        </div>




    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
      {{-- card akan di looping atau sesuai isi dengan jumlah data --}}
      @foreach ($semuaBerita->skip(1) as $post)
      <div class="col">
        <div class="card shadow-lg">
            <div class="py-1 px-1 py-md-2 px-md-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.7)">
                <a href="/berita?kategori={{ $post->kategori->name }}" class="text-decoration-none text-light"> {{ $post->kategori->name }}</a>
            </div>
          <img class="rounded-2" src="https://source.unsplash.com/700x400?mosque,muslim" alt="">
          <div class="card-body">

             {{-- <h5><a href="/berita/{{ $post->slug }}" class="card-text fw-semibold text-decoration-none text-dark">{{ $post->title }}</a></h5> --}}
             <h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $post->title }}</h5>

             <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/berita?author={{ $post->user->username }}">{{ $post->user->name }}</a> <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></small>
             {{-- pada kategori <a class="text-decoration-none" href="/kategori/{{ $post->kategori->name }}">{{ $post->kategori->name }}</a> --}}

             <hr class="w-100 clearfix mt-2" />

            <p class="card-text">{{ $post->excerpt }}</p>
{{--
            <div class="d-flex justify-content-between align-items-center">

            </div> --}}
            <a href="/berita/{{ $post->slug }}" class="btn text-decoration-none btn-primary mt-2 mb-1">Selengkapnya..</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @else
          <p class="text-center fs-4">Tidak ada berita ditemukan</p>
    @endif
  </div>
<div class="d-flex justify-content-end">
  {{ $semuaBerita->links() }}
</div>
</div>



@endsection
