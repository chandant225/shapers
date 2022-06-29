<footer class="footer">
    <!-- footer-middle -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="single-footer sm-custom-border f-link">
                        <div class="f-about single-footer">
                            <div class="logo">
                                <a href="/"
                                    ><img src={{
                                        asset("pictures/Logo-Inverted.svg")
                                    }}
                                    alt="Logo" /></a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="single-footer sm-custom-border f-link">
                        <ul>
                            <li>
                                <a href="{{ route('about') }}"
                                    ><span>About Us</span></a
                                >
                            </li>
                            <li>
                                <a href="{{ route('alumni') }}"
                                    ><span>Our Alumni</span></a
                                >
                            </li>
                            <li>
                                <a href="{{ route('shaper') }}"
                                    ><span>Our Shapers</span></a
                                >
                            </li>
                            <li>
                                <a href="{{ route('projects') }}"
                                    ><span>Projects</span></a
                                >
                            </li>
                            <li>
                                <a href="{{ route('contact') }}"
                                    ><span>Contact US</span></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-footer sm-custom-border f-link">
                        <h3>Join Us</h3>
                        <div class="d-flex flex-column">
                            <a href="/become_a_shaper" class="text-white my-1"
                                >Become a Shaper</a
                            >
                            <a href="/become_a_partner" class="text-white my-1"
                                >Become a Partner</a
                            >
                            <a
                                href="mailto:globalshapersktm@gmail.com"
                                class="text-white my-1"
                                >Become a Contributor
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div
                        class="single-footer md-custom-border sm-custom-border f-link"
                    >
                        <h3>Follow Us</h3>
                        <div class="footer-social">
                            @if (!$social_links)
                            <p>No social links are available yet</p>
                            @elseif($social_links)
                            <ul class="text-xl">
                                @if ($social_links->facebook_link)
                                <li>
                                    <a
                                        href="https://{{ $social_links->facebook_link }}"
                                        ><i
                                            class="fab fa-facebook-square"
                                            target="blanc"
                                        ></i
                                    ></a>
                                </li>
                                @endif @if ($social_links->twitter_link)
                                <li>
                                    <a
                                        href="https://{{ $social_links->twitter_link }}"
                                        ><i
                                            class="fab fa-twitter-square"
                                            target="blanc"
                                        ></i
                                    ></a>
                                </li>
                                @endif @if ($social_links->linkedin_link)
                                <li>
                                    <a
                                        href="https://{{ $social_links->linkedin_link }}"
                                        ><i
                                            class="fab fa-linkedin"
                                            target="blanc"
                                        ></i
                                    ></a>
                                </li>
                                @endif @if ($social_links->gmail_link)
                                <li>
                                    <a
                                        href="https://{{ $social_links->gmail_link }}"
                                        ><i
                                            class="fab fa-google"
                                            target="blanc"
                                        ></i
                                    ></a>
                                </li>
                                @endif @if ($social_links->youtube_link)
                                <li>
                                    <a
                                        href="https://{{ $social_links->youtube_link }}"
                                        ><i
                                            class="fab fa-youtube"
                                            target="blanc"
                                        ></i
                                    ></a>
                                </li>
                                @endif @if ($social_links->insta_link)
                                <li>
                                    <a
                                        href="https://{{ $social_links->insta_link }}"
                                        ><i
                                            class="fab fa-instagram"
                                            target="blanc"
                                        ></i
                                    ></a>
                                </li>
                                @endif
                            </ul>
                            @endif
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

<nav id="mmenu" class="d-lg-none">
    <ul>
        <li>
            <a href="/">Home </a>
        </li>
        <li>
            <span> About </span>
            <ul>
                <li>
                    <a href="/about">About Us</a>
                </li>
                <li>
                    <a href="/shaper">Shapers</a>
                </li>
                <li>
                    <a href="/alumni">Alumni</a>
                </li>
                {{--
                <li>
                    <a href="/"> Shapers Learning and Social Engagements</a>
                </li>
                --}}
            </ul>
        </li>
        <li>
            <a href="/projects" id="navbarDropdown">Projects </a>
        </li>
        <li>
            <a href="/blogs">News </a>
        </li>
        <li>
            <a href="/endowment_fund"> Endowment Fund </a>
        </li>
        <li>
            <a href="{{ route('contact') }}">Contact Us</a>
        </li>
        <li>
            <a href="/become_a_shaper">
                <span> Join Us </span>
            </a>
        </li>
    </ul>
</nav>
