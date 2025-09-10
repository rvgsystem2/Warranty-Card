@extends('backendlayouts.main')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border  mt-5">
                <div class="card-header text-center bg-info">
                    <h3>Warrenty Card Details</h3>
                </div>
                <div class="card-body">
                    @if ($show !== null)
                        {{-- <div class="mb-2"><strong>Service Type:</strong> {{ $show->service_type }}</div>
                        <div class="mb-2"><strong>Service :</strong> {{ $show->service }}</div> --}}
                        <div class="mb-2"><strong>Name:</strong> {{ $show->first_name }}</div>
                        {{-- <div class="mb-2"><strong>Last Name:</strong> {{ $show->last_name }}</div> --}}
                        <div class="mb-2"><strong>Email:</strong> {{ $show->email }}</div>
                        <div class="mb-2"><strong>Phone:</strong> {{ $show->phone }}</div>
                        <div class="mb-2"><strong>City:</strong> {{ $show->city }}</div>
                        <div class="mb-2"><strong>State:</strong> {{ $show->state }}</div>
                        <div class="mb-2"><strong>Product SL Number:</strong> {{ $show->product_sl_no }}</div>
                        <div class="mb-2"><strong>Purchase Form:</strong> {{ $show->purchase_form }}</div>
                        <div class="mb-2"><strong>Status:</strong> {{ $show->status }}</div>
                        <div class="mb-2"><strong>Warentycard Number:</strong> {{ $show->warenty_card_no }}</div>
                        <div class="mb-2"><strong>Purchase Date:</strong> {{ $show->purchase_date }}</div>
                        <div class="mb-2"><strong>Expaire Date:</strong> {{ $show->expaire_date }}</div>
                    @else
                        <p class="text-center text-danger">No Data Found</p>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('warentycard.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
