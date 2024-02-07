@extends('frontend.includes.app')
@section('title', 'Contact Us')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center bgc-black-with-lighting">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">
                    Our Port<span>folio</span>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">home</a></li>
                        <li class="breadcrumb-item active">portfolio</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Project Area start -->
    <section class="project-page-area pt-130 pb-100 rel z-1">
        <div class="container">
            <div class="row justify-content-between align-items-end pb-30">
                <div class="col-xl-12 text-xl-center">
                    <ul class="project-filter filter-btns-one d-inline-flex mb-30 wow fadeInUp delay-0-4s">
                        {{-- <li data-filter="*" class="current">All</li> --}}
                        @foreach ($services as $serv)
                            <li data-filter=".{{ $serv->slug }}"
                                class="{{ $serv->slug == 'website-designing' ? 'current' : '' }}">
                                {{ $serv->service }}</li>
                        @endforeach
                        {{-- <li data-filter=".business">Business</li>
                        <li data-filter=".saas">Saas</li>
                        <li data-filter=".medical">Medical</li>
                        <li data-filter=".construction">Construction</li>
                        <li data-filter=".education">Education</li> --}}
                    </ul>
                </div>
            </div>
            <div class="row project-active justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-md-6 item {{ $post->service->slug }}">
                        <div class="project-item style-two wow fadeInUp delay-0-2s">
                            <div class="project-iamge">
                                <img src="/posts/{{ $post->media }}" alt="Project" height="270px" width="410px" />
                                <div class="project-over">
                                    <a class="details-btn" href="{{ $post->link }}"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h4>
                                    <a href="{{ $post->link }}" target="_blank">{{ $post->author }}</a>
                                </h4>
                                <span class="category">{{ $post->service->service }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Project Area end -->

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
                    <a href="{{ route('contact') }}" class="theme-btn style-three mb-30 wow fadeInUp delay-0-4s">Let’s Get
                        Started <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Area End -->
@endsection
