@extends('dashboard.layouts.main')
@section('container')
    @foreach ($data as $d)
        <div class="container">
            <div class="row col-lg-6 ms-lg-5">
                <div class="col g-2">
                    <div style="max-width: 800px">
                        <img src="{{ asset('storage/' . $d->image) }}" alt="" class="img-fluid rounded-2">
                    </div>
                    <div class="d-grid gap-2">
                        <a href="/dashboard/banner/{{ $d->id }}/edit" class="btn btn-warning my-2">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
