@extends('layouts.app')
@section('content')
<header class="page-header">
    <div class="video-bg">
        <video src="videos/video.mp4" autoplay muted loop></video>
    </div>
    <!-- end video-bg -->
    <div class="inner">
        <h2 data-text="SHOWCASES">SHOWCASES</h2>
        <p>We work in an integral manner and address projects in the following dimensions.</p>
    </div>
    <!-- end inner -->
   </header>
   <!-- end page-header -->

   <main>
    <section class="works">
    <div class="container">
    <div class="filter-bar">
     <div class="filter-btn">
         <div class="dots-menu">
        <div class="pix"></div>
        <div class="pix"></div>
        <div class="pix"></div>
        <div class="pix"></div>
        <div class="pix"></div>
        <div class="pix"></div>
        <div class="pix"></div>
        <div class="pix"></div>
        <div class="pix"></div>
    </div>
    <!-- end dots-menu -->
     <span>FILTER</span>
     </div>
     <!-- end filter-btn -->
    <ol class="works-filter">
        <li><a href="javascript:void(0);" data-filter="*" class="current">ALL</a></li>
        <li><a href="javascript:void(0);" data-filter=".one">UI-UX DESIGN</a></li>
        <li><a href="javascript:void(0);" data-filter=".two">DEVELOPMENT</a></li>
        <li><a href="javascript:void(0);" data-filter=".three">WORDPRESS</a></li>
        <li><a href="javascript:void(0);" data-filter=".four">PRINT</a></li>
        <li><a href="javascript:void(0);" data-filter=".five">MOBILE APP</a></li>
    </ol>
     </div>
     <!-- end filter-bar -->
     </div>
     <!-- end container -->
      <ul>
        <li class="wow fadeInUp one">
          <figure data-tilt> <img src="{{asset('frontend/images/works01.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand.png')}}" alt="Image" class="brand">
              <h3>Yellow Ginger</h3>
              <small>UI-UX Design, WordPress</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp two">
          <figure data-tilt> <img src="{{asset('frontend/images/works02.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand2.png')}}" alt="Image" class="brand">
              <h3>Red Tomato</h3>
              <small>Web Design, HTML, Development</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp three">
          <figure data-tilt> <img src="{{asset('frontend/images/works03.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand3.png')}}" alt="Image" class="brand">
              <h3>Mr. Washington</h3>
              <small>App Development, UI-UX Design</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp four">
          <figure data-tilt> <img src="{{asset('frontend/images/works04.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand2.png')}}" alt="Image" class="brand">
              <h3>House MD</h3>
              <small>Print Design, Branding</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp five">
          <figure data-tilt> <img src="{{asset('frontend/images/works05.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand3.png')}}" alt="Image" class="brand">
              <h3>Celebrity</h3>
              <small>UI-UX Design, WordPress</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp one">
          <figure data-tilt> <img src="{{asset('frontend/images/works06.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{('images/logo-brand3.png')}}" alt="Image" class="brand">
              <h3>Man in Black</h3>
              <small>HTML, Development</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp two">
          <figure data-tilt> <img src="{{asset('frontend/images/works07.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand.png')}}" alt="Image" class="brand">
              <h3>Old School</h3>
              <small>App Design, Development</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp three">
          <figure data-tilt> <img src="{{asset('frontend/images/works08.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand2.png')}}" alt="Image" class="brand">
              <h3>Paper Girl</h3>
              <small>UI-UX Design, HTML, Development</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
        <li class="wow fadeInUp four">
          <figure data-tilt> <img src="{{asset('frontend/images/works09.jpg')}}" alt="Image" class="thumb">
            <figcaption> <img src="{{asset('frontend/images/logo-brand3.png')}}" alt="Image" class="brand">
              <h3>Moto Wheel</h3>
              <small>Branding, Print Design</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- end works -->


    </main>
    
@endsection