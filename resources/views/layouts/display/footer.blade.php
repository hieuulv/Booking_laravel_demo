<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_content footer_about">
                        <div class="logo_container footer_logo">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('images/logo.png') }}" alt="">
                                    {{ $settings[0]['text_logo'] }}
                                </a>
                            </div>
                        </div>
                        <p class="footer_about_text">
                            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer
                            eleme ntum orci eu vehicula pretium.') }}
                        </p>
                        <ul class="footer_social_list">
                            <li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="footer_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_title">blog posts</div>
                    <div class="footer_content footer_blog">

                        <!-- Footer blog item -->
                        <div class="footer_blog_item clearfix">
                            <div class="footer_blog_image"><img src="{{ asset('images/footer_blog_3.jpg') }}"
                                                                alt="https://unsplash.com/@bergeryap87"></div>
                            <div class="footer_blog_content">
                                <div class="footer_blog_title"><a href="">{{ __('Travel with us this year') }}</a>
                                </div>
                                <div class="footer_blog_date">{{ __('Nov 29, 2017') }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_title">{{ __('tags') }}</div>
                    <div class="footer_content footer_tags">
                        <ul class="tags_list clearfix">
                            <li class="tag_item"><a href="#">{{ __('design') }}</a></li>
                            <li class="tag_item"><a href="#">{{ __('fashion') }}</a></li>
                            <li class="tag_item"><a href="#">{{ __('music') }}</a></li>
                            <li class="tag_item"><a href="#">{{ __('video') }}</a></li>
                            <li class="tag_item"><a href="#">{{ __('party') }}</a></li>
                            <li class="tag_item"><a href="#">{{ __('photography') }}</a></li>
                            <li class="tag_item"><a href="#">{{ __('adventure') }}</a></li>
                            <li class="tag_item"><a href="#">{{ __('travel') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-3 footer_column">
                <div class="footer_col">
                    <div class="footer_title">{{ __('Thông tin liên lạc') }}</div>
                    <div class="footer_content footer_contact">
                        <ul class="contact_info_list">
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="{{ asset('images/placeholder.svg') }}" alt=""></div>
                                </div>
                                <div class="contact_info_text">
                                    {{ $settings[0]['address'] }}
                                </div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="{{ asset('images/phone-call.svg') }}" alt=""></div>
                                </div>
                                <div class="contact_info_text">
                                    {{ $settings[0]['phone'] }}
                                </div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="{{ asset('images/message.svg') }}" alt=""></div>
                                </div>
                                <div class="contact_info_text">
                                    <a href="mailto:hieuu.dev99@gmail.com?Subject=Hello"
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
</footer>
