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
                font-size: 50px;
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

            .whatsapp-icon {
                position: fixed;
                bottom: 20px;
                /* Adjust as needed */
                left: 20px;
                /* Adjust as needed */
                z-index: 9999;
                /* Ensure it's above other elements */
            }

            /* Fixed Call icon */
            .call-icon {
                position: fixed;
                bottom: 20px;
                /* Adjust as needed */
                right: 20px;
                /* Adjust as needed */
                z-index: 9999;
                /* Ensure it's above other elements */
            }
        </style>
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h1 class="textstyle">Welcome to Anant TVS</h1>
                        <div class="divider"></div>
                        <p class="text-black">Opposite IBM Office, Aadarsh Nagar,Ajmer 305002</p>
                    </div>
                </div>
            </div>


            <div class="container pb-5">
                <section id="about" class="about-section">
                    <div class="container">
                        <div class="row bicycle-img wow fadeInLeft">
                            <div class="col-md-6">
                                <div class="heading-wrapper">
                                    <h1 class="" style="color: #dd0707;"><span>About Us
                                        </span></h1>
                                </div>
                                <div class="text-black">
                                    <p>
                                        ANANT TECHWHEELS LLP is a LLP incorporated in the state of Ajmer having CIN Number
                                        ACA-6340
                                        formed on 18-04-2023. It Deals in Sales, Services & Spares of two wheelers.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, mollitia! Aliquam
                                        quaerat recusandae nesciunt deserunt possimus explicabo ratione vel nulla officia
                                        doloribus culpa, aspernatur aliquid officiis dolores totam ipsam dignissimos sunt.
                                        Ad
                                        officia repellendus omnis, impedit laudantium aliquam ullam suscipit dicta amet
                                        itaque
                                        eum veniam dolorem illum quasi quae nam reiciendis error velit cum odio, tempore
                                        laboriosam sunt ea? Aliquid cumque non fugiat ipsum, accusamus harum distinctio
                                        neque
                                        nostrum nulla provident temporibus reprehenderit, aspernatur quo illo nemo vero? Nam
                                        delectus autem, tempora corrupti totam asperiores nemo quia nobis laborum id nulla
                                        illum
                                        exercitationem ipsum voluptas aliquam, culpa magnam ex voluptatibus.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14293.330219913156!2d74.6535324!3d26.4127428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be1f23a1fd2c5%3A0xd5c6dab4c668c5a0!2sTVS%20Showroom%20(Anant%20Techwheels%20LLP)!5e0!3m2!1sen!2sin!4v1708339508950!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            {{-- <div class="col-lg-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14293.330219913156!2d74.6535324!3d26.4127428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be1f23a1fd2c5%3A0xd5c6dab4c668c5a0!2sTVS%20Showroom%20(Anant%20Techwheels%20LLP)!5e0!3m2!1sen!2sin!4v1707455406915!5m2!1sen!2sin"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> --}}
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <!--* About Section Start -->
        <div class="container-fluid p-5" id="herosectionbg">
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
                                <div class="divider text-white"></div>
                            </div>
                            <div class="d-flex justify-content-center mb-3 p-2">
                                <div class="alert border-0 alert-success text-center d-none" role="alert"
                                    id="successAlert">
                                    <strong>We will reach you soon..!!!</strong>
                                </div>
                            </div>
                            <form action="{{ route('createlead') }}" method="POST" id="leadform">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control  rounded-pill"
                                                id="exampleFormControlInput1" placeholder="Enter name *" required>
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
                                            <button class="btn btn-success" type="button" id="submitbtn">Submit</button>
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
            style="position: relative; height: 100%; background-color: #ffffff; ">
            <div class="container">
                <h1 class="text-center text-uppercase" style="color:#000000; font-size: 50px;">Facilities</h1>
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

        <section id="testride" class="" style="background-color: #4143ae">
            <div class="container" id="leadformsection">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="active bg-white text-dark border border-0" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Test Ride</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="bg-white text-dark border border-0 ms-3" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Request for Specific</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="card p-3 mt-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <img src="{{ asset('website-assets/images/testridetwo.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>

                                <div class="col-lg-6 p-3 d-grid align-items-center">
                                    <div class="text-center">
                                        <h1 class="text-black" style=" font-size: 50px !Important; font-weight:lighter;">
                                            Get Test
                                            Ride</h1>
                                        <p class="text-black text-center mb-0">
                                            Please drop your complete details, we will give your test ride at your doorstep.
                                        </p>
                                        <div class="divider text-black"></div>
                                    </div>
                                    <form action="{{ route('createtestride') }}" method="POST">
                                        @csrf
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
                                            <div class="col-lg-12 col-6">
                                                <div class="d-grid gap-2 w-100">
                                                    <button class="btn btn-success" type="submit" id="submitbtn">Your
                                                        First
                                                        Ride</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"tabindex="0">
                        <div class="card p-3 mt-3">
                            <div class="row">
                                <div class="col-lg-6 p-3 d-grid align-items-center">
                                    <div class="text-center">
                                        <h1 class="text-black" style=" font-size: 50px !Important; font-weight:lighter;">
                                            Make your Request</h1>
                                        <p class="text-black text-center mb-0">
                                            Please submit your specific request, we will reach you soon with the solution.
                                        </p>
                                        <div class="divider text-black"></div>
                                    </div>
                                    <form action="{{ route('makerequest') }}" method="POST">
                                        @csrf
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
                                                    <textarea name="requestcomments" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="enter discription *" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-6">
                                                <div class="d-grid gap-2 w-100">
                                                    <button class="btn btn-success" type="submit" id="submitbtn">Make Request</button>
                                                </div>
                                            </div>
                                        </div>
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
            setTimeout(function() {
                $('#successAlert').fadeOut('slow');
            }, 2000);

            setTimeout(function() {
                $('#dangerAlert').fadeOut('slow');
            }, 5000);
        </script> --}}
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
                            dropdown1.append($('<option value="' + item.name + '">' + item.name +'</option>'));
                        });
                    }
                });
            });
        </script>
    </div>
@endsection
