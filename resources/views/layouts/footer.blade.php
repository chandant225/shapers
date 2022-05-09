<footer class="footer">
    <!-- footer-middle -->
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-12">
            <div class="single-footer sm-custom-border f-link">
              <div class="f-about single-footer">
                <div class="logo">
                  <a href="/"><img src={{asset('pictures/Logo-Inverted.svg')}} alt="Logo"/></a>
                </div>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in some
                  form, by injected humour, or randomised words which don't
                  look even slightly believable.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="single-footer sm-custom-border f-link">
              <ul>
           
                <li>
                  <a href="{{route('about')}}"><span>About Us</span></a>
                </li>
                <li>
                  <a href="{{route('alumni')}}"><span>Our Alumni</span></a>
                </li>
                <li>
                  <a href="{{route('shaper')}}"><span>Our Shapers</span></a>
                </li>
                <li>
                  <a href="{{route('projects')}}"><span>Projects</span></a>
                </li>
                <li>
                  <a href="{{route('past-projects')}}"><span>Past Projects</span></a>
                </li>
                <li>
                  <a href="{{route('contact')}}"><span>Contact US</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div
              class="single-footer md-custom-border sm-custom-border f-link"
            >
              <h3>Follow Us</h3>
              <div class="footer-social">
                <ul class="text-xl">
                  <li>
                    <a href="https://{{$social_links->facebook_link}}"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="https://{{$social_links->twitter_link}}"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://{{$social_links->linkedin_link}}"><i class="fab fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="https://{{$social_links->gmail_link}}"><i class="fab fa-google"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End footer-middle -->

    <!-- footer-bottom-->
    <div class="footer-bottom">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-12">
              <div class="left">
                <p>
                  Designed and Developed by<a
                    href="https://outofboxdesign.com/"
                    rel="nofollow"
                    target="_blank"
                    >OutofBoxDesign</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer-bottom-->
  </footer>

