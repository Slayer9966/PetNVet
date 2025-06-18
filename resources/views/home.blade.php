@extends('nav')
@section('content')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pet N Vet</h1>
                <h1 class="text-uppercase text-white mb-lg-4">Make Your Pets Happy</h1>
                <p class="fs-4 text-white mb-lg-4">We are the best veterinary center, offering top-notch services and
                    high-quality products for your pets</p>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="{{'about'}}" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Read More</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Video Modal Start -->
<!-- <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="../temp/assets/images/about.jpg"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="border-start border-5 border-primary ps-5 mb-5">
                    <h6 class="text-primary text-uppercase">About Us</h6>
                    <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                </div>
                <h4 class="text-body mb-4">Your pet will be happier and healthier with our services</h4>
                <div class="bg-light p-4">
                    <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">Our Mission</button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                aria-selected="false">Our Vission</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-1-tab">
                            <p class="mb-0">Our mission is to provide compassionate and comprehensive veterinary care to
                                all pets. We strive to offer the highest quality services and products, ensuring the
                                well-being of every animal we treat. Our dedicated team is committed to fostering a
                                caring and supportive environment. We aim to build lasting relationships with pet
                                owners, enhancing the health and happiness of their beloved pets</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <p class="mb-0">Our vision is to be a leading veterinary center known for excellence in pet
                                care and innovation. We aspire to set the standard for compassionate and advanced
                                veterinary services, promoting the health and well-being of all pets. We envision a
                                future where every pet receives the best possible care, and every pet owner is empowered
                                with knowledge and support. Through continuous growth and improvement, we aim to create
                                a healthier and happier world for pets and their families</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Services</h6>
            <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
        </div>
        <div class="row g-5">
            @foreach($Services as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <!-- Service Name -->
                        @if($item->Name)
                            <h2 class="text-uppercase">{{ $item->Name }}</h2>
                        @endif

                        <!-- Service Tagline -->
                        @if(!empty($item->Tagline))
                            <h6 class="text-body mb-5">{{ $item->Tagline }}</h6>
                        @endif

                        <!-- Service Price (if available) -->
                        @if(!empty($item->Price))
                            <div class="text-center bg-primary p-4 mb-2">
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">pkr</small>{{ $item->Price }}
                                    <small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                                </h1>
                            </div>
                        @endif

                        <div class="text-center p-4">
                            <!-- Short Description -->
                            @if(!empty($item->Description))
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <span>{{ substr($item->Description, 0, 30) }}...</span>

                                </div>
                            @endif

                            <!-- Order Now Button -->
                            <a href="{{route('service')}}"
                                class="btn btn-primary text-uppercase py-2 px-4 my-3 read-more">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
        </div>
        <div class="owl-carousel product-carousel">

            @foreach($latestProducts as $item)
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="{{ asset($item->ProductImage) }}" alt="">
                        <h6 class="text-uppercase">{{$item->Name}}</h6>
                        <!-- <h5 class="text-primary mb-0"></h5> -->

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-start">
            <div class="col-lg-7">
                <div class="border-start border-5 border-dark ps-5 mb-5">
                    <h6 class="text-dark text-uppercase">Products</h6>
                    <h1 class="display-5 text-uppercase text-white mb-0">Take first step to hapiness</h1>
                </div>
                <p class="text-white mb-4">We pride ourselves on offering the best and top-notch products for your pets.
                    Our carefully selected range includes only the highest quality items, ensuring your pets receive the
                    best care and nutrition. From premium pet food to innovative accessories, we are committed to
                    providing products that meet the highest standards of excellence. Trust us to deliver the very best
                    for your beloved pets</p>
                <a href="{{route('product')}}" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                <a href="{{route('about')}}" class="btn btn-outline-light py-md-3 px-md-5">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Pricing Plan Start -->
<!-- <div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Pricing Plan</h6>
            <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5 mt-lg-5">
                    <h2 class="text-uppercase">Basic</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-primary p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5">
                    <h2 class="text-uppercase">Standard</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-dark p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5 mt-lg-5">
                    <h2 class="text-uppercase">Extended</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-primary p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Team Members</h6>
            <h1 class="display-5 text-uppercase mb-0">Qualified Pets Care Professionals</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="../temp/assets/images/team-1.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="../temp/assets/images/team-2.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="../temp/assets/images/team-3.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="../temp/assets/images/team-4.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="../temp/assets/images/team-5.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
    <div class="container py-5">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel bg-white p-5">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-4">
                            <img class="img-fluid mx-auto" src="../temp/assets/images/testimonial-1.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white"
                                style="width: 45px; height: 45px;">
                                <i class="bi bi-chat-square-quote text-primary"></i>
                            </div>
                        </div>
                        <p>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At
                            lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit
                            ipsum.</p>
                        <hr class="w-25 mx-auto">
                        <h5 class="text-uppercase">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-4">
                            <img class="img-fluid mx-auto" src="../temp/assets/images/testimonial-2.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white"
                                style="width: 45px; height: 45px;">
                                <i class="bi bi-chat-square-quote text-primary"></i>
                            </div>
                        </div>
                        <p>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At
                            lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit
                            ipsum.</p>
                        <hr class="w-25 mx-auto">
                        <h5 class="text-uppercase">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->


<!-- Blog Start -->
<!-- <div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Latest Blog</h6>
            <h1 class="display-5 text-uppercase mb-0">Latest Articles From Our Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../temp/assets/images/blog-1.jpg"
                                style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Dolor sit magna rebum clita rebum dolor</h5>
                                <p>Ipsum sed lorem amet dolor amet duo ipsum amet et dolore est stet tempor eos dolor
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../temp/assets/images/blog-2.jpg"
                                style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Dolor sit magna rebum clita rebum dolor</h5>
                                <p>Ipsum sed lorem amet dolor amet duo ipsum amet et dolore est stet tempor eos dolor
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection