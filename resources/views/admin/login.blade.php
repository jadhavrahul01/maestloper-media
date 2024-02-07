<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Maestloper Media | Login</title>

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

<body>


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('admin-assets/images/svgs/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <div class="register-2">
        <div class="page">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="row justify-content-center">
                                    <div class="col-md-6"
                                        style="display:flex;
                                        justify-content:center;">
                                        @include('admin.message')
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center mb-5">
                                        <img src="{{ asset('user-assets/images/logos/logomm.png') }}" height="150px"
                                            width="200px" class="header-brand-img desktop-lgo" alt="Azea logo">
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-3">
                                                <h1 class="mb-2">Log In</h1>
                                                <a href="javascript:void(0);" class="">Welcome Back !</a>
                                            </div>
                                            <form action="{{ route('authenticate') }}" method="POST" class="mt-5">
                                                @csrf
                                                <div class="input-group mb-4">
                                                    <div class="input-group-text">
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <input type="email"
                                                        class="form-control  @error('email') is-invalid @enderror"
                                                        placeholder="Username" name="email"
                                                        value="{{ old('email') }}">

                                                    @error('email')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group" id="Password-toggle1">
                                                        <a href="" class="input-group-text">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                        <input
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            type="password" placeholder="Password" name="password">

                                                        @error('password')
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label">Remember me</span>
                                                    </label>
                                                </div> --}}
                                                <div class="form-group text-center mb-3 " style="padding-top: 50px">
                                                    {{-- <a href="#" class="btn btn-primary btn-lg w-100 br-7">Log
                                                        In</a> --}}
                                                    <button type="submit"
                                                        class="btn btn-primary btn-lg w-100 br-7 ">Log
                                                        In</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End Page -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"
        integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
