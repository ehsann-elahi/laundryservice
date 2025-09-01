@extends('layouts.app')
@section('title', 'Laundry Environment Health & Safety Policy')
@section('description','LaundryService.AE is committed to providing a safe, healthy environment to its employees & following health & safety guidelines from local authorities & international standards by WHO. Moreover, All laundry staff is vaccinated against the Coronavirus. In the same way, we are committed to make laundry process green.')
@section('og:title', 'Laundry Environment Health & Safety Policy')
@section('og:description','LaundryService.AE is committed to providing a safe, healthy environment to its employees & following health & safety guidelines from local authorities & international standards by WHO. Moreover, All laundry staff is vaccinated against the Coronavirus. In the same way, we are committed to make laundry process green.')
@section('canonical', url()->current())
@section('content')


<!-- services block1 -->

<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/ehs.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Environment, Health & Safety Policy</h1>

            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">Environment, Health & Safety Policy</li>
            </ul>
        </div>
    </div>
</div>

<div class="w3-services1 py-5">
    <div class="container py-lg-3">
        <div class="header-section text-center mb-5">
            <h2 style="font-size: 36px">Environment, Health & Safety Policy</h2>
        </div>
        <div class="row w3-services-grids mt-lg-5 mt-4">
            <h3 style="font-size: 36px">Environment Policy</h3>
            <ol>
                <li>We use eco-friendly detergents and cleaning agents that are biodegradable and safe for the environment.</li>
                <li>Our water usage is monitored and optimized to reduce waste and support water conservation.</li>
                <li>Energy-efficient machines and practices are used to minimize carbon footprint.</li>
                <li>Wastewater is properly treated or disposed of in accordance with environmental regulations.</li>
                <li>We aim to reduce plastic usage by offering reusable laundry bags and eco-friendly packaging options.</li>

            </ol>
        </div>
        <div class="row w3-services-grids mt-lg-5 mt-4">
            <h3 style="font-size: 36px">Health & Safety Policy</h3>
            <ol start="6">
                <li>All staff are trained in safe handling of chemicals and equipment used in the laundry process.</li>
                <li>We maintain high standards of hygiene and cleanliness across all workspaces and facilities.</li>
                <li>Personal protective equipment (PPE) is provided and mandatory for all employees handling laundry or machinery.</li>
                <li>Regular maintenance and safety checks are conducted on all equipment to prevent accidents or malfunctions.</li>
                <li>In case of emergencies, our team is trained in basic first aid and fire safety procedures.</li>
            </ol>

        </div>
        <div class="row w3-services-grids mt-lg-5 mt-4">
            <h2 style="font-size: 36px">Customer Assurance</h2>
            <ol start="11">
                <li>We ensure that all laundered items are processed in a hygienic and contamination-free environment.</li>
                <li>Any customer complaints or concerns related to health, safety, or hygiene are addressed promptly and transparently.</li>
                <li>Clear labeling and safe return of clothes ensure customer belongings are handled with care and accountability.</li>
            </ol>

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

@endsection