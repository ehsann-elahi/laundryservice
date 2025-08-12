@extends('layouts.app')
@section('title', 'Laundromat in Abu Dhabi | SunCity Laundry | Abu Dhabi | SunCity Laundry')
@section('og:description', "SUNCITY LAUNDRY")
@section('og:title', 'Laundromat in Abu Dhabi | SunCity Laundry | Abu Dhabi | SunCity Laundry')
@section('og:description', "SUNCITY LAUNDRY")
@section('og:url', 'https://www.laundryservice.ae/laundry-faqs')
@section('canonical', 'https://www.laundryservice.ae/laundry-faqs')
@section('styles')
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background-color: #fff;
        color: #333;
    }

    section.blind-section {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 80px 10%;
        gap: 60px;
        background-color: #f9f9f9;
        flex-wrap: wrap;
    }

    .blind-image img {
        width: 500px;
        max-width: 100%;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .blind-image img:hover {
        transform: scale(1.02);
    }

    .blind-content {
        max-width: 600px;
    }

    .blind-content h2 {
        font-size: 38px;
        margin-bottom: 20px;
        color: #444;
        font-weight: 600;
    }

    .blind-content p {
        font-size: 17px;
        line-height: 1.7;
        color: #555;
    }

    .blind-content p strong {
        font-weight: 700;
        color: #333;
    }

    .cta-button {
        display: inline-block;
        margin-top: 30px;
        padding: 12px 28px;
        background: #2B2F7B;
        color: white;
        border: none;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .cta-button:hover {
        transform: translateY(-2px);
        background: #f7941f;
        color: white;
    }

    @media (max-width: 768px) {
        section.blind-section {
            flex-direction: column;
            text-align: center;
            padding: 60px 20px;
        }

        .blind-content h2 {
            font-size: 30px;
        }

        .blind-content p {
            font-size: 16px;
        }
    }
</style>
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/breadcumb-bg.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Laundry FAQs</h1>

            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">Laundry FAQs</li>
            </ul>
        </div>
    </div>
</div>

<section class="blind-section">
    <div class="row">
        <div class="col-6">
            <div class="blind-image">
                <img src="{{ asset('/assets\front\img\faq.png') }}" alt="Zebra Blinds">
            </div>
        </div>
        <div class="col-6">
            <div class="blind-content">
                <h2>My laundry is not listed in the price list, how to know the price?</h2>
                <p>We are enthusiastic to provide complete home laundry solutions to our customers under the one roof, we can understand there are numerous types of textile that can't be covered in a rate list, we advise you to <span style="text-decoration:underline;" class="wixui-rich-text__text"><a href="https://www.laundryservice.ae/" target="_blank" class="wixui-rich-text__text">contact</a></span> our customer support team by any convenient method and share information to get best solution & price.</p>
                <a href="https://wa.me/971522732873?text=Hi!%20I'm%20looking%20for%20laundry%20pickup"
                    id="supportBtn" target="_blank" class="cta-button">
                    <i class="fab fa-whatsapp"></i></i> <span>Quick Support</span>
                </a>
            </div>
        </div>
    </div>


</section>

<div class="w3-services1 ">
    <div class="container ">
        <div class="header-section text-center mt-2">
            <h2 style="font-size: 36px">Laundry FAQs</h2>
            <p>Our FAQs are designed to help you understand how our professional laundry service works — quickly and easily.</p>
        </div>
        <div class="row w3-services-grids  ">
            <p>{!! $setting->faq ?? '' !!}
        </div>
    </div>
</div>
<div class="w3-services1 py-5">
    <div class="container py-lg-3">
        <div class="header-section mb-3">
            <h3 style="font-size: 32px">How SunCity laundry is providing quality services at these lowest prices?</h3>
            <p>It's pleasure to assist you! We are offering high-quality services at the lowest prices in an Abu Dhabi market because we are collecting orders directly online from customers and handle all laundry service processes from the collection, laundry/dry cleaning, packing & delivery by our own fleets that support us to give the best laundry services at cheaper prices.:-) There is no third party involved.</p>
            <h3 style="font-size: 32px">How much does it cost to get the wash & fold clothes in Abu Dhabi?</h3>
            <p>Wash & fold service in Abu Dhabi varies from 2 AED to 5 AED per item, it depends upon the customer what other services he/she expects from the laundry service provider.</p>
            <h3 style="font-size: 32px">How to save on the laundry ironing services when visiting or living in Abu Dhabi?</h3>
            <p>If you want to save more visit SunCity laundry in Mohamed Bin Zayed City & drop off your laundry for pressing, it will save you a lot. In another case, if it is difficult to commute or you are a busy person, you can avail of pickup & drop service that costs you an extra 10 AED, however, pickup & delivery service is free if you order 49AED or more.</p>
            <h3 style="font-size: 32px">How can I come to know that what laundry offer is going on currently?</h3>
            <p>It's very simple, we are almost on all your favourite social platforms, you can follow us there or you can also visit our website regularly to check for the latest offers & packages.</p>
            <h3 style="font-size: 32px">How much does it cost to clean carpet in Abu Dhabi & Dubai?</h3>
            <p>Carpet cleaning rates are calculated as per the area of the carpet in the meter unit and prices vary as low as from 12 AED to 30 AED per square meter. It mainly depends upon which type of carpet cleaning process you choose for your carpets.</p>
            <h3 style="font-size: 32px">How do I calculate the carpet cleaning price?</h3>
            <p>First, you need to check the what is price your company offer per square meter. Then measure the carpet size in two directions length & width. Multiply length & width that will be the total area of carpet in square meters. Then multiply the area with the price offered by your service provider that is in the case of LaundryService.AE is 15 AED/Square meters only.</p>
            <h3 style="font-size: 32px">What is the best way to clean the carpets?</h3>
            <p>Prices vary from as per their cleaning process, mainly companies in Dubai & Abu Dhabi offer two types of cleaning services, at-home carpet cleaning service & carpet cleaning service in the industry that is also called deep cleaning carpet cleaning. Experts recommend a later cleaning treatment to get rid-of complete dust, bacteria, germs & viruses.</p>
            <h3 style="font-size: 32px">How can I avail a laundry & dry cleaning offer?</h3>
            <p>It is quite easy & hassle-free, just contact our customer support team (WhatsApp; +971 52 273 2873) & book service, automatically we will include your order in the latest going on offer.</p>
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
                    <div class="img1"><img loading="lazy" src="{{asset('/assets/front/img/normal/faq_1_1.png')}}" alt="faq" /></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection