@extends('layouts.admin')
@section('admin_content')
<> 
<div class="content">
    <!-- Navbar Start -->
        @include('admin.navbar.topbar');
    <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('singlecategory.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h2 class="m-0">Add new category</h2>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('singlecategory.index')}}" class="btn btn-primary">+Show</a>
                        </ol>
                      </div>
                    </div>
                </div>
                <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Category Name</label>
                <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}" required="" placeholder="Category Name">
                </div>
                <button class="btn btn-info ml-2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>

@endsection