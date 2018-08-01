<!-- Primary Navigation
============================================= -->
<nav id="primary-menu">
    <ul>
        <li><a href="/home"><div>Home</div></a></li>
        <li><a href="/dashboard"><div>Earn</div></a></li>
        <li class="mega-menu"><a href="/learn"><div>Learn</div></a></li>
        <li class="mega-menu"><a href="/affiliate"><div>Share</div></a>
        <li class="mega-menu">
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                {{ csrf_field() }}
            </form>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>
        {{--<li class="mega-menu"><a href="#"><div>Blog</div></a>--}}
        {{--<div class="mega-menu-content style-2 clearfix">--}}
        {{--<ul class="mega-menu-column col-lg-3">--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Default</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog.html"><div>Right Sidebar</div></a></li>--}}
        {{--<li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--<li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
        {{--<li><a href="blog-full-width.html"><div>Full Width</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Timeline</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
        {{--<li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--<li><a href="blog-timeline.html"><div>Full Width</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<ul class="mega-menu-column col-lg-3">--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog-masonry.html"><div>4 Columns</div></a></li>--}}
        {{--<li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>--}}
        {{--<li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>--}}
        {{--<li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Grid</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog-grid.html"><div>4 Columns</div></a></li>--}}
        {{--<li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>--}}
        {{--<li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<ul class="mega-menu-column col-lg-3">--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--<li><a href="blog-small.html"><div>Right Sidebar</div></a></li>--}}
        {{--<li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
        {{--<li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>--}}
        {{--<li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog-grid.html"><div>Pagination</div></a></li>--}}
        {{--<li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<ul class="mega-menu-column col-lg-3">--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Single</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog-single.html"><div>Default Layout</div></a></li>--}}
        {{--<li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--<li><a href="blog-single-full.html"><div>Full Width</div></a></li>--}}
        {{--<li><a href="blog-single-small.html"><div>Small Image</div></a></li>--}}
        {{--<li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>--}}
        {{--<li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li><a href="shop.html"><div>Shop</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="shop.html"><div>4 Columns</div></a></li>--}}
        {{--<li><a href="shop-3.html"><div>3 Columns</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="shop-3.html"><div>Full Width</div></a></li>--}}
        {{--<li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
        {{--<li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href="shop-2.html"><div>2 Columns</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
        {{--<li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--<li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href="shop-1.html"><div>1 Columns</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="shop-1.html"><div>Full Width</div></a></li>--}}
        {{--<li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
        {{--<li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--<li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>--}}
        {{--<li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>--}}
        {{--<li><a href="shop-single.html"><div>Single Product</div></a>--}}
        {{--<ul>--}}
        {{--<li><a href="shop-single.html"><div>Full Width</div></a></li>--}}
        {{--<li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
        {{--<li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
        {{--<li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href="cart.html"><div>Cart</div></a></li>--}}
        {{--<li><a href="checkout.html"><div>Checkout</div></a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="mega-menu"><a href="#"><div>Shortcodes</div></a>--}}
        {{--<div class="mega-menu-content clearfix">--}}
        {{--<ul class="mega-menu-column col-5">--}}
        {{--<li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>--}}
        {{--<li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>--}}
        {{--<li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>--}}
        {{--<li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>--}}
        {{--<li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>--}}
        {{--<li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>--}}
        {{--<li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>--}}
        {{--<li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>--}}
        {{--<li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>--}}
        {{--</ul>--}}
        {{--<ul class="mega-menu-column col-5">--}}
        {{--<li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>--}}
        {{--<li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>--}}
        {{--<li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>--}}
        {{--<li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>--}}
        {{--<li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>--}}
        {{--<li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>--}}
        {{--<li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>--}}
        {{--<li><a href="form-elements.html"><div><i class="icon-edit"></i>Form Elements</div></a></li>--}}
        {{--<li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>--}}
        {{--</ul>--}}
        {{--<ul class="mega-menu-column col-5">--}}
        {{--<li><a href="lists-cards.html"><div><i class="icon-th-list"></i>Lists &amp; Cards</div></a></li>--}}
        {{--<li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>--}}
        {{--<li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>--}}
        {{--<li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>--}}
        {{--<li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>--}}
        {{--<li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>--}}
        {{--<li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>--}}
        {{--<li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>--}}
        {{--<li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>--}}
        {{--</ul>--}}
        {{--<ul class="mega-menu-column col-5">--}}
        {{--<li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>--}}
        {{--<li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>--}}
        {{--<li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>--}}
        {{--<li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>--}}
        {{--<li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>--}}
        {{--<li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>--}}
        {{--<li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>--}}
        {{--<li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>--}}
        {{--<li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>--}}
        {{--</ul>--}}
        {{--<ul class="mega-menu-column col-5">--}}
        {{--<li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>--}}
        {{--<li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>--}}
        {{--<li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>--}}
        {{--<li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>--}}
        {{--<li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>--}}
        {{--<li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>--}}
        {{--<li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>--}}
        {{--<li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>--}}
        {{--<li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</li>--}}
    </ul>

    <!-- Top Cart
    ============================================= -->
    <div id="top-cart" style="display:none;">
        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
        <div class="top-cart-content">
            <div class="top-cart-title">
                <h4>Shopping Cart</h4>
            </div>
            <div class="top-cart-items">
                <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                        <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                        <a href="#">Blue Round-Neck Tshirt</a>
                        <span class="top-cart-item-price">$19.99</span>
                        <span class="top-cart-item-quantity">x 2</span>
                    </div>
                </div>
                <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                        <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                        <a href="#">Light Blue Denim Dress</a>
                        <span class="top-cart-item-price">$24.99</span>
                        <span class="top-cart-item-quantity">x 3</span>
                    </div>
                </div>
            </div>
            <div class="top-cart-action clearfix">
                <span class="fleft top-checkout-price">$114.95</span>
                <button class="button button-3d button-small nomargin fright">View Cart</button>
            </div>
        </div>
    </div><!-- #top-cart end -->

    <!-- Top Search
    ============================================= -->
    <div id="top-search" style="display:none;">
        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
        <form action="search.html" method="get">
            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
        </form>
    </div><!-- #top-search end -->

</nav><!-- #primary-menu end -->