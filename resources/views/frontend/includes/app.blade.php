<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title"
        content="Digital marketing agency in Boisar,Marketing services in Palghar,Top digital agency in Boisar,Result-driven marketing Palghar,Expert SEO agency Boisar,Palghar online marketing solutions,Trusted marketing agency Boisar,Innovative digital solutions Palghar,Boisar SEO and marketing services, Local marketing agency in Palghar, Boisar social media marketing, Effective SEO services Palghar, Creative marketing solutions Boisar, Palghar web development and SEO, Professional marketing agency in Boisar, IT solutions in Boisar, IT consulting Palghar, Boisar technology solutions, Palghar software development agency, Reliable IT services Boisar, IT infrastructure Palghar, Boisar IT support services, Palghar cloud computing solutions, Custom software Boisar, IT solutions provider Palghar">

    <meta name="keywords"
        content="Digital marketing agency in Boisar,Marketing services in Palghar,Top digital agency in Boisar,Result-driven marketing Palghar,Expert SEO agency Boisar,Palghar online marketing solutions,Trusted marketing agency Boisar,Innovative digital solutions Palghar,Boisar SEO and marketing services, Local marketing agency in Palghar, Boisar social media marketing, Effective SEO services Palghar, Creative marketing solutions Boisar, Palghar web development and SEO, Professional marketing agency in Boisar, IT solutions in Boisar, IT consulting Palghar, Boisar technology solutions, Palghar software development agency, Reliable IT services Boisar, IT infrastructure Palghar, Boisar IT support services, Palghar cloud computing solutions, Custom software Boisar, IT solutions provider Palghar">

    <meta name="description"
        content="Digital marketing agency in Boisar,Marketing services in Palghar,Top digital agency in Boisar,Result-driven marketing Palghar,Expert SEO agency Boisar,Palghar online marketing solutions,Trusted marketing agency Boisar,Innovative digital solutions Palghar,Boisar SEO and marketing services, Local marketing agency in Palghar, Boisar social media marketing, Effective SEO services Palghar, Creative marketing solutions Boisar, Palghar web development and SEO, Professional marketing agency in Boisar, IT solutions in Boisar, IT consulting Palghar, Boisar technology solutions, Palghar software development agency, Reliable IT services Boisar, IT infrastructure Palghar, Boisar IT support services, Palghar cloud computing solutions, Custom software Boisar, IT solutions provider Palghar">

    <!-- Title -->
    <title>Maestloper Media || @yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('user-assets/images/logos/favicon.png') }}" type="image/x-icon" />
    <!-- Google Fonts -->
    <link
        href="../../css2?family=Catamaran:wght@400;500;600&family=Kumbh+Sans:wght@400;500;700&family=Shadows+Into+Light&display=swap"
        rel="stylesheet" />

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/flaticon.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/fontawesome-5.14.0.min.css') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/bootstrap.min.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/magnific-popup.min.css') }}" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/nice-select.min.css') }}" />
    <!-- Type Writer -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/jquery.animatedheadline.css') }}" />
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/animate.min.css') }}" />
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/slick.min.css') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('user-assets/css/style.css') }}" />

    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->

    @yield('links')
</head>

