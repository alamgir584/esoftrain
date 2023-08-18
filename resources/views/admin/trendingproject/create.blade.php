@extends('layouts.admin')
@section('admin_content')
<>
<div class="content">
    <!-- Navbar Start -->
    @include('admin.navbar.topbar');
    <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('trendingproject.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h2 class="m-0">Add new project</h2>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('trendingproject.index')}}" class="btn btn-primary">+Show</a>
                        </ol>
                      </div>
                    </div>
                </div> 
                <div class="mb-3"> 
                    <label for="formFile" class="form-label">Title</label>   
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" required="" placeholder="Title">
                </div>                
                <div class="mb-3"> 
                    <label for="formFile" class="form-label">Details</label>   
                    <input type="text" class="form-control" name="details" value="{{ old('details') }}" required="" placeholder="details">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Project Image</label>
                        <input class="form-control bg-dark" type="file"  name="thumbnail" value="{{ old('thumbnail') }}" required="">
                    </div>
                </div>
                <button class="btn btn-info ml-2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
@endsection