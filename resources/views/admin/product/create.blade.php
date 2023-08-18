@extends('layouts.admin')
@section('admin_content')
<>
<div class="content">
    <!-- Navbar Start -->
    @include('admin.navbar.topbar');
    <!-- Navbar End -->
    <div class="col-sm-12 col-xl-8">
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="bg-secondary rounded h-100 p-4">
                <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h2 class="m-0">Add new product</h2>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('product.index')}}" class="btn btn-primary">+Show</a>
                        </ol>
                      </div>
                    </div>
                </div>
                <div class="mb-3"> 
                    <label for="text" class="form-label">Category Name</label>
                      <select class="form-select mb-3" aria-label="Default select example" name="category_id" id="category_id">
                         @foreach($category as $row)
                        <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                          @endforeach
                      </select>  
                </div>                
                <div class="mb-3">   
                <label for="text" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="" placeholder="Product Name">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Main Image</label>
                        <input class="form-control bg-dark" type="file"  name="thumbnail" required="">
                    </div>
                </div>
                 {{-- Client single image and 2 image --}}                
                <div class=" mb-3">
                    <label for="text" class="form-label">Product Client Title</label>   
                    <input type="text" class="form-control" name="client_title" value="{{ old('client_title') }}" required="" placeholder="Product Client Title">
                </div>               
                <div class="mb-3">  
                    <label for="text" class="form-label">Product Client Details</label> 
                    <input type="text" class="form-control" name="client_details" value="{{ old('client_details') }}" required="" placeholder="Product Client Details">
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
                <div class="mb-3">
                    <label for="text" class="form-label">Product Concept Title</label>   
                    <input type="text" class="form-control" name="concept_title" value="{{ old('client_title') }}" required="" placeholder="Product Concept Title">                   
                </div>               
                <div class="mb-3">  
                    <label for="text" class="form-label">Product Concept Detasils</label> 
                    <input type="text" class="form-control" name="concept_details" value="{{ old('concept_details') }}" required="" placeholder="Product Concept Detasils">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Concept Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_concept[]" value="{{ old('image_concept') }}" required="" multiple>
                    </div>
                </div>
                    {{-- service  single image--}}
                <div class="mb-3">  
                    <label for="text" class="form-label">Product Service Title</label> 
                    <input type="text" class="form-control" name="service_title" value="{{ old('service_title') }}" required="" placeholder="Product Service Title">
                </div>               
                <div class="mb-3">   
                    <label for="text" class="form-label">Product Service Details</label>
                    <input type="text" class="form-control" name="service_details" value="{{ old('service_details') }}" required="" placeholder="Product Service Details">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Service Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_service" value="{{ old('image_service') }}" required="">
                    </div>
                </div>
                       {{-- Result  2 Image--}}
                    <div class="mb-3">   
                        <label for="text" class="form-label">Product Result Title</label>
                        <input type="text" class="form-control" name="result_title" value="{{ old('result_title') }}" required="" placeholder="Product Result Title">
                    </div>      
                    <div class="mb-3">  
                        <label for="text" class="form-label">Product Result Detasils</label> 
                        <input type="text" class="form-control" name="result_details" value="{{ old('result_details') }}" required="" placeholder="Product Result Detasils" >
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
</div>
</body>
@endsection