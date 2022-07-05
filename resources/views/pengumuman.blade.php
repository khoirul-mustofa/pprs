@extends('layouts.main')
@section('konten')
    <div class="container rounded mt-1 p-3"
        style="
    background-color:rgba(238, 252, 246, 0.799);
    backdrop-filter: blur(7000px);">
        <div class="">
            @if ($pengumuman->count())
                {{-- card akan di looping atau sesuai isi dengan jumlah data --}}
                @foreach ($pengumuman as $p)
                    @if ($p->image)
                        <img src="{{ asset('storage/' . $p->image) }}" class="center rounded img-fluid" alt="...">
                        <span span class="mt-3 d-block"></span>
                    @else
                        <img class="rounded-2" src="https://source.unsplash.com/1920x1080?mosque,muslim img-fluid"
                            alt="">
                    @endif
                @endforeach
            @else
                <h3>Tidak ada pengumuman terkini</h3>
            @endif
        </div>


    </div>
@endsection
