<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Warranty Rejected</title>
</head>
<body>
    <h2>Your Warranty Request Has Been Rejected</h2>

    <p>Dear {{ $data->name }},</p>

    <p>We are sorry to inform you that your warranty request has been rejected after verification.</p>

    @if($data->admin_remark)
        <p><strong>Reason:</strong> {{ $data->admin_remark }}</p>
    @endif

    <p>If needed, you may contact support for more details.</p>
</body>
</html>