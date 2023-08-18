<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{route('admin.home')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Esoftrain</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('backend/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin.home')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Single Category</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{route('singlecategory.index')}}" class="dropdown-item">CATEGORY LIST</a>
                        <a href="{{route('singlecategory.create')}}" class="dropdown-item">ADD NEW</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Details Category</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{route('detailscategory.index')}}" class="dropdown-item">DETAILS CATEGORY LIST</a>
                        <a href="{{route('detailscategory.create')}}" class="dropdown-item">ADD NEW</a>
                    </div>
                </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Company</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{route('company.index')}}" class="dropdown-item">COMPANY LIST</a>
                        <a href="{{route('company.create')}}" class="dropdown-item">ADD NEW</a>
                              {{-- <a href="{{route('company.edit')}}" class="dropdown-item">MANAGE COMPANY</a> --}}
                            
                    </div>
            </div>
        <a href="{{route('contact.index')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Contact</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Product</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('product.index')}}" class="dropdown-item">PRODUCT LIST</a>
                    <a href="{{route('product.create')}}" class="dropdown-item">ADD NEW</a>
                </div>
            </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Trending Project</a>
                <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{route('trendingproject.index')}}" class="dropdown-item">TRENDING PROJECT LIST</a>
                        <a href="{{route('trendingproject.create')}}" class="dropdown-item">ADD NEW</a>
                </div>
            </div>                  
        </div>
    </nav>
</div>
<!-- Sidebar End -->