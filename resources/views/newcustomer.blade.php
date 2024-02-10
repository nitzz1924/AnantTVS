<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container" id="herosectionbg">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <style>
            .section-title {
                max-width: 800px;
                margin: 40px auto;
                padding: 15px;
                text-align: center;
            }

            .section-title h1 {
                font-size: 50px;
                text-transform: uppercase;
                color: #dd0707;
            }

            .section-title .divider {
                position: relative;
                border-bottom: 1px solid #f0f0f0;
                margin-bottom: 30px;
                margin-top: 30px;
            }

            .section-title .divider:before {
                position: absolute;
                content: '';
                width: 30px;
                height: 30px;
                border: 1px solid #f0f0f0;
                left: 50%;
                margin-left: -15px;
                top: 50%;
                background: #fff;
                margin-top: -15px;
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            .section-title .divider:after {
                position: absolute;
                content: '';
                width: 20px;
                height: 20px;
                border: 1px solid #fd2c51;
                left: 50%;
                margin-left: -10px;
                top: 50%;
                background: #fd2c51;
                margin-top: -10px;
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            #submitbtn {
                background-color: #dd0707 !important;
                color: white !important;
            }

            #submitbtn:hover {
                background-color: #1b2682 !important;
                color: white !important;
            }

            #herosectionbg {
                position: relative;
            }

            #herosectionbg::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #030594bd;
            }

            #herosectionbg {
                background-image: url('/website-assets/images/loginbanner.png');
                background-repeat: no-repeat;
                background-attachment: fixed;
                position: relative;
            }

            .textstyle {
                -webkit-text-stroke: 1px rgb(247, 247, 247);
                color: white;
                text-shadow:
                    3px 3px 0 #000,
                    -1px -1px 0 #000,
                    1px -1px 0 #000,
                    -1px 1px 0 #000,
                    1px 1px 0 #000;
            }
        </style>
        <div class="container position-relative">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h1 class="textstyle">Welcome to Anant TVS</h1>
                        <div class="divider"></div>
                        <p class="text-white">Nasirabad Rd, opposite IBM office, Adarsh Nagar, Ajmer, Rajasthan 305001</p>
                    </div>
                </div>
            </div>
        </div>
        <!--* About Section Start -->

        <div class="container pb-5">
            <section id="about" class="about-section">
                <div class="container">
                    <div class="row align-items-center bicycle-img wow fadeInLeft">

                        <div class="col-lg-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('website-assets/images/anantshowroom.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14293.330219913156!2d74.6535324!3d26.4127428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be1f23a1fd2c5%3A0xd5c6dab4c668c5a0!2sTVS%20Showroom%20(Anant%20Techwheels%20LLP)!5e0!3m2!1sen!2sin!4v1707455406915!5m2!1sen!2sin"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="container p-5">
            <section id="about" class="about-section">
                <div class="container" id="leadformsection">
                    <div class="row align-items-center bicycle-img wow fadeInLeft">
                        <div class="col-lg-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('website-assets/images/formimage.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="text-center section-title">
                                <h1 class="text-white" style=" font-size: 50px !Important;">Avail Offers</h1>
                                <div class="divider"></div>
                            </div>
                            <form action="{{ route('createlead') }}" method="POST" id="leadform">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control  rounded-pill"
                                                id="exampleFormControlInput1" placeholder="Enter name *">
                                            <input type="hidden" name="leadid" value="0">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" name="phoneno" class="form-control  rounded-pill"
                                                id="exampleFormControlInput1" placeholder="Enter phone no *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-6">
                                        <div class="d-grid gap-2 w-100">
                                            <button class="btn btn-success" type="submit" id="submitbtn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!--* About Section End -->

        <!--* Enviornment impact section start -->
        <section id="impact" class="light-text mt-4"
            style="position: relative; height: 100%; background-color: #dd0707; ">
            <div class="container">
                <h1 class="text-center text-uppercase" style="color:#ffffff; font-size: 50px;">Highlights</h1>
                <div class="divider"></div>
                <div class="row" style="">
                    <div class="my-lg-5 col-lg-12 col-12">
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


        <section id="about" class="about-section mb-0 mt-0">
            <div class="container">
                <div class="row align-items-center bicycle-img wow">
                    <div class="section-header text-center text-uppercase">
                        <h1 style="color: #ffffff;">Vehicles</h1>

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
                                        <img src="{{ asset($firstImagePath) }}" alt="" class="img-fluid">
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
        </section>



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
