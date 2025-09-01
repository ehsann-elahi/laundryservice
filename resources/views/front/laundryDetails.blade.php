
@extends('layouts.app')
@section('title', 'Laundry near me')
@section('description','Laundry near me in Dubai & Abu Dhabi, Laundry near me in Khalifa City, Laundry near me in Musaffah, Laundry near me Al Reff, Laundry Near me Yas Island')
@section('og:title', 'Laundry near me')
@section('og:description','Laundry near me in Dubai & Abu Dhabi, Laundry near me in Khalifa City, Laundry near me in Musaffah, Laundry near me Al Reff, Laundry Near me Yas Island')
@section('canonical', url()->current())

@section('styles')
<style>
     .color-change {
    filter: brightness(0) saturate(100%) invert(85%) sepia(26%) saturate(690%) hue-rotate(330deg) brightness(105%) contrast(101%);
}

</style>
@endsection
@section('content')


<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">BOOK NOW DRY CLEAN & LAUNDRY SERVICE.</h1>

            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="text-white">Dubai</li>
            </ul>
        </div>
    </div>
</div>

<div class="container min-vh-80 d-flex align-items-center">
		<div class="row text-center">
			<div class="col-12 col-md-12 col-lg-12">
				<div class="content-wrapper py-5">
					<h2 class="display-4 fw-bold mb-4" style="line-height: 1.2;">
						Best Dry Clean & Laundry Service <br>{{$cleanName}}
					</h2>
					<p class="lead mb-2">
						We are the best dry cleaner in {{$cleanName}} because we offer the best family care laundry packages. They are cheaper, quite hassle-free, full of your bag without any restrictions and you will not pay per piece but by weight (Per KG).
					</p>
				</div>
			</div>
		</div>
	</div>

 <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">What We Offer</span>
                <h2 class="sec-title">Popular 6 KG Packages</h2>
                <h3 class="" style="font-size: 26px">Cheaper - Suitable - Convenient</h3>
                <p>Pay Per Kg Packages - Transparent - Convenient - Suitable</p>
            </div>
            <div class="row gy-4 justify-content-center">
                @foreach ($packages as $package)
                    <div class="col-xl-4 col-md-6">
                        <div class="price-card">

                            <h3 class="box-title">{{ $package->name }}</h3>
                            <div class="price-card_content">
                                <h4 class="price-card_price" style="font-size: 22px"><span
                                        class="currency">AED</span>{{ $package->price }}<span
                                        class="period">/{{ $package->weight }}</span></h4>

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



<div class="overflow-hidden space" id="feature-area">
    <div class="container">

        <div class="title-area text-center">
            <span class="sub-title">Anytime, Anywhere in Dubai, Abu Dhabi, Sharjah and Ajman</span>
            <h2 class="sec-title">Laundry Pickup & Delivery Services</h2>
            <p class="">Our professional laundry service offers fast and reliable pickup and delivery right from your home. </p>
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
<div class="w3-services1 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h2 style="font-size: 34;">Curtains Cleaning in {{$cleanName}}</h2>
			<h4 style="font-size: 20px;">Looking for a specialist curtain cleaning company?</h4>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<div class="col-lg-7 w3-services-left-grid">
				<p class="text-center">Professionally Trained, Qualified, and Experienced Staff ensure your Blackout Curtains, Cotton Curtains, Chiffon Curtains are cleaned with the Utmost Care.</p>
			</div>
			<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
				<img loading="lazy"src="http://127.0.0.1:8000/assets/images/curtain.jpg" class="img-fluid img-curve" alt="">
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
                    <h3 style="font-size: 26px" class="sec-title">More than 20 years of trusted laundry services in Dubai</h3>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-md-6 col-xl-auto">
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_1.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">On Demand</a></h3>
                        <p class="mb-0">You can place an order at any time, any day and schedule a pick-up and delivery time that works best for you.</p>
                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_2.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Reliable and Hassle-Free</a></h3>
                        <p class="mb-0">All you have to do is place an order and we will get the job done quickly & efficiently saving your time to enjoy life!</p>
                    </div>
                </div>
                <div class="service-block style1 wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_3.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Revitalize Your Fabrics</a></h3>
                        <p class="mb-0">We use eco-friendly and hypoallergenic detergents to ensure the safety</p>
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
                        <h3 class="box-title"><a href="{{route('booking-form')}}">Live Chat & Support</a></h3>
                        <p class="mb-0">We have a professional dedicated customer services team to support 08:00AM to 11:00PM</p>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_5.svg')}}" alt="Service" />
                    </div>
                    <div class="service-block_wrapper">
                        <h3 class="box-title"><a href="{{route('booking-form')}}">No Third Party</a></h3>
                        <p class="mb-0">Our investment is our customers trust, therefore, to ensure safety, we own complete laundry service</p>
                    </div>
                </div>
                <div class="service-block wow fadeInLeft">
                    <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_6.svg')}}" alt="Service" />
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
                                    Absolutely. Our staff is trained to handle a variety of fabrics, including delicate
                                    and formal wear. We take special care to follow care many on instructions and use
                                    gentle processes to preserve
                                    the quality of your specialty items man our
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
                                            <h3 class="testi-grid_name box-title">Brooklyn Simmons</h3>
                                            <span class="testi-grid_desig">UI/UX Designer</span>
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
                                    Fast and quick. I WhatsApp them regarding my home laundry service and within 5 minutes I received the price from the LaundryService.AE team. They complete job within 24 hours. It’s an awesome experience to have their services and the customer care is very helpful
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
                                            <h3 class="testi-grid_name box-title">Savannah Nguyen</h3>
                                            <span class="testi-grid_desig">Founder CEO</span>
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
                                            <h3 class="testi-grid_name box-title">Cameron Williamson</h3>
                                            <span class="testi-grid_desig">Project Manager</span>
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
                                    Absolutely. Our staff is trained to handle a variety of fabrics, including delicate
                                    and formal wear. We take special care to follow care many on instructions and use
                                    gentle processes to preserve
                                    the quality of your specialty items man our
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
                                            <h3 class="testi-grid_name box-title">Alex Hamilton</h3>
                                            <span class="testi-grid_desig">E-commerce Solutions</span>
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
                                    I lived in Mussafah, I regularly used their services. I found their laundry services excellent. Staff at shop is very cooperative, good listener. I never had to go anywhere even if I need to do a little alteration or repair they did it for me. Overall process is so convenient and easy. I am completely satisfied by the dealer and service.


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
                                    Garments made of delicate fabrics, those with intricate detailing, and those labeled
                                    dry clean only should be taken dry The frequency of dry cleaning depends on factors
                                    such as the type of
                                    garment, how often it's worn, and if exposed stains
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
                                            <h3 class="testi-grid_name box-title">Martin Danial</h3>
                                            <span class="testi-grid_desig">E-commerce Solutions</span>
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