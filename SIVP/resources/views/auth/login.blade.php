<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Login</title>
  <!-- CSS files -->
  <link href="{{ asset('tabler/dist/css/tabler.min.css?1668287865') }}" rel="stylesheet"/>
  <link href="{{ asset('tabler/dist/css/tabler-flags.min.css?1668287865') }}" rel="stylesheet"/>
  <link href="{{ asset('tabler/dist/css/tabler-payments.min.css?1668287865') }}" rel="stylesheet"/>
  <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css?1668287865') }}" rel="stylesheet"/>
  <link href="{{ asset('tabler/dist/css/demo.min.css?1668287865') }}" rel="stylesheet"/>
  <style>
    body {
      background-image: url('{{ asset('tabler/static/bgputih.jpg') }}');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container-normal {
      max-width: 400px;
      background: rgba(255, 255, 255, 0.9);
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
      width: 100%;
      margin-top: 1rem;
    }
    .form-control {
      border: 1px solid #ced4da;
    }
  </style>
</head>
<body>
<div class="container container-normal py-4">
  <div class="text-center mb-4">
    <a href="#" class="navbar-brand">
      {{-- <img src="{{ asset('tabler/static/esc10.png') }}" height="36" alt="Logo"> --}}
      <strong>Votingapps</strong>
    </a>
  </div>
  <div class="card card-md">
    <div class="card-body">
      <h2 class="h2 text-center mb-4">Login to Your Account</h2>
      @if (Session::get('warning'))
        <div class="alert alert-warning">
          <p>{{ Session::get('warning') }}</p>
        </div>
      @endif
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('tabler/dist/js/tabler.min.js?1668287865') }}" defer></script>
<script src="{{ asset('tabler/dist/js/demo.min.js?1668287865') }}" defer></script>
</body>
</html>
