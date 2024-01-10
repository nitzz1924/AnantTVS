<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link rel="icon" sizes="192x192" href="{{ asset('website-assets/images/logo.png') }}">
    <!--* favicon & bookmark -->
    <link rel="shortcut icon" href="https://sacredthemes.net/wheels/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://sacredthemes.net/wheels/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/fontawesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/bootstrap.min5.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/bootstrap5.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/responsive.css') }}" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    <div class="wrapper" id="top">
        <header class="main-header menu-absolute transparent light-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 logo">
                        <a href="{{ route('frontendhomepage') }}" title="Wheels Bicycle">
                            <img class="regular-logo img-fluid" src="{{ asset('website-assets/images/logo.png') }}"
                                alt="bicycle">
                            <img class="sticky-logo img-fluid" src="{{ asset('website-assets/images/logo.png') }}"
                                alt="bicycle">
                        </a>
                        <div class="menu-icon">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </div>
                    <div class="col-sm-9 menu-conainer">
                        <nav class="site-navigation">
                            <ul class="main-menu">
                                <li><a href="{{ route('frontendhomepage') }}">Home</a></li>
                                <li><a href="{{ route('frontendaboutpage') }}">About</a></li>
                                <li><a href="{{ route('frontendvehiclespage') }}">Vehicles</a></li>
                                <li><a href="{{ route('frontendcontactpage') }}">Contact</a></li>
                            </ul>
                            <ul class="header-social-media">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="main">
            @yield('content')
        </div>

        <footer class="site-footer">
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">About Us</h4>
                                </div>
                                <div class="widget-contet">
                                    <img src="{{ asset('website-assets/images/logo.png') }}"
                                        class="footer-logo img-fluid" alt="">
                                    <p>
                                        ANANT TVS, your premier destination for all things biking, is where passion
                                        meets the open road. Dive into a world of two-wheeled exhilaration, connecting
                                        with a global community of bike enthusiasts.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">Useful Links</h4>
                                </div>
                                <div class="widget-contet">
                                    <ul class="menu">
                                        <li class="mb-3"><a href="{{ route('frontendhomepage') }}">Home</a></li>
                                        <li class="mb-3"><a href="{{ route('frontendaboutpage') }}">About</a></li>
                                        <li class="mb-3"><a href="{{ route('frontendvehiclespage') }}">Vehicles</a>
                                        </li>
                                        <li class="mb-3"><a href="{{ route('frontendcontactpage') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">Contact Info</h4>
                                </div>
                                <div class="widget-contet contact-info">
                                    <div class="widget-contact-info">
                                        <h3>Phone</h3>
                                        <span><a
                                                href="https://sacredthemes.net/wheels/+01(123)4567890">+91-7414055555</a></span>
                                    </div>
                                    <div class="widget-contact-info">
                                        <h3>Email</h3>
                                        <span><a href="mailtp:info@wheels.com">info@ananttvs.com</a></span>
                                    </div>
                                    <div class="widget-contact-info">
                                        <h3>Address</h3>
                                        <span>Makhupura, <br />Ajmer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">Subscribe</h4>
                                </div>
                                <div class="widget-contet">
                                    <div class="newsletter-box">
                                        <form method="post">
                                            <input type="email" name="email" placeholder="Enter Email Address"
                                                required="" autocomplete="off" class="form-control">
                                            <button type="submit" class="signup-btn">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">Follow Us</h4>
                                </div>
                                <div class="widget-contet">
                                    <div class="footer-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <div class="container">
                    <div class="copyright-text">© 2024 Anant Tvs. Developed by
                        <a target="_blank" href="http://yuvmedia.in/">YUVMEDIA</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
        {{-- <script src="{{ asset('website-assets/frontend-js/jquery.min.js') }}"></script> --}}
        <script src="{{ asset('website-assets/frontend-js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('website-assets/frontend-js/cascading-select.js') }}"></script>
        <script src="{{ asset('website-assets/frontend-js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('website-assets/frontend-js/onpagescroll.js') }}"></script>
        <script src="{{ asset('website-assets/frontend-js/wow.min.js') }}"></script>
        <script src="{{ asset('website-assets/frontend-js/fancybox/jquery.fancybox.min.js') }}"></script>

        <!--* Theme Base, Components and Settings -->
        <script src="{{ asset('website-assets/frontend-js/theme.js') }}"></script>
        {{-- <script src="{{ asset('website-assets/frontend-js/jquery.min.latest.js') }}"></script> --}}
        {{-- <script src="https://sacredthemes.net/wheels/script.js"></script> <!--this is not coming--> --}}
        <!--* Theme Custom -->
        <script src="{{ asset('website-assets/frontend-js/custom.js') }}"></script> <!--this is not coming-->\
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
            integrity="sha256-kvXmE4RDzPKxUtJh2SS5BUHoz3ZtSm3YDYY2P9O1BZU=" crossorigin="anonymous"></script>
        <script>
            (function(e) {
                e.fn.circle = function(t) {
                    var n = e.extend({
                        speed: "2000"
                    }, t);
                    return this.each(function() {
                        function t() {
                            var e = i.find("li.block.active").index();
                            c.removeClass("active"), c.eq(e).addClass("active")
                        }

                        function o() {
                            var n;
                            i.addClass("disable-hover"), i.stop(!0, !0).animate({
                                rotatedeg: p.deg += p.step


                            }, {
                                duration: 400,
                                step: function(t) {
                                    t >= 360 ? t -= 360 : t <= -360 && (t += 360), e(this).css(
                                        "transform", "rotate(" + t + "deg)"), e(this).css(
                                        "-webkit-transform", "rotate(" + t + "deg)")
                                },
                                complete: function() {
                                    p.active = i.find("li.active").removeClass("active"), "right" ==
                                        p.direction && p.step == d && (p.active.prev() && p.active
                                            .prev().length ? (n = p.active.prev().index(), p.active
                                                .prev().addClass("active")) : (p.active.siblings(
                                                ":last-child").addClass("active"), n = 9)),
                                        "left" == p.direction && p.step == u && (p.active.next() &&
                                            p.active.next().length ? (n = p.active.next().index(), p
                                                .active.next().addClass("active")) : (p.active
                                                .siblings(":first-child").addClass("active"), n = 0)
                                        ), i.is(":animated"), i.removeClass("disable-hover"),
                                        t()
                                }
                            }, "ease")
                        }

                        function r() {
                            i.addClass("disable-hover"),
                                i.stop(!0, !0).animate({
                                    rotatedeg: p.deg += p.step
                                }, {
                                    duration: 400,
                                    step: function(t) {
                                        t >= 360 ? t -= 360 : t <= -360 && (t += 360),
                                            e(this).css("transform", "rotate(" + t + "deg)"),
                                            e(this).css("-webkit-transform", "rotate(" + t + "deg)")
                                    },
                                    complete: function() {
                                        p.active = i.find("li.active"),
                                            i.is(":animated"),
                                            i.removeClass("disable-hover")
                                    }
                                }, "ease")
                        }
                        var i = e(this),
                            s = i.find("li").length,
                            a = i.find(" > li .icon"),
                            l = "count" + s,
                            u = 0,
                            c = i.next().find(".animate"),
                            p = {
                                duration: n.speed,
                                deg: 0,
                                step: u,
                                active: i.find("li.active"),
                                direction: "left"
                            };
                        switch (s) {
                            case 10:
                                u = -36;
                                break;
                            case 9:
                                u = -40;
                                break;
                            case 8:
                                u = -45;
                                break;
                            case 7:
                                u = -51.5;
                                break;
                            case 6:
                                u = -60;
                                break;
                            case 5:
                                u = -72;
                                break;
                            case 4:
                                u = -90;
                                break;
                            case 3:
                                u = -120;
                                break;
                            case 2:
                                u = -180;
                                break;
                            case 1:
                                u = -360
                        }
                        i.addClass(l);
                        var d = u - 2 * u;
                        i.find("> li").first().addClass("active"),
                            i.find("> li").first().find("a").attr("href"),
                            c.eq(0).addClass("active"),
                            e(a).on("click", function() {
                                var n = e(this).parent().index() - i.find("li.active").index();
                                i.children("li").removeClass("active"),
                                    e(this).parent().addClass("active"),
                                    p.step = -n * d, n * d >= 288 && (p.step = -n * d + 360),
                                    n * d <= -288 && (p.step = -n * d - 360),
                                    r(), p.step = u, p.direction = "left", t()
                            });
                        var f = i.parent().find("div.next"),
                            h = i.parent().find("div.prev");
                        f.on("click", function() {
                            i.is(":animated") || (p.direction = "left", p.step = u, o())
                        }), h.on("click", function() {
                            i.is(":animated") || (p.direction = "right", p.step = d, o())
                        })
                    })
                }
            }(jQuery));
            $(function() {
                setInterval(displayHello, 1500);
                var a = 1;

                function displayHello() {
                    if (a == 1) {
                        $('#animate1').html(
                            '<span class="d-block d-lg-none d-md-none"><img src="./images/efficient.png" alt=""></span> <br><h4 class="text-dark">Efficient Motor</h4><p class="feature-font text-dark">What defines an electric bike from a conventional bicycle is its motor. An electric bike motor should deliver power and value.Hence, whether you are using it to commute to work, or you want to ride rough terrain or climb hills, it should let you do so effortlessly.</p>'
                        )
                    } else {
                        $('#animate1').html('')
                    }
                    var book = ".book";
                    var final_book = book.concat(a);
                    $(final_book).addClass('active');
                    var animate = ".animate";
                    var final_animate = animate.concat(a);
                    $('.animate').removeClass('active');
                    $(final_animate).addClass('active');
                    var icon = ".icon";
                    var final_icon = icon.concat(a);
                    $(final_icon).click();
                    a = a + 1
                    if (a == 7) {
                        a = 1;
                    }
                }
                //*========Background image
                $('div').each(function() {
                    var url = $(this).attr('data-image');
                    if (url) {
                        $(this).css('background-image', 'url(' + url + ')');
                    }
                });
                $('section').each(function() {
                    var url = $(this).attr('data-image');
                    if (url) {
                        $(this).css('background-image', 'url(' + url + ')');
                    }
                });

                function autoHeightCircle() {
                    var circle = $('.circle--rotate'),
                        circleInner = $('.animate-wrapper'),
                        circleH = circle.width(),
                        circleInnerH = circleInner.width();
                    circle.height(circleH);
                    circleInner.height(circleInnerH);
                }
                $("#circle--rotate").circle();
                autoHeightCircle();
                $(window).resize(function() {
                    autoHeightCircle();
                });
            });
        </script>

        <script>
            let circularProgress = document.querySelector(".circular-progress"),
                progressValue = document.querySelector(".progress-value");

            let progressStartValue = 0,
                progressEndValue = 100,
                speed = 100;

            let progress = setInterval(() => {
                progressStartValue++;

                progressValue.textContent = `${progressStartValue}%`;
                circularProgress.style.background = `conic-gradient(#248C46 ${
                    progressStartValue * 3.6
                }deg, #ededed 0deg)`;

                if (progressStartValue == progressEndValue) {
                    clearInterval(progress);
                }
            }, speed);
        </script>
    </div>
</body>

</html>
