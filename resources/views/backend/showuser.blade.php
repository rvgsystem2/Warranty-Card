@extends('backendlayouts.main')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border mt-5">
                <div class="card-header text-center  bg-info">
                    <h3>User Inqueiry Details</h3>
                </div>
                <div class="card-body">
                    @if ($userregister !== null)
                        <div class="mb-2"><strong>Name:</strong> {{ $userregister->name }}</div>
                        <div class="mb-2"><strong>Email:</strong> {{ $userregister->email }}</div>
                        <div class="mb-2"><strong>Phone:</strong> {{ $userregister->mobile }}</div>
                        <div class="mb-2"><strong>City:</strong> {{ $userregister->city }}</div>
                        <div class="mb-2"><strong>State:</strong> {{ $userregister->state }}</div>
                        <div class="mb-2"><strong>Address:</strong> {{ $userregister->address }}</div>
                        <div class="mb-2"><strong>Dealer & Distributor:</strong> {{ $userregister->dealer_and_distributor }}</div>
                    @else
                        <p class="text-center">No Data Found</p>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('userregister.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
