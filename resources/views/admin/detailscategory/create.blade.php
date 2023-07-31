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
            <form action="{{route('detailscategory.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add New Details Category</h6>

                <label for="text" class="form-label">Category Name</label>
                <div class="form-floating mb-3"> 
                      <select class="form-control" name="category_id" id="category_id">
                         @foreach($category as $row)
                        <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                          @endforeach
                      </select>  
                </div>
                
                <label for="formFile" class="form-label">Category Name</label>
                <div class="form-floating mb-3">    
                <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}" required="" placeholder="Category name">
                <label for="floatingInput">Category Name</label>
                </div>

                <label for="formFile" class="form-label">Category Details</label>
                <div class="form-floating mb-3">    
                <input type="text" class="form-control" name="category_details" value="{{ old('category_details') }}" required="" placeholder="Category Details">
                <label for="floatingInput">Company Details</label>
                </div>

                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Category logo</label>
                        <input class="form-control bg-dark" type="file"  name="category_logo" value="{{ old('category_logo') }}" required="">
                    </div>
                </div>
                <button class="btn btn-info ml-2" type="submit">Submit</button>
            </div>
        </form>
        </div>

</body>

@endsection