<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Maestloper Media | @yield('title')</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('user-assets/images/logos/favicon.png') }}" type="image/x-icon">

    <!--Bootstrap css -->
    <link id="style" href="{{ asset('admin-assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/dark.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/skin-modes.css') }}" rel="stylesheet">

    <!-- Animate css -->
    <link href="{{ asset('admin-assets/css/animated.css') }}" rel="stylesheet">


    <!-- P-scroll bar css-->
    <link href="{{ asset('admin-assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet">

    <!---Icons css-->
    <link href="{{ asset('admin-assets/css/icons.css') }}" rel="stylesheet">

    <!-- Color Skin css -->
    <link id="theme" href="{{ asset('admin-assets/colors/color1.css') }}" rel="stylesheet" type="text/css">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('admin-assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/switcher/demo.css') }}" rel="stylesheet">
    <!-- INTERNAL Morris Charts css -->
    <link href="{{ asset('admin-assets/plugins/morris/morris.css?v=1692175007') }}" rel="stylesheet">

    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('admin-assets/plugins/select2/select2.min.css?v=1692175007') }}" rel="stylesheet">

    <!-- Data table css -->
    <link href="{{ asset('admin-assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin-assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin-assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet">

    <!-- Color Skin css -->
    <link id="theme" href="{{ asset('admin-assets/colors/color1-1.css?v=1692175007') }}" rel="stylesheet"
        type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="app sidebar-mini">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('admin-assets/images/svgs/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            @include('admin.includes.sidebar')
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">

                    @include('admin.includes.header')
                    @yield('content')
                </div>
            </div>
            <!-- End app-content-->

            @include('admin.includes.footer')
        </div>
    </div>

    <!-- End Page -->
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-chevron-up"></i></a>


    @yield('customJs')
    <!-- Jquery js-->
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>


    <!-- Bootstrap5 js-->
    <script src="{{ asset('admin-assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Othercharts js-->
    <script src="{{ asset('admin-assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

    <!-- Circle-progress js-->
    <script src="{{ asset('admin-assets/js/circle-progress.min.js') }}"></script>

    <!-- Jquery-rating js-->
    <script src="{{ asset('admin-assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Sidemenu js-->
    <script src="{{ asset('admin-assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- P-scroll js-->
    <script src="{{ asset('admin-assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('admin-assets/switcher/js/switcher.js') }}"></script>
    <!--INTERNAL Flot Charts js-->
    <script src="{{ asset('admin-assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ asset('admin-assets/js/chart.flot.sampledata.js') }}"></script>

    <!-- INTERNAL Chart js -->
    <script src="{{ asset('admin-assets/plugins/chart/chart.bundle.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL Apexchart js -->
    <script src="{{ asset('admin-assets/js/apexcharts.js') }}"></script>

    <!--INTERNAL Moment js-->
    <script src="{{ asset('admin-assets/plugins/moment/moment.js') }}"></script>

    <!--INTERNAL Index js-->
    <script src="{{ asset('admin-assets/js/index1.js') }}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{ asset('admin-assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>

    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('admin-assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/select2.js') }}"></script>

    <!-- Rounded bar chart js-->
    <script src="{{ asset('admin-assets/js/rounded-barchart.js') }}"></script>

</body>

</html>
