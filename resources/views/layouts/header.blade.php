<header class="header" id="header">
    <div class="header-inner sticky top-0">
        <div style="padding: 12px 0px" class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand d-flex align-items-center col-3" href="/">
                            <img class="" src={{ asset('pictures/Logo.svg') }} alt="Logo" />
                            <h6 style="font-size: 20px; margin-left: 10px">
                                Global Shapers <br />Kathmandu Hub
                            </h6>
                        </a>

                        <a href="#mmenu" style="margin-right: 1.8rem" class="d-lg-none">
                            <i class="fas fa-bars"></i>
                        </a>

                        <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0" id="navbar-nav">
                                <li class="nav-item">
                                    <a style="color:{{ Route::currentRouteName() === 'home' ? 'rgb(0, 92, 156)' : '' }}"
                                        class="nav-link" href="/" id="navbarDropdown" role="button"
                                        aria-expanded="false">Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a style="color:{{ Route::currentRouteName() === 'about' ? 'rgb(0, 92, 156)' : '' }}"
                                        class="nav-link dropdown-toggle" href="/about" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a style="color:{{ Route::currentRouteName() === 'about' ? 'rgb(0, 92, 156)' : '' }}"
                                                class="dropdown-item" href="/about">About Us</a>
                                        </li>
                                        <li>
                                            <a style="color:{{ Route::currentRouteName() === 'shapers' ? 'rgb(0, 92, 156)' : '' }}"
                                                class="dropdown-item" href="/shapers">Shapers</a>
                                        </li>
                                        <li>
                                            <a style="color:{{ Route::currentRouteName() === 'alumni' ? 'rgb(0, 92, 156)' : '' }}"
                                                class="dropdown-item" href="/alumni">Alumni</a>
                                        </li>

                                        {{-- <li>
                                            <a class="dropdown-item" href="/">
                                                Shapers Learning and
                                                <br />Social Engagements</a
                                            >
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a style="color:{{ Route::currentRouteName() === 'projects' ? 'rgb(0, 92, 156)' : '' }}"
                                        class="nav-link" href="/projects" id="navbarDropdown" role="button"
                                        aria-expanded="false">Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="color:{{ Route::currentRouteName() === 'news' ? 'rgb(0, 92, 156)' : '' }}"
                                        class="nav-link" href="/news" role="button" aria-expanded="false">News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="color:{{ Route::currentRouteName() === 'endowment_fund' ? 'rgb(0, 92, 156)' : '' }}"
                                        class="nav-link" href="/endowment_fund" role="button" aria-expanded="false">
                                        Endowment Fund
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="color:{{ Route::currentRouteName() === 'contact' ? 'rgb(0, 92, 156)' : '' }}"class="nav-link"
                                        href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: white; padding: 8px 1rem" class="nav-link" href="/application"
                                        role="button" aria-expanded="false">
                                        <span> Join Us </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
