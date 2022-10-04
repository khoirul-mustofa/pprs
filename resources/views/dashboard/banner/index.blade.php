@extends('dashboard.layouts.main')
@section('container')
    <div class="container col-lg-6">
        <h3 class="border-bottom mb-3 py-3">Banner</h3>
        @foreach ($data as $d)
            <div class="row">
                <div class="col g-2">
                    <div style="max-width: 800px">
                        <img src="{{ asset('storage/' . $d->image) }}" alt="image" class="img-fluid rounded-2">
                    </div>
                    <div class="d-grid gap-2">
                        <a href="/dashboard/banner/{{ $d->id }}/edit" class="btn btn-warning my-2">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
