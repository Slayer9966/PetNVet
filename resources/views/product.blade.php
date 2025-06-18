@extends('nav')
@section('content')
<head>
    <link rel="stylesheet" href="../temp/assets/css/product.css">
</head>
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5 text-uppercase mb-0">Our Latest Products</h1>
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
<!--Latest Products End -->
<!-- All Products Start -->
<div class="container">
    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
        <h6 class="text-primary text-uppercase">Products</h6>
        <h1 class="display-5 text-uppercase mb-0">All Products</h1>
    </div>
    <div class="row">
        @foreach($AllProducts as $item)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img src="{{asset($item->ProductImage)}}">
                    </a>
                    
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                    </ul>
                    

                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$item->Name}}</a></h3>
                  
                </div>

            </div>

        </div>
        @endforeach

    </div>
</div>
</div>
<!-- All Products End -->

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
</div> -->
@endsection