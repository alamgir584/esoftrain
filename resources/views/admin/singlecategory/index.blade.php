@extends('layouts.admin')
@section('admin_content')
<>
<div class="content">
    <!-- Navbar Start -->
     @include('admin.navbar.topbar');
    <!-- Navbar End -->
    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h2 class="m-0">All Category</h2>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{route('singlecategory.create')}}" class="btn btn-primary">+Add New</a>
        
                    </ol>
                  </div>
                </div>
            </div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $row)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$row->category_name}}</td>
                        <td>
                        <a href="{{route('singlecategory.edit',$row->id)}}" class="btn btn-info btn-sm " ><i class="fas fa-edit"></i></a>
                        <a href="{{route('singlecategory.delete',$row->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
@endsection