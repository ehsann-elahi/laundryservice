@extends('layouts.app')
@section('title', 'Top Rated Curtain Cleaning Service Dubai & Abu Dhabi')
@section('description',
'The Professionals in curtain washing, dry cleaning, steam pressing and sanitization at
affordable prices. Free pick-up & delivery service near in Abu Dhabi, Dubai, Ajman & Sharjah. The best quality is
guaranteed. All types of curtains, cotton curtains, blackout curtains, fancy curtains. The price starts from 12
<img class="aed">/square meter. Book a service online.')
@section('og:title', 'Top Rated Curtain Cleaning Service Dubai & Abu Dhabi')
@section('og:description',
'The Professionals in curtain washing, dry cleaning, steam pressing and sanitization at
affordable prices. Free pick-up & delivery service near in Abu Dhabi, Dubai, Ajman & Sharjah. The best quality is
guaranteed. All types of curtains, cotton curtains, blackout curtains, fancy curtains. The price starts from 12
<img class="aed">/square meter. Book a service online.')
@section('canonical', url()->current())
@section('styles')
<style>
    .price-card_content {
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

    img.aed {
        height: 0.8em;
        width: auto;
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
<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/curtaincleaning.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title">Curtain Cleaning Service</h2>
            <h3 class="text-white mt-3" style="font-size: 20px">Dubai - Abu-Dhabi - Sharjah - Ajman</h3>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">Curtain Cleaning Service</li>
            </ul>
        </div>
    </div>
</div>

<section class="space">
    <div class="container">
        <h1 class="sec-title page-title text-center mb-5" style="font-size: 32px">Best Curtains Deep Cleaning & Dry Cleaning Service at Affordable Price in Dubai - Abu Dhabi - Sharjah - Ajman</h2>
            <div class="row">

                <div class="row mb-5">
                    <div class="col-xl-6">
                        <div class="about-card-img global-img"><img loading="lazy" src="{{asset('/assets/front/img/service/5.png')}}"
                                alt="team image" /></div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-card">
                            <h2 style="font-size: 26px" class="text-center">Curtain Cleaning Service</h2>

                            <p>We are experts in dry cleaning all types of curtains using modern technology, whether they are
                                simple cotton-made curtains, fancy curtains, or black-out curtains. Book a service & get a free
                                delivery service.Curtain laundry service is designed to ensure that your curtains are cleaned
                                with the utmost precision and care. Our aim is to provide you with complete satisfaction through
                                the services we offer. With us, you can be sure of receiving high-quality curtain cleaning
                                services at the most affordable price.
                                <br>
                                <br>We LaundryService.ae is a team of professionals, who are experts in dry cleaning all types
                                of curtains by following high-quality standards using state-of-the-art technology.
                            </p>
                        </div>
                    </div>
                </div>
                <a href="https://curtainlaundry.com/"><h3 style="font-size: 26px">Curtain Laundry Services</h3></a>
                <p>Curtain laundry service is designed to ensure that your curtains are cleaned with the utmost precision and
                    care. Our aim is to provide you with complete satisfaction through the services we offer. With us, you can
                    be sure of receiving high-quality <a href="https://curtaincleaning.ae/"> curtain cleaning services </a> at the most affordable price.
                    Curtains are cleaned in a state-of-the-art curtain laundry facility under the supervision of an expert
                    laundry man. Curtains are picked up & delivered back to the customer after treatment.</p>
                <h3 style="font-size: 20px">Limitation:</h3>
                <div class="checklist">
                    <ul>
                        <li>This service is not available in-home cleaning service.</li>


                    </ul>
                </div>

                <h3 class="mt-4" style="font-size: 26px">Curtain Dry Cleaning</h3>
                <p>Curtain's dry cleaning service provides comprehensive & deep cleaning solutions to customers. We clean the
                    curtain by applying the appropriate deep cleaning method using industrial machines, then the curtain is
                    steamed & pressed under the appropriate temperature and delivered to the customers on the hanger. However,
                    this service is not available for on-site cleaning services as it requires heavy-duty machines.</p>


                <h3 style="font-size: 26px">Curtain Washing</h3>
                <p>Service is designed for customers who are looking for a very economical solution to keep their curtain
                    hygiene with self-support. We provide deep cleaning services in our facility using industrial cleaning
                    machines & delivered curtains to customers. Service is best suited for customers who can apply to steam &
                    pressing operation by themselves or where the curtain does not require pressing.</p>

                <h3 style="font-size: 20px">Limitation:</h3>
                <div class="checklist">
                    <ul>
                        <li>This service is not available in-home cleaning service.</li>
                        <li>Steaming & pressing is not included in the service.</li>

                    </ul>
                </div>

                <div class="row mt-5">
                    <div class="col-xl-6 mb-40 mb-xl-0">
                        <div class="me-xl-4">
                            <h4 class="fw-semibold mb-20 mt-n2">Curtain Ironing</h4>
                            <p>If you have washed your curtain by yourself or your curtain need only ironing. Our facilities are
                                equipped to handle small to large size curtains whether it's a hotel laundry pressing or home
                                curtain ironing order.</p>
                            <h3 style="font-size: 20px">Limitation:</h3>
                            <div class="checklist">
                                <ul>
                                    <li>This service is not available in-home cleaning service.</li>


                                </ul>
                            </div>

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
                    <div class="col-xl-6 mt-5">
                        <div class="ms-xxl-3"><img loading="lazy" class="rounded-20 w-100" src="{{asset('/assets/front/img/service/curtain.png')}}"
                                alt="Image" /></div>
                    </div>
                </div>
            </div>
</section>

<section class="overflow-hidden space-top" id="process-sec" style="margin-top: -100px">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Curtains More Services</span>
            <h2 class="sec-title">How It Works</h2>
            <p>Schedule your service, let our experts clean your clothes, and get them delivered fresh and neatly packaged.</p>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img loading="lazy" src="{{asset('/assets/front/img/icon/process_box_1.svg')}}" alt="icon" />
                        <div class="icon-shape"></div>
                    </div>

                    <h3 class="box-title">Curtain Steaming</h3>
                    <p class="box-text">Most demanding service by our hotel laundry customers & home customer.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img loading="lazy" src="{{asset('/assets/front/img/icon/process_box_2.svg')}}" alt="icon" />
                        <div class="icon-shape"></div>
                    </div>

                    <h3 class="box-title">Curtain Alteration</h3>
                    <p class="box-text">We are keen to provide one-stop solutions to our customers.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img loading="lazy" src="{{asset('/assets/front/img/icon/process_box_3.svg')}}" alt="icon" />
                        <div class="icon-shape"></div>
                    </div>

                    <h3 class="box-title">Curtain Installation</h3>
                    <p class="box-text">we provide on-demand curtain dismantling & installation services at the cheapest
                        prices.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img loading="lazy" src="{{asset('/assets/front/img/icon/process_box_4.svg')}}" alt="icon" />
                        <div class="icon-shape"></div>
                    </div>

                    <h3 class="box-title">In-Home Curtain Services</h3>
                    <p class="box-text">We also provide in-home curtain services that include curtain steam pressing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_1.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Easy Scheduling</h3>

                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_2.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Lowest Price guarantee</h3>
                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_3.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Hight Quality</h3>
                    </div>
                </div>
            </div>
            <div class="col col-xl-auto text-center d-none d-xl-block">
                <div class="service-image wow fadeInUp"><img loading="lazy" src="{{asset('/assets/front/img/normal/choose-img.png')}}"
                        alt="" /></div>
            </div>
            <div class="col-md-6 col-xl-auto">
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_4.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Efficiency & Quick Responce</h3>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_5.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Minimum Disruption</h3>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_6.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Hussle Free Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="overflow-hidden space" style="margin-top: -100px" id="feature-area">
    <div class="container">
        <div class="title-area text-center">
            <a href="https://laundryservice.ae/laundry-price-list-ajman"><h2 class="sec-title">PickUp & Delivery Services Pricing</h2></a>
            <p>Our professional laundry service offers fast and reliable pickup and delivery right from your home. </p>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon color-change"><img loading="lazy" src="{{asset('/assets/front/img/icon/feature_1_1.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body" style="height: 310px">
                        <h3 class="box-title">Term & Conditions</h3>
                        <div class="checklist">
                            <ul>
                                <li>Please mention the alteration if required.</li>
                                <li>Price can vary than mentioned below due to different types of curtains & different
                                    requirements to clean them.</li>
                                <li>Linen & bedding, curtains, and carpets damage
                                    within our laundry will be reimbursed to the value of 2 times the service
                                    cost.</li>
                                <li>Free collection & delivery service on minimum order of 65 <img class="aed">.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInDown">
                    <div class="feature-item_icon color-change"><img loading="lazy" src="{{asset('/assets/front/img/icon/feature_1_2.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body" style="height: 310px">
                        <h3 class="box-title">Delivery</h3>
                        <div class="checklist">
                            <ul>
                                <li>Next day delivery | Free</li>
                                <li>Order less than 65 <img class="aed"> | (N/A)</li>
                                <li>Same-day delivery | (N/A)</li>
                                <li>Urgent 2 hours delivery | (N/A)</li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon color-change"><img loading="lazy" src="{{asset('/assets/front/img/icon/feature_1_3.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body" style="height: 310px">
                        <h3 class="box-title">How to book</h3>
                        <div class="checklist">
                            <ul>
                                <li>It's very convenient, just WhatsApp
                                    your address & pin location at LaundryService customer contact number:
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
<section class="space" style="margin-top: -100px">
    <div class="container-fluid">
        <div class="header-section mb-5 text-center">
            <h2 style="font-size: 36px;">Curtains Dry Cleaning Service at Competitive Price in <br> Dubai & Abu Dhabi
            </h2>
        </div>
        <div class="title-area text-center">
            <span class="sub-title">What We Offer</span>
            <h2 class="sec-title" style="font-size:27px">Curtain Cleaning Pricing</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-3 col-md-4">
                <div class="price-card">
                    <h3 class="box-title" style="font-size: 18px">Cotton Curtain Cleaning</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price" style="font-size: 30px"><span
                                class="currency"><img class="aed2"> </span>20/<span class="currency font-size: 8px">Sq.meter</span>
                        </h4>

                        <div class="checklist">
                            <ul>
                                <li>cotton curtain</li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="price-card">
                    <h3 class="box-title" style="font-size: 18px">Blackout Curtain Cleaning</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price" style="font-size: 30px"><span
                                class="currency"><img class="aed2"> </span>15/<span class="currency font-size: 8px">Sq.meter</span>
                        </h4>

                        <div class="checklist">
                            <ul>
                                <li>blackout curtain cleaning</li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="price-card">
                    <h3 class="box-title" style="font-size: 18px">Fancy Curtain Cleaning</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price" style="font-size: 30px"><span
                                class="currency"><img class="aed2"> </span>20/<span class="currency font-size: 8px">Sq.meter</span>
                        </h4>

                        <div class="checklist">
                            <ul>
                                <li>Fancy Curtain Cleaning</li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="price-card">
                    <h3 class="box-title" style="font-size: 18px">Chiffon Curtain Cleaning</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price" style="font-size: 30px"><span
                                class="currency"><img class="aed2"> </span>29/<span class="currency font-size: 8px">Sq.meter</span>
                        </h4>

                        <div class="checklist">
                            <ul>
                                <li>Chiffon Curtain Cleaning</li>

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