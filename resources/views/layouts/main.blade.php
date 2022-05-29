<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/beranda.css">
    <link rel="stylesheet" href="css/berita.css">
    <link rel="stylesheet" href="css/navbar.css">

    <title>PPRS | {{ $title }}</title>
  </head>
  <body style="background-color: #10a67f;">


      {{-- @include('partials.navbar')  disini akan tersimpan atatu terdapat halaman navbar--}}
      @include('partials.navbar')
      @yield('konten')
      {{-- @include('partials.footer') --}}


  </body>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
