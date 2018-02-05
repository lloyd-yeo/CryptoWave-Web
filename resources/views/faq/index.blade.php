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

						<li>
							{{--<a href="/download" download>--}}
							<a id="download-mac-link" href="/download/mac" target="_blank">
								<i class="fa fa-cloud-download push-5-r"></i>Download Mac Miner
							</a>
						</li>

						<li class="active">
							{{--<a href="/download" download>--}}
							<a href="/faq">
								<i class="fa fa-question-circle push-5-r"></i>CryptoWave FAQ
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
									<h1 class="h1 font-w700 text-white animated fadeInDown push-5">CryptoWave FAQ</h1>
									<h2 class="h4 font-w400 text-white-op animated fadeInUp">Get the answers below!</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END Section -->

				<div class="content content-boxed">
					<!-- Frequently Asked Questions -->
					<div class="block">
						<div class="block-content block-content-full block-content-narrow">
							<!-- Introduction -->
							<h2 class="h3 font-w600 push-30-t push">Introduction</h2>
							<div id="faq1" class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1">Welcome to our service!</a>
										</h3>
									</div>
									<div id="faq1_q1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2">Who are we?</a>
										</h3>
									</div>
									<div id="faq1_q2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3">What are our values?</a>
										</h3>
									</div>
									<div id="faq1_q3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- END Introduction -->

							<!-- Functionality -->
							<h2 class="h3 font-w600 push-50-t push">Functionality</h2>
							<div id="faq2" class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1">What are the key features?</a>
										</h3>
									</div>
									<div id="faq2_q1" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2">Does your App support mobile devices?</a>
										</h3>
									</div>
									<div id="faq2_q2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3">Why should I choose your service?</a>
										</h3>
									</div>
									<div id="faq2_q3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4">Is my data secure?</a>
										</h3>
									</div>
									<div id="faq2_q4" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- END Functionality -->

							<!-- Payments -->
							<h2 class="h3 font-w600 push-50-t push">Payments</h2>
							<div id="faq3" class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1">Is there any free plan?</a>
										</h3>
									</div>
									<div id="faq3_q1" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q2">What are the available payment options?</a>
										</h3>
									</div>
									<div id="faq3_q2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q3">Can multiple people use my account?</a>
										</h3>
									</div>
									<div id="faq3_q3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
											<p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- END Payments -->

							<!-- Contact Form -->
							<h2 class="h3 font-w600 push-50-t push">Do you have any further questions?</h2>
							<div id="faq4" class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4" href="#faq4_q1"><i class="fa fa-envelope-o"></i> Contact Us</a>
										</h3>
									</div>
									<div id="faq4_q1" class="panel-collapse collapse in">
										<div class="panel-body">
											<form class="form-horizontal push-10-t" action="base_pages_faq.html" method="post" onsubmit="return false;">
												<div class="form-group">
													<div class="col-xs-6 col-sm-4">
														<div class="form-material form-material-primary">
															<input class="form-control" type="text" id="faq-contact-firstname" name="faq-contact-firstname" placeholder="Enter your firstname..">
															<label for="faq-contact-firstname">Firstname</label>
														</div>
													</div>
													<div class="col-xs-6 col-sm-4">
														<div class="form-material form-material-primary">
															<input class="form-control" type="text" id="faq-contact-lastname" name="faq-contact-lastname" placeholder="Enter your lastname..">
															<label for="faq-contact-lastname">Lastname</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-8">
														<div class="form-material form-material-primary input-group">
															<input class="form-control" type="email" id="faq-contact-email" name="faq-contact-email" placeholder="Enter your email..">
															<label for="faq-contact-email">Email</label>
															<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-4">
														<div class="form-material form-material-primary">
															<select class="form-control" id="faq-contact-subject" name="faq-contact-subject" size="1">
																<option value="1">Support</option>
																<option value="2">Billing</option>
																<option value="3">Management</option>
																<option value="4">Feature Request</option>
															</select>
															<label for="faq-contact-subject">Where?</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-xs-12">
														<div class="form-material form-material-primary">
															<textarea class="form-control" id="faq-contact-msg" name="faq-contact-msg" rows="7" placeholder="Enter your message.."></textarea>
															<label for="faq-contact-msg">Message</label>
														</div>
														<div class="help-block text-right">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
													</div>
												</div>
												<div class="form-group remove-margin-b">
													<div class="col-xs-12">
														<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-send push-5-r"></i> Send Message</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- END Contact Form -->
						</div>
					</div>
					<!-- END Frequently Asked Questions -->
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
	<script src="{{ asset('oneui/assets/js/plugins/chartjs/Chart.min.js') }}"></script>

	<!-- Page JS Code -->
	{{--<script src="{{ asset('oneui/assets/js/pages/base_pages_dashboard_v2.js') }}"></script>--}}

	<!-- Page JS Plugins -->
	<script src="{{ asset('oneui/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

	</body>
</html>