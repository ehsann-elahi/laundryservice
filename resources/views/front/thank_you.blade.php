<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Thank you for Selecting Our Services')
    @section('description','We are thankful to you for choosing us for your laundyr services and showing trust on our professional laundry team. Your order is booked and in process, our representative will contact you shortly to confirm with you.')
    @section('og:title', 'Thank you for Selecting Our Services')
    @section('og:description','We are thankful to you for choosing us for your laundyr services and showing trust on our professional laundry team. Your order is booked and in process, our representative will contact you shortly to confirm with you.')
    <meta name="robots" content="noindex"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            color: #2b2f7b;
        }

        .thank-you-icon {
            font-size: 80px;
            margin-bottom: 20px;
            color: #2b2f7b;
        }

        .thank-you-description {
            font-size: 16px;
            color: #555;
        }

        .back-home-btn {
            margin-top: 20px;
            color: #fff;
            background-color: #2b2f7b;
            border-color: #2b2f7b;
        }

        .back-home-btn:hover {
            color: #fff;
            background-color: #1F2C5D;
            border-color: #2b2f7b;
        }
    </style>
</head>

<body>

    <div class="container thank-you-container">
        <div class="thank-you-icon">
            <i class="bi bi-check-circle-fill"></i> <!-- You can use any icon library or a custom image -->
        </div>
        <div class="thank-you-message">
            Thank You for Your Submission!
        </div>
        <div class="thank-you-description">
            Your laundry Order #{{ $id }} has been placed successfully, We are working on it and will take care of your Laundry.
        </div>
        <a href="/" class="btn btn-success back-home-btn">Back to Home</a> <!-- Replace '/' with your homepage URL -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>