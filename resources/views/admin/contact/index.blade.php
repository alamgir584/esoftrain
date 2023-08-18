@extends('layouts.admin')
@section('admin_content')
<>
    <div class="content">
        <!-- Navbar Start -->
        @include('admin.navbar.topbar');
        <!-- Navbar End -->
    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Contact</h6>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Details</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $row)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->number}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->subject}}</td>
                        <td>{{$row->details}}</td>
                        <td>
                            <a href="{{route('contact.delete',$row->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></a>
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