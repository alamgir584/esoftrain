@extends('layouts.app')
@section('content')

<header class="page-header">
    <div class="video-bg">
        <video src="{{asset('frontend/videos/design_-_48420 (1440p).mp4')}}" autoplay muted loop></video>
    </div>
    <!-- end video-bg -->
    <div class="inner">
        <h2 data-text="SAY HELLO">SAY HELLO</h2>
        <p>We work in an integral manner and address projects in the following dimensions.</p>
    </div>
    <!-- end inner -->
   </header>
   <!-- end page-header -->


   <main>
    <section class="say-hello">
        <div class="container">
        <div class="row">
        <div class="col-12">
            <h3>We’d love to hear from you.<br>
    Let's talk about it!</h3>
        </div>
            <!-- end col-12 -->
        <div class="col-md-6">
        <div class="contact-box">
            <span>Phone :</span>
            <a href="#">+88 01762 762851</a>
            </div>
            <!-- end contact-box -->
        </div>
        <!-- end col-6 -->
        <div class="col-md-6">
        <div class="contact-box">
            <span>E-mail :</span>
            <a href="#">info@esoftrain.com</a>
            </div>
            <!-- end contact-box -->
        </div>
        <!-- end col-6 -->
        <div class="col-12">
        <div class="contact-box">
            <span>Address :</span>
       <p>
           46/4 Dhanmondhi Jigatola<br>
           Dhaka 1209, Bangladesh<br>
        </p>
          {{-- <a href="#" class="map-link" data-toggle="modal" data-target="#map-box">Click for map</a> --}}
          </div>
            <!-- end contact-box -->
        </div>
        <!-- end col-12 -->
        <div class="col-12">
            <form class="row inner" id="contact" name="contact" action="{{route('store')}}" method="post">
              @csrf
            <div class="form-group col-sm-6 col-12">
              <label><span>Your name</span></label>
              <input type="text" name="name" id="name" required>
            </div>
            <!-- end form-group -->
            <div class="form-group col-sm-6 col-12">
              <label><span>Phone Number</span></label>
              <input type="text" name="number" id="number" required>
            </div>
            <!-- end form-group -->
            <div class="form-group col-sm-6 col-12">
              <label><span>Your e-mail</span></label>
              <input type="text" name="email" id="email" required>
            </div>
            <!-- end form-group -->
            <div class="form-group col-sm-6 col-12">
              <label><span>Subject</span></label>
              <input type="text" name="subject" id="subject" required>
            </div>
            <!-- end form-group -->
            <div class="form-group col-12">
              <label><span>Your message</span></label>
              <textarea name="details" id="details" required></textarea>
            </div>
            <!-- end form-group -->
            <div class="form-group col-12">
              <button id="submit" type="submit" name="submit">SUBMIT</button>
            </div>
            <!-- end form-group -->
          </form>
          <!-- end form -->
           <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
            <!-- end success -->
            <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
            <!-- end error --> 
        </div>
        <!-- end col-12 -->
        </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end say-hello -->

    </main>
    <!-- end main -->

    <div id="map-box" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
<div class="modal-content">
    <div id="map"></div>
      <i class="fa fa-close close" data-dismiss="modal" aria-label="Close"></i>
            </div>
            <!--end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- end map -->
    
@endsection