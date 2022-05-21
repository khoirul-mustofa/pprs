
@extends('layouts.main')

@section('konten')
<link rel="stylesheet" href="/css/beranda.css">

{{-- headline --}}
<div class="container-fluid">
    <div class="container">
     
      <div class="row">
        {{-- <img src="https://i.ytimg.com/vi/r8DMHagemHI/maxresdefault.jpg" class="img-fluid h-50 w-100 shadow-lg mt_-1" alt="..."> --}}
      </div>
      
      <div class="row pt-5">
        <div class="col-12">
          <div class="row">
            <h2 class="fs-2 fw-bold text-center text-light">Untuk Anda Hari ini</h2>
            <div class="row d-flex justify-content-center mt-1 mx-auto">               
              <div class="col-1 bg-warning mx-2" style="padding: 2px"></div>
              <div class="col-1 bg-warning" style="padding: 2px"></div>
            </div>
          </div>                
        </div>
      </div>
        <div class="album py-4 py-md-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">  
              {{-- card akan di looping atau sesuai isi dengan jumlah data --}}

              <div class="col">
                <div class="card shadow-lg">
                  <img class="rounded-2" src="https://images.unsplash.com/photo-1512632578888-169bbbc64f33?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bW9zcXVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                  <div class="card-body">
                     <a href="#" class="card-text fw-bold fs-5 text-decoration-none text-dark">Lorem, ipsum dolor.</a>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted"><span class="fw-bold">Updated:</span> 25 May 2022</small>
                    </div>
                  </div>
                </div>
              </div>
              
              
      
              
              
              
            </div>
          
        </div>
    

          <div class="row pt-5">
            <div class="col-12">
              <div class="row">
                <h2 class="fs-2 fw-bold text-center text-light">Tenaga Pendidik</h2>
                <div class="row d-flex justify-content-center mt-1 mx-auto">               
                  <div class="col-1 bg-warning mx-2" style="padding: 2px"></div>
                  <div class="col-1 bg-warning" style="padding: 2px"></div>
                </div>
              </div>                
            </div>
          </div>
          
        
          
          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-3 py-5 ms-md-auto">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1 ">
                <img src="https://media.istockphoto.com/vectors/stock-500x500-material-design-vector-id1136505446?k=20&m=1136505446&s=612x612&w=0&h=jr-1mHY7mD2Lzg8L-E24FrmPoPJFcmXjNFtTypUfg_I=" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                  <p class="fs-4 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>
          
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1 ">
                <img src="https://media.istockphoto.com/vectors/stock-500x500-material-design-vector-id1136505446?k=20&m=1136505446&s=612x612&w=0&h=jr-1mHY7mD2Lzg8L-E24FrmPoPJFcmXjNFtTypUfg_I=" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                  <p class="fs-4 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>
          
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1 ">
                <img src="https://media.istockphoto.com/vectors/stock-500x500-material-design-vector-id1136505446?k=20&m=1136505446&s=612x612&w=0&h=jr-1mHY7mD2Lzg8L-E24FrmPoPJFcmXjNFtTypUfg_I=" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                  <p class="fs-4 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>
      </main>
      <div class="row d-flex justify-content-center mx-auto my-5">
        <div class="col-md-4 col-6">
          <div class="wrap">
            <button class="button" id="btn1">Tampilkan Pendidik</button>
          </div>
        </div>
      </div>
    </div>
  

</div>



    <!--  -->












  {{-- <div class="row bg-success">
    <div class="row">
      <h2 class="fw-bold text-center mt-5">Berita Terbaru</h2>
      <div class="position-relative ml-- top-0 start-50 mb-5 mt--">
       <svg height="15" width="180">
         <line x1="0" y1="0" x2="65" y2="0" style="stroke:rgb(254, 220, 0);stroke-width:13" /> 
         <line x1="70" y1="0" x2="135" y2="0" style="stroke:rgb(254, 220, 0);stroke-width:13" />
       </svg>
      </div>
     </div>
  </div> --}}

     
  


@endsection