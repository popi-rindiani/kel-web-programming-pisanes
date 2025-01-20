<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Tabler Core CSS -->
    <link href="{{ asset('tabler/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/css/tabler-flags.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/css/tabler-payments.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/css/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/css/demo.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="page">
        <!-- Sidebar -->
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('tabler/assets/logo.svg') }}" alt="Logo" class="navbar-brand-image">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-dashboard"></i>
                            </span>
                            <span class="nav-link-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- Tambahkan menu lainnya -->
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-xl">
                <h1>@yield('page-title', 'Dashboard')</h1>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="row text-center align-items-center">
                        <div class="col">
                            <p>&copy; 2025 Your Company. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Tabler Core JS -->
    <script src="{{ asset('tabler/js/tabler.min.js') }}"></script>
</body>
</html>
