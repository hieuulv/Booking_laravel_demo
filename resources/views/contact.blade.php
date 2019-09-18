@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[3]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[3]['title'] }}</div>
        </div>
    </div>


    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="col-md-12 animate-box fadeInUp animated-fast">
                        <h3>{{ __('Liên hệ với chúng tôi.') }}</h3>
                        <form action="{{ route('contact_admin') }}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="fname">{{ __('Họ và tên') }}</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                           class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="lname">{{ __('Số điện thoại') }}</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                           class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="email">{{ __('Địa chỉ Email') }}</label>
                                    <input type="text" name="email" value="{{ old('email') }}"
                                           class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email">{{ __('Địa chỉ') }}</label>
                                    <input type="text" name="address" value="{{ old('address') }}"
                                           class="form-control @error('address') is-invalid @enderror">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="message">Message</label>
                                    <textarea name="content" cols="30" rows="10"
                                              class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <!-- About - Image -->
                    <div class="about_image">
                        <img src="images/man.png" alt="">
                    </div>

                </div>

                <div class="col-lg-4">

                    <!-- About - Content -->
                    <div class="about_content">
                        <div class="logo_container about_logo">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <img src="images/{{ $settings[0]['image_logo'] }}" alt="">
                                    {{ $settings[0]['text_logo'] }}
                                </a>
                            </div>
                        </div>
                        <p class="about_text">
                            {{ __('Đến với Travelix của chúng tôi, quý khách sẽ được phục vụ tận tình. Đồng hành cùng chúng tôi bạn, bạn sẽ có những chuyến đi đầy trải nghiệm. Với Travelix, việc đặt chỗ ở, khách sạn, nhà riêng...trở nên nhanh chóng và dễ dàng.') }}
                        </p>
                        <ul class="about_social_list">
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">

                    <!-- About Info -->
                    <div class="about_info">
                        <ul class="contact_info_list">
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
                                </div>
                                <div class="contact_info_text">{{ $settings[0]['address'] }}</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
                                </div>
                                <div class="contact_info_text">{{ $settings[0]['phone'] }}</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                </div>
                                <div class="contact_info_text">
                                    <a href="mailto:{{ $settings[0]['email'] }}?Subject=Hello"
                                       target="_top">
                                        {{ $settings[0]['email'] }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
