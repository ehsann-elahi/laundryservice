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
@section('title', 'Laundry blog post')
@section('description','Read our blog post to know how a professional laundry works? Where to find the best laundry near me? How to clean laundry at cheapest price when you are on visit in Dubai? How to clean the blackout curtains?')
@section('og:title', 'Laundry near me')
@section('og:description','Read our blog post to know how a professional laundry works? Where to find the best laundry near me? How to clean laundry at cheapest price when you are on visit in Dubai? How to clean the blackout curtains?')
<meta property="og:url" content="{{ url()->current() }}" />
<link rel="canonical" href="{{ url()->current() }}" />

@section('content')
<!-- breadcrum -->

<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/breadcumb-bg.jpg')}}">
	<div class="container">
		<div class="breadcumb-content">
			<h1 style="font-size: 40px;" class="breadcumb-title">{{$blog->title}}</h1>
			<ul class="breadcumb-menu">
				<li><a href="{{ route('index') }}">Home</a></li>
				<li class="text-white">Blog Detail</li>
			</ul>
		</div>
	</div>
</div>
<!-- //breadcrum -->

<section class="w3l-blog">
	<div class="text-element-9 py-5">
		<div class="container py-lg-3">
			<div class="row grid-text-9">
				<div class="col-lg-8">
					<div class="blog-single-post">
						<div class="single-post-image mb-4">
							<img style="width: 800px" loading="lazy" src="{{$blog->image}}" class="img-fluid " alt="blog-post-image" />
							<ul class="blog-author-date d-flex align-items-center mt-3 mb-2">
								<li>By <span class="author">Admin</span> </li>
								<li><span class="fa fa-calendar-o" aria-hidden="true"></span> {{ $blog->created_at->format('M d, Y') }}</li>
							</ul>
							<h2 class="text-head-text-9 my-2" style="font-size: 30px;">{{$blog->title}}</h1>
						</div>
						<div class="single-post-content">
							<p class="mb-4">{!!$blog->description!!} </p>
						</div>

						<div class="reply mt-5 pt-5" id="reply">
							<h3 class="post-content-title py-3">Leave your thought</h3>
							<form action="#" method="POST">
								<div class="form-group reply">
									<input type="text" class="form-control" placeholder="Your Name" id="exampleInputText1">
								</div>
								<div class="form-group reply">
									<input type="email" class="form-control" placeholder="Your Email" id="exampleInputEmail1" required>
								</div>
								<div class="form-group reply">
									<textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1" rows="4" required></textarea>
									<div class="text-right">
										<button class="btn btn-primary theme-button mt-3" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>



				</div>
				<div class="col-lg-4">
					<h3>Related Posts</h3>
					<nav class="post-navigation row mt-2 py-4">
						@if($previousBlog)
						<div class="post-prev col-3 pr-sm-5">
							<a href="{{ route('blog-single', $previousBlog->slug) }}" rel="prev" class="posts-view posts-view-left">
								<img loading="lazy" src="{{ $previousBlog->image }}" class="img-fluid postimg d-none d-md-block" />

							</a>
						</div>
						<div class="col-9">
							<a href="{{ route('blog-single', $previousBlog->slug) }}" rel="next" class="posts-view posts-view-right">
								<label>{{ $previousBlog->title }}</label>
							</a>
						</div>

						@endif

						@if($nextBlog)
						<div class="post-next col-3 pl-sm-5 text-right mt-3">

							<a href="{{ route('blog-single', $nextBlog->slug) }}" rel="next" class="posts-view posts-view-right">

								<img loading="lazy" src="{{ $nextBlog->image }}" class="img-fluid postimg d-none d-md-block" />
							</a>
						</div>
						<div class="col-9 mt-3">
							<a href="{{ route('blog-single', $nextBlog->slug) }}" rel="next" class="posts-view posts-view-right">
								<label>{{ $nextBlog->title }}</label>
							</a>
						</div>
						@endif
					</nav>

					<div class="related-posts mt-5">

						<ul>
							@foreach($relatedBlogs as $relatedBlog)
							<li>
								<a href="{{ route('blog-single', $relatedBlog->slug) }}">
									{{ $relatedBlog->title }}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
