@extends('layouts.app')
@section('title', 'Buy quality laundry products at wholesale price')
@section('description','Buy best-quality products recommended by laundry experts at wholesale rates for your laundry like washing powders, liquid detergents, fabric softeners, hangers, commercial heavy-duty laundry washers, steam iron, ironing shoes, laundry bags, packing material and laundry dryers online at the cheapest price from the LaundryService.AE. Get free delivery on all products. Buy products with peace of mind.')
@section('og:title', 'Buy quality laundry products at wholesale price | LaundryService')
@section('og:description','Buy best-quality products recommended by laundry experts at wholesale rates for your laundry like washing powders, liquid detergents, fabric softeners, hangers, commercial heavy-duty laundry washers, steam iron, ironing shoes, laundry bags, packing material and laundry dryers online at the cheapest price from the LaundryService.AE. Get free delivery on all products. Buy products with peace of mind.')
@section('canonical', url()->current())
@section('styles')

<style>
	.blue-icon {
		color: #0890F1;
	}

	.blue-icon:hover {
		color: #FFD06D;
		/* Darker blue on hover */
	}

	img.aed2 {
		height: 0.8em;
		width: auto;
		vertical-align: 0.01em;
		content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMyQjJGN0IgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
	}

	.old-price {
		text-decoration: line-through;
		color: #999;
		margin-left: 8px;
		font-size: 14px;
	}

	.count {
		font-weight: bold;
		font-size: 16px;
	}

	.aed2 {
		width: 14px;
		vertical-align: middle;
	}

	.star-rating {
		display: inline-flex;
		align-items: center;
		font-size: 14px;
		gap: 4px;
	}

	.star-rating .stars {
		color: #ffc107;
		/* Golden color */
	}

	.star-rating .reviews {
		color: #aaa;
		/* Light grey */
		font-size: 12px;
	}
	  img.aed2 {
  height: 0.8em;
  width: auto;
  vertical-align: 0.01em;
  content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMwODkwRjEgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
}
</style>
@endsection

@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{asset('/assets/front/img/bg/shop.jpg')}}">
	<div class="container">
		<div class="breadcumb-content">
			<h1 class="breadcumb-title">Buy Laundry Products at Wholesale Price</h1>
			<h2 style="font-size: 20px;" class="text-white mt-3">Dubai, Abu-Dhabi, Ajman & Sharjah</h2>
			<ul class="breadcumb-menu">
				<li><a href="{{route('index')}}">Home</a></li>
				<li class="text-white">Shop</li>
			</ul>
		</div>
	</div>
