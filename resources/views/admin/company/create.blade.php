@extends('layouts.admin')
@section('admin_content')
<>        
        <div class="container-fluid position-relative d-flex p-0">
        <div class="content">
         <!-- Navbar Start -->
         @include('admin.navbar.topbar');
         <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h2 class="m-0">Add new company</h2>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('company.index')}}" class="btn btn-primary">+Show</a>
                        </ol>
                      </div>
                    </div>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Company Name</label>  
                <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required="" placeholder="Company Name">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Company logo</label>
                        <input class="form-control bg-dark" type="file"  name="company_logo" value="{{ old('company_logo') }}" required="">
                    </div>
                </div>
                <button class="btn btn-info ml-2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
@endsection