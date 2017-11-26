<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>UniWave</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Site Description Here">
		<link href="stack/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/stack-interface.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/socicon.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/flickity.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/iconsmind.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="stack/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i"
		      rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body class=" ">
	<a id="start"></a>
	<div class="nav-container ">
		<nav class="bar bar-4 bar--transparent bar--absolute" data-fixed-at="200">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-4 col-xs-offset-4">
						<div class="bar__module">
							<a href="/">
								<img class="logo logo-dark" alt="logo" src="stack/img/logo.png"/>
								<img class="logo logo-light" alt="logo" src="stack/img/logo.png"/>
							</a>
						</div>
						<!--end module-->
					</div>
					<div class="col-md-4 col-md-offset-0 col-sm-5 col-sm-offset-0 col-xs-8 col-xs-offset-2">
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
		<section class="imageblock switchable feature-large height-100 ">
			<div class="imageblock__content col-md-6 col-sm-4 pos-right" data-overlay="1">
				<div class="background-image-holder">
					<img alt="image" src="stack/img/inner-9.jpg"/>
				</div>
				<div class="modal-instance">
					<div class="video-play-icon modal-trigger"></div>
					<div class="modal-container">
						<div class="modal-content bg-dark" data-width="60%" data-height="60%">
							<iframe data-src="https://www.youtube.com/embed/GmOzih6I1zs?autoplay=1"
							        allowfullscreen="allowfullscreen"></iframe>
						</div>
						<!--end of modal-content-->
					</div>
					<!--end of modal-container-->
				</div>
				<!--end of modal instance-->
			</div>
			<div class="container pos-vertical-center">
				<div class="row">
					<div class="col-md-5 col-sm-7">
						<h1>UniWave™ Registration</h1>
						<p class="lead">
							Almost there!
							<br/>You are just one step away from using your personal computer to mine!
							<br/>Just fill out your details below & get access now to UniWave™
						</p>
						<div class="bg--secondary boxed boxed--border">
							<form method="POST" action="{{ route('register') }}">
								<input type="hidden" value="{{ Cookie::get('referral') }}" name="referral-cookie"/>
								{{ csrf_field() }}

								<h6 class="type--uppercase">UniWave™ Account Details</h6>
								<input class="validate-required" type="text" name="name" placeholder="Your Name"/>

								@if ($errors->has('name'))
									<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif

								<input class="validate-required validate-email" type="email" name="email" placeholder="Email Address"/>

								@if ($errors->has('email'))
									<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif

								<input id="password" type="password" class="form-control" name="password" required
								       placeholder="Password">

								@if ($errors->has('password'))
									<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif

								<input id="password-confirm" type="password" class="form-control"
								       name="password_confirmation" required placeholder="Confirm Password">

								<button type="submit" class="btn btn--primary type--uppercase">Register</button>
							</form>
						</div>
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
	</body>
</html>