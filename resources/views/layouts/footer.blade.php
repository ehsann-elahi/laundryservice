<style>
    .popover-box {
        position: relative;
        padding: 8px;
        background-color: #fff;
        text-align: center;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .popover-box::after {
        content: "";
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 10px;
        border-style: solid;
        border-color: #fff transparent transparent transparent;
        display: block;
        width: 0;
    }

    .footer-popover a {
        color: #fff;
        text-align: center;
        font-size: 20px;
        text-decoration: underline;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Apply white color to all footer text elements */
    .footer-widget,
    .footer-widget a,
    .footer-widget span,
    .footer-widget i {
        color: #fff !important;
    }

    /* Anchor tags inside footer widget */
    .footer-widget a {
        text-decoration: none;
        transition: color 0.3s ease;
    }

    /* Hover effect for all footer links */
    .footer-widget a:hover {
        color: #f7941f !important;
        text-decoration: underline;
    }

    /* Optional: icons hover color (if needed) */
    .footer-widget .footer-info_icon:hover i {
        color: #f7941f !important;
    }

    /* Optional: Add smooth hover to spans too if needed */
    .footer-widget span {
        transition: color 0.3s ease;
    }

    .footer-widget span:hover {
        color: #f7941f !important;
    }
</style>



<footer class="footer-wrapper footer-layout1" data-bg-src="{{asset('/assets/front/img/bg/footer_bg_1.jpg')}}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-xl-4 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Our Services</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="{{ route('index') }}" target="_blank">Per KG Package</a>
                                </li>
                                <li>
                                    <a href="{{ route('washnFold') }}" target="_blank">Wash & Fold</a>
                                </li>
                                <li>
                                    <a href="{{ route('pressing') }}" target="_blank">Steam Pressing</a>
                                </li>
                                <li>
                                    <a href="{{ route('washNPress') }}" target="_blank">Wash & Press</a>
                                </li>
                                <li>
                                    <a href="{{ route('dryCleaning') }}" target="_blank">Dry Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('curtain-cleaning') }}" target="_blank">Curtain Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('carpet') }}" target="_blank">Carpets Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('carpet') }}" target="_blank">Sofa Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('carpet') }}" target="_blank">Mattress Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('healthcareLaundry') }}" target="_blank">Healthcare Laundry</a>
                                </li>
                                <li>
                                    <a href="{{ route('healthcareLaundry') }}" target="_blank">Hotel & Restaurants</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">About</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="{{ route('price_dubai') }}" target="_blank">Price List Dubai</a>
                                </li>
                                <li>
                                    <a href="{{ route('price_abuDhabi') }}" target="_blank">Price List Abu Dhabi</a>
                                </li>
                                <li>
                                    <a href="{{ route('price_ajman') }}" target="_blank">Price List Ajman</a>
                                </li>
                                <li>
                                    <a href="{{ route('sharjah') }}" target="_blank">Price List Sharjah</a>
                                </li>
                                <li>
                                    <a href="{{ route('EHSPolicy') }}" target="_blank">EHS Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('returnPolicy') }}" target="_blank">Term & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacyPolicy') }}" target="_blank">Privacy Policy </a>
                                </li>
                                <li>
                                    <a href="{{ route('booking-form') }}" target="_blank">Book Online</a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}" target="_blank">FAQs</a>
                                </li>
                                <li>
                                    <a href="{{ route('jobs') }}" target="_blank">Apply for Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-6 col-sm-6">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Laundry Near Me</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/khalifa-city"
                                        target="_blank">Khalifa City</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/al-reef"
                                        target="_blank">Al-Reef</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/reem-island"
                                        target="_blank">Reem Island</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/yas-island"
                                        target="_blank">Yas Island</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/al-raha-beach"
                                        target="_blank">Al-Raha Beach</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me" target="_blank">Laundry
                                        near me</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-between">
                <div class="mx-auto mb-3">
                    <img loading="lazy"src="{{ asset('/assets/images/master-card.png') }}" id="masterCard" width="145"
                        height="50" loading="lazy" alt="online payment">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-popover">
                        <div class="popover-box">
                            <h2 class="mb-0 text-center" style="font-size: 22px;">
                                We Cover All Over UAE (Abu Dhabi - Dubai - Sharjah - Ajman)
                            </h2>
                        </div>
                        <p class="text-center mb-5"><a href="https://www.laundryservice.ae/"
                                style="font-size: 16px; color: white">laundryservice.ae</a></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Laundry in Abu Dhabi</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="http://google.com/maps/place/Musaffah+-+Abu+Dhabi/data=!4m2!3m1!1s0x3e5e40e7483d11d5:0x7672bbc1a32c03c2?sa=X&amp;ved=2ahUKEwiEoNvx2LvtAhVUuXEKHdXlCcEQ8gEwGHoECBkQAQ"
                                        target="_blank" rel="noreferrer noopener">Mussafah</a>
                                </li>
                                <li>
                                    <a>Mohamed Bin Zayed City</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-abu-dhabi" target="_blank"><span
                                            style="letter-spacing:normal;">Khalifa City</span></a>
                                </li>
                                <li>
                                    <a>Al Mafraq</a>
                                </li>
                                <li>
                                    <a>Shbiya</a>
                                </li>
                                <li>
                                    <a>Al Shawamekh</a>
                                </li>
                                <li>
                                    <a>Al Shamkha</a>
                                </li>
                                <li>
                                    <a>Shakhboot City</a>
                                </li>
                                <li>
                                    <a>Baniyas</a>
                                </li>
                                <li>
                                    <a>Al Reef Village</a>
                                </li>
                                <li>
                                    <a>Yas Island</a>
                                </li>
                                <li>
                                    <a>Al Jubail Island</a>
                                </li>
                                <li>
                                    <a>Saadiyat Island</a>
                                </li>
                                <li>
                                    <a>Al Reem Island</a>
                                </li>
                                <li>
                                    <a>Al Raha Beach</a>
                                </li>
                                <li>
                                    <a>Masdar City</a>
                                </li>
                                <li>
                                    <a>Al Maqta</a>
                                </li>
                                <li>
                                    <a>Sas Al Nakhl</a>
                                </li>
                                <li>
                                    <a>Al Rawdah</a>
                                </li>
                                <li>
                                    <a>Al Mushrif</a>
                                </li>
                                <li>
                                    <a>Al Manhal</a>
                                </li>
                                <li>
                                    <a>Al Bateen</a>
                                </li>
                                <li>
                                    <a>Al Nahyan</a>
                                </li>
                                <li>
                                    <a>Al Khalidiyah</a>
                                </li>
                                <li>
                                    <a>Al Marina</a>
                                </li>
                                <li>
                                    <a>Al Danah</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Laundry in Dubai</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Palm Jebel Ali</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">The Palm Jumeirah</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Mina Jebel Ali</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Dubai Marina</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Jumeirah</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Mirdif</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Al Warqa</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Dubai Silicon Oasis</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Academic City</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Liwan</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">The Villa</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Wadi Al Safa</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Falcon City of Wonders</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Al Barari</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Majan</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">City of Arabia</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Al Reem</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Arabian Ranches</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Arjan Dubai Land</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Jumeirah Village Circle</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Jumeirah Village Triangle</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Motor City</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Dubai Studio City</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Green Community Village</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">Al Furjan</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/Khalifa+City+-+Abu+Dhabi/@24.4201924,54.5030489,12z/data=!3m1!4b1!4m5!3m4!1s0x3e5e4665e784b025:0x18856a84d3a5d8bf!8m2!3d24.4140115!4d54.5686489"
                                        target="_blank" rel="noreferrer noopener">All Islands</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Laundry in Sharjah</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/maps/place/MusaffahME-11+-+Abu+Dhabi/@24.3268906,54.5299852,16z/data=!3m1!4b1!4m5!3m4!1s0x3e5e38bac13896ff:0x7cc13b756fc9a080!8m2!3d24.3265291!4d54.5341328"
                                        target="_blank">Al Nekhailat</a>
                                </li>
                                <li>
                                    <a href="#">Al Ghafia</a>
                                </li>
                                <li>
                                    <a href="#">Al Sabkha
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Azra
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Muntazah</a>
                                </li>
                                <li>
                                    <a href="#">Al Fisht
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Sharqan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Qadisiya</a>
                                </li>
                                <li>
                                    <a href="#">Al Hazzanah</a>
                                </li>
                                <li>
                                    <a href="#">Al Falaj
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Qasimia
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Jubail
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Gharb
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Abu Shagara</a>
                                </li>
                                <li>
                                    <a href="#">Al Majaz
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Khan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Nahda
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Muwailih
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Zahia
                                    </a>
                                </li>
                                <li>
                                    <a href="#">University City</a>
                                </li>
                                <li>
                                    <a href="#">Al Gharayen</a>
                                </li>
                                <li>
                                    <a href="#">Al Khaledia</a>
                                </li>
                                <li>
                                    <a href="#">Al Layyeh
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Falaj
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Jazzat
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Al Ramtha
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Laundry in Ajman</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/maps/place/Al+Shawamekh+-+Abu+Dhabi/@24.3487687,54.6296903,13z/data=!3m1!4b1!4m5!3m4!1s0x3e5e3634d27dfb15:0x8e48f190306d2abc!8m2!3d24.364675!4d54.6603887"
                                        target="_blank">Al Rumailah</a>
                                </li>
                                <li>
                                    <a href="#"> Al Rashidiya</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Rashdiya 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Rashdiya 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Rashdiya 3
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Nakhil
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Nuaimia
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Nuaimia 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Nuaimia 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Bustan
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Liwara
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Liwara 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Liwara 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Mushairef
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Jerf
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Hamidiya
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Industrial Area
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Hamriya
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Ajman Uptown
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Heliow
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Raqaib
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Emirates City
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Amerah
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Al Zahya
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> Free Zone
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-between">
                <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="home-laundry-services.html"><img loading="lazy"src="{{asset('/assets/images/logo.png')}}"
                                        style="height: 100px" alt="Laun" /></a>
                            </div>
                            <h3 class="widget_title"><a href="https://www.google.com/maps/place/SunCity+Laundry/@24.326122,54.5318142,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e39950a5a9e43:0x34cf71b6aefd2232!8m2!3d24.3261172!4d54.5366851!16s%2Fg%2F11lgkxn3f4?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">SunCity Laundry</h3></a>
                            <div class="footer-info-wrapper">
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                    <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                    <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-solid fa-clock"></i></div>
                                    <span>Feel Free to Contact Us 24/7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">

                            <h3 style="font-size: 26px" class="text-white mt-5">Visit Us Abu Dhabi</h3>
                            <h3 class="widget_title mt-5"> <a href="https://www.google.com/maps/search/+Shop+No:02,+Building+157+-+Mohamed+Bin+Zayed+City+-+ME-11+-+Abu+Dhabi+-+United+Arab+Emirates/@24.3294094,54.5251991,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">SunCity Laundry</a></h3>

                            <div class="footer-info-wrapper">
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                    <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                    <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <a href="https://www.google.com/maps/dir//Landmark+Trading+LLC+Shabiya+11+-+1680+Naseem+Al+Barr+St+-+Mohamed+Bin+Zayed+City+-+ME11+-+Abu+Dhabi+-+United+Arab+Emirates/@24.3477258,54.5140745,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3e5e393179af5443:0xe6835261b1392aa7!2m2!1d54.535654!2d24.324863?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D"><span>Shop No:02, Building 157 - Mohamed Bin Zayed City - ME-11 - Abu Dhabi - United
                                        Arab Emirates</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-6 col-sm-6">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">

                            <h3 style="font-size: 26px" class="text-white mt-5">Visit Us Dubai</h3>
                            <h3 class="widget_title mt-5"><a href="https://www.google.com/maps/search/48a+27+street+-+Al+Muwaihat+3+-+Ajman/@25.3777877,55.4699838,13z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">SunCity Laundry</a></h3>

                            <div class="footer-info-wrapper">
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                    <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                    <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <a href="https://www.google.com/maps/search/48a+27+street+-+Al+Muwaihat+3+-+Ajman/@25.3777877,55.4699838,13z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D"><span>48a 27 street - Al Muwaihat 3 - Ajman</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">

                            <h3 style="font-size: 26px" class="text-white mt-5">Visit Us Dubai</h3>
                            <h3 class="widget_title mt-5"><a href="https://www.google.com/maps/search/Ware+House+No+-+36,+Near+Al+Qusais+-+Dubai/@25.2885431,55.3851494,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">SunCity Laundry</h3></a>

                            <div class="footer-info-wrapper">
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                    <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                    <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon"><i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <a href="https://www.google.com/maps/search/Ware+House+No+-+36,+Near+Al+Qusais+-+Dubai/@25.2885431,55.3851494,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D"><span>Ware House No - 36, Near Al Qusais - Dubai</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>



    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 All Rights Reserved | <a style="color: #f7941f ;"
                            href="https://metadigitalmarketing.ae/">MetaDigital</a></p>
                </div>
                <div class="col-md-6 text-center text-md-end">
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

        </div>
    </div>
    <div class="animation-bubble">
        <div class="bubble-1"></div>
        <div class="bubble-2"></div>
        <div class="bubble-3"></div>
        <div class="bubble-4"></div>
        <div class="bubble-5"></div>
        <div class="bubble-6"></div>
        <div class="bubble-7"></div>
        <div class="bubble-8"></div>
        <div class="bubble-9"></div>
        <div class="bubble-10"></div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="0%"><img
            src="{{asset('/assets/front/img/shape/footer_shape_1.png')}}" alt="shape" /></div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-right="0%"><img
            src="{{asset('/assets/front/img/shape/footer_shape_2.png')}}" alt="shape" /></div>

