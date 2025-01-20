
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{asset('tabler/dist/css/tabler.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/tabler-flags.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/tabler-payments.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/tabler-vendors.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/demo.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{asset('assets/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }

      .custom-sidebar {
        background-color: #000000; /* Warna hitam dominan */
        color: #ff8100; /* Teks berwarna putih */
        width: 420px; /* Ukuran sidebar yang lebih besar */
        font-family: 'Arial', sans-serif;
        font-size: 15px; /* Teks yang lebih besar */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
      }

      .custom-sidebar .navbar-brand {
        display: flex;
        align-items: center;
        padding: 15px;
      }

      .custom-sidebar .navbar-brand img {
        width: 35px;
        margin-right: 20px;
      }

      .custom-sidebar .navbar-brand a {
        color: #ff8100; /* Warna oranye */
        font-size: 20px;
        text-decoration: none;
      }

      .custom-sidebar .nav-link {
        display: flex;
        align-items: center;
        padding: 12px 20px;
        color: #fff;
        border-radius: 5px;
        transition: all 0.3s;
      }

      .custom-sidebar .nav-link:hover {
        background-color: #000000; /* Warna oranye */
        color: #fff;
      }

      .custom-sidebar .nav-link-icon {
        margin-right: 10px;
      }

      .custom-sidebar .nav-link-title {
        color: #ffffff
      }

      .custom-sidebar .nav-item .dropdown-menu {
        background-color: #333; /* Sub-menu dengan warna gelap */
      }

      .custom-sidebar .nav-item .dropdown-item {
        color: #fff;
      }

      .custom-sidebar .nav-item .dropdown-item:hover {
        background-color: #ffffff; /* Sub-menu hover oranye */
        color: #fff;
      }

    </style>
  </head>
  <body >
    <script src="{{asset('tabler/dist/js/demo-theme.min.js?1668287865')}}"></script>
    <div class="page">
      <!-- Sidebar -->
     @include('layouts.sidebar')
      <!-- Navbar -->
      @include('layouts.header')
      <div class="page-wrapper">
        @yield('content')
      @include('layouts.footer')
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{asset('tabler/dist/libs/apexcharts/dist/apexcharts.min.js?1668287865')}}" defer></script>
    <script src="{{asset('tabler/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1668287865')}}" defer></script>
    <script src="{{asset('tabler/dist/libs/jsvectormap/dist/maps/world.js?1668287865')}}" defer></script>
    <script src="{{asset('tabler/dist/libs/jsvectormap/dist/maps/world-merc.js?1668287865')}}" defer></script>
    <!-- Tabler Core -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/select2/js/select2.min.js') }}"></script>
    <script src="{{asset('tabler/dist/js/tabler.min.js?1668287865')}}" defer></script>
    <script src="{{asset('tabler/dist/js/demo.min.js?1668287865')}}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/lib/jquery.mask.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('mysript')
  </body>
</html>



