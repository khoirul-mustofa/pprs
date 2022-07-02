{{-- @extends('pengurus.layouts.main')
@section('body')
@endsection --}}
@extends('layouts.main')
@section('konten')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
<style>
    h4,h5{
        font-family: Iceberg;
    }
    .container{
        background-color: #E9F5F2
    }
    h2{
        font-size: 26px;
    }
</style>
<div class="container">

    {{-- Awal Drop Down --}}
    <div class="dropdown-center d-lg-none px-4">
        <button class="btn dropdown-toggle shadow-none ms-5" type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
          Pengurus Pondok Pesantren
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
          <li><a class="dropdown-item" href="#pondok-putra">Pengurus Pondok Putra</a></li>
          <li><a class="dropdown-item" href="#pondok-putri">Pengurus Pondok Putri</a></li>
        </ul>
      </div>
      {{-- Akhir drop down --}}


    <div class="row">
        {{-- Awal side List --}}
        <div class="col-lg-4 ms-lg-5 d-none d-lg-block">
            <h2 class="mt-lg-5">Pengurus Pondok</h2>
            <ul class="list-unstyled ms-lg-5 mt-lg-3">
                <li><a href="#pondok-putra" class="text-decoration-none text-success">Pengurus Pondok Putra</a></li>
                <li><a href="#pondok-putri" class="text-decoration-none text-success">Pengurus Pondok Putri</a></li>
            </ul>
        </div>
        {{-- Akhir side List --}}

        <div class="col-lg-5 col-12" id="pondok-putra">
            <h1 class="py-lg-4 text-center text-lg-start mb-3">Pengurus Pondok Putra</h1>
            <div class="row">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-lg-4 ms-lg-3 p-lg-3 p-5">
                            <img src="https://source.unsplash.com/1080x1080?head" class="rounded-circle img-fluid " alt="">
                        </div>
                        <div class="col pe-lg-5 pt-lg-2">
                            <h4 class="text-center mt-lg-4 pt-lg-3">Ketua Pondok Pesantren</h4>
                            <hr class="w-100 clearfix" />
                            <h5 class="text-center mb-lg-3 mb-4">Ust. M. HASANUDIN,S.Pd.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-lg-4 ms-lg-3 p-lg-3 p-5">
                            <img src="https://source.unsplash.com/1080x1080?head" class="rounded-circle img-fluid " alt="">
                        </div>
                        <div class="col pe-lg-5 pt-lg-2">
                            <h4 class="text-center mt-lg-4 pt-lg-3">Ketua Pondok Pesantren</h4>
                            <hr class="w-100 clearfix" />
                            <h5 class="text-center mb-lg-3 mb-4">Ust. M. HASANUDIN,S.Pd.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-lg-4 ms-lg-3 p-lg-3 p-5">
                            <img src="https://source.unsplash.com/1080x1080?head" class="rounded-circle img-fluid " alt="">
                        </div>
                        <div class="col pe-lg-5 pt-lg-2">
                            <h4 class="text-center mt-lg-4 pt-lg-3">Ketua Pondok Pesantren</h4>
                            <hr class="w-100 clearfix" />
                            <h5 class="text-center mb-lg-3 mb-4">Ust. M. HASANUDIN,S.Pd.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="py-lg-4 text-center text-lg-start mb-3">Pengurus Pondok Putri</h1>
            <div class="row">
                <div class="card mb-3" id="pondok-putri">
                    <div class="row">
                        <div class="col-lg-4 ms-lg-3 p-lg-3 p-5">
                            <img src="https://source.unsplash.com/1080x1080?head" class="rounded-circle img-fluid " alt="">
                        </div>
                        <div class="col pe-lg-5 pt-lg-2">
                            <h4 class="text-center mt-lg-4 pt-lg-3">Ketua Pondok Pesantren</h4>
                            <hr class="w-100 clearfix" />
                            <h5 class="text-center mb-lg-3 mb-4">Ust. M. HASANUDIN,S.Pd.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-lg-4 ms-lg-3 p-lg-3 p-5">
                            <img src="https://source.unsplash.com/1080x1080?head" class="rounded-circle img-fluid " alt="">
                        </div>
                        <div class="col pe-lg-5 pt-lg-2">
                            <h4 class="text-center mt-lg-4 pt-lg-3">Ketua Pondok Pesantren</h4>
                            <hr class="w-100 clearfix" />
                            <h5 class="text-center mb-lg-3 mb-4">Ust. M. HASANUDIN,S.Pd.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-lg-4 ms-lg-3 p-lg-3 p-5">
                            <img src="https://source.unsplash.com/1080x1080?head" class="rounded-circle img-fluid " alt="">
                        </div>
                        <div class="col pe-lg-5 pt-lg-2">
                            <h4 class="text-center mt-lg-4 pt-lg-3">Ketua Pondok Pesantren</h4>
                            <hr class="w-100 clearfix" />
                            <h5 class="text-center mb-lg-3 mb-4">Ust. M. HASANUDIN,S.Pd.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection