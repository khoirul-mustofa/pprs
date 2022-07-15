@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-9">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Berita</h1>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive mb-3">
            <a href="/dashboard/berita/create" class="btn btn-primary mb-3 mt-1 mx-1"><span data-feather="plus"></span> Tambah
                berita
                baru</a>
            <div class="row">
                <div class="col">
                    <h6 class="ms-2 mb-2 mt-2">Data {{ $jumlahData }}</h6>
                </div>
                <div class="col-12 col-md-6">
                    <form action="/dashboard/berita" method="GET">
                        @if (request('kategori'))
                            <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                        </div>
                    </form>
                </div>

            </div>
            <table class="table table-striped table-sm">
                <thead>
                    <tr class="bg-dark">
                        <th class="text-light border text-center" scope="col">No</th>
                        <th class="text-light border text-center" scope="col">Judul</th>
                        <th class="text-light border text-center" scope="col">Kategori</th>
                        <th class="text-light border text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semuaBerita as $b)
                        <tr>
                            <td class="border text-center">{{ $loop->iteration }}</td>
                            <td class="border ps-1">{{ $b->title }}</td>
                            <td class="border ps-1">{{ $b->kategori->name }}</td>
                            <td class="border text-center">
                                <a href="/dashboard/berita/{{ $b->slug }}" class="badge bg-info"><span
                                        data-feather="eye"></span></a>
                                <a href="/dashboard/berita/{{ $b->slug }}/edit" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>

                                <form action="/dashboard/berita/{{ $b->slug }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger border-0" onclick="return confirm('Hapus data?')"><span
                                            data-feather="x-circle"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        {{ $semuaBerita->links() }}
    </div>
@endsection
