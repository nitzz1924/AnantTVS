<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <style>
            .section-title {
                max-width: 800px;
                margin: 40px auto;
                padding: 15px;
                text-align: center;
            }

            .section-title h1 {
                font-size: 30px;
                text-transform: uppercase;
                color: #030594;
            }

            .section-title .divider {
                position: relative;
                border-bottom: 1px solid #000000;
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
                border: 1px solid #003487;
                left: 50%;
                margin-left: -10px;
                top: 50%;
                background: #003487;
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

            #submitbtnnew {
                background-color: #dd0707 !important;
                color: white !important;
            }

            #submitbtnnew:hover {
                background-color: #1b2682 !important;
                color: white !important;
            }

            .submitbtnnew {
                background-color: #dd0707 !important;
                color: white !important;
            }

            .submitbtnnew:hover {
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
                font-weight: lighter;
            }


            .otp-fields {
                display: flex;
                justify-content: center;
                gap: 10px;
            }

            .otp-fields input {
                width: 40px;
                height: 40px;
                text-align: center;
                border: 1px solid #ddd;
                border-radius: 5px;
            }



            #otpbtn {
                display: block;
                margin-top: 20px;
                background-color: #3498db;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            a {
                color: #3498db;
                text-decoration: none;
            }
        </style>
        <header class="main-header transparent">
            <div class="d-flex justify-content-center align-items-center">
                <a href="{{ route('frontendhomepage') }}" title="Wheels Bicycle">
                    <img src="{{ asset('website-assets/images/anantlogo.jpg') }}" alt="" class="img-fluid rounded-pill"
                        height="300px" width="100px">
                </a>
                <div class="social-icons ms-auto px-5">
                    <a href="https://www.facebook.com/profile.php?id=61550693320353" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCHHlaC5J25Kpb6DPo7dCOag" class="social-icon ms-2"><i class="bi bi-youtube"></i></a>
                    <a href="Instagram: https://www.instagram.com/anant_tvs_ajmer/?hl=en" class="social-icon ms-2"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </header>
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h1 class="textstyle large-heading">Welcome to Anant TVS</h1>
                        <div class="divider"></div>
                        <p class="text-black">Opposite IBM Office, Aadarsh Nagar,Ajmer 305002</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-3 mt-0 border border-0" id="herosectionbgnew">
            <div class="row">
                <div class="col-lg-12 p-3 d-grid align-items-center justify-content-center">
                    <div class="card p-3 p-md-5 my-5">
                        <form id="originalform">
                            @csrf
                            @if ($message = Session::get('success'))
                                <div class="alert border-0 alert-success text-center" role="alert" id="successAlertmsg">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            @if ($message = Session::get('failure'))
                                <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlertmsg">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <div class="text-center">
                                <h1 class="text-black mobile-headings">Ready to
                                    Ride?
                                </h1>
                                <p class="text-black text-center mb-2">
                                    Please drop your complete details, we will give your test ride at your doorstep.
                                </p>
                                <div class="divider text-black"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="newcustomername" class="form-control  rounded-pill"
                                            id="exampleFormControlInput1" placeholder="Enter your name *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="newcustomerphone" class="form-control  rounded-pill"
                                            id="exampleFormControlInput1" placeholder="Enter phone no *" pattern="[0-9]*"
                                            maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-grid gap-2 w-100">
                                        <button name="submit" class="btn btn-success" type="submit"
                                            id="submitbtnnew">Let's Go</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="{{ route('verifyotp') }}" method="POST" id="otp-form" class="mt-4"
                            style="display: none;">
                            @csrf
                            <div class="alert border-0 alert-success text-center d-none" role="alert" id="successAlert">
                                Thank your For Visiting..</div>
                            <div class="alert border-0 alert-danger text-center d-none" role="alert" id="dangerAlert">
                                Fail.!! Enter Correct OTP...!!!</div>
                            <h1 class="text-black text-center" style=" font-size: 30px !Important; font-weight:lighter;">
                                Verify your Account</h1>
                            <p id="phonetxt"></p>
                            <div class="otp-fields">
                                <input type="hidden" name="id" value="" id="customerid">
                                <input type="text" maxlength="1" name="otp1" required>
                                <input type="text" maxlength="1" name="otp2" required>
                                <input type="text" maxlength="1" name="otp3" required>
                                <input type="text" maxlength="1" name="otp4" required>
                                <input type="text" maxlength="1" name="otp5" required>
                                <input type="text" maxlength="1" name="otp6" required>
                            </div>
                            <div class="d-grid gap-2 w-100 mt-3 mb-3">
                                <button class="btn btn-success btn-sm submitbtnnew" type="submit"
                                    id="submitbtnnewnew">Verify</button>
                            </div>
                            {{-- <p class="text-black mt-3">Haven't received the code? <a href="#">Resend Code</a></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5 mt-3">
            <section id="about" class="about-section">
                <div class="container">
                    <div class="row bicycle-img wow fadeInLeft">
                        <div class="col-md-6">
                            <div class="d-grid align-items-center h-100">
                                <div class="heading-wrapper">
                                    <h1 class="" style="color: #dd0707;"><span>About Us</span></h1>
                                    ANANT TECHWHEELS LLP is a LLP incorporated in the state of Ajmer having CIN Number
                                    ACA-6340
                                    formed on 18-04-2023. It Deals in Sales, Services & Spares of two wheelers.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14293.330219913156!2d74.6535324!3d26.4127428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be1f23a1fd2c5%3A0xd5c6dab4c668c5a0!2sTVS%20Showroom%20(Anant%20Techwheels%20LLP)!5e0!3m2!1sen!2sin!4v1708339508950!5m2!1sen!2sin"
                                class="w-100 w-md-50" height="400px" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!--* About Section Start -->
        <div class="container-fluid p-3 p-md-5" id="herosectionbg">
            <section id="about" class="about-section">
                <div class="container" id="leadformsection">
                    <div class="row align-items-center  fadeInLeft">
                        <div class="col-lg-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('website-assets/images/formimage.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-center section-title">
                                <h1 class="text-white">Avail Offers</h1>
                                <div class="divider text-white"></div>
                            </div>
                            <div class="d-flex justify-content-center mb-3 p-2">
                                <div class="alert border-0 alert-success text-center d-none" role="alert"
                                    id="successAlert">
                                    <strong>We will reach you soon..!!!</strong>
                                </div>
                            </div>
                            <div>
                                <form action="{{ route('createlead') }}" method="POST" id="leadform">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <input type="text" name="name" class="form-control rounded-pill"
                                                    id="exampleFormControlInput1" placeholder="Enter name *" required>=
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="text" name="phoneno" class="form-control  rounded-pill"
                                                    id="exampleFormControlInput1" placeholder="Enter phone no *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-grid gap-2 w-100">
                                                <button class="btn btn-success" type="button" id="submitbtn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!--* About Section End -->

        <!--* Enviornment impact section start -->
        <section id="impact" class="light-text mt-4"
            style="position: relative; height: 100%; background-color: #ffffff; ">
            <div class="container">
                <h1 class="text-center text-uppercase mobile-heading" style="color:#000000;">Facilities</h1>
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

        <section id="testride" class="p-3 p-md-5" style="background-color: #4143ae">
            <div class="container py-3" id="leadformsection">
                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="active bg-white text-dark border border-0" id="pills-home-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="true">Test Ride</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="bg-white text-dark border border-0 ms-3" id="pills-profile-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Request for Specific</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="card p-3 mt-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <img src="{{ asset('website-assets/images/testridetwo.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>

                                <div class="col-lg-6 p-3 d-grid align-items-center">
                                    @csrf
                                    @if ($message = Session::get('successtest'))
                                        <div class="alert border-0 alert-success text-center" role="alert"
                                            id="successAlertmsgtest">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('failuretest'))
                                        <div class="alert border-0 alert-danger text-center" role="alert"
                                            id="dangerAlertmsgtest">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <form id="testrideform">
                                        @csrf
                                        <div class="text-center">
                                            <h1 class="text-black">
                                                Get Test
                                                Ride</h1>
                                            <p class="text-black text-center mb-3">
                                                Please drop your complete details, we will give your test ride at your
                                                doorstep.
                                            </p>
                                            <div class="divider text-black"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="text" name="customername"
                                                        class="form-control  rounded-pill" id="exampleFormControlInput1"
                                                        placeholder="Enter your name *" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="text" name="customerphoneno"
                                                        class="form-control  rounded-pill" id="exampleFormControlInput1"
                                                        placeholder="Enter phone no *" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <select name="type" class="form-control mb-3"
                                                        aria-label="Default select example" id="vehicletypeid">
                                                        @foreach ($masterdata as $row)
                                                            <option value="{{ $row->value }}">
                                                                {{ $row->value }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <select name="vehicle" class="form-control mb-3"
                                                        aria-label="Default select example" id="vehiclenameid">
                                                        <option value="">--select--</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-grid gap-2 w-100">
                                                    <button class="btn btn-success" type="submit" id="submitbtn">Your
                                                        First
                                                        Ride</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form action="{{ route('verifytestrideotp') }}" method="POST" id="otp-formtestride"
                                        class="mt-4" style="display: none;">
                                        @csrf
                                        <div class="alert border-0 alert-success text-center d-none" role="alert"
                                            id="successAlert">
                                            Thank your For Visiting..</div>
                                        <div class="alert border-0 alert-danger text-center d-none" role="alert"
                                            id="dangerAlert">
                                            Fail.!! Enter Correct OTP...!!!</div>
                                        <h1 class="text-black text-center">
                                            Verify your Account</h1>
                                        <p id="phonetxttest"></p>
                                        <div class="otp-fields">
                                            <input type="hidden" name="testid" value="" id="testrideid">
                                            <input type="text" maxlength="1" name="otptest1" required>
                                            <input type="text" maxlength="1" name="otptest2" required>
                                            <input type="text" maxlength="1" name="otptest3" required>
                                            <input type="text" maxlength="1" name="otptest4" required>
                                            <input type="text" maxlength="1" name="otptest5" required>
                                            <input type="text" maxlength="1" name="otptest6" required>
                                        </div>
                                        <div class="d-grid gap-2 w-100 mt-3 mb-3">
                                            <button class="btn btn-success btn-sm submitbtnnew" type="submit"
                                                id="submitbtnnewnew">Verify</button>
                                        </div>
                                        {{-- <p class="text-black mt-3">Haven't received the code? <a href="#">Resend Code</a></p> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab"tabindex="0">
                        <div class="card p-3 mt-1">
                            <div class="row">
                                <div class="col-lg-6 p-3 d-grid align-items-center">
                                    @if ($message = Session::get('successmakerequest'))
                                        <div class="alert border-0 alert-success text-center" role="alert"
                                            id="successAlertmsgmakereq">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('failuremakerequest'))
                                        <div class="alert border-0 alert-danger text-center" role="alert"
                                            id="dangerAlertmsgmakereq">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <form id="make-requestform">
                                        @csrf
                                        <div class="text-center">
                                            <h1 class="text-black">
                                                Make your Request</h1>
                                            <p class="text-black text-center mb-3">
                                                Please submit your specific request, we will reach you soon with the
                                                solution.
                                            </p>
                                            <div class="divider text-black"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <input type="text" name="requestphoneno"
                                                        class="form-control  rounded-pill" id="exampleFormControlInput1"
                                                        placeholder="Enter phone no *" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <textarea name="requestcomments" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                        placeholder="enter discription *" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-grid gap-2 w-100">
                                                    <button class="btn btn-success" type="submit" id="submitbtn">Make
                                                        Request</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form action="{{ route('verifymakerequestotp') }}" method="POST"
                                        id="otp-formmakerequest" class="mt-4" style="display: none;">
                                        @csrf
                                        <h1 class="text-black text-center">
                                            Verify your Account</h1>
                                        <p id="phonetxtmakerequest"></p>
                                        <div class="otp-fields">
                                            <input type="hidden" name="makerequestid" value=""
                                                id="makerequestid">
                                            <input type="text" maxlength="1" name="otpreq1" required>
                                            <input type="text" maxlength="1" name="otpreq2" required>
                                            <input type="text" maxlength="1" name="otpreq3" required>
                                            <input type="text" maxlength="1" name="otpreq4" required>
                                            <input type="text" maxlength="1" name="otpreq5" required>
                                            <input type="text" maxlength="1" name="otpreq6" required>
                                        </div>
                                        <div class="d-grid gap-2 w-100 mt-3 mb-3">
                                            <button class="btn btn-success btn-sm submitbtnnew" type="submit"
                                                id="submitbtnnewnew">Verify</button>
                                        </div>
                                        {{-- <p class="text-black mt-3">Haven't received the code? <a href="#">Resend Code</a></p> --}}
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <img src="{{ asset('website-assets/images/testridetwo.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="about" class="about-section mb-0 mt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class=" text-center ">
                        <h1 class="mobile-heading  text-uppercase" style="color: #000000;">Vehicles</h1>
                        <p class="text-black">Drive the Future, Today. Elevate Your Drive.</p>
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
                                            style="aspect-ratio: 4/3; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between p-2">
                                                <h5 class="card-title fw-light" style="color: #1b2682">{{ $row->name }}</h5>
                                                <p class="card-text">
                                                    <a href="http://127.0.0.1:8000/newcustomer/#leadformsection"
                                                        class="booking-link">
                                                        <span class="p-2" id="submitbtn">
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


        <a href="https://wa.me/7240667788" class="whatsapp-icon">
            <img src="{{ asset('website-assets/images/whatsapp-icon.png') }}" height="50px" width="50px"
                alt="" class="rounded">
        </a>

        <!-- Call icon -->
        <a href="tel:+917414055555" class="call-icon">
            <img src="{{ asset('website-assets/images/call.png') }}" height="50px" width="50px" alt=""
                class="rounded">
        </a>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            document.getElementById("submitbtn").addEventListener("click", function(event) {
                event.preventDefault(); // Prevent default form submission behavior

                // Perform form submission using AJAX
                var form = document.getElementById("leadform");
                var formData = new FormData(form);

                // Example AJAX request
                var xhr = new XMLHttpRequest();
                xhr.open(form.method, form.action, true);
                xhr.onload = function() {
                    // Handle response
                    if (xhr.status === 200) {
                        alert("We Will reach you soon..!!!");
                        document.getElementById("successAlert").class = "d-block";
                    } else {
                        // If there was an error, handle it here
                    }
                };
                xhr.onerror = function() {
                    // Handle connection errors
                };
                xhr.send(formData);
            });
        </script>
        {{-- <script>
            document.getElementById("submitbtnnewnew").addEventListener("click", function(event) {
                event.preventDefault();

                // Perform form submission using AJAX
                var form = document.getElementById("otp-form");
                var formData = new FormData(form);

                // Example AJAX request
                var xhr = new XMLHttpRequest();
                xhr.open(form.method, form.action, true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert("We Will reach you soon..!!!");
                        document.getElementById("successAlert").style.display="block";
                    } else {
                        document.getElementById("dangerAlert").style.display="block";
                    }
                };
                xhr.onerror = function() {
                };
                xhr.send(formData);
            });
        </script> --}}
        <script>
            setTimeout(function() {
                $('#successAlertmsg').fadeOut('slow');
            }, 2000);

            setTimeout(function() {
                $('#dangerAlertmsg').fadeOut('slow');
            }, 5000);


            setTimeout(function() {
                $('#successAlertmsgtest').fadeOut('slow');
            }, 2000);

            setTimeout(function() {
                $('#dangerAlertmsgtest').fadeOut('slow');
            }, 5000);



            setTimeout(function() {
                $('#successAlertmsgmakereq').fadeOut('slow');
            }, 2000);

            setTimeout(function() {
                $('#dangerAlertmsgmakereq').fadeOut('slow');
            }, 5000);
        </script>
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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            jQuery('#originalform').submit(function(e) {
                e.preventDefault();
                jQuery.ajax({
                    url: "{{ url('form_submit') }}",
                    data: jQuery('#originalform').serialize(),
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        jQuery('#message').html(data.msg);
                        console.log(data);
                        if (data.msg == 'success') {
                            jQuery('#originalform').hide();
                            jQuery('#otp-form').show();
                            jQuery('#phonetxt').text(
                                `Enter the 6-digit code sent to your phone number ${data.data.phoneno}`);
                            jQuery('#customerid').val(data.data.id);
                        }

                    }
                });
            });
        </script>
        <script>
            jQuery('#testrideform').submit(function(e) {
                e.preventDefault();
                jQuery.ajax({
                    url: "{{ url('create_testride') }}",
                    data: jQuery('#testrideform').serialize(),
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.msg == 'success') {
                            jQuery('#testrideform').hide();
                            jQuery('#otp-formtestride').show();
                            jQuery('#phonetxttest').text(
                                `Enter the 6-digit code sent to your phone number ${data.data.customerphoneno}`
                            );
                            jQuery('#testrideid').val(data.data.id);
                        }

                    }
                });
            });
        </script>
        <script>
            jQuery('#make-requestform').submit(function(e) {
                e.preventDefault();
                jQuery.ajax({
                    url: "{{ url('create_makerequest') }}",
                    data: jQuery('#make-requestform').serialize(),
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.msg == 'success') {
                            jQuery('#make-requestform').hide();
                            jQuery('#otp-formmakerequest').show();
                            jQuery('#phonetxtmakerequest').text(
                                `Enter the 6-digit code sent to your phone number ${data.data.requestphoneno}`
                            );
                            jQuery('#makerequestid').val(data.data.id);
                        }

                    }
                });
            });
        </script>
        <script>
            $('#vehicletypeid').on('change', function() {
                var selectedtype = $(this).val();
                console.log(selectedtype);

                $.ajax({
                    url: '/filtervehicle/' + selectedtype,
                    type: 'GET',
                    success: function(response) {
                        console.log("this working", response);
                        var dropdown1 = $('#vehiclenameid');
                        dropdown1.empty();
                        dropdown1.append($('<option selected>Choose...</option>'));
                        response.vehicle.forEach(function(item) {
                            dropdown1.append($('<option value="' + item.name + '">' + item.name +
                                '</option>'));
                        });
                    }
                });
            });
        </script>
    </div>
@endsection
