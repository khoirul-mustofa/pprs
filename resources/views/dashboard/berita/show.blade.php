@extends('dashboard.layouts.main')
@section('container')

<div class="container rounded my-2">
    <div class="row">
        <div class="col-lg-8 bg-white rounded">
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
                    <a class="badge bg-secondary text-decoration-none link-light mb-4" href="/berita?kategori={{ $detailBerita->kategori->slug }}">{{ $detailBerita->kategori->name }}</a>
                    <br>
                    <a href="/dashboard/berita" class="btn btn-success"><span data-feather="arrow-left" ></span> Kembali ke semua berita </a>
                    <a href="" class="btn btn-warning"><span data-feather="edit" ></span> Ubah </a>
                    <a href="" class="btn btn-danger"><span data-feather="x-circle" ></span> Hapus </a>

                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="https://source.unsplash.com/900x400?mosque " alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    {!! $detailBerita->konten !!}
                </section>
            </article>
        </div>
    </div>
</div>



@endsection
