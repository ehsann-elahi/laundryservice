<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $form->title }}</title>
    <style>
        @page { margin: 30px 40px; }
        body {
            font-family: DejaVu Sans, sans-serif;
            background-color: #f8fafc;
            color: #333;
            font-size: 12px;
            line-height: 1.6;
        }

        .header {
            text-align: center;
            background: #FFD06D;
            color: white;
            border-radius: 10px;
            padding: 20px 10px;
            margin-bottom: 25px;
        }

        .header img {
            max-width: 80px;
            margin-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }

        .section {
            background: #fff;
            border-radius: 10px;
            padding: 20px 25px;
            margin-bottom: 20px;
            border: 1px solid #e5e7eb;
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            color: #0a58ca;
            margin-bottom: 12px;
            border-left: 4px solid #0a58ca;
            padding-left: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            width: 45%;
            padding: 8px;
            color: #444;
            font-weight: 500;
            background: #f3f4f6;
            border-bottom: 1px solid #ddd;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #eee;
            color: #111;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 11px;
            color: #777;
        }

        .highlight {
            color: #0a58ca;
            font-weight: 600;
        }
    </style>
</head>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<body>
    <div class="header">
        <img src="{{ public_path('assets/images/logo.png') }}" alt="Logo">
        <h1>{{ $form->title }}</h1>
        <p style="font-size: 11px;">Generated PDF — {{ now()->format('d M Y, h:i A') }}</p>
    </div>

    <div class="section">
        <div class="section-title">Section 1 – Company Information</div>
        <table>
            <tr><th>Company Name</th><td>{{ $data['company_name'] ?? '' }}</td></tr>
            <tr><th>Contact Person</th><td>{{ $data['contact_person'] ?? '' }}</td></tr>
            <tr><th>Email / Phone</th><td>{{ $data['email_phone'] ?? '' }}</td></tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">Section 2 – Service Requirements</div>
        <table>
            <tr><th>Pickup & Delivery Location</th><td>{{ $data['pickup_location'] ?? '' }}</td></tr>
            <tr><th>Pickup Frequency</th><td>{{ $data['pickup_frequency'] ?? '' }}</td></tr>
            <tr><th>Volume per Pickup</th><td>{{ $data['volume_per_pickup'] ?? '' }}</td></tr>
            <tr><th>Monthly Expected Business Value (AED)</th><td>{{ $data['monthly_value'] ?? '' }}</td></tr>
            <tr><th>Special Handling Required</th>
                <td>{{ is_array($data['special_handling'] ?? null)
                        ? implode(', ', $data['special_handling'])
                        : ($data['special_handling'] ?? '') }}</td>
            </tr>
            <tr><th>Emirate of Operation</th><td>{{ $data['emirate'] ?? '' }}</td></tr>
        </table>
    </div>

    <div class="footer">
        <p>© {{ date('Y') }} <span class="highlight">Suncity Laundry Services</span> — All Rights Reserved.</p>
    </div>
</body>
</html>
