<style>
    @media (max-width: 1250px) {
    .header-top .header-links ul {
        display: flex;
        flex-wrap: wrap; /* or nowrap if space allows */
        gap: 20px;
        align-items: center;
        justify-content: center;
    }

    .header-top .header-links ul li {
        margin: 0;
        white-space: nowrap;
        font-size: 14px;
    }

    .header-top .header-links.style2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .header-top .header-links.style2 p {
        margin-bottom: 5px;
    }

    .header-top .social-links {
        text-align: center;
        margin-top: 10px;
    }
}

    @media (max-width: 1024px) {
        .main-menu {
            display: none !important;
        }

        .th-menu-toggle {
            display: block !important;
        }
    }

    .book-now-btn {
        display: inline-block;
        margin-left: 15px;
        padding: 12px 18px;
    }

    /* Optional: Reduce padding/font on smaller screens if needed */
    @media (max-width: 1440px) {
        .book-now-btn {
            margin-left: 0px;
            font-size: 11px;
            padding: 11px 11px;
        }
    }

    /* Add flex behavior for button group */
    .button-group {
        display: flex;
        align-items: center;
        gap: 10px;
        /* space between book-now-btn and toggle icon */
    }
</style>
<!-- <div class="sidemenu-wrapper sidemenu-info">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="{{route('index')}}"><img loading="lazy" style="height: 70px" src="{{asset('/assets/images/logo.png')}}" alt="Laun" /></a>
                </div>
                <p class="about-text">We provide specialized winterization services to safeguard your pool during the
                    off-season, and when spring arrives, we handle the thorough opening process.</p>
                <div class="th-social">
                   <a href="https://www.facebook.com/laundryservice.ae "><i class="fab fa-facebook-f"></i></a> <a
                            href="https://www.twitter.com/Laundry_uae"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/laundryserviceuae/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCtONe_bE3Sr05_4Wt3EpPpQ" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                </div>
            </div>
        </div>
        <div class="widget">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img loading="lazy"src="{{asset('/assets/front/img/blog/recent-post-1-1.jpg')}}"
                                alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="far fa-calendar"></i>21 October , 2023</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">A Fresh Start for Your
                                Wardrobe</a></h4>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img loading="lazy"src="{{asset('/assets/front/img/blog/recent-post-1-2.jpg')}}"
                                alt="Blog Image" /></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="far fa-calendar"></i>22 October , 2023</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Where Clean Meets
                                Convenience</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget">
            <h3 class="widget_title">Contact Us</h3>
            <div class="th-widget-contact">
                <div class="info-box">
                    <div class="info-box_icon"><i class="fas fa-location-dot"></i></div>
                    <p class="info-box_text">Dubai | Abu Dhabi | Sharjah | Ajman</p>
                </div>
                <div class="info-box">
                    <div class="info-box_icon"><i class="fas fa-phone"></i></div>
                    <p class="info-box_text"><a href="tel:+16326543564" class="info-box_link">+971 52 273 2873</a>
                </div>
                <div class="info-box">
                    <div class="info-box_icon"><i class="fas fa-envelope"></i></div>
                    <p class="info-box_text"><a href="mailto:help24/7@Laun.com"
                            class="info-box_link">support@laundryservice.ae</a></p>
                </div>

            </div>
        </div>
    </div>
</div> -->

