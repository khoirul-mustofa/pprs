@extends('dashboard.layouts.main')
@section('container')
    <h3 class="border-bottom py-3 col-lg-9">Sambutan</h3>
    <div class="row mt-3 col-lg-9 ms-lg-1">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="text-center">{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>


    <a href="/dashboard/sambutan/{{ $sambutan[0]->id }}/edit" class="btn btn-warning m-2">Edit Sambutan</a>

    <div class="row my-1 px-3 pb-3">
        <div class="col-lg-9 border border-info rounded" style="background-color:rgba(9, 104, 96, 0.623);">
            <div class="row" style="overflow: hidden">
                <div class="col">
                    <h4 class="text-center mt-3 text-light">{{ $sambutan[0]->title }}</h4>
                    <div class="row d-flex justify-content-around mt-1">
                        <div class="col-7 bg-warning mx-2" style="padding: 2px"></div>
                    </div>
                    <h6 class="text-center mt-1 text-light fw-semibold">{{ $sambutan[0]->name }}</h6>
                    <div class="row d-flex justify-content-around mb-2">
                        <div style="max-width: 300px">
                            <img src="{{ asset('storage/' . $sambutan[0]->image) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md py-5 px-3 pe-md-5 text-light">
                    {!! $sambutan[0]->konten !!}
                </div>
            </div>
        </div>
    </div>
@endsection
