@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="text-center text-dark">Selamat Datang, {{ auth()->user()->name }}</h5>
    </div>

    <div class="row mt-3">
        <div class="col-md-12 col-lg-4 col-xxl-3 mt-3">
            <a href="/dashboard/pendaftaran-santri" class="text-decoration-none">
                <div class="card shadow-lg p-1">
                    <div class="row">
                        <div class="col-3 col-md-2 col-lg-3  col-xxl-3 bg-warning rounded-2 ms-3 my-1 p-3">
                            <img src="{{ asset('storage/favicon/icons8-users-40.png') }}" />
                        </div>
                        <div class="col">
                            <h5 class="text-dark mt-2 text-start">Pendaftar Dalam Proses</h5>
                            <h5 class="text-dark mt-1 me-3 text-start">{{ $santriDiproses }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-12 col-lg-4 col-xxl-3 mt-3">
            <a href="/dashboard/pendaftaran-santri" class="text-decoration-none">
                <div class="card shadow-lg p-1">
                    <div class="row">
                        <div class="col-3 col-md-2 col-lg-3  col-xxl-3 bg-warning rounded-2 ms-3 my-1 p-3">
                            <img src="{{ asset('storage/favicon/icons8-users-40.png') }}" />
                        </div>
                        <div class="col">
                            <h5 class="text-dark mt-2 text-start">Santri Aktif</h5>
                            <h5 class="text-dark mt-1 me-3 text-start">{{ $santriAktif }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-12 col-lg-4 col-xxl-3 mt-3">
            <a href="/dashboard/pendaftaran-santri" class="text-decoration-none">
                <div class="card shadow-lg p-1">
                    <div class="row">
                        <div class="col-3 col-md-2 col-lg-3 col-xxl-3 bg-warning rounded-2 ms-3 my-1 p-3">
                            <img src="{{ asset('storage/favicon/icons8-users-40.png') }}" />
                        </div>
                        <div class="col">
                            <h5 class="text-dark mt-2 text-start">Santri Non Aktif</h5>
                            <h5 class="text-dark mt-1 me-3 text-start">{{ $santriNonAktif }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-12 col-lg-4 col-xxl-3 mt-3">
            <a href="/dashboard/berita" class="text-decoration-none">
                <div class="card shadow-lg p-1">
                    <div class="row">
                        <div class="col-3 col-md-2 col-lg-3  col-xxl-3 bg-danger rounded-2 ms-3 my-1 p-3">
                            <img src="{{ asset('storage/favicon/icons8-news-40.png') }}" />
                        </div>
                        <div class="col">
                            <h5 class="text-dark mt-2 text-start">Berita</h5>
                            <h5 class="text-dark mt-1 me-3 text-start">{{ $berita }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-12 col-lg-4 col-xxl-3 mt-3">
            <a href="/dashboard/pendaftaran-santri" class="text-decoration-none">
                <div class="card shadow-lg p-1">
                    <div class="row">
                        <div class="col-3 col-md-2 col-lg-3 col-xxl-3 bg-warning rounded-2 ms-3 my-1 p-3">
                            <img src="{{ asset('storage/favicon/icons8-users-40.png') }}" />
                        </div>
                        <div class="col">
                            <h5 class="text-dark mt-2 text-start">Pengurus</h5>
                            <h5 class="text-dark mt-1 me-3 text-start">{{ $pengurus }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-12 col-lg-4 col-xxl-3 mt-3">
            <a href="/dashboard/pengumuman" class="text-decoration-none">
                <div class="card shadow-lg p-1">
                    <div class="row">
                        <div class="col-3 col-md-2 col-lg-3  col-xxl-3 bg-info rounded-2 ms-3 my-1 p-3">
                            <img src="{{ asset('storage/favicon/icons8-announcement-40.png') }}" />
                        </div>
                        <div class="col">
                            <h5 class="text-dark mt-2 text-start">Pengumuman</h5>
                            <h5 class="text-dark mt-1 me-3 text-start">{{ $pengumuman }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
