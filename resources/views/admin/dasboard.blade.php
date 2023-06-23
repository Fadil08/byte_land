<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Byte Land</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('darkpan/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('darkpan/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('darkpan/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('darkpan/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @if (session()->has('message'))
    <div class="container-fluid">
        {{ session('message') }}
    </div>
    @endif
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Byte Land</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{asset('assets/profile/20230622140434.download.png')}}" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{Auth::user()->name}}</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="/admin/tanah" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="/admin/tanah/tambah" class="dropdown-item">Tambah Data tanah</a>
                        <a href="typography.html" class="dropdown-item"></a>
                        <a href="element.html" class="dropdown-item">Other Elements</a>
                    </div>
                </div> --}}
                <a href="/admin/tanah/tambah" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Tambah data</a>
                <a href="/admin/pemilik/tambah" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Tambah Pemilik</a>
                <a href="/admin/pemilik" class="nav-item nav-link"><i class="fa fa-table me-2"></i>show Pemilik</a>
                <a class="btn btn-outline-danger" href="/logout">logout</a>
                {{-- <button type="button" class="btn btn-danger" >Logout</button> --}}
                {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a> --}}
    
            </div>
        </nav>
    </div>
    <div class="content">
            @yield('content')
        </div>
        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="">HTML Codex</a>
                        <br>Distributed By: <a href="" >ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>


     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="{{asset('darkpan/lib/chart/chart.min.js')}}"></script>
     <script src="{{asset('darkpan/lib/easing/easing.min.js')}}"></script>
     <script src="{{asset('darkpan/lib/waypoints/waypoints.min.js')}}"></script>
     <script src="{{asset('darkpan/lib/owlcarousel/owl.carousel.min.js')}}"></script>
     <script src="{{asset('darkpan/lib/tempusdominus/js/moment.min.js')}}"></script>
     <script src="{{asset('darkpan/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
     <script src="{{asset('darkpan/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
 
     <!-- Template Javascript -->
     <script src="{{asset('darkpan/js/main.js')}}"></script>
</body>

</html>