<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        <section id="impact" class="light-text" style="position: relative;">
            <img src="{{ asset('website-assets/images/raiderred.png') }}" alt="" class="img-fluid elements"
                width="30%">
            <img src="{{ asset('website-assets/images/jupiter.png') }}" alt="" class="img-fluid elementsscooter"
                width="30%">
            <div class="container">
                <div class="row">
                    <div class="my-lg-5 col-lg-12 col-md-5 col-12 bicycle-img wow fadeInLeft">
                        <div class="heading-wrapper text-left">
                            <h2 class="large-heading text-uppercase text-center" style="color: #000000;">
                                <span></span>Contact Us
                            </h2>
                            <div class="card p-3 mb-3 mt-3 border border-0">
                                <h3 class="text-danger text-center">Phone:</h3>
                                <a style="color: #000000; text-align: center; font-size: 20px" class="mb-0">
                                    +91-7414055555
                                </a>
                            </div>
                            <div class="card p-3 mb-3 mt-3 border border-0">
                                <h3 class="text-danger text-center">Email:</h3>
                                <a style="color: #000000; text-align: center; font-size: 20px" class="mb-0">
                                    info@ananttvs.com
                                </a>
                            </div>
                            <div class="card p-3 mb-3 mt-3 border border-0">
                                <h3 class="text-danger text-center">Address:</h3>
                                <a style="color: #000000; text-align: center; font-size: 20px" class="mb-0">
                                    Makhupura,Ajmer
                                </a>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class='my-lg-5 col-lg-12 col-md-12 col-12 bicycle-img wow fadeInLeft'>
                        <img src="{{ asset('website-assets/images/all.png') }}" alt="" class="img-fluid"
                            width="100%">
                    </div>
                </div>
            </div>
        </section>
        <!--* Enviornment impact section end -->

        <!--* Contact Section start -->
        <section id="contact" class="contact-section">
            <div class="section-background m-bg-hide">
                <div class="background-wrapper bicycle-img">
                    <div class="background-inner"
                        style="background-image: url('{{ asset('website-assets/images/background.png') }}'); background-repeat: no-repeat;background-position: bottom;background-size: cover;">
                    </div>
                </div>
            </div>
            <div class="container py-lg-5 bicycle-img">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-wrapper">
                            <h2 class="large-heading text-uppercase">Say Hi !!</h2>
                            <h4 class="fw-300">Fill the Gap and We Will Contact You Soon</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Name</label>
                                    <input type="text" name="name" class="form-control custominput"
                                        id="exampleFormControlInput1" placeholder="enter name">
                                    {{-- <input type="hidden" name="leadid" value="{{ $row->id }}"> --}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Phone
                                        No.</label><span class="fw-bold text-danger">*</span>
                                    <input type="text" name="phoneno" class="form-control custominput"
                                        id="exampleFormControlInput1" placeholder="enter phone no" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label  fw-bold">Email
                                        address</label>
                                    <input type="email" name="email" class="form-control custominput"
                                        id="exampleFormControlInput1" placeholder="enter email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label  fw-bold">City</label>
                                    <input type="text" name="city" class="form-control custominput"
                                        id="exampleFormControlInput1" placeholder="enter city">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label  fw-bold">State</label>
                                    <input type="text" name="state" class="form-control custominput"
                                        id="exampleFormControlInput1" placeholder="enter state">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label  fw-bold">Country</label>
                                    <input type="text" name="country" class="form-control custominput"
                                        id="exampleFormControlInput1" placeholder="enter country">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="#"><span class="rounded-pill bg-dark text-white px-4 py-2">Send</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 row">
                        <div>
                            <img src="{{ asset('website-assets/images/jupiter.png') }}" alt="" height="500px"
                                width="400px" class="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* Contact Section End -->
        <!--* Dealer Section start -->
        <section id="dealer" class="dealer-section light-gray-bg custom-map">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7147.620507379979!2d74.65988889514213!3d26.397317168025562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be1729fec4d57%3A0xdad053a2267fdc6b!2sMakhupura%2C%20Ajmer%2C%20Rajasthan%20305002!5e0!3m2!1sen!2sin!4v1704785963855!5m2!1sen!2sin"
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--* Dealer Section end -->
    </div>
@endsection
