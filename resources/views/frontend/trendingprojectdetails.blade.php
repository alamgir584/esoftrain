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
            <div class="col-md-10">
              @foreach ($trendingproject as $row)
                  
              @endforeach
             <div class="post post-single wow fadeIn">
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
              {{-- <small class="post-date">February 21,2018</small>
              <ul class="social-share">
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
              </ul> --}}
              <p>{{$row->details}}</p> {{-- (<strong>goods and services</strong>).Simply put, it is "any activity or enterprise entered into for profit. It does not mean it is a company, a corporation, partnership, or have any such formal organization, but it can range from a street peddler to General Motors."[5] The term is also often used colloquially (<strong>but not by lawyers or public officials</strong>) to refer to a company, but this article will not deal with that sense of the word.</p> --}}
                  {{-- <p> Anyone carrying on an activity that earns them a profit is doing <u>business or running a business</u>, and perhaps this is why there is a misconception that business and company is the same thing.<br>
                    A business name structure does not separate the business entity from the owner, which means that the owner of the business is responsible and liable for all debts incurred by the business. If the business acquires debts[,] the creditor or creditors can go after your personal possessions. A business structure does not allow for corporate tax rates. The proprietor is personally taxed on all income from the business.</p>
                  <p> A company on the other hand, is a separate legal entity and provides for limited liability as well as corporate tax rates. A company structure is more complicated and expensive to set up, but offers more protection and benefits for the owner.</p>
                  <blockquote>
                    <p>Weighing in at a whopping 3310g and measuring 38cm in length, the Sigma 500mm f/4 DG OS HSM Sports is an incredibly big and heavy lens indeed, although that does include the non-removable tripod collar.</p>
                    <h5>Jack Daniel's</h5>
                  </blockquote>
                  <p> Corporation: The owners of a corporation have limited liability and the business has a separate legal personality from its owners. Corporations can be either government-owned or privately owned. They can organize either for profit or as nonprofit organizations. A privately owned, for-profit corporation is owned by its shareholders, who elect a board of directors to direct the corporation and hire its managerial staff. A privately owned, for-profit corporation can be either privately held by a small group of individuals, or publicly held, with publicly traded shares listed on a stock exchange.</p>
                  <h5>A privately owned</h5>
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                    <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Faucibus turpis in eu mi bibendum neque.</li>
                    <li>Neque aliquam vestibulum morbi blandit cursus.</li>
                    <li>Enim nulla aliquet porttitor lacus.</li>
                  </ul>
                  <p> Cooperative: Often referred to as a "co-op", a cooperative is a limited-liability business that can organize as for-profit or not-for-profit. A cooperative differs from a corporation in that it has members, not shareholders, and they share decision-making authority. Cooperatives are typically classified as either consumer cooperatives or worker cooperatives. Cooperatives are fundamental to the ideology of economic democracy. </p> --}}
                 </div>
                 <!-- end post-content -->
             </div>
             <!-- end post -->
            </div>
            <!-- end col-10 -->
          </div>
          <!-- end row --> 
        </div>
        <!-- end container -->
    </section>
    <!-- end news -->
    </main>
    <!-- end main -->
    
@endsection