<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        <!--* Hero Section Start -->
        {{-- <section id="home" class="hero-section style-1 light-text" style="position: relative; height: 100%; background-color: black; background-image: url(https://sacredthemes.net/wheels/images/hero-bg.jpg); background-repeat: no-repeat;background-position: right; background-size: cover;">
            <div class="container double-bottom-padding">
                <div class="row">
                    <div class="col-lg-5 col-md-12 banner-content bicycle-img wow fadeInLeft">
                        <h2 class="top-sub-heading">New SS-100</h2>
                        <h1 class="large-heading"><span>Smart & Connected</span>E-BIKE</h1>
                        <div class="text-block text-lead">
                            <p>
                                The most popular electric motorcycles include SS-100 ($ 10,000),
                                SS-130 ($ 11,000) and SS-200 ($ 12,500).
                            </p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-primary btn-accent has-icon" href="#book-ride">
                                <span>Download brochure</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 px-0">
                        <div class="container1 wow fadeInRight d-none d-lg-block">
                            <div class="circular-progress">
                                <span class="progress-value">0%</span>
                            </div>
                            <div class="hero-img">
                                <img src="https://sacredthemes.net/wheels/images/hero-bike.webp" alt="" class="img-fluid">
                            </div>
                            <span class="blink">
                                <img src="https://sacredthemes.net/wheels/images/charging-image.webp" alt="" class="img-fluid">
                            </span>
                        </div>
                        <div class="container1 wow fadeInRight d-block d-lg-none">
                            <div class="hero-img">
                                <img src="https://sacredthemes.net/wheels/images/hero-ebike.gif" alt="" class="img-fuild">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--* Hero Section End -->

        <!--* About Section Start -->
        <section id="about" class="about-section mb-5 mt-5">
            <div class="container">
                <div class="row align-items-center bicycle-img wow fadeInLeft">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img src="{{ asset('website-assets/images/biketwo.webp') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 about-text">
                        <div class="heading-wrapper">
                            <h2 class="large-heading text-uppercase"><span>About</span>TVS Raider 125</h2>
                        </div>
                        <div class="text-block">
                            <p>
                                TVS Raider 125 is a mileage bike available in 4 variants and 10 colours. The TVS Raider 125
                                is powered by 124.8cc BS6 engine which develops a power of 11.2 bhp and a torque of 11.2 Nm.
                                With front disc and rear drum brakes, TVS Raider 125 comes up with combined braking system
                                of both wheels. This Raider 125 bike weighs 123 kg and has a fuel tank capacity of 10
                                liters.

                            </p>
                            <p>
                                Price: TVS Raider 125 price for its variant - Raider 125 Single Seat - Disc is estimated at
                                Rs. 97,054. The price for the other variants - Raider 125 Disc, Raider 125 Super Squad
                                Edition and Raider 125 SmartXonnect are Rs. 97,998, Rs. 1,01,161 and Rs. 1,06,573. The
                                mentioned Raider 125 prices are the average ex-showroom.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* About Section End -->

        <!--* Enviornment impact section start -->
        <section id="impact" class="gallery-section  light-text"
            style="position: relative;background-image: url(https://sacredthemes.net/wheels/images/env1.jpg); background-repeat: no-repeat;background-position: bottom; background-size:cover;">
            <div class="container">
                <div class="row" style="position: relative;">
                    <div class="my-lg-5 col-lg-6 col-md-5 col-12 bicycle-img wow fadeInLeft">
                        <div class="heading-wrapper text-left">
                            <h2 class="large-heading text-uppercase" style="color: #fff;">
                                <span>Wheels of Passion</span>Our Mission
                            </h2>
                            <p style="color: #fff;" class="mb-0 pt-3">At ANANT TVS, we are driven by a singular mission—to
                                redefine your entertainment experience. We believe in the power of captivating stories,
                                immersive visuals, and the ability of technology to connect us all.
                            </p>
                            <br>
                            <p style="color: #fff;" class="mb-0">
                                ANANT TVS is more than a local platform; it's a global gateway to diverse stories and
                                cultures. Our mission is to connect people from different corners of the world through the
                                universal language of storytelling. By bridging gaps and fostering cross-cultural
                                understanding, we aspire to create a truly global community.
                            </p>
                        </div>
                    </div>
                    <div class='wrapper1 col-lg-6 col-md-7 col-12 wow fadeInUp'>
                        <div class='carousel env-carousel owl-theme d-none d-lg-block d-md-block'>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/zero-emission.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Reduced Emissions</p>
                                    <p>
                                        E-bikes produce zero tailpipe emissions, which means they don't release
                                        harmful pollutants or greenhouse gases directly into the atmosphere.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/energy-saving.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Energy Efficiency </p>
                                    <p>E-bikes are more energy-efficient than many other forms of transportation.
                                        They use relatively small amounts of electricity.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/traffic-light.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Reduced Traffic Congestion</p>
                                    <p>
                                        E-bikes can help reduce traffic congestion in cities by
                                        providing an efficient and convenient mode of transportation.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/energy.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Lower Energy Consumption</p>
                                    <p>
                                        E-bikes consume less energy per mile traveled
                                        compared to electric cars or motorcycles.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/no-sound.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Reduced Noise Pollution</p>
                                    <p>
                                        E-bikes are generally quieter than gas-powered
                                        vehicles, reducing noise pollution in urban areas.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/lifestyles.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Promotion of Active Transportation</p>
                                    <p>
                                        E-bikes encourage physical activity and outdoor recreation.
                                        They can motivate people to choose biking over car trips.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/long-bettery.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Long-Lasting Batteries</p>
                                    <p>
                                        Reducing waste is one way to reduce one's carbon footprint.
                                        One benefit of owning and riding an e-bike is that it produces little
                                        waste. That does not, however, mean that it does not produce any waste.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/peak.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Off-Peak Charging</p>
                                    <p>
                                        Charging a battery means drawing power from the power grid.
                                        While this consumption is necessary, it does not have to be a strain.
                                        After a long day, one can charge their bike during off-peak hours.
                                    </p>
                                </div>
                            </div>
                            <div class='env_carousel__item'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/dust.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Preventing Air Pollution</p>
                                    <p>
                                        Pollution is a serious problem that plagues many cities. It causes
                                        respiratory and other problems that can be dangerous for some.
                                        e-bikes do not contribute to the pollution in the air.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='d-block d-lg-none d-md-none'>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/zero-emission.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Reduced Emissions</p>
                                    <p>
                                        E-bikes produce zero tailpipe emissions, which means they don't release
                                        harmful pollutants or greenhouse gases directly into the atmosphere.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/energy-saving.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Energy Efficiency </p>
                                    <p>
                                        E-bikes are more energy-efficient than many other forms of transportation.
                                        They use relatively small amounts of electricity.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/traffic-light.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Reduced Traffic Congestion</p>
                                    <p>
                                        E-bikes can help reduce traffic congestion in cities by
                                        providing an efficient and convenient mode of transportation.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/energy.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Lower Energy Consumption</p>
                                    <p>
                                        E-bikes consume less energy per mile traveled
                                        compared to electric cars or motorcycles.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/no-sound.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Reduced Noise Pollution</p>
                                    <p>
                                        E-bikes are generally quieter than gas-powered
                                        vehicles, reducing noise pollution in urban areas.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/lifestyles.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Promotion of Active Transportation</p>
                                    <p>
                                        E-bikes encourage physical activity and outdoor recreation.
                                        They can motivate people to choose biking over car trips.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/long-bettery.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Long-Lasting Batteries</p>
                                    <p>
                                        Reducing waste is one way to reduce one's carbon footprint.
                                        One benefit of owning and riding an e-bike is that it produces little
                                        waste. That does not, however, mean that it does not produce any waste.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/peak.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Off-Peak Charging</p>
                                    <p>
                                        Charging a battery means drawing power from the power grid.
                                        While this consumption is necessary, it does not have to be a strain.
                                        After a long day, one can charge their bike during off-peak hours.
                                    </p>
                                </div>
                            </div>
                            <div class='env-sm mb-5'>
                                <div class='carousel__item-head'>
                                    <img src="https://sacredthemes.net/wheels/images/dust.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class='carousel__item-body'>
                                    <p class='title mb-0 head'>Preventing Air Pollution</p>
                                    <p>
                                        Pollution is a serious problem that plagues many cities. It causes
                                        respiratory and other problems that can be dangerous for some.
                                        e-bikes do not contribute to the pollution in the air.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* Enviornment impact section end -->
        <!--* Enviornment impact section start -->
        <section id="impact" class="gallery-section  mt-5 light-text" style="position: relative;">
            <div class="container">
                <div class="row" style="position: relative;">
                    <div class="my-lg-5 col-lg-6 col-md-5 col-12 bicycle-img wow fadeInLeft">
                        <div class="heading-wrapper text-left">
                            <h2 class="large-heading text-uppercase" style="color: #000000;">
                                <span>Anant</span>Our Vission
                            </h2>
                            <p style="color: #000000;" class="mb-0 pt-3">At ANANT TVS, we are driven by a singular
                                mission—to
                                redefine your entertainment experience. We believe in the power of captivating stories,
                                immersive visuals, and the ability of technology to connect us all.
                            </p>
                            <br>
                            <p style="color: #000000;" class="mb-0">
                                ANANT TVS is more than a local platform; it's a global gateway to diverse stories and
                                cultures. Our mission is to connect people from different corners of the world through the
                                universal language of storytelling. By bridging gaps and fostering cross-cultural
                                understanding, we aspire to create a truly global community.
                            </p>
                        </div>
                    </div>
                    <div class='my-lg-5 col-lg-6 col-md-5 col-12 bicycle-img wow fadeInLeft'>
                        <img src="{{ asset('website-assets/images/raidertwo.webp') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--* Enviornment impact section end -->


        <!--* Dealer Section start -->
        <section id="dealer" class="dealer-section light-gray-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <h2>Find Dealer Near You</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-row">
                            <div class="col-lg-4 col-sm-6">
                                <select name="country" class="form-control">
                                    <option value="">Select Country</option>
                                    <option value="Country 1">Country 1</option>
                                    <option value="Country 2">Country 2</option>
                                    <option value="Country 3">Country 3</option>
                                    <option value="Country 4">Country 4</option>
                                    <option value="Country 5">Country 5</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <select name="city" class="form-control">
                                    <option value="">Select City</option>
                                    <option value="city 1">City 1</option>
                                    <option value="city 2">City 2</option>
                                    <option value="city 3">City 3</option>
                                    <option value="city 4">City 4</option>
                                    <option value="city 5">City 5</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <input type="submit" class="btn fw" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* Dealer Section end -->
    </div>
@endsection
