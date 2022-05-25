@extends("layouts.main")
@section("konten")
<div class="row justify-content-center">
    <div class="col-md-4">

        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            @if(session()->has('success'))
                {{ session('success') }}
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        <main class="form-signin w-100 m-auto container">
            <h1 class="text-center mt-5">Login</h1>
            <form>
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
          </main>
    </div>
</div>


@endsection
