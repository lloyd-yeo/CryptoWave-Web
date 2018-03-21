<!DOCTYPE html>
<!--[if IE 9]>
<html class='ie9 no-focus' lang='en'> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>CryptoWave</title>

    <meta name="description"
          content="CryptoWave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('oneui/assets/img/favicons/favicon.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-16x16.png') }}"
          sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-32x32.png') }}"
          sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-96x96.png') }}"
          sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-160x160.png') }}"
          sizes="160x160">
    <link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-192x192.png') }}"
          sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('oneui/assets/js/plugins/datatables/jquery.dataTables.min.css') }}">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ asset('oneui/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('oneui/assets/css/oneui.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('oneui/assets/css/themes/modern.min.css') }}">
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">

    <!-- Header -->
    <header id="header-navbar">
        <div class="content-mini content-mini-full content-boxed">
            <!-- Header Navigation Left -->
            <ul class="nav-header pull-left">
                <li class="header-content">
                    <a class="h5" href="/">
                        {{--<i class="fa fa-circle-o-notch text-primary"></i> --}}
                        <span class="h4 font-w600 text-primary-dark">CryptoWave™</span>
                    </a>
                </li>
            </ul>
            <!-- END Header Navigation Left -->
        </div>
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Sub Header -->
        <div class="bg-gray-lighter visible-xs">
            <div class="content-mini content-boxed">
                <button class="btn btn-block btn-default visible-xs push" data-toggle="collapse"
                        data-target="#sub-header-nav">
                    <i class="fa fa-navicon push-5-r"></i>Menu
                </button>
            </div>
        </div>
        <div class="bg-primary-lighter collapse navbar-collapse remove-padding" id="sub-header-nav">
            <div class="content-mini content-boxed">
                <ul class="nav nav-pills nav-sub-header push">
                    <li class="active">
                        <a href="/home">
                            <i class="fa fa-dashboard push-5-r"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        {{--<a href="/download" download>--}}
                        <a href="/download" id="download-windows-link" target="_blank">
                            <i class="fa fa-cloud-download push-5-r"></i>Download Windows Miner
                        </a>
                    </li>

                    <li>
                        {{--<a href="/download" download>--}}
                        <a id="download-mac-link" href="/download/mac" target="_blank">
                            <i class="fa fa-cloud-download push-5-r"></i>Download Mac Miner
                        </a>
                    </li>

                    <li>
                        <a href="/faq">
                            <i class="fa fa-question-circle push-5-r"></i>CryptoWave FAQ
                        </a>
                    </li>

                    <li>
                        <a href="/tutorial">
                            <i class="fa fa-video-camera push-5-r"></i>Training Videos
                        </a>
                    </li>

                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Sub Header -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <!-- Section -->
            <div class="bg-image img-rounded overflow-hidden push"
                 style="background-image: url('{{ asset('stack/img/promo-1.jpg') }}');">
                <div class="bg-black-op">
                    <div class="content">
                        <div class="block block-transparent block-themed text-center">
                            <div class="block-content">
                                <h1 class="h1 font-w700 text-white animated fadeInDown push-5">Training Videos</h1>
                                <h2 class="h4 font-w400 text-white-op animated fadeInUp">Below are training videos that will help you understand Crypto better!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Section -->

            <div class="row">

                <h2 class="h3 font-w600 push-30-t push">Mining Video Series</h2>
                <div id="faq4" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4"
                                   href="#faq4_q1">Bitcoin Mining Video #1
                                </a>
                            </h3>
                        </div>
                        <div id="faq4_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/nQryTXfoNJ0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4"
                                   href="#faq4_q2">Bitcoin Mining Video #2
                                </a>
                            </h3>
                        </div>
                        <div id="faq4_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/lI4dzg_f_-Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payments -->

                <h2 class="h3 font-w600 push-30-t push">Cryptocurrency Intro Video Series</h2>
                <div id="faq4" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3"
                                   href="#faq4_q1">Cryptocurrency Intro Video #1
                                </a>
                            </h3>
                        </div>
                        <div id="faq3_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/L-Qhv8kLESY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4"
                                   href="#faq4_q2">Cryptocurrency Intro Video #2
                                </a>
                            </h3>
                        </div>
                        <div id="faq4_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/SSo_EIwHSd4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payments -->

                <h2 class="h3 font-w600 push-30-t push">Smart Contract Video</h2>
                <div id="faq5" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq5"
                                   href="#faq5_q1">Smart Contract Video #1
                                </a>
                            </h3>
                        </div>
                        <div id="faq5_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/ZE2HxTmxfrI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payments -->

                <h2 class="h3 font-w600 push-30-t push">Monero (XMR) Introduction Video</h2>
                <div id="faq6" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq6"
                                   href="#faq6_q1">Monero Introduction Video #1
                                </a>
                            </h3>
                        </div>
                        <div id="faq6_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/6DQb0cMvU7I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq6"
                                   href="#faq6_q2">How to Create a Monero Wallet
                                </a>
                            </h3>
                        </div>
                        <div id="faq6_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/icBKC_EA8k8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payments -->

                <h2 class="h3 font-w600 push-30-t push">Lightning Network Introduction Video</h2>
                <div id="faq7" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq7"
                                   href="#faq7_q1">Lightning Network Introduction Video #1
                                </a>
                            </h3>
                        </div>
                        <div id="faq7_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/XFUYvLW-0oE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq7"
                                   href="#faq7_q2">Lightning Network Introduction Video #2
                                </a>
                            </h3>
                        </div>
                        <div id="faq7_q2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/7tHD9Gj9UNg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq7"
                                   href="#faq7_q3">Lightning Network Introduction Video #3
                                </a>
                            </h3>
                        </div>
                        <div id="faq7_q3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/k-bXIZOMNyA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq7"
                                   href="#faq7_q4">Lightning Network Introduction Video #4
                                </a>
                            </h3>
                        </div>
                        <div id="faq7_q4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/rrr_zPmEiME" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payments -->


                <h2 class="h3 font-w600 push-30-t push">Bitcoin Fork Video</h2>
                <div id="faq8" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq8"
                                   href="#faq8_q1">Bitcoin Fork Video #1
                                </a>
                            </h3>
                        </div>
                        <div id="faq8_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/XCo6yyutYAM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="h3 font-w600 push-30-t push">Fiat to Bitcoin</h2>
                <div id="faq9" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq9"
                                   href="#faq9_q1">Fiat to Bitcoin Video #1
                                </a>
                            </h3>
                        </div>
                        <div id="faq9_q1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <center><iframe width="854" height="480" src="https://www.youtube.com/embed/dZv6FLX4NRE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body font-s12">
        <div class="content-mini content-mini-full content-boxed clearfix push-15">
            {{--<div class="pull-right">--}}
            {{--Crafted with <i class="fa fa-heart text-city"></i> by--}}
            {{--<a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>--}}
            {{--</div>--}}
            <div class="pull-right">
                <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">CryptoWave</a> &copy; <span
                        class="js-year-copy"></span>
            </div>
            {{--<div class="pull-left">--}}
            {{--<a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">CryptoWave</a> &copy; <span--}}
            {{--class="js-year-copy"></span>--}}
            {{--</div>--}}
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js') }} -->
<script src="{{ asset('oneui/assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/core/jquery.appear.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/core/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/core/js.cookie.min.js') }}"></script>
<script src="{{ asset('oneui/assets/js/app.js') }}"></script>

<!-- Page Plugins -->
{{--<script src="{{ asset('oneui/assets/js/plugins/chartjs/Chart.min.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.0-rc.2/Chart.js"></script>

<!-- Page JS Code -->
{{--<script src="{{ asset('oneui/assets/js/pages/base_pages_dashboard_v2.js') }}"></script>--}}

<!-- Page JS Plugins -->
<script src="{{ asset('oneui/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('oneui/assets/js/pages/base_tables_datatables.js') }}"></script>

<script>

    $("#download-mac-link").on("click", function () {
        window.location.href = "/download/mac/instruction";
    });

    $("#download-windows-link").on("click", function () {
        window.location.href = "/download/windows/instruction";
    });

</script>
</body>
</html>