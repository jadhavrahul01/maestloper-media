<!--app header-->
<div class="app-header header main-header1">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('user-assets/images/logos/logomm.png') }}" class="header-brand-img desktop-lgo"
                    alt="Maestloper Media">
                <img src="{{ asset('user-assets/images/logos/logo-1.png') }}" class="header-brand-img dark-logo"
                    alt="Maestloper Media">
                <img src="{{ asset('user-assets/images/logos/favicon.png') }}" class="header-brand-img mobile-logo"
                    alt="Maestloper Media">
                <img src="{{ asset('user-assets/images/logos/favicon.png') }}" class="header-brand-img darkmobile-logo"
                    alt="Maestloper Media">
            </a>
            <div class="app-sidebar__toggle d-flex" data-bs-toggle="sidebar">
                <a class="open-toggle" href="javascript:void(0);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon"
                        width="24" height="24" viewbox="0 0 24 24">
                        <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                    </svg>
                </a>
            </div>
            <div class="mt-1 d-md-block d-none">
                <form class="form-inline">
                    <div class="search-element">
                        <input type="search" class="form-control header-search mobile-view-search"
                            placeholder="Search…" aria-label="Search" tabindex="1">
                        <button class="btn btn-primary-color" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon" width="24"
                                height="24" viewbox="0 0 24 24">
                                <path
                                    d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                </path>
                            </svg>
                        </button>

                    </div>
                </form>
            </div><!-- SEARCH -->
            <div class="d-flex order-lg-2 ms-auto main-header-end">
                <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="fa-solid fa-ellipsis-vertical fa-rotate-90" style="color: #adadad;"></i>
                </button>
                <div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-lg-none d-flex responsive-search">
                                <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon"
                                        width="24" height="24" viewbox="0 0 24 24">
                                        <path
                                            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <button class="btn btn-primary-color" type="submit">
                                            <svg class="header-icon search-icon p-1 mt-1"
                                                xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24"
                                                width="24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div><!-- SEARCH -->
                            <div class="dropdown d-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="header-icon" width="24" height="24" viewbox="0 0 24 24">
                                            <path
                                                d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z">
                                            </path>
                                        </svg></span>
                                    <span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="header-icon" width="24" height="24" viewbox="0 0 24 24">
                                            <path
                                                d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z">
                                            </path>
                                        </svg></span>
                                </a>
                            </div><!-- Theme-Layout -->
                            <div class="dropdown   header-fullscreen d-flex">
                                <a class="nav-link icon full-screen-link p-0" id="fullscreen-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24"
                                        height="24" viewbox="0 0 24 24">
                                        <path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="dropdown profile-dropdown d-flex">
                                <a href="javascript:void(0);" class="nav-link pe-0 leading-none"
                                    data-bs-toggle="dropdown">
                                    <span class="header-avatar1">
                                        <img src="/profile/{{ Auth::guard('admin')->user()->profile_img }}" alt="img"
                                            class="avatar avatar-md brround">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                    <div class="text-center">
                                        <div class="text-center user pb-0 font-weight-bold">
                                            {{ Auth::guard('admin')->user()->name }}</div>
                                        <span
                                            class="text-center user-semi-title">{{ Auth::guard('admin')->user()->email }}</span>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <a class="dropdown-item d-flex" href="{{ route('admin.profile') }}">
                                        <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg"
                                            height="24" viewbox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z">
                                            </path>
                                        </svg>
                                        <div class="fs-13">Profile</div>
                                    </a>
                                    <a class="dropdown-item d-flex" href="{{ route('logout') }}">
                                        <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" height="24" viewbox="0 0 24 24"
                                            width="24">
                                            <g>
                                                <rect fill="none" height="24" width="24"></rect>
                                            </g>
                                            <g>
                                                <path
                                                    d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z">
                                                </path>
                                            </g>
                                        </svg>
                                        <div class="fs-13">Sign Out</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/app header-->
