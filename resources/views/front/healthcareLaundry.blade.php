@push('footer')
@if (session('message'))
<script>
    setTimeout(function() {
        let msg = document.getElementById('msg');
        msg.style.display = 'none';
    }, 9000);
</script>
@endif

@endpush
@extends('layouts.app')
@section('title', 'Laundromat in Abu Dhabi | SunCity Laundry | Abu Dhabi | SunCity Laundry')
@section('og:description', "Welcome to Abu Dhabi's favorite Laundry & dry cleaner laundromat \"SunCity Laundry\". We provide dry cleaning, cleaning, and pressing, minor alteration services with free pick up and delivery in Mohamed Bin Zayed City & Khalifa")
@section('og:title', 'Laundromat in Abu Dhabi | SunCity Laundry | Abu Dhabi | SunCity Laundry')
@section('og:description', "Welcome to Abu Dhabi's favorite Laundry & dry cleaner laundromat \"SunCity Laundry\". We provide dry cleaning, cleaning, and pressing, minor alteration services with free pick up and delivery in Mohamed Bin Zayed City & Khalifa")
@section('og:url', 'https://www.laundryservice.ae/suncity-laundry-abu-dhabi')
@section('canonical', 'https://www.laundryservice.ae/suncity-laundry-abu-dhabi')
@section('styles')
<style>
    .price li {
        list-style-type: disc;
        /* Ensures bullets are displayed */
    }

    h4 {
        font-size: 36px;
    }

    .feature-body {
        color: #fff;
        padding: 0px 15px !important;
    }

    .book a {
        text-decoration: underline !important;
    }

    .w3l-services2 .mobile-right-info h6 a {
        font-weight: 500;
    }

    .header-section h3 {
        font-size: 36px;
    }

    .trm h3 {
        font-size: 30px;
    }

    .carousel-inner {
        position: relative;
        width: 70% !important;
        overflow: hidden;
        margin: auto;
        height: 500px;
    }

    .carousel-control-prev {
        left: 100px;
    }

    .carousel-control-next {
        right: 100px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        top: 70px;
    }

    .opening-hours {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .opening-hours li {
        display: flex;
        justify-content: space-between;
        padding: 5px 10px;
        border-bottom: 1px solid #ddd;
    }

    .opening-hours li span:first-child {
        font-weight: bold;
        width: 150px;
        /* Adjust width for proper alignment */
    }

    .opening-hours li span:last-child {
        text-align: right;
        flex: 1;
    }

    .fs-26 {
        font-size: 26px !important;
    }

    .fs-22 {
        font-size: 22px !important;
    }

    @media (max-width: 430px) {
        .header-section h1 {
            font-size: 22px !important;
        }

        .header-section h3 {
            font-size: 20px !important;
        }

        .w3l-services2 h3 {
            font-size: 18px !important;
        }
    }
</style>

@endsection
@section('content')
<!-- breadcrum -->
<section class="w3l-breadcrum">
    <div class="breadcrum">
        <div class="container">
            <p><a href="{{route('index')}}">Home</a> &nbsp; / &nbsp; Suncity Laundry Abu Dhabi</p>
        </div>
    </div>
</section>
<!-- //breadcrum -->

<!-- services block1 -->
<div class="w3-services1 py-5">
    <div class="container py-lg-3">
        <div class="header-section text-center mb-5">
            <h1 style="font-size: 36px;">Top Ranked Laundromat in Dubai, Abu Dhabi, Sharjah & Ajman</h1>
            <p>We are enthusiastic to keep you safe in this pandemic, therefore we delivered contactless clean laundries t your doorsteps.</p>
        </div>

        <section class="w3l-banner-slider mb-5">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
               
                <div class="carousel-inner">

                    <div class="carousel-item active" style="background-image: url('assets/images/near2.jpg'); height: 500px; background-size: cover; background-position: center;">
                        <div class="carousel-caption container">
                            
                        </div>
                    </div>

            
                </div>

                
                
            </div>
        </section>


        <h3 class="text-center">SunCity Laundry</h3>
        <p class="text-center mb-5">We are open now in all major cities of UAE including Abu Dhabi, Dubai, Sharjah & Ajman</p>
        <P>To ranked laundromat & dry cleaner in the region, Mohamed Bin Zayed City, Abu Dhabi. Providing launderer services since 2011. We are keen to provide one-stop commercial & no-commercial dry cleaning services to our customers, our top-rated laundry & dry cleaning services are; Wash & Fold, Ironing Services, Dry Cleaning, Curtains Cleaning, Linen & bedding cleaning services.</P>
        <P>We are enthusiastic to keep you safe in this pandemic, therefore we delivered contactless clean laundries t your doorsteps. Our pick-up & drop-off is quite free in Mohamed Bin Zayed City without any upper limit restrictions.
            It is quite easy to book a laundry & dry clean service with us at the cheapest rates, just send us a message on WhatsApp (+971 52 273 2873 or call us @ 02 552 1090, We are 24/7 here to let you enjoy your leisure time, our professionals will handle your dirty laundry.</P>
        <div class="row w3-services-grids mt-lg-5 mt-4">
            <div class="col-lg-5 w3-services-left-grid price">
                <h3>FAVOURITE SERVICES</h3>
                <ul class="ml-4 mb-4">
                    <li>Ironing Services.</li>
                    <li>Wash & Fold Services.</li>
                    <li>Wash & Fold Services.</li>
                    <li>Commercial Laundry Services.</li>
                    <li>Drop off service.</li>
                    <li>Free collection & delivery service.</li>
                </ul>
            </div>
            <div class="col-lg-7 w3-services-right-grid mt-lg-0 mt-5 mx-auto">
                <iframe width="100%" height="270" src="https://www.youtube.com/embed/bA-uDUTWUUU?si=1ncb0soRVZqFhEBO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p class="text-center mt-3">How We Work? Watch Video </p>
            </div>
            <div class="col-12 w3-services-left-grid price">
                <h3>Service Areas</h3>
                <ul class="ml-4 mb-4">
                    <li>Musaffah Shabiya 12 - Abu Dhabi - United Arab Emirates</li>
                    <li>Al Shamkhah - Abu Dhabi - United Arab Emirates</li>
                    <li>Musaffah - Abu Dhabi - United Arab Emirates</li>
                    <li>Mohamed Bin Zayed City - Abu Dhabi - United Arab Emirates</li>
                    <li>Al Wathbah - Abu Dhabi - United Arab Emirates</li>
                    <li>Musaffah ME-9 - Abu Dhabi - United Arab Emirates</li>
                    <li>Musaffah Musaffah Industrial - Abu Dhabi - United Arab Emirates</li>
                    <li>Shakhbout City - Abu Dhabi - United Arab Emirates</li>
                    <li>Madinat Al Riyad Al-Wathba North - Abu Dhabi - United Arab Emirates</li>
                    <li>Shakhbout City Al Mafraq - Abu Dhabi - United Arab Emirates</li>
                    <li>Musaffah ME-10 - Abu Dhabi - United Arab Emirates</li>
                    <li>Al Wathbah Al-Wathba South - Abu Dhabi - United Arab Emirates</li>
                    <li>Musaffah ME-11 - Abu Dhabi - United Arab Emirates</li>
                    <li>Khalifa City - Abu Dhabi - United Arab Emirates</li>
                    <li>Shabiya - Sharjah - United Arab Emirates</li>
                    <li>Musaffah M-11 - Abu Dhabi - United Arab Emirates</li>
                    <li>Abu Dhabi - United Arab Emirates</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //services block1 -->

<section class="w3l-services2">
    <div class="mobile-info py-5">
        <div class="container py-lg-3">
            <div class="header-section mb-3">
                <h2 class="fs-26">How To Book A Service</h2>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <ul>
                        <li>1- To book a service quickly, visit our google my business profile, where you can also chat with our customer services team or can ask any question related to your laundry & dry clean requirements; <a href="https://g.page/laundry-service-ae?gm" target="_blank" rel="noreferrer noopener" class="wixui-rich-text__text">@laundry-service-ae</a></li>
                        <li>2- We are available on all your favorite social platforms, you can book a service with us using Facebook by following the given link; <a href="https://www.facebook.com/laundryservice.ae" target="_blank" rel="noreferrer noopener" class="wixui-rich-text__text"><span style="font-weight:bold;" class="wixui-rich-text__text"><span class="color_43 wixui-rich-text__text"><span style="text-decoration:underline;" class="wixui-rich-text__text">https://www.facebook.com/laundryservice.ae/</span></span></span></a> If you have any inquiries prior to booking, you can also chat with our customer services team using facebook messenger.</li>
                        <li>3- You can reach us on twitter to stay up to date with our latest offers & service packages, you can follow us. <a href="https://twitter.com/Laundry_uae" target="_blank" rel="noreferrer noopener" class="wixui-rich-text__text">@Laundry_uae</a></li>
                        <li>4- You can join us on the popular social network Instagram to check our latest sharing photos, videos & regular offers, we are available with ; <a href="https://www.instagram.com/laundryserviceuae/" target="_blank" rel="noreferrer noopener" class="wixui-rich-text__text">https://www.instagram.com/laundryserviceuae/</a></li>
                        <li>5- You can join us on youtube for the latest videos & offers;</li>
                        <li style=" max-width: 100%;
                            display: inline-block;
                            word-break: break-all;
                            overflow-wrap: break-word;">
                            <a href="https://www.youtube.com/channel/UCtONe_bE3Sr05_4Wt3EpPpQ"
                                target="_blank"
                                rel="noreferrer noopener"
                                class="wixui-rich-text__text">
                                https://www.youtube.com/channel/UCtONe_bE3Sr05_4Wt3EpPpQ
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="header-section mb-3">
                <h3 class="fs-22">Price List</h3>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <ul>
                        <li>1- Visit the page to see our latest laundry & dry cleaning service price list in Abu Dhabi: <a href="https://www.laundryservice.ae/price-list-abu-dhabi/" target="_blank" class="wixui-rich-text__text">https://www.laundryservice.ae/price-list-abu-dhabi/</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-section mb-3">
                <h3 class="fs-22">Opening Hours</h3>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-12">
                    <ul class="opening-hours">
                        <li><span>Sunday</span> <span>8:00 AM–1:00 PM - 4:00 PM–11:00 PM</span></li>
                        <li><span>Monday</span> <span>8:00 AM–1:00 PM - 4:00 PM–11:00 PM</span></li>
                        <li><span>Tuesday</span> <span>8:00 AM–1:00 PM - 4:00 PM–11:00 PM</span></li>
                        <li><span>Wednesday</span> <span>8:00 AM–1:00 PM - 4:00 PM–11:00 PM</span></li>
                        <li><span>Thursday</span> <span>8:00 AM–1:00 PM - 4:00 PM–11:00 PM</span></li>
                        <li><span>Friday</span> <span>8:00 AM–1:00 PM - 4:00 PM–11:00 PM</span></li>
                        <li><span>Saturday</span> <span>8:00 AM–1:00 PM - 4:00 PM–11:00 PM</span></li>
                    </ul>
                </div>

            </div>
            <div class="header-section mb-3">
                <h3 class="fs-22">Health & Safety</h3>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <ul>
                        <li>1- Mask required to visit the laundry</li>
                        <li>2- We advise our customers not to visit the laundry if they are suffering from fever or unusual sneezing.</li>
                        <li>3- Bring your clothing in closed bags.</li>
                        <li>4- We are providing contactless deliveries.</li>
                        <li>5- Staff wears masks.</li>
                        <li>6- Frequently disinfecting surfaces.</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14542.338793007893!2d54.5366851!3d24.3261172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34cf71b6aefd2232!2sSunCity%20Laundry!5e0!3m2!1sen!2sae!4v1614087723603!5m2!1sen!2sae" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- services block1 -->
<div class="w3l-services2 py-5">
    <div class="container py-lg-3">
        <h2>Laundry Offers</h2>
        <div class="row price mt-3">
            <div class="col-md-6 col-12">
                <div class="header-section mb-5 price">
                    <ul class="ml-4">
                        <li>
                            <p lang="en" dir="ltr">Get Your Curtain Laundry Cleaned at 30 AED/Pair<br>SunCity Laundry on <a href="https://twitter.com/hashtag/Google?src=hash&amp;ref_src=twsrc%5Etfw">#Google</a> <a href="https://t.co/6cfaYciKm0">https://t.co/6cfaYciKm0</a></p>
                        </li>
                        <li>— SunCity Laundry (@Laundry_uae) <a href="https://twitter.com/Laundry_uae/status/1364410770268643333?ref_src=twsrc%5Etfw">February 24, 2021</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="book header-section mb-5">
                    <ul class="ml-4">
                        <li>
                            <p lang="en" dir="ltr">SunCity Laundry:<a href="https://twitter.com/hashtag/laundryoffer?src=hash&amp;ref_src=twsrc%5Etfw">#laundryoffer</a> <a href="https://twitter.com/hashtag/weekend?src=hash&amp;ref_src=twsrc%5Etfw">#weekend</a> <a href="https://twitter.com/hashtag/offer?src=hash&amp;ref_src=twsrc%5Etfw">#offer</a> <a href="https://twitter.com/hashtag/AbuDhabi?src=hash&amp;ref_src=twsrc%5Etfw">#AbuDhabi</a> <br>Get 7 Kg dirty laundry bag wash &amp; fold, only <a href="https://twitter.com/40?ref_src=twsrc%5Etfw">@40</a> AED<a href="https://t.co/sPsSdGX47y">https://t.co/sPsSdGX47y</a></p>
                        </li>
                        <li>— SunCity Laundry (@Laundry_uae) <a href="https://twitter.com/Laundry_uae/status/1359736048465678337?ref_src=twsrc%5Etfw">February 11, 2021</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row price mt-3 justify-content-end">
            <div class="col-md-6 col-12">
                <div class="header-section mb-5 price">
                    <p lang="en" dir="ltr">Same-Day Laundry Service - SunCity Laundry - Abu Dhabi<a href="https://twitter.com/hashtag/wash?src=hash&amp;ref_src=twsrc%5Etfw">#wash</a> &amp; fold, Steam Pressing, Dry Cleaning.<a href="https://twitter.com/hashtag/laundry?src=hash&amp;ref_src=twsrc%5Etfw">#laundry</a> <a href="https://twitter.com/hashtag/AbuDhabi?src=hash&amp;ref_src=twsrc%5Etfw">#AbuDhabi</a> <br>Visit us:<a href="https://t.co/9MAiQmt2o5">https://t.co/9MAiQmt2o5</a><br>We are on all your favorite social platform:<br>Facebook:<a href="https://t.co/g46AVPjhMF">https://t.co/g46AVPjhMF</a><br>Instagram:<a href="https://t.co/eEr01AyS0H">https://t.co/eEr01AyS0H</a> <a href="https://t.co/qYV77BghMn">pic.twitter.com/qYV77BghMn</a></p>
                    — SunCity Laundry (@Laundry_uae) <a href="https://twitter.com/Laundry_uae/status/1352868097456267265?ref_src=twsrc%5Etfw">January 23, 2021</a>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <iframe class="wuksD5" title="Embedded Content" name="htmlComp-iframe" width="100%" height="557" allow="fullscreen" data-src="" src="https://www-laundryservice-ae.filesusr.com/html/48295e_f5f753738723d5595a151dd0c5f8e45e.html"></iframe>
            </div>
            <div class="col-md-6 col-12">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flaundryservice.ae%2Fposts%2F201888338395075&amp;width=500&amp;show_text=true&amp;height=557&amp;appId" width="100%" height="557" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>
</div>
 <div class="space overflow-hidden" style="margin-top: -100px" id="faq-sec">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-6 text-center text-xl-start align-self-center">
                    <div class="">
                        <div class="title-area text-center text-xl-start">
                            <span class="sub-title style1">FAQ</span>
                            <h2 class="sec-title">Frequently Asked Have Any Questions</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What
                                        Services Do You Offer?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We value your feedback! Let us know about your experience
                                            and if there's anything else we can do to make your laundry service even
                                            better. We're always here to assist you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        Do You Have Certified Technicians?
                                    </button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We value your feedback! Let us know about your experience
                                            and if there's anything else we can do to make your laundry service even
                                            better. We're always here to assist you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        Can You Provide a Customized Service Plan?
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We value your feedback! Let us know about your experience
                                            and if there's anything else we can do to make your laundry service even
                                            better. We're always here to assist you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        What is Your Pricing Structure?
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We value your feedback! Let us know about your experience
                                            and if there's anything else we can do to make your laundry service even
                                            better. We're always here to assist you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-img1 ps-xl-4">
                        <div class="img1"><img loading="lazy"src="{{asset('/assets/front/img/normal/faq_1_1.png')}}" alt="faq" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection