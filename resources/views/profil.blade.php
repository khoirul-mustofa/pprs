@extends('layouts.main')
@section('konten')
    <div class="container rounded mt-1"
        style="
    background-color:rgba(238, 252, 246, 0.799);
    backdrop-filter: blur(7000px);">
        <div class="row">
            <div class="col-md-5 col-12 my-2 ml-3 p-md-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('storage/lain-lain/pprs_logo_profil500.png') }}"
                        class=" img-fluid rounded rounded-circle  shadow-lg img-thumbnail my-3" alt="roudlotussholihin"
                        style="
                        background-color:rgba(238, 252, 246, 0);">
                </div>
                <h3 class="text-center p-md-3 fw-bold">ROUDLOTUSSHOLIHIN</h3>
            </div>
            <div class=" my-3 ml-3 col-12 col-md-6 p-md-5">
                <h4 class="fw-bold my-1 my-md-4">Latar Belakang</h4>
                <p>Pondok Pesantren Roudlotussholihin Purwosari berdiri sejak tanggal 1 April 1963 yang beralamatkan di Jalan KH. Bustomil Karim Purwosari Kecamatan Padangratu Lampung Tengah didirikan oleh KH. Bustomil Karim al-Maghfurlah atas dasar tanggung jawab sosial kemasyarakatan sesuai  dengan ajaran dan syari’at Islam yang berhaluan Ahlussunah Waljama’ah dengan sistem salafiah.</p>
                <hr class="w-100 clearfix mt-3 mb-md-3" />
                <span class="py-3 fw-bold">Pendidikan Formal</span>
                <ul class="ms-4 p-md-0">
                    <li>MI Roudlotul Huda</li>
                    <li>MTS Roudlotul Huda</li>
                    <li>SMA Roudlotul Huda</li>
                    <li>SMK Roudlotul Huda</li>
                    <li>STIT Roudlotul Huda</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="container col-lg-8 rounded px-3">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    @foreach ($profil as $p)
                        <header class="mb-2 ms-2">
                            <!-- Post title-->

                            <div class="row col-md-7">
                                <div class="border rounded border-success  border-1 p-1">
                                    <div class="border border-success rounded border-1 p-1">
                                        <h2 class="fw-bolder ms-2">{{ $p->title }}</h2>
                                    </div>
                                </div>
                            </div>


                            <!-- Post meta content-->
                        </header>
                        <section class="mb-3">
                            {!! $p->konten_first !!}
                        </section>
                        <!-- Preview image figure-->
                        @if ($p->image)
                            <figure class="mb-3">
                                <img class="img-fluid rounded" src="{{ asset('storage/' . $p->image) }}" alt="..." />
                            </figure>
                        @else
                            {{-- <figure class="mb-3"><img class="img-fluid rounded"
                                    src="https://source.unsplash.com/900x400?mosque " alt="..." /></figure> --}}
                        @endif
                        <!-- Post content-->
                        <section class="mb-5">
                            {!! $p->konten !!}
                        </section>
                    @endforeach

                </article>
            </div>
        </div>
    </div>
@endsection
