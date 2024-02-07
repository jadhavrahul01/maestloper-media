<!-- main header -->
<header class="main-header header-two">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container clearfix">
            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="/">
                            <img class="logo1 d-none" src="{{ asset('user-assets/images/logos/logomm.png') }}"
                                alt="Logo" title="Logo" height="80px" width="178px" />

                            <img class="logo2" src="{{ asset('user-assets/images/logos/logo-1.png') }}" alt="Logo"
                                style="height: 80px; min-width: 120%" />
                        </a>
                    </div>
                </div>
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo my-15">
                                <a href="/">
                                    <img src="{{ asset('user-assets/images/logos/logomm.png') }}" alt="Logo"
                                        title="Logo" height="80px" width="178px" />
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="">
                                    <a href="/">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('services') }}">services</a>
                                    <!-- <ul>
                                    <li><a href="services.html">Popular Services</a></li>
                                    <li>
                                      <a href="Graphic-Designing.html">Graphic Designing</a>
                                    </li>
                                    <li>
                                      <a href="Digital-Marketing.html">Digital Marketing</a>
                                    </li>
                                    <li>
                                      <a href="Software-Development.html">Software Development</a>
                                    </li>
                                    <li>
                                      <a href="Social Media Marketing.html">Social Media Marketing</a>
                                    </li>
                                    <li>
                                      <a href="Website Designing.html">Website Designing</a>
                                    </li>
                                    <li>
                                      <a href="Production.html">Production</a>
                                    </li>
                                  </ul> -->
                                </li>
                                <li class="">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('portfolio') }}">portfolio</a>
                                </li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <button type="button" class="btn btn-outline-danger get-quote">
                                    <a href="tel:+91 8149972219">Get Quote</a>
                                </button>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Nav Search -->
                <div class="nav-search py-15">
                    <!-- <button class="far fa-search"></button> -->
                    <form action="#" class="hide">
                        <input type="text" placeholder="Search" class="searchbox" required="" />
                        <button type="submit" class="searchbutton far fa-search"></button>
                    </form>
                </div>

                <!-- Menu Button -->
                <div class="menu-btns">
                    <a href="tel:+91 8149972219" class="theme-btn style-three">Get a Quote <i
                            class="fas fa-angle-double-right"></i></a>
                    <div class="menu-sidebar">
                        <!-- <button>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
