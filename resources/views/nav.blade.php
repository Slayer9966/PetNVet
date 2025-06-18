<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET N VET</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../temp/assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../temp/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../temp/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../temp/assets/images/logo.png" type="image/x-icon">

    <!-- Template Stylesheet -->
    <link href="../temp/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>Pet N Vet Clinic 
                        Alfareed Market Opposite Suzuki Motors 01Km Hasilpur Road Vehari</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>desertswings@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>03182614187 -
                        03064186585</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    
     <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0" style="overflow:hidden;">
        <a  class="navbar-brand ms-lg-5">
             <img src="../temp/assets/images/logo.png" alt="" width="200px" style='margin-top:-95px;position:absolute;padding-bottom:20px;margin-left:-70px;'> 
        </a>
        <button class="navbar-toggler" style="padding:15px;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="margin-top:5px;" id="navbarCollapse">

            <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
<a href="{{ route('about') }}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">About</a>
<a href="{{ route('service') }}" class="nav-item nav-link {{ Route::is('service') ? 'active' : '' }}">Service</a>
<a href="{{ route('product') }}" class="nav-item nav-link {{ Route::is('product') ? 'active' : '' }}">Product</a>
<a href="{{ route('vaccine') }}" class="nav-item nav-link {{ Route::is('vaccine') ? 'active' : '' }}">Vaccine</a>

               
                <a href="{{route('contact')}}" class="nav-item nav-link nav-contact bg-primary {{ Route::is('contact') ? 'text-dark' : 'text-white' }} px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-4">We are the best veterinary center, offering top-notch services and high-quality products for your pets</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i> Pet N Vet Clinic 
                    Alfareed Market Opposite Suzuki Motors 01Km Hasilpur Road Vehari</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>desertswings@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>03182614187 -
                    03064186585</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="{{ route('home') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="{{ route('about') }}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-body mb-2" href="{{ route('service') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-body mb-2" href="{{ route('product') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Products</a>
                        <a class="text-body mb-2" href="{{ route('vaccine') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Vaccine</a>
                        <a class="text-body" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Popular Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="{{ route('service') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                        <a class="text-body mb-2" href="{{ route('product') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Products</a>
                        <a class="text-body mb-2" href="{{ route('vaccine') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Vaccine</a>
                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Follow Us On</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Facebook</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Instagram</a>
                       
                      
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">Pet N Vet Clinic</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed and Developed by <a class="text-white" href="https://slayerdevs.com">Slayer Devs</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../temp/assets/lib/easing/easing.min.js"></script>
    <script src="../temp/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../temp/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../temp/assets/js/main.js"></script>
</body>

</html>