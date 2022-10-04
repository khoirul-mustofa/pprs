@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-9">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Kategori</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif


        <div class="table-responsive">
            <a href="/dashboard/kategori/create" class="btn btn-primary mb-3 ms-1 mt-1"><span data-feather="plus"></span>
                Tambah Kategori</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr class="bg-dark text-light text-center">
                        <th class="border" scope="col">No</th>
                        <th class="border" scope="col">Nama</th>
                        <th class="border" scope="col">Slug</th>
                        <th class="border" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semuaKategori as $b)
                        <tr>
                            <td class="text-center border">{{ $loop->iteration }}</td>
                            <td class="border">{{ $b->name }}</td>
                            <td class="border">{{ $b->slug }}</td>
                            <td class="text-center border">
                                <a href="/dashboard/kategori/{{ $b->id }}/edit" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>

                                <form action="/dashboard/kategori/{{ $b->id }}" method="post" class="d-inline">
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
    </div>
@endsection
