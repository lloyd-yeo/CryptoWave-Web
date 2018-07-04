<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

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

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="canvas/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="canvas/style.css" type="text/css" />
    <link rel="stylesheet" href="canvas/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="canvas/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="canvas/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="canvas/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="canvas/css/colors.css" type="text/css" />

    <link rel="stylesheet" href="canvas/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Login | CryptoWave</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap nopadding">

            {{--<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('canvas/images/parallax/home/1.jpg') center center no-repeat; background-size: cover;"></div>--}}
            <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('https://images.clickfunnels.com/images/blue-geo.png') center center no-repeat; background-size: cover;"></div>

            <div class="section nobg full-screen nopadding nomargin">
                <div class="container-fluid vertical-middle divcenter clearfix">

                    {{--<div class="center">--}}
                        {{--<a href="canvas/index.html"><img style="width: 50px; margin-bottom: 20px;" src="https://images.clickfunnels.com/0f/a6e3602c6311e8825da7f1169408c7/uniwave-logo.png"--}}
                                                         {{--alt="Uniwave Logo"></a>--}}
                    {{--</div>--}}

                    <div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.90);">
                        <div class="center">
                            <a href="canvas/index.html"><img style="width: 50px; margin-top: 50px; margin-bottom:5px;" src="https://images.clickfunnels.com/0f/a6e3602c6311e8825da7f1169408c7/uniwave-logo.png"
                                                             alt="Uniwave Logo"></a>
                            <h4>CryptoWave</h4>
                        </div>
                        <div class="card-body" style="padding: 40px; padding-top:10px;">
                            <form id="login-form" name="login-form" class="nobottommargin" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <h3>Login to your Account</h3>

                                <div class="col_full">
                                    <label for="login-form-username">Email:</label>
                                    <input type="text" id="login-form-username" name="email" value="{{ old('email') }}" class="form-control not-dark" />
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">Password:</label>
                                    <input type="password" id="login-form-password" name="password" value="" class="form-control not-dark" />
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    <a href="{{ route('password.request') }}" class="fright">Forgot Password?</a>
                                </div>
                            </form>

                            <div class="line line-sm"></div>

                            <div class="center">
                                <h4 style="margin-bottom: 15px;">Not a User?</h4>
                                <a href="/registeralt" class="button button-rounded">Register Now</a>
                                {{--<a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>--}}
                                {{--<span class="d-none d-md-block">or</span>--}}
                                {{--<a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>--}}
                            </div>
                        </div>
                    </div>

                    {{--<div class="center dark"><small>Copyrights &copy; All Rights Reserved by Canvas Inc.</small></div>--}}

                </div>
            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="canvas/js/jquery.js"></script>
<script src="canvas/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="canvas/js/functions.js"></script>

</body>
</html>