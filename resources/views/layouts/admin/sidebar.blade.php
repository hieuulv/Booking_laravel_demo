<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{__('Travelix')}}</div>
    </a>

    <hr class="sidebar-divider my-0">
    <!-- --------------------------------------------------EndSidebar------------------------------------------------- -->

    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('Dashboard')}}</span>
        </a>
    </li>

    <hr class="sidebar-divider">

        {{-----------------category-----------------}}
        {{--<div class="sidebar-heading">--}}
            {{--{{ __('CATEGORIES') }}--}}
        {{--</div>--}}

        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('index_category') }}">--}}
                {{--<i class="fas fa-fw fa-table"></i>--}}
                {{--<span>{{ __('Categories') }}</span>--}}
            {{--</a>--}}
        {{--</li>--}}

        {{--<hr class="sidebar-divider d-none d-md-block">--}}
        {{-----------------end category-----------------}}

    {{-----------------Rooms-----------------}}
    <div class="sidebar-heading">
        {{ __('ROOMS') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_rooms') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>{{ __('Rooms') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end Rooms-----------------}}

    {{-----------------Booking-----------------}}
    <div class="sidebar-heading">
        {{ __('Booking') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_booking') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>{{ __('Booking') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end Booking-----------------}}

    {{-----------------contact-----------------}}
    <div class="sidebar-heading">
        {{ __('Comment') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_contact') }}">
            <i class="fas fa-fw fa-inbox"></i>
            <span>{{ __('Contact') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end contact-----------------}}

    {{-----------------commnet-----------------}}
    <div class="sidebar-heading">
        {{ __('Comment') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_comment') }}">
            <i class="fas fa-fw  fa-comments"></i>
            <span>{{ __('Comment') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end comment-----------------}}

    {{-----------------user-----------------}}
    <div class="sidebar-heading">
        {{ __('Users') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_user') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Users') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end user-----------------}}

    {{----------------- Slide-----------------}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-sliders-h"></i>
            <span>Slide</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ route('slide_home') }}">{{ __('Slide Home') }}</a>
                <a class="collapse-item" href="{{ route('slide_subpage') }}">{{ __('Slide SubPage') }}</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end Slide-----------------}}

    {{-----------------Setting-----------------}}
    <div class="sidebar-heading">
        {{ __('Setting') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_setting') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>{{ __('Setting') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end seting-----------------}}

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
