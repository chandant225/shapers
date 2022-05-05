@extends('layouts.app')

@section('content')
 <div> 
    <section class="portfolio-section section">
        <div id="container" class="container">
            <div class="row">
                <div class="col-md-6">  
                    <h2 class="mb-2" style="color: rgb(0, 92, 156);">Awareness And Ownership of a Green City</h2>
                    <p>Awareness And Ownership of a Green City is a program designed by the Green Shapers Team of Kathmandu Hub to focus on the importance of being aware and creating sustainable solutions for environmental challenges. The week-long program is designed specifically for young students (and teachers) to explore the different concepts of climate change in a way that the students will develop a feeling of ownership for related issues. It will also help them develop creative and long-term solutions to create a better environment through various intensive thinking, interactive and practical exercises.  The curriculum has been designed to be immensely enjoyable and memorable at the same time.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1502394202744-021cfbb17454?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjZ8fG91dGRvb3J8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="img-fluid h-60" style="width:100%;height:auto;object-fit:cover">
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
                                <span class="category">{{$project->sub_title}}</span>
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


