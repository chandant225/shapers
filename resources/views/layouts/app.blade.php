<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kathmandu Shapers</title>
    <META NAME="author" CONTENT="">
    <META NAME="description" CONTENT="Kathmandu Shapers">
    <META NAME="keywords" CONTENT="Kathmandu Shapers">
    <link rel="icon" type="image/x-icon" href="{{ asset('/Logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css?v=1.076') }}">
    <style>
        body.modal-open .mm-slideout {
            z-index: inherit !important;
        }
    </style>
    @stack('styles')
    @livewireStyles
</head>

<body>

    <div style="padding: 0px 0px 24px 0px">
        @include('layouts.header')
    </div>
    @yield('content')
    @include('layouts.footer')

    <!-- Scroll-Top-btn -->
    <a href="#" id="myBtn" class="scroll-top btn-hover">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src={{ asset('js/app.js') }}></script>
    <script type="text/javascript" src={{ asset('js/bootstrap.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/count-up.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/glightbox.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/imagesloaded.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/isotope.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/main.js') }}></script>
    <script type="text/javascript" src={{ asset('js/tiny-slider.js') }}></script>
    <script type="text/javascript" src={{ asset('js/wow.min.js') }}></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('css/mmenu.js') }}"></script>
    <script>
        // if ($(window).width() <= 820) {
        // new Mmenu(document.querySelector("#mmenu"));
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu("#mmenu", {
                    "slidingSubmenus": false,
                    "offCanvas": {
                        "position": "right-front"
                    },
                    "theme": "white"
                });
            }
        );
        //  }
    </script>

    <script>
        new WOW().init();
    </script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    @stack('script')
    @livewireScripts
</body>

</html>
