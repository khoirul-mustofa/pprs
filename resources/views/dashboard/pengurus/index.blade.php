@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengurus</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-12">
        <a href="/dashboard/pengurus/create" class="btn btn-primary mb-3">Tambah Pengurus Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class="bg-dark">
                    <th scope="col" class="text-light">No</th>
                    <th scope="col" class="text-light">Nama</th>
                    <th scope="col" class="text-light">Devisi</th>
                    <th scope="col" class="text-light">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semuaPengurus as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->devisi->name }}</td>
                        <td>
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
@endsection