</footer>

<!-- Chatbox Button -->
<div id="chatButton" onclick="toggleChatbox()" style="position: fixed; bottom: 20px; right: 20px; background-color: #2B2F7B; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); cursor: pointer; z-index: 1000;">
    <img loading="lazy"src="{{ asset('/assets/images/bubble-chat.png') }}" alt="Chat" style="width: 28px; height: 28px;">
</div>
<!-- CHATBOX HTML -->
<div id="chatboxModal" style="position: fixed; bottom: 90px; right: 20px; width: 350px; height: 450px; background-color: white; border-radius: 15px; box-shadow: 0px 4px 20px rgba(0,0,0,0.3); display: none; flex-direction: column; z-index: 1001;">
    <div style="background: #2B2F7B; color: white; padding: 15px; border-top-left-radius: 15px; border-top-right-radius: 15px; display: flex; justify-content: space-between; align-items: center;">
        <strong>Laundry Support</strong>
        <button onclick="toggleChatbox()" style="background: none; border: none; color: white; font-size: 20px;">&times;</button>
    </div>
    <!-- CUSTOMER INFO -->
    <div id="customerInfoSection" style="flex: 1; padding: 15px;">
        <div id="chatErrorMsg" style="color: red; margin-bottom: 10px; display: none;"></div>
        <input type="text" id="customerName" placeholder="Your Name" style="width: 100%; margin-bottom: 10px; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
        <input type="text" id="customerPhone" placeholder="Phone Number" style="width: 100%; margin-bottom: 10px; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
        <button onclick="startChat()" style="width: 100%; background-color: #2B2F7B; color: white; padding: 10px; border: none; border-radius: 5px;">Start Chat</button>
    </div>
    <!-- CHAT MESSAGES -->
    <div id="chatSection" style="flex: 1; padding: 15px; overflow-y: auto; display: none; display: flex; flex-direction: column; gap: 10px;"></div>
    <!-- CHAT INPUT -->
    <div id="chatInputSection" style="padding: 10px; border-top: 1px solid #eee; display: none; flex-direction: column;">
        <button id="endChatButton" onclick="endChat()" style="background-color: #F44336; border: none; padding: 8px 12px; border-radius: 20px; color: white; font-weight: bold; margin-bottom: 8px; display: none;">End Chat</button>
        <div style="display: flex; align-items: center; gap: 10px;">
            <input type="text" id="chatInput" placeholder="Ask us anything..." style="flex: 1; padding: 8px; border-radius: 20px; border: 1px solid #ccc;">
            <button onclick="sendMessage()" style="background-color: #2B2F7B; border: none; padding: 8px 12px; border-radius: 20px; color: white; font-weight: bold;">→</button>
            <button onclick="sendLocation()" title="Send Location" style="background-color: #2B2F7B; border: none; padding: 8px 12px; border-radius: 20px; color: white; font-weight: bold;">📍</button>
        </div>
    </div>
