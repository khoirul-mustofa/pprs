@extends('layouts.main')
@section('konten')
    <div class="container rounded mt-1"
        style="
    background-color:rgba(238, 252, 246, 0.799);
    backdrop-filter: blur(7000px);">
        <div class="row">
            <div class="col-md-5 col-12 my-2 ml-3 p-md-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('storage/lain-lain/LG.jpg') }}"
                        class=" img-fluid rounded rounded-circle  shadow-lg img-thumbnail my-3" alt="roudlotussholihin">
                </div>
                <h3 class="text-center p-md-3 fw-bold">ROUDLOTUSSHOLIHIN</h3>
            </div>
            <div class=" my-3 ml-3 col-12 col-md-6 p-md-5">
                <h4 class="fw-bold my-1 my-md-4">Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero asperiores quasi qui sit accusamus rerum
                    error ab, blanditiis exercitationem, et ex accusantium tenetur iste quod amet ad iusto sequi. Tempore
                    beatae exercitationem assumenda ipsam nihil asperiores excepturi alias provident aut eum quaerat, ut
                    autem optio.</p>
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
            <div class="container col-lg-8 rounded px-3">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    @foreach ($profil as $p)
                        <header class="mb-3 ms-2">
                            <!-- Post title-->

                            <div class="row col-md-7">
                                <div class="border border-info border-2 p-1">
                                    <div class="border border-info border-1 p-1">
                                        <h2 class="fw-bolder ms-2">{{ $p->title }}</h2>
                                    </div>
                                </div>
                            </div>


                            <!-- Post meta content-->
                        </header>
                        <section class="mb-3">
                            {!! $p->konten_first !!}
                        </section>
                        <!-- Preview image figure-->
                        @if ($p->image)
                            <figure class="mb-3"><img class="img-fluid rounded"
                                    src="{{ asset('storage/' . $p->image) }}" alt="..." /></figure>
                        @else
                            <figure class="mb-3"><img class="img-fluid rounded"
                                    src="https://source.unsplash.com/900x400?mosque " alt="..." /></figure>
                        @endif
                        <!-- Post content-->
                        <section class="mb-5">
                            {!! $p->konten !!}
                        </section>
                    @endforeach

                </article>
            </div>
        </div>
    </div>
@endsection
