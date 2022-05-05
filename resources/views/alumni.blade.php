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
                <p  class="text-3xl text-red-600 font-bold">There is no any shapers available yet.</p>
            </center>
            @endif
            <!-- @foreach($shapers as $shaper)
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                 <div class="image">
                     <img src="/storage/{{$shaper->image}}" alt="#"
                     >
                     <ul class="social">
                      <li>
                        <a href="http://{{$shaper->facebook_link}}"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="http://{{$shaper->twitter_link}}"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="http://{{$shaper->instagram_link}}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="http://{{$shaper->linkedin_link}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    </li>
                     </ul>
                 </div>
                 <div class="info-head">
                     <div class="info-box">
                         <h4 class="name">{{$shaper->name}}</h4>
                         <span class="designation">{{$shaper->designation}}</span>
                     </div>
                 </div>
             </div>
         </div>
         @endforeach -->
         <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-team wow fadeInUp" data-wow-delay=".2s">
              <div class="image">
                <img src="assets/images/team/team1.png" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    <a
                      href="javascript:"
                      data-bs-toggle="modal"
                      data-bs-target="#personSingle"
                      >Dahlia Moore</a
                    >
                  </h4>
                  <span class="designation">Senior Manager</span>
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
                    <a
                      href="javascript:"
                      data-bs-toggle="modal"
                      data-bs-target="#personSingle"
                      >Jhone digo</a
                    >
                  </h4>
                  <span class="designation">Marketing</span>
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
                    <a
                      href="javascript:"
                      data-bs-toggle="modal"
                      data-bs-target="#personSingle"
                      >Zara tingo</a
                    >
                  </h4>
                  <span class="designation">Web Developer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="single-team wow fadeInUp" data-wow-delay=".8s">
              <div class="image">
                <img src="assets/images/team/team4.png" alt="#" />
              </div>
              <div class="info-head">
                <div class="info-box">
                  <h4 class="name">
                    <a
                      href="javascript:"
                      data-bs-toggle="modal"
                      data-bs-target="#personSingle"
                      >David Zone</a
                    >
                  </h4>
                  <span class="designation">SEO Expert</span>
                </div>
              </div>
            </div>
          </div>
        </div>
         </div>
        </div>
      </section>
</div>
<div
      class="modal fade"
      id="personSingle"
      tabindex="-1"
      aria-labelledby="personSingleLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
      >
        <div class="modal-content">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
          <div class="modal-body">
            <section class="team-details">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="content">
                      <h3 class="name">Hilixer D. Dambo</h3>
                      <span class="position">Founder</span>
                      <p class="des">
                        Product services are professional services that help
                        market or advertise your business online. Best way to
                        manage and share work resources.
                      </p>
                      <ul class="social">
                        <li>
                          <a href="#"
                            ><i class="lni lni-facebook-original"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="lni lni-twitter-original"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"
                            ><i class="lni lni-behance-original"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"><i class="lni lni-youtube"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="image">
                      <img src="assets/images/team/team-details.jpg" alt="#" />
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
@endsection