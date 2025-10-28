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
@section('title', 'Dry Cleaner near me | Dubai | Abu Dhabi')
@section('description','Do your clothes need special care? Or your fancy suit needs to be refresh but strikes fear in heart of high dry clean prices? LaundryService offers you a dry cleaning service at the cheapest price forever in Abu Dhabi. We are a professional dry cleaner, providing commercial & non-commercial services since 2011.')
@section('og:title', 'Dry Cleaner near me | Dubai | Abu Dhabi')
@section('og:description','Do your clothes need special care? Or your fancy suit needs to be refresh but strikes fear in heart of high dry clean prices? LaundryService offers you a dry cleaning service at the cheapest price forever in Abu Dhabi. We are a professional dry cleaner, providing commercial & non-commercial services since 2011.')
@section('canonical', url()->current())
@section('styles')
<style>
	.price li {
		list-style-type: disc;
		/* Ensures bullets are displayed */
	}

	h4 {
		font-size: 36px;
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

	.carousel {
		width: 70%;
		margin: auto;
	}

	.w3l-banner-slider .carousel-item {
		background-size: auto
	}

	.white {
		color: #fff;
	}

	.fs-22 {
		font-size: 22px !important;
	}

	@media (max-width: 430px) {
		.header-section h1 {
			font-size: 20px !important;
		}

		.header-section h2 {
			font-size: 20px !important;
		}

		.w3-services-grids h3 {
			font-size: 18px !important;
		}

		.mobile-info h2 {
			font-size: 22px !important;
		}

		.mobile-info h3 {
			font-size: 20px !important;
		}

		.mobile-info p {
			font-size: 18px !important;
		}

		.three-grids-columns h3 {
			font-size: 18px;
		}

		.three-grids-columns p {
			font-size: 16px;
		}


	}
</style>

@endsection
@section('content')
<!-- breadcrum -->

<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/washnfold.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h2 class="breadcumb-title" style="font-size: 46px;">Launderer & Dry Cleaner Service</h2>
           
            <ul class="breadcumb-menu">
                <li><a href="{{ route('index') }}">Home</a></li>
              
            </ul>
        </div>
    </div>
</div>

<!-- //breadcrum -->

<!-- services block1 -->
<div class="w3-services1 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h1 style="font-size: 50px;">Best Launderer & Dry Cleaner Service Near me in Dubai & Abu Dhabi</h1>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<h3 class="fs-22">We are experts in delivering dry cleaned all types of household textile</h3>
			<p>Do your clothes need special care? Or your fancy suit needs to be refreshed but strike fear in the heart of high dry clean prices? LaundryService offers you a dry cleaning service at the lowest price for ever in Dubai & Abu Dhabi. Dry clean starts from only 6 AED.</p>
		</div>
	</div>
</div>
<section class="w3l-banner-slider">
	<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active" style="background-image: url('assets/images/near1.jpg')">
			</div>
			<div class="carousel-item" style="background-image: url('assets/images/near2.jpg')">
				<!-- <img src="assets/images/banner-3.jpg" class="d-block w-100" alt="..."> -->
				<div class="carousel-caption container">
					<p class="primary-color">Shop No:02, Building 157, ME-11
						Mohamed Bin Zayed City
						Abu Dhabi</p>
					<p class="para-cover-9"><span class="primary-color">Phone:</span>025521090</p>
					<p class="para-cover-9"><span class="primary-color">Email:</span>support@laundryservice.ae</p>
					<p class="para-cover-9"><span class="primary-color">Website:</span>https://www.laundryservice.ae/</p>
					<p class="para-cover-9"><span class="primary-color">Description:</span>
						Laundry and dry cleaning service, laundry service, dry cleaner, wash & fold, ironing, linen & bedding service in Abu Dhabi, cheapest laundry in Abu Dhabi, same day laundry Abu Dhabi, laundry near me, best laundry Abu Dhabi, Blanket cleaning, curtain cleaning, laundry price list, laundry in musaffah,</p>
				</div>
			</div>
			<div class="carousel-item" style="background-image: url('assets/images/near3.jpg'); background-position: top;">
			</div>
			<div class="carousel-item" style="background-image: url('assets/images/near4.jpeg')">
				<!-- <img src="assets/images/banner-2.jpg" class="d-block w-100" alt="..."> -->
				<div class="carousel-caption container">
					<h3 class="title-cover-9">Laundry Abu Dhabi</h3>
					<p class="para-cover-9">LaundryService Abu Dhabi picture gallery,, laundry service abu dhabi, laundry abu dhabi, dry cleaning abu dhabi, dry clean service abu dhabi</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>

<section class="space pt-0">
	<div class="container">
		<div class="title-area text-center">
			<h2 class="sec-title">Cheapest Pressing Service UAE</h3>
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
			<div class="header-section text-center">
				<h4 style="font-size: 22px;">Steam Pressing (AED)</h4>
			</div>

			<div class="row features mb-5" id="itemDisplay">
				<!-- Items will be dynamically loaded here -->
			</div>
		</div>
	</div>
</section>


<div class="w3-services1 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h2 style="font-size:36px">Drop your laundry off in our Shop, and let us do it all for you.</h2>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<div class="col-lg-7 w3-services-left-grid">
				<h3 style="font-size: 30px;">DROP-OFF SERVICE</h3>

				<p>We are located in Mohammed Bin Zayed city, Shabia - 11 Mussafah - Abu Dhabi. All you have to do is to drop off your laundry any time between 8:00AM to 11:30PM and pick it up when ready. With the uttermost attention and care, you will return home with all of your clothes fresh, clean, and ready to wear! It's our pleasure to served our customer at destination.</p>
			</div>
			<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
				<img src="{{asset('/assets/images/Laundromat.jpg')}}" class="img-fluid img-curve" height="100" alt="" />
			</div>
		</div>
	</div>
</div>
<div class="w3-services1 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h2 style="font-size: 36px;">You Order > We Collect > We Clean > We Deliver</h2>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
				<img src="{{asset('/assets/images/Delivery.jpg')}}" class="img-fluid img-curve" height="100" alt="" />
			</div>
			<div class="col-lg-7 w3-services-left-grid">
				<h3>Free Pickup & Delivery Service</h3>
				<p>We are ambitious to provide quite hassle free services to our laundry customers, our pick-up & deliver services is quite free for all our customers. You can avail the service in all over the Abu Dhabi any time. Message us or call us to schedule a pick-up.</p>
			</div>
		</div>
	</div>
</div>
<div class="w3-services1 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h2>Let us do the laundry for your business</h2>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<div class="col-lg-7 w3-services-left-grid">
				<h3>Commercial Service</h3>

				<p>When you are busy in your core business activities, you need not to be worried about your laundry. We provide full range of services to all businesses including hotel & restaurants industry, airline industry and health care industry.</p>
			</div>
			<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
				<img src="{{asset('/assets/images/Business handshake.jpg')}}" class="img-fluid img-curve" height="100" alt="" />
			</div>
		</div>
	</div>
</div>

<section class="w3l-index3" id="process">
	<div class="grid top-bottom py-4">
		<div class="container py-lg-3">
			<div class="header-section white text-center">
				<h2>How it works</h2>
				<p style="color: #fff;">Drop off your laundry at our location or contact us to schedule</p>
			</div>
			<div class="middle-section row mt-5 pt-3 text-center">
				<div class="three-grids-columns col-lg-3 col-6 ">
					<div class="icon"> <span class="">1</span></div>
					<h3 class="primary-color fs-22">Schedule your order</h3>
					<p class="">Schedule laundry service! Laundryservice.ae is available 7 days a week between 8am and 11:30pm.</p>
				</div>
				<div class="three-grids-columns col-lg-3 col-6">
					<div class="icon"> <span class="">2</span></div>
					<h3 class="primary-color fs-22">We pick up your clothes</h3>
					<p class="">Laundryservice.ae team will pick up your laundry bag right from your apartment, house, business or concierge.</p>
				</div>
				<div class="three-grids-columns col-lg-3 col-6 mt-lg-0 mt-5">
					<div class="icon"> <span class="">3</span></div>
					<h3 class="primary-color fs-22">We clean your clothes</h3>
					<p class="">Efficient cleaning services tailored to make your clothes spotless and fresh.</p>
				</div>
				<div class="three-grids-columns col-lg-3 col-6 mt-lg-0 mt-5">
					<div class="icon"> <span class="">4</span></div>
					<h3 class="primary-color fs-22">We deliver clean, folded clothes</h3>
					<p class="">Your clean contactless-laundry will be dropped off at your location according to the time you specified.</p>

				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-services2 w3l-index2 mt-5">
	<div class="mobile-info py-5">
		<div class="container py-lg-3">
			<div class="header-section text-center mb-5">
				<h2>How to find us?</h2>
			</div>
			<div class="row w3-services-grids mt-lg-5 mt-4 mx-auto">
				<div class="col-lg-8 w3-services-left-grid price">
					<div class="row">
						<div class="col-4">
							<ul>
								<li>Dry cleaner near me</li>
								<li>laundry services Abu Dhabi</li>
								<li>laundries in Abu Dhabi</li>
								<li>Dry Cleaner Abu Dhabi</li>
							</ul>
						</div>
						<div class="col-4">
							<ul>
								<li>laundry near me</li>
								<li>laundry Abu Dhabi</li>
								<li>Dry Cleaning Abu Dhabi</li>
								<li>Dry Cleaning Abu Dhabi</li>
							</ul>
						</div>
						<div class="col-4">
							<ul>
								<li>Self-service laundry near me</li>
								<li>laundry service Abu Dhabi</li>
								<li>Abu Dhabi laundry</li>
								<li>Dry Clean Abu Dhabi</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
					<img src="{{asset('/assets/images/Searching for Easter Eggs.jpg')}}" class="img-fluid img-curve" height="100" alt="" />
				</div>
			</div>
		</div>
	</div>
</section>
<div class="w3l-services2 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h2>FAQs</h2>
		</div>
		<div class="row mt-lg-5 mt-4 mb-5">
			<div class="col-md-6 col-12 mb-md-0 mb-4">
				<h3 class="primary-color fs-22">Do the LaundryService dry cleaner provide a delivery service?</h3>
				<div class="col-12 px-0">
					<p>We encourage our customers to drop-off laundry at our laundromat situated in Mohamed Bin Zayed City, Abu Dhabi, however, to facilitate our busy customer, we also provide the delivery service on demand.</p>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<h3 class="primary-color fs-22">What is the cost of delivery service?</h3>
				<div class="col-12 px-0">
					<p>There is no extra cost if the minimum order is over 65 AED. In other cases, if an order is less than 65 AED, the customer will be charged 10 AED as delivery price.</p>
				</div>
			</div>
		</div>
		<div class="row mt-lg-5 mt-4 mb-5">
			<div class="col-md-6 col-12 mb-md-0 mb-4">
				<h3 class="primary-color fs-22">What is the normal time span for dry cleaning garments?</h3>
				<div class="col-12 px-0">
					<p>The normal time span is the next day delivery of dry cleaned items.</p>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<h3 class="primary-color fs-22">Do the LaundryService dry cleaner provide same-day dry clean service?</h3>
				<div class="col-12 px-0">
					<p>Yes, We @LaundryService dry cleaner provides same-day delivery service but there are extra charges, check the detail above in pricing</p>
				</div>
			</div>
		</div>
		<div class="row mt-lg-5 mt-4 mb-5">
			<div class="col-md-6 col-12 mb-md-0 mb-4">
				<h3 class="primary-color fs-22">My dry cleaning item is not listed in the price-list, how to know the price?</h3>
				<div class="col-12 px-0">
					<p>We are enthusiastic to provide complete home laundry & dry cleaning solutions to our customers under one roof, we can understand there are numerous types of textile that can't be covered in a rate list, we advise you to contact our customer support team by any convenient method and share pictures of the item/garment to get an appropriate solution & price.</p>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<h3 class="primary-color fs-22">How LaundryService dry cleaner is providing quality services at these lowest prices? </h3>
				<div class="col-12 px-0">
					<p>It's pleasure to assist you! We are offering high-quality services at the lowest prices in an Abu Dhabi market because we are collecting orders directly online from customers and handle all laundry service processes from the collection, dry cleaning, packing & delivery by our own fleets that support us to give the best laundry services at cheaper prices.:-) There is no third party involved.</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')

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
						itemDisplay.innerHTML += `
       <div class="col-lg-3 col-md-6 col-12">
    <div class="price-box">
        <div class="price-box_icon"> <img loading="lazy"src="${service.image}" alt="" height="50" width="70"></div>
        <h3 class="box-title">${service.itemName}</h3>

        <div class="price-box_content">
            <h4 class="price-box_text"><span class="currency">${service.P_Price}</h4>

          
        </div>
    </div>
</div>`;
					});
				})
				.catch(error => console.error('Error fetching data:', error));
		}
	}
</script>
@endsection