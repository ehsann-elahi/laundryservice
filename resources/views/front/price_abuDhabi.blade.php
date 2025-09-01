@extends('layouts.app')
@section('title', 'Laundry Price List Abu Dhabi | Cheapest Laundry')
@section('description',
'Get premium laundry & dry cleaning service in Abu Dhabi at the lowest price. Prices start from
3 <img class="aed"> & free delivery service.@SunCity Laundromat offers complete laundry & dry cleaning solutions to our customers
including wash & fold service, Steam pressing, Ironing service, linen & bedding cleaning at the cheapest price.')
@section('og:title', 'Laundry Price List Abu Dhabi | Cheapest Laundry')
@section('og:description',
'Get premium laundry & dry cleaning service in Abu Dhabi at the lowest price. Prices start
from 3 <img class="aed"> & free delivery service.@SunCity Laundromat offers complete laundry & dry cleaning solutions to our customers
including wash & fold service, Steam pressing, Ironing service, linen & bedding cleaning at the cheapest price.')
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

<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/priceabudhabi.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">PRICE LIST IN ABU-DHABI</h1>

            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">Price List in Abu Dhabi</li>
            </ul>
        </div>
    </div>
</div>


<div class="w3-services1 py-5">
    <div class="container py-lg-3">
        <div class="header-section text-center mb-5">
            <h2 style="font-size: 36px">ABU-DHABI</h2>
        </div>
        <div class="row w3-services-grids mt-lg-5 mt-4">
            <p style="font-size: 18px">Get<a href="https://laundryservice.ae/"> premium laundry & dry cleaning service</a> in Abu Dhabi at lowest price, we
                @SunCity Laundromat offer complete laundry & dry cleaning solutions to our customers including wash &
                fold service, Steam pressing, Ironing service, linen & bedding cleaning at the cheapest price.</p>
            <p style="font-size: 18px">Free collection & delivery service at a minimum order of @65 <img class="aed">.</p>
        </div>
    </div>
</div>






<section class="space pt-0">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Check Laundry Prices In Abu Dhabi</h2>
        </div>

        <h3>Pricing list/Item</h3>

        <div class="col-md-4 col-12 px-0">
            <div class="form-group mb-3">
                <select class="form-control form-control-rounded mb-5" name="category_id" id="categorySelect" required>
                    @foreach ($categories as $category)
                    <option value="{{ $category->name }}" selected>PRICE LIST - {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row gy-4 justify-content-center">
            <!-- Tabs -->
            <ul class="nav nav-tabs mb-4" id="serviceTabs">
                <li class="nav-item">
                    <a class="nav-link active" data-tab="pressing" href="#">Pressing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-tab="washing" href="#">Washing & Pressing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-tab="dry" href="#">Dry Cleaning</a>
                </li>
            </ul>

            <!-- Service Cards -->
            <div id="itemDisplay" class="w-100"></div>
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
                <a href="{{ asset('/assets/pdf/PriceListWomen.jpg') }}" class="th-btn style4 rounded-10" target="_blank" ><i class="fa-light fa-file-image me-2"></i>
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


<div class="overflow-hidden space" id="feature-area">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">PickUp & Delivery Services Pricing - Abu Dhabi</h2>
            <p>Our professional laundry service offers fast and reliable pickup and delivery right from your home. </p>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon color-change"><img loading="lazy" src="{{asset('/assets/front/img/icon/feature_1_1.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body" style="height: 200px">
                        <h3 class="box-title">Term & Conditions</h3>
                        <div class="checklist">
                            <ul>
                                <li>No leather items included.</li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInDown ">
                    <div class="feature-item_icon color-change"><img loading="lazy" src="{{asset('/assets/front/img/icon/feature_1_2.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body" style="height: 200px">
                        <h3 class="box-title">Economy & Same-Day Delivery</h3>
                        <div class="checklist">
                            <ul>
                                <li>Next day delivery | Free</li>
                                <li>Order less than 65 <img class="aed"> | +15 <img class="aed"></li>
                                <li>Same-day delivery | (Normal Price * 2) <img class="aed"> + 99 <img class="aed"></li>
                                <li>Urgent 2 hours delivery | Drop-Off Service</li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon color-change"><img loading="lazy" src="{{asset('/assets/front/img/icon/feature_1_3.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body" style="height: 200px">
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


@endsection
@section('script')
<script>
    let activeTab = 'pressing';

    document.addEventListener('DOMContentLoaded', function() {
        const defaultCategory = document.getElementById('categorySelect').value;
        fetchCategoryItems(defaultCategory);

        // Category dropdown change
        document.getElementById('categorySelect').addEventListener('change', function() {
            const category = this.value;
            activeTab = 'pressing';
            setActiveTab('pressing');
            fetchCategoryItems(category);
        });

        // Tab clicks
        document.querySelectorAll('#serviceTabs .nav-link').forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                activeTab = this.getAttribute('data-tab');
                setActiveTab(activeTab);
                const category = document.getElementById('categorySelect').value;
                fetchCategoryItems(category);
            });
        });
    });

    function setActiveTab(tabName) {
        document.querySelectorAll('#serviceTabs .nav-link').forEach(t => t.classList.remove('active'));
        const active = document.querySelector(`#serviceTabs .nav-link[data-tab="${tabName}"]`);
        if (active) active.classList.add('active');
    }

    function fetchCategoryItems(category) {
        fetch(`/get-services?category=${encodeURIComponent(category)}`)
            .then(response => response.json())
            .then(data => {
                const itemDisplay = document.getElementById('itemDisplay');
                itemDisplay.innerHTML = '';
                
                const filtered = data.filter(service => {
                    if (activeTab === 'pressing') return parseFloat(service.P_Price) > 0;
                    if (activeTab === 'washing') return parseFloat(service.WP_Price) > 0;
                    if (activeTab === 'dry') return parseFloat(service.DC_Price) > 0;
                });


                if (filtered.length === 0) {
                    itemDisplay.innerHTML =
                        `<div class="col-12 text-center"><p>No services available for this selection.</p></div>`;
                    return;
                }

                let rowHTML = '';
                filtered.forEach((service, index) => {
                    let price = '';
                    if (activeTab === 'pressing') price = `${service.P_Price} <img class="aed2">`;
                    if (activeTab === 'washing') price = `${service.WP_Price} <img class="aed2">`;
                    if (activeTab === 'dry') price = `${service.DC_Price} <img class="aed2">`;

                    if (index % 4 === 0) {
                        rowHTML += `<div class="row gy-4">`;
                    }

                    rowHTML += `
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="price-box">
                                <div class="price-box_icon">
                                    <img loading="lazy"src="${service.image}" alt="${service.itemName}">
                                </div>
                                <h3 class="box-title">${service.itemName}</h3>
                                <div class="price-box_content">
                                    <h4 class="price-box_text">${price}</h4>
                                </div>
                            </div>
                        </div>
                    `;

                    if ((index + 1) % 4 === 0 || index === filtered.length - 1) {
                        rowHTML += `</div>`;
                    }
                });

                itemDisplay.innerHTML = rowHTML;
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('itemDisplay').innerHTML =
                    `<div class="col-12 text-center"><p>Error loading services.</p></div>`;
            });
    }
</script>

@endsection