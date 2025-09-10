<!DOCTYPE html>
<html>
<head>
    <title>New Feedback Received</title>
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
            background: #ffc107;
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
        <h2>New Feedback Received</h2>
    </div>

    <div class="content">
        <p>Dear Admin,</p>
        <p>A new feedback submission has been received. Below are the details:</p>

        <h4>Feedback Details:</h4>
        <ul>
            <li><strong>Name:</strong> {{ $feedbackData->name }}</li>
            <li><strong>Email:</strong> {{ $feedbackData->email }}</li>
            <li><strong>Rating:</strong> {{ $feedbackData->rating }}</li>
            <li><strong>Comments:</strong> {{ $feedbackData->comments }}</li>
            <li><strong>Submitted On:</strong> {{ date('Y-m-d') }}</li>
        </ul>

        <p>Please review the feedback and take necessary actions if required.</p>

        <p>Best Regards,<br><strong>Your Company Team</strong></p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Your Company Name. All Rights Reserved.
    </div>
</div>

</body>
</html>