<body class="home-one">
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        @include('frontend.includes.header')
        @yield('content')

        <!-- footer area start -->
        <footer class="main-footer footer-two pt-80 bgc-lighter">
            <div class="container">
                <div class="row justify-content-xl-between justify-space-between">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="footer-widget widget_about me-md-5 wow fadeInUp delay-0-2s">
                            <div class="footer-logo mb-25">
                                <a href="/"><img style="height: 70px"
                                        src="{{ asset('user-assets/images/logos/logomm.png') }}" alt="Logo" /></a>
                            </div>
                            <p>
                                Maestloper Media is a full-service digital marketing agency
                                founded with a vision to revolutionize the online marketing
                                landscape. We pride ourselves on delivering exceptional
                                results through innovative strategies, creative designs, and
                                advanced technology.
                            </p>
                            <div class="social-style-two pt-5">
                                <a href="https://m.facebook.com/people/maestloper_media/100064850406182/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/maestloper_media/?hl=en"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://in.linkedin.com/company/maestloper-media"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                            <h4 class="footer-title">Quick Links</h4>
                            <ul class="list-style-two">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('privacy') }}">Privacy & Policy</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <br>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="wow fadeInUp delay-0-6s">
                            <h4 class="footer-title">Contact</h4>
                            <li class="list-item-1">
                                <a class="text-decoration-none">Address: Office No.23, Ostwal Wonder City, Betegao
                                    Boisar(E) 401501,Palghar, MH</a>
                            </li>
                            <li class="list-item">
                                <a href="mailto:info@maestlopermedia.com" class="text-decoration-none">Email:
                                    info@maestlopermedia.com</a>
                            </li>
                            <li class="list-item">
                                <a href="callto:+91 8149972219" class="text-decoration-none footer-link-auto">Phone: +91
                                    8149972219</a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-30 pt-25 pb-10">
                <div class="container">
                    <div class="copyright-text text-center">
                        <p>Copyright ©2023 Maestloper Media All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fas fa-angle-double-up"></span>
        </button>

        <!-- Start Whatsapp Plugin -->
        <div class="nav-bottom">
            <div class="popup-whatsapp fadeIn">
                <div class="content-whatsapp -top">
                    <button type="button" class="closePopup">
                        <i class="material-icons icon-font-color">X</i>
                    </button>
                    <p>Hello, 😊 need help?</p>
                </div>
                <div class="content-whatsapp -bottom">
                    <input class="whats-input" id="whats-in" type="text" placeholder="Send message..." />
                    <button class="send-msPopup" id="send-btn" type="button">
                        <i class="material-icons icon-font-color--black"><i class="fa fa-paper-plane"></i></i>
                    </button>
                </div>
            </div>
            <button type="button" id="whats-openPopup" class="whatsapp-button">
                <img class="icon-whatsapp" src="https://cdn-icons-png.flaticon.com/512/134/134937.png" />
            </button>
            <div class="circle-anime"></div>
        </div>
        <!--End pagewrapper-->
        <!-- Jquery -->

        <script>
            popupWhatsApp = () => {
                let btnClosePopup = document.querySelector(".closePopup");
                let btnOpenPopup = document.querySelector(".whatsapp-button");
                let popup = document.querySelector(".popup-whatsapp");
                let sendBtn = document.getElementById("send-btn");

                btnClosePopup.addEventListener("click", () => {
                    popup.classList.toggle("is-active-whatsapp-popup");
                });

                btnOpenPopup.addEventListener("click", () => {
                    popup.classList.toggle("is-active-whatsapp-popup");
                    popup.style.animation = "fadeIn .6s 0.0s both";
                });

                sendBtn.addEventListener("click", () => {
                    let msg = document.getElementById("whats-in").value;
                    let relmsg = msg.replace(/ /g, "%20");
                    //just change the phone numbers to desired number.

                    window.open("https://wa.me/+918149972219?text=" + relmsg, "_blank");
                });

                setTimeout(() => {
                    popup.classList.toggle("is-active-whatsapp-popup");
                }, 3000);
            };

            popupWhatsApp();
        </script>
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ asset('user-assets/js/jquery-3.6.0.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('user-assets/js/bootstrap.min.js') }}"></script>
        <!-- Appear Js -->
        <script src="{{ asset('user-assets/js/appear.min.js') }}"></script>
        <!-- Slick -->
        <script src="{{ asset('user-assets/js/slick.min.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('user-assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Nice Select -->
        <script src="{{ asset('user-assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Image Loader -->
        <script src="{{ asset('user-assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Type Writer -->
        <script src="{{ asset('user-assets/js/jquery.animatedheadline.min.js') }}"></script>
        <!-- Circle Progress -->
        <script src="{{ asset('user-assets/js/circle-progress.min.js') }}"></script>
        <!-- Isotope -->
        <script src="{{ asset('user-assets/js/isotope.pkgd.min.js') }}"></script>
        <!--  WOW Animation -->
        <script src="{{ asset('user-assets/js/wow.min.js') }}"></script>
        <!-- Custom script -->
        <script src="{{ asset('user-assets/js/script.js') }}"></script>
        {{-- Custom script2 --}}
        <script src="{{ asset('user-assets/js/custom.js') }}"></script>
</body>

</html>
