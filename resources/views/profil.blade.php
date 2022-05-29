@extends('layouts.main')
@section('konten')
<div class="container rounded mt-5" style="
    background-color:rgba(238, 252, 246, 0.799);
    backdrop-filter: blur(7000px);">
    <div class="row">
        <div class="col-md-5 col-12 my-2 ml-3 p-md-5">
            <div class="d-flex justify-content-center">
                <img src="https://source.unsplash.com/300x300?mosque" class=" img-fluid rounded rounded-circle  shadow-lg img-thumbnail my-3" alt="roudlotussholihin">
            </div>
            <h3 class="text-center p-md-3 fw-bold">ROUDLOTUSSHOLIHIN</h3>
        </div>
        <div class=" my-3 ml-3 col-12 col-md-6 p-md-5">
            <h4 class="fw-bold my-1 my-md-4">Lorem Ipsum</h4>
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero asperiores quasi qui sit accusamus rerum error ab, blanditiis exercitationem, et ex accusantium tenetur iste quod amet ad iusto sequi. Tempore beatae exercitationem assumenda ipsam nihil asperiores excepturi alias provident aut eum quaerat, ut autem optio.</p>
            <hr class="w-100 clearfix mt-3 mb-md-3" />
            <ul class="p-2 p-md-0">
                <li>Berdiri : Lorem ipsum dolor sit amet elit.</li>
                <li>Berdiri : Lorem ipsum dolor sit amet elit.</li>
                <li>Berdiri : Lorem ipsum dolor sit amet elit.</li>
                <li>Berdiri : Lorem ipsum dolor sit amet elit.</li>
                <li>Berdiri : Lorem ipsum dolor sit amet elit.</li>
            </ul>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-8 bg-light rounded">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1 mt-3">Lorem Ipsum</h1>
                        <!-- Post meta content-->
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="https://source.unsplash.com/900x400?mosque " alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, itaque quis. Ratione voluptatem dolore laborum? Quis nobis fugiat assumenda atque?</p> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, et. Atque ut molestias temporibus? A doloremque nihil impedit accusantium nobis?</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ipsum quaerat aspernatur totam perspiciatis nisi, hic consectetur nulla deserunt atque.</p>
                    </section>
                </article>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Lorem ipsum</div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a class="text-decoration-none" href="#">Lorem ipsum</a></li>
                                    <li><a class="text-decoration-none" href="#">Lorem ipsum</a></li>
                                    <li><a class="text-decoration-none" href="#">Lorem ipsum</a></li>
                                    <li><a class="text-decoration-none" href="#">Lorem ipsum</a></li>
                                    <li><a class="text-decoration-none" href="#">Lorem ipsum</a></li>
                                    <li><a class="text-decoration-none" href="#">Lorem ipsum</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
    </html>
</div>
@endsection
