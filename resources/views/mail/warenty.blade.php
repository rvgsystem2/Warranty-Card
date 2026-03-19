<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Warranty Submitted</title>
</head>
<body>
    <h2>Warranty Registration Submitted</h2>

    <p>Dear {{ $data->name }},</p>

    <p>Thank you for submitting your warranty registration.</p>
    <p>Your request has been received and is currently under admin verification.</p>

    <p><strong>Warranty Card No:</strong> {{ $data->warenty_card_no }}</p>
    <p><strong>Product Serial No:</strong> {{ $data->product_sl_no }}</p>
    <p><strong>Purchase Date:</strong> {{ $data->purchase_date }}</p>

    <p>We will notify you once your request is approved or rejected.</p>
</body>
</html>