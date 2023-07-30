@extends('layouts.app')
@section('content')

<header class="page-header">
    <div class="video-bg">
        <video src="{{asset('frontend/videos/video.mp4')}}" autoplay muted loop></video>
    </div>
    <!-- end video-bg -->
    <div class="inner">
        <h2 data-text="NEWS">NEWS</h2>
        <p>We work in an integral manner and address projects in the following dimensions.</p>
    </div>
    <!-- end inner -->
   </header>
   <!-- end page-header -->

   <main>
    <section class="news">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($trendingproject as $row)
             <div class="post wow fadeIn">
                 <figure class="post-image"> <img src="{{asset('files/trendingproject/'.$row->thumbnail)}}" alt="{{$row->title}}"></figure>
                 <div class="post-content">
                 <div class="author">
                  {{-- <img src="{{asset('frontend/images/avatar01.jpg')}}" alt="Image"> --}}
                  <span>by <b>{{Auth::user()->name}}</b></span>
              </div>
              <!-- end author -->
                     {{-- <ul class="post-categories">
                     <li><a href="#">Development</a></li>
                     <li><a href="#">WordPress</a></li>
                     <li><a href="#">Design</a></li>
                     </ul> --}}
              <h2 class="post-title">{{$row->title}}</h2>
              {{-- <small class="post-date">February 21,2018</small> --}}
              <p class="post-intro">{{Str::limit($row->details,'400')}}</p>
              <a href="{{route('trendingprojectdetails',$row->id)}}" class="post-link">READ MORE</a>
                 </div>
                
                 <!-- end post-content -->
             </div>
             @endforeach
             {{--  <!-- end post -->
              <div class="post wow fadeIn">
                 <figure class="post-image"> <img src="{{asset('frontend/images/news02.jpg')}}" alt="Image"></figure>
                 <div class="post-content">
                 <div class="author">
                  <img src="{{asset('frontend/images/avatar02.jpg')}}" alt="Image">
                  <span>by <b>Jack Daniels</b></span>
              </div>
              <!-- end author -->
              <h2 class="post-title">How to develope item for themeforest</h2>
              <ul class="post-categories">
                     <li><a href="#">Development</a></li>
                     <li><a href="#">WordPress</a></li>
                     <li><a href="#">Design</a></li>
                     </ul>
              <small class="post-date">February 21,2018</small>
              <p class="post-intro">Each product requires individual approach. Partnering up with small and big companies, we struggle for success of their products together. Staying connected with our clients helps us reach the goal and implement ideas.</p>
              <a href="{{route('trendingprojectdetails')}}" class="post-link">READ MORE</a>
                 </div>
                 <!-- end post-content -->
            </div>
             <!-- end post -->
              <div class="post wow fadeIn">
                 <figure class="post-image"> <img src="{{asset('frontend/images/news03.jpg')}}" alt="Image"></figure>
                 <div class="post-content">
                 <div class="author">
                  <img src="{{asset('frontend/images/avatar02.jpg')}}" alt="Image">
                  <span>by <b>Jack Daniels</b></span>
              </div>
              <!-- end author -->
              <h2 class="post-title">How to develope item for themeforest</h2>
              <ul class="post-categories">
                     <li><a href="#">Development</a></li>
                     <li><a href="#">WordPress</a></li>
                     <li><a href="#">Design</a></li>
                     </ul>
              <small class="post-date">February 21,2018</small>
              <p class="post-intro">Each product requires individual approach. Partnering up with small and big companies, we struggle for success of their products together. Staying connected with our clients helps us reach the goal and implement ideas.</p>
              <a href="{{route('trendingprojectdetails')}}" class="post-link">READ MORE</a>
                 </div>
                 <!-- end post-content -->
             </div>
             <!-- end post -->
              <div class="post wow fadeIn">
                 <figure class="post-image"> <img src="{{asset('frontend/images/news04.jpg')}}" alt="Image"></figure>
                 <div class="post-content">
                 <div class="author">
                  <img src="{{asset('frontend/images/avatar03.jpg')}}" alt="Image">
                  <span>by <b>Jack Daniels</b></span>
              </div>
              <!-- end author -->
              <h2 class="post-title">How to develope item for themeforest</h2>
              <ul class="post-categories">
                     <li><a href="#">Development</a></li>
                     <li><a href="#">WordPress</a></li>
                     <li><a href="#">Design</a></li>
                     </ul>
              <small class="post-date">February 21,2018</small>
              <p class="post-intro">Each product requires individual approach. Partnering up with small and big companies, we struggle for success of their products together. Staying connected with our clients helps us reach the goal and implement ideas.</p>
              <a href="{{route('trendingprojectdetails')}}" class="post-link">READ MORE</a>
                 </div>
                 <!-- end post-content -->
             </div>
             <!-- end post -->
              <div class="post wow fadeIn">
                 <figure class="post-image"> <img src="{{asset('frontend/images/news05.jpg')}}" alt="Image"></figure>
                 <div class="post-content">
                 <div class="author">
                  <img src="{{asset('frontend/images/avatar01.jpg')}}" alt="Image">
                  <span>by <b>Jack Daniels</b></span>
              </div>
              <!-- end author -->
              <h2 class="post-title">How to develope item for themeforest</h2>
              <ul class="post-categories">
                     <li><a href="#">Development</a></li>
                     <li><a href="#">WordPress</a></li>
                     <li><a href="#">Design</a></li>
                     </ul>
              <small class="post-date">February 21,2018</small>
              <p class="post-intro">Each product requires individual approach. Partnering up with small and big companies, we struggle for success of their products together. Staying connected with our clients helps us reach the goal and implement ideas.</p>
              <a href="{{route('trendingprojectdetails')}}" class="post-link">READ MORE</a>
                 </div>
                 <!-- end post-content -->
             </div> --}}
             <!-- end post -->
              <ul class="pagination wow fadeIn">
        <li class="page-item">
          <a class="page-link" href="#">PREV</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">NEXT</a>
        </li>
      </ul>
            </div>
            <!-- end col-8 -->
          </div>
          <!-- end row --> 
        </div>
        <!-- end container -->
    </section>
    <!-- end news -->

    </main>
    <!-- end main -->
    
@endsection