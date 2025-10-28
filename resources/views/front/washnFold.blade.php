@extends('layouts.app')
@section('title', 'Laundry Wash & Fold in Dubai & Abu Dhabi – Fast, Reliable & Affordable Care')
@section('description',
'Laundry wash and fold service is one of our most favored laundry services in Dubai & Abu Dhabi,
Ajman & Sharjah, now you can get a complete week of dirty laundry cleaned at only 49 AED, with no extra charges, and a
next-day free delivery service. Also, available same-day wash & fold service & urgent 2-hour wash fold service at
additional price.')
@section('og:title', 'Laundry Wash & Fold in Dubai & Abu Dhabi – Fast, Reliable & Affordable Care')
@section('og:description',
'Laundry wash and fold service is one of our most favored laundry services in Dubai & Abu
Dhabi, Ajman & Sharjah, now you can get a complete week of dirty laundry cleaned at only 49 AED, with no extra charges,
and a next-day free delivery service. Also, available same-day wash & fold service & urgent 2-hour wash fold service at
additional price.')
@section('canonical', url()->current())
@section('styles')
<style>
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

.custom-shade {
    display: inline-block;
    background: rgba(255, 255, 255, 0.15); /* light transparent */
    padding: 30px 50px;
    border-radius: 16px;
    backdrop-filter: blur(10px); /* frosted glass effect */
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.25);
    text-align: center;
    max-width: 700px;
    margin: auto;
}

/* Title */
.custom-shade h1 {
    font-size: 42px;
    font-weight: 800;
    color: #fff;
    letter-spacing: 1px;
}

/* Subtitle */
.custom-shade h3 {
    font-size: 22px;
    font-weight: 600;
    color: #f1f1f1;
    margin-top: 10px;
}

/* Breadcrumbs */
.custom-shade ul {
    list-style: none;
    padding: 0;
    margin-top: 15px;
    display: flex;
    justify-content: center;
    gap: 8px;
}

.custom-shade ul li {
    color: #fff;
    font-size: 15px;
    font-weight: 500;
}

.custom-shade ul li a {
    color: #00bfff;
    text-decoration: none;
    font-weight: 600;
}

</style>

@endsection


@section('content')


<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/washnfold.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Laundry Wash & Fold Service in Abu Dhabi</h1>
            <p class="text-white mt-3">Tired of spending weekends doing laundry? SunCity Laundry LLC brings professional wash & fold services in Dubai right to your doorstep. We handle everything from sorting to folding — so you can enjoy more free time while we care for your clothes like our own.</p>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">Laundry Wash & Fold</li>
            </ul>
        </div>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="laundry-wash-n-fold-price text-center">
            <h2 class="">How much does Laundry Wash & Fold cost in Dubai?</h2>
            <p>A standard 6kg mixed wash & fold costs AED 65, while 12kg separate wash & fold is AED 130. Add-ons include special detergents (AED 10) and dry on hanger (AED 0.25 per piece). Same-day service available across ME-11 and nearby areas.
                <a class="text-italic" href="#abu-dhabi-washnfold-price">Prices vary by load and fabrics; confirm before booking.</a>
            </p>
        </div>
    </div>
</section>
<section class="space-top space-extra-bottom" style="background-image: url(&quot;http://127.0.0.1:8000/assets/front/img/bg/dubaiLaundryServiceBanner.webp&quot;); opacity: 0.5;z-index: 999">
    <div class="container">
        <h3 class="sec-title page-title text-center mb-5" style="font-size: 32px">Wash & Fold Service in Dubai & Abu-Dhabi</h3>
        <div class="row">
            <div class="col-xxl-12 col-lg-12">
                <div class="page-single mb-0">
                    <div class="page-content">
                        <p class="text-center">Wash and fold service is one of our most favored laundry services, now you can get a
                            complete week of dirty laundry cleaned only at 65 <img class="aed">, with no extra charges, and next-day
                            free delivery service.<br>
                            Free collection & delivery service</p>
                        <div class="table-responsive">
                            <table class="table table-striped text-successtable-border border-light">
                                <thead class="border-light">
                                <tr>
                                    <th scope="col"><strong>Service</strong></th>
                                    <th scope="col"><strong>Typical Cost</strong></th>
                                    <th scope="col"><strong>Includes</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">6kg Mixed Wash & Fold</th>
                                    <td>AED 65</td>
                                    <td>Wash, dry, fold, pickup & delivery</td>
                                </tr>
                                <tr>
                                    <th scope="row">12kg Separate Wash & Fold</th>
                                    <td>AED 130</td>
                                    <td>Wash separately, fold, return same day</td>
                                </tr>
                                <tr>
                                    <th scope="row">Add-on: Special Detergent</th>
                                    <td>AED 10</td>
                                    <td>Fragrance-free or hypoallergenic options</td>
                                </tr>
                                <tr>
                                    <th scope="row">Add-on: Dry on Hanger</th>
                                    <td>AED 0.25/piece</td>
                                    <td>Press-free drying & hanging</td>
                                </tr>
                                <tr>
                                    <th scope="row">Extra Load</th>
                                    <td>AED 11/kg</td>
                                    <td>For bulk or heavy items</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row mt-10 gx-40" style="margin-top: 80px">                           
                            <div class="col-md-6 mb-30"><img loading="lazy"class="w-100"
                                src="{{asset('/assets/front/img/service/wf2.png')}}" alt="service" />
                            </div>
                            <div class="col-md-6">
                                <h3 style="font-size: 26px;">Featured Services</h3>
                                
                                <div class="checklist">
                                    <ul>
                                        <li>Wash, tumble dry & fold/on the hanger</li>
                                        <li>Free Delivery</li>
                                        <li>Free fold service, upon request</li>
                                        <li>Drop-off facility 7 days a week from 8:00 AM to 11:00 PM</li>
                                        <li>We also offer urgent 2 hours wash n fold service at additional charges</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_categories">
                    <h3 class="widget_title">All Services</h3>
                    <ul>
                        <li><a href="{{route('washnFold')}}">Wash & Fold</a> <i class="fa-regular fa-arrow-right"></i></li>
                        <li><a href="{{route('pressing')}}">Pressing</a> <i class="fa-regular fa-arrow-right"></i></li>
                        <li><a href="{{route('washNPress')}}">Wash & Press</a> <i class="fa-regular fa-arrow-right"></i></li>
                        <li><a href="{{route('curtain-cleaning')}}">Curtain Cleaning</a> <i class="fa-regular fa-arrow-right"></i></li>
                        <li><a href="{{route('carpet')}}">Carpet | Mattress | Sofa</a> <i
                                class="fa-regular fa-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_download">
                    <h3 class="widget_title">Download Pricing</h3>
                    <p>Click to download washing & pressing laundry price list in Abu Dhabi - Dubai - Sharjah -
                        Ajman</p>
                    <div class="download-widget-wrap">
                        <a href="{{ asset('/assets/pdf/PriceListMen.jpg') }}" class="th-btn style4 rounded-10"  target="_blank"><i
                                class="fa-light fa-file-image me-2"></i>Price List Men</a>
                        <a href="{{ asset('/assets/pdf/PriceListWomen.jpg') }}" class="th-btn style4 rounded-10"  target="_blank"><i class="fa-light fa-file-image me-2"></i>
                        Price List Women</a>
                        <a href="{{ asset('/assets/pdf/PriceListLinen&Bedding.jpg') }}"
                            class="th-btn rounded-10 mt-3" target="_blank"><i class="fa-light fa-file-image me-2"></i>Price List Linen
                            & Bedding</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_call " data-bg-src="{{asset('/assets/front/img/bg/widget_bg_1.jpg')}}">
                    <div class="widget-call">
                        <div class="call-btn color-change"><img loading="lazy" class="img-fluid" src="{{asset('/assets/front/img/icon/call.svg')}}"
                                alt="" /></div>
                        <h4 class="box-title">Have any Questions? Call us Today!</h4>
                        <a href="https://wa.me/971522732873?text=Hi!%20I'm%20looking%20for%20laundry%20pickup" class="call text-white">+971 52 273 2873</a> <a
                            href="https://mail.google.com/" class="info-box_link">support@laundryservice.ae</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <div class="overflow-hidden space" id="feature-area">
        <div class="container">
            <div class="title-area text-center">
                <a href="https://laundryservice.ae/laundry-price-list-abu-dhabi"><h2 class="sec-title">PickUp & Delivery Services Pricing</h2></a>
               <p>Our professional laundry service offers fast and reliable pickup and delivery right from your home. </p>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item wow fadeInUp">
                        <div class="feature-item_icon color-change"><img loading="lazy"src="{{asset('/assets/front/img/icon/feature_1_1.svg')}}" alt="icon" />
                        </div>
                        <div class="media-body" style="height: 200px">
                            <h3 class="box-title">Term & Conditions</h3>
                             <div class="checklist">
                                <ul>
                                    <li>No dry clean item included</li>
                                    <li>Next day delivery | Free</li>
                                 


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item wow fadeInDown">
                        <div class="feature-item_icon color-change"><img loading="lazy"src="{{asset('/assets/front/img/icon/feature_1_2.svg')}}" alt="icon" />
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
                        <div class="feature-item_icon color-change"><img loading="lazy"src="{{asset('/assets/front/img/icon/feature_1_3.svg')}}" alt="icon" />
                        </div>
                        <div class="media-body" style="height: 200px">
                            <h3 class="box-title">How to book</h3>
                             <div class="checklist">
                                <ul>
                                    <li>It's very convenient, just WhatsApp
                                  your address & pin location at LaundryService customer contact number:
                                    <a href="+971 52 273 2873">+971 52 273 2873</a></li>
                            <li>You can also book service via <a href="https://www.facebook.com/laundryservice.ae">Facebook messenger</a> or <a
                                    href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x3e5e39950a5a9e43:0x34cf71b6aefd2232?source=g.page.m.we">google map</a> </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<section class="space pt-0" id="abu-dhabi-washnfold-price">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Cheapest Wash & Fold Service Abu Dhabi</h2>
            <p>Looking for affordable ironing and pressing services in Abu Dhabi? Our laundry experts deliver professionally pressed clothes at unbeatable prices.</p>
        </div>
        <h5>Pricing list/Item</h5>
        <div class="col-md-4 col-12  px-0">
            <div class="form-group mb-3">

                <select class="form-control form-control-rounded mb-5" name="category_id" id="categorySelect"
                    required>
                    @foreach ($categories as $category)
                    <option value="{{ $category->name }}" selected>PRICE LIST - {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">


            <div class="row features mb-5" id="itemDisplay">
                <!-- Items will be dynamically loaded here -->
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




<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch default category (MEN)
        fetchCategoryItems('MEN');

        // Attach event listener for category selection
        document.getElementById('categorySelect').addEventListener('change', function() {
            const cat = this.value;
            var category = encodeURIComponent(cat);
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
                        // Convert price to float and check if > 0
                        const price = parseFloat(service.W_Price);
                        if (price > 0) {
                            itemDisplay.innerHTML += `
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="price-box">
                                        <div class="price-box_icon">
                                            <img loading="lazy" src="${service.image}" alt="" height="50" width="70">
                                        </div>
                                        <h3 class="box-title">${service.itemName}</h3>
                                        <div class="price-box_content">
                                            <h4 class="price-box_text">${service.W_Price} <img class="aed2"></h4>
                                        </div>
                                    </div>
                                </div>`;
                        }
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        }
    }
</script>


@endsection