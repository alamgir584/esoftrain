@extends('layouts.admin')
@section('admin_content')
<>
<div class="content">
    <!-- Navbar Start -->
    @include('admin.navbar.topbar');
    <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('trendingproject.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="old_thumbnail" value="{{$data->thumbnail}}">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Edit Trending Project</h6>                  
                    <div class=" mb-3"> 
                        <label for="formFile" class="form-label">Title</label>                      
                        <input type="text" class="form-control" name="title" value="{{$data->title}}" required="" placeholder="Title">
                    </div>                   
                    <div class="mb-3">  
                        <label for="formFile" class="form-label">Details</label>                     
                        <input type="text" class="form-control" name="details" value="{{$data->details}}" required="" placeholder="Details">
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Project Image</label>
                            <input class="form-control bg-dark" type="file"  name="thumbnail" value="{{$data->thumbnail}}" >
                        </div>
                    </div>
                    <div class="form-floating">
                        <img src="{{ asset('files/trendingproject/' . $data->thumbnail) }}"
                        width="130" height="130">
                    </div><br>
                    <button class="btn btn-info ml-2" type="submit">Update</button>
                </div>
            </form>
        </div>       
    </div>
</body>
@endsection