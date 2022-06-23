@extends('layouts.app') @section('content')
    <div class="container">
        <section class="portfolio-section section">
            <div id="container" class="container">
                {{-- <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-2" style="color: rgb(0, 92, 156)">
                        {{ $project_description->title }}
                    </h2>
                    <p style="margin-top: 28px; text-align: justify">
                        {!! $project_description->description !!}
                    </p>
                </div>
                <div class="col-md-6">
                    <img
                        src="/storage/{{ $project_description->image }}"
                        alt=""
                        class="img-fluid"
                        style="width: 100%; height: 54vh; object-fit: cover"
                    />
                </div>
            </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title align-center gray-bg">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                HUB PROJECTS
                            </h2>
                        </div>
                        <div class="ktm-hub-projects">
                            <p class="my-2" style="font-size:1.1rem">
                                At the Global Shapers Community’s 10 Year
                                Anniversary in 2021, our global community determined
                                six impact areas to focus on for our various
                                endeavours, with the acronym I-SHAPE. Our hub has
                                engaged in Inclusion, Skills, Health, Aid and Planet
                                related projects to date.
                            </p>
                            <p class="my-2">
                                <b>To learn about projects that fall under these
                                    impact areas, please click on the icons
                                    below.</b>
                            </p>
                            <div class="impact-cards">
                                @if ($ishapes)
                                    @foreach ($ishapes as $ishape)
                                        <a href="{{ $ishape->link }}" class="impact-card">
                                            <div class="impact-icon">
                                                <img src="/storage/{{ $ishape->image }}" alt="" />
                                            </div>
                                            <div class="impact-text">
                                                <h5>{{ $ishape->title }}</h5>
                                                {{-- <p>Create inclusive communities</p> --}}
                                            </div>
                                            <div class="impact-card-overlay"
                                                style="background-image: url('/storage/{{ $ishape->image }}')">
                                                <div class="impact-overlay-text">
                                                    <h5>{{ $ishape->title }}</h5>
                                                    <p><strong>{{ $ishape->header }}</strong>
                                                        {{ $ishape->description }}
                                                    <p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="partners my-5">
                            <div class="section-title align-center gray-bg">
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    OUR PARTNERS
                                </h2>
                            </div>
                            {{-- <p class="my-2 text-center">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Vero numquam error mollitia minima. Dolore
                            cumque excepturi perspiciatis porro consectetur vel
                            ipsam fugit consequuntur impedit at!
                        </p> --}}
                            <div class="impact-partners-cards">
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/index.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/2.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/3.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/4.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/5.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/6.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/7.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                                <a href="#" class="impact-partner">
                                    <img src="{{ asset('assets/shapersPartners/8.jpeg') }}" alt="" />
                                    {{-- <h5>John Doe</h5> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-title align-center gray-bg my-5">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">IMPACTS</h2>
                </div>
                <div class="row grid">
                    @if (count($projects) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There are not any projects avaliable yet.
                            </p>
                        </center>
                    @elseif(count($projects) >= 1)
                        @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-4 grid-item mental-health-portfolio">
                                <div class="portfolio-item-wrapper">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single_project', ['slug' => $project->slug]) }}"><img
                                                src="/storage/{{ $project->image }}" alt="#"
                                                class="projectImage" /></a>
                                    </div>
                                    <div class="portfolio-overlay">
                                        <div class="pf-content">
                                            {{-- <span class="category">{{
                                    $project->sub_title }}</span> --}}
                                            <h4>
                                                <a
                                                    href="{{ route('single_project', ['slug' => $project->slug]) }}">{{ $project->title }}</a>
                                            </h4>
                                            <span class="location">
                                                <i class="lni lni-alarm-clock"></i>{{ $project->status }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif @if ($past_projects)
                            @foreach ($past_projects as $project)
                                <div class="col-lg-4 col-md-4 grid-item mental-health-portfolio">
                                    <div class="portfolio-item-wrapper">
                                        <div class="portfolio-img">
                                            <a href="{{ route('single_project', ['slug' => $project->slug]) }}"><img
                                                    src="/storage/{{ $project->image }}" alt="#"
                                                    class="projectImage" /></a>
                                        </div>
                                        <div class="portfolio-overlay">
                                            <div class="pf-content">
                                                <span class="category">{{ $project->sub_title }}</span>
                                                <h4>
                                                    <a
                                                        href="{{ route('single_project', ['slug' => $project->slug]) }}">{{ $project->title }}</a>
                                                </h4>
                                                <span class="location">
                                                    <i class="lni lni-alarm-clock"></i>{{ $project->status }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                </div>
                {{-- <center>
                {{ $projects->links() }}
            </center> --}}
            </div>
        </section>
    </div>
@endsection
