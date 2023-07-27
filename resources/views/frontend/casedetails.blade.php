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
        <div class="row">
          <div class="col-12 wow fadeInUp" id="case-section-1">
          <h3>Client</h3>
          <h6>We are looking for individuals who are ready to develop daily and not afraid of difficult tasks</h6>
          <p>So, the height and width is not fixed, and it is calculated dynamically according to the diminutions of the window. Under that div, there is another one that has the<b> ID header</b> “navigation bar”, the header is initially <em>positioned</em> relatively under div.fullscreen – however, I am trying to position it as Fixed when the top of the #header reaches the top of the browser window. So here is what I am <u>playing around</u>, it toggles the Fixed style, but it does not toggle it at the right place…</p>
            </div>
         <!-- end col-12 -->
          <div class="col-12 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case01.png')}}" alt="Image"></figure>
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
           <div class="col-12 wow fadeInUp" id="case-section-2">
          <h3>Concept</h3>
          <h6>We are looking for individuals who are ready to develop daily and not afraid of difficult tasks</h6>
          <p>So, the height and width is not fixed, and it is calculated dynamically according to the diminutions of the window. Under that div, there is another one that has the<b> ID header</b> “navigation bar”, the header is initially <em>positioned</em> relatively under div.fullscreen – however, I am trying to position it as Fixed when the top of the #header reaches the top of the browser window. So here is what I am <u>playing around</u>, it toggles the Fixed style, but it does not toggle it at the right place…</p>
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
          <h6>We are looking for individuals who are ready to develop daily and not afraid of difficult tasks</h6>
          <p>So, the height and width is not fixed, and it is calculated dynamically according to the diminutions of the window. Under that div, there is another one that has the<b> ID header</b> “navigation bar”, the header is initially <em>positioned</em> relatively under div.fullscreen – however, I am trying to position it as Fixed when the top of the #header reaches the top of the browser window. So here is what I am <u>playing around</u>, it toggles the Fixed style, but it does not toggle it at the right place…</p>
            </div>
         <!-- end col-12 -->
          <div class="col-12 wow fadeInUp">
            <figure><img src="{{asset('frontend/images/case08.png')}}" alt="Image"></figure>
          </div>
          <!-- end col-12 --> 
           <div class="col-12 wow fadeInUp" id="case-section-4">
          <h3>Result</h3>
          <h6>We are looking for individuals who are ready to develop daily and not afraid of difficult tasks</h6>
          <p>So, the height and width is not fixed, and it is calculated dynamically according to the diminutions of the window. Under that div, there is another one that has the<b> ID header</b> “navigation bar”, the header is initially <em>positioned</em> relatively under div.fullscreen – however, I am trying to position it as Fixed when the top of the #header reaches the top of the browser window. So here is what I am <u>playing around</u>, it toggles the Fixed style, but it does not toggle it at the right place…</p>
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
      </div>
      <!-- end container --> 
    </section>
    <!-- end case-details -->
  </main>
  <!-- end main -->
    
@endsection