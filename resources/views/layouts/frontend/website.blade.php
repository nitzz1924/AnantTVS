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
    <link rel="shortcut icon" href="{{ asset('website-assets/images/logo.png') }}">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/fontawesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/bootstrap5.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://sacredthemes.net/wheels/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website-assets/frontend-css/responsive.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="wrapper" id="top">


        <div class="main">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        {{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> --}}
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{ asset('website-assets/frontend-js/jquery.min.js') }}"></script>

        {{-- <script src="{{ asset('website-assets/frontend-js/bootstrap.min.js') }}"></script> --}}
        <script src="{{ asset('website-assets/frontend-js/cascading-select.js') }}"></script>
        <script src="https://sacredthemes.net/wheels/js/owl.carousel.min.js"></script>
        <script src="{{ asset('website-assets/frontend-js/onpagescroll.js') }}"></script>
        <script src="{{ asset('website-assets/frontend-js/wow.min.js') }}"></script>
        <script src="{{ asset('website-assets/frontend-js/fancybox/jquery.fancybox.min.js') }}"></script>

        <!--* Theme Base, Components and Settings -->
        <script src="{{ asset('website-assets/frontend-js/theme.js') }}"></script>
        {{-- <script src="{{ asset('website-assets/frontend-js/jquery.min.latest.js') }}"></script> --}}
        {{-- <script src="https://sacredthemes.net/wheels/js/jquery.min.latest.js"></script> --}}
        <!--* Theme Custom -->
        <script src="{{ asset('website-assets/frontend-js/custom.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        {{-- <script src="https://sacredthemes.net/wheels/script.js"></script> --}}
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
