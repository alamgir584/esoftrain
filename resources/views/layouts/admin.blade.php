<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Esoftrain - Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('backend/img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('backend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/tempusdominus/css/tempusdomins-bootstrap-4.minu.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    {{-- sweetaler and toastr --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/toastr/toastr.css') }}"> 
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        @guest
            @else
        
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
         @include('admin.navbar.sidebar');
        <!-- Sidebar End -->
        @endguest
        @yield('admin_content')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('backend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('backend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('backend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('backend/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('backend/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('backend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('backend/js/main.js')}}"></script>
     {{-- sweetalert and toastr --}}
    <script type="text/javascript" src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/sweetalert/sweetalert.min.js') }}"></script>


    <script>  
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
               swal({
                 title: "Are you Want to delete?",
                 text: "Once Delete, This will be Permanently Delete!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
               })
               .then((willDelete) => {
                 if (willDelete) {
                      window.location.href = link;
                 } else {
                   swal("Safe Data!");
                 }
               });
           });
   </script>
  {{-- before  logout showing alert message --}}
    <script>  
        $(document).on("click", "#logout", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
               swal({
                 title: "Are you Want to logout?",
                 text: "",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
               })
               .then((willDelete) => {
                 if (willDelete) {
                      window.location.href = link;
                 } else {
                   swal("Not Logout!");
                 }
               });
           });
   </script>

   <script>
       @if(Session::has('messege'))
         var type="{{Session::get('alert-type','info')}}"
         switch(type){
             case 'info':
                  toastr.info("{{ Session::get('messege') }}");
                  break;
             case 'success':
                 toastr.success("{{ Session::get('messege') }}");
                 break;
             case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                 break;
             case 'error':
                 toastr.error("{{ Session::get('messege') }}");
                 break;
               }
       @endif
     </script>
</body>
</html>