<!DOCTYPE html>
<!--[if IE 9]>
<html class='ie9 no-focus' lang='en'> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title>CryptoWave</title>

		<meta name="description"
		      content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
		<meta name="author" content="pixelcave">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Icons -->
		<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
		{{--<link rel="shortcut icon" href="{{ asset('oneui/assets/img/favicons/favicon.png') }}">--}}

		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-16x16.png') }}"--}}
		{{--sizes="16x16">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-32x32.png') }}"--}}
		{{--sizes="32x32">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-96x96.png') }}"--}}
		{{--sizes="96x96">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-160x160.png') }}"--}}
		{{--sizes="160x160">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-192x192.png') }}"--}}
		{{--sizes="192x192">--}}

		<link rel="shortcut icon" href="{{ asset('stack/img/logo.png') }}">

		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="16x16">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="32x32">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="96x96">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="160x160">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
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
						<li>
							<a href="/home">
								<i class="fa fa-dashboard push-5-r"></i>Dashboard
							</a>
						</li>
						<li>
							{{--<a href="/download" download>--}}
							<a href="/download" target="_blank">
								<i class="fa fa-cloud-download push-5-r"></i>Download Windows Miner
							</a>
						</li>

						<li class="active">
							{{--<a href="/download" download>--}}
							<a id="download-mac-link" href="/download/mac" target="_blank">
								<i class="fa fa-cloud-download push-5-r"></i>Download Mac Miner
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
									<h1 class="h1 font-w700 text-white animated fadeInDown push-5">Mac Miner
									                                                               Installer</h1>
									<h2 class="h4 font-w400 text-white-op animated fadeInUp">Instructions</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END Section -->

				<!-- Charts -->
				<div class="row">
					<div class="col-md-12 col-sm-12 ">
						<div class="block block-rounded block-opt-refresh-icon8">
							<div class="block-header">
								<ul class="block-options">
									<li>
									</li>
								</ul>
								<h3 class="block-title">Step by step</h3>
							</div>
							<div class="block-content block-content-full bg-gray-lighter text-center">
								<div style="height: 2000px; overflow-x: auto;">
									<blockquote style="text-align:left;">
										<p>1. Locate the file you've downloaded, it's called "CryptoWave-Mac.zip".
											<br/>
											<span style="font-size: 12px;">you might receive this false positive:</span>
											<br/>
											<img src="/cryptowave-dangerous-keep.png" style="height: 100px;">
											<br/><br/>
											<span style="font-size: 12px;">if you are on Chrome, it should be on the bottom-left corner:</span>
										</p>
										<img src="/cryptowave-locate.png" style="height: 100px;">
									</blockquote>

									<blockquote style="text-align:left;">
										<p>2. Once you've located it, unzip the file by double-clicking on
										   "CryptoWave-Mac.zip". Open the unzipped cryptowave folder.
											<br/>
											<span style="font-size: 12px;">you should get this folder after unzipping:</span>
										</p>
										<img src="/cryptowave-unzip.png" style="height: 100px;">
										<br/>
										<br/>
										<span style="font-size: 12px;">go in the folder & you should see these files inside:</span>
										<br/>
										<br/>
										<img src="/crypto-list.png" style="height: 400px;">
									</blockquote>

									<blockquote style="text-align:left;">
										<p>3. Double click on the "cryptowave-install" file.
											<br/>
											<span style="font-size: 12px;">a terminal window should pop-up, watch the video below to continue</span>
										</p>
										<img src="/cryptowave-install-click.png" style="height: 400px;">
									</blockquote>

									<blockquote style="text-align:left;">
										<p>4. Watch & follow the steps in the video below:
											<br/>
											<span style="font-size: 12px;"><b>NOTE:</b> the password to use is the one used to login your Mac</span>
										</p>
										<object width="1000" height="560">
											<param name="movie"
											       value="http://www.youtube.com/v/xqIiJ8m7noI&hl=en&fs=1"></param>
											<param name="allowFullScreen" value="true"></param>
											<embed src="http://www.youtube.com/v/xqIiJ8m7noI&hl=en&fs=1"
											       type="application/x-shockwave-flash" allowfullscreen="true"
											       width="425" height="344"></embed>
										</object>
									</blockquote>

								</div>
							</div>
							<div class="block-content text-center">
								<div class="row items-push-2x text-center push-20-t">
									<div class="col-xs-6 col-lg-3">
										{{--<div class="push-15"><i class="fa fa-bank fa-2x"></i></div>--}}
										{{--<div class="h5 text-muted">${{ $sgd_earned }}</div>--}}
									</div>
									<div class="col-xs-6 col-lg-3">
										{{--<div class="push-15"><i class="fa fa-angle-double-up fa-2x"></i></div>--}}
										{{--<div class="h5 text-muted">+9% Earnings</div>--}}
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- END Charts -->
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
	<script src="{{ asset('oneui/assets/js/plugins/chartjs/Chart.min.js') }}"></script>

	<!-- Page JS Code -->
	{{--<script src="{{ asset('oneui/assets/js/pages/base_pages_dashboard_v2.js') }}"></script>--}}

	<!-- Page JS Plugins -->
	<script src="{{ asset('oneui/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

	</body>
</html>