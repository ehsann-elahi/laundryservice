@extends('layouts.app')
@section('title', 'Blog for Laundry & Dry Cleaning Service')
@section('description','Best laundry &a dry cleaning service in Dubai &amp; Abu Dhabi? Where to find the best laundry near me? How to clean laundry at cheapest price when you are on visit in Dubai? How to clean the blackout curtains?')
@section('og:title', 'Blog for Laundry & Dry Cleaning Service')
@section('og:description','Best laundry &amp; dry cleaning service in Dubai &amp; Abu Dhabi? Where to find the best laundry near me? How to clean laundry at cheapest price when you are on visit in Dubai? How to clean the blackout curtains?')
@section('canonical', url()->current())
@section('styles')
<style>
    .blog-single {
        border: 1px solid #eaeaea;
        border-radius: 6px;
        padding: 16px;
        background-color: #fff;
        transition: box-shadow 0.2s ease;
    }

    .blog-single:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .blog-title a {
        color: #333;
        text-decoration: none;
    }

    .blog-title a:hover {
        color: #007bff;
    }
</style>
@endsection
 
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/blog-detail.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blogs</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">Blog</li>
            </ul>
        </div>
    </div>
</div>
<section class="th-blog-wrapper space-top space-extra-bottom mb-5">
    <div class="header-section text-center mb-5">
            <h2 style="font-size: 36px">How Professional Laundry Services Handle Delicate Fabrics</h2>
            <p>Our professional laundry service treats delicate fabrics like silk, chiffon, lace, and wool with special care. We use gentle detergents, cold water wash cycles.</p>
        </div>
    <div class="container">
        <div class="row g-4">
            @foreach($blogs as $blog)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex">
                <div class="th-blog blog-single has-post-thumbnail w-100 h-100 d-flex flex-column">

                    {{-- Blog Image --}}
                    <div class="blog-img" style="min-height: 200px; background-color: #f7f7f7;">
                        <a href="{{ route('blog-single', ['slug' => $blog->slug]) }}">
                            <img
                                src="{{ $blog->image ? asset($blog->image) : asset('/assets/front/img/default.jpg') }}"
                                alt="Blog Image"
                                class="img-fluid"
                                style="height: 200px; object-fit: cover; width: 100%;" />
                        </a>
                    </div>

                    {{-- Blog Content --}}
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

                        {{-- Safe excerpt: no HTML tags --}}
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
@endsection