<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('index') }}"><img loading="lazy" style="height:50px" src="{{asset('/assets/images/logo.png')}}" alt="Laun" /></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="menu-item-has-children">
                    <a>Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('washnFold')}}">Wash & Fold</a></li>
                        <li><a href="{{route('pressing')}}">Pressing</a></li>
                        <li><a href="{{route('washNPress')}}">Wash & Press</a></li>
                        <li><a href="{{route('curtain-cleaning')}}">Curtain Cleaning</a></li>
                        <li><a href="{{route('carpet')}}">Carpet | Mattress | Sofa</a></li>
                        <li><a href="{{route('linen.rental')}}">Linen Rental</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Price List</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('price_abuDhabi')}}">Price List Abu Dhabi</a></li>
                        <li><a href="{{route('price_dubai')}}">Price List Dubai</a></li>
                        <li><a href="{{ route('price_ajman') }}">Price List Ajman</a></li>
                        <li><a href="{{ route('price_ajman') }}">Price List Sharjah</a></li>

                    </ul>
                </li>
                <li><a href="{{route('shop')}}">Shop</a></li>
                <li><a href="#">Blogs</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Cities</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('index') }}">Abu Dhabi</a></li>
                        <li><a href="{{route('dubai')}}">Dubai</a></li>
                        <li><a href="{{ route('sharjah') }}">Ajman</a></li>
                        <li><a href="{{ route('sharjah') }}">Sharjah</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links style2">
                        <p class="header-notice text-theme text-white mx-2" style="font-size: 14px;">Welcome to Laundry Service</p>
                        <ul class="mx-5">
                            <li><i class="fa-solid fa-phone"></i>Phone:<a href="tel:+1044123456789">+971 52 273 2873</a></li>
                            <li><i class="fa-solid fa-envelope"></i>Email:<a href="mailto:info@Laun.com">support@laundryservice.ae</a></li>
                            <li class="d-none d-xl-inline-block"><i class="fa-solid fa-clock"></i>Opening Hours:
                                <span>Feel Free to Contact Us 24/7.</span>
                            </li>
                        </ul>
                    </div>
                </div>




                <div class="col-auto">
                    <div class="social-links">
                        <span class="social-title">Follow Us On:</span> <a href="https://www.facebook.com/laundryservice.ae "><i class="fab fa-facebook-f"></i></a> <a
                            href="https://www.twitter.com/Laundry_uae"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/laundryserviceuae/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCtONe_bE3Sr05_4Wt3EpPpQ" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-wrapper">
        <div class="container th-container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{route('index')}}">
                                <img loading="lazy" style="height: 50px" src="{{asset('/assets/images/logo.png')}}" alt="Laun" />
                            </a>
                        </div>
                    </div>



                    <!-- Centered Navigation Menu -->
                    <div class="col-lg-8 text-center d-none d-lg-block">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li class="menu-item-has-children">
                                    <a>Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('washnFold')}}">Wash & Fold</a></li>
                                        <li><a href="{{route('pressing')}}">Pressing</a></li>
                                        <li><a href="{{route('washNPress')}}">Wash & Press</a></li>
                                        <li><a href="{{route('curtain-cleaning')}}">Curtain Cleaning</a></li>
                                        <li><a href="{{route('carpet')}}">Carpet | Mattress | Sofa</a></li>
                                        <li><a href="{{route('linen.rental')}}">Linen Rental</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Price List</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('price_abuDhabi')}}">Price List Abu Dhabi</a></li>
                                        <li><a href="{{route('price_dubai')}}">Price List Dubai</a></li>
                                        <li><a href="{{ route('price_ajman') }}">Price List Ajman</a></li>
                                        <li><a href="{{ route('price_ajman') }}">Price List Sharjah</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('shop')}}">Shop</a></li>
                                <li><a href="{{ route('blog') }}">Blogs</a></li>
                                <li class="menu-item-has-children">
                                    <a>Cities</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('index') }}">Abu Dhabi</a></li>
                                        <li><a href="{{route('dubai')}}">Dubai</a></li>
                                        <li><a href="{{ route('sharjah') }}">Ajman</a></li>
                                        <li><a href="{{ route('sharjah') }}">Sharjah</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>

                    <!-- Book Now Button -->
                    <div class="col-auto d-flex align-items-center gap-2 button-group">
                        <a href="{{ route('booking-form') }}" class="th-btn style4 th-radius book-now-btn">
                            Book Now
                        </a>

                        <button type="button" class="th-menu-toggle">
                            <i class="far fa-bars"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
</header>