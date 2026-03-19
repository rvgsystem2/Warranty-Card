<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Warranty Request</title>
</head>
<body>
    <h2>New Warranty Registration Request</h2>

    <p><strong>Name:</strong> {{ $data->name }}</p>
    <p><strong>Email:</strong> {{ $data->email }}</p>
    <p><strong>Phone:</strong> {{ $data->phone }}</p>
    <p><strong>City:</strong> {{ $data->city }}</p>
    <p><strong>State:</strong> {{ $data->state }}</p>
    <p><strong>Product Serial No:</strong> {{ $data->product_sl_no }}</p>
    <p><strong>Purchase From:</strong> {{ $data->purchase_form }}</p>
    <p><strong>Purchase Date:</strong> {{ $data->purchase_date }}</p>
    <p><strong>Warranty Card No:</strong> {{ $data->warenty_card_no }}</p>
    <p><strong>Status:</strong> {{ ucfirst($data->status) }}</p>

    @if($data->document)
        <p>
            <strong>Uploaded File:</strong>
            <a href="{{ asset('storage/' . $data->document) }}" target="_blank">View Uploaded File</a>
        </p>
    @endif
</body>
</html>