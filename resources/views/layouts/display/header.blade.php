<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="phone">{{ $settings[0]['phone'] }}</div>
                    <div class="social">
                        <ul class="social_list">
                            <li class="social_list_item"><a href="#"><i class="fab fa-pinterest"
                                                                        aria-hidden="true"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-facebook-f"
                                                                        aria-hidden="true"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-twitter"
                                                                        aria-hidden="true"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-instagram"
                                                                        aria-hidden="true"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-behance"
                                                                        aria-hidden="true"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-linkedin"
                                                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>


                    @if (Route::has('login'))

                        <div class="user_box ml-auto">
                            @auth
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">

                                            <a id="navbarDropdown" style="color: #FFFFFF"
                                               class="nav-link dropdown-toggle" href="#"
                                               role="button" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class=""></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                 aria-labelledby="userDropdown">

                                                @if (Auth::check() && Auth::user()->role == "admin")
                                                    <a class="dropdown-item" href="{{ route('admin') }}">
                                                        <i class="fas fa-user-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        {{ __('Dashboard') }}
                                                    </a>
                                                @else
                                                    <a class="dropdown-item"
                                                       href="{{ route('profile', Auth::user()->id) }}">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        {{ __('Your Profile') }}
                                                    </a>
                                                @endif

                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                   data-toggle="modal" data-target="#logoutModal">
                                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </li>

                                    @endguest
                                </ul>
                            @else
                                <div class="user_box_login user_box_link">
                                    <a href="{{ route('login') }}">{{ __('login') }}
                                        <i class="fas fa-sign-in-alt"></i>
                                    </a>
                                </div>
                                @if (Route::has('register'))
                                    <div class="user_box_register user_box_link">
                                        <a href="{{ route('register') }}">{{ __('register') }}</a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                    <div class="logo_container">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="images/{{ $settings[0]['image_logo'] }}" alt="">
                                {{ $settings[0]['text_logo'] }}
                            </a>
                        </div>
                    </div>
                    <div class="main_nav_container ml-auto">
                        <ul class="main_nav_list">

                            <li class="main_nav_item">
                                <a href="{{ route('index') }}">
                                    {{ __('home') }}
                                </a>
                            </li>

                            <li class="main_nav_item">
                                <a href="{{ route('about') }}">
                                    {{ __('about us') }}
                                </a>
                            </li>

                            <li class="main_nav_item dropdown">
                                <a class="dropbtn" href="{{ route('rooms') }}">{{ __('Rooms') }}</a>
                                {{--<ul class="dropdown-content">--}}
                                    {{--<li>--}}
                                        {{--<a href="">--}}
                                            {{--{{ __('Thông Thường') }}--}}
                                        {{--</a>--}}
                                    {{--</li>--}}

                                    {{--<li>--}}
                                        {{--<a href="">--}}
                                            {{--{{ __('Resort') }}--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </li>

                            <li class="main_nav_item">
                                <a href="{{ route('post') }}">
                                    {{ __('news') }}
                                </a>
                            </li>

                            <li class="main_nav_item">
                                <a href="{{ route('contact') }}">
                                    {{ __('contact') }}
                                </a>
                            </li>


                            @if (Auth::check() && Auth::user()->role == "member")
                                <li class="main_nav_item">
                                    <a href="{{ route('myroom') }}">
                                        {{ __('my room') }}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="content_search ml-lg-0 ml-auto">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                             xml:space="preserve">
								<g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
                                        </g>
                                    </g>
                                </g>
							</svg>
                    </div>

                    <form id="search_form" action="{{ route('search') }}" class="search_form bez_1">
                        {{--@csrf--}}
                        <input type="search" name="key"  class="search_content_input bez_1">
                    </form>

                    <div class="hamburger">
                        <i class="fa fa-bars trans_200"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>
