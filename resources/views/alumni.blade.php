@extends('layouts.app')


@section('content')
<div>
    <section id="team" class="team section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title align-center gray-bg">
                <span class="wow fadeInDown" data-wow-delay=".2s">Meet our Alumuni</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                  Alumuni
                </h2>
                <h3 class="gray-bg">Alumuni</h3>
              </div>
            </div>
          </div>
         <div class="row">
           @if(count($alumunis) === 0)
              <center>
                <p>There are no any alumunis available.</p>
              </center>
           @elseif(count($alumunis) >= 1)
           @foreach($alumunis as $alumuni)
           <div class="col-lg-3 col-md-6 col-12">
            <div class="single-team wow fadeInUp" data-wow-delay=".2s">
              <div class="image">
                <img style="height:230px" class="w-100" src="/storage/{{$alumuni->image}}" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    <a data-bs-toggle="modal" data-bs-target="#open{{$loop->iteration}}">{{$alumuni->name}}</a>
                  </h4>
                  <span class="designation">{{$alumuni->designation}}</span>
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

@foreach($alumunis as $alumuni)
<div class="modal fade" id="open{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      {{-- <div class="modal-header"> --}}
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      {{-- </div> --}}
      <div class="row mt-5 py-5">
         <div class="col-lg-6 col-sm-12 mt-2">
             <div class="">
             <h2 style="
             margin-top: -125px;
             padding-left: 0px;
         ">{{$alumuni->name}}</h2>
              <span style="
              padding-left: 16px;
          " class="text-primary fw-bold mt-1">{{$alumuni->designation}}</span>
              <p style="
              padding: 26px 0px 0px 0px;
          " class="mt-1">{!! $alumuni->description !!}</p>
              <ul style="list-style: none;padding-top: 37px;" class="social d-flex flex-row mt-2">
                @if($alumuni->facebook_link)
                <li class="ms-3">
                  <a href="https://{{$alumuni->facebook_link}}"
                    ><i class="lni lni-facebook-original"></i
                  ></a>
                </li>
                @endif
                @if($alumuni->twitter_link)
                <li class="ms-3">
                  <a href="https://{{$alumuni->twitter_link}}"
                    ><i class="lni lni-twitter-original"></i
                  ></a>
                </li>
                @endif
                @if($alumuni->linkedin_link)
                <li class="ms-3">
                  <a href="https://{{$alumuni->linkedin_link}}"
                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                </li>
                @endif
                @if($alumuni->instagram_link)
                <li class="ms-3">
                  <a href="https://{{$alumuni->instagram_link}}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </li>
                @endif
              </ul>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12">
            <img src="/storage/{{$alumuni->image}}" alt="" class="w-100 rounded" />
        </div>
     </div>
    
    </div>
  </div>
</div>
@endforeach





@endsection