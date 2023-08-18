@extends('layouts.app')
@section('content')
<header class="page-header">
    <div class="video-bg">
        <video src="{{asset('frontend/videos/pexels-ivan-samkov-7252682 (1080p).mp4')}}" autoplay muted loop></video>
    </div>
    <!-- end video-bg -->
    <div class="inner">
        <h2 data-text="ESOFTRAIN">ESOFTRAIN</h2>
        <p>We work in an integral manner and address projects in the following dimensions.</p>
    </div>
    <!-- end inner -->
   </header>
   <!-- end page-header -->

   <main>
    <section class="introduction">
        <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2>More than a passtime
    it is a heritage </h2>
            <h6>Setting a financial operation apart from the crowd</h6>
            </div>
            <!-- end col-5 -->
            <div class="col-lg-7">
            <h4>We are a team of multi-skilled and curious <span>digital specialists</span> who are always up for a challenge and learning as fast as digital is changing.</h4>
                <p>eSoftRain offers a wide range of software development services, including web development, mobile app development, custom software development, and more. Our team of skilled developers and designers work closely with our clients to understand their unique needs and create tailor-made solutions that meet their specific requirements.</p>
            </div>
            <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end introduction -->
    <section class="our-team">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-lg-3 col-md-6">
                  <figure>
                      <img src="{{asset('frontend/images/team01.jpg')}}" alt="Image">
                      <figcaption>
                          <h4>MOSIUR RAHMAN</h4>
                          <small>CEO</small>
                      </figcaption>
                  </figure>
              </div>
              <!-- end col-3 -->
              <div class="col-lg-3 col-md-6">
                  <figure>
                      <img src="{{asset('frontend/images/team02.jpg')}}" alt="Image">
                      <figcaption>
                          <h4>AZIZUR RAHMAN</h4>
                          <small>CHAIRMAN</small>
                      </figcaption>
                  </figure>
              </div>
              <!-- end col-3 -->
              <div class="col-lg-3 col-md-6">
                  <figure>
                      <img src="{{asset('frontend/images/team03.jpg')}}" alt="Image">
                      <figcaption>
                          <h4>MAHABUB ALAM</h4>
                          <small>SOFTWARE ENG.</small>
                      </figcaption>
                  </figure>
              </div>
              <!-- end col-3 -->
              <div class="col-lg-3 col-md-6">
                  <figure>
                      <img src="{{asset('frontend/images/team04.jpg')}}" alt="Image">
                      <figcaption>
                          <h4>SABBIR HOSSAIN</h4>
                          <small>SEO EXPERT</small>
                      </figcaption>
                  </figure>
              </div>
              <!-- end col-3 -->
          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end our-team -->
    {{-- <section class="listing-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3>Awards</h3>
                </div>
                <!-- end col-2 -->
                <div class="col-md-4 mobile-spacing">
                    <ul>
                        <li>2019 Hunger Boss - Awwwwards</li>
                        <li>2019 Agency Anchord - Css Awards</li>
                        <li>2019 Uon Corp Inc. - Awwwwards, FWA</li>
                        <li>2018 The Quarto - Css Awards, Site of Day</li>
                        <li>2018 Sakado Houses - FWA, Awwwwards</li>
                        <li>2018 Forsage Club - Site of Day, Css Awards</li>
                        <li>2017 The Burger - Css, Awwwwards</li>
                        <li>2017 Porter Inc - FWA</li>
                    </ul>
                </div>
                <!-- end col-4 -->
                <div class="col-md-2">
                    <h3>Sectors</h3>
                </div>
                <!-- end col-2 -->
                <div class="col-md-4">
                    <ul>
                        <li>Food & Beverages</li>
                        <li>Restaurants and Bars</li>
                        <li>Construction and Residences</li>
                        <li>Online Stores in New York</li>
                        <li>Medical Supliments & Healthcare</li>
                        <li>Car Dealers & Rent a Car Agencies</li>
                    </ul>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section> --}}
    <!-- end listing-content -->
    <section class="features-content">
      <div class="container">
             <div class="row justify-content-center text-center">
             <div class="col-12">
                  <h2>SUCCESS STEPS</h2>
            <h5>Your website and add some advanced functionality lacks.</h5>
             </div>
             <!-- end col-12 -->
              <div class="col-lg-4"> <img src="{{asset('frontend/images/icon01.png')}}" alt="Image">
                <h4>UI-UX DESIGN</h4>
                <p>Unicord provides a fantastic living experience.</p>
                <ul>
                <li>Creative direction</li>
                <li>Brand identity</li>
                <li>Creative concepting </li>
                <li>Visual &amp; interactive design</li>
                <li>Design specifications</li>
              </ul>
                  </div>
              <!-- end col-4 -->
              <div class="col-lg-4"> <img src="{{asset('frontend/images/icon02.png')}}" alt="Image">
                <h4>DEVELOPMENT</h4>
                <p>Website and add some advanced lacks.</p>
                <ul>
                <li>Creative direction</li>
                <li>Brand identity</li>
                <li>Creative concepting </li>
                <li>Visual &amp; interactive design</li>
                <li>Design specifications</li>
              </ul> </div>
              <!-- end col-4 -->
              <div class="col-lg-4"> <img src="{{asset('frontend/images/icon03.png')}}" alt="Image">
                <h4>MARKETING</h4>
                <p>Website and add some advanced functionality.</p>
                <ul>
                <li>Creative direction</li>
                <li>Brand identity</li>
                <li>Creative concepting </li>
                <li>Visual &amp; interactive design</li>
                <li>Design specifications</li>
              </ul> </div>
              <!-- end col-4 -->
              
            </div>
      </div>
      <!-- end container --> 
    </section>
    <!-- end features-content -->
    <section class="full-media-content">
      <div class="video-bg">
         <video src="{{asset('frontend/videos/design_-_48420 (1440p).mp4')}}" autoplay muted loop></video>
     </div>
     <!-- end video-bg -->
      <div class="sides hide-mobile">
      </div>
      <!-- end sides -->
      <div class="sides inner-content">
        <div class="inner">
          <h5>Collaborative approach</h5>
          <h2>INTERFACE</h2>
          <p>To create a powerful project once, a bit of luck is enough. To generate good products regularly, you need a strong foundation of experience and skills.</p>
          {{-- <a href="#">DISCOVER NOW</a> </div> --}}
        <!-- end inner --> 
      </div>
      <!-- end sides --> 
    </section>
    <!-- end full-media-content -->

    </main>
    <!-- end main -->
    
@endsection