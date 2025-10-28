@extends('layouts.app')
@section('title', 'Laundry Service in Abu Dhabi U+002d Fast Pickup & 24/7 Delivery')
@section('description','Reliable laundry service in Abu Dhabi near Khalifa Park. 24/7 pickup & delivery under 24 hours. Call today for fresh, clean clothes at fair prices.')
@section('og:title', 'Laundry Service in Abu Dhabi U+002d Fast Pickup & 24/7 Delivery')
@section('og:description','Reliable laundry service in Abu Dhabi near Khalifa Park. 24/7 pickup & delivery under 24 hours. Call today for fresh, clean clothes at fair prices.')
@section('canonical', url()->current())
@section('styles')
<style>
    .app-download-banner {
        padding: 20px 10px;
        text-align: center;
    }

    .banner-bg {
        background: url('{{ asset('/assets/front/img/banner-bg.jpg') }}') no-repeat center center / cover;
        padding: 40px 20px;
        height: 275px;
        width: 95%;
        margin: auto;
        border-radius: 25px;
        position: relative;
        overflow: hidden;
    }

    .download-btn {
        position: absolute;
        top: 48%;
        right: 55px;
        background: white;
        color: black;
        padding: 10px 23px;
        border-radius: 25px;
        font-weight: bold;
        text-decoration: none;
        z-index: 1;
    }

    /* --- Social Icons Default (Desktop) --- */
    .social-icons {
        position: absolute;
        bottom: 40px;
        right: 92px;
        display: flex;
        gap: 12px;
        z-index: 1;
    }

    .social-icons a {
        background: #3C3229;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: transform 0.2s ease;
    }

    .social-icons a:hover {
        transform: scale(1.1);
    }

    .social-icons a img {
        width: 16px;
        height: 16px;
        filter: brightness(0) invert(1);
    }

    /* --- Mobile Responsive --- */
    @media (max-width: 768px) {
        .banner-bg {
            /* background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: center top !important; */
            height: 135px;
        }

        .download-btn {
            position: absolute;
            display: inline-block;
            margin: 10px auto 3px auto;
            font-size: 9px;
            top: 25%;
            right: 117px;
            padding: 5px 16px;
        }

        .social-icons {
            position: absolute;
            top: 65%;
            right: 120px;
            display: flex;
            gap: 5px;
        }

        .social-icons a img {
            width: 10px;
            height: 10px;
        }
    }

    @media (max-width: 480px) {
        .banner-bg {
            background: url('{{ asset('/assets/front/img/banner-mobile.jpg') }}') no-repeat center center / cover;
        }

        .download-btn {
            font-size: 8px;
            right: 45px;
            padding: 0px 10px;
        }

        .social-icons {
            top: 75%;
            right: 60px;
            gap: 2px;
        }

        .social-icons a {
            width: 20px;
            height: 20px;
        }
    }

    @media (max-width: 420px) {
        .banner-bg {
            height: 100px;
        }

        .download-btn {
            font-size: 8px;
            top: 30px;
            right: 35px;
        }

        .social-icons {
            right: 53px;
        }
    }

    @media (max-width: 360px) {
        .download-btn {
            font-size: 6px;
            top: 25px;
            right: 35px;
        }

        .social-icons {
            top: 75px;
            right: 50px;
            gap: 2px;
        }

        .social-icons a {
            width: 14px;
            height: 14px;
        }
    }

 .color-change {
    filter: brightness(0) saturate(100%) invert(85%) sepia(26%) saturate(690%) hue-rotate(330deg) brightness(105%) contrast(101%);
}




    .bottom-half {
        margin-bottom: 0px !important;
    }

    .partners-static-wrapper {
        background-color: #F9F9F9;
        padding: 20px 0;
        text-align: center;
        border-top: 1px solid #E5E5E5;
        border-bottom: 1px solid #E5E5E5;
        margin-bottom: 100px;
    }

    .partners-static-track {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 30px;
        max-width: 1200px;
        margin: auto;
    }

    .partner-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        height: 100px;
        height: 40px;
        width: 50px;
        width: 180px;
        transition: transform 0.3s ease;
    }

    .partner-logo:hover {
        transform: scale(1.05);
    }

    .partner-logo img {
        max-height: 80px;
        max-width: 100%;
        width: 66px;
        height: 40px;
        object-fit: contain;
    }
    .partner-logo1 img {
        max-height: 80px;
        max-width: 100%;
        width: 80px;
        height: 40px;
        object-fit: contain;
    }

    /* Curtain Laundry Custom Logo */
    .custom-logo {
        text-decoration: none;
        flex-direction: row;
        gap: 10px;
        text-align: left;
    }

    .custom-logo:hover {
        text-decoration: none;
    }

    .custom-logo:hover {
        text-decoration: none;
    }

    .logo-text {
        line-height: 1.2;
        font-weight: bold;
    }

    .logo-text .green {
        color: #f9f9f9ff;
        font-size: 7px;
        margin-left: 10px;
    }
    .logo-text .green1 {
        color: #f9f9f9ff;
        font-size: 7px;
       
    }

    .logo-text .black {
        color: #f4f4f4ff;
        font-size: 7px;
    }

    .logo-icon i.green-icon {
        color: #ffffffff;
        font-size: 27px;
        margin-left: 25px;
    }

    /* Responsive: Tablets and below */
    @media (max-width: 768px) {
        .partner-logo {
            width: 150px;
            height: 90px;
        }

        .logo-text .green,
        .logo-text .black {
            font-size: 15px;
        }

        .logo-icon i.green-icon {
            font-size: 36px;
        }
    }

    /* Responsive: Mobile screens */
    @media (max-width: 480px) {
        .partner-logo {
            width: 120px;
            height: 80px;
            flex-direction: column;
        }

        .custom-logo {
            flex-direction: column;
            text-align: center;
        }

        .logo-icon i.green-icon {
            margin-top: 5px;
        }

        .logo-text .green,
        .logo-text .black {
            font-size: 16px;
        }

        .logo-icon i.green-icon {
            font-size: 32px;
        }

    }

    @media (max-width: 768px) {
        .sub-title {
            font-size: 16px !important;
        }

        .hero-title {
            font-size: 26px !important;
            line-height: 1.2;
        }

        .hero-text {
            font-size: 14px !important;
            line-height: 1.5;
        }

        .logo-view {
            font-weight: bold;
            color: #222;
            /* or whatever theme color */
        }
    }

    @media (max-width: 768px) {
        .service-card-wrapper {
            display: flex;
            flex-direction: column;

        }

        .service-card {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }

        .service-card_inner {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .box-icon img {
            width: 50px;
            height: 50px;
        }

        .service-content .box-title {
            font-size: 18px;
            margin-top: 10px;
        }

        .service-card_text {
            font-size: 14px;
            line-height: 1.4;
            margin-top: 5px;
        }

    }

     img.aed{
    height:0.7em;
    width:auto;
    vertical-align: 0.01em;
    content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMwMDAwMDAgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
}    
     img.aed1{
    height:0.8em;
    width:auto;
    vertical-align: 0.01em;
     filter: invert(1);
    content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMwMDAwMDAgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
}    

  img.aed2 {
  height: 0.8em;
  width: auto;
  vertical-align: 0.01em;
  content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMwODkwRjEgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
}
/* Force Google Translate to only touch .translate-text */
.notranslate * {
    unicode-bidi: isolate; /* Protect container */
}
.translate-text {
    unicode-bidi: plaintext; /* Allow translation */
}
  
               
</style>
@endsection
@section('content')
<div class="th-hero-wrapper hero-2 notranslate" id="hero">
    <div class="swiper hero-slider2" id="heroSlider2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">

                    <div class="th-hero-bg" data-bg-src="{{asset('/assets/front/img/hero/hero2.jpg')}}"> <img
                            src="{{asset('/assets/front/img/hero/hero_overlay_11.png')}}" alt="Hero Image" /></div>
                    <div class="container">
                        <div class="hero-style2">
                            <div class="hero-overlay-content">
                                <span class="sub-title translate-text" data-ani="slideindown" data-ani-delay="0.4s">Laundromat</span>
                                <h1 style="font-size: 50px" class="hero-title translate-text" data-ani="slideindown"
                                    data-ani-delay="0.5s">
                                    Laundry Service in Abu Dhabi You Can Trust <span class="text-theme">.</span>
                                </h1>
                                <p class="hero-text translate-text" data-ani="slideindown" data-ani-delay="0.7s">
                                   Tired of waiting days for fresh laundry?<span style="color: #FFD06D;"> At LaundryServiceAE, we provide fast, affordable laundry in UAE</span> with same-day pickup and delivery. Whether it’s wash & fold, dry cleaning, or shoe care, we make life easier—24/7.</p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                    <a href="https://wa.me/971522732873?text=Hi!%20I'm%20looking%20for%20laundry%20pickup"
                                        id="supportBtn" target="_blank" class="th-btn style8">
                                        <i class="fab fa-whatsapp"></i> <span>Quick Support</span>
                                    </a>
                                    <a href="{{ route('booking-form') }}" class="th-btn style2" id="supportBtn">Schedule
                                        Pickup</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="{{asset('/assets/front/img/hero/1.jpg')}}"> <img
                            src="{{asset('/assets/front/img/hero/hero_overlay_11.png')}}" alt="Hero Image" /></div>
                    <div class="container">
                        <div class="hero-style2">
                            <div class="hero-overlay-content">
                                <span class="sub-title translate-text" data-ani="slideindown" data-ani-delay="0.4s">Wash & Fold</span>
                                <h2 style="font-size: 50px" class="hero-title translate-text" data-ani="slideindown"
                                    data-ani-delay="0.5s">
                                    Fresh, Neatly Folded Laundry in 24 Hours <span class="text-theme">.</span>
                                </h2>
                                <p class="hero-text translate-text" data-ani="slideindown" data-ani-delay="0.7s">Say goodbye to piles of clothes.<span style="color: #FFD06D;"> Our wash & fold service keeps your wardrobe clean, fresh, and ready</span> back within 24 hours</p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                    <a href="https://wa.me/971522732873?text=Hi!%20I'm%20looking%20for%20laundry%20pickup"
                                        id="supportBtn" target="_blank" class="th-btn style8">
                                        <i class="fab fa-whatsapp"></i></i> <span>Quick Support</span>
                                    </a>
                                    <a href="{{ route('booking-form') }}" class="th-btn style2" id="supportBtn">Schedule
                                        Pickup</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">

                    <div class="th-hero-bg" data-bg-src="{{asset('/assets/front/img/hero/4.jpg')}}"> <img
                            src="{{asset('/assets/front/img/hero/hero_overlay_11.png')}}" alt="Hero Image" /></div>
                    <div class="container">
                        <div class="hero-style2">
                            <div class="hero-overlay-content">
                                <span class="sub-title translate-text" data-ani="slideindown" data-ani-delay="0.4s">Pressing</span>
                                <h2 style="font-size: 50px" class="hero-title translate-text" data-ani="slideindown"
                                    data-ani-delay="0.5s">
                                    Crisp, Wrinkle-Free Clothes Every Time <span class="text-theme">.</span>
                                </h2>
                                <p class="hero-text translate-text" data-ani="slideindown" data-ani-delay="0.7s">From office wear to daily outfits, <span style="color: #FFD06D;"> our ironing and wash & press service makes sure your clothes look sharp and professional.</span></p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                    <a href="https://wa.me/971522732873?text=Hi!%20I'm%20looking%20for%20laundry%20pickup"
                                        id="supportBtn" target="_blank" class="th-btn style8">
                                        <i class="fab fa-whatsapp"></i> <span>Quick Support
                                    </a>
                                    <a href="{{ route('booking-form') }}" class="th-btn style2" id="supportBtn">Schedule
                                        Pickup</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper thumbsSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img loading="lazy" src="{{asset('/assets/front/img/hero/hero2.jpg')}}" alt="" /></div>
            <div class="swiper-slide"><img loading="lazy" src="{{asset('/assets/front/img/hero/1.jpg')}}" alt="" /></div>
            <div class="swiper-slide"><img loading="lazy" src="{{asset('/assets/front/img/hero/4.jpg')}}" alt="" /></div>
        </div>
    </div>
    <div class="hero-animated-bubble notranslate">
        <img loading="lazy" src="{{asset('/assets/front/img/shape/bubble_1.png')}}" alt="Laun" /> <img
            src="{{asset('/assets/front/img/shape/bubble_2.png')}}" alt="Laun" /> <img
            src="{{asset('/assets/front/img/shape/bubble_3.png')}}" alt="Laun" /> <img
            src="{{asset('/assets/front/img/shape/bubble_4.png')}}" alt="Laun" />
        <img loading="lazy" src="{{asset('/assets/front/img/shape/bubble_5.png')}}" alt="Laun" /> <img
            src="{{asset('/assets/front/img/shape/bubble_6.png')}}" alt="Laun" /> <img
            src="{{asset('/assets/front/img/shape/bubble_7.png')}}" alt="Laun" /> <img
            src="{{asset('/assets/front/img/shape/bubble_8.png')}}" alt="Laun" />
    </div>
</div>

<section class="service-sec" id="service-sec">
    <div class="container th-container">
        <div class="service-card-wrapper">
            <div class="service-card">
                <div class="service-card_inner">
                    <div class="box-icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_card_1.svg')}}" alt="Icon" /></div>
                    <div class="service-content">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Save Time & Money</a></h3>
                        <p class="service-card_text">Our Profesional Laundry Service saves your time and effort.</p>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card_inner">
                    <div class="box-icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_card_2.svg')}}" alt="Icon" /></div>
                    <div class="service-content">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Pay Online in Seconds</a></h3>
                        <p class="service-card_text">Secure online payment system that makes your life easier.</p>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card_inner">
                    <div class="box-icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_card_3.svg')}}" alt="Icon" /></div>
                    <div class="service-content">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Satisfaction Guarantee</a></h3>
                        <p class="service-card_text">We use advanced cleaning techniques for your satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="about-sec overflow-hidden space-top" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft ">
                    <div class="img-box1">
                        <div class="img1"><img loading="lazy" src="{{asset('/assets/front/img/normal/about_1.jpg')}}" alt="About" /></div>
                        <div class="img2 d-none d-md-block"><img loading="lazy" src="{{asset('/assets/front/img/normal/2.png')}}" alt="About" /></div>
                        <div class="th-experience jump d-none d-md-block">
                            <h3 class="experience-year"><span class="counter-number">20</span>+</h3>
                            <p class="experience-text">Years</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 wow fadeInRight">
                        <div class="title-area mb-25">
                            <span class="sub-title style1">About Us</span>
                            <p class="about-desc">
                            At LaundryServiceAE, we make life easier by taking the stress out of laundry. Serving Abu Dhabi, Dubai, Sharjah, and Ajman, our team works around the clock to deliver clean, fresh clothes straight to your doorstep. Our 24/7 pickup and delivery system is designed to fit busy lifestyles, ensuring you never run out of clean clothes when you need them most. With years of trusted service, official trade licenses, and VAT certification, we’ve built a reputation for reliability and quality across the UAE. Our mission is simple: to give customers more time to focus on what matters, while we handle the laundry with precision and care.
                            </p>
                        </div>
                        <div class="checklist list-two-column">
                            <ul>
                                <li>Transparent pricing</li>
                                <li>Energy-Efficient Machines</li>
                                <li>Same-Day or Express Service</li>
                                <li>Reliable 24/7 support</li>
                                <li>Hanging or Bagging Options</li>
                                <li>Licensed & VAT certified</li>
                            </ul>
                        </div>
                        <div class="btn-group mt-30 mb-30 justify-content-start"><a href="{{route('booking-form')}}" class="th-btn">Book Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space py-5">
    <div class="container mt-3">
        <div class="title-area text-center">
            <span class="sub-title">What We Offer</span>
            <h2 class="sec-title">Popular Laundry Packages</h2>
            <h3 class="" style="font-size: 26px">Most loveable Laundry Packages by Our Customers</h3>
           <a href="https://www.laundryservice.ae/" ><p>Cheaper - Suitable - Convenient</p></a>
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
                        <div class="form-btn col-12 mt-4 d-flex justify-content-center">
                            <a href="{{ route('booking-form') }}" class="th-btn btn-fw text-white">Schedule Pickup Now</a>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>


<div class="overflow-hidden space" id="feature-area">
    <div class="container">

        <div class="title-area text-center">
            <span class="sub-title">Anytime, Anywhere in Dubai, Abu Dhabi, Sharjah and Ajman</span>
            <h2 class="sec-title">Laundry Pickup & Delivery Services</h2>
            <p>Our professional laundry service offers fast and reliable pickup and delivery right from your home. </p>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon"><img loading="lazy" class="color-change"
                            src="{{asset('/assets/front/img/icon/feature_1_1.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Economical Laundry</h3>
                        <p class="feature-item_text">Free Delivery on next day - No extra charges.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInDown">
                    <div class="feature-item_icon"><img loading="lazy" class="color-change"
                            src="{{asset('/assets/front/img/icon/feature_1_2.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Same Day Laundry</h3>
                        <p class="feature-item_text">Laundry will be delivered to your address on the same day, charges applied.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon"><img loading="lazy" class="color-change"
                            src="{{asset('/assets/front/img/icon/feature_1_3.svg')}}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Premium Laundry</h3>
                        <p class="feature-item_text">Clean laundry will be delivered within 02 hours, charges applied</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-top-center space" data-bg-src="{{asset('/assets/front/img/bg/service_bg_1.jpg')}}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Best Services</span>
            <h2 class="sec-title">Professional Laundry Services</h2>
            <p>Get spotless results with our professional laundry service tailored to your needs.</p>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img"><img loading="lazy" src="{{asset('/assets/front/img/service/service_box_2.jpg')}}"
                                        alt="img" /></div>
                                <div class="service-box_icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_box_1.svg')}}"
                                        alt="Icon" /></div>
                            </div>
                            <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                <h3 class="box-title"><a href="{{route('curtain-cleaning')}}">Dry Cleaning</a></h3>
                                <p class="service-box_text">Dry cleaning is a cleaning process of clothes and textiles</p>
                                <a href="{{route('curtain-cleaning')}}" class="th-btn border">Price List</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img"><img loading="lazy" src="{{asset('/assets/front/img/service/wf3.jpg')}}"
                                        alt="img" /></div>
                                <div class="service-box_icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_box_2.svg')}}"
                                        alt="Icon" /></div>
                            </div>
                            <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                <h3 class="box-title"><a href="{{route('washnFold')}}">Wash & Fold</a></h3>
                                <p class="service-box_text">No time for laundry! Let's do it because we are professional & love to do it</p>
                                <a href="{{route('washnFold')}}" class="th-btn border">Price List</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img"><img loading="lazy" src="{{asset('/assets/front/img/service/pressing.png')}}"
                                        alt="img" /></div>
                                <div class="service-box_icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_box_3.svg')}}"
                                        alt="Icon" /></div>
                            </div>
                            <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                <h3 class="box-title"><a href="{{route('pressing')}}">Ironing Service</a></h3>
                                <p class="service-box_text">Save time & money! Drop off your laundry & let our professional do ironing.</p>
                                <a href="{{route('pressing')}}" class="th-btn border">Price List</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img"><img loading="lazy" src="{{asset('/assets/front/img/service/wp.png')}}"
                                        alt="img" /></div>
                                <div class="service-box_icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_box_4.svg')}}"
                                        alt="Icon" /></div>
                            </div>
                            <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                <h3 class="box-title"><a href="{{route('washNPress')}}">Wash & Press</a></h3>
                                <p class="service-box_text">The washing & pressing service starts from only 3 <img class="aed">
                                    .
                                    Also, available same-day.</p>
                                <a href="{{route('washNPress')}}" class="th-btn border">Price List</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img"><img loading="lazy" src="{{asset('/assets/front/img/service/curtain.png')}}"
                                        alt="img" /></div>
                                <div class="service-box_icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_box_5.svg')}}"
                                        alt="Icon" /></div>
                            </div>
                            <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                <h3 class="box-title"><a href="{{route('curtain-cleaning')}}">Curtain Cleaning</a>
                                </h3>
                                <p class="service-box_text">We are experts in dry cleaning all types of curtains using
                                    modern technology.</p>
                                <a href="{{route('curtain-cleaning')}}" class="th-btn border">Price List</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img"><img loading="lazy" src="{{asset('/assets/front/img/service/service_grid_3.jpg')}}"
                                        alt="img" /></div>
                                <div class="service-box_icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_box_6.svg')}}"
                                        alt="Icon" /></div>
                            </div>
                            <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                <h3 class="box-title"><a href="{{route('curtain-cleaning')}}">Carpets & Upholstery</a></h3>
                                <p class="service-box_text">Get clean your bed sheets, blankets, carpets and Sofa & Mattress with care</p>
                                <a href="{{route('carpet')}}" class="th-btn border">Price List</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img"><img loading="lazy" src="{{asset('/assets/front/img/service/cl.png')}}"
                                        alt="img" /></div>
                                <div class="service-box_icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_box_6.svg')}}"
                                        alt="Icon" /></div>
                            </div>
                            <div class="box-content" data-bg-src="{{asset('/assets/front/img/shape/service_shape_1.png')}}">
                                <h3 class="box-title"><a href="{{route('price_abuDhabi')}}">Commercial Laundry</a></h3>
                                <p class="service-box_text">Let us do the laundry for your business</p>
                                <a href="{{route('price_abuDhabi')}}" class="th-btn border">Price List</a>
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



<div class="space-bottom">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-6">
                <div class="contact-feature">
                    <div class="box-icon"><i class="fa-light fa-phone"></i></div>
                    <div class="media-body">
                        <span class="contact-feature_subtitle text-white">Call Us For Service</span>
                        <h3 class="box-title"><a href="tel:+971522732873">+971 52 273 2873</a></h3>
                        <p class="box-text text-white">Call 24/7 Anytime For Our Laundry Servicing.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-feature">
                    <div class="box-icon"><i class="fa-light fa-envelope"></i></div>
                    <div class="media-body">
                        <span class="contact-feature_subtitle text-white">Email Us Anytime For Service</span>
                        <h3 class="box-title"><a href="mailto:support@laundryservice.com">laundryservice.ae</a></h3>
                        <p class="box-text text-white">Email 24/7 at support@laundryservice.ae</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="overflow-hidden space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center pe-xl-4 ps-xl-4">
                    <h2 class="sub-title">Why LaundryService.ae?</h2>
                    <h3 style="font-size: 26px" class="sec-title">More Than 20 Years of Trusted Laundry in Dubai</h3>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-md-6 col-xl-auto">
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_1.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">On-Demand Service</h3>
                        <p class="mb-0">Order anytime and schedule pickup & delivery at your preferred time.</p>
                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_2.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Fast & Hassle-Free</h3>
                        <p class="mb-0">Quick turnaround so you spend less time worrying about laundry.</p>
                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_3.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Eco-Friendly Fabric Care</h3>
                        <p class="mb-0">Safe, hypoallergenic detergents that keep clothes fresh and colors bright.</p>
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
                        <h3 class="box-title">Live Chat & Support</h3>
                        <p class="mb-0">Dedicated customer team available daily from 8:00 AM to 11:00 PM.</p>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_5.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">Direct Service—No Third Party</a></h3>
                        <p class="mb-0">We own and operate our facilities, ensuring safety and quality control.</p>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_6.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title">No Extra Fees or Minimum Orders</h3>
                        <p class="mb-0">Collection & delivery service is complimentary on all 1st-time orders in The Palm Jumeirah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative overflow-hidden space-bottom">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Work Process</span>
            <h2 class="sec-title">How It Works!</h2>
            <p>Schedule your service, let our experts clean your clothes, and get them delivered fresh and neatly packaged.</p>
        </div>
        <div class="step-wrap">
            <div class=""></div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="process-card">
                        <div class="box-icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/process_card_1.svg')}}" alt="icon" />
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
                        <div class="box-icon"><img loading="lazy" class="color-change"
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
                        <div class="box-icon"><img loading="lazy" src="{{asset('/assets/front/img/icon/process_card_3.svg')}}" alt="icon" />
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

<!-- <section class="cta-sec" data-pos-for=".team-area">
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
</section> -->

<div class="title-area text-center">
    <h3 class="sub-title">Premium Laundry Services</h3>
    <h2 class="sec-title">Download Our App & Enjoy Laundry Services</h2>
    <p>Our app makes laundry day stress-free! Book a service, choose your time, and enjoy on-time delivery of professionally cleaned clothes.</p>
</div>
<section class="app-download-banner">
    <div class="banner-wrapper banner-bg">
        <!-- Download Button -->
        <a href="https://play.google.com/store/apps/details?id=com.metadigital.laundry_service"
            target="_blank"
            class="download-btn">
            Download Our App
        </a>
        <!-- Social Icons -->
        <div class="social-icons">
            <a href="https://www.facebook.com/laundryservice.ae" target="_blank">
                <img loading="lazy" src="{{ asset('/assets/front/img/f.png') }}" alt="Facebook">
            </a>
            <a href="https://www.linkedin.com/company/curtaincleaning-ae/" target="_blank">
                <img loading="lazy" src="{{ asset('/assets/front/img/l.png') }}" alt="LinkedIn">
            </a>
            <a href="https://www.instagram.com/laundryserviceuae/" target="_blank">
                <img loading="lazy" src="{{ asset('/assets/front/img/i.png') }}" alt="Instagram">
            </a>
        </div>
    </div>
</section>

<section class="team-area space p-5" data-bg-src="{{asset('/assets/front/img/bg/team_bg_1.jpg')}}">
    <div class="container p-0 z-index-common">
        <div class="title-area text-center">
            <span class="sub-title">Expert Team</span>
            <h2 class="sec-title">Our Laundry Expert Workers</h2>
            <p>Our team of trained laundry professionals is dedicated to providing top-quality dry cleaning, wash & fold, and ironing services.</p>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img loading="lazy" src="{{asset('/assets/front/img/team/1.png')}}" alt="Team" />
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">William James</h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img loading="lazy" src="{{asset('/assets/front/img/team/2.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">Jasmin Mentara</h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img loading="lazy" src="{{asset('/assets/front/img/team/3.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">Danial Facundo</h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img loading="lazy" src="{{asset('/assets/front/img/team/4.png')}}" alt="Team" />

                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title">John Wood</h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<section class="space py-5">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Competitive. Affordable. Transparent</span>
            <h2 class="sec-title">LAUNDRY & DRY CLEANING PRICING</h2>
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
                        <div class="form-btn col-12 mt-4 d-flex justify-content-center">
                            <a href="{{ route('booking-form') }}" class="th-btn btn-fw text-white">Schedule Pickup Now</a>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>



<div class="overflow-hidden space-bottom mt-5">
    <div class="container">
        <div class="title-area text-center mt-5">
    <h3 class="sub-title">Trusted by Millions</h3>
    <h2 class="sec-title">Delivering Excellence in Every Wash</h2>
    <p>Over 16M+ orders cleaned, 18K+ garments rotating daily, and 12M+ happy customers — your clothes deserve the best.</p>
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

<section class="overflow-hidden space mt-3" style="margin-top: -50px" id="testi-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="swiper th-slider testi-grid-thumb"
                    data-slider-options='{"effect":"slide","slidesPerView":"6","spaceBetween":7,"loop":false}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-img"><img loading="lazy" src="{{asset('/assets/front/img/testimonial/test11.jpg')}}" alt="Image" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-img"><img loading="lazy" src="{{asset('/assets/front/img/testimonial/test1.jpg')}}" alt="Image" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-img"><img loading="lazy" src="{{asset('/assets/front/img/testimonial/test3.jpg')}}" alt="Image" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-img"><img loading="lazy" src="{{asset('/assets/front/img/testimonial/test33.jpg')}}" alt="Image" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-img"><img loading="lazy" src="{{asset('/assets/front/img/testimonial/test44.png')}}" alt="Image" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-img"><img loading="lazy" src="{{asset('/assets/front/img/testimonial/test66.jpg')}}" alt="Image" />
                            </div>
                        </div>
                    </div>
                    <div class="testi-grid_shape"></div>
                    <div class="testi-quote"><img loading="lazy" src="{{asset('/assets/front/img/icon/quote_3.svg')}}" alt="" /></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area">
                    <h3 class="sub-title style1">What Customer Say About Us</h3>
                    <h2 class="sec-title">Guaranteed Customer Satisfaction</h2>
                </div>
                <div class="swiper th-slider" id="testiSlide1"
                    data-slider-options='{"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid-thumb"}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <p class="testi-grid_text">
                                    As a restaurant owner in Khalifa City, Abu Dhabi, we rely on clean linens every day. LaundryServiceAE has never missed a pickup or delivery. Their same-day laundry service keeps our operations smooth and professional.
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
                                            <h3 class="testi-grid_name box-title">Ahmad R.</h3>
                                            <span class="testi-grid_desig">Operations Manager</span>
                                        </div>
                                    </div>
                                    <div class="testi-quote"><img loading="lazy" class="color-change"
                                            src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <p class="testi-grid_text">
                                    I live near Downtown Dubai, and their wash & fold service is a lifesaver. The clothes come back perfectly folded and fresh within 24 hours. Truly the best laundry service in Dubai.
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
                                            <h3 class="testi-grid_name box-title">Fatima A.</h3>
                                            <span class="testi-grid_desig">Marketing Executive</span>
                                        </div>
                                    </div>
                                    <div class="testi-quote"><img loading="lazy" class="color-change"
                                            src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <p class="testi-grid_text">
                                    I always find it difficult to do my weekend laundry at home but due to pandemic (Coronavirus) it was very confusing to find a trusted laundry But when I come to know about laundryservice.ae services, I feel happy & very convincing to see their measures & efforts to contain the laundry corona free. I really appreciate their efforts to make services helpful to the Abu Dhabi community in difficult time.
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
                                            <h3 class="testi-grid_name box-title">Rajesh K.</h3>
                                            <span class="testi-grid_desig"> Housekeeping Supervisor</span>
                                        </div>
                                    </div>
                                    <div class="testi-quote"><img loading="lazy" class="color-change"
                                            src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <p class="testi-grid_text">
                                    We manage several offices in Business Bay, Dubai, and LaundryServiceAE handles our uniform cleaning efficiently. Their team is professional, punctual, and dependable—a perfect fit for corporate needs.
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
                                            <h3 class="testi-grid_name box-title">Sheikh bin Omer </h3>
                                            <span class="testi-grid_desig">HR Coordinator</span>
                                        </div>
                                    </div>
                                    <div class="testi-quote"><img loading="lazy" class="color-change"
                                            src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <p class="testi-grid_text">
                                    I lived in Mussafah, I regularly used their services. I found their laundry services excellent. Staff at shop is very cooperative, good listener.I never had to travel anywhere even when I want to do some slight alteration or repair they did it on my behalf.  Overall process is so convenient and easy. I am completely satisfied by the dealer and service.</p>
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
                                    <div class="testi-quote"><img loading="lazy" class="color-change"
                                            src="{{asset('/assets/front/img/icon/quote.svg')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <p class="testi-grid_text">
                                    The staff was so polite during pickup in Mohamed Bin Zayed City, Abu Dhabi. I tried their dry cleaning service for suits—it was spotless and neatly pressed. Highly recommend them!
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
                                            <h3 class="testi-grid_name box-title">Sara H</h3>
                                            <span class="testi-grid_desig">Teacher</span>
                                        </div>
                                    </div>
                                    <div class="testi-quote"><img loading="lazy" class="color-change"
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



<section class="overflow-hidden space" style="margin-top: -100px" id="blog-sec"
    data-bg-src="{{asset('/assets/front/img/bg/blog_bg_1.jpg')}}">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title style1">Blog Post</span>
                    <h2 class="sec-title">Latest News & Updates</h2>
                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-block">
                <div class="sec-btn"><a href="{{route('blog')}}" class="th-btn">View More Post</a></div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex px-3">
                        <div class="th-blog blog-single has-post-thumbnail w-100 h-100 d-flex flex-column">
                            <div class="blog-img" style="min-height: 200px; background-color: #f7f7f7;">
                                <a href="{{ route('blog-single', ['slug' => $blog->slug]) }}">
                                    <img loading="lazy" src="{{ $blog->image ? asset($blog->image) : asset('/assets/front/img/default.jpg') }}" alt="Blog Image" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;" />
                                </a>
                            </div>
                            <div class="blog-content d-flex flex-column flex-grow-1 pt-3">
                                <div class="blog-meta mb-2">
                                    <a href="#"><i class="far fa-calendar"></i> {{ $blog->created_at->format('M d, Y') }}</a>
                                    <a class="author ms-3" href="#"><i class="far fa-user"></i> By Admin</a>
                                </div>

                                <h2 class="blog-title fs-6 fw-bold">
                                    <a href="{{ route('blog-single', ['slug' => $blog->slug]) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h2>
                                <p class="blog-text my-2">
                                    {{ Str::limit(strip_tags($blog->description), 150) }}
                                </p>

                                <div class="mt-auto pt-2">
                                    <a href="{{ route('blog-single', ['slug' => $blog->slug]) }}" class="th-btn btn-sm">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>



<script>
    const quickSupportBtns = document.querySelectorAll('.quick-support-btn');

    quickSupportBtns.forEach((btn) => {
        const btnText = btn.querySelector('span');

        btn.addEventListener('mouseenter', () => {
            btnText.textContent = '+971522732873'; // Change content to phone number
        });

        btn.addEventListener('mouseleave', () => {
            btnText.textContent = 'Quick Support'; // Revert content to default
        });
    });

</script>
@endsection