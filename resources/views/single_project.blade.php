@extends('layouts.app')

@section('content')
    <!-- Portfolio-Details Section -->
    <div class="portfolio-details section">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <h2>
                         {{$project_details->title}}
                        </h2>
                        <p>
                            {!! $project_details->top_description !!}
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="thumb">
                            <img src="/storage/{{$project_details->image}}" alt=" {{$project_details->title}}" class="img-fluid">
                            </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="content">
                            <div class="row">
                                 @if($impacts->isNotEmpty())
                                <h3>Impacts</h3>
                                @foreach($impacts as $impact)
                                <div class="col-md-4 shadow-sm">
                                    <img src="/storage/{{$impact->image}}" alt="" class="img-fluid">
                                 <a style="text-decoration:none" href="{{route('single_impact',['slug' =>$impact->slug])}}"><h3 class="mt-2">{{$impact->title}}</h3></a>
                                    <p><i class="fas fa-alarm-clock"></i>{{$impact->status}}</p>
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
