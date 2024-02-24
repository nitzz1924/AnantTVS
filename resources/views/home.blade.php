<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        <style>
            .social-icon{
                color: #003487;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!--* Hero Section Start -->
        <header class="main-header transparent">
            <div class="mt-3 d-flex justify-content-center align-items-center ms-3">
                <a href="{{ route('frontendhomepage') }}" title="Wheels Bicycle">
                    <img src="{{ asset('website-assets/images/logomerge.png') }}" alt="" class="img-fluid rounded-pill"
                        height="400px" width="200px">
                </a>
                <div class="social-iconsnew ms-auto px-5">
                    <a href="https://www.facebook.com/profile.php?id=61550693320353" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCHHlaC5J25Kpb6DPo7dCOag" class="social-icon ms-2"><i class="bi bi-youtube"></i></a>
                    <a href="Instagram: https://www.instagram.com/anant_tvs_ajmer/?hl=en" class="social-icon ms-2"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </header>

        <section id="herosectionbg" class="light-text d-flex justify-content-center align-items-start align-items-md-center"
            style="position: relative; height: 100vh; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-md-12 wow fadeInLeft  text-center">
                        {{-- <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('website-assets/images/anantlogo.jpg') }}" alt=""
                                class="img-fluid rounded-pill" height="200px" width="200px">
                        </div> --}}
                        <h1 class="large-heading"><span>Welcome</span></h1>
                        <h1 class="large-heading"><span>to</span></h1>
                        <h1 class="large-heading"><span>Anant TVS</span></h1>
                        <h2 class=" mobile-headings">Opposite IBM Office, Aadarsh Nagar,Ajmer 305002</h2>
                        <div class=" d-flex justify-content-center mt-2 row">
                            <div class="col-md-4 mt-2 mb-2">
                                <div class="card p-3 rounded">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="color: #003487;">New Customer?</h5>
                                        {{-- <p class="card-text text-center" style="color: #003487;">With supporting text below
                                            as a natural lead-in to additional content.</p> --}}
                                        <a href="{{ route('newcustomer') }}"
                                            class=" btn btn-dark btn-sm border border-light w-100 mt-2"
                                            style="background-color: #dd0707;">Let's Begin</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2 mb-2">
                                <div class="card p-3 rounded">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="color: #003487;">Exiting Customer</h5>
                                        {{-- <p class="card-text text-start" style="color: #003487;">With supporting text below
                                            as a natural lead-in to additional content.</p> --}}
                                        <a href="{{ route('viewloginpage') }}"
                                            class=" btn btn-dark btn-sm border border-light w-100 mt-2"
                                            style="background-color: #003487;">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <footer class="site-footer">
            <div class="copyright text-center">
                <div class="container">
                    <div class="copyright-text">© 2024 Anant Tvs. Developed by
                        <a target="_blank" href="http://yuvmedia.in/">YUVMEDIA</a>
                    </div>
                </div>
            </div>
        </footer> --}}
        <a href="https://wa.me/7240667788" class="whatsapp-icon">
            <img src="{{ asset('website-assets/images/whatsapp-icon.png') }}" height="50px" width="50px" alt=""
                class="rounded">
        </a>

        <!-- Call icon -->
        <a href="tel:+917414055555" class="call-icon">
            <img src="{{ asset('website-assets/images/call.png') }}" height="50px" width="50px" alt=""
                class="rounded">
        </a>
        <!--* Hero Section End -->

        <!--* About Section Start -->
        {{-- <section id="herosectionbgnew" class="about-section mb-0"
            style=" background-image: url({{ asset('website-assets/images/TVS-Metaverse.jpg') }}); background-repeat: no-repeat;background-position: left; background-size: cover; background-attachment:fixed;">
            <div class="container">
                <div class="row align-items-center bicycle-img wow fadeInLeft">
                    <div class="col-md-6">
                        <div class="heading-wrapper">
                            <h1 class="text-black"><span>About Us
                                </span></h1>
                        </div>
                        <div class="text-black">
                            <p>
                                ANANT TECHWHEELS LLP is a LLP incorporated in the state of Ajmer having CIN Number ACA-6340
                                formed on 18-04-2023. It Deals in Maintenance and repair of motor vehicles. Its Registered
                                office is located at C/O MANMEET SINGH, ANANT AUTO OPP IBM COLONY, ADARSH NAGAR Ajmer Ajmer
                                Rajasthan-305001

                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img src="{{ asset('website-assets/images/three.jpg') }}" alt=""
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--* About Section End -->


        <!--* Enviornment impact section start -->
        {{-- <section id="higlightoverlay" class="light-text" style="position: relative; height: 100%;">
            <div class="container">
                <h1 class="text-center text-uppercase" style="color:#ffffff; font-size: 50px; opacity:0.9">Highlights</h1>
                <div class="row" style="">
                    <div class="my-lg-5 col-lg-12  col-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('website-assets/images/anantshowroom.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('website-assets/images/one.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('website-assets/images/two.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('website-assets/images/three.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('website-assets/images/four.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('website-assets/images/five.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('website-assets/images/seven.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="swiper-pagination mt-5 text-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--* Enviornment impact section end -->

        {{-- <section class="pt-5 pb-5" id="herosectionbgnew">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <h1 class="text-center text-uppercase" style="color:#000000; font-size: 50px; opacity:0.9">Services
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card h-100">
                            <img src="{{ asset('website-assets/images/testridetwo.webp') }}" alt=""
                                class="img-fluid rounded card-img-top cardcustomstyle">
                            <div class="card-body">
                                <h5 class="card-title">Test Ride</h5>
                                <p class="card-text">Take the vehicle out on the road and assess its handling, acceleration,
                                    braking, and overall performance.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card h-100">
                            <img src="{{ asset('website-assets/images/financingcar.jpg') }}" alt=""
                                class="img-fluid rounded card-img-top cardcustomstyle">
                            <div class="card-body">
                                <h5 class="card-title">Financing Options</h5>
                                <p class="card-text">Financing plays a crucial role in making your dream vehicle a reality, but navigating the different options can feel overwhelming.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card h-100">
                            <img src="{{ asset('website-assets/images/insurance.webp') }}" alt=""
                                class="img-fluid rounded card-img-top cardcustomstyle">
                            <div class="card-body">
                                <h5 class="card-title">Insurance Service</h5>
                                <p class="card-text">Vehicle insurance is a crucial aspect of ownership, protecting you
                                    financially in case of accidents, theft, or other unforeseen events.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card h-100 mt-4">
                            <img src="{{ asset('website-assets/images/one.jpg') }}" alt=""
                                class="img-fluid rounded card-img-top cardcustomstyle">
                            <div class="card-body">
                                <h5 class="card-title">Service and Maintainance</h5>
                                <p class="card-text">Whether you're a casual cruiser or a dedicated road warrior, regular bike service and maintenance are essential for a safe, enjoyable, and efficient ride. </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card h-100 mt-4">
                            <img src="{{ asset('website-assets/images/one.jpg') }}" alt=""
                                class="img-fluid rounded card-img-top cardcustomstyle">
                            <div class="card-body">
                                <h5 class="card-title">Customer Support</h5>
                                <p class="card-text">Customer support plays a crucial role in any business's success. It's about more than just resolving issues; it's about building trust, loyalty, and positive brand experiences.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                </div>
            </div>
        </section> --}}

        {{--
        <section id="about" class="about-section mb-0 mt-0">
            <div class="container">
                <div class="row align-items-center bicycle-img wow">
                    <div class="section-header text-center text-uppercase">
                        <h1 style="color: #000000;">Discover Your Ride</h1>

                        <p class="text-white">Drive the Future, Today. Elevate Your Drive.</p>
                    </div>

                    @foreach ($allvehicles->chunk(4) as $vehicleChunk)
                        <div class="row">
                            @foreach ($vehicleChunk as $row)
                                <div class="col-lg-3 mt-3">
                                    <div class="card cardcustomup">
                                        @php
                                            $imagePaths = explode(',', $row->image);
                                            $firstImagePath = $imagePaths[0];
                                        @endphp
                                        <img src="{{ asset($firstImagePath) }}" alt="" class="img-fluid"
                                            style="aspect-ratio: 4/4;">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between p-2">
                                                <h5 class="card-title" style="color: #1b2682">{{ $row->name }}</h5>
                                                <p class="card-text">
                                                    <a href="http://127.0.0.1:8000/newcustomer/#leadformsection"
                                                        class="booking-link">
                                                        <span class="p-2 rounded" id="submitbtn">
                                                            Book Now
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="pagination mt-5 p-3 justify-content-center">
                    {{ $allvehicles->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section> --}}


        {{-- <section id="impact"
            class="light-text mt-0"style="position: relative; height: 100%; background-color: #ffffff; ">
            <div class="container">
                <h1 class="text-center text-uppercase" style="color:#000000; font-size: 50px;">DISCOVER YOUR RIDE</h1>
                <div class="divider"></div>
                <div class="row" style="">
                    <div class="my-lg-5 col-lg-12  col-10 d-flex justify-content-center">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($allvehicles as $row)
                                    <div class="card cardcustomup swiper-slide">
                                        <div class="">
                                            @php
                                                $imagePaths = explode(',', $row->image);
                                                $firstImagePath = $imagePaths[0];
                                            @endphp
                                            <img src="{{ asset($firstImagePath) }}" alt="" class="img-fluid"
                                                style="aspect-ratio: 4/4;">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between p-2">
                                                    <h5 class="card-title" style="color: #1b2682">{{ $row->name }}
                                                    </h5>
                                                    <p class="card-text">
                                                        <a href="http://127.0.0.1:8000/newcustomer/#leadformsection"
                                                            class="booking-link">
                                                            <span class="p-2 rounded" id="submitbtn">
                                                                Book Now
                                                            </span>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination mt-5 text-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                centeredSlides: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                loop: true,
                spaceBetween: 30,
                grabCursor: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 50,
                    },
                },
            });
        </script>
        <script>
            // Counter function
            function startCounter(target, endValue, duration) {
                let start = 0;
                const increment = endValue / duration;

                function updateCounter() {
                    start += increment;
                    target.innerText = Math.round(start);

                    if (start < endValue) {
                        requestAnimationFrame(updateCounter);
                    }
                }

                updateCounter();
            }

            // Start counters on page load
            document.addEventListener('DOMContentLoaded', function() {
                startCounter(document.getElementById('happyCustomers').getElementsByTagName('h2')[0], 50, 500);
                startCounter(document.getElementById('yearsExperience').getElementsByTagName('h2')[0], 10, 500);
                startCounter(document.getElementById('qualityVehicles').getElementsByTagName('h2')[0], 1000, 500);
            });
        </script>
    </div>
@endsection
