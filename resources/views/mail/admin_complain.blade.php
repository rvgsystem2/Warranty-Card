<!DOCTYPE html>
<html>
<head>
    <title>New Complaint Received</title>
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
            background: #dc3545;
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
        <h2>New Complaint Received</h2>
    </div>

    <div class="content">
        <p>Dear Admin,</p>
        <p>A new complaint has been submitted. Below are the details:</p>

        <h4>Complaint Details:</h4>
        <ul>
            <li><strong>Customer Name:</strong> {{ $complainData->name }}</li>
            <li><strong>Email:</strong> {{ $complainData->email }}</li>
            <li><strong>Phone:</strong> {{ $complainData->mobile }}</li>
            <li><strong>City:</strong> {{ $complainData->complain_message }}</li>
            <li><strong>State:</strong> {{ $complainData->warenty_card_no }}</li>
        </ul>

        <p>Please review this complaint and take necessary actions.</p>

        <p>Best Regards,<br><strong>Your Company Team</strong></p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Your Company Name. All Rights Reserved.
    </div>
</div>

</body>
</html>
