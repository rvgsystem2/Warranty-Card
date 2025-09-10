@extends('backendlayouts.main')

@section('content')

<div class="container">
    <div class="row mx-4">
        <h1 class="text-dark text-center mt-4 ">User Inquiry Details</h1>
            <div class="d-flex justify-content-end">
                <form action="{{route('userregister.index')}}" method="GET" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" value="{{request('search')}}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">search</button>
                        </div>
                    </div>
                </form>
            </div>
        <div class="justify-content-center">
            <table class="table table-bordred table-hover table-responsive table-striped border-4 mx-4 shadow">
                <thead class="table-info">
                    <tr>
                        <th>Sn.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($userregister->count() > 0)
                        @foreach ($userregister as $userregisters )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$userregisters->name}}</td>
                            <td>{{$userregisters->email}}</td>
                            <td>{{$userregisters->mobile}}</td>
                            <td>{{$userregisters->city}}r</td>
                            <td>{{$userregisters->state}}</td>
                            {{-- <td>{{$userregisters->address}}</td>
                            <td>{{ $userregisters->dealer_and_distributor }}</td> --}}
                            <td>
                                <a href="{{route('userregister.delete',['id'=>$userregisters->id])}}" onclick="return confirm('Are you sure delete this item...!')" class="btn btn-danger btn-sm">Delete</a>
                                <a href="{{route('userregister.show',['id'=>$userregisters->id])}}"  class="btn btn-info btn-sm">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr><th class="text-danger text-center" colspan="9">Record Not found...!</th></tr>
                    @endif
                </tbody>
            </table>
            <div class="mx-4 mt-3">
                {{$userregister->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection