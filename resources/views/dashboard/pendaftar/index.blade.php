@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <a href="/dashboard/pendaftaran-santri/create" class="btn btn-primary mb-3 ms-1 mt-1"><span
                        data-feather="plus"></span>
                    Tambah
                    Santri Baru</a>
            </div>
            <div class="col">
                <form action="/dashboard/pendaftaran-santri" method="GET">
                    <div class="input-group mb-3 mt-1">
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
                    <th class="border" scope="col">No</th>
                    <th class="border" scope="col">Nama</th>
                    <th class="border" scope="col">NIK</th>
                    <th class="border" scope="col">Jenis Kelamin</th>
                    <th class="border" scope="col">No.Hp</th>
                    <th class="border" scope="col">Email</th>
                    <th class="border" scope="col">Status Anak</th>
                    <th class="border" scope="col">Status</th>
                    <th class="border" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftaran as $b)
                    <tr>
                        <td class="text-center border">{{ $loop->iteration }}</td>
                        <td class="border">{{ $b->nama }}</td>
                        <td class="border">{{ $b->nik }}</td>
                        <td class="border text-center">{{ $b->jkl }}</td>
                        <td class="border text-center">{{ $b->hp }}</td>
                        <td class="border">{{ $b->email }}</td>
                        <td class="border text-center">{{ $b->statusa }}</td>

                        @if ($b->status->name == 'Diproses')
                            <td class="text-center border"><small
                                    class="rounded-pill bg-warning px-3 py-1 fw-semibold"><span data-feather="user-minus"
                                        class="me-1"></span> {{ $b->status->name }}</small>
                            </td>
                        @elseif ($b->status->name == 'Aktif')
                            <td class="text-center border"><small
                                    class="rounded-pill bg-success px-3 py-1 text-light fw-semibold"><span
                                        data-feather="user-check" class="me-1"></span> {{ $b->status->name }}</small>
                            </td>
                        @elseif ($b->status->name == 'Ngalong')
                            <td class="text-center border"><small
                                    class="rounded-pill bg-secondary px-3 py-1 text-light fw-semibold"><span
                                        data-feather="user-check" class="me-1"></span> {{ $b->status->name }}</small>
                            </td>
                        @else
                            <td class="text-center border"><small
                                    class="rounded-pill bg-danger px-3 py-1 text-light fw-semibold"><span
                                        data-feather="user-check" class="me-1"></span> {{ $b->status->name }}</small>
                            </td>
                        @endif

                        <td class="text-center border">
                            <a href="/dashboard/pendaftaran-santri/{{ $b->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/pendaftaran-santri/{{ $b->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>

                            <form action="/dashboard/pendaftaran-santri/{{ $b->id }}" method="post"
                                class="d-inline">
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
