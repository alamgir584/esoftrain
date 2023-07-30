@extends('layouts.app')
@section('content')

<header class="page-header">
    <div class="video-bg">
      <video src="{{asset('frontned/videos/video.mp4')}}" autoplay muted loop></video>
    </div>
    <!-- end video-bg -->
    <div class="inner">
      <h2 data-text="PROJECT">PROJECT</h2>
      <p>We work in an integral manner and address projects in the following dimensions.</p>
    </div>
    <!-- end inner -->
  </header>
  <!-- end page-header -->

  <main>
    <section class="case-details">
     <div class="case-navbar">
             <div class="container">
              <ul>
                <li> <a href="#case-section-1">Client</a> </li>
                <li> <a href="#case-section-2">Concept</a> </li>
                <li> <a href="#case-section-3">Services</a> </li>
                <li> <a href="#case-section-4">Result</a> </li>
              </ul>
              </div>
              <!-- end container -->
            </div>
      <div class="container">
        @foreach ($casedetails as $row)
            
        <div class="row">
          <div class="col-12 wow fadeInUp" id="case-section-1">
          <h3>Client</h3>
          <h6>{{$row->client_title}}</h6>
          <p>{{$row->client_details}}</p>
            </div>
         <!-- end col-12 -->
          <div class="col-12 wow fadeInUp">
            <figure><img src="{{asset($row->image_client_main)}}" alt="{{$row->name}}"></figure>
          </div>
          <!-- end col-12 -->
          <div class="col-md-6 wow fadeInUp">
            <figure><img src="{{asset($row->image_client)}}" alt="{{$row->name}}"></figure>
          </div>
          <!-- end col-6 -->
          {{-- <div class="col-md-6 wow fadeInUp">
            <figure><img src="{{asset($row->image_client_main)}}" alt="{{$row->name}}"></figure>
          </div> --}}
          <!-- end col-6 -->
           <div class="col-12 wow fadeInUp" id="case-section-2">
          <h3>Concept</h3>
          <h6>{{$row->concept_title}}</h6>
          <p>{{$row->concept_details}}</p>
            </div>
         <!-- end col-12 -->
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case04.png')}}" alt="Image"></figure>
          </div>
          <!-- end col-3 -->
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case05.png')}}" alt="Image"></figure>
          </div>
          <!-- end col-3 -->
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case06.png')}}" alt="Image"></figure>
          </div>
          <!-- end col-3 -->
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case07.png')}}" alt="Image"></figure>
          </div>
          <!-- end col-3 -->
           <div class="col-12 wow fadeInUp" id="case-section-3">
          <h3>Services</h3>
          <h6>{{$row->service_title}}</h6>
          <p>{{$row->service_details}}</p>
            </div>
         <!-- end col-12 -->
          <div class="col-12 wow fadeInUp">
            <figure><img src="{{asset($row->image_service)}}" alt="{{$row->name}}"></figure>
          </div>
          <!-- end col-12 --> 
           <div class="col-12 wow fadeInUp" id="case-section-4">
          <h3>Result</h3>
          <h6>{{$row->result_title}}</h6>
          <p>{{$row->result_details}}</p>
            </div>
         <!-- end col-12 -->
         <div class="col-md-6 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case02.png')}}" alt="Image"></figure>
          </div>
          <!-- end col-6 -->
          <div class="col-md-6 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case03.png')}}" alt="Image"></figure>
          </div>
          <!-- end col-6 -->
        </div>
        <!-- end row --> 
        @endforeach
      </div>
      <!-- end container --> 
    </section>
    <!-- end case-details -->
  </main>
  <!-- end main -->
    
@endsection