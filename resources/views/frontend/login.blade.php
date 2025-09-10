<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6"> <!-- Bigger column size -->

        <div class="card shadow-lg rounded-4 p-5"> <!-- More padding -->

          <h2 class="text-center mb-5 text-primary">SignIn Now!</h2>
         
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

          <form action="{{ route('login.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="mb-4">
              <label for="email" class="form-label fw-bold">Email address</label>
              <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter email..." >
              @error('email')
                <div class="text-danger small">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter password..." >
              @error('password')
                <div class="text-danger small">{{ $message }}</div>
              @enderror
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap 5 Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
