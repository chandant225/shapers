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
                <p class="wow fadeInUp" data-wow-delay=".6s">
                  There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form.
                </p>
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
            <div class="single-team wow fadeInUp" data-wow-delay=".2s">
              <div class="image">
                <img class="w-100" src="/storage/{{$shaper->image}}" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    <a href="{{route('shaper_details',['name'=>$shaper->name])}}" class="">{{$shaper->name}}</a>
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

@endsection