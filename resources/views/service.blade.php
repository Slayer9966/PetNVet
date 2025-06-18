@extends('nav')
@section('content')

<head>
    <style>
        a{
            cursor:pointer;
        }
        .Description {
        width: 100%;
        display: none;
        justify-content: center;
        position: fixed;
        z-index: 99;
        top: 0;
        left: 0;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    }

    .Inner-Description {
        width: 70%;
        text-align:center;
        background-color: #F3F3F3;
        padding: 20px; /* Example padding */
        box-sizing: border-box; /* Ensure padding is included in width calculation */
        overflow-y: auto; /* Enable vertical scrolling if content exceeds height */
        max-height: 80%; /* Example maximum height */
        margin: auto; /* Center horizontally and vertically */
        white-space: normal; /* Allow text to wrap within the div */

    }
    .close{
        width: 200px;
        height: 40px;
        background-color: green;
        color: white;
        transition: 0.3s all;
        border:none;
        border-radius:5px;
    }
    .close:hover{
        background-color: greenyellow;
    }
    .desc{
        word-wrap: break-word; /* Break long words and wrap text */
        white-space: normal; 
    }
    </style>
</head>
<!-- full description -->
<div class="Description">
   <div class="Inner-Description">
    <p class="desc"></p>
    <button class="close">Close</button>
   </div>
</div>
<!-- end full description div -->
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
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">pkr</small>{{ $item->Price }}
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
                    <a  class="btn btn-primary text-uppercase py-2 px-4 my-3 read-more" data-full-description="{{ $item->Description }}">Read More</a>
                </div>
            </div>
        </div>
        @endforeach

        </div>
    </div>
</div>
<!-- Services End -->


<!-- Testimonial Start -->
<!-- <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let readButtons = document.getElementsByClassName('read-more');
        let closeButton = document.getElementsByClassName('close')[0];
        let descriptionDiv = document.getElementsByClassName('Description')[0];

        // Close button event listener
        closeButton.addEventListener('click', function() {
            descriptionDiv.style.display = 'none';
        });

        // Read more buttons event listeners
        for (let i = 0; i < readButtons.length; i++) {
            readButtons[i].addEventListener('click', function() {
                let fullDescription = this.getAttribute('data-full-description');
                let para = document.getElementsByClassName('desc')[0];
                para.innerHTML = fullDescription;
                descriptionDiv.style.display = 'flex';
            });
        }
    });
</script>

@endsection