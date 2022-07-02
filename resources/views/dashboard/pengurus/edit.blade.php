@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pengurus</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/pengurus/{{ $pengurus->id }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name')
              is-invalid
          @enderror" id="name" name="name" required value="{{ old('name', $pengurus->name) }}">
          @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="devisi" class="form-label">Devisi</label>
            <select class="form-select" name="devisi">
                @foreach ($devisi as $d)
                    @if(old('devisi', $pengurus->devisi_id) == $d->id)
                        <option value="{{ $d->id }}" selected>{{ $d->name }}</option>
                    @else
                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
@endsection
