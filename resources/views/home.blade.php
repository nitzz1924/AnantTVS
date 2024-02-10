<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!--* Hero Section Start -->
        <section id="herosectionbg" class="light-text d-flex justify-content-center align-items-center"
            style="position: relative; height: 100%; background-color: black; background-image: url({{ asset('website-assets/images/anantshowroom.jpg') }}); background-repeat: no-repeat;background-position: right; background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-md-12 wow fadeInLeft  text-center">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('website-assets/images/anantlogo.jpg') }}" alt=""
                                class="img-fluid rounded-pill" height="200px" width="200px">
                        </div>
                        <h1 class="large-heading"><span>Welcome to Anant TVS</span></h1>
                        <h2 class=""> Adarsh Nagar, Ajmer, Rajasthan 305001</h2>
                        <div class=" d-flex justify-content-center mt-2 row">
                            <div class="col-md-4 mt-2 mb-1">
                                <a class="text-white btn btn-light btn-sm border border-light  w-100 "
                                    href="{{ route('viewloginpage') }}" style="background-color: #003487;">
                                    Existing Customer
                                </a>
                            </div>
                            <div class="col-md-4 mt-2 mb-2">
                                <a class="text-white btn btn-light btn-sm border border-light w-100"
                                    href="{{ route('newcustomer') }}" style="background-color: #003487;">
                                  New Customer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--* Hero Section End -->

        <!--* About Section Start -->
        <section id="herosectionbgnew" class="about-section mb-0"
            style=" background-image: url({{ asset('website-assets/images/TVS-Metaverse.jpg') }}); background-repeat: no-repeat;background-position: left; background-size: cover; background-attachment:fixed;">
            <div class="container">
                <div class="row align-items-center bicycle-img wow fadeInLeft">
                    <div class="col-md-6">
                        <div class="heading-wrapper">
                            <h1 class="text-white"><span>About Us
                                </span></h1>
                        </div>
                        <div class="text-white">
                            <p>
                                ANANT TECHWHEELS LLP is a LLP incorporated in the state of Ajmer having CIN Number ACA-6340
                                formed on 18-04-2023. It Deals in Maintenance and repair of motor vehicles. Its Registered
                                office is located at C/O MANMEET SINGH, ANANT AUTO OPP IBM COLONY, ADARSH NAGAR Ajmer Ajmer
                                Rajasthan-305001

                            </p>
                            <p>
                                Price: TVS Raider 125 price for its variant - Raider 125 Single Seat - Disc is estimated at
                                Rs. 97,054. The price for the other variants - Raider 125 Disc, Raider 125 Super Squad
                                Edition and Raider 125 SmartXonnect are Rs. 97,998, Rs. 1,01,161 and Rs. 1,06,573. The
                                mentioned Raider 125 prices are the average ex-showroom.
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
        </section>
        <!--* About Section End -->





        <!--* Enviornment impact section start -->
        <section id="higlightoverlay" class="light-text" style="position: relative; height: 100%;">
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
        </section>
        <!--* Enviornment impact section end -->

        <!--* Features Section Start -->
        <section class="containernew" id="servicesoverlay">
            <section class="services section-bg" id="services">
                <div class="section-header">
                    <h3 class="text-white">Services</h3>
                    <p class="text-white" style="opacity: 0.9">Laudem latine persequeris id sed, ex fabulas delectus quo. No
                        vel partiendo abhorreant
                        vituperatoribus.</p>
                </div>
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="box border border-danger">
                                <div class="icon" style="background-color: red">
                                    <img src="{{ asset('website-assets/images/bycicle.png') }}" alt=""
                                    class=" rounded">
                                </div>
                                <h4 class="title"><a href="">Models</a></h4>

                                <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel
                                    partiendo abhorreant vituperatoribus.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box border border-danger">
                                <div class="icon" style="background: #000;">
                                    <i class="fa fa-clipboard service-icon" style="color: #c59c35;"></i>
                                </div>

                                <h4 class="title"><a href="">Request</a></h4>

                                <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel
                                    partiendo abhorreant vituperatoribus.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box border border-danger">
                                <div class="icon" style="background: #000;">
                                    <i class="fa fa-chart-bar service-icon" style="color: #c59c35;"></i>
                                </div>

                                <h4 class="title"><a href="">Test Rides</a></h4>

                                <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel
                                    partiendo abhorreant vituperatoribus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!--* Features Section End -->



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
