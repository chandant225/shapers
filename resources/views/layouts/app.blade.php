<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <div style="padding: 0px 0px 24px 0px">
        @include('layouts.header')
    </div>


    @yield('content')

    <div>
        @include('layouts.footer')
    </div>

    <!-- Scroll-Top-btn -->
    <a href="#" class="scroll-top btn-hover">
        <i class="fas fa-arrow-up"></i>
    </a>
    @yield('script')
    <script type="text/javascript" src={{ asset('js/app.js') }}></script>
    <script type="text/javascript" src={{ asset('js/bootstrap.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/count-up.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/glightbox.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/imagesloaded.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/isotope.min.js') }}></script>
    <script type="text/javascript" src={{ asset('js/main.js') }}></script>
    <script type="text/javascript" src={{ asset('js/tiny-slider.js') }}></script>
    <script type="text/javascript" src={{ asset('js/wow.min.js') }}></script>
    <script type="text/javascript">
        //========= testimonial
        tns({
            container: '.hero-slider',
            items: 1,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controls: true,
            controlsText: [
                '<i class="fas fa-angle-left"></i>',
                '<i class="fas fa-angle-right"></i>',
            ],
        });
        //========= testimonial
        tns({
            container: '.testimonial-slider',
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 10,
            nav: false,
            controls: true,
            controlsText: [
                '<i class="fas fa-angle-left"></i>',
                '<i class="fas fa-angle-right"></i>',
            ],
            responsive: {
                640: {
                    items: 1,
                },
                700: {
                    items: 2
                },
                1200: {
                    items: 3,
                }
            }
        });

        //========= glightbox
        GLightbox({
            href: 'assets/images/video/video.mp4',
            type: 'video',
            source: 'youtube', //vimeo, youtube or local
            width: 900,
            autoplayVideos: true,
        });
    </script>
    <script>
        //========= glightbox
        GLightbox({
            href: 'assets/images/video/video.mp4',
            type: 'video',
            source: 'youtube', //vimeo, youtube or local
            width: 900,
            autoplayVideos: true,
        });
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            speed: 400,
            spaceBetween: 100,
            slidesPerView: 3,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            spaceBetween: 10,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }
        });
    </script>
</body>

</html>
