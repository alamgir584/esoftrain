@extends('layouts.admin')
@section('admin_content')

        {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"> --}}
    <!-- Content Wrapper. Contains page content -->
    <body>
        
        <div class="container-fluid position-relative d-flex p-0">
    <div class="content">
        <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
           
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="{{asset('backend/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    {{-- <a href="#" class="dropdown-item">My Profile</a> --}}
                    <a href="{{route('admin.logout')}}" class="dropdown-item">Log Out</a>
                    {{-- <a href="#" class="dropdown-item">Password Change</a> --}}
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    {{-- <div class="container-fluid position-relative d-flex p-0"> --}}
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add New Product</h6>
                <label for="text" class="form-label">Product Name</label>
                <div class="form-floating mb-3">   
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="">
                <label for="floatingInput">Product Name</label>
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Main Image</label>
                        <input class="form-control bg-dark" type="file"  name="thumbnail" required="">
                    </div>
                </div>

                 {{-- Client single image and 2 image --}}
                <label for="text" class="form-label">Product Client Title</label>
                <div class="form-floating mb-3">   
                    <input type="text" class="form-control" name="client_title" value="{{ old('client_title') }}" required="" >
                    <label for="floatingInput">Product Client Title</label>
                </div>
                <label for="text" class="form-label">Product Client Details</label>
                <div class="form-floating mb-3">   
                    <input type="text" class="form-control" name="client_details" value="{{ old('client_details') }}" required="" >
                    <label for="floatingInput">Product Client Details</label>
                </div>
                  <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Client Main Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_client_main" value="{{ old('image_client_main') }}" required="">
                    </div>
                </div>
               <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Client Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_client[]" value="{{ old('image_client') }}" required="" multiple>
                    </div>
                </div>

                  {{-- concept 4 image--}}
                <label for="text" class="form-label">Product Concept Title</label>
                <div class="form-floating mb-3">   
                    <input type="text" class="form-control" name="concept_title" value="{{ old('client_title') }}" required="" >
                    <label for="floatingInput">Product Concept Title</label>
                </div>
                <label for="text" class="form-label">Product Concept Detasils</label>
                <div class="form-floating mb-3">   
                    <input type="text" class="form-control" name="concept_details" value="{{ old('concept_details') }}" required="" >
                    <label for="floatingInput">Product Concept Detasils</label>
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Concept Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_concept[]" value="{{ old('image_concept') }}" required="" multiple>
                    </div>
                </div>

                    {{-- service  single image--}}
                <label for="text" class="form-label">Product Service Title</label>
                <div class="form-floating mb-3">   
                    <input type="text" class="form-control" name="service_title" value="{{ old('service_title') }}" required="" >
                    <label for="floatingInput">Product Service Title</label>
                </div>
                <label for="text" class="form-label">Product Service Detasils</label>
                <div class="form-floating mb-3">   
                    <input type="text" class="form-control" name="service_details" value="{{ old('service_details') }}" required="" >
                    <label for="floatingInput">Product Service Detasils</label>
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Service Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_service" value="{{ old('image_service') }}" required="">
                    </div>
                </div>

                       {{-- Result  2 Image--}}
                    <label for="text" class="form-label">Product Result Title</label>
                    <div class="form-floating mb-3">   
                        <input type="text" class="form-control" name="result_title" value="{{ old('result_title') }}" required="" >
                        <label for="floatingInput">Product Result Title</label>
                    </div>
                    <label for="text" class="form-label">Product Result Detasils</label>
                    <div class="form-floating mb-3">   
                        <input type="text" class="form-control" name="result_details" value="{{ old('result_details') }}" required="" >
                        <label for="floatingInput">Product Result Detasils</label>
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Result Image</label>
                            <input class="form-control bg-dark" type="file"  name="image_result[]" value="{{ old('image_result') }}" required="" multiple>
                        </div>
                    </div>
                <button class="btn btn-info ml-2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

@endsection