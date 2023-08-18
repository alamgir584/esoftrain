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