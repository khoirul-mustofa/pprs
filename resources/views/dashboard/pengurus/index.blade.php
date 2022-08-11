@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-9">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Pengurus</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <div class="row">
                <div class="col col-md-6">
                    <div class="row col-md-5 mx-1">
                        <a href="/dashboard/pengurus/create" class="btn btn-primary mb-3 ms-1 mt-1"><span
                                data-feather="plus"></span>
                            Tambah Pengurus Baru</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <form action="/dashboard/pengurus" method="GET">
                        <div class="input-group mb-3 mt-1">
                            @if (request('devisi'))
                                <input type="hidden" name="devisi" value="{{ request('devisi') }}">
                            @endif
                            <input type="text" class="form-control" placeholder="Search.." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-outline-dark" type="submit">Search</button>
                        </div>
                    </form>
                </div>

            </div>
            <table class="table table-striped table-sm">
                <thead>
                    <tr class="bg-dark text-light text-center">
                        <th scope="col" class="border">No</th>
                        <th scope="col" class="border">Nama</th>
                        <th scope="col" class="border">Devisi</th>
                        <th scope="col" class="border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semuaPengurus as $b)
                        <tr>
                            <td class="border text-center">{{ $loop->iteration }}</td>
                            <td class="border">{{ $b->name }}</td>
                            <td class="border">{{ $b->devisi->name }}</td>
                            <td class="border text-center">
                                {{-- <a href="/dashboard/berita/{{ $b->id }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
                                <a href="/dashboard/pengurus/{{ $b->id }}/edit" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>

                                <form action="/dashboard/pengurus/{{ $b->id }}" method="post" class="d-inline">
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
        {{ $semuaPengurus->links() }}
    </div>
@endsection
