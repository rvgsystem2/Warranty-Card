@extends('backendlayouts.main')
@section('content')

      <div class="container">
            <div class="row justify-content-center">
                  @if (session('success'))
                        <script>
                        Swal.fire({
                              icon: 'success',
                              title: 'Success!',
                              text: "{{ session('success') }}",
                              timer: 5000,
                              showConfirmButton: false
                        });
                        </script>
                  @endif

                  @if(session('error'))
                        <script>
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ session('error') }}',
                        timer: 3000,
                        showConfirmButton: false
                        });
                        </script>
                  @endif
                  <div class="col-md-6 rounded">
                        <div class="card mt-5 "> 
                              <div class="card-header bg-warning"><h3 class="text-center mt-2">Change Password</h3></div>
                              
                              <form action="{{route('changepassword.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                          <div class="form-group mt-2 mb-3">
                                                <label for=""><b>Old Password*</b></label>
                                                <input type="text" name="oldpassword" class="form-control" placeholder="oldpassword....">
                                                @error('oldpassword')
                                                      <span class="text-danger">{{$message}}</span>
                                                @enderror
                                          </div>
                                          <div class="form-group mt-2 mb-3">
                                                <label for=""><b>New Password*</b></label>
                                                <input type="text" name="newpassword" class="form-control" placeholder="newpassword....">
                                                @error('newpassword')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                          </div>
                                          <div class="form-group mt-2 mb-3">
                                                <label for=""><b>Confirm New Password*</b></label>
                                                <input type="text" name="newconfirmpassword" class="form-control" placeholder="newconfirmpassword....">
                                                @error('newconfirmpassword')
                                                  <span class="text-danger">{{$message}}</span>
                                                @enderror
                                          </div>
                                          <div class="mb-5">
                                                <button type="submit" class="btn btn-success btn-sm w-100 py-3 mt-3 ">Change</button>
                                          </div>
                                    </div>
                             </form>
                        </div>
                  </div>
            </div>
      </div>
@endsection