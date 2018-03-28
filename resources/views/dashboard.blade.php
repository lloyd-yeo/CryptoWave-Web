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
									<h1 class="h1 font-w700 text-white animated fadeInDown push-5">Dashboard</h1>
									<h2 class="h4 font-w400 text-white-op animated fadeInUp">Welcome
										@if ($first_login == 1)
										                                                     back
										@endif
									                                                         , {{ Auth::user()->name }}</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END Section -->

				<div class="row text-uppercase">
					<div class="col-xs-4 col-sm-4">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-wallet"></i> Personal Stash</small>
								</div>
								<div class="font-s12 font-w700">Lifetime</div>
								<a class="h2 font-w300 text-primary" href="#!">{{ $total_stash }} XMR</a>
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-wallet"></i> Affiliate Stash</small>
								</div>
								<div class="font-s12 font-w700">Lifetime</div>
								<a class="h2 font-w300 text-primary" href="#!">{{ 0.2 * $total_affiliate_xmr }} XMR</a>
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-wallet"></i> Total Stash</small>
								</div>
								<div class="font-s12 font-w700">Lifetime</div>
								<a class="h2 font-w300 text-primary" href="#!">{{ $total_stash + (0.2 * $total_affiliate_xmr) }} XMR</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Stats -->
				<div class="row text-uppercase">
					<div class="col-xs-6 col-sm-4">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-wallet"></i> My Stash</small>
								</div>
								<div class="font-s12 font-w700">Current Balance (Available)</div>
								<a class="h2 font-w300 text-primary" href="#!">{{ $total_stash + (0.2 * $total_affiliate_xmr) }} XMR</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-users"></i> New Referrals</small>
								</div>
								<div class="font-s12 font-w700">This Month</div>
								<a class="h2 font-w300 text-primary" href="#" data-toggle="countTo"
								   data-to="{{ $new_referral_count }}"></a>
							</div>
						</div>
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-graph"></i> My Hashpower</small>
								</div>
								<div class="font-s12 font-w700">LIFETIME CONTRIBUTION</div>
								<a class="h2 font-w300 text-primary"
								   href="#">
									{{ number_format(Auth::user()->lifetimeHashpower()) }} hash
								</a>
							</div>
						</div>
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="block block-rounded">
							<div class="block-content block-content-full">
								<div class="text-muted">
									<small><i class="si si-graph"></i> My Hashpower Gain</small>
								</div>
								<div class="font-s12 font-w700">PAST HOUR</div>
								<a class="h2 font-w300 text-primary"
								   href="#">
									@if ($hashpower_gain >= 0)
										<i class="fa fa-arrow-up" style="color:#4BB543;"></i>
									@else
										<i class="fa fa-arrow-down" style="color:red;"></i>
									@endif
									{{ $hashpower_gain }} hash
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- END Stats -->

				<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-danger">
							<p><i class="fa fa-warning"></i> <b>NOTE:</b> For users that have registered for our very
							                                              first Beta at Hustle.
							                                              We have officially launched new miners!
							                                              Please remember to make the switch by
							                                              downloading the new miner above.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-warning">
							<p><i class="fa fa-warning"></i> Take note that you will need at least a minimum of 0.1 XMR
							                                 to
							                                 make any withdrawal.
							                                 This is due to transaction fees from transferring between
							                                 wallets.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-success">
							<p><i class="fa fa-check"></i> Refer a friend now with the referral link
								<a>http://cryptowave.network/register?ref={{ Auth::user()->tracking_code }}</a>
							</p>
						</div>
					</div>
				</div>

				<!-- Charts -->
				<div class="row">
					<div class="col-md-12 col-sm-12 ">
						<div class="block block-rounded block-opt-refresh-icon8">
							<div class="block-header">
								<ul class="block-options">
									<li>
										<button type="button" data-toggle="block-option" data-action="refresh_toggle"
										        data-action-mode="demo"><i class="si si-refresh"></i></button>
									</li>
								</ul>
								<h3 class="block-title">Recent Hashspeed</h3>
							</div>
							<div class="block-content block-content-full bg-gray-lighter text-center">
								<div style="height: 400px; position: relative;">
									<canvas class="js-dash-chartjs-earnings" id="hashpower-gain-chart"></canvas>
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

					<div class="col-md-12 col-sm-12" style="height: 600px;">
						@include('ranking')
					</div>

					<div class="col-md-12 col-sm-12">
						<div class="row text-uppercase">
							<div class="col-xs-6 col-sm-4">
								<div class="block block-rounded">
									<div class="block-content block-content-full">
										<div class="text-muted">
											<small><i class="si si-wallet"></i> Stash</small>
										</div>
										<div class="font-s12 font-w700">Tier 1 Earnings</div>
										<a class="h2 font-w300 text-primary" href="#!">{{ 0.15 * $total_affiliate_xmr }} XMR</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-4">
								<div class="block block-rounded">
									<div class="block-content block-content-full">
										<div class="text-muted">
											<small><i class="si si-wallet"></i> Stash</small>
										</div>
										<div class="font-s12 font-w700">Tier 2 Earnings</div>
										<a class="h2 font-w300 text-primary" href="#!">{{ 0.05 * $total_affiliate_xmr }} XMR</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-4">
								<div class="block block-rounded">
									<div class="block-content block-content-full">
										<div class="text-muted">
											<small><i class="si si-wallet"></i> Stash</small>
										</div>
										<div class="font-s12 font-w700">Total Earnings</div>
										<a class="h2 font-w300 text-primary" href="#!">{{ 0.2 * $total_affiliate_xmr }} XMR</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">

						@if (!empty($referrer))
							<div>
								<div class="col-xs-12 col-sm-12">
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
							</div>
						@endif

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
											<th class="text-center">Lifetime Hashpower Contributed</th>
											<th class="hidden-xs text-center" style="width: 15%;"></th>
										</tr>
										</thead>
										<tbody>

										@foreach ($referrals as $referral)

											<tr>
												<td class="text-center">1</td>
												<td class="font-w600 text-center">{{ $referral->name }}</td>
												<td class="hidden-xs">{{ $referral->email }}</td>
												<td class="hidden-xs">{{ $referral->lifetimeHashpower() }}</td>
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
												<td class="hidden-xs">{{ $referral->lifetimeHashpower() }}</td>
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

		var $dashChartEarnings;

        $("#download-mac-link").on("click", function () {
            window.location.href = "/download/mac/instruction";
        });

        $("#download-windows-link").on("click", function () {
            window.location.href = "/download/windows/instruction";
        });


        var canvas = document.getElementById('hashpower-gain-chart'),
            ctx = canvas.getContext('2d'),
            startingData = {
                labels: [@foreach ($stats_chart as $stats)
					@if ($loop->first)
					{!! $stats["hour"]  !!}
					@else
                    ,{!! $stats["hour"]  !!}
					@endif
					@endforeach],
                datasets: [
                    {
                        label: 'Hash Speed',
                        fillColor: 'rgba(48,173,194, .55)',
                        strokeColor: 'rgba(68, 180, 166, .55)',
                        pointColor: '#0B5B9C',
                        pointStrokeColor: '#fff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(68, 180, 166, 1)',
                        data: [
							@foreach ($stats_chart as $stats)
							@if ($loop->first)
							{!! $stats["hash"] !!}
							@else
                            , {!! $stats["hash"] !!}
							@endif
							@endforeach
                        ]
                    }
                ]
            };

        var myLiveChart = new Chart(ctx,{
            type: 'line',

            options: {
                maintainAspectRatio: false,
                scaleFontFamily: "'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif",
                scaleFontColor: '#999',
                scaleFontStyle: '600',
                tooltipTitleFontFamily: "'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif",
                tooltipCornerRadius: 3,
                responsive: true,
            },

            data: startingData
        });

        jQuery(function () {
            // Init page helpers (CountTo plugin)
//            BasePagesDashboardv2.init();
            App.initHelpers('appear-countTo');

            console.log('This user commands a total of ' + {{ $total_hashpower }} +' hash over the lifetime.');
        });

        setInterval(
            function () {
                console.log(myLiveChart);
                var jqxhr = $.get("/poll/hashspeed",
                    {}
                    , function (data) {
                        console.log(data);
                        if (data.success) {

                            var indexToUpdate = myLiveChart.data.datasets[0].data.length;
                            console.log(indexToUpdate);

                            // Update one of the points in the second dataset
                            myLiveChart.data.datasets[0].data[indexToUpdate] = data.hash_speed;
                            myLiveChart.data.labels[indexToUpdate] = data.date;
                            myLiveChart.update();

                            console.log(myLiveChart);
                        } else {
                            console.log("FAILED");
                        }
                    }, "json");
            }, 10000
        );

	</script>
	</body>
</html>