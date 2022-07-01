@extends('layouts.app')

@section('content')
    <div>
        <!-- Portfolio-Details Section -->
        <div class="portfolio-details section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <h2>
                            {{ $impact_details->title }}
                        </h2>
                        <p
                            style="
                    margin-top: 30px;
                    text-align: justify;
                ">
                            {!! $impact_details->top_description !!}
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="thumb">
                            <img src="/storage/{{ $impact_details->image }}" alt="#"
                                class="img-fluid">
                        </div>
                        <div class="pf-details-sidebar">
                            <h4>Project Info</h4>
                            <ul>
                                <li><span>Project By : </span><a href="#">{{ $impact_details->project_by }}</a></li>
                                <li><span>Date : </span>{{ $impact_details->date }}</li>
                                <li><span>Location : </span>
                                    {{ $impact_details->location }}
                                </li>
                            </ul>
                        </div>

                    </div>
                    {{-- <div class="col-lg-6 col-md-12 col-12">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                @if ($impact_galleries)
                                    @foreach ($impact_galleries as $pic)
                                        <div class="swiper-slide">
                                            <img src="/impact_gallery/{{ $pic->filename }}" />
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @if ($impact_galleries)
                                    @foreach ($impact_galleries as $pic)
                                        <div class="swiper-slide">
                                            <img src="/impact_gallery/{{ $pic->filename }}" />
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div> --}}
                    <div class="row mt-3">
                        @if ($impact_galleries)
                            @foreach ($impact_galleries as $pic)
                                <div class="col-lg-3 mt-3">
                                    <img class="w-100" src="/impact_gallery/{{ $pic->filename }}" />
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-12 mt-5">
                        {!! $impact_details->bottom_description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
