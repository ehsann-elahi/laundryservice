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
@section('title', 'Best Dry Clean & Laundry Near in Ajman & Sharjah')
@section('description','Are you searching for the best Laundry & dry cleaning service with free laundry pickup & delivery service in Ajman & Sharjah at the cheapest price? We provide same-day laundry, per kg & urgent laundry services, online booking & payment. We do carpet & curtains cleaning, clothe ironing, steam pressing, Wash & fold. The laundromat is near Al Nuaimia, Al Rashidiya, Al Rumailah, Al Nakhil, Al Meshairef, Al Jerf.')
@section('og:title', 'Best Dry Clean & Laundry Near in Ajman & Sharjah')
@section('og:description','Are you searching for the best Laundry & dry cleaning service with free laundry pickup & delivery service in Ajman & Sharjah at the cheapest price? We provide same-day laundry, per kg & urgent laundry services, online booking & payment. We do carpet & curtains cleaning, clothe ironing, steam pressing, Wash & fold. The laundromat is near Al Nuaimia, Al Rashidiya, Al Rumailah, Al Nakhil, Al Meshairef, Al Jerf.')
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
        color: white;
        /* Text color */
        text-decoration: none;
        background-color: #0890F1;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
        text-align: center;
        border-radius: 20px;
    }

    .quick-support-btn:hover {
        background-color: #FFD06D;
        border: 1px solid #FFD06D;
        color: white;
        /* Darker color on hover */
    }
