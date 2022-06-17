<header class="header">
    <div class="header-inner sticky top-0">
        <div style="padding: 12px 0px;" class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand d-flex align-items-center col-4" href="/">
                            <img class="" src={{ asset('pictures/Logo.svg') }} alt="Logo" />
                            <h6 style="font-size:20px;margin-left: 10px;">Global Shapers <br />Kathmandu Hub</h6>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/" id="navbarDropdown" role="button"
                                        aria-expanded="false">Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/about" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="/about">About Us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/shaper">Shapers</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/alumni">Alumni</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/"> Shapers Learning and </br>Social
                                                Engagements</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/projects" id="navbarDropdown" role="button"
                                        aria-expanded="false">Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/blogs" role="button" aria-expanded="false">Blogs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/endowment_fund" role="button" aria-expanded="false">
                                        Endowment
                                        Fund
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: white;padding: 8px 26px;" class="nav-link" href="/become_a_shaper"
                                        role="button" aria-expanded="false">
                                        <span>
                                            Join Us
                                        </span>
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
