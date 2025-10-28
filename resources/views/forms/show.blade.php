<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $form->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background-color: #f3f6fb;
            font-family: 'Poppins', sans-serif;
            color: #222;
        }

        .container {
            max-width: 1100px;
        }

        .header-card {
            background: #FFD06D;
            color: #fff;
            border-radius: 18px;
            padding: 40px 30px;
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 8px 20px rgba(10, 88, 202, 0.3);
        }

        .header-card img {
            max-width: 100px;
            margin-bottom: 15px;
        }

        .header-card h1 {
            font-weight: 600;
            font-size: 1.9rem;
        }

        .form-section {
            background: #fff;
            border-radius: 18px;
            padding: 35px;
            margin-bottom: 30px;
            border: 1px solid #e3e6ef;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .form-section:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .form-title {
            font-weight: 600;
            color: #0a58ca;
            border-left: 4px solid #0a58ca;
            padding-left: 10px;
            margin-bottom: 25px;
            font-size: 1.25rem;
        }

        .form-label {
            font-weight: 500;
            color: #333;
        }

        .form-control,
        .form-select {
            border-radius: 12px;
            padding: 10px 14px;
            border: 1px solid #cfd8e3;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(10, 88, 202, 0.2);
            border-color: #0a58ca;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .checkbox-group label {
            background: #f1f3f5;
            padding: 7px 15px;
            border-radius: 12px;
            cursor: pointer;
            border: 1px solid #d8dee9;
            font-size: 0.95rem;
        }

        .checkbox-group label:hover {
            background: #e6ebf2;
        }

        .btn-primary {
            background: linear-gradient(90deg, #0a58ca 0%, #0e77ff 100%);
            border: none;
            border-radius: 12px;
            padding: 12px 40px;
            font-weight: 500;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 15px rgba(10, 88, 202, 0.3);
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0946a2 0%, #0c64db 100%);
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #777;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="container py-5">

        <!-- HEADER -->
        <div class="header-card">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
            <h1>{{ $form->title }}</h1>
            <p class="mt-2 mb-0">Please fill out all details carefully to help us understand your requirements better.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('forms.store', $form->slug) }}">
            @csrf

            <div class="row g-4">

                <!-- Company Info -->
                <div class="col-lg-6">
                    <div class="form-section">
                        <h5 class="form-title">Section 1 – Company Information</h5>

                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contact Person</label>
                            <input type="text" name="contact_person" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email / Phone</label>
                            <input type="text" name="email_phone" class="form-control" required>
                        </div>
                    </div>
                </div>

                <!-- Service Requirements -->
                <div class="col-lg-6">
                    <div class="form-section">
                        <h5 class="form-title">Section 2 – Service Requirements</h5>

                        <div class="mb-3">
                            <label class="form-label">Pickup & Delivery Location</label>
                            <select name="pickup_location" class="form-select" required>
                                <option value="">Select one</option>
                                <option>Single location</option>
                                <option>Multiple locations</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Frequency of Pickup & Delivery</label>
                            <select name="pickup_frequency" class="form-select" required>
                                <option value="">Select one</option>
                                <option>Once daily</option>
                                <option>Twice daily</option>
                                <option>2–3 times per week</option>
                                <option>Weekly</option>
                                <option>As needed / On call</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Volume per Pickup</label>
                            <select name="volume_per_pickup" class="form-select" required>
                                <option value="">Select one</option>
                                <option>Small (up to 50)</option>
                                <option>Medium (51–200)</option>
                                <option>Large (201–500)</option>
                                <option>Extra Large (500+)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Monthly Expected Business Value (AED)</label>
                            <select name="monthly_value" class="form-select" required>
                                <option value="">Select one</option>
                                <option>Less than 5,000 AED</option>
                                <option>5,000 – 15,000 AED</option>
                                <option>15,001 – 30,000 AED</option>
                                <option>Above 30,000 AED</option>
                                <option>Not sure yet</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Special Handling Required</label>
                            <div class="checkbox-group">
                                @foreach(['Medical items','Hotel linen','Uniforms','Towels','Personal clothing','Others'] as $opt)
                                    <label>
                                        <input type="checkbox" name="special_handling[]" value="{{ $opt }}"> {{ $opt }}
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Emirate of Operation</label>
                            <select name="emirate" class="form-select" required>
                                <option value="">Select one</option>
                                <option>Abu Dhabi</option>
                                <option>Dubai</option>
                                <option>Sharjah</option>
                                <option>Ajman</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit & Generate PDF</button>
            </div>
        </form>

        <footer>
            <p class="mt-5 mb-0">© {{ date('Y') }} Suncity Laundry Services — All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>
