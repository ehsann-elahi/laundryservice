@extends('layouts.app')
@section('title', 'Best Laundry Services in Dubai, Abu Dhabi, Ajman & Sharjah')

@section('description',
    'Get fast, affordable, and professional laundry services across Dubai, Abu Dhabi, Ajman & Sharjah. From daily wear to delicate fabrics, enjoy free next-day delivery and express options tailored to your needs — all at unbeatable prices.')

@section('og:title', 'Professional Laundry Services in Dubai & Nearby Cities')

@section('og:description',
    'Experience top-rated laundry services in Dubai, Abu Dhabi, Ajman & Sharjah. We offer quick turnaround, free next-day delivery, and urgent express options — all at great prices and guaranteed satisfaction.')

@section('og:url', 'https://www.laundryservice.ae/services')
@section('canonical', 'https://www.laundryservice.ae/services')

@section('styles')
    <style>
        .color-change {
            filter: invert(63%) sepia(91%) saturate(700%) hue-rotate(359deg) brightness(101%) contrast(102%);
        }
    </style>
@endsection


@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">SERVICES</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="text-white">Services</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="bg-top-center space" data-bg-src="{{asset('/assets/front/img/bg/service_bg_1.jpg')}}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Best Services</span>
                <h2 class="sec-title">Our Best Laundry Services For You!</h2>
                <p>Get spotless results with our professional laundry service tailored to your needs.</p>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-box">
                                <div class="service-box_wrapper">
                                    <div class="service-box_img"><img loading="lazy"src="{{asset('/assets/front/img/service/service_box_2.jpg')}}"
                                            alt="img" /></div>
                                    <div class="service-box_icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_box_1.svg')}}" 
                                            alt="Icon" /></div>
                                </div>
                                <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                    <h3 class="box-title"><a href="{{route('curtain-cleaning')}}">Dry Cleaning</a></h3>
                                    <p class="service-box_text">Dry cleaning is a method of cleaning clothing and
                                        textiles.</p>
                                    <a href="{{route('curtain-cleaning')}}" class="th-btn border">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box">
                                <div class="service-box_wrapper">
                                    <div class="service-box_img"><img loading="lazy"src="{{asset('/assets/front/img/service/wf3.jpg')}}"
                                            alt="img" /></div>
                                    <div class="service-box_icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_box_2.svg')}}" 
                                            alt="Icon" /></div>
                                </div>
                                <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                    <h3 class="box-title"><a href="{{route('washnFold')}}">Wash & Fold</a></h3>
                                    <p class="service-box_text">No time for laundry! Let's do it because we are professional & love to do it</p>
                                    <a href="{{route('washnFold')}}" class="th-btn border">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box">
                                <div class="service-box_wrapper">
                                    <div class="service-box_img"><img loading="lazy"src="{{asset('/assets/front/img/service/pressing.png')}}"
                                            alt="img" /></div>
                                    <div class="service-box_icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_box_3.svg')}}" 
                                            alt="Icon" /></div>
                                </div>
                                <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                    <h3 class="box-title"><a href="{{route('pressing')}}">Ironing Service</a></h3>
                                    <p class="service-box_text">Save time & money! Drop off your laundry & let our professional do ironing.</p>
                                    <a href="{{route('pressing')}}" class="th-btn border">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box">
                                <div class="service-box_wrapper">
                                    <div class="service-box_img"><img loading="lazy"src="{{asset('/assets/front/img/service/wp.png')}}"
                                            alt="img" /></div>
                                    <div class="service-box_icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_box_4.svg')}}" 
                                            alt="Icon" /></div>
                                </div>
                                <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                    <h3 class="box-title"><a href="{{route('washNPress')}}">Wash & Press</a></h3>
                                    <p class="service-box_text">The washing & pressing service starts from only 3 AED.
                                        Also, available same-day.</p>
                                    <a href="{{route('washNPress')}}" class="th-btn border">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box">
                                <div class="service-box_wrapper">
                                    <div class="service-box_img"><img loading="lazy"src="{{asset('/assets/front/img/service/curtain.png')}}"
                                            alt="img" /></div>
                                    <div class="service-box_icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_box_5.svg')}}" 
                                            alt="Icon" /></div>
                                </div>
                                <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                    <h3 class="box-title"><a href="{{route('curtain-cleaning')}}">Curtain Cleaning</a>
                                    </h3>
                                    <p class="service-box_text">We are experts in dry cleaning all types of curtains using
                                        modern technology.</p>
                                    <a href="{{route('curtain-cleaning')}}" class="th-btn border">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box">
                                <div class="service-box_wrapper">
                                    <div class="service-box_img"><img loading="lazy"src="{{asset('/assets/front/img/service/service_grid_3.jpg')}}"
                                            alt="img" /></div>
                                    <div class="service-box_icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_box_6.svg')}}" 
                                            alt="Icon" /></div>
                                </div>
                                <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                    <h3 class="box-title"><a href="{{route('curtain-cleaning')}}">Carpets & Upholstery</a></h3>
                                    <p class="service-box_text">Get clean your bed sheets, blankets, carpets and Sofa & Mattress with care</p>
                                    <a href="{{route('carpet')}}" class="th-btn border">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box">
                                <div class="service-box_wrapper">
                                    <div class="service-box_img"><img loading="lazy"src="{{asset('/assets/front/img/service/cl.png')}}"
                                            alt="img" /></div>
                                    <div class="service-box_icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_box_6.svg')}}" 
                                            alt="Icon" /></div>
                                </div>
                                <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                    <h3 class="box-title"><a href="{{route('price_abuDhabi')}}">Commercial Laundry</a></h3>
                                    <p class="service-box_text">Let us do the laundry for your business</p>
                                    <a href="{{route('price_abuDhabi')}}"class="th-btn border">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#serviceSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#serviceSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

     <section class="position-relative overflow-hidden space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Work Process</span>
                <h2 class="sec-title">How We Work It!</h2>
            </div>
            <div class="step-wrap">
                <div class="process-line"></div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="process-card">
                            <div class="box-icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/process_card_1.svg')}}" alt="icon" />
                            </div>
                            <div class="box-content">
                                <div class="box-top">
                                    <p class="box-number">Step - 01</p>
                                    <h3 class="box-title">Schedule Your Service</h3>
                                </div>
                                <p class="box-text">Begin by scheduling your laundry service. You can choose from our
                                    convenient options</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="process-card active">
                            <div class="box-icon"><img loading="lazy"class="color-change"
                                    src="{{asset('/assets/front/img/icon/process_card_2.svg')}}" alt="icon" />
                            </div>
                            <div class="box-content">
                                <div class="box-top">
                                    <p class="box-number">Step - 02</p>
                                    <h3 class="box-title">Expert Cleaning Process</h3>
                                </div>
                                <p class="box-text">Once we receive your laundry, our skilled team takes over. Your
                                    cloth are sorted based.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="process-card">
                            <div class="box-icon"><img loading="lazy"src="{{asset('/assets/front/img/icon/process_card_3.svg')}}" alt="icon" />
                            </div>
                            <div class="box-content">
                                <div class="box-top">
                                    <p class="box-number">Step - 03</p>
                                    <h3 class="box-title">Packaging and Delivery</h3>
                                </div>
                                <p class="box-text">We take pride in using eco-friendly packaging materials. If you've
                                    opted for our pickup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-sec mb-5" data-pos-for=".team-area" data-sec-pos="bottom-half">
        <div class="container th-container">
            <div class="cta-area" data-overlay="title" data-opacity="9" data-bg-src="{{asset('/assets/front/img/bg/cta_bg_1.jpg')}}">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 mb-5 mb-lg-0">
                        <div class="title-area mb-0 text-center text-lg-start">
                            <span class="sub-title style1 text-white">Get Free Contact For Services</span>
                            <h2 class="sec-title text-white">You Get Premium Laundry Service From Us!</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                       <div class="cta-group justify-content-lg-end justify-content-center"> <a href="{{route('booking-form')}}"
                                class="th-btn style3">Get Our Services</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


       <section class="overflow-hidden space " style="margin-top: -50px" id="testi-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="swiper th-slider testi-grid-thumb"
                        data-slider-options='{"effect":"slide","slidesPerView":"6","spaceBetween":7,"loop":false}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-img"><img loading="lazy"src="{{asset('/assets/front/img/testimonial/test11.jpg')}}" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img loading="lazy"src="{{asset('/assets/front/img/testimonial/test1.jpg')}}" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img loading="lazy"src="{{asset('/assets/front/img/testimonial/test3.jpg')}}" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img loading="lazy"src="{{asset('/assets/front/img/testimonial/test33.jpg')}}" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img loading="lazy"src="{{asset('/assets/front/img/testimonial/test44.png')}}" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img loading="lazy"src="{{asset('/assets/front/img/testimonial/test66.jpg')}}" alt="Image" />
                                </div>
                            </div>
                        </div>
                        <div class="testi-grid_shape"></div>
                        <div class="testi-quote"><img loading="lazy"src="{{asset('/assets/front/img/icon/quote_3.svg')}}" alt="" /></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sub-title style1">Testimonials</span>
                        <h2 class="sec-title">Our Clients Feedback</h2>
                    </div>
                    <div class="swiper th-slider" id="testiSlide1"
                        data-slider-options='{"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid-thumb"}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="testi-grid_text">
                                        Absolutely. Our staff is trained to handle a variety of fabrics, including delicate
                                        and formal wear. We take special care to follow care many on instructions and use
                                        gentle processes to preserve
                                        the quality of your specialty items man our
                                    </p>
                                    <div class="testimonial-profile">
                                        <div class="testi-grid_wrapper">

                                            <div class="testi-grid_content">
                                                <div class="testi-grid_review">
                                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                </div>
                                                <h3 class="testi-grid_name box-title">Brooklyn Simmons</h3>
                                                <span class="testi-grid_desig">UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <div class="testi-quote"><img loading="lazy"class="color-change"
                                                src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="testi-grid_text">
                                        Diversity is a cornerstone of our farming philosophy. We carefully select a wide
                                        range of crops, ensuring balanced, This not only helps to naturally deter pests and
                                        diseases but also promotes soil
                                        health by varying the different plants
                                    </p>
                                    <div class="testimonial-profile">
                                        <div class="testi-grid_wrapper">

                                            <div class="testi-grid_content">
                                                <div class="testi-grid_review">
                                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                </div>
                                                <h3 class="testi-grid_name box-title">Savannah Nguyen</h3>
                                                <span class="testi-grid_desig">Founder CEO</span>
                                            </div>
                                        </div>
                                        <div class="testi-quote"><img loading="lazy"class="color-change"
                                                src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="testi-grid_text">
                                        Garments made of delicate fabrics, those with intricate detailing, and those labeled
                                        dry clean only should be taken dry The frequency of dry cleaning depends on factors
                                        such as the type of
                                        garment, how often it's worn, and if exposed stains
                                    </p>
                                    <div class="testimonial-profile">
                                        <div class="testi-grid_wrapper">

                                            <div class="testi-grid_content">
                                                <div class="testi-grid_review">
                                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                </div>
                                                <h3 class="testi-grid_name box-title">Cameron Williamson</h3>
                                                <span class="testi-grid_desig">Project Manager</span>
                                            </div>
                                        </div>
                                        <div class="testi-quote"><img loading="lazy"class="color-change"
                                                src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="testi-grid_text">
                                        Absolutely. Our staff is trained to handle a variety of fabrics, including delicate
                                        and formal wear. We take special care to follow care many on instructions and use
                                        gentle processes to preserve
                                        the quality of your specialty items man our
                                    </p>
                                    <div class="testimonial-profile">
                                        <div class="testi-grid_wrapper">

                                            <div class="testi-grid_content">
                                                <div class="testi-grid_review">
                                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                </div>
                                                <h3 class="testi-grid_name box-title">Alex Hamilton</h3>
                                                <span class="testi-grid_desig">E-commerce Solutions</span>
                                            </div>
                                        </div>
                                        <div class="testi-quote"><img loading="lazy"class="color-change"
                                                src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="testi-grid_text">
                                        Diversity is a cornerstone of our farming philosophy. We carefully select a wide
                                        range of crops, ensuring balanced, This not only helps to naturally deter pests and
                                        diseases but also promotes soil
                                        health by varying the different plants
                                    </p>
                                    <div class="testimonial-profile">
                                        <div class="testi-grid_wrapper">

                                            <div class="testi-grid_content">
                                                <div class="testi-grid_review">
                                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                </div>
                                                <h3 class="testi-grid_name box-title">Jasemin Jui</h3>
                                                <span class="testi-grid_desig">Disaster Recovery</span>
                                            </div>
                                        </div>
                                        <div class="testi-quote"><img loading="lazy"class="color-change"
                                                src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="testi-grid_text">
                                        Garments made of delicate fabrics, those with intricate detailing, and those labeled
                                        dry clean only should be taken dry The frequency of dry cleaning depends on factors
                                        such as the type of
                                        garment, how often it's worn, and if exposed stains
                                    </p>
                                    <div class="testimonial-profile">
                                        <div class="testi-grid_wrapper">

                                            <div class="testi-grid_content">
                                                <div class="testi-grid_review">
                                                    <i class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i><i
                                                        class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                </div>
                                                <h3 class="testi-grid_name box-title">Martin Danial</h3>
                                                <span class="testi-grid_desig">E-commerce Solutions</span>
                                            </div>
                                        </div>
                                        <div class="testi-quote"><img loading="lazy"class="color-change"
                                                src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
