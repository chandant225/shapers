@extends('layouts.app')
@section('content')
<div>
    <!-- Why-Choose Section -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            About Us
                        </h2>
                        
                    </div>
                </div>
            </div>
            @if(!$aboutus)
            <p>There is no any aboutus data avalaible yet</p>

            @elseif($aboutus)
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="left wow fadeInLeft" data-wow-delay=".3s">
                        <img
                            src="/storage/{{$aboutus->global_shaperss_community_image}}"
                            alt=""
                        />
                        <a
                            href="{{$aboutus->video_link}}"
                            class="glightbox video"
                            ><i class="fas fa-play"></i
                        ></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div
                        class="right_pane_text wow fadeInRight mt-md-5 mt-lg-0"
                    >
                        <div class="right_pane_text_inner">
                            <div class="right_pane_text_inner_content">
                                <h3 >About Global Shapers Comunity</h3>
                                <div>
                                 {!! $aboutus->global_shaperss_community_desc !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding: 0px 105px;" class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <div class="left wow fadeInLeft" data-wow-delay=".3s">
                        <h3>About Global Shapers Kathmandu Hub</h3>
                        <hr />
                          <div>
                              {!! $aboutus->global_shapers_kathmandu_hub !!}
                          </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="right_pane_img wow fadeInRight"
                        data-wow-delay=".5s"
                    >
                        <img
                            src="/storage/{{$aboutus->global_shapers_kathmandu_image}}"
                            alt=""
                        />
                    </div>
                </div>
            </div>


              <div style="padding: 0px 105px;" >
                <h3 style="padding:5px 0px;"><strong>Our Objective</strong></h3>
                <p>{!! $aboutus->objective !!}</p>
              </div>  


            <div style="padding: 0px 105px;" class="row align-items-center mt-5">
                <div class="accordion" id="accordionExample">
                  
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                <span
                                    >Our Values</span
                                ><i class="lni lni-chevron-down"></i>
                            </button>
                        </h2>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                {!! $aboutus->values !!}
            
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                <span
                                    >Our Mission</span
                                ><i class="lni lni-chevron-down"></i>
                            </button>
                        </h2>
                        <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                {!! $aboutus->mission !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- End Why-Choose Section -->
    <!-- Scroll-Top-btn -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>
    <!-- End Scroll-Top-btn -->
</div>

@endsection
