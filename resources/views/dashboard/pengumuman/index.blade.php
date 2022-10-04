@extends('dashboard.layouts.main')
@section('container')
    <div class="row mt-2">
        <h2 class="border-bottom pb-4">Pengumuman</h2>
    </div>
    <div class="row mt-2 col-lg-9 ms-lg-1">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="text-center">{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="row-col-lg-2 mt-2 mb-2">
        <a href="/dashboard/pengumuman/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Tambah
            Pengumuman Baru</a>
    </div>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3 mb-3">
        @if ($pengumuman->count())
            {{-- card akan di looping atau sesuai isi dengan jumlah data --}}
            @foreach ($pengumuman as $p)
                <div class="col">
                    <div class="card shadow-lg">
                        @if ($p->image)
                            <img src="{{ asset('storage/' . $p->image) }}" class="center rounded" alt="...">
                        @else
                            <img class="rounded-2" src="https://source.unsplash.com/1920x1080?mosque,muslim" alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $p->name }}
                            </h5>
                            <a href="/dashboard/pengumuman/{{ $p->id }}/edit" class="btn badge btn-warning"><span
                                    data-feather="edit"></span> Edit</a>

                            <form action="/dashboard/pengumuman/{{ $p->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn badge btn-danger border-0" onclick="return confirm('Hapus data?')"><span
                                        data-feather="x-circle"></span>
                                    Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center fs-4">Tidak Ada Pengumuman Yang diposting</p>
        @endif
    </div>
    {{ $pengumuman->links() }}
@endsection
