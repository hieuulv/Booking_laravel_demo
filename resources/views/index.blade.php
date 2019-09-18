@extends('layouts.home_display')

@section('content')

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">{{ __('Bài viết nổi bật') }}</h2>
                </div>
            </div>

            <div class="row intro_items">

                <!-- Rooms hot -->

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="button intro_button">
                                <div class="button_bcg"></div>
                                <a href="#">{{ __('xem bài viết') }}</a></div>
                            <div class="intro_center text-center">
                                <p> {{ __('Phòng tập Club One Fitness & Yoga Center nằm trong khu đô thị sầm uất bậc nhất Royal
                                    City.') }} </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="button intro_button">
                                <div class="button_bcg"></div>
                                <a href="#">{{ __('xem bài viết') }}</a></div>
                            <div class="intro_center text-center">
                                <p> {{ __('Phòng tập Club One Fitness & Yoga Center nằm trong khu đô thị sầm uất bậc nhất Royal
                                    City.') }} </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="button intro_button">
                                <div class="button_bcg"></div>
                                <a href="#">{{ __('xem bài viết') }}</a></div>
                            <div class="intro_center text-center">
                                <p> {{ __('Phòng tập Club One Fitness & Yoga Center nằm trong khu đô thị sầm uất bậc nhất Royal
                                    City.') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Rooms hot -->


            </div>
        </div>
    </div>

    <!-- service hotel -->

    <div class="container">

        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">{{ __('Dịch vụ của khách sạn') }}</h2>
            </div>
        </div>
        <div class="row intro_items">

            <div class="col-lg-4 intro_col" style="color: #000000">
                <h3><i class="fas fa-headset" aria-hidden="true"></i> {{ __('Lễ tân phục vụ 24/24') }}  </h3>
                <p>
                    {{ __('Lễ tân chính là bộ mặt, là đại sứ của khách sạn. Ấn tượng của khách với lễ tân không tốt đẹp thì toàn
                    bộ kỳ nghỉ sẽ không suôn sẻ.') }}
                </p>
            </div>

            <div class="col-lg-4 intro_col" style="color: #000000">
                <h3><i class="fas fa-person-booth" aria-hidden="true"></i> {{ __('Dịch vụ phòng') }}</h3>
                <p>
                    {{ __('Có phòng ngủ và 1 phòng khách tách riêng. Đồ dùng và trang thiết bị giống phòng Deluxe.') }}
                </p>
            </div>

            <div class="col-lg-4 intro_col" style="color: #000000">
                <h3><i class="fa fa-tv" aria-hidden="true"></i> {{ __( 'Tivi màn hình phẳng') }}</h3>
                <p>
                    {{ __('Đắm chìm vào từng khung hình sống động như thật. Tận hưởng trọn vẹn mọi nội dung giải trí.') }}
                </p>
            </div>

            <div class="col-lg-4 intro_col" style="color: #000000">
                <h3><i class="fa fa-dumbbell" aria-hidden="true"></i> {{ __('Phòng Gym') }}</h3>
                <p>
                    {{ __('Phòng tập Club One Fitness & Yoga Center nằm trong khu đô thị sầm uất bậc nhất Royal City.') }}
                </p>
            </div>

            <div class="col-lg-4 intro_col" style="color: #000000">
                <h3><i class="fa fa-car" aria-hidden="true"></i> {{ __('Bãi đậu xe miễn phí') }} </h3>
                <p>
                    {{ __('Sát việc thực hiện quy định về giá trông giữ phương tiện xe đạp, xe máy, ôtô trên địa bàn thành
                    phố.') }}
                </p>
            </div>

            <div class="col-lg-4 intro_col" style="color: #000000">
                <h3><i class="fas fa-wifi" aria-hidden="true"></i> {{ __('Wifi miễn phí') }} </h3>
                <p>
                    {{ __('Những điểm phát sóng wifi miễn phí, thỏa thuận hợp tác về công nghệ thông tin và viễn thông tại Quảng
                    ..') }}
                </p>
            </div>
        </div>
    </div>

    <!-- end service hotel -->

    </div>

    </div>

    <!-- Offers -->

    <div class="offers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title">{{ __('các phòng thông dụng') }}</h2>
                </div>
            </div>
            <div class="row offers_items">

            @foreach($image_array_one as $room_one)
                <!-- Offers Item -->
                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                                        <div class="offers_image_background">
                                            <img class="img_one"
                                                 src="/upload_image/{{ $room_one['images']['images'] }}" style="width: 255px; height: 256px">
                                        </div>
                                        <div class="offer_name">
                                            <a href="{{ route('detail', $room_one['id']) }}">{!! $room_one['name'] !!}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
                                        <div class="offers_price">{!! $room_one['price'] !!}
                                            <span>{{ __('/Đêm') }}</span>
                                        </div>
                                        <p class="offers_text">
                                            {!! $room_one['title'] !!}
                                        </p>
                                        <div class="offers_link">
                                            <a href="{{ route('detail', $room_one['id']) }}">{{ __('Xem thêm') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Testimonials -->


    <div class="cta">

        <div class="cta_background" style="background-image:url(images/cmen.jpeg)"></div>

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- CTA Slider -->

                    <div class="cta_slider_container">
                        <div class="owl-carousel owl-theme cta_slider">

                            @foreach($comments as $comment)
                                <div class="owl-item cta_item text-center cment">
                                    <div class="cta_title">{!! $comment['email'] !!}</div>
                                    <p class="cta_text"> {!! $comment['content'] !!} </p>
                                    <div class="button cta_button">
                                        <div class="button_bcg"></div>
                                        <a href="{!! $comment['room_url'] !!}">{{ __('Xem đánh giá') }}
                                            <span></span><span></span><span></span></a>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- CTA Slider Nav - Prev -->
                        <div class="cta_slider_nav cta_slider_prev">
                            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                                 xml:space="preserve">
						<defs>
                            <linearGradient id='cta_grad_prev'>
                                <stop offset='0%' stop-color='#fa9e1b'/>
                                <stop offset='100%' stop-color='#8d4fff'/>
                            </linearGradient>
                        </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
						M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
						C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
						11.042,18.219 "/>
					</svg>
                        </div>

                        <!-- CTA Slider Nav - Next -->
                        <div class="cta_slider_nav cta_slider_next">
                            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                                 xml:space="preserve">
					<defs>
                        <linearGradient id='cta_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
					17.046,15.554 "/>
				</svg>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>



    <div class="trending">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title">{{ __('Phòng được lựa chọn nhiều nhất') }}</h2>
                </div>
            </div>
            <div class="row trending_container">

            @foreach($image_array_two as $room_two)
                <!-- Trending Item -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="trending_item clearfix">
                            <div class="trending_image">
                                <img class="img_two" src="/upload_image/{{ $room_two['images']['images'] }}">
                            </div>
                            <div class="trending_content">
                                <div class="trending_title">
                                    <a href="{{ route('detail', $room_two['id']) }}">{!! $room_two['name'] !!}</a>
                                </div>
                                <div class="trending_price">{{ __('Chỉ từ') }} {!! $room_two['price'] !!} {{ __('VNĐ') }}</div>
                                <div class="trending_location">{!! $room_two['address'] !!}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
