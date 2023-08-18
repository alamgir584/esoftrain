@extends('layouts.admin')
@section('admin_content')
<>
    <div class="content">
        <!-- Navbar Start -->
       @include('admin.navbar.topbar');
        <!-- Navbar End -->
        <div class="col-sm-12 col-xl-8">
            <form action="{{ route('detailscategory.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <input type="hidden" name="old_category_logo" value="{{ $data->category_logo }}">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Edit Category Details</h6>
                    <div class="mb-3">
                        <label for="text" class="form-label">Select Category Name</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="category_id"
                            id="category_id">
                            @foreach ($detailscategory as $row)
                            <option value="{{ $row->id }}" @if ($row->id == $data->category_id) selected @endif>
                                    {{ $row->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="category_name" value="{{ $data->category_name }}"
                        required="" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Details</label>
                        <input type="text" class="form-control" name="category_details"
                            value="{{ $data->category_details }}" required="" placeholder="Title">
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category logo</label>
                            <input class="form-control bg-dark" type="file" name="category_logo"
                                value="{{ $data->category_logo }}">
                        </div>
                    </div>
                    <div class="form-floating">
                        <img src="{{ asset('files/category/' . $data->category_logo) }}" width="130" height="130">
                    </div><br>
                    <button class="btn btn-info ml-2" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection