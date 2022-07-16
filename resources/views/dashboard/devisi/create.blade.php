@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-6">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Data Devisi</h1>
        </div>

        <div class="">
            <a href="/dashboard/devisi/" class="btn btn-success my-3"><span data-feather="chevron-left"></span> Kembali</a>
        </div>

        <form method="POST" action="/dashboard/devisi/create">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
