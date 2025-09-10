@extends('backendlayouts.main')

@section('content')

<div class="container">
    <div class="row mx-4">
        <div class="justify-content-center mt-4">
                <h1 class="text-dark text-center">Complain Details</h1>
                <div class="d-flex justify-content-end">
                    <form action="{{route('complain.index')}}"  method="GET" class="mb-4">
                        <div class="input-group">
                                <input type="text" name="search" class="form-control" value="{{request('search')}}" >
                                <div  class="input-group-append">
                                    <button type="submit"class="btn btn-primary">search</button>
                                </div>
                        </div>
                    </form>
                </div>
            <table class="table table-bordered table-striped table-hover mt-4 mx-4 table-responsive shadow">
                <thead class="table-info">
                    <tr>
                        <th>SR.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Complain message</th>
                        <th>Warenty Card No</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($complain->count() > 0)
                        @foreach ($complain as $complains)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{$complains->name}}</td>
                            <td>{{$complains->email}}</td>
                            <td>{{$complains->mobile}}</td>
                            <td>{{$complains->complain_message}}</td>
                            <td>{{$complains->warenty_card_no}}</td>
                            <td><img src="{{asset('storage/'.$complains->image)}}" alt="missing image" class="img-thumbnail" width="50px" height="35px"></td>
                            <td>
                                <a href="{{route('complain.dalete',['id'=>$complains->id])}}"><button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this item...!')">delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                            <tr>
                                <th class="text-danger text-center" colspan="8">Record Not found....!</th>
                            </tr>         
                   
                    @endif
                </tbody>
            </table>
            <div class="mx-4 mb-4">
                {{$complain->links('pagination::bootstrap-5')}}
            </div>

        </div>
    </div>
</div>

@endsection


