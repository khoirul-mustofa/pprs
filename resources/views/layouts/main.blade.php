<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/beranda.css">
    <link rel="stylesheet" href="css/berita.css">
    <link rel="stylesheet" href="css/navbar.css">

    <title>PPRS | {{ $title }}</title>
</head>

<body style="background-color: #10a67f;">
    {{-- @include('partials.navbar')  disini akan tersimpan atatu terdapat halaman navbar --}}
    @include('partials.navbar')
    @yield('konten')
    {{-- @include('partials.footer') --}}
    <!-- Footer -->
    <footer class="bg-white text-center text-lg-start text-dark rounded mt-3 container shadow">
        <!-- Grid container -->
        <div class="p-4 pb-0 ">
            <!-- Section: Links -->
            <section>

                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold fs-4">
                            pprs
                        </h6>
                        <p>
                            Jl.KH.Bustomil Karim Purwosari Kec. Padang Ratu Kab. Lampung Tengah Kode Pos: 34176
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none mt-2" />

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold fs-4">
                            pprs
                        </h6>
                        <a href="#" class="text-decoration-none text-dark fs-6">PP Roudlotussholihin</a>
                        <br>
                        <a href="#" class="text-decoration-none text-dark">MI Roudlotul Huda</a>
                        <br>
                        <a href="#" class="text-decoration-none text-dark">MTS Roudlotul Huda</a>
                        <br>
                        <a href="#" class="text-decoration-none text-dark">SMA Roudlotul Huda</a>
                        <br>
                        <a href="#" class="text-decoration-none text-dark">SMK Roudlotul Huda</a>
                        <br>
                        <a href="#" class="text-decoration-none text-dark">STIT Roudlotul Huda</a>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none mt-3" />
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                        <!-- Facebook -->
                        <a href="https://id-id.facebook.com/pprspusat/"><img
                                src="https://img.icons8.com/fluency/32/000000/facebook-new.png" /></a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/pprs_purwosari/"><img
                                src="https://img.icons8.com/fluency/32/000000/instagram-new.png" /></a>
                        <!-- Youtube -->
                        <a href="https://www.youtube.com/channel/UCUs1ASwhzh_Opx-zH37BXsw/featured?app=desktop"><img
                                src="https://img.icons8.com/color/32/000000/youtube-play.png" /></a>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 mt-3" style="background-color: rgba(212, 204, 204, 0.2)">
            © 2022 Copyright <span class="fw-bold text-warning">pprs Pusat</span>

        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>
