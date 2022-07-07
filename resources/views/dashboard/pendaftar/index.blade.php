@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pendaftar</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif


<div class="table-responsive col-lg-12">
    <a href="/dashboard/pendaftaran-santri/create" class="btn btn-primary mb-3">Tambah Pendaftar</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NIK</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">No.Hp</th>
          <th scope="col">Email</th>
          <th scope="col">Status Anak</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($pendaftaran as $b)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->nik }}</td>
            <td>{{ $b->jkl }}</td>
            <td>{{ $b->hp }}</td>
            <td>{{ $b->email }}</td>
            <td>{{ $b->statusa }}</td>
            @if($b->status->name == 'Diproses')
                <td><small class="rounded-pill bg-warning px-3 py-1 fw-semibold">{{ $b->status->name }}</small></td>
                @else
                <td><small class="rounded-pill bg-success px-3 py-1 text-light fw-semibold">{{ $b->status->name }}</small></td>
            @endif

            <td>
                <a href="/dashboard/pendaftaran-santri/{{ $b->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/pendaftaran-santri/{{ $b->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                <form action="/dashboard/pendaftaran-santri/{{ $b->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="badge bg-danger border-0" onclick="return confirm('Hapus data?')"><span data-feather="x-circle"></span></button>
                </form>
            </td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>
@endsection
