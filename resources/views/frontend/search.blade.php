<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty Card Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://source.unsplash.com/1600x900/?technology,abstract') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .overlay {
            background: rgba(255, 255, 255, 0.85);
            min-height: 100vh;
            padding-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(90deg, #17a2b8, #117a8b);
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
        }
        .detail-box {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .detail-box p {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .detail-box span {
            font-weight: bold;
            color: #333;
        }
        .btn-back {
            background: linear-gradient(90deg, #28a745, #218838);
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
        }
        .btn-back:hover {
            background: linear-gradient(90deg, #218838, #1e7e34);
        }
        /* Image Section */
        .image-section {
            background: url('https://source.unsplash.com/800x600/?warranty,certificate') no-repeat center center;
            background-size: cover;
            border-radius: 15px 0 0 15px;
            min-height: 100%;
        }
        /* Footer */
        .footer {
            background: rgba(0, 123, 255, 0.9);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="overlay">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border rounded-4">
                    <div class="row">
                        <!-- Left Side Image -->
                        <div class="col-md-5 image-section ml-2">
                            <img src="image/unplash.jpg" alt="" class="mt-4 rounded" width="470px" height="475px">
                        </div>

                        <!-- Right Side Content -->
                        <div class="col-md-7 p-4">
                            <div class="card-header">Warranty Card Details</div>
                            <div class="card-body ">
                                @if ($warenty !== null)
                                    {{-- @foreach ($warenty as $warentys) --}}
                                        <div class="detail-box mt-4 py-4">
                                            <p><span> Name:</span> {{ $warenty->id }}</p>
                                            <p><span> Name:</span> {{ $warenty->name }}</p>
                                            <p><span> Email:</span> {{ $warenty->email }}</p>
                                            <p><span> Phone:</span> {{ $warenty->phone }}</p>
                                            <p><span> City:</span> {{ $warenty->city }}</p>
                                            <p><span> State:</span> {{ $warenty->state }}</p>
                                            <p><span> Product SL Number:</span> {{ $warenty->product_sl_no }}</p>
                                            <p><span> Purchase From:</span> {{ $warenty->purchase_form }}</p>
                                            <p><span> Warranty Card Number:</span> {{ $warenty->warenty_card_no }}</p>
                                            <p><span> Purchase Date:</span> {{ $warenty->purchase_date }}</p>
                                            <p><span>Expiry Date:</span> {{ $warenty->expaire_date }}</p>
                                        </div>
                                    {{-- @endforeach --}}
                                @else
                                <p class="mt-4 text-danger text-center fw-bold">🚫 No Data Found</p>
                                @endif
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('feedback') }}" class="btn btn-success w-100 p-2  ">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    © 2025 Warranty Card System | All Rights Reserved
</div>

</body>
</html>
