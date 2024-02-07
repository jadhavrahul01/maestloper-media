@extends('frontend.includes.app')
@section('title', 'About Us')
@section('links')
    <style>

    </style>
@endsection
@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center bgc-black-with-lighting">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">
                    Abo<span>ut Us</span>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- What We Do Two Area start -->
    <section class="ww-do-two-area py-130 rel z-1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="ww-do-two-content rmb-65 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title style-two mb-15">Welcome To Maestloper Media</span>
                            <h2>Quality & Experience IT Solution Company</h2>
                        </div>
                        <p>
                            Welcome to Maestloper Media, where innovation meets seamless
                            solutions. As a leading digital service provider, we are your
                            partners in navigating the dynamic landscape of the digital

                            world. From cutting-edge web development and mobile app
                            solutions to robust cloud services and digital marketing
                            strategies, we deliver tailored experiences that resonate with
                            your audience.
                        </p>
                        <div class="row pt-15">
                            <div class="col-sm-6">
                                <div class="feature-item-two border-right pe-sm-3">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <h5>Customize Website</h5>
                                    <p>
                                        Pick a template customize anything answer or question
                                        website design just you.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item-two color-two">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <h5>Premium Design</h5>
                                    <p>
                                        Start your own blog, add an online store and accept
                                        bookings online always.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ww-do-two-images rel">
                        <div class="row">
                            <div class="col-sm-7 offset-1">
                                <img class="image-one wow fadeInUp delay-0-4s"
                                    src="{{ asset('user-assets/images/about/about.png') }}" alt="What We Do" />
                            </div>
                            <div class="col-sm-4">
                                <img class="image-two wow fadeInUp delay-0-6s"
                                    src="{{ asset('user-assets/images/about/ww-do-two2.jpg') }}" alt="What We Do" />
                                <img class="image-three wow fadeInUp delay-0-8s"
                                    src="{{ asset('user-assets/images/about/ww-do-two3.jpg') }}" alt="What We Do" />
                            </div>
                        </div>
                        <div class="year-of-experience wow zoomIn delay-0-6s">
                            <span class="number">4+</span>
                            Years Experience In Digital Services
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Two Area end -->

    {{-- Owner Inforrmation Start --}}

    <section class="text-gray-600 body-font d-flex justify-content-center">
        <div class="main">
            <div class="one pb-20">
                <div class="img">
                    <img src="{{ asset('user-assets/images/about/swastik sir.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h4>Swastik Nitin Lokhande</h4><br>
                    <label for="">Email: </label>
                    <a href="mailto:info@maestlopermedia.com" id="email">info@maestlopermedia.com</a><br>
                    <label for="">Phone: </label>
                    <a href="tel:+91 8149972219"> +918149972219</a>
                    <ul class="ms-lg-1 social-links">
                        <li><a href="https://in.linkedin.com/company/maestloper-media">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                    viewBox="0 0 333333 333333" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M119066 107135h65865v33765l952 2c9173-16456 31602-33765 65046-33765 69550-2 82413 43280 82413 99584v114694l-68689 2V219745c0-24237-504-55437-35716-55437-35765 0-41245 26383-41245 53672v103438h-68626V107137zM71447 47613c0 19716-16000 35715-35716 35715S9 67328 9 47613c0-19716 16006-35716 35722-35716s35716 16000 35716 35716zM9 107135h71438v214281H9V107135z"
                                        fill="#0077b5" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="https://twitter.com/swaglokhande?s=20">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                    viewBox="0 0 333333 333333" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M333328 63295c-12254 5480-25456 9122-39241 10745 14123-8458 24924-21861 30080-37819-13200 7807-27871 13533-43416 16596-12499-13281-30252-21537-49919-21537-37762 0-68336 30591-68336 68330 0 5326 591 10537 1748 15562-56820-2880-107194-30081-140915-71467-6049 10435-9250 22300-9250 34367v8c0 23696 12031 44654 30389 56876-11202-333-21739-3457-30991-8519v854c0 33138 23554 60789 54852 67039-5734 1557-11787 2417-18023 2417-4417 0-8673-455-12905-1224 8742 27139 33975 46923 63857 47500-23430 18356-52858 29286-84939 29286-5537 0-10931-339-16318-984 30326 19458 66251 30727 104844 30727 125735 0 194551-104198 194551-194543 0-3002-67-5911-191-8852 13354-9553 24932-21609 34097-35333l31-31-6 4z"
                                        fill="#1da1f2" />
                                </svg>
                            </a></li>
                        <li><a href="https://www.instagram.com/__swag_lokhande__/">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 132.004 132">
                                    <defs>
                                        <linearGradient id="b">
                                            <stop offset="0" stop-color="#3771c8" />
                                            <stop stop-color="#3771c8" offset=".128" />
                                            <stop offset="1" stop-color="#60f" stop-opacity="0" />
                                        </linearGradient>
                                        <linearGradient id="a">
                                            <stop offset="0" stop-color="#fd5" />
                                            <stop offset=".1" stop-color="#fd5" />
                                            <stop offset=".5" stop-color="#ff543e" />
                                            <stop offset="1" stop-color="#c837ab" />
                                        </linearGradient>
                                        <radialGradient id="c" cx="158.429" cy="578.088" r="65"
                                            xlink:href="#a" gradientUnits="userSpaceOnUse"
                                            gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)"
                                            fx="158.429" fy="578.088" />
                                        <radialGradient id="d" cx="147.694" cy="473.455" r="65"
                                            xlink:href="#b" gradientUnits="userSpaceOnUse"
                                            gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)"
                                            fx="147.694" fy="473.455" />
                                    </defs>
                                    <path fill="url(#c)"
                                        d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                        transform="translate(1.004 1)" />
                                    <path fill="url(#d)"
                                        d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                        transform="translate(1.004 1)" />
                                    <path fill="#fff"
                                        d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z" />
                                </svg>
                            </a></li>
                        <li><a href="https://www.facebook.com/swastik.lokhande.7?mibextid=ZbWKwL">
                                <svg id="Layer_1" height="24px" width="24px" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #1877f2;
                                            }

                                            .cls-2 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <title>facebook-round-color</title>
                                    <path class="cls-1"
                                        d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z" />
                                    <path class="cls-2"
                                        d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content2">
                <h4>About me</h4>
                <p>
                    Maestloper Media was founded in 2017 as a result of the innovative leadership of Websit's CEO and
                    founder,
                    Swastik Nitin Lokhande. He founded the first software company ever in Boisar, Maharashtra, with a
                    strong
                    enthusiasm for innovation. The success of Websit is a direct result of Swastik's leadership, which
                    positions
                    the
                    company as a pioneer in the technology field, constantly establishing new standards and pushing
                    forward with
                    innovation.
                </p>
            </div>


            <div class="contents3">
                <h4>Background & Exprience</h4>
                <p>Maestloper Media Completed more Than Four Years in Digital Services..</p>
                <p>Project Done, Goals Achieved, Ready For Next Steps</p>
                <li>Web developer</li>
                <li>Software Developer</li>
                <li>videographer</li>
                <li>UI/UX Developer</li>
            </div>
        </div>
    </section>


    {{-- Owner Inforrmation End --}}

    <!-- Statistics Four Area start -->
    <div class="statistics-area-four rel z-1">
        <div class="container">
            <div class="statistics-four-counters bgs-cover bgc-lighter"
                style="
              background-image: url({{ asset('user-assets/images/background/counter-bg.png') }});
            ">
                <div class="row medium-gap">
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item mt-0 counter-text-wrap wow fadeInLeft delay-0-2s">
                            <i class="flaticon-startup"></i>
                            <span class="count-text" data-speed="3000" data-stop="350">0</span>
                            <span class="counter-title">Projects complete</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-4s">
                            <i class="flaticon-global"></i>
                            <span class="count-text" data-speed="3000" data-stop="100">0</span>
                            <span class="counter-title">World Wide Branch</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item mt-0 counter-text-wrap wow fadeInLeft delay-0-6s">
                            <i class="flaticon-rating"></i>
                            <span class="count-text" data-speed="3000" data-stop="120">0</span>
                            <span class="counter-title">Happy Customers</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-8s">
                            <i class="flaticon-trophy"></i>
                            <span class="count-text" data-speed="3000" data-stop="04">0</span>
                            <span class="counter-title">Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Statistics Four Area end -->

    <!-- Video Area start -->
    <section class="video-area bgc-black pt-250">
        <div class="container">
            <div class="row medium-gap align-items-end pt-80">
                <div class="col-lg-6">
                    <div class="video-part rmb-65 wow fadeInRight delay-0-2s">
                        <img src="https://i.vimeocdn.com/video/832655640-71c3056a6d0d155a7c05fcbb72e47f0b223f32b2a82523379595c8120e2d769d-d?mw=1800&mh=1013&q=70"
                            alt="Video" />
                        <a href="//player.vimeo.com/video/374265101?title=0&portrait=0&byline=0&autoplay=1&muted=true"
                            class="mfp-iframe video-play" tabindex="-1"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-content text-white pb-95 rpb-115 wow fadeInLeft delay-0-2s">
                        <div class="section-title mb-30">
                            <h2>We Are Increasing Business Success With Technology</h2>
                        </div>
                        <ul class="list-style-three">
                            <li>Amazing communication.</li>
                            <li>Best trending designing experience</li>
                            <li>Email & Live chat.</li>
                            <li>Edit your mobile view</li>
                            <li>State of the art security</li>
                            <li>Optimize search engines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Area End -->

    <!-- Call to Action Area start -->
    <section class="call-to-action-area bgc-white pt-150 pb-50">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-black mb-25 wow fadeInUp delay-0-2s">
                        <h2>Let’s Build Your Brand Today</h2>
                        <p>
                            Do you want to have a Digital Services that stands out and
                            impresses your clients? Then we are ready to help! Click the
                            button below to contact us and discuss your ideas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="{{ route('contact') }}" class="theme-btn style-one mb-30 wow fadeInUp delay-0-4s">Let’s Get
                        Started
                        <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Area End -->
    {{-- * Brands Logo Section Start* --}}
    <section class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal">
        <div class="customer-logos slider">
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/1.png') }}" alt="Kinderhotel Aschauerhof">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/2.png') }}">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/3.png') }}">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/4.png') }}">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/5.svg') }}" alt="Tannenmuehle">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/6.png') }}" alt="Loeffele">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/7.png') }}" alt="Krone">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/8.png') }}" alt="Obereggen">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/9.png') }}" alt="Ortnerhof">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/10.png') }}" alt="Ottonenhof" height="150px"
                    width="200px">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/11.png') }}" alt="Leiners">
            </div>
            <div class="slide-in-right slide">
                <img src="{{ asset('user-assets/images/client2/12.png') }}" alt="Seitenalm">
            </div>
    </section>
    {{-- * Brands Logo Section End* --}}
@endsection
