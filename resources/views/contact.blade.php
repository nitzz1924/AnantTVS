<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        <!--* Enviornment impact section start -->
        <section id="impact" class="gallery-section  mt-5 light-text" style="position: relative;">
            <div class="container">
                <div class="row" style="position: relative;">
                    <div class="my-lg-5 col-lg-6 col-md-5 col-12 bicycle-img wow fadeInLeft">
                        <div class="heading-wrapper text-left">
                            <h2 class="large-heading text-uppercase" style="color: #000000;">
                                <span></span>Contact Us
                            </h2>
                            <div class="card p-3 mb-3 mt-3 border border-0">
                                <h3 class="text-danger">Phone:</h3>
                                <a style="color: #000000;" class="mb-0">
                                    +91-7414055555
                                </a>
                            </div>
                            <div class="card p-3 mb-3 mt-3 border border-0">
                                <h3 class="text-danger">Email:</h3>
                                <a style="color: #000000;" class="mb-0">
                                    info@ananttvs.com
                                </a>
                            </div>
                            <div class="card p-3 mb-3 mt-3 border border-0">
                                <h3 class="text-danger">Address:</h3>
                                <a style="color: #000000;" class="mb-0">
                                    Makhupura,Ajmer
                                </a>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class='my-lg-5 col-lg-6 col-md-5 col-12 bicycle-img wow fadeInLeft'>
                        <img src="{{ asset('website-assets/images/bike.png') }}" alt="" class="img-fluid">
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
                    <div class="col-lg-7 col-12">
                        <div class="form-wrapper">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <input type="text" class="form-control" id="inputYourName"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <input type="email" class="form-control" id="inputYourEmail"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <textarea class="form-control" id="inputYourQuestion" placeholder="Your Question"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 d-flex justify-content-end">
                                        <input type="submit" value="Send" class="btn btn-primary border-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('website-assets/images/jupiter.png') }}" alt="" height="500px"
                            width="900px" class="">
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7147.620507379979!2d74.65988889514213!3d26.397317168025562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be1729fec4d57%3A0xdad053a2267fdc6b!2sMakhupura%2C%20Ajmer%2C%20Rajasthan%20305002!5e0!3m2!1sen!2sin!4v1704785963855!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--* Dealer Section end -->
    </div>
@endsection
