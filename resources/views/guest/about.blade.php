<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">About</span>
    </h1>

    
<link rel="shortcut icon" href="{{asset('icon.png')}}">

@extends('layouts.user')
@section('content')
@foreach ($Lainnya as $data) 
<body style="background:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url(../img/img1/{{$data->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">
@foreach ($About as $data) 



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