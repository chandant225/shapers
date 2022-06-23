@extends('layouts.app')
@push('styles')
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        /* .swiper-slide img {
                                                                                                    display: block;
                                                                                                    width: 100%;
                                                                                                    height: 400px;
                                                                                                    object-fit: cover;
                                                                                                  } */

        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 80%;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 80px;
            opacity: 0.4;
            cursor: pointer;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <!-- Portfolio-Details Section -->
    <div class="portfolio-details section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <h2>
                        {{ $project_details->title }}
                    </h2>
                    <p
                        style="
                        margin-top: 30px;
                        text-align: justify;
                    ">
                        {!! $project_details->top_description !!}
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    {{-- <div class="thumb">
                            <img style="height:54vh" src="/storage/{{$project_details->image}}" alt=" {{$project_details->title}}" class="img-fluid">
                            </div> --}}
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @if ($project_galleries)
                                @foreach ($project_galleries as $pic)
                                    <div class="swiper-slide">
                                        <img src="/project_gallery/{{ $pic->filename }}" />
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @if ($project_galleries)
                                @foreach ($project_galleries as $pic)
                                    <div class="swiper-slide">
                                        <img src="/project_gallery/{{ $pic->filename }}" />
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="content">
                    <div class="row">
                        @if ($impacts->isNotEmpty())
                            <h3 class="py-4">Projects</h3>
                            @foreach ($impacts as $impact)
                                <div class="col-md-4 shadow-sm">
                                    <a href="{{ route('single_impact', ['slug' => $impact->slug]) }}"><img
                                            src="/storage/{{ $impact->image }}" alt="" class="img-fluid"></a>
                                    <a style="text-decoration:none"
                                        href="{{ route('single_impact', ['slug' => $impact->slug]) }}">
                                        <h3 class="mt-2 py-2">{{ $impact->title }}</h3>
                                    </a>
                                    <p><i class="fas fa-alarm-clock"></i>{{ $impact->status }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div>
                        {!! $project_details->bottom_description !!}
                    </div>
                    <div class="share">
                        <span>Share This</span>
                        <ul class="social">
                            <li>
                                <a href="http://"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="http://"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="http://"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="http://"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Portfolio-Details Section -->
@endsection
@push('script')
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 5,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endpush
