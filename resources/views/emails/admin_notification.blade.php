<h2>New Booking Alert</h2>
<p><strong>Customer:</strong> {{ $booking->customer->name }}</p>
<p><strong>Contact:</strong> {{ $booking->customer->phone_number }}</p>
<p><strong>Pickup:</strong> {{ $booking->collectDay }} at {{ $booking->collectTime }}</p>
<p><strong>Delivery:</strong> {{ $booking->dlvrDay }} at {{ $booking->dlvrTime }}</p>
<p><strong>Services:</strong> {{ $booking->services }}</p>
