<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
<link href="{{ asset('bower_components/Font-Awesome/css/all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/navhover.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/navhover.css') }}">
@if(isset($homepage) && $homepage == config('config_hottel.homepage'))
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_all.css') }} ">
@else
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles_rooms.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offers_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offers_responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/single_listing_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/single_listing_responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colorbox.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/comment.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog_responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about_styles.css') }} ">
@endif
