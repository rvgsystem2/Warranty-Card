<!DOCTYPE html>
<html>
<head>
    <title>Inquiry Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            background: #17a2b8;
            color: #ffffff;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Inquiry Confirmation</h2>
    </div>

    <div class="content">
        <p>Dear {{ $userregisterData->name }},</p>
        <p>Thank you for reaching out to us! We have received your inquiry and will get back to you as soon as possible.</p>

        <h4>Inquiry Details:</h4>
        <ul>
            <li><strong>Name:</strong> {{ $userregisterData->name }}</li>
            <li><strong>Email:</strong> {{ $userregisterData->email }}</li>
            <li><strong>Phone:</strong> {{ $userregisterData->mobile }}</li>
            <li><strong>City:</strong> {{ $userregisterData->city }}</li>
            <li><strong>Address:</strong> {{ $userregisterData->address }}</li>
            <li><strong>State:</strong> {{ $userregisterData->state }}</li>
            <li><strong>Dealer/Distribotur:</strong> {{ $userregisterData->dealer_and_distributor }}</li>
            <li><strong>Inquiry Date:</strong> {{ date('Y-m-d') }}</li>
        </ul>

        <p>Our team is reviewing your inquiry and will respond shortly. If you have any urgent concerns, please contact our support team.</p>

        <p>Best Regards,<br><strong>Your Company Team</strong></p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Your Company Name. All Rights Reserved.
    </div>
</div>

</body>
</html>
