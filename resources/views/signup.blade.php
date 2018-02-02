<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CryptoWave</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Site Description Here">

		<!-- Icons -->
		<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
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

		<link href="stack/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/theme.css" rel="stylesheet" type="text/css" media="all" />
		<link href="stack/css/custom.css" rel="stylesheet" type="text/css" media="all" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body class=" ">
	<a id="start"></a>
	<!--end of notification-->
	<div class="nav-container ">
		<div class="bar bar--sm visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-xs-3 col-sm-2">
						<a href="/">
							<img class="logo logo-dark" alt="logo" src="stack/img/logo.png" />
							<img class="logo logo-light" alt="logo" src="stack/img/logo.png" />
						</a>
					</div>
					<div class="col-xs-9 col-sm-10 text-right">
						<a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
							<i class="icon icon--sm stack-interface stack-menu"></i>
						</a>
					</div>
				</div>
				<!--end of row-->
			</div>
			<!--end of container-->
		</div>
		<!--end bar-->
		<nav id="menu1" class="bar bar--sm bar-1 hidden-xs ">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-sm-2 hidden-xs">
						<div class="bar__module">
							<a href="/">
								<img class="logo logo-dark" alt="logo here" src="stack/img/logo.png" />
								<img class="logo logo-light" alt="logo here" src="stack/img/logo.png" />
							</a>
						</div>
						<!--end module-->
					</div>
					<div class="col-md-11 col-sm-12 text-right text-left-xs text-left-sm">
						<div class="bar__module">
						</div>
						<!--end module-->
						<div class="bar__module">

						</div>
						<!--end module-->
					</div>
				</div>
				<!--end of row-->
			</div>
			<!--end of container-->
		</nav>
		<!--end bar-->
	</div>
	<div class="main-container">
		<section class="text-center" style="padding-top: 3.42857143em; padding-bottom: 3.42857143em;">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-md-8">
						<h1>CryptoWave Signup</h1>
						<p class="lead">
							We currently have only <span style="font-weight: 900;">{{ $registration_qty }}</span> slots left!<br/>Sign up now and use our software to start mining cryptocurrencies.
						</p>
					</div>
				</div>
				<!--end of row-->
			</div>
			<!--end of container-->
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="pricing pricing-1 boxed boxed--border boxed--lg text-center">
							<h4>CryptoWave™ Software</h4>
							<span class="h1">
                                    <span class="pricing__dollar">$</span>49<span style="font-size:13px;">/mth</span></span>
							<img alt="Image" src="stack/img/mining-tmp-logo.png" style="width:25%;" />
							<p style="margin-bottom: 3.85714286em;">
								For $49/mth, get the revolutionary CryptoWave™. Our software enables you to start mining from your personal laptops/desktops simply by leaving it on
								while you are not using it!
							</p>
							<span class="label">Value</span>
							<a class="btn btn--primary" href="#">
                                    <span class="btn__text">
                                        Purchase Now
                                    </span>
							</a>
						</div>
						<!--end pricing-->
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="pricing pricing-1 boxed boxed--border boxed--lg text-center">
							<h4>CryptoWave Referral</h4>
							<span class="h1">
                                    <span class="pricing__dollar">$</span>0<span style="font-size:13px;">/FREE</span></span>
							<img alt="Image" src="stack/img/mining-tmp-logo.png" style="width:25%;" />
							<p style="margin-bottom: 1em;">
								Got referred by a member who is a part of the exclusive CryptoWave™ beta?
								Simply type in their email & referral code below to sign up!
							</p>
							<form method="POST" action="/validate/referral" id="referral-form">
								{{ csrf_field() }}
							<div class="input-icon" style="margin-bottom: 1em;">
								<i class="material-icons">email</i>
								<input type="text" name="email" placeholder="Enter member's email" />
							</div>
							<div class="input-icon" style="margin-bottom: 3em;">
								<i class="material-icons">code</i>
								<input type="text" name="referral_code" placeholder="Enter referral code" />
							</div>
							</form>
							<a id="referral-register-link" class="btn btn--primary" href="/register">
                                    <span class="btn__text">
                                        Sign Up!
                                    </span>
							</a>
						</div>
						<!--end pricing-->
						@if (Session::has('error'))
							<a id="error-link" class="btn block" href="#" data-notification-link="cookies-1" style="display:none;">
                                <span class="btn__text">
                                    Cookies Notice
                                </span>
							</a>
							<div class="notification pos-right pos-bottom col-xs-6" data-animation="from-right" data-notification-link="cookies-1">
								<div class="boxed boxed--border bg--dark border--round">
                                    <span><b>Oops!</b> {{ Session::get('error') }}
                                    </span>
								</div>
							</div>
						@endif
					</div>
				</div>
				<!--end of row-->
			</div>
			<!--end of container-->
		</section>
	</div>
	<!--<div class="loader"></div>-->
	<a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
		<i class="stack-interface stack-up-open-big"></i>
	</a>
	<script src="stack/js/jquery-3.1.1.min.js"></script>
	<script src="stack/js/flickity.min.js"></script>
	<script src="stack/js/easypiechart.min.js"></script>
	<script src="stack/js/parallax.js"></script>
	<script src="stack/js/typed.min.js"></script>
	<script src="stack/js/datepicker.js"></script>
	<script src="stack/js/isotope.min.js"></script>
	<script src="stack/js/ytplayer.min.js"></script>
	<script src="stack/js/lightbox.min.js"></script>
	<script src="stack/js/granim.min.js"></script>
	<script src="stack/js/jquery.steps.min.js"></script>
	<script src="stack/js/countdown.min.js"></script>
	<script src="stack/js/twitterfetcher.min.js"></script>
	<script src="stack/js/spectragram.min.js"></script>
	<script src="stack/js/smooth-scroll.min.js"></script>
	<script src="stack/js/scripts.js"></script>
	<script>
        jQuery(function () {
            $("#referral-register-link").on("click", function(e){
                e.preventDefault();
                $("#referral-form").submit();
            });

	        @if (Session::has('error'))
				$("#error-link").click();
	        @endif
        });
	</script>
	</body>
</html>