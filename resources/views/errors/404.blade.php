@extends('layouts.app')
@section('title', '404 - Page Not Found | ' . config('app.name'))
@section('description', 'The page you are looking for could not be found. Explore our homepage or browse services to continue.')
@section('og:title', '404 - Page Not Found')
@section('og:description', 'Oops! The page you requested doesn’t exist. Visit our homepage or services to find what you need.')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/front/img/bg/breadcumb-bg.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">404 - Error Page</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="text-white">404 - Error Page</li>
            </ul>
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
        <div class="error-img"><img src="{{asset('assets/front/img/theme-img/error.svg')}}" alt="404 image" /></div>
        <div class="error-content">
            <h2 class="error-title"><span class="text-theme">OooPs!</span> Page Not Found</h2>
            <p class="error-text">Oops! The page you are looking for does not exist. It might have been moved or deleted. Please check and try again.</p>
            <a href="{{route('index')}}" class="th-btn th-radius"><i class="fal fa-home me-2"></i>Back To Home</a>
        </div>
    </div>
</section>


@endsection