</div>
<!-- //breadcrum -->
<section>
	<div class="container py-5">
		<div class="row mb-5 align-items-center">
			<div class="col-md-12 col-12 mb-3 mb-md-0 text-center">
				<h2 style="font-size: 35px;">Buy Laundry Products</h2>
				<p class="text-muted">Free Delivery Service on all Products</p>
			</div>

			<section class="mt-3">
				<div class="container">
					<div class="row gy-3">
						<div class="col-6 mb-5">
							<h3 style="font-size: 26px;">Category List</h3>
							<select id="categoryFilter" class="orderby w-100" aria-label="Shop order">
								<option value="">All Categories</option>
								@foreach($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-6 mb-5">

							<h3 style="font-size: 26px;" class="mx-5">To Place an Order:
								<button type="button" class="simple-icon sideMenuToggler2">
									<span class="badge">{{ session('cart') ? count(session('cart')) : 0 }}</span>
									<i class="fa-regular fa-cart-shopping"></i>
								</button>
							</h3>

							<!-- cart side bar -->
							<div class="sidemenu-wrapper shopping-cart">
								<div class="sidemenu-content">
									<button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
									<div class="widget woocommerce widget_shopping_cart">
										<h3 class="widget_title">Shopping cart</h3>
										<div class="widget_shopping_cart_content">

											@if(!empty(session('cart', [])))
											<ul class="woocommerce-mini-cart cart_list product_list_widget">
												@php $total = 0; @endphp
												@foreach(session('cart', []) as $id => $details)
												@php $total += $details['price'] * $details['quantity']; @endphp
												<li class="woocommerce-mini-cart-item mini_cart_item">
													<a href="javascript:void(0)" class="remove remove_from_cart_button removeItem" data-id="{{ $id }}">
														<i class="far fa-times"></i>
													</a>
													<a href="{{ route('product.detail', ['slug' => Str::slug($details['title'])]) }}">
														<img src="{{ filter_var($details['image'], FILTER_VALIDATE_URL) ? $details['image'] : asset('/assets/upload/shop/' . $details['image']) }}" alt="Cart Image" />
														{{ $details['title'] }}
													</a>
													<span class="quantity">
														{{ $details['quantity'] }} ×
														<span class="woocommerce-Price-amount amount">
															
															{{ $details['price'] }}
															
														</span>
													</span>
												</li>
												@endforeach
											</ul>
											<p class="woocommerce-mini-cart__total total">
												<strong>Subtotal:</strong>
												<span class="woocommerce-Price-amount amount">
													{{ number_format($total, 2) }}
													<img class="aed2" style="width: 17px; ">
												</span>
											</p>
											<p class="woocommerce-mini-cart__buttons buttons">
											<a href="{{route('view.cart')}}" style="background-color: #0890F1; color:white"  class="btn w-100 view-cart-button">View Cart</a>
												
												
											</p>
											@else
											<p class="empty-cart" style="text-align: center; padding: 20px;">Your cart is empty</p>
											@endif
										</div>
									</div>
								</div>
							</div>
							<!-- cart side bar -->

							<p class="mb-0 mt-4 mx-5" style="font-size: 18px;">Contact us at:
								<a href="mailto:support@laundryservice.ae?subject=Request to Schedule Laundry" class="text-decoration-none">support@laundryservice.ae</a>
							</p>
						</div>
					</div>

				</div>

				<div class="container">
					<div id="product-container">
						<div class="row gy-40" id="product-row">
							@foreach($products as $product)
							<div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
								<div class="th-product product-grid">
									<a href="{{ route('product.detail', ['slug' => Str::slug($product->title)]) }}">
										<div class="product-img">
											<img
												loading="lazy"
												style="height: 200px; width: 200px; object-fit: cover;"
												src="{{ filter_var($product->main_image, FILTER_VALIDATE_URL) ? $product->main_image : asset('/assets/upload/shop/' . $product->main_image) }}"
												alt="{{ $product->title }}"
												class="img-fluid">
											<span class="product-tag">Sale</span>
										</div>
									</a>
									<div class="product-content">
										<h3 class="product-title">
											<a href="{{ route('product.detail', ['slug' => Str::slug($product->title)]) }}">
												{{ $product->title }}
											</a>
										</h3>
										<span class="count" style="color: #0890F1; font-weight: bold;">
											{{ $product->price }}
											<img class="aed2" style="width: 14px; vertical-align: middle;">
											@if($product->old_price)
											<span class="old-price" style="text-decoration: line-through; color: #999; font-size: 14px; margin-left: 5px;">
												{{ $product->old_price }}
												<img class="aed2" style="width: 14px; vertical-align: middle;">
											</span>
											@endif
										</span>
										<!-- Changed from ID to class and added proper class -->
										<a class="icon-btn blue-icon addcart" data-id="{{ $product->id }}">
											<i class="far fa-cart-plus"></i>
										</a>
										<div class="star-rating mt-1">
											<span>
												Rated <strong class="rating">5.00</strong> out of 5 based on
												<span class="rating">1</span> customer rating
											</span>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

@endsection

@section('script')
<script>
	  function clearCart() {
        localStorage.removeItem('cart'); // Clear all cart items from local storage
        updateCartSidebar(); // Refresh cart UI
    }
	$(document).ready(function() {

		// Cart Sidebar Toggle
		$('.sideMenuToggler2').on('click', function() {
			$('.sidemenu-wrapper.shopping-cart').addClass('active');
		});

		$(document).on('click', '.sideMenuCls', function() {
			$('.sidemenu-wrapper.shopping-cart').removeClass('active');
		});
	});
	$('#categoryFilter').on('change', function() {
		let categoryId = $(this).val();

		$.ajax({
			url: '{{ route("shop") }}',
			type: 'GET',
			data: {
				category: categoryId
			},
			success: function(response) {
				// Replace only the inner row
				$('#product-row').html(response);
			},
			error: function() {
				alert('Something went wrong. Please try again.');
			}
		});
	});
</script>

<script>
    function loadCartSidebar() {
        $.get('{{ route("cart.sidebar") }}', function (data) {
            $('.widget_shopping_cart_content').html(data);
            bindRemoveButtons(); // 👈 rebind after DOM update
        });
    }

    function bindRemoveButtons() {
        $('.removeItem').off('click').on('click', function (e) {
            e.preventDefault();
            let productId = $(this).data('id');

            $.ajax({
                url: '{{ route("remove.from.cart") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: productId
                },
                success: function (response) {
                    if (response.status === 'success') {
                        $('.simple-icon .badge').text(response.cart_count);
                        loadCartSidebar(); // 👈 reload and rebind
                    } else {
                        alert('❌ Something went wrong.');
                    }
                },
                error: function () {
                    alert('❌ Error while removing item.');
                }
            });
        });
    }

    $(document).ready(function () {
        $('.addcart').on('click', function () {
            let productId = $(this).data('id');

            $.ajax({
                url: '{{ route("add.to.cart") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: productId
                },
                success: function (response) {
                    if (response.status === 'success') {
                        $('.simple-icon .badge').text(response.cart_count);
                        alert('✅ ' + response.message);
                        loadCartSidebar(); // 🔁
                    } else {
                        alert('❌ ' + response.message);
                    }
                },
                error: function () {
                    alert('Something went wrong. Please try again.');
                }
            });
        });

        bindRemoveButtons(); // 👈 first time
    });

</script>

@endsection
