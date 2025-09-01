
@extends('layouts.app')
@section('title', 'Laundry Service Return Policy | Dubai & Abu Dhabi')
@section('description','Your clothes are protected with us! We have adopted a very transparent policy to facilitate our valued launder customers in case of any undesired situation. Our Laundry staff is trained & having experience of more than 12 years.')
@section('og:title', 'Laundry Service Return Policy | Dubai & Abu Dhabi')
@section('og:description','Your clothes are protected with us! We have adopted a very transparent policy to facilitate our valued launder customers in case of any undesired situation. Our Laundry staff is trained & having experience of more than 12 years.')
@section('canonical', url()->current())
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/ehs.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Term & Conditions</h1>
                
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="text-white">Term & Conditions</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w3-services1 py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center mb-5">
                <h2 style="font-size: 36px">Term & Conditions</h2>
            </div>
            <div class="row w3-services-grids mt-lg-5 mt-4">
         	<p>{!! $setting->terms_condition ?? '' !!}</p>
            <p>By using our laundry services, you agree to the following terms and conditions. We take care to handle all items with the utmost care, but we are not responsible for damage caused by normal wear and tear, loose color, shrinking, or items left in pockets. Customers must check their clothing for valuables before handing them over. While we aim to return all items, we are not liable for any lost or misplaced garments if not reported within 24 hours of delivery. Payment is due upon delivery unless otherwise agreed. We reserve the right to refuse service for items we believe may be unsafe to clean. Using our website or placing an order means you accept these terms</p>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space-bottom mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center pe-xl-4 ps-xl-4">
                        <span class="sub-title">Services</span>
                        <h2 class="sec-title">Featured Services</h2>
                        <p>Explore our most popular and trusted services, including laundry pickup & delivery, dry cleaning, curtain cleaning, and ironing service.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-md-6 col-xl-auto">
                    <div class="service-block style1 wow fadeInLeft">
                        <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_1.svg')}}" alt="Service" />
                        </div>
                        <div class="service-block_wrapper">
                            <h3 class="box-title">Easy Scheduling</h3>

                        </div>
                    </div>
                    <div class="service-block style1 wow fadeInLeft">
                        <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_2.svg')}}" alt="Service" />
                        </div>
                        <div class="service-block_wrapper">
                            <h3 class="box-title">Lowest Price guarantee</h3>
                        </div>
                    </div>
                    <div class="service-block style1 wow fadeInLeft">
                        <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_3.svg')}}" alt="Service" />
                        </div>
                        <div class="service-block_wrapper">
                            <h3 class="box-title">Hight Quality</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-auto text-center d-none d-xl-block">
                    <div class="service-image wow fadeInUp"><img loading="lazy"src="{{asset('/assets/front/img/normal/choose-img.png')}}"
                            alt="" /></div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="service-block wow fadeInLeft">
                        <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_4.svg')}}" alt="Service" />
                        </div>
                        <div class="service-block_wrapper">
                            <h3 class="box-title">Efficiency & Quick Responce</h3>
                        </div>
                    </div>
                    <div class="service-block wow fadeInLeft">
                        <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_5.svg')}}" alt="Service" />
                        </div>
                        <div class="service-block_wrapper">
                            <h3 class="box-title">Minimum Disruption</h3>
                        </div>
                    </div>
                    <div class="service-block wow fadeInLeft">
                        <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_6.svg')}}" alt="Service" />
                        </div>
                        <div class="service-block_wrapper">
                            <h3 class="box-title">Hussle Free Services</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <div class="img1"><img loading="lazy" src="{{asset('/assets/front/img/normal/faq_1_1.png')}}" alt="faq" /></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection