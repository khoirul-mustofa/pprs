@extends('layouts.main')
@section('konten')

    <div class="container">

      <div class="row mt-1">
        {{-- <img src="https://i.ytimg.com/vi/r8DMHagemHI/maxresdefault.jpg" class="img-fluid h-50 w-100 shadow-lg mt_-1" alt="..."> --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://source.unsplash.com/1920x1080?mosque" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://source.unsplash.com/1920x1080?mosque,muslim" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://source.unsplash.com/1920x1080?mosque,muslim" class="d-block w-100 rounded" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>

      <div class="row pt-5">
        <div class="col-12">
          <div class="row">
            <h2 class="fs-2 fw-bold text-center text-light">Untuk Anda Hari ini</h2>
            <div class="row d-flex justify-content-center mt-1 mx-auto">
              <div class="col-1 bg-warning mx-2" style="padding: 2px"></div>
              <div class="col-1 bg-warning" style="padding: 2px"></div>
            </div>
          </div>
        </div>
      </div>
        <div class="album py-4 py-md-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">

                @if($headLine->count())
                <div class="col">

                    {{-- Card 1 --}}
                    <div class="card shadow-lg">
                        <div class="py-1 px-md-1 py-md-2 px-md-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/berita?kategori={{ $headLine[0]->kategori->name }}" class="text-decoration-none text-light"> {{ $headLine[0]->kategori->name }}</a>
                        </div>
                        @if ($headLine[0]->image)
                            <img class="rounded-2" src="{{ asset('storage/'. $headLine[0]->image) }}" alt="">
                            @else
                            <img class="rounded-2" src="https://source.unsplash.com/1920x1080?mosque,muslim" alt="">
                        @endif

                      <div class="card-body">

                         <a href="/berita/{{ $headLine[0]->slug }}" class="text-decoration-none" style="font-family: Times New Roman, Times, serif;"><h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $headLine[0]->title }}</h5></a>

                         <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/berita?author={{ $headLine[0]->user->username }}">{{ $headLine[0]->user->name }}</a></small>

                         <hr class="w-100 clearfix mt-2" />

                        <p class="card-text">{{ $headLine[0]->excerpt }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted"><span class="fw-bold">Diposting:</span> {{ $headLine[0]->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="/berita/{{ $headLine[0]->slug }}" class="btn text-decoration-none btn-primary mt-2 mb-1">Selengkapnya..</a>
                      </div>
                    </div>
                  </div>

                  {{-- Card 2 --}}
                  <div class="col">
                    <div class="card shadow-lg">
                        <div class="py-1 px-1 py-md-2 px-md-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/berita?kategori={{ $headLine[1]->kategori->name }}" class="text-decoration-none text-light"> {{ $headLine[1]->kategori->name }}</a>
                        </div>
                        @if ($headLine[1]->image)
                            <img class="rounded-2" src="{{ asset('storage/'. $headLine[1]->image) }}" alt="">
                        @else
                            <img class="rounded-2" src="https://source.unsplash.com/1920x1080?mosque,muslim" alt="">
                        @endif
                      <div class="card-body">

                         <a href="/berita/{{ $headLine[1]->slug }}" class="text-decoration-none" style="font-family: Times New Roman, Times, serif;"><h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $headLine[1]->title }}</h5></a>

                         <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/berita?author={{ $headLine[1]->user->username }}">{{ $headLine[1]->user->name }}</a></small>

                         <hr class="w-100 clearfix mt-2" />

                        <p class="card-text">{{ $headLine[1]->excerpt }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted"><span class="fw-bold">Diposting:</span> {{ $headLine[1]->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="/berita/{{ $headLine[1]->slug }}" class="btn text-decoration-none btn-primary mt-2 mb-1">Selengkapnya..</a>
                      </div>
                    </div>
                  </div>

                  {{-- Card 3 --}}
                  <div class="col d-md-none d-lg-block">
                    <div class="card shadow-lg">
                        <div class="py-1 px-1 py-md-2 px-md-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/berita?kategori={{ $headLine[2]->kategori->name }}" class="text-decoration-none text-light"> {{ $headLine[2]->kategori->name }}</a>
                        </div>
                        @if ($headLine[2]->image)
                            <img class="rounded-2" src="{{ asset('storage/'. $headLine[2]->image) }}" alt="">
                        @else
                            <img class="rounded-2" src="https://source.unsplash.com/1920x1080?mosque,muslim" alt="">
                        @endif
                      <div class="card-body">

                         <a href="/berita/{{ $headLine[2]->slug }}" class="text-decoration-none" style="font-family: Times New Roman, Times, serif;"><h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $headLine[2]->title }}</h5></a>

                         <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/berita?author={{ $headLine[2]->user->username }}">{{ $headLine[2]->user->name }}</a></small>

                         <hr class="w-100 clearfix mt-2" />

                        <p class="card-text">{{ $headLine[2]->excerpt }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted"><span class="fw-bold">Diposting:</span> {{ $headLine[2]->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="/berita/{{ $headLine[2]->slug }}" class="btn text-decoration-none btn-primary mt-2 mb-1">Selengkapnya..</a>
                      </div>
                    </div>
                  </div>
                  @else
                  {{-- Jika tidak ada berita maka pesan akan muncul dari sini --}}
                @endif
            </div>
        </div>
          <div class="row pt-5">
            <div class="col-12">
              <div class="row">
                <h2 class="fs-2 fw-bold text-center text-light">Pengurus Pesantren</h2>
                <div class="row d-flex justify-content-center mt-1 mx-auto">
                  <div class="col-1 bg-warning mx-2" style="padding: 2px"></div>
                  <div class="col-1 bg-warning" style="padding: 2px"></div>
                </div>
              </div>
            </div>
          </div>



          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-3 py-5 ms-md-auto">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                <img src="https://source.unsplash.com/500x500?person" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                    <p class="fs-6 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Roisul Ma'had</p>
                    <p class="fs-4 text-center fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                <img src="https://source.unsplash.com/500x500?person" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                    <p class="fs-6 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Roisul Ma'had</p>
                    <p class="fs-4 text-center fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                <img src="https://source.unsplash.com/500x500?person" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                    <p class="fs-6 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Roisul Ma'had</p>
                    <p class="fs-4 text-center fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <a href="/pprs/pengurus"><button type="button" class="btn btn-light">Semua Pengurus</button></a>
        </div>
    </div>

@endsection
