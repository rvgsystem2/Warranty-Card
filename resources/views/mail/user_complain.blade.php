<!DOCTYPE html>
<html>
<head>
    <title>Complaint Confirmation</title>
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
            background: #007bff;
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
        <h2>Complaint Confirmation</h2>
    </div>

    <div class="content">
        <p>Dear {{ $complainData->name }},</p>
        <p>We have received your complaint and appreciate you reaching out to us. Below are the details of your complaint:</p>

        <h4>Complaint Details:</h4>
        <ul>
            <li><strong>Complaint ID:</strong> {{ $complainData->email }}</li>
            <li><strong>Product Serial No:</strong> {{ $complainData->mobile }}</li>
            <li><strong>Complaint Description:</strong> {{ $complainData->complain_message }}</li>
            <li><strong>Complaint Date:</strong> {{ $complainData->warenty_card_no }}</li>
        </ul>

        <p>Our team will review your complaint and get back to you as soon as possible. If you have any further queries, please contact our support team.</p>

        <p>Thank you for your patience.</p>

        <p>Best Regards,<br><strong>Your Company Team</strong></p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Your Company Name. All Rights Reserved.
    </div>
</div>

</body>
</html>
