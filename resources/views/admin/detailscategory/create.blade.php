@extends('layouts.admin')
@section('admin_content')
<>        
    <div class="content">
        <!-- Navbar Start -->
          @include('admin.navbar.topbar');
        <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('detailscategory.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h2 class="m-0">Add new Category</h2>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('detailscategory.index')}}" class="btn btn-primary">+Show</a>
                        </ol>
                      </div>
                    </div>
                </div>
                <label for="text" class="form-label">Select Category Name</label>
                <select class="form-select mb-3" aria-label="Default select example" name="category_id" id="category_id">
                   {{-- <option selected>Select Category</option> --}}
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                    @endforeach
                </select>

                <div class=" mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Name</label>    
                    <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}" required="" placeholder="Category name">
                </div>
             
                <div class="mb-3">  
                    <label for="exampleInputEmail1" class="form-label">Category Details</label>  
                    <input type="text" class="form-control" name="category_details" value="{{ old('category_details') }}" required="" placeholder="Category Details">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category logo</label>
                        <input class="form-control bg-dark" type="file"  name="category_logo" value="{{ old('category_logo') }}" required="">
                    </div>
                </div>
                <button class="btn btn-info ml-2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>

@endsection