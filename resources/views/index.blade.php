@extends('layouts.app')
@section('content')
    <div>
        <!-- Hero-area -->
        <section class="hero-area style2">
            @if (count($sliders) === 0)
                <center>
                    <p class="text-2xl text-red-600 font-bold">
                        There are not any sliders avaliable yet.
                    </p>
                </center>
            @elseif(count($sliders) >= 1)
                <div class="hero-slider">
                    <!-- hero-inner -->
                    @foreach ($sliders as $slider)
                        <div class="hero-inner style2 overlay"
                            style="background-image: url('/storage/{{ $slider->image }}')">
                            <div class="container">
                                <div class="row">
                                    <!-- Home-slider -->
                                    <div style="margin-top:10rem" class="col-lg-12">
                                        <div class="home-slider">
                                            <div class="hero-text">
                                                <h5 class="wow fadeInUp" data-wow-delay=".2s">
                                                    {{ $slider->top_title }}
                                                </h5>
                                                <h1 class="wow fadeInUp" data-wow-delay=".4s">
                                                    {{ $slider->mid_title }}
                                                </h1>
                                                <p class="wow fadeInUp" data-wow-delay=".6s">
                                                    {!! $slider->description !!}
                                                </p>
                                                <div class="button wow fadeInUp" data-wow-delay=".8s">
                                                    <a href="" class="btn" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">Discover
                                                        More</a>
                                                    <a href="{{ $slider->video_link }}" target="_blank"
                                                        class="video btn"><i class="fas fa-play"></i> Play
                                                        Video</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

        <!-- About-Us Section -->
        <section class="about-us">
            <div class="container">
                @if (!$slogan)
                    <center>
                        <p class="text-2xl text-red-600 font-bold">
                            There is no any slogan avaliable
                            yet
                        </p>
                    </center>
                @elseif($slogan)
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                                <img class="" src="/storage/{{ $slogan->image }}" alt="#" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="about-left">
                                <div class="section-title align-left">
                                    <span class="wow fadeInDown" data-wow-delay=".2s">{{ $slogan->top_title }}</span>
                                    @if ($slogan->slogan_title)
                                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                            {{ $slogan->slogan_title }}
                                        </h2>
                                    @endif
                                    <div style="text-align: justify;">
                                        {!! $slogan->descriptions !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- End About-Us Section -->
        <section style="background-color: #f4f7fa" class="our-achievement section">
            <div class="container">
                <div class="row">
                    @if (count($counters) === 0)
                        <center>
                            <p>There is no any counter avaliable yet.</p>
                        </center>
                    @elseif(count($counters) >= 1)
                        @foreach ($counters as $counter)
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="single-achievement wow fadeInUp" data-wow-delay=".2s"
                                    style="
                            visibility: visible;
                            animation-delay: 0.2s;
                            animation-name: fadeInUp;
                            border-radius: 10px;
                        ">
                                    <h3 class="counter">
                                        <span id="secondo1" class="countup me-3"
                                            cup-end="{{ $counter->number }}"></span>{{ $counter->sign }}
                                    </h3>
                                    <p>{{ $counter->title }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
        </section>
        <!-- Features style2 Section -->
        <section class="features style2 section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section-title -->
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Hub Verticals
                            </h2>
                            <h3 class="overlay-text">Hub Verticals</h3>
                        </div>
                    </div>
                </div>
                <!-- single-feature -->
                <div class="row">
                    @if (count($features) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is no any Hub Verticals avaliable yet
                            </p>
                        </center>
                    @elseif(count($features) >= 1)
                        <div class="swiper hub-verticals-swiper">
                            <div style="padding: 20px 0px" class="swiper-wrapper">
                                @foreach ($features as $feature)
                                    <div class="swiper-slide">
                                        <!-- single-feature -->
                                        <div class="single-feature wow fadeInUp shadow" data-wow-delay=".2s">
                                            <img src="/storage/{{ $feature->image }}" alt="" />
                                            <h3>
                                                <a href="#">{{ $feature->title }}</a>
                                            </h3>
                                            <p>{!! $feature->descriptions !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section style="background-color: rgb(0, 92, 156)">
            <div class="">
                <div class="join-us">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('pictures/join.jpeg') }}" alt="" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-around align-items-center"
                            style="padding: 5rem">
                            <h2 class="text-center text-underline" style="text-transform: uppercase; font-size: 50px">
                                Be One Of Us
                            </h2>
                            <p class="text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Corporis fugiat nobis alias! Quia, eveniet
                                beatae?
                            </p>
                            <button class="join-us-btn mt-2">
                                <a href="/become_a_shaper">Join us</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Testimonials -->
        <section class="section testimonials">
            <div class="container">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Testimonials</h2>
                    <h3 class="overlay-text">Testimonials</h3>
                </div>
                <div class="testimonial-slider-head">
                    @if (count($testimonials) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is no any testimonials avaliable yet
                            </p>
                        </center>
                    @elseif(count($testimonials) >= 1)
                        <div class="">
                            <div class="swiper testimonial-swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="single-testimonial shadow">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <div class="testimonial-content text-center">
                                                            <p style="text-align: justify">
                                                                {{ $testimonial->description }}
                                                            </p>
                                                            <div class="bottom">
                                                                <h4 style="" class="name">
                                                                    {{ $testimonial->name }}
                                                                </h4>
                                                                <span>{{ $testimonial->designation }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        @include('components.blogs_component')
        <!-- End Section Testimonials -->
        <section class="newsletter-area section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Section-title -->
                        <div class="section-title">
                            <h2 class="wow fadeInDown" data-wow-delay=".2s"
                                style="
                                visibility: visible;
                                animation-delay: 2s;
                                animation-name: fadeInDown;
                            ">
                                SHAPE THINGS UP?
                            </h2>
                            <p class="wow fadeInUp text-white" data-wow-delay=".4s"
                                style="
                                visibility: visible;
                                animation-delay: 0.4s;
                                animation-name: fadeInUp;
                                font-size: 1.2rem;
                            ">
                                Subscribe with your email to get news and updates to
                                join our events.
                            </p>
                        </div>
                        <!-- Subscribe- Email Text Box -->
                        <div class="subscribe-text wow fadeInUp" data-wow-delay=".2s"
                            style="
                            visibility: visible;
                            animation-delay: 0.2s;
                            animation-name: fadeInUp;
                        ">
                            <form class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" class="common-input"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                    required="" type="email" />
                                <div class="button">
                                    <button class="btn">Count me in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            The Origin Of Global Shapers
                            Community
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/rxrdAntMiPc?autoplay=1&mute=1">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--End Modal -->
    </div>
@endsection
@push('script')
    <script>
        const swiperIndex = new Swiper(
            ".testimonial-swiper,.hub-verticals-swiper", {
                direction: "horizontal",
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

                breakpoints: {

                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },

                    480: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },

                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            }
        );
    </script>
@endpush
