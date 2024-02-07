@extends('frontend.includes.app')
@section('title', 'Contact Us')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center bgc-black-with-lighting">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">
                    Conta<span>ct Us</span>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Contact Us Page Area start -->
    <section class="contact-us-page-area py-130">
        <div class="container">
            <div class="row align-items-end justify-content-between">
                <div class="col-lg-7">
                    <div class="contact-content rmb-65 wow fadeInRight delay-0-2s">
                        <div class="section-title mb-25">
                            <span class="sub-title style-two mb-15">Contact Us</span>
                            <h2>
                                Let’s Start New Project or work Together! Contact With us
                            </h2>
                        </div>
                        <p>
                            We value your feedback and strive to provide a timely and
                            helpful response to every inquiry. Our dedicated team is eager
                            to assist you, whether you're seeking information about our
                            products/services, have a technical question, or simply want
                            to share your thoughts.
                        </p>
                        <form id="contactForm" class="contactForm z-1 rel" action="/submit" name="contactForm"
                            method="post">
                            @csrf
                            @include('admin.message')
                            <div class="row pt-15">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="" placeholder=" Your Full Name"
                                            data-error="Please enter your name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            value="" placeholder="support@gmail.com" required
                                            data-error="Please enter your Email" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            value="" placeholder="+91 1234567890" required />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="form-group">
                                        <label for="select-subject">Select Requirment</label>
                                        <select name="select_req" id="select-subject" value="" required>
                                            <option value="">
                                                <-- Select Requirment -->
                                            </option>
                                            @foreach ($services as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->service }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Write Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required
                                            data-error="Please enter your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-5 mb-0">
                                        <button type="submit" class="theme-btn w-100">
                                            Send Message <i class="fas fa-angle-double-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-info wow fadeInLeft delay-0-2s">
                        <div class="contact-info-item style-two">
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <span class="title">Location</span>
                                <a href="https://goo.gl/maps/sYzfysnGBPQYdnJUA" target="_blank">
                                    <span class="text">Office No.23, Ostwal Wonder City, Betegao Boisar(E)
                                        401501,Palghar, MH</span>
                                </a>
                            </div>
                        </div>
                        <div class="contact-info-item style-two">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 512 512" fill="#fff">
                                    <path
                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                </svg>
                            </div>
                            <div class="content">
                                <span class="title">email address</span>
                                <span class="text">
                                    <a href="mailto:info@maestlopermedia.com"><span class="__cf_email__"
                                            data-cfemail="®í"></span></a>
                                    <a href="mailto:info@maestlopermedia.com">info@maestlopermedia.com</a>
                                </span>
                            </div>
                        </div>
                        <div class="contact-info-item style-two">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 512 512"
                                    fill="#fff">
                                    <path
                                        d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z" />
                                </svg>
                            </div>
                            <div class="content">
                                <span class="title">Phone Number</span>
                                <span class="text">
                                    Call <a href="callto:+91 8149972219">+91 8149972219</a>
                                    Whatsapp :+91 8149972219
                                </span>
                            </div>
                        </div>
                        <div class="follow-us">
                            <h4>Follow Us</h4>
                            <div class="social-style-two">
                                <a href="https://m.facebook.com/people/maestloper_media/100064850406182/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/maestloper_media/?hl=en"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://in.linkedin.com/company/maestloper-media"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Page Area end -->

    <!-- Location Map Area Start -->
    <div class="contact-page-map wow fadeInUp delay-0-2s">
        <div class="our-location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.653430592242!2d72.72499537540824!3d19.819481281544313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71fb233e2dd27%3A0x81a46409468e4a18!2sMaestloper%20Media!5e1!3m2!1sen!2sin!4v1691662718505!5m2!1sen!2sin"
                style="border: 0; width: 100%" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Location Map Area End -->

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
