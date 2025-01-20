<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.navbar')
    <main class="container mt-4">
        @yield('content')
    </main>
    <footer class="text-center mt-4">
        <p>&copy; 2025 Voting App</p>
    </footer>
</body>
</html>
