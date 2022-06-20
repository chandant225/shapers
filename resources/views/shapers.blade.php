@extends('layouts.app')


@section('content')
    <div>
        <section id="team" class="team section">
            <div style="margin-top:24px" class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title align-center gray-bg">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Shapers
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (count($shapers) === 0)
                        <center>
                            <p>There are no any shapers available.</p>
                        </center>
                    @elseif(count($shapers) >= 1)
                        @foreach ($shapers as $shaper)
                            <div style="cursor:pointer" class="col-lg-3 col-md-6 col-12  rounded-2xl">
                                <div data-bs-toggle="modal" data-bs-target="#open{{ $loop->iteration }}"
                                    class="single-team wow fadeInUp w-100" data-wow-delay=".2s">
                                    <div class="image">
                                        @if (!$shaper->image && $shaper->is_male == '0')
                                            <img style="object-fit:cover;object-position: 100% 0;" class="img-fluid"
                                                src="{{ asset('pictures/female.jpeg') }}" alt="#" />
                                        @endif
                                        @if (!$shaper->image && $shaper->is_male == '1')
                                            <img style="object-fit:cover;object-position: 100% 0;" class="img-fluid"
                                                src="{{ asset('pictures/male.jpeg') }}" alt="#" />
                                        @endif
                                        @if ($shaper->image)
                                            <img style="height:300px;object-fit:cover;object-position: 100% 0;"
                                                class="img-fluid w-100" src="/storage/{{ $shaper->image }}"
                                                alt="#" />
                                        @endif
                                    </div>
                                    <div class="info-head">
                                        <div class="info-box">
                                            <h4 class="name text-center" style="height: 3.75rem">
                                                <a data-bs-toggle="modal"
                                                    data-bs-target="#open{{ $loop->iteration }}">{{ $shaper->name }}</a>
                                            </h4>
                                            <ul style="list-style: none;margin-left: -44px;"
                                                class="social d-flex justify-content-center mt-2">
                                                @if ($shaper->facebook_link)
                                                    <li class="ms-3">
                                                        <a href="{{ $shaper->facebook_link }}" target="blanc"><i
                                                                class="lni lni-facebook-original"></i></a>
                                                    </li>
                                                @endif
                                                @if ($shaper->twitter_link)
                                                    <li class="ms-3">
                                                        <a href="{{ $shaper->twitter_link }}" target="blanc"><i
                                                                class="lni lni-twitter-original"></i></a>
                                                    </li>
                                                @endif
                                                @if ($shaper->linkedin_link)
                                                    <li class="ms-3">
                                                        <a href="{{ $shaper->linkedin_link }}" target="blanc"><i
                                                                class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                                    </li>
                                                @endif
                                                @if ($shaper->instagram_link)
                                                    <li class="ms-3">
                                                        <a href="{{ $shaper->instagram_link }}" target="blanc"><i
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
    @foreach ($shapers as $shaper)
        <div class="modal fade" id="open{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{-- <div class="modal-header"> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    {{-- </div> --}}
                    <div class="py-md-5 shaper-modal">
                        <div>
                            <div class="text-center">
                                <h2>
                                    {{ $shaper->name }}</h2>
                                    <div class="d-flex flex-column align-items-center d-md-none">
                            <div class="">
                                @if (!$shaper->image && $shaper->is_male == '0')
                                    <img class="img-fluid" src="{{ asset('pictures/female.jpeg') }}"
                                        alt="#" />
                                @endif
                                @if (!$shaper->image && $shaper->is_male == '1')
                                    <img class="img-fluid" src="{{ asset('pictures/male.jpeg') }}"
                                        alt="#" />
                                @endif
                                @if ($shaper->image)
                                    <img class="img-fluid" src="/storage/{{ $shaper->image }}"
                                        alt="#" />
                                @endif
                            </div>
                            <ul style="list-style: none;" class="social d-flex flex-row mt-2 p-0">
                                @if ($shaper->facebook_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->facebook_link }}"><i
                                                class="lni lni-facebook-original"></i></a>
                                    </li>
                                @endif
                                @if ($shaper->twitter_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->twitter_link }}"><i
                                                class="lni lni-twitter-original"></i></a>
                                    </li>
                                @endif
                                @if ($shaper->linkedin_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->linkedin_link }}"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if ($shaper->instagram_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->instagram_link }}"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                                <p style="padding: 26px 0px 0px 0px;"
                                    class="mt-1 text-center">
                                    {!! $shaper->description !!}
                                </p>
                                <p class="mt-2"><strong>Joined
                                        at:</strong>{{ ' ' . $shaper->joined_at }}</p>
                            </div>
                        </div>
                        <div class=" d-none d-md-flex flex-column align-items-center">
                            <div class="">
                                @if (!$shaper->image && $shaper->is_male == '0')
                                    <img class="img-fluid" src="{{ asset('pictures/female.jpeg') }}"
                                        alt="#" />
                                @endif
                                @if (!$shaper->image && $shaper->is_male == '1')
                                    <img class="img-fluid" src="{{ asset('pictures/male.jpeg') }}"
                                        alt="#" />
                                @endif
                                @if ($shaper->image)
                                    <img class="img-fluid" src="/storage/{{ $shaper->image }}"
                                        alt="#" />
                                @endif
                            </div>
                            <ul style="list-style: none;" class="social d-flex flex-row mt-2 p-0">
                                @if ($shaper->facebook_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->facebook_link }}"><i
                                                class="lni lni-facebook-original"></i></a>
                                    </li>
                                @endif
                                @if ($shaper->twitter_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->twitter_link }}"><i
                                                class="lni lni-twitter-original"></i></a>
                                    </li>
                                @endif
                                @if ($shaper->linkedin_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->linkedin_link }}"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if ($shaper->instagram_link)
                                    <li class="ms-3">
                                        <a href="{{ $shaper->instagram_link }}"><i class="fab fa-instagram"
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
