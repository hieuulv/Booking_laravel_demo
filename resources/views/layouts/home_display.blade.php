<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link -->
    @include('layouts.display.top_asset')
    <!-- End Link -->
</head>

<body>

<div class="super_container">

    <!-- Header -->
    @include('layouts.display.header')
    <!-- End Header -->

    <!-- Header -->
    @include('layouts.display.nav_mobie')
    <!-- End Header -->

    <!-- Slide -->
    @if(isset($homepage) && $homepage == 'index')
        @include('layouts.display.slide')
    @endif
    <!-- End Slide -->

    <!-- Content -->
    @yield('content')
    <!-- End Header -->

    <!-- Map -->
    @include('layouts.display.map')
    <!-- End Map -->

    <!-- Footer -->
    @include('layouts.display.footer')
    <!-- End Footer -->

    <!-- Copyright -->
    @include('layouts.display.copyright')
    <!-- End Copyright -->

</div>

    <!-- Link -->
    @include('layouts.display.bottom_asset')
    <!-- End Link -->

</body>
</html>
