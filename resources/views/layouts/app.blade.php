<!doctype html>
<!-- <html lang="en"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>
<head>
  
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1"> 

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#33a16e"/>
<!-- <title>Unicord | Creative Portfolio for Freelancers & Agencies</title> -->
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>esoftrain</title>
{{-- <link href="{{asset('backend/imgages/logo.png')}}" rel="icon"> --}}
<meta name="author" content="Themezinho">
<meta name="description" content="Unicord | Creative Portfolio for Freelancers & Agencies">
<meta name="keywords" content="creative, works, showcase, portfolio, highlight, projects, parallax, agency, digital, studio, css, animation, transition, svg, html, css">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Unicord | Creative Portfolio for Freelancers & Agencies">
<meta property="og:image" content="http://www.themezinho.net/unicord/preview.png">
<meta property="og:site_name" content="unicord">
<meta property="og:title" content="Unicord">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/unicord">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@unicord">
<meta name="twitter:creator" content="@unicord">
<meta name="twitter:title" content="unicord">
<meta name="twitter:description" content="Unicord | Creative Portfolio for Freelancers & Agencies">
<meta name="twitter:image" content="http://www.themezinho.net/unicord/preview.png">

<!-- FAVICON FILES -->
{{-- <link href="{{asset('frontend/ico/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon" sizes="144x144">
<link href="{{asset('frontend/ico/apple-touch-icon-114-precomposed.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('frontend/ico/apple-touch-icon-72-precomposed.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('frontend/ico/apple-touch-icon-57-precomposed.png')}}" rel="apple-touch-icon">
<link href="{{asset('frontend/ico/favicon.png')}}" rel="shortcut icon"> --}}


<!-- CSS FILES -->
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/swiper.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<body>
<div class="preloader">
  <div class="inner">
    <div class="loader">
      <div class="trackbar">
        <div class="loadbar"></div>
      </div>
    </div>
    <!-- end loader -->
    <div class="holder"> <span class="typewriter" id="typewriter"></span> </div>
    <!-- end holder --> 
  </div>
  <!-- end inner --> 
</div>
<!-- end preloader -->

<div class="transition-overlay">
  <div class="green-layer"></div>
  <div class="black-layer"></div>
</div>
<!-- end transition-overlay -->

<nav class="navigation-menu">
    <div class="green-layer"></div>
    <div class="black-layer"></div>
    <div class="inner">
      <ul>
        <li><a href="{{url('/')}}">Home</a>
             {{-- <ul>
            <li><a href="{{url('/')}}">Slider</a></li>
            <li><a href="index-video-bg.html">Video BG</a></li>
            <li><a href="index-particles.html">Particles</a></li>
            <li><a href="index-motion-blur.html">Motion Blur</a></li>
            <li><a href="index-animation.html">Animation</a></li>
          </ul> --}}
        </li>
        <li><a href="{{route('aboutus')}}">About Us</a></li>
        <li><a href="{{route('showcase')}}">Showcases</a>
          {{-- <ul>
            <li><a href="showcases-four-cols.html">4 Columns</a></li>
            <li><a href="showcases-three-cols.html">3 Columns</a></li>
            <li><a href="showcases-two-cols.html">2 Columns</a></li>
          </ul> --}}
        </li>
        <li><a href="{{route('trendingproject')}}">Trending Project</a></li>
        <li><a href="{{route('sayhello')}}">Say Hello</a></li>
      </ul>
      {{-- <address>
      Contornio Ave Kunsgatan 4<br>
      41247 Luxembord<br>
      074-753 5875
      </address> --}}
    </div>
    <!-- end inner --> 
  </nav>
<!-- end navigation-menu -->


  <nav class="navbar">
    <div class="logo"> <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="Image"></a> </div>
    <!-- end logo -->
    <div class="email-us">Say <a href="{{route('sayhello')}}"><span>hello</span>@esoftrain.com</a></div>
    <!-- end email-us -->
    {{-- <div class="languages"> <a href="#" class="active">EN</a> <a href="#">RU</a> </div> --}}
    <!-- end languages -->
    <div class="sandwich-nav"> <b>MENU</b>
      <div class="sandwich-btn circle" id="sandwich-btn" data-dist="7"> <span></span> <span></span> </div>
      <!-- end sandwich-btn --> 
      
    </div>
    <!-- end sandwich-nav --> 
  </nav>
  <!-- end navbar -->


  <ul class="social-media">
    <li><a href="https://www.facebook.com/profile.php?id=100092250554466&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
    {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
    <li><a href="https://www.linkedin.com/company/esoftrain"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCcCxCb7wQVoJ4IyY92vXv3A"><i class="fa fa-youtube-play"></i></a></li>
  </ul>
  
  
  <div class="header-spacing"></div>
  <!-- end header-spacing -->
  <div class="scroll-down"><b>SCROLL DOWN</b><span></span></div>
  <!-- end scroll-down --> 
  
{{-- manin --}}
@yield('content')

<section class="logos">
    <div class="container">
      <ul>
        @foreach ($company as  $row)
        <li class="wow fadeInUp">
          <figure> <img src="{{asset('files/company/'.$row->company_logo)}}" alt="{{$row->company_logo}}">
            <h6>{{$row->company_name}}</h6>
          </figure>
        </li>
        @endforeach
      </ul>
    </div>
    <!-- end container -->
  </section>
  <!-- end logos -->

<footer class="footer">
    <div class="container wow fadeIn"> 
     <img src="{{asset('frontend/images/logo.png')}}" alt="Image">
      <h2>Don't be shy and<br>
        talk to us?</h2>
      <h5>Say hello@esoftrain.com </h5>
      <ul>
        <li><a href="https://www.facebook.com/profile.php?id=100092250554466&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.linkedin.com/company/esoftrain"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCcCxCb7wQVoJ4IyY92vXv3A"><i class="fa fa-youtube-play"></i></a></li>
      </ul>
      <span>© 2023 esoftrain | All Rights Reserved</span> </div>
    <!-- end container --> 
  </footer>
  <!-- end footer --> 


<audio id="link" src="{{asset('frontend/audio/link.mp3')}}" preload="auto"></audio>
<audio id="hover-audio" src="{{asset('frontend/audio/hover.mp3')}}" preload="auto"></audio>


<!-- JS FILES --> 
<script src="{{asset('frontend/js/jquery.min.js')}}"></script> 
<script src="{{asset('frontend/js/popper.min.js')}}"></script> 
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('frontend/js/swiper.min.js')}}"></script> 
<script src="{{asset('frontend/js/wow.min.js')}}"></script> 
<script src="{{asset('frontend/js/isotope.min.js')}}"></script> 
<script src="{{asset('frontend/js/tilt.jquery.js')}}"></script> 
<script src="{{asset('frontend/js/jquery.typewriter.js')}}"></script>
<script src="{{asset('frontend/js/TweenMax.min.js')}}"></script> 
<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>    
<script src="{{asset('frontend/js/particles.min.js')}}"></script>  
<script src="{{asset('frontend/js/jquery.parallax.min.js')}}"></script>  
<script src="{{asset('frontend/js/motion.blur.js')}}"></script> 
<script src="{{asset('frontend/js/scripts.js')}}"></script> 

</body>
</html>