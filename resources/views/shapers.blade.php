@extends('layouts.app')


@section('content')
 <div>
     <!-- Breadcrumbs Overlay -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Our Shapers</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Our Shapers</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs Overlay -->
<!-- Team section -->
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Shapers</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Meet our Shapers</h2>
                        <h3 class="gray-bg">Shapers</h3>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(count($shapers) === 0)
                   <center>
                       <p  class="text-3xl text-red-600 font-bold">There is no any shapers available yet.</p>
                   </center>
                @endif
                @foreach($shapers as $shaper)
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <img src="assets/images/team/team1.png" alt="#">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-behance-original"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-head">
                            <div class="info-box">
                                <h4 class="name"><a href="shaper.html">Dahlia Moore</a></h4>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
<!-- End Team section -->
 </div>
@endsection