<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="canvas/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="canvas/css/swiper.css" type="text/css" />
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
    <title>Services | Canvas</title>

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
                        <img style="padding-top: 10px; padding-bottom:10px;" src="https://images.clickfunnels.com/0f/a6e3602c6311e8825da7f1169408c7/uniwave-logo.png" alt="Uniwave Logo"></a>
                    <a href="dashboard-alt" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">
                        <img style="padding-top: 10px; padding-bottom:10px;" src="https://images.clickfunnels.com/0f/a6e3602c6311e8825da7f1169408c7/uniwave-logo.png" alt="Uniwave Logo"></a>
                </div><!-- #logo end -->

                @include('layouts.nav')

            </div>

        </div>

    </header><!-- #header end -->

    <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">

        <div class="slider-parallax-inner">
            <div class="swiper-container swiper-parent">

                <div class="swiper-wrapper">

                    <div class="swiper-slide dark" style="background-image: url('https://images.clickfunnels.com/images/blue-geo.png');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Welcome to CryptoWave</h2>
                                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Get started choosing one of the options below:</p>
                                <div style="width:1px; height: 50px;"></div>
                                <div class="col_one_third">
                                    <div class="feature-box fbox-center fbox-effect">
                                        <div class="fbox-icon" style="height: 192px; width: 192px;">
                                            <a href="/dashboard"><i class="icon-screen i-alt" style="font-size: 84px; line-height: 192px;"></i></a>
                                        </div>
                                        <h3 style="font-size: 26px;">Earn</h3>
                                        <p style="color:white; font-size: 18px;">Discover how you can use spare computer resource for mining with our FREE crypto-mining software!</p>
                                    </div>
                                </div>

                                <div class="col_one_third">
                                    <div class="feature-box fbox-center fbox-effect">
                                        <div class="fbox-icon" style="height: 192px; width: 192px;">
                                            <a href="/learn"><i class="icon-dollar i-alt" style="font-size: 84px; line-height: 192px;"></i></a>
                                        </div>
                                        <h3 style="font-size: 26px;">Learn</h3>
                                        <p style="color:white; font-size: 18px;">Learn about the world of cryptocurrencies and the polarizing blockchain technology</p>
                                    </div>
                                </div>

                                <div class="col_one_third col_last">
                                    <div class="feature-box fbox-center fbox-effect">
                                        <div class="fbox-icon" style="height: 192px; width: 192px;">
                                            <a href="/share"><i class="icon-users i-alt" style="font-size: 84px; line-height: 192px;"></i></a>
                                        </div>
                                        <h3 style="font-size: 26px;">Share</h3>
                                        <p style="color:white; font-size: 18px;">Spread the word, find friends to mine together with you and grow our community!</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    {{--<div class="swiper-slide dark">--}}
                        {{--<div class="container clearfix">--}}
                            {{--<div class="slider-caption slider-caption-center">--}}
                                {{--<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>--}}
                                {{--<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="video-wrap">--}}
                            {{--<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>--}}
                                {{--<source src='images/videos/explore.mp4' type='video/mp4' />--}}
                                {{--<source src='images/videos/explore.webm' type='video/webm' />--}}
                            {{--</video>--}}
                            {{--<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">--}}
                        {{--<div class="container clearfix">--}}
                            {{--<div class="slider-caption">--}}
                                {{--<h2 data-caption-animate="fadeInUp">Great Performance</h2>--}}
                                {{--<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

                {{--<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>--}}
                {{--<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>--}}
                {{--<div class="slide-number">--}}
                    {{--<div class="slide-number-current"></div>--}}
                    {{--<span>/</span>--}}
                    {{--<div class="slide-number-total"></div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    <!-- Page Title
    ============================================= -->
    {{--<section id="page-title" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">--}}

        {{--<div class="container clearfix">--}}
            {{--<h1>Services</h1>--}}
            {{--<span>We provide Amazing Solutions</span>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                {{--<li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                {{--<li class="breadcrumb-item active" aria-current="page">Services</li>--}}
            {{--</ol>--}}
        {{--</div>--}}

    {{--</section><!-- #page-title end -->--}}

    <!-- Content
    ============================================= -->
    {{--<section id="content">--}}

        {{--<div class="content-wrap">--}}

            {{--<div class="container clearfix">--}}

                {{--<div class="col_one_third">--}}
                    {{--<div class="feature-box fbox-rounded fbox-effect">--}}
                        {{--<div class="fbox-icon">--}}
                            {{--<a href="#"><i class="icon-screen i-alt"></i></a>--}}
                        {{--</div>--}}
                        {{--<h3>Responsive Layout</h3>--}}
                        {{--<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col_one_third">--}}
                    {{--<div class="feature-box fbox-rounded fbox-effect">--}}
                        {{--<div class="fbox-icon">--}}
                            {{--<a href="#"><i class="icon-eye i-alt"></i></a>--}}
                        {{--</div>--}}
                        {{--<h3>Retina Graphics</h3>--}}
                        {{--<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col_one_third col_last">--}}
                    {{--<div class="feature-box fbox-rounded fbox-effect">--}}
                        {{--<div class="fbox-icon">--}}
                            {{--<a href="#"><i class="icon-beaker i-alt"></i></a>--}}
                        {{--</div>--}}
                        {{--<h3>Powerful Performance</h3>--}}
                        {{--<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="clear"></div>--}}

                {{--<div class="col_one_third nobottommargin">--}}
                    {{--<div class="feature-box fbox-rounded fbox-effect">--}}
                        {{--<div class="fbox-icon">--}}
                            {{--<a href="#"><i class="icon-stack i-alt"></i></a>--}}
                        {{--</div>--}}
                        {{--<h3>Premium Sliders</h3>--}}
                        {{--<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col_one_third nobottommargin">--}}
                    {{--<div class="feature-box fbox-rounded fbox-effect">--}}
                        {{--<div class="fbox-icon">--}}
                            {{--<a href="#"><i class="icon-tint i-alt"></i></a>--}}
                        {{--</div>--}}
                        {{--<h3>Unlimited Colors</h3>--}}
                        {{--<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col_one_third nobottommargin col_last">--}}
                    {{--<div class="feature-box fbox-rounded fbox-effect">--}}
                        {{--<div class="fbox-icon">--}}
                            {{--<a href="#"><i class="icon-text-width i-alt"></i></a>--}}
                        {{--</div>--}}
                        {{--<h3>Customizable Fonts</h3>--}}
                        {{--<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="section parallax nobottommargin noborder dark" style="height: 450px; padding: 120px 0;">--}}

                {{--<div class="vertical-middle center" style="z-index: 2;">--}}
                    {{--<div class="container clearfix" data-animate="fadeInUp">--}}
                        {{--<div class="heading-block nobottomborder nobottommargin">--}}
                            {{--<h2 style="font-size: 42px;">Beautiful HTML5 Videos</h2>--}}
                            {{--<span class="d-none d-lg-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</span>--}}
                        {{--</div>--}}
                        {{--<a href="#" class="button button-border button-rounded button-white button-light button-large noleftmargin nobottommargin" style="margin-top: 40px;">Show More</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="video-wrap" style="z-index: 1;">--}}
                    {{--<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>--}}
                        {{--<source src='images/videos/explore.mp4' type='video/mp4' />--}}
                        {{--<source src='images/videos/explore.webm' type='video/webm' />--}}
                    {{--</video>--}}
                    {{--<div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>--}}
                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="row bottommargin-lg common-height">--}}

                {{--<div class="col-lg-4 dark col-padding ohidden" style="background-color: #1abc9c;">--}}
                    {{--<div>--}}
                        {{--<h3 class="uppercase" style="font-weight: 600;">Why choose Us</h3>--}}
                        {{--<p style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.</p>--}}
                        {{--<a href="#" class="button button-border button-light button-rounded button-reveal tright uppercase nomargin"><i class="icon-angle-right"></i><span>Read More</span></a>--}}
                        {{--<i class="icon-bulb bgicon"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-lg-4 dark col-padding ohidden" style="background-color: #34495e;">--}}
                    {{--<div>--}}
                        {{--<h3 class="uppercase" style="font-weight: 600;">Our Mission</h3>--}}
                        {{--<p style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.</p>--}}
                        {{--<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>--}}
                        {{--<i class="icon-cog bgicon"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-lg-4 dark col-padding ohidden" style="background-color: #e74c3c;">--}}
                    {{--<div>--}}
                        {{--<h3 class="uppercase" style="font-weight: 600;">What you get</h3>--}}
                        {{--<p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>--}}
                        {{--<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>--}}
                        {{--<i class="icon-thumbs-up bgicon"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="container clearfix">--}}

                {{--<div class="pricing-box pricing-extended bottommargin clearfix">--}}

                    {{--<div class="pricing-desc">--}}
                        {{--<div class="pricing-title">--}}
                            {{--<h3>How many Themes can you Download today?</h3>--}}
                        {{--</div>--}}
                        {{--<div class="pricing-features">--}}
                            {{--<ul class="iconlist-color clearfix">--}}
                                {{--<li><i class="icon-desktop"></i> Ultra Responsive Layouts</li>--}}
                                {{--<li><i class="icon-eye-open"></i> Retina Ready Designs</li>--}}
                                {{--<li><i class="icon-beaker"></i> Advanced Admin Panel</li>--}}
                                {{--<li><i class="icon-magic"></i> Tons of Customization Options</li>--}}
                                {{--<li><i class="icon-font"></i> Support for Custom Fonts</li>--}}
                                {{--<li><i class="icon-stack3"></i> Premium Sliders Included</li>--}}
                                {{--<li><i class="icon-file2"></i> Photoshop Source Files Included</li>--}}
                                {{--<li><i class="icon-support"></i> 24x7 Priority Email Support</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="pricing-action-area">--}}
                        {{--<div class="pricing-meta">--}}
                            {{--As Low as--}}
                        {{--</div>--}}
                        {{--<div class="pricing-price">--}}
                            {{--<span class="price-unit">&euro;</span>39<span class="price-tenure">monthly</span>--}}
                        {{--</div>--}}
                        {{--<div class="pricing-action">--}}
                            {{--<a href="#" class="button button-3d button-large btn-block nomargin">Get Started</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}

            {{--<a href="#" class="button button-full center tright topmargin footer-stick">--}}
                {{--<div class="container clearfix">--}}
                    {{--Need help with your Account? <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>--}}
                {{--</div>--}}
            {{--</a>--}}

        {{--</div>--}}

    {{--</section>--}}
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

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

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
                                <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-lg-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                </div>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-lg-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-lg-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
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

                    <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
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
<script src="canvas/js/functions.js"></script>

<script>

</script>

</body>
</html>