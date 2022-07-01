@extends('layouts.main')
@section('konten')

<div class="container rounded mt-1 p-3" style="
    background-color:rgba(238, 252, 246, 0.799);
    backdrop-filter: blur(7000px);">


    {{-- <img src="storage/pengumuman/BROSUR YAYASAN DEPAN.jpg" class="img-fluid" alt="..."> --}}
    {{-- @dd($pengumuman) --}}
    <div class="border border-2 border-dark">
        <img src="{{ asset($pengumuman->link) }}" class="img-fluid" alt="...">
    </div>
    <span   span class="mt-3 d-block"></span>
                <div class="border border-2 border-dark">
        <img src="/storage/pengumuman/BROSUR YAYASAN BELAKANG.jpg" class="img-fluid" alt="...">
    </div>

</div>


@endsection
