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
                    <h2 class="m-0">All Company</h2>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{route('company.create')}}" class="btn btn-primary">+Add New</a>
        
                    </ol>
                  </div>
                </div>
            </div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Company logo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $row)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$row->company_name}}</td>
                        <td><img src="{{ asset('files/company/' . $row->company_logo) }}"
                            width="100" height="30"></td>
                            <td>
                        <a href="{{route('company.edit',$row->id)}}" class="btn btn-info btn-sm " ><i class="fas fa-edit"></i></a>
                        <a href="{{route('company.delete',$row->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<body>
@endsection