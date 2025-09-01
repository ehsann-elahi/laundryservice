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
@section('title', 'Best Laundry & Dry Cleaning Service in Dubai | Book Online')
@section('description','Get the best Laundry & dry cleaning service in Dubai at the cheapest price with free laundry pickup & delivery service. We also provide same-day laundry, Kg laundry & urgent SUNCITY LAUNDRY LLCs, online booking. We do the ironing, steam pressing, Wash & fold. The laundromat is near Uptown, Jumeirah, Arabian Ranches, Liwan, Academic city.')
@section('og:title', 'Best Laundry & Dry Cleaning Service in Dubai | Book Online')
@section('og:description','Get the best Laundry & dry cleaning service in Dubai at the cheapest price with free laundry pickup & delivery service. We also provide same-day laundry, Kg laundry & urgent SUNCITY LAUNDRY LLCs, online booking. We do the ironing, steam pressing, Wash & fold. The laundromat is near Uptown, Jumeirah, Arabian Ranches, Liwan, Academic city.')
@section('canonical', url()->current())
@section('styles')
<style>
    .color-change {
    filter: brightness(0) saturate(100%) invert(85%) sepia(26%) saturate(690%) hue-rotate(330deg) brightness(105%) contrast(101%);
}

    .price li {
        list-style-type: disc;
        /* Ensures bullets are displayed */
    }

    .features h3 {
        font-size: 18px
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

    .dubai_styling {
        font-size: 45px;
        margin: 10px 0px;
        font-weight: 600;
    }

    .dubai_styling_para {
        font-size: 22px !important;
        margin: 10px 0px;
        font-weight: 500;
    }

    .background {
        background-color: #F5F5F5;
    }

    .dubai_style_heading {
        font-size: 22px !important;
        margin-bottom: 12px;
    }

    .secondary-color {
        color: #0890F1;
        font-weight: 600;
    }

    .bold_font {
        font-weight: 600;
    }

    .dubai_contact {
        display: flex;
        justify-content: start;
        align-items: center;
        gap: 20px;
    }

    .quick-support-btn {
        display: inline-block;
        padding: 0 30px;
        border: 1px solid #0890F1;
        line-height: 52px;
        /* Button color */
        color: #1F2C5D;
        /* Text color */
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
        text-align: center;
    }

    .quick-support-btn:hover {
        background-color: #5EC5CE;
        border: 1px solid #0890F1;
        color: white;
        /* Darker color on hover */
    }

    .dubai_para {
        font-size: 20px !important;
        margin-top: 15px !important;
    }

    .change_text_para {
        background-color: #1F2C5D;
        color: white;
        font-size: 28px;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }

    .change_text_para.fade-out {
        opacity: 0;
    }

    #perKgLaundry {
        color: #fff;
        font-size: 22px;
    }

    .fs-22 {
        font-size: 22px !important;
    }

    .fs-32 {
        font-size: 32px !important;
    }

    @media (max-width: 768px) {
        .dubai_styling {
            font-size: 38px;
        }

        #weeklyLaundry {
            padding: 10px
        }

        #perKgLaundry {
            font-size: 20px !important;
        }

        .header-section h3 {
            font-size: 30px;
        }

        .change_text_para {
            font-size: 22px;
        }

    }

    @media (max-width: 430px) {
        .dubai_styling {
            font-size: 24px !important;
        }

        .header-section h3 {
            font-size: 18px !important;
        }

        .fs-32 {
            font-size: 22px !important;
        }

        #perKgLaundry {
            font-size: 18px !important;
        }

        .header-section h4 {
            font-size: 16px !important;
        }

        .w3l-index5 p {
            font-size: 18px !important;
        }
    }

    @media (max-width: 320px) {
        #weeklyLaundry {
            font-size: 17px !important
        }

        #change_text_para {
            font-size: 14px !important;
        }

        #perKgLaundry {
            font-size: 14px !important;
        }
    }

    .theme-button {
        background-color: #0890F1;
        color: #fff;
    }


    img.aed2 {
        height: 0.8em;
        width: auto;
        vertical-align: 0.01em;
        content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMyQjJGN0IgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
    }

    .service-card {
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }

    .service-card:hover {
        background-color: #343a40;
        /* dark background */
    }

    .service-card:hover .service-title,
    .service-card:hover .service-card_text {
        color: #fff !important;
    }

    .service-card_text {
        font-size: 14px;
        color: #6c757d;
    }

    .service-title {
        color: #212529;
    }

    .box-icon img {
        filter: none;
    }


    .feature-card {
        background-color: #0890F1;
        border-radius: 16px;
        color: white !important;
        transition: all 0.3s ease-in-out;
        padding: 30px;
        height: 95%;
        position: relative;
    }

    .feature-card:hover {
        background-color: #FFD06D;
        color: white;
    }

    .feature-card:hover h5,
    .feature-card:hover p,
    .feature-card:hover strong {
        color: black !important;
    }

    .icon-box {
        width: 60px;
        height: 60px;
        background-color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .icon-box svg {
        width: 28px;
        height: 28px;
    }
</style>
@endsection
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/hotelrental.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white" style="font-size: 46px;">PROFESSIONAL LINEN RENTAL SERVICES <br> FOR YOU</h1>
            <p style="" class="text-white mt-4 text-center">We provide top-quality linen rental solutions tailored to meet the unique needs of your business,<br> ensuring both convenience and style. Let us handle your linen requirements <br> so you can focus on what matters most.</p>
        </div>
    </div>
</div>
<div class="overflow-hidden space-top" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 mt-3">
                <div class="row g-3">
                    <!-- Image 1 -->
                    <div class="col-4">
                        <div class="rounded overflow-hidden shadow-sm" style="aspect-ratio: 3/5;">
                            <img src="{{ asset('/assets/industries/1.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Image 1">
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="col-4">
                        <div class="rounded overflow-hidden shadow-sm" style="aspect-ratio: 3/5;">
                            <img src="{{ asset('/assets/industries/2.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Image 2">
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div class="col-4">
                        <div class="rounded overflow-hidden shadow-sm" style="aspect-ratio: 3/5;">
                            <img src="{{ asset('/assets/industries/3.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Image 3">
                        </div>
                    </div>
                    <!-- Image 4 -->
                    <div class="col-4">
                        <div class="rounded overflow-hidden shadow-sm" style="aspect-ratio: 3/5;">
                            <img src="{{ asset('/assets/industries/4.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Image 4">
                        </div>
                    </div>
                    <!-- Image 5 -->
                    <div class="col-4">
                        <div class="rounded overflow-hidden shadow-sm" style="aspect-ratio: 3/5;">
                            <img src="{{ asset('/assets/industries/5.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Image 5">
                        </div>
                    </div>
                    <!-- Image 6 -->
                    <div class="col-4">
                        <div class="rounded overflow-hidden shadow-sm" style="aspect-ratio: 3/5;">
                            <img src="{{ asset('/assets/industries/6.png') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Image 6">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="ps-xl-5 wow fadeInRight">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">LINEN RENTALS</span>
                        <h2 class="sec-title mb-20">Experience the Best Linen
                            Rental Services in UAE</h2>
                        <blockquote class="about-blockquote">
                            <p>
                                At our linen rental company, we specialize in providing premium linen rental services for various industries like.
                            </p>
                        </blockquote>
                    </div>
                    <div class="checklist">
                        <ul>
                            <li>HOTELS LINEN</li>
                            <li>RESTURANTS LINEN</li>
                            <li>SPA/SALOON LINEN</li>
                            <li>GYM LINEN</li>
                            <li>SPORTS CLUB LINEN</li>
                            <li>BEACH CLUBS LINEN</li>
                            <li>HOSPITALS LINEN</li>
                            <li>HOLIDAYS HOME LINEN</li>
                        </ul>
                    </div>
                    <blockquote class="about-blockquote mt-4">
                        <p>Simplify your business operations with our comprehensive linen rental services, including high-quality table linens, towels, and event-specific rentals for restaurants, hotels, and spas.</p>
                    </blockquote>

                </div>
            </div>
        </div>
    </div>
</div>



<section class="py-5 bg-light">
    <div class="container-fluid py-5 px-5">
        <div class="row py-5 px-2">
            <div class="col-lg-6">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title style1">Beneficial</span>
                    <h2 class="sec-title">Benefits of Partnering with The Suncity Laundry LLC</h2>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <p class="mt-3 text-center">Simplify your business operations with our comprehensive linen rental services, including high-quality table linens and event-specific rentals for restaurants, hotels, and spas.</p>
            </div>


            <!-- Card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="text-white"><strong>Comprehensive Linen Rental Services</strong></h5>
                    <p>At SUNCITY LAUNDRY LLC we understand the importance of first impressions. That is why we offer premium linen rentals for hospitality businesses across the region. Our services include restaurant table linens spa towels hotel sheets and more all cleaned to perfection and delivered on time.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="text-white"><strong>Cost-Effective Linen Solutions</strong></h5>
                    <p>Avoid the hassle and cost of owning linens. At SUNCITY LAUNDRY LLC we offer flexible rental plans with no capital expense. Whether you need tablecloths for events or towels for daily restaurant use we have got you covered clean ready and delivered on schedule.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="text-white"><strong>Convenient And Reliable Delivery</strong></h5>
                    <p>Experience worries free linen service with SUNCITY LAUNDRY LLC. Whether it is daily restaurant linens or tablecloths for a onetime event we deliver fresh sanitized linens right to your door on time every time. Let us handle the logistics while you focus on your guests.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="text-white"><strong>High-Quality And Hygienic Linens</strong></h5>
                    <p>At SUNCITY LAUNDRY LLC we do not compromise on cleanliness or quality. Each linen item is thoroughly cleaned pressed and inspected to meet high hygiene standards so your guests always enjoy a fresh and flawless experience.</p>
                </div>
            </div>


        </div>
        <div class="row ">



            <!-- Card 1 -->
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="text-white"><strong>Flexible Rental Plans Tailored For You</strong></h5>
                    <p>No two businesses operate the same way. Our rental plans are built to fit your pace choose what you need when you need it and we will handle the rest. Simple adjustable and completely stress free. We offer flexible linen rental plans designed around your schedule budget and needs whether you need daily deliveries or occasional service.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                   <a href="https://laundryservice.ae/enviornment-health-safety-policy"> <h5 class="text-white"><strong>Environmentally Friendly Practices</strong></h5></a>
                    <p>At SUNCITY LAUNDRY LLC we take responsibility for our impact on the planet. That is why we have integrated eco conscious processes into every part of our service from using energy efficient machines to reducing water waste and choosing biodegradable detergents. Our commitment to sustainability means you get fresh high quality linens without compromising the environment.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="text-white"><strong>Fully Insured And Compliant Service</strong></h5>
                    <p>SUNCITY LAUNDRY LLC operates with full insurance coverage and meets all necessary regulatory standards including DMC approvals. Our clients trust us because we do not just deliver clean linens we do it responsibly. From pickup to delivery every step of our process is managed with safety care and legal compliance in mind giving your business peace of mind and dependable support.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card shadow-sm">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="#FFD06D" stroke-width="2" fill="white" />
                            <path d="M8 12l2 2 4-4" stroke="#FFD06D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5 class="text-white"><strong>Local Availability For Quick Service</strong></h5>
                    <p>Based in Dubai Investment Park SUNCITY LAUNDRY LLC is strategically positioned to respond quickly to your linen needs. Whether it is urgent restaurant linen replacements or scheduled deliveries for events our proximity ensures faster turnarounds and smooth coordination. We are close by so your business never has to wait for clean high quality linens.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Custom Styles -->


<section class="team-area2 bg-title space" data-bg-src="{{asset('/assets/front/img/bg/team_bg_2.jpg')}}">
    <div class="container z-index-common">
        <div class="title-area text-center">
            <span class="sub-title text-white">LINEN RENTAL SERVICES</span>
            <h2 class="sec-title text-white">Industries We Serve</h2>
        </div>
        <div class="slider-area">
            <div
                class="swiper th-slider has-shadow"
                id="teamSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="th-team team-box style2">
                            <div class="team-img">
                                <img src="{{asset('/assets/industries/gym.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">GYM</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-team team-box style2">
                            <div class="team-img">
                                <img src="{{asset('/assets/industries/hotels.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">Hotels & Resturants</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-team team-box style2">
                            <div class="team-img">
                                <img src="{{asset('/assets/industries/spa.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">SPA</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-team team-box style2">
                            <div class="team-img">
                                <img src="{{asset('/assets/industries/hospital.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">Hospitals</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-team team-box style2">
                            <div class="team-img">
                                <img src="{{asset('/assets/industries/other.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">Many Other Businesses</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<div class="overflow-hidden space-bottom mt-5">
    <div class="container">
        <div class="title-area text-center mt-5">
            <h3 class="sub-title">Trusted by Millions</h3>
            <h2 class="sec-title">All-in-One Stop for Your Linen Needs</h2>
            <p>You can also find local options for linen hire or affordable linen rentals that will perfectly suit your needs for events, including tablecloth rentals near me and party linen rentals.</p>
        </div>
        <div class="counter-card-wrap">
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">16</span>M+</h2>
                    <p class="box-text">Laundry & Dry Complete</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">18</span>k+</h2>
                    <p class="box-text">Garments in Circulation</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">12</span>M+</h2>
                    <p class="box-text">Satisfied Our Customer</p>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
</div>


<section class="cta-sec mb-5 mt-5" data-pos-for=".team-area" data-sec-pos="bottom-half">
    <div class="container th-container">
        <div class="cta-area" data-overlay="title" data-opacity="9" data-bg-src="{{asset('/assets/front/img/bg/cta_bg_1.jpg')}}">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 mb-5 mb-lg-0">
                    <div class="title-area mb-0 text-center text-lg-start">
                        <span class="sub-title style1 text-white">Get Free Contact For Services</span>
                        <h2 class="sec-title text-white">You Get Premium SUNCITY LAUNDRY LLC From Us!</h2>
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


@endsection