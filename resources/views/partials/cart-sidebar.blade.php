@php $total = 0; @endphp

@if(!empty(session('cart', [])))
<ul class="woocommerce-mini-cart cart_list product_list_widget">
    @foreach(session('cart', []) as $id => $details)
    @php $total += $details['price'] * $details['quantity']; @endphp
    <li class="woocommerce-mini-cart-item mini_cart_item">
        <a href="javascript:void(0)" class="remove remove_from_cart_button removeItem" data-id="{{ $id }}">
            <i class="far fa-times"></i>
        </a>
        <a href="#">
            <img src="{{ filter_var($details['image'], FILTER_VALIDATE_URL) ? $details['image'] : asset('/assets/upload/shop/' . $details['image']) }}" alt="Cart Image" />
            {{ $details['title'] }}
        </a>
        <span class="quantity">
            {{ $details['quantity'] }} ×
            <span class="woocommerce-Price-amount amount">
                <img class="aed2" style="width: 14px; vertical-align: middle;">
                {{ $details['price'] }}
            </span>
        </span>
    </li>
    @endforeach
</ul>

<p class="woocommerce-mini-cart__total total">
    <strong>Subtotal:</strong>
    <span class="woocommerce-Price-amount amount">
        <img class="aed2" style="width: 14px; vertical-align: middle;">
        {{ number_format($total, 2) }}
    </span>
</p>
<p class="woocommerce-mini-cart__buttons buttons">
    <a href="{{route('view.cart')}}" style="background-color: #2B2F7B; color:white" class="btn  w-100 view-cart-button">View Cart</a>

    
</p>
@else
<p class="empty-cart" style="text-align: center; padding: 20px;">Your cart is empty</p>
@endif