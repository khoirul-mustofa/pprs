@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8 pt-3 pb-2 mb-2 border-bottom">
                <h1 class="h2">Daftar Profil </h1>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            {{-- <h5 class="p-3">Total Profil : {{ $jumlahData }}</h5> --}}

            <div class="table-responsive col-md-8">
                <div class="d-flex d-flex justify-content-between my-3">
                    <div>
                        <a href="/dashboard/profil/create" class="btn btn-primary"><span data-feather="plus"></span>
                            Tambah
                            Profil
                            Baru</a>
                    </div>
                    <div>
                        <a href="/dashboard/profil/preview" class=" btn btn-info"><span data-feather="eye"></span>
                            Preview</a>
                    </div>
                </div>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr class="bg-dark">
                            <th scope="col" class="text-light text-center">No</th>
                            <th scope="col" class="text-light text-center">Judul</th>
                            <th scope="col" class="text-light text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="border">
                        @if ($profil->count())
                            @foreach ($profil as $p)
                                <tr>
                                    <td class="text-center border">{{ $loop->iteration }}</td>
                                    <td>{{ $p->title }}</td>
                                    <td class="text-center border">
                                        {{-- <a href="/dashboard/profil/{{ $p->id }}" class="badge bg-info"><span
                                                data-feather="eye"></span></a> --}}
                                        <a href="/dashboard/profil/{{ $p->id }}/edit" class="badge bg-warning"><span
                                                data-feather="edit"></span></a>

                                        <form action="/dashboard/profil/{{ $p->id }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Hapus data?')"><span
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
        </div>
    </div>

@endsection
