
@extends('layouts.main')
@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @include('pengurus.layouts.sidebar')
        </div>
        <div class="col-md-10">
            @yield('body')
        </div>
{{--
      <main class="col-md-9 ms-sm-auto col-lg-10 ">



      </main> --}}
    </div>
  </div>

@endsection




