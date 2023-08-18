@extends('layouts.admin')
@section('admin_content')
<>
       <div class="content">
        <!-- Navbar Start -->
        @include('admin.navbar.topbar');
        <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{route('company.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="old_company_logo" value="{{$data->company_logo}}">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add New Company</h6>
                <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Company Name</label>
                <input type="text" class="form-control" name="company_name" value="{{$data->company_name}}" required="" placeholder="Company Name">
                </div>
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Company logo</label>
                        <input class="form-control bg-dark" type="file"  name="company_logo" value="{{$data->company_logo}}" >
                    </div>
                </div>
                    <div class="form-floating">
                        <img src="{{ asset('files/company/' . $data->company_logo) }}"
                        width="130" height="130">
                    </div><br>
                    <button class="btn btn-info ml-2" type="submit">Update</button>
                </div>
            </form>
        </div>       
    </div>
</div>
</body>
@endsection