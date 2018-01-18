<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Store</span>
    </h1>

    
@foreach ($Lainnya as $data1) 
@extends('layouts.user')
@section('content')
 <body style="background:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url(../img/img1/{{$data1->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">

@foreach ($Store as $data) 


    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{!!$data->textkecilatas!!}</span>
                <span class="section-heading-lower">{!!$data->textbesaratas!!}</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Senin
                  <span class="ml-auto">{!!$data->Senin!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Selasa
                  <span class="ml-auto">{!!$data->Selasa!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Rabu
                  <span class="ml-auto">{!!$data->Rabu!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Kamis
                  <span class="ml-auto">{!!$data->Kamis!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Jum'at
                  <span class="ml-auto">{!!$data->Jumat!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sabtu
                  <span class="ml-auto">{!!$data->Sabtu!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Minggu
                  <span class="ml-auto">{!!$data->Minggu!!}</span>
                </li>
              </ul>
              <p class="address mb-5">
                <p class="mb-0">
                
                  <b>Untuk Menghubungi:</b>
                <br>
                <br>
                WhatsApp/SMS/Telp : {!!$data1->notlp!!}
                <br>
                Line : {!!$data1->line!!}
                <br>
                E-mail : {!!$data1->email!!}
              </p>
              <br>
              <br>

              <b>Atau Datang Ke Offline Store Kami Di</b>
              <br>
              
              <p class="address mb-5">
                <em>
                  <strong>{!!$data1->alamat!!}</strong>
                </em>
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/img/img1/{{$data->cover}}" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">{!!$data->textkecilbold!!}</span>
                  <span class="section-heading-lower">{!!$data->textbesar!!}</span>
                </h2>
                <p>{!!$data->textkecil!!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endforeach
@endforeach
@endsection