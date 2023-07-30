@extends('layouts.app')
@section('content')

<header class="header">
    <div class="slider">
      <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="{{asset('frontend/images/slide01.jpg')}}"> </div>
            <!-- end slide-inner --> 
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="{{asset('frontend/images/slide02.jpg')}}"> </div>
            <!-- end slide-inner --> 
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="{{asset('frontend/images/slide03.jpg')}}"> </div>
            <!-- end slide-inner --> 
          </div>
          <!-- end swiper-slide --> 
        </div>
        <!-- Add Arrows -->
        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
          <div class="swiper-slide"> Collabration<a href="#">Explore Case Study
            <div class="plus">+</div>
            </a> </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide"> The Biker<a href="#">Explore Case Study
            <div class="plus">+</div>
            </a> </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide"> Exhitibiton<a href="#">Explore Case Study
            <div class="plus">+</div>
            </a> </div>
          <!-- end swiper-slide --> 
        </div>
      </div>
    </div>
    <!-- end slider -->

   
  </header>
  <!-- end header -->
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
         <ul>

          {{-- <li class="wow fadeInUp one">
            <figure data-tilt> <img src="{{asset('files/product/'.$product->thumbnail)}}" alt="{{$product->name}}" class="thumb">
              <figcaption> 
                <h3>{{ $product->name }}</h3>
                <small>UI-UX Design, WordPress</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
            </figure>
          </li> --}}
          @foreach ($product as $row)
              
          
          <li class="wow fadeInUp one">
            <figure data-tilt> <img src="{{asset($row->thumbnail)}}" alt="{{$row->name}}" class="thumb">
              {{-- ai image path bola dewa ache tai avabe --}}
              <figcaption> <img src="{{asset('frontend/images/logo-brand.png')}}" alt="Image" class="brand">
                <h3>{{$row->name}}</h3>
                <small>UI-UX Design, WordPress</small> <a href="{{route('casedetails',$row->id)}}">CASE DETAILS</a> </figcaption>
            </figure>
          </li>


          {{-- <li class="wow fadeInUp one">
            <figure data-tilt> <img src="{{asset('frontend/images/works01.jpg')}}" alt="Image" class="thumb">
              <figcaption> <img src="{{asset('frontend/images/logo-brand.png')}}" alt="Image" class="brand">
                <h3>Yellow Ginger</h3>
                <small>UI-UX Design, WordPress</small> <a href="{{route('casedetails')}}">CASE DETAILS</a> </figcaption>
            </figure>
          </li> --}}



          {{-- <li class="wow fadeInUp two">
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
          </li> --}}
          @endforeach
        </ul>
    </section>
    <!-- end works -->
    
    
    <section class="features-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 wow fadeInLeft">
            <h2>BENEFITS WITH ESOFTRAIN</h2>
            <h6>All of our products exist to help you customize your website and add some advanced functionality lacks.</h6>
          </div>
          <!-- end col-5 -->
          <div class="col-lg-7">
            <div class="row inner">

              @foreach ($detailscategory as $row)
              <div class="col-md-4 wow fadeInUp"> <img src="{{asset('files/category/'.$row->category_logo)}}" alt="{{$row->category_name}}">
                <h4>{{$row->category_name}}</h4>
                <p>{{$row->category_details}}</p>
                <a href="#">LEARN MORE</a> </div>
              <!-- end col-4 -->
              {{-- <div class="col-md-4 wow fadeInUp"> <img src="{{asset('frontend/images/icon02.png')}}" alt="Image">
                <h4>USER FRIENDLY CMS SYSTEMS</h4>
                <p>Website and add some advanced lacks.</p>
                <a href="#">LEARN MORE</a> </div>
              <!-- end col-4 -->
              <div class="col-md-4 wow fadeInUp"> <img src="{{asset('frontend/images/icon03.png')}}" alt="Image">
                <h4>DIGITAL MEDIA MARKETTING</h4>
                <p>Website and add some advanced functionality.</p>
                <a href="#">LEARN MORE</a> </div>
              <!-- end col-4 -->
              <div class="col-md-4 wow fadeInUp"> <img src="{{asset('frontend/images/icon02.png')}}" alt="Image">
                <h4>MOBILE APPLICATIONS ANDROID & IOS</h4>
                <p>Website and add some advanced functionality</p>
                <a href="#">LEARN MORE</a> </div>
              <!-- end col-4 -->
              <div class="col-md-4 wow fadeInUp"> <img src="{{asset('frontend/images/icon03.png')}}" alt="Image">
                <h4>VIDEO EDITION & TV COMMERCIALS</h4>
                <p>Website and add some advanced functionality</p>
                <a href="#">LEARN MORE</a> </div>
              <!-- end col-4 -->  --}}
              @endforeach
            </div>
            <!-- end row inner --> 
          </div>
          <!-- end col-7 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end features-content -->
    
    
    <section class="full-media-content bg-image" data-background="{{asset('frontend/images/hero01.jpg')}}">
      <div class="sides">
        <figure class="wow fadeInLeft"><img src="{{asset('frontend/images/office01.jpg')}}" alt="Image"></figure>
      </div>
      <!-- end sides -->
      <div class="sides inner-content">
        <div class="inner wow fadeInUp">
          <h5>New Media Digital Agency</h5>
          <h2>INNOVASION</h2>
          <p>Unicord is a creative digital agency, composed of creative designers & experienced developers. You’ll have your own individual apartment and facilities which are inspired by the luxurious life you want to live.</p>
          <a href="#">TAKE A LOOK</a> </div>
        <!-- end inner --> 
      </div>
      <!-- end sides --> 
    </section>
    <!-- end full-media-content -->
  
  </main>
  <!-- end main -->
  
@endsection