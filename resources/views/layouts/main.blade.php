<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PPRS | {{ $title }}</title>
  </head>
  <body>
   <style>
     body {
    /* background: url("") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
 */
    /* background: rgb(2, 0, 36);
    background: linear-gradient(
        90deg,
        rgba(2, 0, 36, 1) 0%,
        rgba(28, 193, 91, 1) 0%,
        rgba(30, 190, 129, 1) 36%,
        rgba(70, 243, 184, 1) 69%,
        rgba(148, 239, 141, 1) 100%
    ); */
    background-color: #10a67f;
    /* background-image: url('/img/AnimatedShape.svg'); */
}
   </style>
      {{-- @include('partials.navbar')  disini akan tersimpan atatu terdapat halaman navbar--}}
      @include('partials.navbar')
      @yield('konten')
      {{-- @include('partials.footer') --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>



</html>
