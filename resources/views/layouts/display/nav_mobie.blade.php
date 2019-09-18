<div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <div class="logo menu_logo"><a href="{{ route('index') }}"><img src="images/logo.png" alt=""></a></div>
        <ul>
            <li class="menu_item"><a href="">{{ __('home') }}</a></li>
            <li class="menu_item"><a href="">{{ __('about us') }}</a></li>
            <li class="menu_item"><a href="">{{ __('offers') }}</a></li>
            <li class="menu_item"><a href="">{{ __('news') }}</a></li>
            <li class="menu_item"><a href="{{ route('contact') }}">{{ __('contact') }}</a></li>
        </ul>
    </div>
</div>
