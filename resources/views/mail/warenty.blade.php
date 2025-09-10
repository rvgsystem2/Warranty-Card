<!DOCTYPE html>
<html>
<head>
    <title>Warranty Card Confirmation</title>
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
        <h2>Warranty Card Confirmation</h2>
    </div>

    <div class="content">
        <p>Dear {{ $warentycardData->name }},</p>
        <p>Thank you for registering your product warranty.</p>

        <h4>Warranty Details:</h4>
        <ul>
            <li><strong>Warranty Card No:</strong> {{ $warentycardData->warenty_card_no }}</li>
            <li><strong>Product Serial No:</strong> {{ $warentycardData->product_sl_no }}</li>
            <li><strong>Purchase Date:</strong> {{ $warentycardData->purchase_date }}</li>
            <li><strong>Expiry Date:</strong> {{ $warentycardData->expaire_date }}</li>
            <li><strong>Registered Email:</strong> {{ $warentycardData->email }}</li>
        </ul>

        <p>If you have any questions, feel free to contact us.</p>
        <p>Best regards,<br><strong>Customer Support Team</strong></p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Your Company Name. All Rights Reserved.
    </div>
</div>

</body>
</html>
