@extends('layouts.app')
@section('content')
     <!-- Endowment section -->
    <section id="team" class="team section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title align-center gray-bg">
              
              <h2 class="wow fadeInUp" data-wow-delay=".4s">
                Endowment fund
              </h2>
             
              <p class="wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.1rem">
                Global Shapers Kathmandu Hub Endowment Fund was launched to empower Nepali youth to successfully scale up projects that deliver change in our community. The grant based fund is utilized based on Hub Charter Financial procedures and we maintain full transparency by providing funding partners with quarterly and annual action reports.
              </p>
            </div>
          </div>
        </div>
        <div class="title_buttons d-flex flex-column flex-md-row justify-content-between">
          <h4 class="mt-5 mt-md-2 mb-2 order-2 order-md-1">Fund Contributors:</h4>
          <div class="endowment_buttons button d-flex gap-2 mt-3 mt-md-0 order-md-1">
              <a href="mailto:globalshapersktm@gmail.com" class="btn">
                Become a Partner
              </a>
              <a href="mailto:globalshapersktm@gmail.com" class="btn">
                Become a Contributor
              </a>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-team wow fadeInUp" data-wow-delay=".2s">
              <div class="image">
                <img src="assets/images/team/team1.png" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    Shivanth Pande / NIBL Capital
                  </h4>
                  {{-- <span class="designation">Senior Manager</span> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-team wow fadeInUp" data-wow-delay=".4s">
              <div class="image">
                <img src="assets/images/team/team2.png" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    Lokesh Todi
                  </h4>
                  {{-- <span class="designation">Markeitng</span> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-team wow fadeInUp" data-wow-delay=".6s">
              <div class="image">
                <img src="assets/images/team/team3.png" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                   Sneh Rajbhandari
                  </h4>
                  {{-- <span class="designation">Web Developer</span> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Endowment section -->
@endsection
