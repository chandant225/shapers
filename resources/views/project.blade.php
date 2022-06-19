@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="portfolio-section section">
            <div id="container" class="container">
                {{-- <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-2" style="color: rgb(0, 92, 156);">{{ $project_description->title }}</h2>
                        <p
                            style="
                    margin-top: 28px;
                    text-align: justify;
                ">
                            {!! $project_description->description !!}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="/storage/{{ $project_description->image }}" alt="" class="img-fluid"
                            style="width:100%;height:54vh;object-fit:cover">
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title align-center gray-bg">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            HUB PROJECTS
                        </h2>
                    </div>
                    <div class="col-md-12">
                        <h5 class="wow fadeInUp"><u>KTM HUB PROJECTS</u></h5>
                        <p class="my-2">
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
                            <a href="#">
                                <div class="impact-card">
                                    <div class="impact-icon">
                                        <img src="{{ asset('assets/impact/1.png') }}" alt="" />
                                    </div>
                                    <div class="impact-text">
                                        <h5>I for Iclusion</h5>
                                        <p>Create inclusive communities</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="impact-card">
                                    <div class="impact-icon">
                                        <img src="{{ asset('assets/impact/2.png') }}" alt="" />
                                    </div>
                                    <div class="impact-text">
                                        <h5>I for Iclusion</h5>
                                        <p>Create inclusive communities</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="impact-card">
                                    <div class="impact-icon">
                                        <img src="{{ asset('assets/impact/3.png') }}" alt="" />
                                    </div>
                                    <div class="impact-text">
                                        <h5>I for Iclusion</h5>
                                        <p>Create inclusive communities</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="impact-card">
                                    <div class="impact-icon">
                                        <img src="{{ asset('assets/impact/4.png') }}" alt="" />
                                    </div>
                                    <div class="impact-text">
                                        <h5>I for Iclusion</h5>
                                        <p>Create inclusive communities</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="impact-card">
                                    <div class="impact-icon">
                                        <img src="{{ asset('assets/impact/5.png') }}" alt="" />
                                    </div>
                                    <div class="impact-text">
                                        <h5>I for Iclusion</h5>
                                        <p>Create inclusive communities</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="impact-card">
                                    <div class="impact-icon">
                                        <img src="{{ asset('assets/impact/6.png') }}" alt="" />
                                    </div>
                                    <div class="impact-text">
                                        <h5>I for Iclusion</h5>
                                        <p>Create inclusive communities</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="total-projects">Impacts</span>
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
    <!-- End Portfolio-Section -->
    </div>
@endsection
