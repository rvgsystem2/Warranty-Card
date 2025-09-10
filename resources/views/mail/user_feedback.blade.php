<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Feedback</title>
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
            background: #28a745;
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
        <h2>Thank You for Your Feedback!</h2>
    </div>

    <div class="content">
        <p>Dear {{ $feedbackData->name }},</p>
        <p>We appreciate you taking the time to share your feedback with us. Your input helps us improve our services.</p>

        <h4>Your Feedback:</h4>
        <ul>
            <li><strong>Name:</strong> {{ $feedbackData->name }}</li>
            <li><strong>Email:</strong> {{ $feedbackData->email }}</li>
            <li><strong>Rating:</strong> {{ $feedbackData->rating }}</li>
            <li><strong>Comments:</strong> {{ $feedbackData->comments }}</li>
            <li><strong>Submitted On:</strong> {{ date('Y-m-d') }}</li>
        </ul>

        <p>We value your opinion and will consider your feedback as we work to enhance our offerings. If you have any further questions or concerns, feel free to contact us.</p>

        <p>Best Regards,<br><strong>Your Company Team</strong></p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Your Company Name. All Rights Reserved.
    </div>
</div>

</body>
</html>
