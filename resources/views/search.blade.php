@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[1]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[1]['title'] }}</div>
        </div>
    </div>

    <div class="offers">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <!-- Offers Grid -->
                    <div class="offers_grid">
                        <p class="count_text">{{ __('Tìm thấy') }} <label class="count_text1">{{ count($room_search) }}</label> {{ __('phòng') }}</p>
                        <br>
                    @foreach( $room_search as $room)
                        <!-- Offers Item -->
                            <div class="offers_item rating_4">
                                <div class="row">
                                    <div class="col-lg-1 temp_col"></div>
                                    <div class="col-lg-3 col-1680-4">
                                        <div class="offers_image_container">
                                            <div class="offers_image_background">
                                                <img src="/upload_image/{{ $room['images']['images'] }}">
                                            </div>
                                            <div class="offer_name">
                                                <a href="{{ route('detail', $room['id']) }}">{!! $room['name'] !!}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="offers_content">
                                            <div class="offers_price">{!! $room['price'] !!}
                                                <span>{{ __('/đêm') }}</span>
                                            </div>
                                            <p class="offers_text">
                                                {!! $room['title'] !!}
                                            </p>

                                            <ul class="lish_detail">
                                                <li>
                                                    <label class="detail_rooms_lish">
                                                        {{ __('Loại giường:') }} {!! $room['bed_type'] !!}
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="detail_rooms_lish">
                                                        {{ __('Số lượng:') }} {!! $room['copacity_room'] !!}
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="detail_rooms_lish">
                                                        {{ __('Tiện nghi:') }} {!! $room['facilities_room'] !!}
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="offers_icons">
                                                <ul class="offers_icons_list">
                                                    <li class="offers_icons_item">
                                                        <img src="{{ asset('images/post.png') }}" alt="">
                                                    </li>
                                                    <li class="offers_icons_item">
                                                        <img src="{{ asset('images/compass.png') }}" alt="">
                                                    </li>
                                                    <li class="offers_icons_item">
                                                        <img src="{{ asset('images/bicycle.png') }}" alt="">
                                                    </li>
                                                    <li class="offers_icons_item">
                                                        <img src="{{ asset('images/sailboat.png') }}" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="button book_button ">
                                                <a href="{{ route('detail', $room['id']) }}">{{ __('Xem them') }}
                                                    <span></span><span></span><span></span></a>
                                            </div>
                                            <div class="offer_reviews">
                                                <div class="button home_slider_button">
                                                    <div class="button_bcg"></div>
                                                    <a href="{{ route('booking', $room['id']) }}">{{ __('đặt ngay') }}</a>
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

            <div class="blog_navigation text-center">
                {{ $room_search->links() }}
            </div>
        </div>
    </div>


@endsection
