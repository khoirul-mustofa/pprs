@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Berita</h1>
</div>

<div class="table-responsive col-lg-12">
    <a href="/dashboard/berita/create" class="btn btn-primary mb-3">Tambah berita baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($semuaBerita as $b)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->title }}</td>
            <td>{{ $b->kategori->name }}</td>
            <td>
                <a href="/dashboard/berita/{{ $b->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="#" class="badge bg-danger"><span data-feather="x-circle"></span></a>
            </td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>






@endsection
