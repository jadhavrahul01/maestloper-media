@extends('frontend.includes.app')
@section('title', 'Services')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center bgc-black-with-lighting">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">
                    Serv<span>ices</span>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div>
            <div class="circle wow zoomInLeft delay-0-2s" data-wow-duration="2s"></div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Statistics Five Area start -->
    <section class="statistics-area-five pt-130" id="graphic">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="statistics-five-content mb-30 rmb-65 wow fadeInRight delay-0-2s m-lg-5">
                        <div class="section-title mb-25">
                            <span class="sub-title style-two mb-15">Graphics Designing</span>
                            <h2>Unleash Your Creativity: The Art of Graphics Design</h2>
                        </div>
                        <p>
                            Maestloper Media graphic designers use a combination of
                            creativity and technical skills to create designs that are
                            visually appealing, functional, and effective in achieving
                            their intended purpose. This involves selecting appropriate
                            color schemes, typography, imagery, and layout to effectively
                            convey the desired message.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="statistics-five-image wow fadeInLeft delay-0-2s mt-0">
                        <img src="{{ asset('user-assets/myimages/services-img/7.jpg') }}" alt="Statistics" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics-area-five pt-130" id="digital">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="statistics-five-content mb-30 rmb-65 wow fadeInRight delay-0-2s m-lg-5">
                        <div class="section-title mb-25">
                            <span class="sub-title style-one mb-15">Digital Marketing</span>
                            <h2>Unlocking Digital Marketing Success!</h2>
                        </div>
                        <p>
                            Digital marketing is a powerful tool for businesses to promote
                            their products and services online. It involves various
                            strategies, tactics, and techniques to attract and engage
                            potential customers through digital channels such as search
                            engines, social media, email, and other digital platforms.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="statistics-five-image wow fadeInLeft delay-0-2s mt-0">
                        <img src="{{ asset('user-assets/myimages/services-img/1.jpg') }}" alt="Statistics" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics-area-five pt-130" id="software">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="statistics-five-content mb-30 rmb-65 wow fadeInRight delay-0-2s m-lg-5">
                        <div class="section-title mb-25">
                            <span class="sub-title style-two mb-15">Software Development
                            </span>
                            <h2>Empowering Innovation through Software Development</h2>
                        </div>
                        <p>
                            Software development is the process of designing, creating,
                            testing, and maintaining software applications or systems.
                            This involves the use of various programming languages, tools,
                            and frameworks to develop software that can be used on
                            different devices and platforms..
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="statistics-five-image wow fadeInLeft delay-0-2s mt-0">
                        <img src="{{ asset('user-assets/myimages/services-img/6.jpg') }}" alt="Statistics" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics-area-five pt-130" id="social">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="statistics-five-content mb-30 rmb-65 wow fadeInRight delay-0-2s m-lg-5">
                        <div class="section-title mb-25">
                            <span class="sub-title style-one mb-15">SOCIAL MEDIA MARKETING</span>
                            <h2>Unleashing the Power of Social Media Marketing</h2>
                        </div>
                        <p>
                            Social media marketing is a type of digital marketing that
                            involves promoting products or services through social media
                            platforms. This type of marketing is based on the creation and
                            sharing of content that is designed to attract and engage with
                            the target audience.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="statistics-five-image wow fadeInLeft delay-0-2s mt-0">
                        <img src="{{ asset('user-assets/myimages/services-img/2.jpg') }}" alt="Statistics" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics-area-five pt-130" id="website">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="statistics-five-content mb-30 rmb-65 wow fadeInRight delay-0-2s m-lg-5">
                        <div class="section-title mb-25">
                            <span class="sub-title style-two mb-15">Website Designing</span>
                            <h2>Creative Web Design Solutions</h2>
                        </div>
                        <p>
                            Maestloper Media website designers use a range of tools and
                            techniques to create websites that meet the needs of their
                            clients and target audiences. This includes creating a site
                            map to organize content, selecting a suitable color scheme and
                            typography, creating a responsive design that works across
                            different devices.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="statistics-five-image wow fadeInLeft delay-0-2s mt-0">
                        <img src="{{ asset('user-assets/myimages/services-img/3.jpg') }}" alt="Statistics" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics-area-five pb-130 pt-130" id="production">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="statistics-five-content m-lg-5 mb-30 rmb-65 wow fadeInRight delay-0-2s">
                        <div class="section-title mb-25">
                            <span class="sub-title style-one mb-15">Production</span>
                            <h2>Efficient Production Excellence</h2>
                        </div>
                        <p>
                            Maestloper Media production companies or individuals who
                            specialize in production services have the skills and
                            expertise to manage the entire production process, from
                            planning to distribution. They can provide guidance on
                            production processes and technology to ensure that the
                            production process is efficient and cost-effective.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="statistics-five-image wow fadeInLeft delay-0-2s mt-0">
                        <img src="{{ asset('user-assets/myimages/services-img/16.jpg') }}" alt="Statistics" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Area end -->

    <!-- Call to Action Area start -->
    <section class="call-to-action-area bgc-black pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-white mb-25 wow fadeInUp delay-0-2s">
                        <h2>Let’s Build Your Brand Today</h2>
                        <p>
                            Do you want to have a Digital Services that stands out and
                            impresses your clients? Then we are ready to help! Click the
                            button below to contact us and discuss your ideas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="{{ route('contact') }}" class="theme-btn style-two mb-30 wow fadeInUp delay-0-4s">Let’s Get
                        Started <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Area End -->

@endsection
