{{-- @extends('pengurus.layouts.main')
@section('body')
@endsection --}}
@extends('layouts.main')
@section('konten')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
    <style>
        h4,
        h5 {
            font-family: Iceberg;
        }

        .bg-my-style {
            background-color: #E9F5F2
        }

        h2 {
            font-size: 26px;
        }
    </style>
    <div class="container bg-my-style">

        {{-- Awal Drop Down --}}
        {{-- <div class="dropdown-center d-lg-none px-4">
            <button class="btn dropdown-toggle shadow-none ms-5" type="button" id="dropdownCenterBtn"
                data-bs-toggle="dropdown" aria-expanded="false">
                Pengurus Pondok Pesantren
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                <li><a class="dropdown-item" href="#pondok-putra">Pengurus Pondok Putra</a></li>
                <li><a class="dropdown-item" href="#pondok-putri">Pengurus Pondok Putri</a></li>
            </ul>
        </div> --}}
        {{-- Akhir drop down --}}


        <div class="row">
            {{-- Awal side List --}}
            <div class="col-lg-4 ms-lg-5 d-none d-lg-block">
                <h2 class="mt-lg-5">Pengurus Pondok</h2>
                <ul class="list-unstyled ms-lg-5 mt-lg-3">
                    <li><a href="/pengurus"
                            class="text-decoration-none  {{ Request::is('/pengurus') ? 'text-dark' : '' }}">Pengurus
                            Pondok Putra</a></li>
                    <li><a href="/pengurus-putri"
                            class="text-decoration-none  {{ Request::is('/pengurus-putri') ? 'text-dark' : '' }}">Pengurus
                            Pondok Putri</a></li>
                </ul>
            </div>
            {{-- Akhir side List --}}

            <div class="col-lg-5 col-12" id="pondok-putra">
                <h1 class="py-lg-4 text-center  mb-3">{{ $title }}</h1>
                @foreach ($semuaPengurus as $pengurus)
                    <div class="row mx-1">
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-lg-4 ms-lg-3 p-lg-3 p-5">
                                    @if ($pengurus->image)
                                        <img src="{{ asset('storage/' . $pengurus->image) }}"
                                            class="rounded-circle img-fluid " alt="">
                                    @else
                                        <img src="https://source.unsplash.com/953x952?head"
                                            class="rounded-circle img-fluid " alt="">
                                    @endif
                                </div>
                                <div class="col pe-lg-5 pt-lg-2">
                                    <h4 class="text-center mt-lg-4 pt-lg-3">{{ $pengurus->devisi->name }}</h4>
                                    <hr class="w-100 clearfix" />
                                    <h5 class="text-center mb-lg-3 mb-4">{{ $pengurus->name }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