.quick-support-btn1 {
        display: inline-block;
        padding: 0 50px;
        border: 1px solid #FFD06D;
        line-height: 52px;
        /* Button color */
        color: white;
        /* Text color */
        text-decoration: none;
        background-color: #FFD06D;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
        text-align: center;
        border-radius: 20px;
    }

    .quick-support-btn1:hover {
        background-color: #0890F1;
        border: 1px solid #0890F1;
        color: white;
        /* Darker color on hover */
    }

    .dubai_para {
        font-size: 20px !important;
        margin-top: 15px !important;
    }

    .change_text_para {
        background-color: #FFD06D;
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
      img.aed2{
    height:0.8em;
    width:auto;
    vertical-align: 0.01em;
    content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMyQjJGN0IgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
}
</style>

@endsection
@section('content')


<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/sharjah.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title" style="font-size: 40px;">ONE OF THE BEST PROFESSIONAL DRY CLEAN & LAUNDER in AJMAN & SHARJAH</h1>

            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">AJMAN & SHARJAH</li>
            </ul>
        </div>
    </div>
</div>
<!-- services block1 -->
<div class="w3-services1  background">
    <div class="container py-lg-3">
        <div class="row w3-services-grids mt-lg-5 ">
            <div class="col-lg-7 w3-services-left-grid">
                <div class="header-section">
                    <h2 class="dubai_styling" style="font-size: 36px;">AJMAN & SHARJAH</h2>
                    <h3 class="dubai_styling_para">Get cleaned regular laundry, carpets, curtains & blankets at the
                        cheapest price</h3>
                </div>
                <h4 class="dubai_style_heading">It's quite <span class="primary-color bold_font">Easy &
                        Convenient,</span> let's see the available time</h5>
                <div class="dubai_contact">
                    <a href="https://wa.me/971522732873?text=Hi!%20I'm%20looking%20for%20laundry%20pickup" class="quick-support-btn">
                        <i class="fa fa-phone"></i>
                        <span>Quick Support</span>
                    </a>
                    <a href="{{route('booking-form')}}" class="quick-support-btn1">
                        <i class="fa fa-handshake-o"></i> Book Now
                    </a>
                </div>
                <p class="dubai_para">It's quite easy & convenient, let's see the collection time</p>
            </div>
            <div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
                <img loading="lazy"src="{{asset('/assets/images/image_move.gif')}}" class="img-fluid img-curve" alt="" />
            </div>
        </div>
    </div>
    <div class="w-full">
        <p class="text-center text-2xl change_text_para">First Ever Family Laundry in Ajman & Sharjah</p>
    </div>
</div>
<!-- //services block1 -->

<section class="position-relative overflow-hidden space-bottom mt-5">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Work Process</span>
            <h2 class="sec-title">How it Works!</h2>
            <p>Schedule your service, let our experts clean your clothes, and get them delivered fresh and neatly packaged.</p>
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

<section class="space py-5">
    <div class="container mt-5">
        <div class="title-area text-center">
            <span class="sub-title">What We Offer</span>
            <h2 class="sec-title">Our Best Loved Laundry Packages Ajman and Sharjha</h2>
            <h3 class="" style="font-size: 26px">Cheaper - Suitable - Convenient</h3>
            <p>Pay Per Kg Packages - Transparent - Convenient - Suitable</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @foreach ($packages as $package)
            <div class="col-xl-4 col-md-6">
                <div class="price-card">

                    <h3 class="box-title">{{ $package->name }}</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price" style="font-size: 22px"><img class="aed2">
                            {{ $package->price }}<span
                                class="period">/{{ $package->weight }}</span>
                        </h4>

                        <div class="checklist">
                            <ul>
                                {!! $package->list !!}
                            </ul>
                        </div>
                        <div class="form-btn col-6 mt-4"><button class="th-btn btn-fw"><a
                                    href="{{ route('booking-form') }}" class="text-white"> Schedule Pickup Now
                                </a></button>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="bg-top-center space" data-bg-src="{{asset('/assets/front/img/bg/service_bg_1.jpg')}}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Best Services</span>
            <h2 class="sec-title">Our Premium Laundry Services in Ajman & Sharjah!</h2>
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
                                <p class="service-box_text">The washing & pressing service starts from only 3 <img class="aed2">
                                    .
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
                                <a href="{{route('price_abuDhabi')}}" class="th-btn border">Read More</a>
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

<section class="overflow-hidden space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center pe-xl-4 ps-xl-4">
                    <h2 class="sub-title">Why LaundryService.ae?</h2>
                    <h3 style="font-size: 26px" class="sec-title">More than 20 years of trusted laundry services in Dubai</h3>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-md-6 col-xl-auto">
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_1.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">On Demand</a></h3>
                        <p class="mb-0">You can place an order at any time, any day and schedule a pick-up and delivery time that works best for you.</p>
                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_2.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Reliable and Hassle-Free</a></h3>
                        <p class="mb-0">All you have to do is place an order and we will get the job done quickly & efficiently saving your time to enjoy life!</p>
                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_3.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Revitalize Your Fabrics</a></h3>
                        <p class="mb-0">We use eco-friendly and hypoallergenic detergents to ensure the safety</p>
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
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Live Chat & Support</a></h3>
                        <p class="mb-0">We have a professional dedicated customer services team to support 08:00AM to 11:00PM</p>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_5.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">No Third Party</a></h3>
                        <p class="mb-0">Our investment is our customers trust, therefore, to ensure safety, we own complete laundry service</p>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_6.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">No Extra Charges, No Minimum Cap</a></h3>
                        <p class="mb-0">Collection & delivery service is complimentary on all 1st-time orders in The Palm Jumeirah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space py-5">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Competitive. Affordable. Transparent</span>
            <a href="https://laundryservice.ae/laundry-price-list-ajman"><h2 class="sec-title">LAUNDRY & DRY CLEANING PRICING in Ajman & Sharjah</h2></a>
            <p>Pay Per Piece - Transparent - Convenient - Suitable</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @foreach ($allpackages as $pack)
            <div class="col-xl-4 col-md-6">
                <div class="price-card">

                    <h3 class="box-title"> {{ $pack->name }}</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price" style="font-size: 22px"><img class="aed2">
                            {{ $pack->price }}<span
                                class="period">{{ $pack->weight }}</span>
                        </h4>

                        <div class="checklist">
                            <ul>
                                {!! $pack->list !!}
                            </ul>
                        </div>
                        <div class="form-btn col-6 mt-4"><button class="th-btn btn-fw"><a
                                    href="{{ route('booking-form') }}" class="text-white"> Schedule Pickup Now
                                </a></button>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="space overflow-hidden " id="faq-sec">
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


@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch default category (MEN)
        fetchCategoryItems('MEN');

        // Attach event listener for category selection
        document.getElementById('categorySelect').addEventListener('change', function() {
            const category = this.value;
            fetchCategoryItems(category);
        });
    });

    function fetchCategoryItems(category) {
        if (category) {
            fetch(`/get-services?category=${category}`)
                .then(response => response.json())
                .then(data => {
                    const itemDisplay = document.getElementById('itemDisplay');
                    itemDisplay.innerHTML = ''; // Clear previous items

                    data.forEach(service => {
                        itemDisplay.innerHTML += `
                        <div class="col-lg-6 col-sm-12 feature-grid">
                            <a href="#url">
                                <div class="feature-body active">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <h3>${service.itemName}</h3>
                                        </div>
                                        <div class="col-4">
                                            <h3>${service.P_Price}</h3>
                                        </div>
                                        <div class="col-4 text-center py-2">
                                            <img loading="lazy"src="${service.image}" class="img-fluid" alt="" height="50" weight="70">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>`;
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        }
    }

    // Select the "Quick Support" button
    const quickSupportBtn = document.querySelector('.quick-support-btn');
    const quickSupportBtnText = document.querySelector('.quick-support-btn span');


    // Event listener for mouse enter (hover)
    quickSupportBtn.addEventListener('mouseenter', () => {
        quickSupportBtnText.textContent = '+971522732873'; // Change content to phone number
    });

    // Event listener for mouse leave
    quickSupportBtn.addEventListener('mouseleave', () => {
        quickSupportBtnText.textContent = 'Quick Support'; // Revert content to default
    });
</script>
@endsection