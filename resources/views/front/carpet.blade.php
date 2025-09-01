@extends('layouts.app')
@section('title', 'Carpet Cleaning Book Now 20% Discount in Dubai-Abu Dhabi')
@section('description',
    'Get your carpet, Sofa, mattress, cushion, couch wash/shampooing/steam cleaning with our premium
    services at the 20% discounted price with free pickup & delivery services in Abu Dhabi, Dubai, Ajman & Sharjah city. We
    are professionals in shampooing home/office carpets, rugs, all-size mattresses, sofa covers, sofa seats, cushions, and
    couches. Our service is available in locations near Dubai, Sharjah, Ajman, and Abu Dhabi.')
@section('og:title', 'Carpet Cleaning Book Now 20% Discount in Dubai-Abu Dhabi')
@section('og:description',
    'Get your carpet, Sofa, mattress, cushion, couch wash/shampooing/steam cleaning with our
    premium services at the 20% discounted price with free pickup & delivery services in Abu Dhabi, Dubai, Ajman & Sharjah
    city. We are professionals in shampooing home/office carpets, rugs, all-size mattresses, sofa covers, sofa seats,
    cushions, and couches. Our service is available in locations near Dubai, Sharjah, Ajman, and Abu Dhabi.')
@extends('layouts.app')
@section('canonical', url()->current())
@section('styles')
<style>
    .price-card_content{
    position: relative;
    border-radius: 30px;
    height: 200px;
    background: var(--white-color);
    padding: 25px;
    width: 285px;
    font-size: 18px;
    margin-left: 30px;
    box-shadow: 0px 6px 30px 0px rgba(0, 0, 0, 0.05);
    z-index: 3;
    }
       .color-change {
    filter: brightness(0) saturate(100%) invert(85%) sepia(26%) saturate(690%) hue-rotate(330deg) brightness(105%) contrast(101%);
}
        img.aed{
    height:0.8em;
    width:auto;
    vertical-align: 0.01em;
   content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMzMzMzMzMgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
}
   img.aed2 {
  height: 0.8em;
  width: auto;
  vertical-align: 0.01em;
  content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMwODkwRjEgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
}
</style>
@endsection
@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/sofacleaning.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Carpet, Sofa & Mattress Cleaning </h1>
                <h3 class="text-white mt-3" style="font-size: 20px">Dubai - Abu-Dhabi - Sharjah - Ajman</h3>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="text-white">Carpet, Sofa & Mattress Cleaning </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <h2 style="font-size: 26px" class="text-center mb-5">Professional Carpet, Sofa & Mattress Cleaning Services at
                Affordable Price</h2>
            <div class="row mb-5">
                <div class="col-xl-6">
                    <iframe width="100%" height="270"
                        src="https://www.youtube.com/embed/iJ7CXS5A8LU?si=7SpHFf773LlJlC1w" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="text-center mt-3">How Do We Wash Shampooing Carpets? Watch Video </p>
                </div>
                <div class="col-xl-6">
                    <div class="about-card">
                        <h3 style="font-size: 26px">Eco-Friendly Premium Carpet Cleaning Services</h3>

                        <div class="checklist">
                            <ul>
                                <li>Affordable pricing starts from 28 <img class="aed">/per.seat.</li>
                                <li>Free Pickup & Delivery Service in Dubai & Abu Dhabi.</li>
                                <li>Minimum order value is only 100 <img class="aed">.</li>
                                <li>Clean carpet return back only in 4-5 Days.</li>
                                <li>Book now & get 20% discount on price (Limited time only)</li>
                            </ul>
                        </div>

                        <div class="form-btn col-6 mt-4"><button class="th-btn btn-fw"><a href="{{ route('booking-form') }}"
                                    class="text-white"> Schedule Pickup Now</a></button>
                        </div>
                    </div>
                </div>
                <p style="font-size: 18px;" class="mt-5">Get cleaned your home/office carpets, rugs, mattress deep
                    cleaning, sofa covers, bedsheets, pillowcase, duvet cover, comforter, bath towel, bath mats, hand
                    towels, table cloths, and blankets at the best affordable prices in Abu Dhabi & Dubai with free
                    collection & delivery services.</p>
                <h3 style="font-size: 24px" class="mt-4">Why shall I choose <a href="https://carpetwashing.ae/"> professional carpet cleaner </a> for my carpet?
                </h3>
                <p >It is well-known fact that carpets, Sofa & mattresses are some of the hardest
                    household items to clean, sanitize and maintain. If you don’t want to become stressed over the thought
                    of having to clean your carpet & upholstery, then hire LaundryService.AE professionals do their best to
                    keep your carpets, rugs, mattress & sofa sparkling & fresh for a long time at very affordable prices in
                    Abu Dhabi & Dubai.​​</p>


                <h3 class="mt-4" style="font-size: 24px">Curtain Dry Cleaning</h3>
                <p>A dirty carpet can cause many types of injuries in children & in old age people
                    as well or can increase the severity of diseases like asthma, therefore, it is imperative to keep our
                    carpets free from germs, bacteria & viruses. A clean carpet means healthy air circulation inside the
                    house.</p>
                <p>Carpet deep cleaning frequency depends upon the use & environment, usually it
                    should be deep clean after every 180 days but if there are heavy foot or pets & kids then shall be
                    cleaned frequently. If you don’t do something about your dirty carpets, you might be putting your
                    family's health at risk.</p>
                <p>Free collection & delivery service for orders over 100 <img class="aed">.</p>

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
                                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_1.svg')}}"
                                            alt="Service" />
                                    </div>
                                    <div class="service-block_wrapper">
                                        <h3 class="box-title">Easy Scheduling</h3>

                                    </div>
                                </div>
                                <div class="service-block style1 wow fadeInLeft">
                                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_2.svg')}}"
                                            alt="Service" />
                                    </div>
                                    <div class="service-block_wrapper">
                                        <h3 class="box-title">Lowest Price guarantee</h3>
                                    </div>
                                </div>
                                <div class="service-block style1 wow fadeInLeft">
                                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_3.svg')}}"
                                            alt="Service" />
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
                                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_4.svg')}}"
                                            alt="Service" />
                                    </div>
                                    <div class="service-block_wrapper">
                                        <h3 class="box-title">Efficiency & Quick Responce</h3>
                                    </div>
                                </div>
                                <div class="service-block wow fadeInLeft">
                                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_5.svg')}}"
                                            alt="Service" />
                                    </div>
                                    <div class="service-block_wrapper">
                                        <h3 class="box-title">Minimum Disruption</h3>
                                    </div>
                                </div>
                                <div class="service-block wow fadeInLeft">
                                    <div class="service-block_img"><img loading="lazy"src="{{asset('/assets/front/img/icon/service_1_6.svg')}}"
                                            alt="Service" />
                                    </div>
                                    <div class="service-block_wrapper">
                                        <h3 class="box-title">Hussle Free Services</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <h3 style="font-size: 24px">How Do We Clean Carpets?</h3>
                <div class="checklist">
                    
                <ul>
                    <li>Carpet is inspected by technician thoroughly for stains, chewing gum, etc</li>
                    <li>Complete carpet is washed in automatic industrial carpet cleaning machine with carpet cleaner eco friendly chemical (watch video).</li>
                    <li>Carpet loaded in the dryer for a spin.</li>
                    <li>To get rid of completely from moisture, carpets are hanged on hangers under direct sunlight.</li>
                    <li>Carpets are vacuumed & inspected thoroughly by a technician.</li>
                    <li>Finally carpet is packed in laminated cover & deliver to you.</li>
                </ul>
            </div>
                </div>

                <div class="row mt-5">
                    <div class="col-xl-12 mb-40 mb-xl-0">
                        <div class="me-xl-4">
                            <h4 class="fw-semibold mb-20 mt-n2">Scope of Service</h4>
                            <p>Anti-Micro Organisms Treatment, Anti-Virus Treatment, Germicide Treatment, Initial Clean Up, Deep Cleaning, Sparkle Clean, Courtyard Cleaning, Common Restrooms, Trash Clean Up, Containment Area Cleaning, Carpet Cleaning, Dust Removal, Wet Cleaning, Residential, Commercial, and Industry-Specific Cleaning, Upholstery Cleaning, House Cleaning, Office Cleaning, Carpet Cleaning, Floor Scrubbing, Aircon Servicing, Carpet Cleaning, Mattress Cleaning, Rug Cleaning, and Sofa Cleaning, Upholstery Cleaning, Fabric Sofa & Chair Cleaning, Office Carpet Deep Cleaning, Leather Sofa & Chair Cleaning, Home Rug Deep Cleaning, Mattress Deep Cleaning, Laundry & Dry Cleaning.</p>
                           

                            <div class="skill-feature mt-4">
                                <h5 class="skill-feature_title">Curtains Care</h5>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 95%;">
                                        <div class="progress-value">100%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <h5 class="skill-feature_title">Delicate Care Solutions</h5>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 95%;">
                                        <div class="progress-value">100%</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
    </section>

  

    


     <div class="overflow-hidden space" style="margin-top: -100px" id="feature-area">
        <div class="container">
            <div class="title-area text-center">
                <a href="https://laundryservice.ae/laundry-price-list-dubai"><h2 class="sec-title">PickUp & Delivery Services Pricing</h2></a>
               <p>Our professional laundry service offers fast and reliable pickup and delivery right from your home. </p>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item wow fadeInUp">
                        <div class="feature-item_icon color-change"><img loading="lazy"src="{{asset('/assets/front/img/icon/feature_1_1.svg')}}" alt="icon" />
                        </div>
                        <div class="media-body" style="height: 250px">
                            <h3 class="box-title">Term & Conditions</h3>
                            <div class="checklist">
                                <ul>
                                    <li>Please mention the stains & the items that can't be washed in the automatic carpet cleaning machine.</li>
                                    <li>Free collection & delivery service on minimum order of 100 <img class="aed">.</li>
                                    <li>The carpet cleaning process takes normally three days & will be delivered on the fourth day.</li>
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item wow fadeInDown">
                        <div class="feature-item_icon color-change"><img loading="lazy"src="{{asset('/assets/front/img/icon/feature_1_2.svg')}}" alt="icon" />
                        </div>
                        <div class="media-body" style="height: 250px">
                            <h3 class="box-title">Delivery</h3>
                            <div class="checklist">
                                <ul>
                                  
                                    <li>Return back clean carpet at your door step in 4-5 days.</li>
                                    <li>Urgent delivery is available at additional cost.</li>
                                       <li>Linen & bedding, curtains, and carpets damage within our laundry will be reimbursed to the value of 2 times the service cost</li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item wow fadeInUp">
                        <div class="feature-item_icon color-change "><img loading="lazy"src="{{asset('/assets/front/img/icon/feature_1_3.svg')}}" alt="icon" />
                        </div>
                        <div class="media-body" style="height: 250px">
                            <h3 class="box-title">How to book</h3>
                            <div class="checklist">
                                <ul>
                                    <li>It's very convenient, just WhatsApp
                                        your address & pin location at SunCity customer contact number:
                                        <a href="+971 52 273 2873">+971 52 273 2873</a>
                                    </li>
                                    <li>You can also book service via <a
                                            href="https://www.facebook.com/laundryservice.ae">Facebook messenger</a> or <a
                                            href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x3e5e39950a5a9e43:0x34cf71b6aefd2232?source=g.page.m.we">google
                                            map</a> </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space" style="margin-top: -150px">
        <div class="container-fluid">
            <div class="header-section mb-5 text-center">
                <h2 style="font-size: 36px;">Cheapest Carpet, Sofa & Mattress Cleaning Service <br>Abu Dhabi & Dubai
                </h2>
            
            </div>
            <div class="title-area text-center">
                <span class="sub-title">What We Offer</span>
                <h3 class="sec-title" style="font-size:24px">Carpet, Mattress, Sofa Shampooing Service Pricing</h3>
            </div>
            <div class="row justify-content-center px-3">
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Carpet Cleaning</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"></span>28/<span class="currency font-size: 8px">Sq.meter</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Carpet Cleaning</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Sofa Cleaning</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>50/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Sofa Cleaning</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Couch Cleaning</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"> Couch <span class="currency font-size: 8px"> Cleaning</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Couch Cleaning</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Cushion Cleaning (45*45 cm)</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>5/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Cushion Cleaning</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row px-4 justify-content-center mt-4">
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Mattress Cleaning/Single</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>90/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Mattress Cleaning/Single</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Mattress Cleaning/Queen</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>149/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Mattress Cleaning/Queen</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Mattress Cleaning/King</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>199/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Mattress Cleaning/King</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
               

            </div>
        </div>
    </section>
    <section class="space" style="margin-top: -120px">
        <div class="container-fluid">
            <div class="header-section mb-5 text-center">
                <h2 style="font-size: 36px;">Carpet, Mattress, Sofa Steam Cleaning Service Pricing
                </h2>
            
            </div>
            <div class="title-area text-center">
                <span class="sub-title">What We Offer</span>
                <h3 class="sec-title" style="font-size:24px">Carpet, Mattress, Sofa Steam Cleaning Service Pricing</h3>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Carpet Steam Cleaning</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>18/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Carpet Cleaning</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Sofa Steam Cleaning</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>60/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Sofa Cleaning</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Couch Steam Cleaning</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>60/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Couch Cleaning</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Mattress Steam Cleaning/Single</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>120/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Best Cushion Cleaning</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row gy-4 justify-content-center mt-4">
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Mattress Steam Cleaning/Queen</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>189/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Mattress Steam Cleaning/King</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="price-card">
                        <h3 class="box-title" style="font-size: 18px">Mattress Cleaning/Queen</h3>
                        <div class="price-card_content">
                            <h4 class="price-card_price" style="font-size: 30px"><span
                                    class="currency"><img class="aed2"> </span>249/<span class="currency font-size: 8px">per.seat</span>
                            </h4>

                            <div class="checklist">
                                <ul>
                                    <li>Mattress Cleaning/Queen</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
               
               

            </div>
        </div>
    </section>

  <div class="widget widget_download">
    <h4 class="widget_title text-center">Download Pricing</h4>
    <p class="text-center">Click to download washing & pressing laundry price list in Abu Dhabi - Dubai - Sharjah -
        Ajman</p>

    <div class="download-widget-wrap">
        <div class="row">
            <div class="col-4">
                <a href="{{ asset('/assets/pdf/PriceListMen.jpg') }}" class="th-btn style4 rounded-10"  target="_blank"><i
                        class="fa-light fa-file-image me-2"></i>Price List Men</a>
            </div>
            <div class="col-4">
                <a href="{{ asset('/assets/pdf/PriceListWomen.jpg') }}" class="th-btn style4 rounded-10"  target="_blank"><i class="fa-light fa-file-image me-2"></i>
                    Price List Women</a>
            </div>
            <div class="col-4">
                <a href="{{ asset('/assets/pdf/PriceListLinen&Bedding.jpg') }}"
                    class="th-btn rounded-10 " target="_blank"><i class="fa-light fa-file-image me-2"></i>Price List Linen
                    & Bedding</a>
            </div>
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
