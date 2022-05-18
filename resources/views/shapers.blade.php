@extends('layouts.app')


@section('content')
<div>
    <section id="team" class="team section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title align-center gray-bg">
                <span class="wow fadeInDown" data-wow-delay=".2s">Meet our Shapers</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                  Shapers
                </h2>
                <h3 class="gray-bg">Shapers</h3>
              </div>
            </div>
          </div>
         <div class="row">
           @if(count($shapers) === 0)
              <center>
                <p>There are no any shapers available.</p>
              </center>
           @elseif(count($shapers) >= 1)
           @foreach($shapers as $shaper)
           <div class="col-lg-3 col-md-6 col-12">
            <div data-bs-toggle="modal" data-bs-target="#open{{$loop->iteration}}" class="single-team wow fadeInUp" data-wow-delay=".2s">
              <div class="image">
                @if(!$shaper->image && $shaper->is_male == "0")
                <img style="height:230px" class="w-100" src="{{asset('pictures/female.jpeg')}}" alt="#" />
                @endif
                @if(!$shaper->image && $shaper->is_male == "1")
                <img style="height:230px" class="w-100" src="{{asset('pictures/male.jpeg')}}" alt="#" />
                @endif
                @if($shaper->image)
                <img style="height:230px" class="w-100" src="/storage/{{$shaper->image}}" alt="#" />
                @endif
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    <a data-bs-toggle="modal" data-bs-target="#open{{$loop->iteration}}">{{$shaper->name}}</a>
                  </h4>
                  <span class="designation">{{$shaper->designation}}</span>
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
@foreach($shapers as $shaper)
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
         " >{{$shaper->name}}</h2>
              <span style="
              padding-left: 16px;
          " class="text-primary fw-bold mt-1">{{$shaper->designation}}</span>
              <p style="
              padding: 26px 0px 0px 0px;
          " class="mt-1">{!! $shaper->description !!}</p>
              <ul style="list-style: none;padding-top: 37px;" class="social d-flex flex-row mt-2">
                @if($shaper->facebook_link)
                <li class="ms-3">
                  <a href="https://{{$shaper->facebook_link}}"
                    ><i class="lni lni-facebook-original"></i
                  ></a>
                </li>
                @endif
                @if($shaper->twitter_link)
                <li class="ms-3">
                  <a href="https://{{$shaper->twitter_link}}"
                    ><i class="lni lni-twitter-original"></i
                  ></a>
                </li>
                @endif
                @if($shaper->linkedin_link)
                <li class="ms-3">
                  <a href="https://{{$shaper->linkedin_link}}"
                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                </li>
                @endif
                @if($shaper->instagram_link)
                <li class="ms-3">
                  <a href="https://{{$shaper->instagram_link}}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </li>
                @endif
              </ul>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12">
          <div class="">
            @if(!$shaper->image && $shaper->is_male == "0")
            <img style="height:230px" class="w-100" src="{{asset('pictures/female.jpeg')}}" alt="#" />
            @endif
            @if(!$shaper->image && $shaper->is_male == "1")
            <img style="height:230px" class="w-100" src="{{asset('pictures/male.jpeg')}}" alt="#" />
            @endif
            @if($shaper->image)
            <img style="height:230px" class="w-100" src="/storage/{{$shaper->image}}" alt="#" />
            @endif
          </div>
          <ul style="list-style: none;padding-top: 37px;" class="social d-flex flex-row mt-2">
            @if($shaper->facebook_link)
            <li class="ms-3">
              <a href="https://{{$shaper->facebook_link}}"
                ><i class="lni lni-facebook-original"></i
              ></a>
            </li>
            @endif
            @if($shaper->twitter_link)
            <li class="ms-3">
              <a href="https://{{$shaper->twitter_link}}"
                ><i class="lni lni-twitter-original"></i
              ></a>
            </li>
            @endif
            @if($shaper->linkedin_link)
            <li class="ms-3">
              <a href="https://{{$shaper->linkedin_link}}"
                ><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
            </li>
            @endif
            @if($shaper->instagram_link)
            <li class="ms-3">
              <a href="https://{{$shaper->instagram_link}}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
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