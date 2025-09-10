<!DOCTYPE html>
<html>
<head>
    <title>New User Inqueiry</title>
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
        <h2>New User Inqueiry</h2>
    </div>

    <div class="content">
        <p>Dear Admin,</p>
        <p>A new user has inqueiry on your platform. Below are the details:</p>

        <h4>User Details:</h4>
        <ul>
            <li><strong>Name:</strong> {{ $userregisterData->name }}</li>
            <li><strong>Email:</strong> {{ $userregisterData->email }}</li>
            <li><strong>Phone:</strong> {{ $userregisterData->mobile }}</li>
            <li><strong>City:</strong> {{ $userregisterData->city }}</li>
            <li><strong>address:</strong> {{ $userregisterData->address }}</li>
            <li><strong>state:</strong> {{ $userregisterData->state }}</li>
            <li><strong>Dealer/Distributor:</strong> {{ $userregisterData->dealer_and_distributor}}</li>
            <li><strong>Registered On:</strong> {{ date('Y-m-d') }}</li>
        </ul>

        <p>Please review this inqueiry and take any necessary actions.</p>

        <p>Best Regards,<br><strong>Your Company Team</strong></p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Your Company Name. All Rights Reserved.
    </div>
</div>

</body>
</html>
