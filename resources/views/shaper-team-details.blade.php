@extends('layouts.app')


@section('content')
<div>
 <div class="container">
  
     <div class="row mt-5 py-5">
        <div class="mt-5">
            <a class="text-white px-2 rounded" style="background-color:rgb(0, 92, 156); outline:none" href="/shaper">Go Back</a>
       </div>
         <div class="col-lg-6 col-sm-12 mt-2">
             <div class="">
             <h2>{{$shaper->name}}</h2>
              <span class="text-primary fw-bold mt-1">{{$shaper->designation}}</span>
              <p class="mt-1">{!! $shaper->description !!}</p>
              <ul style="list-style: none" class="social d-flex flex-row mt-2">
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
            <img src="/storage/{{$shaper->image}}" alt="" class="w-100 rounded" />
        </div>
     </div>
 </div>
</div>

@endsection