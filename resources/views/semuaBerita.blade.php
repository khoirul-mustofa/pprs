@extends('layouts.main')
@section('konten')
<link rel="stylesheet" href="css/berita.css">
<div class="container">
  <div class="album py-4 py-md-5">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
      {{-- card akan di looping atau sesuai isi dengan jumlah data --}}
      @foreach ($semuaBerita as $post)
      <div class="col">
        <div class="card shadow-lg">

          <img class="rounded-2" src="https://images.unsplash.com/photo-1512632578888-169bbbc64f33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bW9zcXVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">

             <h5><a href="/berita/{{ $post->slug }}" class="card-text fw-semibold text-decoration-none text-dark">{{ $post->title }}</a></h5>

             <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> pada kategori <a class="text-decoration-none" href="/kategori/{{ $post->kategori->name }}">{{ $post->kategori->name }}</a></small>

             <hr class="w-100 clearfix mt-2" />

            <p class="card-text">{{ $post->excerpt }}</p>

            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted"><span class="fw-bold">Diposting :</span> {{ $post->created_at }}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
