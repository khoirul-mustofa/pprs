@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Profil </h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- <h5 class="p-3">Total Profil : {{ $jumlahData }}</h5> --}}

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/profil/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Tambah Profil
            Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($profil->count())
                    @foreach ($profil as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->title }}</td>
                            <td>
                                <a href="/dashboard/profil/{{ $p->id }}" class="badge bg-info"><span
                                        data-feather="eye"></span></a>
                                <a href="/dashboard/profil/{{ $p->id }}/edit" class="badge bg-warning"><span
                                        data-feather="edit"></span></a>

                                <form action="/dashboard/profil/{{ $p->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger border-0" onclick="return confirm('Hapus data?')"><span
                                            data-feather="x-circle"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <h1>Data Tidak Ditemukan</h1>
                @endif


            </tbody>
        </table>
    </div>
@endsection
