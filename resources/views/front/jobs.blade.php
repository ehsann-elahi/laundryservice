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
@section('title', 'Jobs in Laundry| Apply Online for Jobs in Laundry')
@section('description','Career Opportunities Jobs are available for experienced laundry workers, laundry pick-up & delivery drivers, pressmen, and wash man & laundry supervisors. Now you can apply online for a laundry job, explore a range of available positions & upload your documents in quite easy & simple steps.')
@section('og:title', 'Jobs in Laundry| Apply Online for Jobs in Laundry | SunCity Laundry')
@section('og:description','Career Opportunities Jobs are available for experienced laundry workers, laundry pick-up & delivery drivers, pressmen, and wash man & laundry supervisors. Now you can apply online for a laundry job, explore a range of available positions & upload your documents in quite easy & simple steps.')
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
</style>

@endsection
@section('content')
<!-- breadcrum -->
<section class="w3l-breadcrum">
	<div class="breadcrum">
		<div class="container">
			<p><a href="{{route('index')}}">Home</a> &nbsp; / &nbsp; Career Opportunities </p>
		</div>
	</div>
</section>
<!-- //breadcrum -->

<!-- services block1 -->
<div class="w3-services1 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h1>Career Opportunities</h1>
			<h4 style="font-size: 20px;">Laundry Jobs</h4>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<div class="col-lg-5 w3-services-left-grid">
				<p>
					We thrive on the challenge to be our best, progressive thinking to keep growing, and working together to deliver trusted advice to help our clients thrive and communities prosper. We care about each other, reaching our potential, making a difference to our communities, and achieving success that is mutual.
				</p>
			</div>
			<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
				<img loading="lazy"src="{{asset('/assets/images/Hotel Laundry Room_edited.jpg')}}" class="img-fluid img-curve" alt="" />
			</div>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<h3 class="mb-5 mx-0">Why work with us!</h3>
			<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5">
				<img loading="lazy"src="{{asset('/assets/images/Happy Family in Nature.jpg')}}" class="img-fluid img-curve" alt="" />
			</div>
			<div class="col-lg-5 w3-services-left-grid">
				<p>
					We care for our employees not only during work time but also design work packages to provide them plenty of time & pleasure in their out of work time. A successful candidate is offered the best competitive market salary package, along with accommodation, food, travel itinerary, health insurance & overtime.
				</p>
			</div>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<h3 class="mt-5">We are together to fight against Coronavirus!</h3>

			<div class="col-lg-5 w3-services-left-grid">
				<p>
					SunCity Laundry requires as a condition of employment that all successful candidates in the UAE be fully vaccinated against COVID-19 prior to their start date and may require proof of the same.
				</p>
			</div>
			<div class="col-lg-4 w3-services-right-grid mt-lg-0 mt-5 mx-auto  ">
				<img loading="lazy"src="{{asset('/assets/images/Person Getting Vaccinated.jpeg')}}" class="img-fluid img-curve" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- //services block1 -->

<section class="w3l-services2">
	<div class="mobile-info py-5">
		<div class="container py-lg-3">
			<div class="row mx-lg-0">
				<div class="col-10 mx-auto">
					<form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<!-- Left Column -->
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Applied For *</label>
									<select class="form-select" name="position" required>
										<option value="Laundry Washer">Laundry Washer</option>
										<option value="Laundry Presser">Laundry Presser</option>
										<option value="Laundry Man">Laundry Man</option>
										<option value="Laundry Supervisor">Laundry Supervisor</option>
										<option value="Delivery Captain">Delivery Captain</option>
									</select>
								</div>

								<div class="mb-3">
									<label class="form-label">Name</label>
									<input type="text" name="name" class="form-control" required>
								</div>

								<div class="mb-3">
									<label class="form-label">Email</label>
									<input type="email" name="email" class="form-control" required>
								</div>

								<div class="mb-3">
									<label class="form-label">Supporting Documents</label>
									<input type="file" name="document" class="form-control">
								</div>
							</div>

							<!-- Right Column -->
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Expected Salary *</label>
									<div class="input-group">
										<span class="input-group-text">AED</span>
										<input type="number" name="salary" class="form-control" required>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Expected Joining Date</label>
									<input type="date" name="joining_date" class="form-control" required>
								</div>

								<div class="mb-3">
									<label class="form-label">Phone *</label>
									<input type="tel" name="phone" class="form-control" required>
								</div>
							</div>
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-primary">APPLY</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>


@endsection