<!DOCTYPE html>
<!--[if IE 9]>
<html class='ie9 no-focus' lang='en'> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

		<meta name="description"
		      content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
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
	<!-- <link rel="stylesheet" id="css-theme" href="{{ asset('oneui/assets/css/themes/flat.min.css') }}"> -->
		<!-- END Stylesheets -->
	</head>
	<body>
	<!-- Page Container -->
	<!--
		Available Classes:

		'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

		'sidebar-l'                  Left Sidebar and right Side Overlay
		'sidebar-r'                  Right Sidebar and left Side Overlay
		'sidebar-mini'               Mini hoverable Sidebar (> 991px)
		'sidebar-o'                  Visible Sidebar by default (> 991px)
		'sidebar-o-xs'               Visible Sidebar by default (< 992px)

		'side-overlay-hover'         Hoverable Side Overlay (> 991px)
		'side-overlay-o'             Visible Side Overlay by default (> 991px)

		'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

		'header-navbar-fixed'        Enables fixed header
	-->
	<div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">
		<!-- Side Overlay-->
		<aside id="side-overlay">
			<!-- Side Overlay Scroll Container -->
			<div id="side-overlay-scroll">
				<!-- Side Header -->
				<div class="side-header side-content">
					<!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
					<button class="btn btn-default pull-right" type="button" data-toggle="layout"
					        data-action="side_overlay_close">
						<i class="fa fa-times"></i>
					</button>
					<span class="font-w600">John Parker</span>
				</div>
				<!-- END Side Header -->

				<!-- Side Content -->
				<div class="side-content remove-padding-t">
					<!-- Account -->
					<div class="block pull-r-l">
						<div class="block-header bg-gray-lighter">
							<ul class="block-options">
								<li>
									<button type="button" data-toggle="block-option"
									        data-action="content_toggle"></button>
								</li>
							</ul>
							<h3 class="block-title">Account</h3>
						</div>
						<div class="block-content">
							<form class="form-horizontal" action="bd_dashboard.html" method="post"
							      onsubmit="return false;">
								<div class="form-group">
									<div class="col-xs-12">
										<label>Username</label>
										<div class="form-control-static font-w700">johnpar</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12">
										<label for="bd-qsettings-name">Name</label>
										<input class="form-control" type="text" id="bd-qsettings-name"
										       name="bd-qsettings-name" placeholder="Enter your name.."
										       value="John Parker">
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12">
										<label for="bd-qsettings-email">Email</label>
										<input class="form-control" type="email" id="bd-qsettings-email"
										       name="bd-qsettings-email" placeholder="Enter your email.."
										       value="john.parker@example.com">
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12">
										<label for="bd-qsettings-password">New Password</label>
										<input class="form-control" type="password" id="bd-qsettings-password"
										       name="bd-qsettings-new-password" placeholder="Enter a new password..">
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12">
										<label for="bd-qsettings-password2">Confirm New Password</label>
										<input class="form-control" type="password" id="bd-qsettings-password2"
										       name="bd-qsettings-new-password2"
										       placeholder="Confirm your new password..">
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12">
										<button class="btn btn-sm btn-minw btn-rounded btn-primary" type="submit">
											<i class="fa fa-check push-5-r"></i>Update
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- END Account -->

					<!-- Quick Settings -->
					<div class="block pull-r-l">
						<div class="block-header bg-gray-lighter">
							<ul class="block-options">
								<li>
									<button type="button" data-toggle="block-option"
									        data-action="content_toggle"></button>
								</li>
							</ul>
							<h3 class="block-title">Quick Settings</h3>
						</div>
						<div class="block-content">
							<!-- Quick Settings Form -->
							<form class="form-bordered" action="base_pages_dashboard.html" method="post"
							      onsubmit="return false;">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-8">
											<div class="font-s13 font-w600">Online Status</div>
											<div class="font-s13 font-w400 text-muted">Show your status to all</div>
										</div>
										<div class="col-xs-4 text-right">
											<label class="css-input switch switch-sm switch-primary push-10-t">
												<input type="checkbox" checked><span></span>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-8">
											<div class="font-s13 font-w600">Auto Updates</div>
											<div class="font-s13 font-w400 text-muted">Keep up to date</div>
										</div>
										<div class="col-xs-4 text-right">
											<label class="css-input switch switch-sm switch-primary push-10-t">
												<input type="checkbox" checked><span></span>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-8">
											<div class="font-s13 font-w600">Notifications</div>
											<div class="font-s13 font-w400 text-muted">Do you need them?</div>
										</div>
										<div class="col-xs-4 text-right">
											<label class="css-input switch switch-sm switch-primary push-10-t">
												<input type="checkbox"><span></span>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-8">
											<div class="font-s13 font-w600">API Access</div>
											<div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
										</div>
										<div class="col-xs-4 text-right">
											<label class="css-input switch switch-sm switch-primary push-10-t">
												<input type="checkbox"><span></span>
											</label>
										</div>
									</div>
								</div>
							</form>
							<!-- END Quick Settings Form -->
						</div>
					</div>
					<!-- END Quick Settings -->
				</div>
				<!-- END Side Content -->
			</div>
			<!-- END Side Overlay Scroll Container -->
		</aside>
		<!-- END Side Overlay -->

		<!-- Header -->
		<header id="header-navbar">
			<div class="content-mini content-mini-full content-boxed">
				<!-- Header Navigation Right -->
				<ul class="nav-header pull-right">
					<li class="visible-xs">
						<!-- Toggle class helper (for .js') }}-header-search below), functionality initialized in App() -> uiToggleClass() -->
						<button class="btn btn-default" data-toggle="class-toggle" data-target=".js') }}-header-search"
						        data-class="header-search-xs-visible" type="button">
							<i class="fa fa-search"></i>
						</button>
					</li>
					<li>
						<!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
						<button class="btn btn-default btn-image" data-toggle="layout" data-action="side_overlay_toggle"
						        type="button">
							<img src="{{ asset('oneui/assets/img/avatars/avatar9.jpg') }}" alt="Avatar">
							<i class="fa fa-ellipsis-v"></i>
						</button>
					</li>
				</ul>
				<!-- END Header Navigation Right -->

				<!-- Header Navigation Left -->
				<ul class="nav-header pull-left">
					<li class="header-content">
						<a class="h5" href="/">
							{{--<i class="fa fa-circle-o-notch text-primary"></i> --}}
							<span class="h4 font-w600 text-primary-dark">CryptoMiner</span>
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
							<a href="/">
								<i class="fa fa-dashboard push-5-r"></i>Dashboard
							</a>
						</li>
						{{--<li>--}}
							{{--<a href="/wallet">--}}
								{{--<i class="si si-wallet push-5-r"></i>Wallet--}}
							{{--</a>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<a href="/referrals">--}}
								{{--<i class="fa fa-users push-5-r"></i>Referrals--}}
							{{--</a>--}}
						{{--</li>--}}
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
				     style="background-image: url('{{ asset('oneui/assets/img/photos/photo29@2x.jpg') }}');">
					<div class="bg-black-op">
						<div class="content">
							<div class="block block-transparent block-themed text-center">
								<div class="block-content">
									<h1 class="h1 font-w700 text-white animated fadeInDown push-5">Dashboard</h1>
									<h2 class="h4 font-w400 text-white-op animated fadeInUp">Welcome
									                                                         back, {{ Auth::user()->name }}</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END Section -->

				<!-- Stats -->
				<div class="row text-uppercase">
					<div class="col-xs-6 col-sm-3">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-wallet"></i> Wallet</small>
								</div>
								<div class="font-s12 font-w700">Current Balance </div>
								<a class="h2 font-w300 text-primary" href="#!" >{{ $sgd_earned }}</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-users"></i> Today</small>
								</div>
								<div class="font-s12 font-w700">New Referrals</div>
								<a class="h2 font-w300 text-primary" href="#" data-toggle="countTo" data-to="{{ $new_referral_count }}"></a>
							</div>
						</div>
					</div>
					@if (!empty($referrer))
						<div class="col-xs-12 col-sm-6">
							<div class="block block-rounded">
								<div class="block-content block-content-full">
									<div class="text-muted">
										<small><i class="si si-calendar"></i> Referrer</small>
									</div>
									<div class="font-s12 font-w700">You were referred by</div>
									<a class="h2 font-w300 text-primary"
									   href="#">
										{{ $referrer->name }}, {{ $referrer->email }}
									</a>
								</div>
							</div>
						</div>
					@endif
				</div>
				<!-- END Stats -->

				<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-success">
							<p><i class="fa fa-check"></i> Refer a friend now with the referral link <a>http://174.138.31.231/register?ref={{ Auth::user()->tracking_code }}</a></p>
						</div>
					</div>
				</div>

				<!-- Charts -->
				<div class="row">
					<div class="col-md-6">
						<div class="block block-rounded block-opt-refresh-icon8">
							<div class="block-header">
								<ul class="block-options">
									<li>
										<button type="button" data-toggle="block-option" data-action="refresh_toggle"
										        data-action-mode="demo"><i class="si si-refresh"></i></button>
									</li>
								</ul>
								<h3 class="block-title">Coins Mined</h3>
							</div>
							<div class="block-content block-content-full bg-gray-lighter text-center">
								<!-- Chart.js') }} Charts (initialized in js/pages/base_pages_dashboard_v2.js') }}), for more examples you can check out http://www.chartjs.org/docs/ -->
								<div style="height: 320px;">
									<canvas class="js-dash-chartjs-earnings"></canvas>
								</div>
							</div>
							<div class="block-content text-center">
								<div class="row items-push-2x text-center push-20-t">
									<div class="col-xs-6 col-lg-3">
										<div class="push-15"><i class="fa fa-bank fa-2x"></i></div>
										<div class="h5 text-muted">$148,000</div>
									</div>
									<div class="col-xs-6 col-lg-3">
										<div class="push-15"><i class="fa fa-angle-double-up fa-2x"></i></div>
										<div class="h5 text-muted">+9% Earnings</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block block-rounded block-opt-refresh-icon8">
							<div class="block-header">
								<ul class="block-options">
									<li>
										<button type="button" data-toggle="block-option" data-action="refresh_toggle"
										        data-action-mode="demo"><i class="si si-refresh"></i></button>
									</li>
								</ul>
								<h3 class="block-title">Recent Referrals</h3>
							</div>
							<div class="block-content bg-white-op text-center">
								<!-- Chart.js') }} Charts (initialized in js/pages/base_pages_dashboard_v2.js') }}), for more examples you can check out http://www.chartjs.org/docs/ -->
								<div>
									<table class="table table-bordered table-striped js-dataTable-full">
										<thead>
										<tr>
											<th class="text-center"></th>
											<th class="text-center">Name</th>
											<th class="hidden-xs text-center">Email</th>
											<th class="hidden-xs text-center" style="width: 15%;"></th>
										</tr>
										</thead>
										<tbody>

										@foreach ($referrals as $referral)

											<tr>
												<td class="text-center">1</td>
												<td class="font-w600 text-center">{{ $referral->name }}</td>
												<td class="hidden-xs">{{ $referral->email }}</td>
												<td class="hidden-xs">
													<span class="label label-info">Tier 1 (Direct)</span>
												</td>

											</tr>

										@endforeach

										@foreach ($secondary_referrals as $referral)

											<tr>
												<td class="text-center">1</td>
												<td class="font-w600 text-center">{{ $referral->name }}</td>
												<td class="hidden-xs">{{ $referral->email }}</td>
												<td class="hidden-xs">
													<span class="label label-info">Tier 2 (By your Affiliate)</span>
												</td>

											</tr>

										@endforeach

										</tbody>
									</table>
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
				<div class="pull-right">
					Crafted with <i class="fa fa-heart text-city"></i> by
					<a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
				</div>
				<div class="pull-left">
					<a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.1</a> &copy; <span
							class="js-year-copy"></span>
				</div>
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
	<script src="{{ asset('oneui/assets/js/pages/base_pages_dashboard_v2.js') }}"></script>

	<!-- Page JS Plugins -->
	<script src="{{ asset('oneui/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

	<!-- Page JS Code -->
	<script src="{{ asset('oneui/assets/js/pages/base_tables_datatables.js') }}"></script>

	<script>
        jQuery(function () {
            // Init page helpers (CountTo plugin)
            App.initHelpers('appear-countTo');
        });
	</script>
	</body>
</html>