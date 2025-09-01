@extends('layouts.app')
@section('title', 'Thank you for Selecting Our Services')
@section('description','We are thankful to you for choosing us for your laundyr services and showing trust on our professional laundry team. Your order is booked and in process, our representative will contact you shortly to confirm with you.')
@section('og:title', 'Thank you for Selecting Our Services')
@section('og:description','We are thankful to you for choosing us for your laundyr services and showing trust on our professional laundry team. Your order is booked and in process, our representative will contact you shortly to confirm with you.')
@section('canonical', url()->current())
@section('styles')
    <style>
        .thank-you-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .thank-you-message {
            font-size: 24px;
            margin-bottom: 20px;
            color: #0890F1;
        }

        .thank-you-icon {
            font-size: 80px;
            margin-bottom: 20px;
            color: #0890F1;
        }

        .thank-you-description {
            font-size: 16px;
            color: #555;
        }

        .back-home-btn {
            margin-top: 20px;
            color: #fff;
            background-color: #FFD06D;
            border-color: #FFD06D;
        }

        .back-home-btn:hover {
            color: #fff;
            background-color: #0890F1;
            border-color: #0890F1;
        }
    </style>

@endsection
@section('content')

    <div class="container thank-you-container">
        <div class="thank-you-icon">
            <i class="bi bi-check-circle-fill"></i> <!-- You can use any icon library or a custom image -->
        </div>
        <div class="thank-you-message">
            Thank You for Your Submission!
        </div>
        <div class="thank-you-description">
            Your laundry Order has been placed successfully, We are working on it and will take care of your Laundry.
        </div>
        <a href="/" class="btn btn-success back-home-btn">Back to Home</a> <!-- Replace '/' with your homepage URL -->
    </div>

@endsection