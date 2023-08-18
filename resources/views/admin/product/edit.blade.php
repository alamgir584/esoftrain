@extends('layouts.admin')
@section('admin_content')
<>
<div class="content">
    <!-- Navbar Start -->
    @include('admin.navbar.topbar');
    <!-- Navbar End -->
    <div class="col-sm-12 col-xl-8">
        <form action="{{route('product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="old_thumbnail" value="{{ $data->thumbnail }}">
        <input type="hidden" name="old_image_client_main" value="{{ $data->image_client_main }}">
        <input type="hidden" name="old_image_service" value="{{ $data->image_service }}">
        <input type="hidden" name="old_image_client" value="{{ $data->image_client }}">
        <input type="hidden" name="old_image_concept" value="{{ $data->image_concept }}">
        <input type="hidden" name="old_image_result" value="{{ $data->image_result }}">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Product</h6>
                <div class="mb-3">
                    <label for="text" class="form-label">Select Category Name</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="category_id"
                        id="category_id">
                        @foreach ($category as $row)
                        <option value="{{ $row->id }}" @if ($row->id == $data->category_id) selected @endif>
                                {{ $row->category_name }}</option>
                        @endforeach
                    </select>
                </div>                
                <div class="mb-3">   
                <label for="text" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" required="" placeholder="Product Name">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Main Image</label>
                        <input class="form-control bg-dark" type="file" name="thumbnail" value="{{$data->thumbnail}}">
                    </div>
                </div>
                 {{-- Client single image and 2 image --}}                
                <div class=" mb-3">
                    <label for="text" class="form-label">Product Client Title</label>   
                    <input type="text" class="form-control" name="client_title" value="{{$data->client_title}}" required="" placeholder="Product Client Title">
                </div>               
                <div class="mb-3">  
                    <label for="text" class="form-label">Product Client Details</label> 
                    <input type="text" class="form-control" name="client_details" value="{{$data->client_details}}" required="" placeholder="Product Client Details">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Client Main Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_client_main" value="{{$data->image_client_main}}">
                    </div>
                </div>
               <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Client Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_client[]"  multiple>
                    </div>
                </div>
                  {{-- concept 4 image--}}               
                <div class="mb-3">
                    <label for="text" class="form-label">Product Concept Title</label>   
                    <input type="text" class="form-control" name="concept_title" value="{{$data->concept_title}}" required="" placeholder="Product Concept Title">                   
                </div>               
                <div class="mb-3">  
                    <label for="text" class="form-label">Product Concept Detasils</label> 
                    <input type="text" class="form-control" name="concept_details" value="{{$data->concept_details}}" required="" placeholder="Product Concept Detasils">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Concept Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_concept[]" value="{{$data->image_concept}}"  multiple>
                    </div>
                </div>
                    {{-- service  single image--}}
                <div class="mb-3">  
                    <label for="text" class="form-label">Product Service Title</label> 
                    <input type="text" class="form-control" name="service_title" value="{{$data->service_title}}" required="" placeholder="Product Service Title">
                </div>               
                <div class="mb-3">   
                    <label for="text" class="form-label">Product Service Details</label>
                    <input type="text" class="form-control" name="service_details" value="{{$data->service_details}}" required="" placeholder="Product Service Details">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Service Image</label>
                        <input class="form-control bg-dark" type="file"  name="image_service" value="{{$data->image_service}}">
                    </div>
                </div>
                       {{-- Result  2 Image--}}
                    <div class="mb-3">   
                        <label for="text" class="form-label">Product Result Title</label>
                        <input type="text" class="form-control" name="result_title" value="{{$data->result_title}}" required="" placeholder="Product Result Title">
                    </div>      
                    <div class="mb-3">  
                        <label for="text" class="form-label">Product Result Detasils</label> 
                        <input type="text" class="form-control" name="result_details" value="{{$data->result_details}}" required="" placeholder="Product Result Detasils" >
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Result Image</label>
                            <input class="form-control bg-dark" type="file"  name="image_result[]" multiple>
                        </div>
                    </div>
                <button class="btn btn-info ml-2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
@endsection