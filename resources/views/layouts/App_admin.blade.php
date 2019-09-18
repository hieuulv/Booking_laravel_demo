<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ __('Dashboard') }}</title>
    @include('layouts.admin.top_asset')
</head>

<body id="page-top">
<div id="wrapper">

    @include('layouts.admin.sidebar')
    <!-- ---------------EndSidebar------------- -->


    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- ------------------header--------------------- -->
            @include('layouts.admin.header')
            <!-- ----------------end header---------------------- -->

            <!-- --------------content------------------ -->
            @yield('content')
            <!-- --------------end content--------------- -->

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
@include('layouts.admin.bottom_asset')
</body>
</html>
