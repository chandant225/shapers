@extends('layouts.app')


@section('content')
    <div>
        <section id="team" class="team section">
            <div style="margin-top:24px" class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title align-center gray-bg">

                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Alumuni
                            </h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (count($alumunis) === 0)
                        <center>
                            <p>There are no any alumunis available.</p>
                        </center>
                    @elseif(count($alumunis) >= 1)
                        @foreach ($alumunis as $alumuni)
                            <div class="col-lg-3 col-md-6 col-12 rounded-2xl">
                                <div data-bs-toggle="modal" data-bs-target="#open{{ $loop->iteration }}"
                                    class="single-team wow fadeInUp" data-wow-delay=".2s" style="cursor:pointer">
                                    <div class="image">
                                        @if (!$alumuni->image && $alumuni->is_male == '0')
                                            <img style="" class="img-fluid"
                                                src="{{ asset('pictures/female.jpeg') }}" alt="#" />
                                        @endif
                                        @if (!$alumuni->image && $alumuni->is_male == '1')
                                            <img style="" class="img-fluid"
                                                src="{{ asset('pictures/male.jpeg') }}" alt="#" />
                                        @endif
                                        @if ($alumuni->image)
                                            <img style="" class="img-fluid"
                                                src="/storage/{{ $alumuni->image }}" alt="#" />
                                        @endif
                                    </div>
                                    <div class="info-head">
                                        <div class="info-box">
                                            <h4 class="name">
                                                <a data-bs-toggle="modal"
                                                    data-bs-target="#open{{ $loop->iteration }}">{{ $alumuni->name }}</a>
                                            </h4>
                                            <ul style="list-style: none;margin-bottom:0;padding:0"
                                                class="social d-flex justify-content-center mt-2">
                                                @if ($alumuni->facebook_link)
                                                    <li class="ms-3">
                                                        <a href="https://{{ $alumuni->facebook_link }}" target="blanc"><i
                                                                class="lni lni-facebook-original"></i></a>
                                                    </li>
                                                @endif
                                                @if ($alumuni->twitter_link)
                                                    <li class="ms-3">
                                                        <a href="https://{{ $alumuni->twitter_link }}" target="blanc"><i
                                                                class="lni lni-twitter-original"></i></a>
                                                    </li>
                                                @endif
                                                @if ($alumuni->linkedin_link)
                                                    <li class="ms-3">
                                                        <a href="https://{{ $alumuni->linkedin_link }}" target="blanc"><i
                                                                class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                                    </li>
                                                @endif
                                                @if ($alumuni->instagram_link)
                                                    <li class="ms-3">
                                                        <a href="https://{{ $alumuni->instagram_link }}" target="blanc"><i
                                                                class="fab fa-instagram" aria-hidden="true"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
    </div>
    </section>
    </div>

    @foreach ($alumunis as $alumuni)
        <div class="modal fade" id="open{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{-- <div class="modal-header"> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    {{-- </div> --}}
                    <div class="py-md-5 shaper-modal">
                        <div class="">
                            <div class="text-center">
                                <h2>
                                    {{ $alumuni->name }}</h2>
                                <p style="
                          padding: 26px 0px 0px 0px;
                      "
                                    class="mt-1">{!! $alumuni->description !!}</p>
                                <p class="mt-2 text-center"><strong>Joined
                                        at:</strong>{{ ' ' . $alumuni->joined_at }}</p>
                            </div>
                        </div>
                        <div class="">
                            
                                @if (!$alumuni->image && $alumuni->is_male == '0')
                                    <img class="img-fluid" src="{{ asset('pictures/female.jpeg') }}"
                                        alt="#" />
                                @endif
                                @if (!$alumuni->image && $alumuni->is_male == '1')
                                    <img class="img-fluid" src="{{ asset('pictures/male.jpeg') }}"
                                        alt="#" />
                                @endif
                                @if ($alumuni->image)
                                    <img class="img-fluid" src="/storage/{{ $alumuni->image }}"
                                        alt="#" />
                                @endif
                            
                            <ul style="list-style: none;padding-top: 37px;" class="social d-flex flex-row mt-2">
                                @if ($alumuni->facebook_link)
                                    <li class="ms-3">
                                        <a href="https://{{ $alumuni->facebook_link }}"><i
                                                class="lni lni-facebook-original" target="blanc"></i></a>
                                    </li>
                                @endif
                                @if ($alumuni->twitter_link)
                                    <li class="ms-3">
                                        <a href="https://{{ $alumuni->twitter_link }}"><i
                                                class="lni lni-twitter-original" target="blanc"></i></a>
                                    </li>
                                @endif
                                @if ($alumuni->linkedin_link)
                                    <li class="ms-3">
                                        <a href="https://{{ $alumuni->linkedin_link }}" target="blanc"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if ($alumuni->instagram_link)
                                    <li class="ms-3">
                                        <a href="https://{{ $alumuni->instagram_link }}" target="blanc"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach





@endsection
