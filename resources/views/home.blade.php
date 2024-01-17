<!-- -----------------------------------------------🙏JAI SHREE RAM🚩------------------------------------------------------------- -->
@extends('layouts.frontend.website')
@section('content')
    <div class="main-container">
        <style>
            .counter-section {
                background-color: #eeeeee;
                /* Red color */
                color: #000000;
                /* White text */
                text-align: center;
                padding: 50px 0;
            }

            .counter-item {
                display: inline-block;
                margin: 0 20px;
            }

            .counter-item h2 {
                font-size: 36px;
                margin: 10px 0;
            }

            .counter-item p {
                font-size: 18px;
                margin: 5px 0;
            }
        </style>
        <!--* Hero Section Start -->
        <section id="home" class="hero-section style-1 light-text"
            style="position: relative; height: 100%; background-color: black; background-image: url(https://sacredthemes.net/wheels/images/hero-bg.jpg); background-repeat: no-repeat;background-position: right; background-size: cover;">
            <div class="container double-bottom-padding">
                <div class="row">
                    <div class="col-lg-5 col-md-12 banner-content bicycle-img wow fadeInLeft">
                        <h2 class="top-sub-heading">TVS TVS Raider 125 4V</h2>
                        <h1 class="large-heading"><span>Strap on Safety</span>114 km/h</h1>
                        <div class="text-block text-lead">
                            <p>
                                The TVS Apache RTR 160 4V has pushed the limits of performance and powered through any
                                challenge on the racetrack with 3 ride modes and SmartXonnect.
                            </p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-primary btn-accent has-icon" href="{{ route('frontendcontactpage') }}">
                                <span>Reach Us</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 px-0">
                        <div class="container1 wow fadeInRight d-none d-lg-block">
                            <div class="hero-img">
                                <img src="{{ asset('website-assets/images/raiderred.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* Hero Section End -->

        <!--* About Section Start -->
        <section id="about" class="about-section mb-5">
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
                        <div class="">
                            <a href="{{ route('frontendaboutpage') }}" class="btn btn-primary text-center">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* About Section End -->

        <!--* Features Section Start -->
        <section id="feature" class="features-section gray-bg" style="position: relative;">
            <div class="section-background">
                <div class="background-wrapper">
                    <div class="background-inner"
                        style="background-image: url(https://sacredthemes.net/wheels/images/feature-section.png); background-repeat: no-repeat;background-position: left; background-size:100% 100%;">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-lg-5">
                        <div class="heading-wrapper text-center">
                            <h2 class="large-heading text-uppercase" style="color: #fff;"><span>Smart</span>Features</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-lg-5" style="display: flex;justify-content: end;">
                        <div class="services wow fadeInUp">
                            <div class="">
                                <div class="circle--slider">
                                    <div class="rotate--circle">
                                        <ul class="circle--rotate" id="circle--rotate">
                                            <li class="block1">
                                                <div class="icon icon1">
                                                    <img src="https://sacredthemes.net/wheels/images/efficient.png"
                                                        alt="" class="img-fluid ">
                                                    <p class="icon-text">Efficient Motor</p>
                                                </div>
                                            </li>
                                            <li class="block2">
                                                <div class="icon icon2">
                                                    <img src="https://sacredthemes.net/wheels/images/plug.png"
                                                        alt="" class="img-fluid">
                                                    <p class="icon-text">Quick Charging</p>
                                                </div>
                                            </li>
                                            <li class="block3">
                                                <div class="icon icon3">
                                                    <img src="https://sacredthemes.net/wheels/images/eco-energy.png"
                                                        alt="" class="img-fluid">
                                                    <p class="icon-text">Eco-Friendly</p>
                                                </div>
                                            </li>
                                            <li class="block4">
                                                <div class="icon icon4">
                                                    <img src="https://sacredthemes.net/wheels/images/weight.png"
                                                        alt="" class="img-fluid">
                                                    <p class="icon-text">Weight</p>
                                                </div>
                                            </li>
                                            <li class="block5">
                                                <div class="icon icon5">
                                                    <img src="https://sacredthemes.net/wheels/images/pedal.png"
                                                        alt="" class="img-fluid">
                                                    <p class="icon-text">Pedaling</p>
                                                </div>
                                            </li>
                                            <li class="block6">
                                                <div class="icon icon6">
                                                    <img src="https://sacredthemes.net/wheels/images/sync.png"
                                                        alt="" class="img-fluid">
                                                    <p class="icon-text">Smartphone Integration</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="animate-wrapper">
                                            <div class="animate animate1 ">
                                                <div class="animate-img">
                                                    <a href="https://en.wikipedia.org/wiki/Pothole">
                                                        <div class="animate-img__in" data-image="">
                                                            <div class="animate-more">
                                                                <div class="animate-title">
                                                                    <div class="p-center" id="animate1">
                                                                        <div class="d-block d-lg-none d-md-none">
                                                                            <img src="https://sacredthemes.net/wheels/images/efficient.png"
                                                                                alt="" class="mb-3 img-fluid">
                                                                        </div>
                                                                        <h4 class="text-dark">Efficient Motor</h4>
                                                                        <p class="feature-font text-dark">
                                                                            What defines an electric bike from a
                                                                            conventional bicycle is its motor. An
                                                                            electric bike motor should deliver power and
                                                                            value. Hence, whether you are using
                                                                            it to commute to work, or you want to ride rough
                                                                            terrain or climb hills, it should
                                                                            let you do so effortlessly.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate animate2">
                                            <div class="animate-img">
                                                <div class="animate-img__in" data-image="">
                                                    <div class="animate-more">
                                                        <div class="animate-title">
                                                            <div class="p-center">
                                                                <div class="d-block d-lg-none d-md-none">
                                                                    <img src="https://sacredthemes.net/wheels/images/plug.png"
                                                                        alt="" class="mb-3 img-fluid">
                                                                </div>
                                                                <h4 class="text-dark">Quick Charging</h4>
                                                                <p class="feature-font text-dark">
                                                                    The good thing about electric bikes is that they can
                                                                    last a wide range, around 35 to 100 miles,
                                                                    before the battery running out. If there is still some
                                                                    charge when you plug it in, then
                                                                    it may take less time. Furthermore, if you’re not a big
                                                                    fan of charging your electric bikes.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate animate3">
                                            <div class="animate-img">
                                                <div class="animate-img__in" data-image="">
                                                    <div class="animate-more">
                                                        <div class="animate-title">
                                                            <div class="p-center">
                                                                <div class="d-block d-lg-none d-md-none">
                                                                    <img src="https://sacredthemes.net/wheels/images/eco-energy.png"
                                                                        alt="" class="mb-3 img-fluid">
                                                                </div>
                                                                <h4 class="text-dark">Eco-Friendly</h4>
                                                                <p class="feature-font text-dark">
                                                                    The average gasoline-driven car has a fuel economy of 22
                                                                    miles and drives around 11,500
                                                                    miles annually. Working with these figures, they
                                                                    concluded that
                                                                    each car would produce 8887 grams of carbon dioxide each
                                                                    year.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate animate4">
                                            <div class="animate-img">
                                                <div class="animate-img__in" data-image="">
                                                    <div class="animate-more">
                                                        <div class="animate-title">
                                                            <div class="p-center">
                                                                <div class="d-block d-lg-none d-md-none">
                                                                    <img src="https://sacredthemes.net/wheels/images/weight.png"
                                                                        alt="" class="mb-3 img-fluid">
                                                                </div>
                                                                <h4 class="text-dark">Weight</h4>
                                                                <p class="feature-font text-dark">
                                                                    Their engineering compensates for the weight by clever
                                                                    designs that feel like the extra pounds
                                                                    have disappeared when you start to pedal. Along with
                                                                    that, features such as the
                                                                    pedal-assist or motor do most of the heavy-duty work so
                                                                    you can enjoy a smooth ride.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate animate5">
                                            <div class="animate-img">
                                                <div class="animate-img__in" data-image="">
                                                    <div class="animate-more">
                                                        <div class="animate-title">
                                                            <div class="p-center">
                                                                <div class="d-block d-lg-none d-md-none">
                                                                    <img src="https://sacredthemes.net/wheels/images/pedal.png"
                                                                        alt="" class="mb-3 img-fluid">
                                                                </div>
                                                                <h4 class="text-dark">Pedaling</h4>
                                                                <p class="feature-font text-dark">
                                                                    These bikes are so popular because they feel like
                                                                    conventional bikes while providing the
                                                                    superior experience of electric bikes. You are
                                                                    essentially
                                                                    controlling the speed with your feet; however, you can
                                                                    accelerate much quicker.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate animate6">
                                            <div class="animate-img">
                                                <div class="animate-img__in" data-image="">
                                                    <div class="animate-more">
                                                        <div class="animate-title">
                                                            <div class="p-center">
                                                                <div class="d-block d-lg-none d-md-none">
                                                                    <img src="https://sacredthemes.net/wheels/images/sync.png"
                                                                        alt="" class="mb-3 img-fluid">
                                                                </div>
                                                                <h4 class="text-dark">Smartphone Integration</h4>
                                                                <p class="feature-font text-dark">
                                                                    You can easily connect your electric bike wirelessly
                                                                    with smartphones to include app
                                                                    capabilities like GPS, health tracking, and maps. Other
                                                                    apps may
                                                                    even allow you to unlock your electric bike’s integrated
                                                                    lock system.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* Features Section End -->

        <!--* Variation Section Start -->
        <section id="variation" class="color-section bus-layout" style="position: relative;">
            <div class="section-background">
                <div class="background-wrapper">
                    <div class="background-inner"
                        style="background-image: url('https://sacredthemes.net/wheels/images/color-background1.png'); background-repeat: no-repeat;background-position: bottom ; background-size:auto;">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 pt-lg-5">
                        <div class="heading-wrapper pt-lg-5">
                            <h2 class="large-heading text-uppercase" style="color: #000;"><span>Choose Your
                                    Favourite</span> Color </h2>
                            <p>
                                Check out here the TVS Raider 125 color images to decide which one
                                suits you the best.TVS Raider 125 is available in 5 color options: Red, Blue,Black.
                                You can also download your favourite TVS Raider 125 color image.
                            </p>
                        </div>
                    </div>
                    <div class=" col-lg-7 col-12 pt-lg-5">
                        <div class="pt-lg-5">
                            <div class="color-variation-slider owl-carousel m-top-30">
                                <div class="item pt-5" data-color="red">
                                    <img src="{{ asset('website-assets/images/raiderred.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="item mt-5" data-color="black">
                                    <img src="{{ asset('website-assets/images/raidertwo.webp') }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="item mt-5" data-color="yellow">
                                    <img src="{{ asset('website-assets/images/biketwo.webp') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* Variation Section end -->



        <!--* Enviornment impact section start -->
        <section id="impact" class="gallery-section  light-text"
            style="position: relative;background-image: url(https://sacredthemes.net/wheels/images/env1.jpg); background-repeat: no-repeat;background-position: bottom; background-size:cover;">
            <div class="container">
                <div class="row" style="position: relative;">
                    <div class="my-lg-5 col-lg-6 col-md-5 col-12 bicycle-img wow fadeInLeft">
                        <div class="heading-wrapper text-left">
                            <h2 class="large-heading text-uppercase" style="color: #fff;">
                                <span>Enviormental</span>Impacts of e-bike
                            </h2>
                            <p style="color: #fff;" class="mb-0 pt-3">E-bikes are zero-emission vehicles since they
                                use lithium-ion batteries. Riding an e-bike means you're not contributing to global
                                warming.
                                You will emit no pollutants into the atmosphere. In fact, using e-bikes will save up
                                to 500 pounds of carbon emissions each year.
                            </p>
                            <br>
                            <p style="color: #fff;" class="mb-0">
                                Are e-bikes eco friendly? Electric Bikes are Eco Friendly
                                Electric bicycles do consume energy. In comparison to a moped, motorbike
                                or a car, the amount of energy used is very small, making them
                                more eco friendly choice of transport. Ebikes only use battery power
                                which can be recycled when they have reached their life span.
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
        <section id="dealer" class="dealer-section light-gray-bg position-relative">
            <img src="{{ asset('website-assets/images/engine.png') }}" alt="" class="img-fluid elementhome"
            width="20%">
            <div class="container">
                <div class="row align-items-center">
                    <h2 class="large-heading text-uppercase text-center" style="color: #000000;">
                        <span>A Fleet of Excellence</span>Satisfied Drivers and Riders
                    </h2>
                    <div class="col-lg-12">
                        <div class="counter-section">
                            <div class="counter-item border border-danger p-3" id="happyCustomers"
                                style="background-color: #f74848; color:white; border-top-left-radius: 50%; border-top-right-radius: 50%;">
                                <h2>0</h2>
                                <p>Happy Customers</p>
                            </div>

                            <div class="counter-item border border-danger p-3" id="yearsExperience"
                                style="background-color: #f74848; color:white; border-top-left-radius: 50%; border-top-right-radius: 50%;">
                                <h2>0</h2>
                                <p>Years of Experience</p>
                            </div>

                            <div class="counter-item border border-danger p-3" id="qualityVehicles"
                                style="background-color: #f74848; color:white; border-top-left-radius: 50%; border-top-right-radius: 50%;">
                                <h2>0</h2>
                                <p>Quality Vehicles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
