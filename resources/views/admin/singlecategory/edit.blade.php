@extends('layouts.admin')
@section('admin_content')
<>
<div class="content">
    <!-- Navbar Start -->
    @include('admin.navbar.topbar');
    <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('singlecategory.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Edit Category</h6>      
                    <div class=" mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Name</label>   
                    <input type="text" class="form-control" name="category_name" value="{{$data->category_name}}" required="" placeholder="Category Name">
                    </div>
                    <button class="btn btn-info ml-2" type="submit">Update</button>
                </div>
            </form>
        </div>       
    </div>
</body>
@endsection