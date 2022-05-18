@extends('layouts.app')

@section('content')

<div>
<!-- Portfolio-Details Section -->
<div class="portfolio-details section">
    <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <h2>
                       {{$impact_details->title}}
                    </h2>
                    <p style="
                    margin-top: 30px;
                ">
                      {!! $impact_details->top_description !!}
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="thumb">
                        <img style="height:54vh" src="/storage/{{$impact_details->image}}" alt="#" class="img-fluid">
                     </div>
                    <div class="pf-details-sidebar" style="margin-top: -2.6rem;">
                        <h4>Project Info</h4>
                        <ul>
                            <li><span>Project By : </span><a href="#">{{$impact_details->project_by}}</a></li>
                            <li><span>Date : </span>{{$impact_details->date}}</li>
                            <li><span>Location : </span>
                              {{$impact_details->location}}
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-12 mt-5">
                       {!! $impact_details->bottom_description !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection