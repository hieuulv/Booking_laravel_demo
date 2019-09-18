@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[0]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[0]['title'] }}</div>
        </div>
    </div>

    <div class="intro_right intro">
        <div class="container">
            <div class="row row-xl-eq-height">

                <div class="col-xl-6">
                    <div class="intro_image">
                        <div class="background_image intro_image_background a1" style="
    background-image: url(images/intro_1.jpg);">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 intro_right_col">
                    <div class="intro_right_content">
                        <div class="section_title_container text-center">
                            <div class="section_title">
                                <h1>{{ __('Khách sạn bãi biển - Hơn một kỳ nghỉ') }}</h1>
                            </div>
                            <div class="section_text">
                                {{ __('Tọa lạc ngay giữa trung tâm thành phố Hải Phòng, từ khách sạn dễ dàng di chuyển tới các trung tâm hành chính, trung tâm thương mại và giải trí của Thành phố.  Chỉ cách sân bay Cát Bi 10 phút lái xe và 20 phút đi ra biển Đồ Sơn, đường đi thuận tiện cho các chuyến công tác hay du lịch nghỉ mát tới quần đảo Cát Bà.') }}
                            </div>
                        </div>
                        <div class="intro_right_text text-center">
                            {{ __('Chuỗi nhà hàng phục vụ các món ăn Âu - Á mang hương vị độc đáo với không gian phòng Vip riêng tư và quầy bar hiện đại. Chúng tôi rất tự hào với hệ thống các phòng hội nghị, hội thảo và phòng đa chức năng được trang bị bằng các thiết bị hiện đại nhất cùng sự tư vấn , hỗ trợ của đội ngũ nhân viên tổ chức sự kiện chuyên nghiệp. Đáp ứng xu hướng tập luyện ngày nay, phòng tập thể dục của chúng tôi nằm giáp với bể bơi và sân tennis chắc chắn  sẽ mang lại kỳ nghỉ đáng nhớ cho Quý khách.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="intro_left intro">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 order-xl-1 order-2">
                    <div class="intro_left_content">
                        <div class="section_title_container text-center">
                            <div class="section_title">
                                <h1>{{ __('Tiện nghi tuyệt vời') }}</h1>
                            </div>
                            <div class="section_text">
                                {{ __('Khách sạn Hữu Nghị là khách sạn đạt tiêu chuẩn Quốc tế, mang nét cổ kính sang trọng với hệ thống 140 phòng bao gồm : biệt thự, dịch vụ căn hộ cho thuê, phòng ốc cao cấp với nội thất hiện đại, tiện nghi nhìn ra cảng biển và  quan sát toàn cảnh thành phố.') }}
                            </div>
                        </div>
                        <div class="row icon_box_row">

                            <div class="col-lg-4">
                                <div class="icon_box text-center">
                                    <div class="icon_box_icon">
                                        <img src="images/icon_1.svg">
                                    </div>
                                    <div class="icon_box_title">
                                        <h3>{{ __('Phòng Đẹp') }}</h3>
                                    </div>
                                    <div class="icon_box_text">
                                        <p>{{ __('Những căn phòng đầy đủ tiện nghi mang lại một kì nghỉ vô cùng thoải mái.') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="icon_box text-center">
                                    <div class="icon_box_icon">
                                        <img src="images/icon_2.svg">
                                    </div>
                                    <div class="icon_box_title">
                                        <h3>{{ __('Hồ Bơi') }}</h3>
                                    </div>
                                    <div class="icon_box_text">
                                        <p>
                                            {{ __('Với hệ thống nước được xủ lý theo tiêu chuẩn Châu Âu và được chúng tôi thay đổi liên tục.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="icon_box text-center">
                                    <div class="icon_box_icon">
                                        <img src="images/icon_3.svg">
                                    </div>
                                    <div class="icon_box_title">
                                        <h3>{{ __('Resort') }}</h3>
                                    </div>
                                    <div class="icon_box_text">
                                        <p>
                                            {{ __('Với những chuỗi Resort đẹp mắt và độc đáo được thiết kế theo phong cách sang trọng.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 order-xl-2 order-1">
                    <div class="intro_image">
                        <div class="background_image intro_image_background"
                             style="background-image:url(images/intro_2.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
