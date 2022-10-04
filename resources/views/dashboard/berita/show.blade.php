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
                        <div class="text-muted fst-italic mb-2">
                            diposting : {{ $detailBerita->created_at->diffForHumans() }}</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light mb-4"
                            href="/berita?kategori={{ $detailBerita->kategori->slug }}">{{ $detailBerita->kategori->name }}</a>
                        <br>
                        <a href="/dashboard/berita" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
                        <a href="/dashboard/berita/{{ $detailBerita->slug }}/edit" class="btn btn-warning"><span
                                data-feather="edit"></span> Edit</a>

                        <form action="/dashboard/berita/{{ $detailBerita->slug }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger " onclick="return confirm('Hapus data?')"><span
                                    data-feather="x-circle"></span> Delete</button>
                        </form>
                    </header>
                    <!-- Preview image figure-->
                    @if ($detailBerita->image)
                        <div style="max-heiht:400px; overflow:hidden;">
                            <figure class="mb-4"><img class="img-fluid rounded"
                                    src="{{ asset('storage/' . $detailBerita->image) }}" alt="..." /></figure>
                        </div>
                    @else
                        <figure class="mb-4"><img class="img-fluid rounded"
                                src="https://source.unsplash.com/900x400?mosque " alt="..." /></figure>
                    @endif
                    <!-- Post content-->
                    <section class="mb-5">
                        {!! $detailBerita->konten !!}
                    </section>
                </article>
            </div>
        </div>
    </div>
@endsection
