<!--aside open-->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
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
       
    </div>

    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category">Main</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                    viewbox="0 0 24 24">
                    <path
                        d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z">
                    </path>
                </svg>
                <span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="side-item side-item-category">Posts</li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('allposts') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z">
                    </path>
                </svg>
                <span class="side-menu__label">All posts</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('featuredposts') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M11.17 8l-.58-.59L9.17 6H4v12h16V8h-8z" opacity=".3"></path>
                    <path
                        d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V6h5.17l1.41 1.41.59.59H20v10z">
                    </path>
                </svg>
                <span class="side-menu__label">Featured posts</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('addpost') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24" style="transform: rotate(45deg) !important;">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                    </path>
                </svg>
                <span class="side-menu__label">Add Post</span>
            </a>
        </li>

        <li class="side-item side-item-category">Services</li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('addservice') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z">
                    </path>
                </svg>
                <span class="side-menu__label">Add Service</span>
            </a>
        </li>
        <li class="side-item side-item-category">Messages</li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('form') }}">
                <svg class="svg-icon side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"></path>
                    <path
                        d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z">
                    </path>
                </svg>
                <span class="side-menu__label">Messages</span>
            </a>
        </li>
    </ul>
</aside>
<!--aside closed-->
