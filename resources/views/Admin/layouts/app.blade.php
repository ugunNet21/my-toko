<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Home')</title>
    <!-- Favicon -->
    <link href="{{ asset('Admin/assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('Admin/assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('Admin/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('Admin/assets/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body class="">
    <!--Navbar brand-->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        @include('Admin.partials.navbrand')
    </nav>

    @yield('content')

    <div class="main-content">
        <!-- Navbar -->
        @include('Admin.partials.navbar')
        <!-- End Navbar -->

        <!-- Header -->
        @include('Admin.partials.header')

        <!--Home statistics-->
        <div class="container-fluid mt--7">
            @include('Admin.partials.chart')

            <!-- Footer -->
            @include('Admin.partials.footer')
        </div>
    </div>

    @include('Admin.partials.scripts')
</body>

</html>
