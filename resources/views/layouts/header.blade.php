<style>
    @media (max-width: 1250px) {
        .header-top .header-links ul {
            display: flex;
            flex-wrap: wrap;
            /* or nowrap if space allows */
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
                          <a href="https://www.facebook.com/laundryservicesae/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/Laundry_uae"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/laundryserviceuae/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/@laundryserviceuae" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.tiktok.com/@laundryservice_uae" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/laundry-service-uae" target="_blank">
                                <i class="fab fa-linkedin"></i>
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
                    <!-- Button Placement -->
               

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