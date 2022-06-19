@extends('layouts.app')

@section('content')
 <div> 
    <section class="portfolio-section section">
        <div id="container" class="container">
            <div class="row">
                <div class="col-md-6">  
                    <h2 class="mb-2" style="color: rgb(0, 92, 156);">{{$project_description->title}}</h2>
                    <p style="
                    margin-top: 28px;
                ">{!! $project_description->description !!}</p>
                </div>
                <div class="col-md-6">
                    <img src="/storage/{{$project_description->image}}" alt="" class="img-fluid" style="width:100%;    height:54vh;object-fit:cover">
                </div>
            </div>
            <span class="total-projects">Projects</span>
            <div class="row grid">
                @if(count($projects) === 0)
                <center>
                    <p class="text-2xl text-red-600 font-bold">There are not any projects avaliable yet.</p>
                </center>
                @elseif(count($projects) >= 1)
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-4 grid-item mental-health-portfolio">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <a href="{{route('single_project',['slug' => $project->slug])}}"><img src="/storage/{{$project->image}}" alt="#" class="projectImage"></a>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="pf-content">
                                {{-- <span class="category">{{$project->sub_title}}</span> --}}
                                <h4><a href="{{route('single_project',['slug' => $project->slug])}}">{{$project->title}}</a></h4>
                                <span class="location">
                                    <i class="lni lni-alarm-clock"></i>{{$project->status}}
                                </span>
                            </div> 
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
         <center>
             {{$projects->links()}}
         </center>
        </div>
    </section>
<!-- End Portfolio-Section -->

 </div>
@endsection


