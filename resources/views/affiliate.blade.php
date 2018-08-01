<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="canvas/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="canvas/css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="canvas/style.css" type="text/css"/>
    <link rel="stylesheet" href="canvas/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="canvas/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="canvas/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="canvas/css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="canvas/css/colors.css" type="text/css"/>

    <link rel="stylesheet" href="canvas/css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Learn | CryptoWave</title>
</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header floating-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="dashboard-alt" class="standard-logo" data-dark-logo="images/logo-dark.png">
                        <img style="padding-top: 10px; padding-bottom:10px;"
                             src="https://images.clickfunnels.com/0f/a6e3602c6311e8825da7f1169408c7/uniwave-logo.png"
                             alt="Uniwave Logo"></a>
                    <a href="dashboard-alt" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">
                        <img style="padding-top: 10px; padding-bottom:10px;"
                             src="https://images.clickfunnels.com/0f/a6e3602c6311e8825da7f1169408c7/uniwave-logo.png"
                             alt="Uniwave Logo"></a>
                </div><!-- #logo end -->

                @include('layouts.nav')

            </div>

        </div>

    </header><!-- #header end -->

    <section id="slider" class="slider-element slider-parallax clearfix"
             style="background: url('https://images.clickfunnels.com/images/blue-geo.png') no-repeat center center fixed; background-size: cover; ">

        <div class="section parallax parallax-bg nomargin notopborder" data-rellax-speed="2"
             style="background: url('images/parallax/3.jpg') center center; padding: 100px 0;"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -200px;">
            <div class="container-fluid center clearfix" style="padding-top: 100px;">

                <div class="heading-block">
                    <h2 style="font-size: 64px; color:white; line-height: 70px;">SHARE</h2>
                    <span style="color:white;">Spread the movement!</span>
                    <div class="clear"></div>
                </div>

                <div style="height: 10000px;">
                    <div class="promo promo-center bottommargin" style="padding-top: 0;">
                        <h3 style="color:white;">
                            <i class="fa fa-check"></i> Refer a friend now with the referral link
                            <span style="color:white;">"<a href="#" style="color:white;">http://cryptowave.network/register?ref={{ Auth::user()->tracking_code }}</a>"</span>
                            {{--Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span>--}}
                        </h3>
                        <span style="color:white;">Simply share this link to let your friends register!</span>
                        <a href="#" class="button button-xlarge button-rounded">Copy Link</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix"
             style="display:none;">
        <div class="slider-parallax-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark"
                         style="background-image: url('https://images.clickfunnels.com/images/blue-geo.png');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">LEARN</h2>
                                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">
                                    Decrypting the Future!</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">

    </section>

    <!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark" style="display:none;">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp;
                                <strong>Flexible</strong> Design Standards.</p>

                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Recent Posts</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-lg-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421"
                                                                         data-refresh-interval="80" data-speed="3000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-lg-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465"
                                                                         data-refresh-interval="50" data-speed="2000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp;
                            Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post"
                              class="nobottommargin">
                            <div class="input-group divcenter">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                </div>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                                       class="form-control required email" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-lg-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin"
                                   style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#">
                                    <small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on
                                        Facebook
                                    </small>
                                </a>
                            </div>
                            <div class="col-lg-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin"
                                   style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#">
                                    <small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS
                                        Feeds
                                    </small>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i
                            class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i
                            class="icon-skype2"></i> CanvasOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

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
<script src="canvas/js/functions-learn.js"></script>

</body>
</html>