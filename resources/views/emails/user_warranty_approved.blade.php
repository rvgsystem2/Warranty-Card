<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Warranty Approved</title>
</head>
<body>
    <h2>Your Warranty Has Been Approved</h2>

    <p>Dear {{ $data->name }},</p>

    <p>Thank you. Your warranty registration has been successfully approved.</p>

    <p><strong>Warranty Card No:</strong> {{ $data->warenty_card_no }}</p>
    <p><strong>Product Serial No:</strong> {{ $data->product_sl_no }}</p>
    <p><strong>Expiry Date:</strong> {{ $data->expaire_date }}</p>

    <p>Thank you for choosing us.</p>
</body>
</html>