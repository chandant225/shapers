@extends('layouts.app')


@section('content')
<div>
    <!-- Portfolio-Section -->
    <section class="portfolio-section section">
        <div id="container" class="container">
            <span class="total-projects">Past Projects</span>
            <div class="row grid">
                @if (count($projects) === 0)
                    <center>
                        <p>There are no any past projects available yet</p>
                    </center>
                @elseif(count($projects) >= 1)
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-4 grid-item mental-health-portfolio">
                            <div class="portfolio-item-wrapper">
                                <div class="portfolio-img">
                                    <a href="#"><img style="width:100vw; object-fit:cover" class=""
                                            src="/storage/{{ $project->image }}" alt="#"></a>
                                </div>
                                <div class="portfolio-overlay">
                                    <div class="pf-content">
                                        <span class="category">{{ $project->sub_title }}</span>
                                        <h4><a
                                                href="{{ route('single_project', ['slug' => $project->slug]) }}">{{ $project->title }}</a>
                                        </h4>
                                        <span class="location">
                                            <i class="lni lni-map-marker"></i> Kathmandu Nepal
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

    </section>
    <!-- End Portfolio-Section -->
</div>
@endsection
