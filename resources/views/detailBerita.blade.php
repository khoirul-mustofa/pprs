
@extends('layouts.main')
@section('konten')

<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Page content-->
<div class="container rounded mt-5" style="
background-color:rgba(238, 252, 246, 0.799);
backdrop-filter: blur(7000px);">
    <div class="row">
        <div class="col-lg-8 bg-light rounded">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1 mt-3">{{ $detailBerita->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Oleh : <a class="text-decoration-none" href="/berita?author={{ $detailBerita->user->name }}">{{ $detailBerita->user->name }} </a><br>
                        diposting : {{ $detailBerita->created_at->diffForHumans() }}</div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="/berita?kategori={{ $detailBerita->kategori->slug }}">{{ $detailBerita->kategori->name }}</a>

                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="https://source.unsplash.com/900x400?mosque " alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    {!! $detailBerita->konten !!}
                </section>
            </article>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4 mt-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Semua Kategori</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($semuaKategori as $k)
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a class="text-decoration-none" href="/kategori/{{ $k->slug }}">{{ $k->name }}</a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
@endsection
