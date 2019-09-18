@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[4]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title"> {{ __('rooms detail') }}</div>
        </div>
    </div>



    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="single_listing">

                    <!-- Hotel Info -->

                    <div class="hotel_info">

                        <!-- Title -->
                        <div class="hotel_title_container d-flex flex-lg-row flex-column">
                            <div class="hotel_title_content">
                                <h1 class="hotel_title">{!! $rooms['name'] !!}</h1>
                                <div class="hotel_location"><i class="fas fa-map-marker-alt"></i>
                                    {!! $rooms['address'] !!}
                                </div>
                            </div>
                            <div class="hotel_title_button ml-lg-auto text-lg-right">
                                <div class="button book_button trans_200">
                                    <a href="{{ route('booking', $rooms['id']) }}">{{ __('Đặt ngay') }}</a>
                                </div>
                            </div>
                        </div>

                        <!-- Listing Image -->
                        <div class="hotel_image">
                            @foreach( $image_array['images'] as $key => $value )
                                @if($key == 0)
                                    <img src="/upload_image/{{ $value['images'] }}" alt="">
                                @endif
                            @endforeach
                        </div>

                        <!-- Hotel Gallery -->

                        <div class="hotel_gallery">
                            <div class="hotel_slider_container">
                                <div class="owl-carousel owl-theme hotel_slider">
                                @foreach( $image_array['images'] as $key => $image_owl)
                                    @if($key != 0)
                                        <!-- Hotel Gallery Slider Item -->
                                            <div class="owl-item">
                                                <a class="colorbox cboxElement"
                                                   href="/upload_image/{{ $image_owl['images'] }}">
                                                    <img src="/upload_image/{{ $image_owl['images'] }}">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <!-- Hotel Slider Nav - Prev -->
                                <div class="hotel_slider_nav hotel_slider_prev">
                                    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="28px" height="33px" viewBox="0 0 28 33"
                                         enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_prev'>
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

                                <!-- Hotel Slider Nav - Next -->
                                <div class="hotel_slider_nav hotel_slider_next">
                                    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="28px" height="33px" viewBox="0 0 28 33"
                                         enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_next'>
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


                        <div class="hotel_info_text">

                            <div class="review_rooms">
                                {{ __('Over Review') }}
                            </div>

                            <div class="room_extra ">
                                {!! $rooms['rooms_detail'] !!}
                            </div>

                            <div class="lish_review">
                                <ul>
                                    <li>
                                        {{ __('Giá: ') }}
                                        <lable class="price"> {!! $rooms['price'] !!}</lable>
                                        <span>{{ __('/đêm') }}</span>
                                    </li>

                                    <li>
                                        {{ __('Loại giường: ') }}
                                        <lable class="bed_type"> {!! $rooms['bed_type'] !!}</lable>
                                    </li>

                                    <li>
                                        {{ __('Số lượng: ') }}
                                        <label class="capacity"> {!! $rooms['copacity_room'] !!}</label>
                                    </li>

                                    <li>
                                        {{ __('Tiện nghi: ') }}
                                        <label class="vacilities"> {!! $rooms['facilities_room'] !!}</label>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <!-- Hotel Info Tags -->

                        <div class="hotel_info_tags">
                            <ul class="hotel_icons_list">
                                <li class="hotel_icons_item"><img src="{{ asset('images/post.png') }}" alt=""></li>
                                <li class="hotel_icons_item"><img src="{{ asset('images/compass.png') }}" alt=""></li>
                                <li class="hotel_icons_item"><img src="{{ asset('images/bicycle.png') }}" alt=""></li>
                                <li class="hotel_icons_item"><img src="{{ asset('images/sailboat.png') }}" alt=""></li>
                            </ul>
                        </div>

                    </div>


                    <!-- Rooms -->
                    <div class="rooms">

                        <!-- Room -->
                        <div class="room">

                            <div class="related_room">
                                {{ __('Các phòng liên quan.') }}
                            </div>
                            <!-- Room -->
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="room_image">
                                        <img src="{{ asset('images/room_2.jpg') }}">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="room_content">
                                        <div class="room_title">{{ __('phong 2') }}</div>
                                        <div class="room_price">{{ __('99') }}{{ __('/night') }}</div>
                                        <div class="room_extra">{{ __('Recently renovated 950 sq ft private walk out basement apartment with comfortable king bed, 1 bath, kitchen with fridge & stove,& living room with 55" smart TV with cable and netflix.') }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-lg-right">
                                    <div class="room_button">
                                        <div class="button book_button trans_200"><a
                                                    href="#">{{ __('xem them') }}<span></span><span></span><span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Reviews -->

                    <div class="reviews">
                        <div class="reviews_title">{{ __('reviews') }}</div>
                        @if(Auth::check() && Auth::user()->role == "member")
                            <p class="name_comment">{{ __('Bạn đang đăng nhập bằng tài khoản') }} <a
                                        href="{{ route('profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a> {{ __('!!') }}
                            </p>
                        @endif
                        <div class="reviews_container">

                        @foreach($comment_id as $comment)
                            <!-- Review -->
                                <div class="review">
                                    <div class="row">
                                        @if(Auth::check() && Auth::user()->role == "member")
                                            <div class="col-lg-1">
                                                <div class="review_image">
                                                    <img src="/upload_image/{{ Auth::user()->images }}">
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-lg-1">
                                                <div class="review_image">
                                                    <img src="{{ asset('upload_image/default.jpg') }}">
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-lg-11">
                                            @if(Auth::check() && Auth::user()->role == "member")
                                                <div class="review_content">
                                                    <div class="review_title">{{ Auth::user()->name }}</div>

                                                    <div class="review_text">
                                                        <p>{!! $comment['content'] !!}</p>
                                                    </div>

                                                    <div class="review_name">{{ Auth::user()->email }}</div>

                                                    <div class="review_date">{!! $comment['created_at'] !!}</div>
                                                </div>

                                            @else
                                                <div class="review_content">
                                                    <div class="review_title">{!! $comment['name'] !!}</div>

                                                    <div class="review_text">
                                                        <p>{!! $comment['content'] !!}</p>
                                                    </div>

                                                    <div class="review_name">{!! $comment['email'] !!}</div>

                                                    <div class="review_date">{!! $comment['created_at'] !!}</div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>


                        {{--commnet--}}
                        <section class="commnet">
                            @if(Auth::check() && Auth::user()->role == "member")
                                <form action="{{ route('comment_login') }}" method="post" class="contact-form row">
                                    @csrf

                                    <input type="hidden" name="room_id" value="{{ $rooms['id'] }}">
                                    <input type="hidden" name="room_url" value="{{ $rooms['id'] }}">

                                    <div class="form-group col-lg-12">
                                        <label for="message">{{ __('Message') }}</label>
                                        <input id="message" class="form-control @error('content') is-invalid @enderror" type="text" name="content" >
                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input class="submit-btn" type="submit" value="Submit">
                                    </div>
                                </form>
                            @else
                                <form action="{{route('comment_notlogin')}}" method="post" class="contact-form row">
                                    @csrf

                                    <input type="hidden" name="room_id" value="{{ $rooms['id'] }}">
                                    <input type="hidden" name="room_url" value="{{ $rooms['id'] }}">

                                    <div class="form-group col-lg-6">
                                        <label>{{ __('Name:') }}</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label>{{ __('E-mail:') }}</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>{{ __('Message:') }}</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" rows="5" name="content">{{ old('content') }}</textarea>
                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-field col-lg-12">
                                        <input class="submit-btn" type="submit" value="Submit">
                                    </div>

                                </form>


                            @endif
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
