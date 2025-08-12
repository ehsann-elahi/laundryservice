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
@section('title', 'Laundry Near Me Dubai & Abu Dhabi')
@section('description','Get the best Laundry & dry cleaning service in Abu Dhabi at the cheapest price with free laundry pickup & delivery service. We also provide same-day laundry, pay per kg & urgent laundry services, online booking. We do the ironing, steam pressing, Wash & fold. Laundromat is near Musaffah, Shamkha, Khalifa City, Al Reef.')
@section('og:title', 'Laundry Near Me Dubai & Abu Dhabi')
@section('og:description','Get the best Laundry & dry cleaning service in Abu Dhabi at the cheapest price with free laundry pickup & delivery service. We also provide same-day laundry, pay per kg & urgent laundry services, online booking. We do the ironing, steam pressing, Wash & fold. Laundromat is near Musaffah, Shamkha, Khalifa City, Al Reef.')
@section('og:url', 'https://www.laundryservice.ae/laundry-near-me')
@section('canonical', 'https://www.laundryservice.ae/laundry-near-me')

@section('styles')
<style>
	.img-curve {
		height: 200px;
		/* Fixed height */
		width: 100%;
		/* Full width */
		object-fit: cover;
		/* Maintain aspect ratio without distortion */
		border-radius: 10px;
		/* Curve effect */
	}
</style>
@endsection
@section('content')
<section class="w3l-pricing" id="pricing">
	<div class="pricing py-5" style="background-color: #fff;">
		<div class="container py-lg-3">
			<div class="header-section mb-4 text-center">
				<h1 class="primary-color">Item List</h1>
			</div>
			<div class="row">
				@foreach($images as $image)
				<div class="col-6 mt-4">
					<div class="card card__hover">
						<div class="card-block">
							<img loading="lazy"src="{{ $image['path'] }}" class="img-fluid img-curve" alt="{{ $image['name'] }}">
							<a href="{{ route('laundry.details', ['name' => Str::slug($image['name'])]) }}"
								class="btn theme-button btn-outline-primary mt-4">Read More</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

@endsection