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
                <p class="wow fadeInUp" data-wow-delay=".6s">
                  There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form.
                </p>
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
                <img class="w-100" src="/storage/{{$alumuni->image}}" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    <a href="{{route('alumuni_details',['name'=>$alumuni->name])}}" class="">{{$alumuni->name}}</a>
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

@endsection