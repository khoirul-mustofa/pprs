@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h4">Selamat Datang, {{ auth()->user()->name }}</h4>

    </div>

    <div class="row mt-5">
        <div class="col-md-3 mt-3">
            <a href="/dashboard/berita" class="text-decoration-none">
                <div class="card bg-danger p-3">
                    <label class="text-light">Total Berita</label>
                    <div class="row">
                        <div class="col">
                            <label class="h1 fw-bold text-light ms-3 disable">B</label>
                        </div>
                        <div class="col">
                            <label class="h2 text-light mt-1">{{ $berita }}</label>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-3">
            <a href="/dashboard/pengurus" class="text-decoration-none">
                <div class="card bg-warning  p-3">
                    <label class="text-light">Total Pengurus</label>
                    <div class="row">
                        <div class="col">
                            <label class="h1 fw-bold text-light ms-3 disable">P</label>
                        </div>
                        <div class="col">
                            <label class="h2 text-light mt-1">{{ $pengurus }}</label>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-3">
            <a href="/dashboard/pendaftaran-santri" class="text-decoration-none">
                <div class="card bg-success  p-3">
                    <label class="text-light">Total Pendaftar</label>
                    <div class="row">
                        <div class="col">
                            <label class="h1 fw-bold text-light ms-3 disable">D</label>
                        </div>
                        <div class="col">
                            <label class="h2 text-light mt-1">{{ $pendaftar }}</label>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-3">
            <a href="#" class="text-decoration-none">
                <div class="card bg-info  p-3">
                    <label class="text-light">Total Berita</label>
                    <div class="row">
                        <div class="col">
                            <label class="h1 fw-bold text-light ms-3 disable">B</label>
                        </div>
                        <div class="col">
                            <label class="h2 text-light mt-1">300</label>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
