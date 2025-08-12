<h2>Hi {{ $booking->customer->name }},</h2>
<p>Thanks for your booking!</p>
<p>We’ll collect your items on <strong>{{ $booking->collectDay }}</strong> at <strong>{{ $booking->collectTime }}</strong>.</p>
<p>Delivery is scheduled for <strong>{{ $booking->dlvrDay }}</strong> at <strong>{{ $booking->dlvrTime }}</strong>.</p>
<p>We appreciate your business!</p>