</div>


<script>
    let chatId = null;
    let inactivityTimer = null;
    let messagePollingInterval = null;
    document.getElementById("chatInput").addEventListener("keypress", function(e) {
        if (e.key === "Enter") {
            e.preventDefault();
            sendMessage();
        }
    });

    function toggleChatbox() {
        const chatbox = document.getElementById("chatboxModal");
        const isHidden = chatbox.style.display === "none";
        chatbox.style.display = isHidden ? "flex" : "none";
        if (isHidden) {
            if (!chatId) {
                document.getElementById("customerInfoSection").style.display = "block";
                document.getElementById("chatSection").style.display = "none";
                document.getElementById("chatInputSection").style.display = "none";
            } else {
                document.getElementById("customerInfoSection").style.display = "none";
                document.getElementById("chatSection").style.display = "block";
                document.getElementById("chatInputSection").style.display = "flex";
                loadMessages();
                startPollingMessages();
            }
        }
    }

    function startChat() {
        const name = document.getElementById("customerName").value.trim();
        const phone = document.getElementById("customerPhone").value.trim();
        const errorDiv = document.getElementById('chatErrorMsg');
        errorDiv.style.display = 'none';
        errorDiv.textContent = '';
        if (!name || !phone) {
            errorDiv.textContent = 'Please enter your name and phone number.';
            errorDiv.style.display = 'block';
            return;
        }
        fetch("{{ route('chat.start') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    name,
                    phone
                })
            })
            .then(async res => {
                const data = await res.json();
                if (!res.ok) {
                    throw data; // this triggers the catch block
                }
                return data;
            })
            .then(data => {
                chatId = data.chat_id;
                document.getElementById("customerInfoSection").style.display = "none";
                document.getElementById("chatSection").style.display = "block";
                document.getElementById("chatInputSection").style.display = "flex";
                loadMessages();
                startPollingMessages();
                resetInactivityTimer();
            })
            .catch(error => {
                errorDiv.textContent = error.message || error.error || 'Something went wrong.';
                errorDiv.style.display = 'block';
            });
    }

    function sendMessage() {
        const input = document.getElementById("chatInput");
        const msg = input.value.trim();
        if (!msg || !chatId) return;
        const chat = document.getElementById("chatSection");
        const userMsg = document.createElement("div");
        userMsg.style.background = "#E1F5FE";
        userMsg.style.padding = "10px 15px";
        userMsg.style.borderRadius = "10px";
        userMsg.style.marginBottom = "10px";
        userMsg.style.alignSelf = "flex-end";
        userMsg.textContent = msg;
        chat.appendChild(userMsg);
        input.value = "";
        chat.scrollTop = chat.scrollHeight;
        resetInactivityTimer();
        document.getElementById("endChatButton").style.display = "none";
        fetch("{{ route('chat.send') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                message: msg,
                chat_id: chatId
            })
        });
    }

    function resetInactivityTimer() {
        clearTimeout(inactivityTimer);
        inactivityTimer = setTimeout(() => {
            document.getElementById("endChatButton").style.display = "inline-block";
        }, 120000);
    }

    function endChat() {
        clearTimeout(inactivityTimer);
        stopPollingMessages();
        clearChat();
        chatId = null;
        document.getElementById("chatboxModal").style.display = "none";
    }

    function clearChat() {
        document.getElementById("chatSection").innerHTML = "";
        document.getElementById("chatInput").value = "";
        document.getElementById("customerName").value = "";
        document.getElementById("customerPhone").value = "";
        document.getElementById("endChatButton").style.display = "none";
    }

    function loadMessages() {
        if (!chatId) return;
        fetch(`/chat/${chatId}/messages`)
            .then(res => res.json())
            .then(messages => {
                const chat = document.getElementById("chatSection");
                chat.innerHTML = "";
                chat.style.display = "flex";
                chat.style.flexDirection = "column";
                chat.style.alignItems = "flex-start";
                if (messages.length === 0) {
                    const welcome = document.createElement("div");
                    welcome.style.background = "#F1F1F1";
                    welcome.style.padding = "8px 12px";
                    welcome.style.borderRadius = "10px";
                    welcome.style.marginBottom = "5px";
                    welcome.style.alignSelf = "flex-start";
                    welcome.style.display = "inline-block";
                    welcome.textContent = ":wave: Hello, how can we help you?";
                    chat.appendChild(welcome);
                } else {
                    messages.forEach(msg => {
                        const bubble = document.createElement("div");
                        bubble.textContent = msg.message;
                        bubble.style.padding = "8px 12px";
                        bubble.style.borderRadius = "10px";
                        bubble.style.marginBottom = "5px";
                        bubble.style.display = "inline-block"
                        if (msg.sender === 'admin') {
                            bubble.style.background = "#DCF8C6"; // Light green
                            bubble.style.alignSelf = "flex-end";
                            bubble.style.textAlign = "right";
                        } else {
                            bubble.style.background = "#E1F5FE"; // Light blue
                            bubble.style.alignSelf = "flex-start";
                            bubble.style.textAlign = "left";
                        }
                        chat.appendChild(bubble);
                    });
                }
                // Auto scroll to bottom
                // Before loading new messages
                const isAtBottom = chat.scrollHeight - chat.scrollTop <= chat.clientHeight + 50;
                // Load and append messages...
                if (isAtBottom) {
                    chat.scrollTop = chat.scrollHeight;
                }
            });
    }

    function startPollingMessages() {
        if (messagePollingInterval) clearInterval(messagePollingInterval);
        messagePollingInterval = setInterval(loadMessages, 5000);
    }

    function stopPollingMessages() {
        clearInterval(messagePollingInterval);
        messagePollingInterval = null;
    }

    function sendLocation() {
        if (!navigator.geolocation) {
            alert("Geolocation is not supported by your browser.");
            return;
        }
        navigator.geolocation.getCurrentPosition(function(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            const locationLink = `https://www.google.com/maps?q=${latitude},${longitude}`;
            const locationMessage = `:round_pushpin: My location: ${locationLink}`;
            // Show clickable link in chat
            const chat = document.getElementById("chatSection");
            const userMsg = document.createElement("div");
            userMsg.style.background = "#E1F5FE";
            userMsg.style.padding = "10px 15px";
            userMsg.style.borderRadius = "10px";
            userMsg.style.marginBottom = "10px";
            userMsg.style.alignSelf = "flex-end";
            userMsg.innerHTML = `<a href="${locationLink}" target="_blank" style="color: #007BFF; text-decoration: underline;">:round_pushpin: My Location</a>`;
            chat.appendChild(userMsg);
            chat.scrollTop = chat.scrollHeight;
            resetInactivityTimer();
            // Send message to backend
            fetch("{{ route('chat.send') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    message: locationMessage,
                    chat_id: chatId
                })
            });
        }, function(error) {
            alert("Unable to retrieve your location.");
        });
    }
</script>