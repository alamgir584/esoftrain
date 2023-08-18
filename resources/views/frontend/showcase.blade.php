@extends('layouts.app')
@section('content')
<header class="page-header">
    <div class="video-bg">
        <video src="{{asset('frontend/videos/design_-_48420 (1440p).mp4')}}" autoplay muted loop></video>
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

            @foreach ($singlecategory as $row)
            <li><a href="javascript:void(0);" data-filter="{{'.'.$row->id}}">{{$row->category_name}}</a></li>
            @endforeach
        </ol>
         </div>
         <!-- end filter-bar -->
         </div>

         <ul>
         @foreach ($product as $row)
          <li class="wow fadeInUp {{$row->category_id}}">
            <figure data-tilt> <img src="{{asset($row->thumbnail)}}" alt="{{$row->name}}" class="thumb">
              {{-- ai image path bola dewa ache tai avabe --}}
              <figcaption> <img src="{{asset('frontend/images/logo-brand.png')}}" alt="Image" class="brand">
                <h3>{{$row->name}}</h3>
                <small>UI-UX Design, WordPress</small> <a href="{{route('casedetails',$row->id)}}">CASE DETAILS</a> </figcaption>
            </figure>
          </li>
          @endforeach
        </ul>

    </section>
    <!-- end works -->


    </main>
    
@endsection