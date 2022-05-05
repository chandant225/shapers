@extends('layouts.app')


@section('content')
  <div>
    <section id="contact-us" class="contact-us section">
        <div class="container">
          <div class="contact-head">
            <div class="inner-content">
              <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                  <div class="form-main">
                    <h3 class="inner-title left">Contact Form</h3>
                    <form
                      class="form"
                      method="post"
                      action="{{route('contact_add')}}"
                    >
                    @csrf 
                    @if(Session::has('error'))
                     <div>
                       {{Session::get('error')}}
                     </div>
                    @endif

                    @if(Session::has('success'))
                    <div>
                      {{Session::get('success')}}
                    </div>
                    @endif
                      <div class="row">
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <input
                              name="name"
                              type="text"
                              placeholder="Your Name"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <input
                              name="subject"
                              type="text"
                              placeholder="Your Subject"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <input
                              name="email"
                              type="email"
                              placeholder="Your Email"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <input
                              name="phone"
                              type="text"
                              placeholder="Your Phone"
                              required="required"
                            />
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group message">
                            <textarea
                              name="message"
                              placeholder="Your Message"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group button">
                            <button type="submit" class="btn">
                              Submit Message
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-4 col-12">
                  <div class="contact-info">
                    <div class="single-head">
                      <h3 class="inner-title">Contact Info</h3>
                      <div class="single-info">
                        <i class="fas fa-map-marker"></i>
                        <ul>
                          <span>Location</span>
                          <li>Kathmandu, Nepal</li>
                        </ul>
                      </div>
                      <div class="single-info">
                        <i class="fas fa-phone"></i>
                        <ul>
                          <span>Call Us</span>
                          <li><a href="#">+977 987456321</a></li>
                          <li><a href="#">+977 123654789</a></li>
                        </ul>
                      </div>
                      <div class="single-info">
                        <i class="fas fa-envelope"></i>
                        <ul>
                          <span>Mail Us</span>
                          <li>
                            <a href=""
                              ><span class="__cf_email__"
                                >info@website.com</span
                              ></a
                            >
                          </li>
                          <li>
                            <a href=""
                              ><span class="__cf_email__"
                                >contact@domain.com</span
                              ></a
                            >
                          </li>
                        </ul>
                      </div>
                      <div class="single-info">
                        <i class="fas fa-clock"></i>
                        <ul>
                          <span>Office Hour</span>
                          <li>Monday - Friday (9.00-19.00)</li>
                          <li>Sunday - Thusday (10.00-06.00)</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact-Us -->
      <div class="responsive-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14133.9747660901!2d85.34460184999999!3d27.67113235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1645353460998!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
  </div>
@endsection