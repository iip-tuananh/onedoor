@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
    <div class="bodywrap">
        <h1 class="d-none">{{ $setting->company }} </h1>
        <div class="section_slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($banner as $item)
                        <div class="swiper-slide">
                            <a href="javascript:void(0)" class="clearfix" title="Slider 1">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="{{ $item->image }}">
                                    <source media="(min-width: 992px)" srcset="{{ $item->image }}">
                                    <source media="(min-width: 767px)" srcset="{{ $item->image }}">
                                    <source media="(max-width: 767px)" srcset="{{ $item->image }}">
                                    <img width="1920" height="1069" src="{{ $item->image }}" alt="Slider 1"
                                        class="img-responsive center-block duration-300" />
                                </picture>
                            </a>
                            <div class="thumb-slider-text">
                                <div class="slider-text">
                                    <h2 class="title">
                                        {{ $item->title }}
                                    </h2>
                                    <div class="content">
                                        Cùng ONE<span>DOOR</span>
                                    </div>
                                    <div class="content_2">
                                        Chúng tôi đồng hành cùng bạn trong mọi công trình, mang đến giải pháp an toàn bền
                                        vững và hiện đại.
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <script>
            let swiperSlider = null;

            function initSwiperSlider() {
                swiperSlider = new Swiper('.section_slider .swiper-container', {
                    speed: 1000,
                    spaceBetween: 14,
                    effect: 'fade',
                    loop: true,
                    navigation: {
                        nextEl: '.section_slider .swiper-button-next',
                        prevEl: '.section_slider .swiper-button-prev',
                    },
                    autoplay: {
                        delay: 8000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.section_slider .swiper-pagination',
                        clickable: true,
                    },
                });
            }
            initSwiperSlider();
            let videos = document.querySelectorAll('.play-box');
            let popupVideo = document.querySelector('.popup_video');
            let close_vd = document.querySelectorAll('.close_video');
            videos.forEach(v => v.addEventListener('click', function(e) {
                e.preventDefault();
                var dataset = $(this).data("video");
                popupVideo.classList.add('open');
                popupVideo.querySelector('.b_video').innerHTML =
                    `<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/` +
                    dataset + `?enablejsapi=1" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>`
            }));
            close_vd.forEach(v => v.addEventListener('click', function(e) {
                e.preventDefault();
                popupVideo.classList.remove('open');
                setTimeout(function() {
                    popupVideo.querySelector('.b_video').innerHTML = ``
                }, 500);
            }))
        </script>
        {{-- giới thiệu  --}}
        <section class="section-index section_about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12 box_img_box10">
                        <div class="img-box10" data-aos="fade-right">
                            <div class="img1">
                                <img width="410" height="419" loading="lazy" class="lazyload duration-300"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="{{ $gioithieu->image }}" alt="Banner" />
                            </div>

                            <div class="about-tag">
                                <div class="about-experience-tag">
                                    <span class="circle-title-anime">
                                        <span class="char1">O</span> <span class="char2"> </span> <span
                                            class="char3">N</span> <span class="char4"></span> <span
                                            class="char5">E</span> <span class="char6"></span> <span
                                            class="char7"></span> <span class="char8">D</span> <span
                                            class="char9"></span> <span class="char10">O</span> <span
                                            class="char11"></span> <span class="char12">O</span> <span
                                            class="char13"></span> <span class="char14">R</span>
                                    </span>
                                </div>
                                <div class="play-btn popup-video">
                                    <svg enable-background="new 0 0 50 50" viewBox="0 0 50 50"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m34.7 32.4-4.4-4.4-6.4 6.4 4.4 4.4c-.8 3.1.3 6.6 3 8.8.8.7 2.1 0 2.1-1v-5.1l3.4-2.2 3.4 2.2v5.1c0 1.1 1.3 1.6 2 1 7.1-5.8 1.5-17.5-7.5-15.2z" />
                                            <path
                                                d="m11 21.6 4.3 4.3 6.4-6.4-4.3-4.3c.2-.7.2-1.3.2-2 0-2.7-1.2-5.1-3.3-6.8-.3-.4-.8-.5-1.2-.2-.4.2-.7.6-.7 1.1v5.1l-3.4 2.1-3.4-2.1v-5.1c0-.5-.3-.9-.7-1.1-.5-.2-1-.2-1.4.1-2.5 2-3.6 5.1-3.1 8.3.6 3.5 3.4 6.3 6.9 7 1.2.3 2.5.3 3.7 0z" />
                                            <path
                                                d="m26.8 16.5-22.8 22.8c-.5.5-.8 1.2-.8 1.9s.3 1.4.8 1.9c.1.1 2.8 2.8 2.7 2.7 1 1 2.7 1 3.8 0l22.8-22.8z" />
                                            <path
                                                d="m48.7 15.7-12.6-12.6c-.9-.9-2.1-1.2-3.3-1l-8.6 1.8c-1.3.3-2.3 1.2-2.7 2.5s-.1 2.6.9 3.6l16 16c1.4 1.4 3.7 1.4 5.1 0l5.2-5.2c.7-.7 1.1-1.6 1.1-2.6s-.4-1.8-1.1-2.5z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12 col-left">
                        <div class="product-content" data-aos="fade-left">
                            {{-- <div class="section-title-about">
                                <div class="sub_title">Giới thiệu</div>
                                <h2>Về {{$setting->company}}</h2>
                            </div> --}}
                            <div class="desc">
                                {!! $gioithieu->description !!}
                            </div>
                            <ul class="box_thong_so">
                                <li class="active">
                                    <h3><i class="icon_mask"></i> Phân tích và đánh giá tính khả thi .</h3>
                                </li>
                                <li>
                                    <h3><i class="icon_mask"></i> Cam kết chất lượng hài lòng 100% từ khách hàng.</h3>
                                </li>
                                <li>
                                    <h3><i class="icon_mask"></i> Thiết kế phù hợp với nhu cầu sử dụng của khách hàng.
                                    </h3>
                                </li>
                                <li>
                                    <h3><i class="icon_mask"></i> Giải pháp thiết kế thông minh, tiết kiệm và thân thiện.
                                    </h3>
                                </li>
                            </ul>
                            <div class="box-contact">
                                <a href="{{ route('aboutUs') }}" title="Xem chi tiết"
                                    class="theme-btn btn-style-three exp-btn-title btn-cts">
                                    <span class="btn-wrap">
                                        <span class="text-one">
                                            Xem chi tiết
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                        fill="white" />
                                                </svg>
                                            </i>
                                        </span>
                                        <span class="text-two">
                                            Xem chi tiết
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                        fill="white" />
                                                </svg>
                                            </i>
                                        </span>
                                    </span>
                                </a>
                                <div class="btn_contact-phone">
                                    <a class="icon_phone" href="tel:{{ $setting->phone1 }}"
                                        title=" {{ $setting->phone1 }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                            viewBox="0 0 29 29" fill="none">
                                            <path
                                                d="M22.0473 19.184C21.0999 18.2487 19.9171 18.2487 18.9757 19.184C18.2576 19.8961 17.5395 20.6082 16.8334 21.3324C16.6403 21.5315 16.4774 21.5737 16.242 21.441C15.7774 21.1875 15.2825 20.9824 14.836 20.7048C12.754 19.3952 11.01 17.7116 9.46515 15.8167C8.69875 14.8753 8.01684 13.8675 7.5401 12.733C7.44355 12.5037 7.46165 12.3528 7.64872 12.1658C8.36684 11.4718 9.06686 10.7597 9.77291 10.0476C10.7566 9.05793 10.7566 7.89928 9.76688 6.90357C9.20566 6.33631 8.64444 5.78113 8.08322 5.21387C7.50389 4.63455 6.9306 4.04919 6.34524 3.4759C5.39781 2.5526 4.21502 2.5526 3.27362 3.48194C2.54946 4.19402 1.85548 4.92421 1.11926 5.62423C0.437345 6.26993 0.0933708 7.06047 0.0209553 7.98377C-0.0937026 9.48639 0.27441 10.9045 0.793387 12.2865C1.85548 15.1469 3.47276 17.6874 5.43401 20.0168C8.08322 23.1669 11.2454 25.6592 14.9446 27.4575C16.6101 28.2661 18.336 28.8877 20.2128 28.9903C21.5042 29.0627 22.6267 28.7368 23.5258 27.7291C24.1414 27.0411 24.8353 26.4135 25.4871 25.7557C26.4526 24.7781 26.4587 23.5953 25.4991 22.6298C24.3526 21.4772 23.2 20.3306 22.0473 19.184Z"
                                                fill="white"></path>
                                            <path
                                                d="M20.8947 14.3745L23.1215 13.9943C22.7715 11.9485 21.806 10.0959 20.3396 8.62345C18.7887 7.07255 16.8274 6.09494 14.667 5.79321L14.3532 8.03206C16.0248 8.26741 17.5455 9.02174 18.7464 10.2226C19.8809 11.3571 20.6232 12.7934 20.8947 14.3745Z"
                                                fill="white"></path>
                                            <path
                                                d="M24.3767 4.69494C21.806 2.12419 18.5533 0.500874 14.9627 0L14.6489 2.23885C17.7507 2.67334 20.5629 4.07941 22.7836 6.29412C24.8897 8.4002 26.2716 11.0615 26.7725 13.9883L28.9993 13.6081C28.4139 10.2166 26.8147 7.13896 24.3767 4.69494Z"
                                                fill="white"></path>
                                        </svg>
                                    </a>
                                    <div class="box-contact-phone-info">
                                        <span>Gọi điện ngay!</span>
                                        <a href="tel:{{ $setting->phone1 }}"
                                            title="{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end giới thiệu --}}
        {{-- <section class="section-index section_project">
            <div class="container">
                <div class="section-title-project" data-aos="fade-down">
                    <div class="sub_title">Dự án của chúng tôi</div>
                    <h2>
                        <a href="du-an-thi-cong" title="Các Dự Án Mới Nhất">Các Dự Án Mới Nhất</a>
                    </h2>
                </div>
                <div class="desc" data-aos="fade-up">
                    Khám phá những công trình tiêu biểu mà Bean Construction đã và đang thực hiện, thể hiện sự tận tâm,
                    sáng tạo và chất lượng vượt trội trong từng hạng mục.
                </div>
            </div>
            <div class="project-swiper swiper-container" data-aos="zoom-in">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item_project">
                            <a class="image-blog" href="/thiet-ke-noi-that-biet-thu-mua-xuan-tai-dak-lak"
                                title="Thiết Kế Nội Thất Biệt Thự Mùa Xuân tại Đắk Lắk">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/601/974/articles/thiet-ke-noi-that-biet-thu-mua-x.jpg?v=1758096888087"
                                    alt="Thiết Kế Nội Thất Biệt Thự M&#249;a Xu&#226;n tại Đắk Lắk"
                                    class="lazyload duration-300" />
                            </a>
                            <div class="blog_content">
                                <h3><a class="line-clamp line-clamp-1"
                                        href="/thiet-ke-noi-that-biet-thu-mua-xuan-tai-dak-lak"
                                        title="Thiết Kế Nội Thất Biệt Thự Mùa Xuân tại Đắk Lắk">Thiết Kế Nội Thất Biệt
                                        Thự Mùa Xuân tại Đắk Lắk</a></h3>
                                <div class="box_tag_event">
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd"
                                                    d="m115.104 101.157c0 47.039 38.13 85.168 85.169 85.168 47.04 0 85.17-38.129 85.17-85.168 0-47.026-38.13-85.157-85.17-85.157-47.038 0-85.169 38.131-85.169 85.157zm280.896 194.843c55.228 0 100 44.771 100 100 0 55.228-44.771 100-100 100-55.228 0-100-44.772-100-100s44.772-100 100-100zm-27.279 143.225c6.142 5.795 11.964 10.174 20.441 11.67l.184 7.645c.091 3.851 3.286 6.899 7.137 6.809s6.899-3.286 6.809-7.137l-.18-7.443c14.635-2.881 26.773-14.858 26.773-30.318 0-18.214-16.474-31.008-33.885-31.008-9.697 0-19.885-6.53-19.885-17.008 0-10.456 10.199-17.035 19.885-17.035 4.666 0 15.39 3.938 18.027 7.949 2.114 3.216 6.436 4.11 9.653 1.996 3.216-2.114 4.11-6.436 1.996-9.652-4.522-6.879-14.894-11.598-22.81-13.377l-.211-8.853c-.091-3.851-3.286-6.899-7.137-6.809s-6.899 3.286-6.809 7.137l.199 8.346c-14.656 2.861-26.793 14.825-26.793 30.298 0 18.214 16.473 31.008 33.885 31.008 9.697 0 19.885 6.53 19.885 17.008s-10.188 17.008-19.885 17.008c-8.121 0-12.025-3.042-17.709-8.404-2.809-2.643-7.228-2.508-9.871.301-2.643 2.807-2.508 7.226.301 9.869zm-50.043 40.531c-22.55-20.828-36.678-50.642-36.678-83.756 0-41.915 22.632-78.544 56.336-98.35-12.692-14.346-27.582-26.704-44.148-36.537l-93.915 143.015-93.912-143.011c-54.093 32.108-90.361 91.094-90.361 158.557 0 74.348 196.681 94.366 302.678 60.082zm-84.273-226.585-6.423 19.767c-.956 2.944-2.78 5.353-5.145 6.992l7.163 53.425-29.727 45.268-29.727-45.269 7.163-53.425c-2.365-1.639-4.188-4.048-5.145-6.992l-6.423-19.767c-1.386-4.265-.708-8.542 1.928-12.171s6.495-5.594 10.98-5.594h42.448c4.485 0 8.343 1.966 10.98 5.594 2.637 3.63 3.314 7.907 1.928 12.172z"
                                                    fill-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Chủ đầu tư:</b> Bean Company</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 511.856 511.856" height="512"
                                                viewBox="0 0 511.856 511.856" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m460.442 481.856v-367.829h-47.635v367.829h-30v-481.856l-253.828 71.168v101.95h108.429v308.738h-30v-278.738h-125.993v278.738h-61.503v30h472.033v-30zm-165.991-171.019v-60.341h30v60.341zm30 49.861v60.341h-30v-60.341zm-30-160.063v-60.341h30v60.341zm-165.04 49.861h30v60.341h-30zm0 110.202h30v60.341h-30z" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Loại dự án:</b> Thiết kế biệt thự</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="512" viewBox="0 0 64 64" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m17.14 49.84h37.88a2.98964 2.98964 0 0 0 2.99-2.98v-37.88a2.99174 2.99174 0 0 0 -2.99-2.99h-37.88a2.98964 2.98964 0 0 0 -2.98 2.99v37.88a2.98752 2.98752 0 0 0 2.98 2.98zm31.99-25.76a1.00011 1.00011 0 0 1 0 2h-5a1.00648 1.00648 0 0 1 -.7-1.71l4.2-4.15a1.94225 1.94225 0 0 0 -.02-2.61 1.223 1.223 0 0 0 -1.71.10005c-.61716.6149-1.40313 2.09534-2.43007 1.22992-.97012-.9243.39826-1.86755.93008-2.56a3.32509 3.32509 0 0 1 5.72989 2.55006c.121 2.23284-2.26081 3.71638-3.55994 5.15zm-27.09-1.69a1.00016 1.00016 0 0 1 2 .00007v1.57993a5.03509 5.03509 0 0 1 7.57 1.0602 5.12916 5.12916 0 0 1 4.25-2.3502 5.499 5.499 0 0 1 5.32 5.68v11.16a1 1 0 0 1 -2 0v-11.16c-.117-4.89349-6.46749-4.82032-6.57.0001v11.1599a1.00017 1.00017 0 0 1 -2-.00006v-11.15994a3.48993 3.48993 0 0 0 -3.25-3.68 3.488 3.488 0 0 0 -3.25 3.65l-.07 11.2a1 1 0 0 1 -2-.01z" />
                                                <path
                                                    d="m60.92279 56.99982a1.00657 1.00657 0 0 0 -.21607-1.08948l-3.382-3.382a.99989.99989 0 0 0 -1.41407 1.41406l1.6753 1.6753h-47.25685a1.94927 1.94927 0 0 1 -1.94678-1.9468v-47.25684l1.6753 1.6753a1.00007 1.00007 0 0 0 1.414-1.41411l-3.382-3.382a1.00751 1.00751 0 0 0 -1.08947-.21605c-.12234.05073-3.70715 3.59809-3.70715 3.59809a1.00005 1.00005 0 0 0 1.41411 1.414l1.67521-1.67523v47.25684a3.95124 3.95124 0 0 0 3.94678 3.94678h47.25684l-1.6753 1.67532a.99989.99989 0 1 0 1.41407 1.414s3.54736-3.58481 3.59808-3.70718z" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Quy mô:</b> 1000m2-2 tầng</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="511pt" viewBox="0 1 511.99995 511" width="511pt"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m128.378906 272.066406h-22.960937c-6.023438 0-11.460938 3.585938-13.84375 9.109375l-63.5625 148.003907 150.953125-77.097657c-18.070313-25.003906-35.949219-52.582031-50.585938-80.015625zm0 0" />
                                                <path
                                                    d="m420.421875 281.175781c-2.378906-5.523437-7.820313-9.109375-13.839844-9.109375h-22.960937c-27.640625 51.796875-67.910156 105.324219-93.527344 134.773438-18.015625 20.664062-50.195312 20.640625-68.183594 0-1.839844-2.113282-11.445312-13.234375-24.675781-30.335938l-27.214844 13.90625 102.945313 102.746094 195.0625-101.125zm0 0" />
                                                <path
                                                    d="m9.441406 472.433594-8.210937 19.121094c-4.25 9.894531 3.03125 20.945312 13.839843 20.945312h221.050782c1.382812-1.027344 1.398437-.964844 8.820312-4.8125l-103.097656-102.882812zm0 0" />
                                                <path
                                                    d="m510.769531 491.554688-30.84375-71.820313-178.9375 92.765625h195.941407c10.785156 0 18.097656-11.03125 13.839843-20.945312zm0 0" />
                                                <path
                                                    d="m271.058594 135.824219c0-8.289063-6.757813-15.027344-15.058594-15.027344-8.304688 0-15.058594 6.738281-15.058594 15.027344 0 8.285156 6.753906 15.027343 15.058594 15.027343 8.300781 0 15.058594-6.742187 15.058594-15.027343zm0 0" />
                                                <path
                                                    d="m267.363281 386.117188c5.070313-5.820313 124.160157-143.578126 124.160157-238.273438 0-195.265625-271.046876-197.648438-271.046876 0 0 94.695312 119.089844 232.453125 124.160157 238.273438 6.003906 6.886718 16.734375 6.878906 22.726562 0zm-56.539062-250.292969c0-24.859375 20.265625-45.082031 45.175781-45.082031 24.90625 0 45.171875 20.222656 45.171875 45.082031 0 24.855469-20.265625 45.078125-45.171875 45.078125-24.910156 0-45.175781-20.222656-45.175781-45.078125zm0 0" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Vị trí:</b> ĐăkLăk</span>
                                    </div>
                                </div>
                                <a class="button-more" href="/thiet-ke-noi-that-biet-thu-mua-xuan-tai-dak-lak"
                                    title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                                fill="#2B6377"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(16) rotate(90)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_project">
                            <a class="image-blog" href="/thiet-ke-noi-that-chung-cu-sang-trong-binh-duong"
                                title="Thiết Kế Nội Thất Chung Cư Sang Trọng Bình Dương">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/601/974/articles/noi-that-chung-cu-sang.jpg?v=1758095762127"
                                    alt="Thiết Kế Nội Thất Chung Cư Sang Trọng B&#236;nh Dương"
                                    class="lazyload duration-300" />
                            </a>
                            <div class="blog_content">
                                <h3><a class="line-clamp line-clamp-1"
                                        href="/thiet-ke-noi-that-chung-cu-sang-trong-binh-duong"
                                        title="Thiết Kế Nội Thất Chung Cư Sang Trọng Bình Dương">Thiết Kế Nội Thất
                                        Chung Cư Sang Trọng Bình Dương</a></h3>
                                <div class="box_tag_event">
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd"
                                                    d="m115.104 101.157c0 47.039 38.13 85.168 85.169 85.168 47.04 0 85.17-38.129 85.17-85.168 0-47.026-38.13-85.157-85.17-85.157-47.038 0-85.169 38.131-85.169 85.157zm280.896 194.843c55.228 0 100 44.771 100 100 0 55.228-44.771 100-100 100-55.228 0-100-44.772-100-100s44.772-100 100-100zm-27.279 143.225c6.142 5.795 11.964 10.174 20.441 11.67l.184 7.645c.091 3.851 3.286 6.899 7.137 6.809s6.899-3.286 6.809-7.137l-.18-7.443c14.635-2.881 26.773-14.858 26.773-30.318 0-18.214-16.474-31.008-33.885-31.008-9.697 0-19.885-6.53-19.885-17.008 0-10.456 10.199-17.035 19.885-17.035 4.666 0 15.39 3.938 18.027 7.949 2.114 3.216 6.436 4.11 9.653 1.996 3.216-2.114 4.11-6.436 1.996-9.652-4.522-6.879-14.894-11.598-22.81-13.377l-.211-8.853c-.091-3.851-3.286-6.899-7.137-6.809s-6.899 3.286-6.809 7.137l.199 8.346c-14.656 2.861-26.793 14.825-26.793 30.298 0 18.214 16.473 31.008 33.885 31.008 9.697 0 19.885 6.53 19.885 17.008s-10.188 17.008-19.885 17.008c-8.121 0-12.025-3.042-17.709-8.404-2.809-2.643-7.228-2.508-9.871.301-2.643 2.807-2.508 7.226.301 9.869zm-50.043 40.531c-22.55-20.828-36.678-50.642-36.678-83.756 0-41.915 22.632-78.544 56.336-98.35-12.692-14.346-27.582-26.704-44.148-36.537l-93.915 143.015-93.912-143.011c-54.093 32.108-90.361 91.094-90.361 158.557 0 74.348 196.681 94.366 302.678 60.082zm-84.273-226.585-6.423 19.767c-.956 2.944-2.78 5.353-5.145 6.992l7.163 53.425-29.727 45.268-29.727-45.269 7.163-53.425c-2.365-1.639-4.188-4.048-5.145-6.992l-6.423-19.767c-1.386-4.265-.708-8.542 1.928-12.171s6.495-5.594 10.98-5.594h42.448c4.485 0 8.343 1.966 10.98 5.594 2.637 3.63 3.314 7.907 1.928 12.172z"
                                                    fill-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Chủ đầu tư:</b> Bean Construction</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 511.856 511.856" height="512"
                                                viewBox="0 0 511.856 511.856" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m460.442 481.856v-367.829h-47.635v367.829h-30v-481.856l-253.828 71.168v101.95h108.429v308.738h-30v-278.738h-125.993v278.738h-61.503v30h472.033v-30zm-165.991-171.019v-60.341h30v60.341zm30 49.861v60.341h-30v-60.341zm-30-160.063v-60.341h30v60.341zm-165.04 49.861h30v60.341h-30zm0 110.202h30v60.341h-30z" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Loại dự án:</b> Nội thất chung cư</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="512" viewBox="0 0 64 64" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m17.14 49.84h37.88a2.98964 2.98964 0 0 0 2.99-2.98v-37.88a2.99174 2.99174 0 0 0 -2.99-2.99h-37.88a2.98964 2.98964 0 0 0 -2.98 2.99v37.88a2.98752 2.98752 0 0 0 2.98 2.98zm31.99-25.76a1.00011 1.00011 0 0 1 0 2h-5a1.00648 1.00648 0 0 1 -.7-1.71l4.2-4.15a1.94225 1.94225 0 0 0 -.02-2.61 1.223 1.223 0 0 0 -1.71.10005c-.61716.6149-1.40313 2.09534-2.43007 1.22992-.97012-.9243.39826-1.86755.93008-2.56a3.32509 3.32509 0 0 1 5.72989 2.55006c.121 2.23284-2.26081 3.71638-3.55994 5.15zm-27.09-1.69a1.00016 1.00016 0 0 1 2 .00007v1.57993a5.03509 5.03509 0 0 1 7.57 1.0602 5.12916 5.12916 0 0 1 4.25-2.3502 5.499 5.499 0 0 1 5.32 5.68v11.16a1 1 0 0 1 -2 0v-11.16c-.117-4.89349-6.46749-4.82032-6.57.0001v11.1599a1.00017 1.00017 0 0 1 -2-.00006v-11.15994a3.48993 3.48993 0 0 0 -3.25-3.68 3.488 3.488 0 0 0 -3.25 3.65l-.07 11.2a1 1 0 0 1 -2-.01z" />
                                                <path
                                                    d="m60.92279 56.99982a1.00657 1.00657 0 0 0 -.21607-1.08948l-3.382-3.382a.99989.99989 0 0 0 -1.41407 1.41406l1.6753 1.6753h-47.25685a1.94927 1.94927 0 0 1 -1.94678-1.9468v-47.25684l1.6753 1.6753a1.00007 1.00007 0 0 0 1.414-1.41411l-3.382-3.382a1.00751 1.00751 0 0 0 -1.08947-.21605c-.12234.05073-3.70715 3.59809-3.70715 3.59809a1.00005 1.00005 0 0 0 1.41411 1.414l1.67521-1.67523v47.25684a3.95124 3.95124 0 0 0 3.94678 3.94678h47.25684l-1.6753 1.67532a.99989.99989 0 1 0 1.41407 1.414s3.54736-3.58481 3.59808-3.70718z" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Quy mô:</b> 500m2</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="511pt" viewBox="0 1 511.99995 511" width="511pt"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m128.378906 272.066406h-22.960937c-6.023438 0-11.460938 3.585938-13.84375 9.109375l-63.5625 148.003907 150.953125-77.097657c-18.070313-25.003906-35.949219-52.582031-50.585938-80.015625zm0 0" />
                                                <path
                                                    d="m420.421875 281.175781c-2.378906-5.523437-7.820313-9.109375-13.839844-9.109375h-22.960937c-27.640625 51.796875-67.910156 105.324219-93.527344 134.773438-18.015625 20.664062-50.195312 20.640625-68.183594 0-1.839844-2.113282-11.445312-13.234375-24.675781-30.335938l-27.214844 13.90625 102.945313 102.746094 195.0625-101.125zm0 0" />
                                                <path
                                                    d="m9.441406 472.433594-8.210937 19.121094c-4.25 9.894531 3.03125 20.945312 13.839843 20.945312h221.050782c1.382812-1.027344 1.398437-.964844 8.820312-4.8125l-103.097656-102.882812zm0 0" />
                                                <path
                                                    d="m510.769531 491.554688-30.84375-71.820313-178.9375 92.765625h195.941407c10.785156 0 18.097656-11.03125 13.839843-20.945312zm0 0" />
                                                <path
                                                    d="m271.058594 135.824219c0-8.289063-6.757813-15.027344-15.058594-15.027344-8.304688 0-15.058594 6.738281-15.058594 15.027344 0 8.285156 6.753906 15.027343 15.058594 15.027343 8.300781 0 15.058594-6.742187 15.058594-15.027343zm0 0" />
                                                <path
                                                    d="m267.363281 386.117188c5.070313-5.820313 124.160157-143.578126 124.160157-238.273438 0-195.265625-271.046876-197.648438-271.046876 0 0 94.695312 119.089844 232.453125 124.160157 238.273438 6.003906 6.886718 16.734375 6.878906 22.726562 0zm-56.539062-250.292969c0-24.859375 20.265625-45.082031 45.175781-45.082031 24.90625 0 45.171875 20.222656 45.171875 45.082031 0 24.855469-20.265625 45.078125-45.171875 45.078125-24.910156 0-45.175781-20.222656-45.175781-45.078125zm0 0" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Vị trí:</b> Bình Dương</span>
                                    </div>
                                </div>
                                <a class="button-more" href="/thiet-ke-noi-that-chung-cu-sang-trong-binh-duong"
                                    title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                                fill="#2B6377"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(16) rotate(90)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_project">
                            <a class="image-blog" href="/thiet-ke-noi-that-nha-pho-tai-dong-nai"
                                title="Thiết Kế Nội Thất Nhà Phố tại Đồng Nai">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/601/974/articles/thiet-ke-noi-that-nha-chi-phuong.jpg?v=1758095398770"
                                    alt="Thiết Kế Nội Thất Nh&#224; Phố tại Đồng Nai" class="lazyload duration-300" />
                            </a>
                            <div class="blog_content">
                                <h3><a class="line-clamp line-clamp-1" href="/thiet-ke-noi-that-nha-pho-tai-dong-nai"
                                        title="Thiết Kế Nội Thất Nhà Phố tại Đồng Nai">Thiết Kế Nội Thất Nhà Phố tại
                                        Đồng Nai</a></h3>
                                <div class="box_tag_event">
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd"
                                                    d="m115.104 101.157c0 47.039 38.13 85.168 85.169 85.168 47.04 0 85.17-38.129 85.17-85.168 0-47.026-38.13-85.157-85.17-85.157-47.038 0-85.169 38.131-85.169 85.157zm280.896 194.843c55.228 0 100 44.771 100 100 0 55.228-44.771 100-100 100-55.228 0-100-44.772-100-100s44.772-100 100-100zm-27.279 143.225c6.142 5.795 11.964 10.174 20.441 11.67l.184 7.645c.091 3.851 3.286 6.899 7.137 6.809s6.899-3.286 6.809-7.137l-.18-7.443c14.635-2.881 26.773-14.858 26.773-30.318 0-18.214-16.474-31.008-33.885-31.008-9.697 0-19.885-6.53-19.885-17.008 0-10.456 10.199-17.035 19.885-17.035 4.666 0 15.39 3.938 18.027 7.949 2.114 3.216 6.436 4.11 9.653 1.996 3.216-2.114 4.11-6.436 1.996-9.652-4.522-6.879-14.894-11.598-22.81-13.377l-.211-8.853c-.091-3.851-3.286-6.899-7.137-6.809s-6.899 3.286-6.809 7.137l.199 8.346c-14.656 2.861-26.793 14.825-26.793 30.298 0 18.214 16.473 31.008 33.885 31.008 9.697 0 19.885 6.53 19.885 17.008s-10.188 17.008-19.885 17.008c-8.121 0-12.025-3.042-17.709-8.404-2.809-2.643-7.228-2.508-9.871.301-2.643 2.807-2.508 7.226.301 9.869zm-50.043 40.531c-22.55-20.828-36.678-50.642-36.678-83.756 0-41.915 22.632-78.544 56.336-98.35-12.692-14.346-27.582-26.704-44.148-36.537l-93.915 143.015-93.912-143.011c-54.093 32.108-90.361 91.094-90.361 158.557 0 74.348 196.681 94.366 302.678 60.082zm-84.273-226.585-6.423 19.767c-.956 2.944-2.78 5.353-5.145 6.992l7.163 53.425-29.727 45.268-29.727-45.269 7.163-53.425c-2.365-1.639-4.188-4.048-5.145-6.992l-6.423-19.767c-1.386-4.265-.708-8.542 1.928-12.171s6.495-5.594 10.98-5.594h42.448c4.485 0 8.343 1.966 10.98 5.594 2.637 3.63 3.314 7.907 1.928 12.172z"
                                                    fill-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Chủ đầu tư:</b> Company Construc</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 511.856 511.856" height="512"
                                                viewBox="0 0 511.856 511.856" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m460.442 481.856v-367.829h-47.635v367.829h-30v-481.856l-253.828 71.168v101.95h108.429v308.738h-30v-278.738h-125.993v278.738h-61.503v30h472.033v-30zm-165.991-171.019v-60.341h30v60.341zm30 49.861v60.341h-30v-60.341zm-30-160.063v-60.341h30v60.341zm-165.04 49.861h30v60.341h-30zm0 110.202h30v60.341h-30z" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Loại dự án:</b> Nội thất nhà phố</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="512" viewBox="0 0 64 64" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m17.14 49.84h37.88a2.98964 2.98964 0 0 0 2.99-2.98v-37.88a2.99174 2.99174 0 0 0 -2.99-2.99h-37.88a2.98964 2.98964 0 0 0 -2.98 2.99v37.88a2.98752 2.98752 0 0 0 2.98 2.98zm31.99-25.76a1.00011 1.00011 0 0 1 0 2h-5a1.00648 1.00648 0 0 1 -.7-1.71l4.2-4.15a1.94225 1.94225 0 0 0 -.02-2.61 1.223 1.223 0 0 0 -1.71.10005c-.61716.6149-1.40313 2.09534-2.43007 1.22992-.97012-.9243.39826-1.86755.93008-2.56a3.32509 3.32509 0 0 1 5.72989 2.55006c.121 2.23284-2.26081 3.71638-3.55994 5.15zm-27.09-1.69a1.00016 1.00016 0 0 1 2 .00007v1.57993a5.03509 5.03509 0 0 1 7.57 1.0602 5.12916 5.12916 0 0 1 4.25-2.3502 5.499 5.499 0 0 1 5.32 5.68v11.16a1 1 0 0 1 -2 0v-11.16c-.117-4.89349-6.46749-4.82032-6.57.0001v11.1599a1.00017 1.00017 0 0 1 -2-.00006v-11.15994a3.48993 3.48993 0 0 0 -3.25-3.68 3.488 3.488 0 0 0 -3.25 3.65l-.07 11.2a1 1 0 0 1 -2-.01z" />
                                                <path
                                                    d="m60.92279 56.99982a1.00657 1.00657 0 0 0 -.21607-1.08948l-3.382-3.382a.99989.99989 0 0 0 -1.41407 1.41406l1.6753 1.6753h-47.25685a1.94927 1.94927 0 0 1 -1.94678-1.9468v-47.25684l1.6753 1.6753a1.00007 1.00007 0 0 0 1.414-1.41411l-3.382-3.382a1.00751 1.00751 0 0 0 -1.08947-.21605c-.12234.05073-3.70715 3.59809-3.70715 3.59809a1.00005 1.00005 0 0 0 1.41411 1.414l1.67521-1.67523v47.25684a3.95124 3.95124 0 0 0 3.94678 3.94678h47.25684l-1.6753 1.67532a.99989.99989 0 1 0 1.41407 1.414s3.54736-3.58481 3.59808-3.70718z" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Quy mô:</b> 1500m2</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="511pt" viewBox="0 1 511.99995 511" width="511pt"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m128.378906 272.066406h-22.960937c-6.023438 0-11.460938 3.585938-13.84375 9.109375l-63.5625 148.003907 150.953125-77.097657c-18.070313-25.003906-35.949219-52.582031-50.585938-80.015625zm0 0" />
                                                <path
                                                    d="m420.421875 281.175781c-2.378906-5.523437-7.820313-9.109375-13.839844-9.109375h-22.960937c-27.640625 51.796875-67.910156 105.324219-93.527344 134.773438-18.015625 20.664062-50.195312 20.640625-68.183594 0-1.839844-2.113282-11.445312-13.234375-24.675781-30.335938l-27.214844 13.90625 102.945313 102.746094 195.0625-101.125zm0 0" />
                                                <path
                                                    d="m9.441406 472.433594-8.210937 19.121094c-4.25 9.894531 3.03125 20.945312 13.839843 20.945312h221.050782c1.382812-1.027344 1.398437-.964844 8.820312-4.8125l-103.097656-102.882812zm0 0" />
                                                <path
                                                    d="m510.769531 491.554688-30.84375-71.820313-178.9375 92.765625h195.941407c10.785156 0 18.097656-11.03125 13.839843-20.945312zm0 0" />
                                                <path
                                                    d="m271.058594 135.824219c0-8.289063-6.757813-15.027344-15.058594-15.027344-8.304688 0-15.058594 6.738281-15.058594 15.027344 0 8.285156 6.753906 15.027343 15.058594 15.027343 8.300781 0 15.058594-6.742187 15.058594-15.027343zm0 0" />
                                                <path
                                                    d="m267.363281 386.117188c5.070313-5.820313 124.160157-143.578126 124.160157-238.273438 0-195.265625-271.046876-197.648438-271.046876 0 0 94.695312 119.089844 232.453125 124.160157 238.273438 6.003906 6.886718 16.734375 6.878906 22.726562 0zm-56.539062-250.292969c0-24.859375 20.265625-45.082031 45.175781-45.082031 24.90625 0 45.171875 20.222656 45.171875 45.082031 0 24.855469-20.265625 45.078125-45.171875 45.078125-24.910156 0-45.175781-20.222656-45.175781-45.078125zm0 0" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Vị trí:</b> Đồng Nai</span>
                                    </div>
                                </div>
                                <a class="button-more" href="/thiet-ke-noi-that-nha-pho-tai-dong-nai"
                                    title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                                fill="#2B6377"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(16) rotate(90)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_project">
                            <a class="image-blog" href="/thiet-ke-thi-cong-noi-that-nha-pho-da-lat"
                                title="Thiết Kế Thi Công Nội Thất Nhà Phố Đà Lạt">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/601/974/articles/thiet-ke-thi-cong-noi-that-nha-pho-da-lat.jpg?v=1758094471167"
                                    alt="Thiết Kế Thi C&#244;ng Nội Thất Nh&#224; Phố Đ&#224; Lạt"
                                    class="lazyload duration-300" />
                            </a>
                            <div class="blog_content">
                                <h3><a class="line-clamp line-clamp-1"
                                        href="/thiet-ke-thi-cong-noi-that-nha-pho-da-lat"
                                        title="Thiết Kế Thi Công Nội Thất Nhà Phố Đà Lạt">Thiết Kế Thi Công Nội Thất
                                        Nhà Phố Đà Lạt</a></h3>
                                <div class="box_tag_event">
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd"
                                                    d="m115.104 101.157c0 47.039 38.13 85.168 85.169 85.168 47.04 0 85.17-38.129 85.17-85.168 0-47.026-38.13-85.157-85.17-85.157-47.038 0-85.169 38.131-85.169 85.157zm280.896 194.843c55.228 0 100 44.771 100 100 0 55.228-44.771 100-100 100-55.228 0-100-44.772-100-100s44.772-100 100-100zm-27.279 143.225c6.142 5.795 11.964 10.174 20.441 11.67l.184 7.645c.091 3.851 3.286 6.899 7.137 6.809s6.899-3.286 6.809-7.137l-.18-7.443c14.635-2.881 26.773-14.858 26.773-30.318 0-18.214-16.474-31.008-33.885-31.008-9.697 0-19.885-6.53-19.885-17.008 0-10.456 10.199-17.035 19.885-17.035 4.666 0 15.39 3.938 18.027 7.949 2.114 3.216 6.436 4.11 9.653 1.996 3.216-2.114 4.11-6.436 1.996-9.652-4.522-6.879-14.894-11.598-22.81-13.377l-.211-8.853c-.091-3.851-3.286-6.899-7.137-6.809s-6.899 3.286-6.809 7.137l.199 8.346c-14.656 2.861-26.793 14.825-26.793 30.298 0 18.214 16.473 31.008 33.885 31.008 9.697 0 19.885 6.53 19.885 17.008s-10.188 17.008-19.885 17.008c-8.121 0-12.025-3.042-17.709-8.404-2.809-2.643-7.228-2.508-9.871.301-2.643 2.807-2.508 7.226.301 9.869zm-50.043 40.531c-22.55-20.828-36.678-50.642-36.678-83.756 0-41.915 22.632-78.544 56.336-98.35-12.692-14.346-27.582-26.704-44.148-36.537l-93.915 143.015-93.912-143.011c-54.093 32.108-90.361 91.094-90.361 158.557 0 74.348 196.681 94.366 302.678 60.082zm-84.273-226.585-6.423 19.767c-.956 2.944-2.78 5.353-5.145 6.992l7.163 53.425-29.727 45.268-29.727-45.269 7.163-53.425c-2.365-1.639-4.188-4.048-5.145-6.992l-6.423-19.767c-1.386-4.265-.708-8.542 1.928-12.171s6.495-5.594 10.98-5.594h42.448c4.485 0 8.343 1.966 10.98 5.594 2.637 3.63 3.314 7.907 1.928 12.172z"
                                                    fill-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Chủ đầu tư:</b> Bean Company</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 511.856 511.856" height="512"
                                                viewBox="0 0 511.856 511.856" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m460.442 481.856v-367.829h-47.635v367.829h-30v-481.856l-253.828 71.168v101.95h108.429v308.738h-30v-278.738h-125.993v278.738h-61.503v30h472.033v-30zm-165.991-171.019v-60.341h30v60.341zm30 49.861v60.341h-30v-60.341zm-30-160.063v-60.341h30v60.341zm-165.04 49.861h30v60.341h-30zm0 110.202h30v60.341h-30z" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Loại dự án:</b> Thiết kế nhà phố</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="512" viewBox="0 0 64 64" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m17.14 49.84h37.88a2.98964 2.98964 0 0 0 2.99-2.98v-37.88a2.99174 2.99174 0 0 0 -2.99-2.99h-37.88a2.98964 2.98964 0 0 0 -2.98 2.99v37.88a2.98752 2.98752 0 0 0 2.98 2.98zm31.99-25.76a1.00011 1.00011 0 0 1 0 2h-5a1.00648 1.00648 0 0 1 -.7-1.71l4.2-4.15a1.94225 1.94225 0 0 0 -.02-2.61 1.223 1.223 0 0 0 -1.71.10005c-.61716.6149-1.40313 2.09534-2.43007 1.22992-.97012-.9243.39826-1.86755.93008-2.56a3.32509 3.32509 0 0 1 5.72989 2.55006c.121 2.23284-2.26081 3.71638-3.55994 5.15zm-27.09-1.69a1.00016 1.00016 0 0 1 2 .00007v1.57993a5.03509 5.03509 0 0 1 7.57 1.0602 5.12916 5.12916 0 0 1 4.25-2.3502 5.499 5.499 0 0 1 5.32 5.68v11.16a1 1 0 0 1 -2 0v-11.16c-.117-4.89349-6.46749-4.82032-6.57.0001v11.1599a1.00017 1.00017 0 0 1 -2-.00006v-11.15994a3.48993 3.48993 0 0 0 -3.25-3.68 3.488 3.488 0 0 0 -3.25 3.65l-.07 11.2a1 1 0 0 1 -2-.01z" />
                                                <path
                                                    d="m60.92279 56.99982a1.00657 1.00657 0 0 0 -.21607-1.08948l-3.382-3.382a.99989.99989 0 0 0 -1.41407 1.41406l1.6753 1.6753h-47.25685a1.94927 1.94927 0 0 1 -1.94678-1.9468v-47.25684l1.6753 1.6753a1.00007 1.00007 0 0 0 1.414-1.41411l-3.382-3.382a1.00751 1.00751 0 0 0 -1.08947-.21605c-.12234.05073-3.70715 3.59809-3.70715 3.59809a1.00005 1.00005 0 0 0 1.41411 1.414l1.67521-1.67523v47.25684a3.95124 3.95124 0 0 0 3.94678 3.94678h47.25684l-1.6753 1.67532a.99989.99989 0 1 0 1.41407 1.414s3.54736-3.58481 3.59808-3.70718z" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Quy mô:</b> 2000m2-3 tầng</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="511pt" viewBox="0 1 511.99995 511" width="511pt"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m128.378906 272.066406h-22.960937c-6.023438 0-11.460938 3.585938-13.84375 9.109375l-63.5625 148.003907 150.953125-77.097657c-18.070313-25.003906-35.949219-52.582031-50.585938-80.015625zm0 0" />
                                                <path
                                                    d="m420.421875 281.175781c-2.378906-5.523437-7.820313-9.109375-13.839844-9.109375h-22.960937c-27.640625 51.796875-67.910156 105.324219-93.527344 134.773438-18.015625 20.664062-50.195312 20.640625-68.183594 0-1.839844-2.113282-11.445312-13.234375-24.675781-30.335938l-27.214844 13.90625 102.945313 102.746094 195.0625-101.125zm0 0" />
                                                <path
                                                    d="m9.441406 472.433594-8.210937 19.121094c-4.25 9.894531 3.03125 20.945312 13.839843 20.945312h221.050782c1.382812-1.027344 1.398437-.964844 8.820312-4.8125l-103.097656-102.882812zm0 0" />
                                                <path
                                                    d="m510.769531 491.554688-30.84375-71.820313-178.9375 92.765625h195.941407c10.785156 0 18.097656-11.03125 13.839843-20.945312zm0 0" />
                                                <path
                                                    d="m271.058594 135.824219c0-8.289063-6.757813-15.027344-15.058594-15.027344-8.304688 0-15.058594 6.738281-15.058594 15.027344 0 8.285156 6.753906 15.027343 15.058594 15.027343 8.300781 0 15.058594-6.742187 15.058594-15.027343zm0 0" />
                                                <path
                                                    d="m267.363281 386.117188c5.070313-5.820313 124.160157-143.578126 124.160157-238.273438 0-195.265625-271.046876-197.648438-271.046876 0 0 94.695312 119.089844 232.453125 124.160157 238.273438 6.003906 6.886718 16.734375 6.878906 22.726562 0zm-56.539062-250.292969c0-24.859375 20.265625-45.082031 45.175781-45.082031 24.90625 0 45.171875 20.222656 45.171875 45.082031 0 24.855469-20.265625 45.078125-45.171875 45.078125-24.910156 0-45.175781-20.222656-45.175781-45.078125zm0 0" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Vị trí:</b> Đà Lạt</span>
                                    </div>
                                </div>
                                <a class="button-more" href="/thiet-ke-thi-cong-noi-that-nha-pho-da-lat"
                                    title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                                fill="#2B6377"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(16) rotate(90)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_project">
                            <a class="image-blog" href="/thi-cong-thiet-ke-can-ho-noxh-hud"
                                title="Thi Công Thiết Kế Căn Hộ Noxh Hud">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/601/974/articles/thi-cong-thiet-ke-can-ho-noxh-hud.jpg?v=1758021965700"
                                    alt="Thi C&#244;ng Thiết Kế Căn Hộ Noxh Hud" class="lazyload duration-300" />
                            </a>
                            <div class="blog_content">
                                <h3><a class="line-clamp line-clamp-1" href="/thi-cong-thiet-ke-can-ho-noxh-hud"
                                        title="Thi Công Thiết Kế Căn Hộ Noxh Hud">Thi Công Thiết Kế Căn Hộ Noxh Hud</a>
                                </h3>
                                <div class="box_tag_event">
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd"
                                                    d="m115.104 101.157c0 47.039 38.13 85.168 85.169 85.168 47.04 0 85.17-38.129 85.17-85.168 0-47.026-38.13-85.157-85.17-85.157-47.038 0-85.169 38.131-85.169 85.157zm280.896 194.843c55.228 0 100 44.771 100 100 0 55.228-44.771 100-100 100-55.228 0-100-44.772-100-100s44.772-100 100-100zm-27.279 143.225c6.142 5.795 11.964 10.174 20.441 11.67l.184 7.645c.091 3.851 3.286 6.899 7.137 6.809s6.899-3.286 6.809-7.137l-.18-7.443c14.635-2.881 26.773-14.858 26.773-30.318 0-18.214-16.474-31.008-33.885-31.008-9.697 0-19.885-6.53-19.885-17.008 0-10.456 10.199-17.035 19.885-17.035 4.666 0 15.39 3.938 18.027 7.949 2.114 3.216 6.436 4.11 9.653 1.996 3.216-2.114 4.11-6.436 1.996-9.652-4.522-6.879-14.894-11.598-22.81-13.377l-.211-8.853c-.091-3.851-3.286-6.899-7.137-6.809s-6.899 3.286-6.809 7.137l.199 8.346c-14.656 2.861-26.793 14.825-26.793 30.298 0 18.214 16.473 31.008 33.885 31.008 9.697 0 19.885 6.53 19.885 17.008s-10.188 17.008-19.885 17.008c-8.121 0-12.025-3.042-17.709-8.404-2.809-2.643-7.228-2.508-9.871.301-2.643 2.807-2.508 7.226.301 9.869zm-50.043 40.531c-22.55-20.828-36.678-50.642-36.678-83.756 0-41.915 22.632-78.544 56.336-98.35-12.692-14.346-27.582-26.704-44.148-36.537l-93.915 143.015-93.912-143.011c-54.093 32.108-90.361 91.094-90.361 158.557 0 74.348 196.681 94.366 302.678 60.082zm-84.273-226.585-6.423 19.767c-.956 2.944-2.78 5.353-5.145 6.992l7.163 53.425-29.727 45.268-29.727-45.269 7.163-53.425c-2.365-1.639-4.188-4.048-5.145-6.992l-6.423-19.767c-1.386-4.265-.708-8.542 1.928-12.171s6.495-5.594 10.98-5.594h42.448c4.485 0 8.343 1.966 10.98 5.594 2.637 3.63 3.314 7.907 1.928 12.172z"
                                                    fill-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Chủ đầu tư:</b> Bean Company</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg enable-background="new 0 0 511.856 511.856" height="512"
                                                viewBox="0 0 511.856 511.856" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m460.442 481.856v-367.829h-47.635v367.829h-30v-481.856l-253.828 71.168v101.95h108.429v308.738h-30v-278.738h-125.993v278.738h-61.503v30h472.033v-30zm-165.991-171.019v-60.341h30v60.341zm30 49.861v60.341h-30v-60.341zm-30-160.063v-60.341h30v60.341zm-165.04 49.861h30v60.341h-30zm0 110.202h30v60.341h-30z" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Loại dự án:</b> Thiết kế căn hộ</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="512" viewBox="0 0 64 64" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m17.14 49.84h37.88a2.98964 2.98964 0 0 0 2.99-2.98v-37.88a2.99174 2.99174 0 0 0 -2.99-2.99h-37.88a2.98964 2.98964 0 0 0 -2.98 2.99v37.88a2.98752 2.98752 0 0 0 2.98 2.98zm31.99-25.76a1.00011 1.00011 0 0 1 0 2h-5a1.00648 1.00648 0 0 1 -.7-1.71l4.2-4.15a1.94225 1.94225 0 0 0 -.02-2.61 1.223 1.223 0 0 0 -1.71.10005c-.61716.6149-1.40313 2.09534-2.43007 1.22992-.97012-.9243.39826-1.86755.93008-2.56a3.32509 3.32509 0 0 1 5.72989 2.55006c.121 2.23284-2.26081 3.71638-3.55994 5.15zm-27.09-1.69a1.00016 1.00016 0 0 1 2 .00007v1.57993a5.03509 5.03509 0 0 1 7.57 1.0602 5.12916 5.12916 0 0 1 4.25-2.3502 5.499 5.499 0 0 1 5.32 5.68v11.16a1 1 0 0 1 -2 0v-11.16c-.117-4.89349-6.46749-4.82032-6.57.0001v11.1599a1.00017 1.00017 0 0 1 -2-.00006v-11.15994a3.48993 3.48993 0 0 0 -3.25-3.68 3.488 3.488 0 0 0 -3.25 3.65l-.07 11.2a1 1 0 0 1 -2-.01z" />
                                                <path
                                                    d="m60.92279 56.99982a1.00657 1.00657 0 0 0 -.21607-1.08948l-3.382-3.382a.99989.99989 0 0 0 -1.41407 1.41406l1.6753 1.6753h-47.25685a1.94927 1.94927 0 0 1 -1.94678-1.9468v-47.25684l1.6753 1.6753a1.00007 1.00007 0 0 0 1.414-1.41411l-3.382-3.382a1.00751 1.00751 0 0 0 -1.08947-.21605c-.12234.05073-3.70715 3.59809-3.70715 3.59809a1.00005 1.00005 0 0 0 1.41411 1.414l1.67521-1.67523v47.25684a3.95124 3.95124 0 0 0 3.94678 3.94678h47.25684l-1.6753 1.67532a.99989.99989 0 1 0 1.41407 1.414s3.54736-3.58481 3.59808-3.70718z" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Quy mô:</b> 800m2</span>
                                    </div>
                                    <div class="item_tag">
                                        <span class="icon_cont">
                                            <svg height="511pt" viewBox="0 1 511.99995 511" width="511pt"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m128.378906 272.066406h-22.960937c-6.023438 0-11.460938 3.585938-13.84375 9.109375l-63.5625 148.003907 150.953125-77.097657c-18.070313-25.003906-35.949219-52.582031-50.585938-80.015625zm0 0" />
                                                <path
                                                    d="m420.421875 281.175781c-2.378906-5.523437-7.820313-9.109375-13.839844-9.109375h-22.960937c-27.640625 51.796875-67.910156 105.324219-93.527344 134.773438-18.015625 20.664062-50.195312 20.640625-68.183594 0-1.839844-2.113282-11.445312-13.234375-24.675781-30.335938l-27.214844 13.90625 102.945313 102.746094 195.0625-101.125zm0 0" />
                                                <path
                                                    d="m9.441406 472.433594-8.210937 19.121094c-4.25 9.894531 3.03125 20.945312 13.839843 20.945312h221.050782c1.382812-1.027344 1.398437-.964844 8.820312-4.8125l-103.097656-102.882812zm0 0" />
                                                <path
                                                    d="m510.769531 491.554688-30.84375-71.820313-178.9375 92.765625h195.941407c10.785156 0 18.097656-11.03125 13.839843-20.945312zm0 0" />
                                                <path
                                                    d="m271.058594 135.824219c0-8.289063-6.757813-15.027344-15.058594-15.027344-8.304688 0-15.058594 6.738281-15.058594 15.027344 0 8.285156 6.753906 15.027343 15.058594 15.027343 8.300781 0 15.058594-6.742187 15.058594-15.027343zm0 0" />
                                                <path
                                                    d="m267.363281 386.117188c5.070313-5.820313 124.160157-143.578126 124.160157-238.273438 0-195.265625-271.046876-197.648438-271.046876 0 0 94.695312 119.089844 232.453125 124.160157 238.273438 6.003906 6.886718 16.734375 6.878906 22.726562 0zm-56.539062-250.292969c0-24.859375 20.265625-45.082031 45.175781-45.082031 24.90625 0 45.171875 20.222656 45.171875 45.082031 0 24.855469-20.265625 45.078125-45.171875 45.078125-24.910156 0-45.175781-20.222656-45.175781-45.078125zm0 0" />
                                            </svg>
                                        </span>
                                        <span class="title_event"><b>Vị trí:</b> Phước Long - Nha Trang</span>
                                    </div>
                                </div>
                                <a class="button-more" href="/thi-cong-thiet-ke-can-ho-noxh-hud"
                                    title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                                fill="#2B6377"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(16) rotate(90)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="box_see_project" data-aos="zoom-in">
                <a href="du-an-thi-cong" title="Xem tất cả" class="theme-btn btn-style-three exp-btn-title">
                    <span class="btn-wrap">
                        <span class="text-one">
                            Xem tất cả
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                        fill="white"></path>
                                </svg>
                            </i>
                        </span>
                        <span class="text-two">
                            Xem tất cả
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                        fill="white"></path>
                                </svg>
                            </i>
                        </span>
                    </span>
                </a>
            </div>
        </section> --}}
        {{-- <script>
            var swiperduan = new Swiper('.project-swiper', {
                spaceBetween: 1,
                slidesPerView: 3,
                centeredSlides: true,
                roundLengths: true,
                loop: true,
                loopAdditionalSlides: 30,
                speed: 1000,
                pagination: {
                    el: '.project-swiper .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.project-swiper .swiper-button-next',
                    prevEl: '.project-swiper .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1.2,
                        spaceBetween: 14
                    },
                    500: {
                        slidesPerView: 1.3,
                        spaceBetween: 14
                    },
                    767: {
                        slidesPerView: 1.4,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 1.5,
                        spaceBetween: 20
                    },
                    1600: {
                        slidesPerView: 2.4,
                        spaceBetween: 20
                    }
                }

            });
        </script>
        <section class="section-index section_video_thongke">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12" data-aos="fade-right">
                        <div class="section-title-thongke">
                            <div class="sub_title">Video dự án thực tế</div>
                            <h2>
                                Giải Pháp Xây Dựng Hiện Đại
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12" data-aos="fade-left">
                        <div class="desc">
                            Giải pháp xây dựng hiện đại không chỉ dừng lại ở kỹ thuật thi công tiên tiến, mà còn là sự
                            kết hợp giữa công nghệ, vật liệu bền vững và quy trình tối ưu. Chúng tôi mang đến công trình
                            an toàn, tiết kiệm chi phí, thân thiện môi trường và phù hợp với nhu cầu phát triển lâu dài
                            của khách hàng.
                        </div>
                    </div>
                </div>
                <div class="box-video-thongke">
                    <div class="iframe-video-thongke" data-aos="fade-down" data-aos-duration="500">
                    </div>
                    <div class="box_thongke">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-6 item" data-aos="fade-right" data-aos-duration="500">
                                <div class="icon_tk">
                                    <img width="64" height="64" loading="lazy" class="lazyload duration-300"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/thong_ke1.png?1762572535707"
                                        alt="Căn hộ sang trọng" />
                                </div>
                                <div class="content">
                                    <span class="num "><span class="counter">500</span>+</span>
                                    <span class="title">Căn hộ sang trọng</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6 item" data-aos="fade-right" data-aos-duration="1000">
                                <div class="icon_tk">
                                    <img width="64" height="64" loading="lazy" class="lazyload duration-300"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/thong_ke2.png?1762572535707"
                                        alt="Khách hàng hài lòng" />
                                </div>
                                <div class="content">
                                    <span class="num "><span class="counter">1500</span>+</span>
                                    <span class="title">Khách hàng hài lòng</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6 item" data-aos="fade-right" data-aos-duration="1500">
                                <div class="icon_tk">
                                    <img width="64" height="64" loading="lazy" class="lazyload duration-300"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/thong_ke3.png?1762572535707"
                                        alt="Văn phòng cả nước" />
                                </div>
                                <div class="content">
                                    <span class="num "><span class="counter">8</span>+</span>
                                    <span class="title">Văn phòng cả nước</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6 item" data-aos="fade-right" data-aos-duration="2000">
                                <div class="icon_tk">
                                    <img width="64" height="64" loading="lazy" class="lazyload duration-300"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/thong_ke4.png?1762572535707"
                                        alt="Năm kinh nghiệm" />
                                </div>
                                <div class="content">
                                    <span class="num "><span class="counter">30</span>+</span>
                                    <span class="title">Năm kinh nghiệm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg_pos">
                <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/service-one_shadow.png?1762572535707"
                    alt="icon" />
            </div>
        </section>
        <script>
            $(document).ready(function() {
                $('.iframe-video-thongke').html(
                    `<video id="video" style="width=100%" class="film video-js" data-setup="{'fluid': true, 'controls': false}" muted="" playsinline="" autoplay="" loop=""><source src="https://www.dropbox.com/scl/fi/7hm06r0psaf657i8q893a/contruction-video.mp4?rlkey=j73eqiccqmgpwfalcd02kjugj&st=yr4z7nd0&raw=1" type="video/mp4"></video>`
                );
                setTimeout(function() {
                    $('.counter').counterUp({
                        delay: 10,
                        time: 1500
                    });
                }, 500);

            });
        </script> --}}
        {{-- <div class="section-index section_services">
            <div class="container">
                <div class="section-title-project" data-aos="fade-right">
                    <div class="sub_title">Dịch vụ của chúng tôi</div>
                    <h2>
                        <a href="/dich-vu" title="Chúng Tôi Cung Cấp Các Dịch Vụ">Chúng Tôi Cung Cấp Các Dịch Vụ</a>
                    </h2>
                </div>
                <div class="desc" data-aos="fade-right">
                    Chuyên thi công và phát triển công trình uy tín, chuyên cung cấp giải pháp xây dựng hiện đại, bền
                    vững và tối ưu chi phí. Với đội ngũ kỹ sư giàu kinh nghiệm và công nghệ tiên tiến, chúng tôi cam kết
                    tạo nên những công trình chất lượng, an toàn và thẩm mỹ.
                </div>
            </div>
            <div class="property-card-wrap10" data-aos="fade-left">
                <div class="property-card8 index_car1">
                    <div class="property-card-thumb">
                        <img width="440" height="400" class="lazyload"
                            data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/ser_1.jpg?1762572535707"
                            alt="Kiến trúc xây dựng"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                    </div>
                    <div class="property-card-details">
                        <div class="box-icon">
                            <img width="64" height="64" class="lazyload"
                                data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/icon_ser_1.png?1762572535707"
                                alt="Kiến trúc xây dựng"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </div>
                        <h3 class="property-card-title">
                            <a href="/kien-truc-xay-dung" title="Kiến trúc xây dựng">Kiến trúc xây dựng</a>
                        </h3>
                        <p class="property-card-text">Tập trung vào thiết kế sáng tạo và tính toàn vẹn về cấu trúc, tạo
                            ra không gian chức năng và đẹp mắt đáp ứng nhu cầu của bạn.</p>
                        <a class="button-more" href="/kien-truc-xay-dung" title="Xem chi tiết">
                            <span>Xem chi tiết</span>
                            <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                        fill="#2B6377"></path>
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="16" height="16" fill="white"
                                            transform="translate(16) rotate(90)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="bg_pos">
                            <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/service-one_shadow.png?1762572535707"
                                alt="icon" />
                        </div>
                    </div>
                </div>
                <div class="property-card8 index_car2">
                    <div class="property-card-thumb">
                        <img width="440" height="400" class="lazyload"
                            data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/ser_2.jpg?1762572535707"
                            alt="Lắp đặt sàn gỗ"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                    </div>
                    <div class="property-card-details">
                        <div class="box-icon">
                            <img width="64" height="64" class="lazyload"
                                data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/icon_ser_2.png?1762572535707"
                                alt="Lắp đặt sàn gỗ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </div>
                        <h3 class="property-card-title">
                            <a href="/lap-dat-san-go" title="Lắp đặt sàn gỗ">Lắp đặt sàn gỗ</a>
                        </h3>
                        <p class="property-card-text">Đảm bảo vật liệu chất lượng cao và tay nghề thủ công chính xác để
                            mang lại vẻ đẹp và độ bền cho không gian của bạn.</p>
                        <a class="button-more" href="/lap-dat-san-go" title="Xem chi tiết">
                            <span>Xem chi tiết</span>
                            <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                        fill="#2B6377"></path>
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="16" height="16" fill="white"
                                            transform="translate(16) rotate(90)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="bg_pos">
                            <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/service-one_shadow.png?1762572535707"
                                alt="icon" />
                        </div>
                    </div>
                </div>
                <div class="property-card8 index_car3">
                    <div class="property-card-thumb">
                        <img width="440" height="400" class="lazyload"
                            data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/ser_3.jpg?1762572535707"
                            alt="Thiết kế nội thất"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                    </div>
                    <div class="property-card-details">
                        <div class="box-icon">
                            <img width="64" height="64" class="lazyload"
                                data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/icon_ser_3.png?1762572535707"
                                alt="Thiết kế nội thất"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </div>
                        <h3 class="property-card-title">
                            <a href="/thiet-ke-noi-that" title="Thiết kế nội thất">Thiết kế nội thất</a>
                        </h3>
                        <p class="property-card-text">Biến đổi không gian bằng những khái niệm sáng tạo, tính thẩm mỹ
                            phù hợp và bố cục chức năng phản ánh</p>
                        <a class="button-more" href="/thiet-ke-noi-that" title="Xem chi tiết">
                            <span>Xem chi tiết</span>
                            <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                        fill="#2B6377"></path>
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="16" height="16" fill="white"
                                            transform="translate(16) rotate(90)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="bg_pos">
                            <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/service-one_shadow.png?1762572535707"
                                alt="icon" />
                        </div>
                    </div>
                </div>
                <div class="property-card8 index_car4">
                    <div class="property-card-thumb">
                        <img width="440" height="400" class="lazyload"
                            data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/ser_4.jpg?1762572535707"
                            alt="Bảo trì công trình"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                    </div>
                    <div class="property-card-details">
                        <div class="box-icon">
                            <img width="64" height="64" class="lazyload"
                                data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/icon_ser_4.png?1762572535707"
                                alt="Bảo trì công trình"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </div>
                        <h3 class="property-card-title">
                            <a href="/bao-tri-cong-trinh" title="Bảo trì công trình">Bảo trì công trình</a>
                        </h3>
                        <p class="property-card-text">Làm mới ngôi nhà của bạn bằng tư duy hiện đại nhưng vẫn giữ được
                            nét đặc trưng, ​​nâng cao cả sự thoải mái và giá trị.</p>
                        <a class="button-more" href="/bao-tri-cong-trinh" title="Xem chi tiết">
                            <span>Xem chi tiết</span>
                            <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                        fill="#2B6377"></path>
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="16" height="16" fill="white"
                                            transform="translate(16) rotate(90)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div class="bg_pos">
                            <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/service-one_shadow.png?1762572535707"
                                alt="icon" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="box_see_service" data-aos="zoom-in">
                <a href="/dich-vu" title="Xem tất cả" class="theme-btn btn-style-three exp-btn-title">
                    <span class="btn-wrap">
                        <span class="text-one">
                            Xem tất cả
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                        fill="white"></path>
                                </svg>
                            </i>
                        </span>
                        <span class="text-two">
                            Xem tất cả
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                        fill="white"></path>
                                </svg>
                            </i>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const bozcar1 = document.querySelector('.index_car1');
                const bozcar2 = document.querySelector('.index_car2');
                const bozcar3 = document.querySelector('.index_car3');
                const bozcar4 = document.querySelector('.index_car4');
                if (window.innerWidth <= 768) {
                    bozcar1.setAttribute('data-aos', 'fade-left');
                    bozcar2.setAttribute('data-aos', 'fade-right');
                    bozcar3.setAttribute('data-aos', 'fade-left');
                    bozcar4.setAttribute('data-aos', 'fade-right');
                }
                AOS.init({
                    once: true,
                    duration: 800
                });
            });
        </script> --}}
        <section class=" section_product_tab section_product_tab_1">
            <div class="container">
                <div class="wrap_tab_index not-dqtab e-tabs ajax-tab-1" data-section="ajax-tab-1">
                    <div class="section-title-tab">
                        <h2 data-aos="fade-right">
                            <a href=" /san-pham-noi-bat" title="Sản Phẩm Nổi Bật">Sản Phẩm Nổi Bật</a>
                        </h2>
                        <div class="desc" data-aos="fade-left">
                            Chuyên cung cấp các dòng Cửa Cuốn hiện đại, Motor cửa cuốn và Phụ kiện đồng bộ cho mọi công
                            trình.
                            Sản phẩm đảm bảo độ bền, an toàn và vận hành êm ái, giúp bảo vệ tài sản và nâng cao trải nghiệm
                            sử dụng.
                        </div>
                        <div class="tab_big" data-aos="fade-right">
                            <div class="tab_ul">
                                <ul class="tabs tabs-title tab-pc tabtitle1 ajax clearfix">
                                    @foreach ($categoryhome as $cate)
                                        <li class="tab-link tab_cate has-content" data-tab="taba1-{{ $cate->id }}"
                                            data-url="">

                                            <span>{{ languageName($cate->name) }}</span>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="grad-left">
                                    <a href="javascript:;" class="prev button" title="prev" style="display: none;">
                                        <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                                    fill="#2B6377"></path>
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(16) rotate(90)"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="grad-right">
                                    <a href="javascript:;" class="next button" title="next" style="display: none;">
                                        <svg class="ml-2" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M16 8L9.88755 1.78545C9.81555 1.69996 9.72694 1.63053 9.62729 1.58151C9.52764 1.5325 9.4191 1.50495 9.30848 1.50061C9.19786 1.49626 9.08755 1.51521 8.98448 1.55627C8.88141 1.59733 8.7878 1.6596 8.70952 1.73919C8.63124 1.81877 8.56999 1.91395 8.52961 2.01874C8.48923 2.12353 8.47059 2.23568 8.47486 2.34815C8.47913 2.46061 8.50623 2.57097 8.55444 2.67228C8.60265 2.7736 8.67094 2.86369 8.75502 2.9369L12.8514 7.11804L0.803214 7.11804C0.590189 7.11804 0.38589 7.20408 0.235258 7.35722C0.0846259 7.51037 1.63555e-06 7.71809 1.62608e-06 7.93467C1.61661e-06 8.15125 0.0846259 8.35897 0.235258 8.51211C0.38589 8.66526 0.590189 8.7513 0.803214 8.7513L12.996 8.7513L8.75502 13.0631C8.67094 13.1363 8.60265 13.2264 8.55444 13.3277C8.50623 13.429 8.47913 13.5394 8.47486 13.6519C8.47059 13.7643 8.48923 13.8765 8.52961 13.9813C8.56999 14.0861 8.63124 14.1812 8.70952 14.2608C8.78779 14.3404 8.88141 14.4027 8.98448 14.4437C9.08755 14.4848 9.19786 14.5037 9.30848 14.4994C9.41909 14.495 9.52763 14.4675 9.62728 14.4185C9.72694 14.3695 9.81554 14.3 9.88755 14.2146L16 8Z"
                                                    fill="#2B6377"></path>
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(16) rotate(90)"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-products" data-aos="fade-left">
                        @foreach ($categoryhomehot as $cate)
                            <div class="taba1-{{ $cate->id }} tab-content">
                                <div class="row">
                                    @foreach ($cate->product as $pro)
                                        @php
                                            $img = json_decode($pro->images);
                                        @endphp
                                        <div class="col-xl-3 col-md-3 col-sm-6 col-xs-6 col-6">
                                            <div class="item_product_main">
                                                <form  method="post"
                                                    class="variants product-action item-product-main duration-300"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                        
                                                            href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'type'=>$pro['type_slug'] ? $pro['type_slug'] : 'loai','id'=>$pro['slug']])}}"
                                                            title="{{ $pro['name'] }}">
                                                            <img class="lazyload duration-300 image1"
                                                                src="{{ $img[0] }}" data-src="{{ $img[0] }}"
                                                                alt="{{ $pro['name'] }}">
                                                            <img class="lazyload duration-300 image2"
                                                                src="{{ isset($img[1]) ? $img[1] : $img[0] }}"
                                                                data-src="{{ isset($img[1]) ? $img[1] : $img[0] }}"
                                                                alt="{{ $pro['name'] }}">
                                                        </a>
                                                        <div class="badge">
                                                            <span class="new">HOT</span>
                                                        </div>
                                                        <a href="javascript:void(0)" class="setWishlist btn-views ">
                                                            <img width="100" height="25"
                                                                src="{{ $setting->logo }}" alt="logo" />
                                                        </a>
                                                        @if ($pro['discount'] > 0)
                                                            <span class="flash-sale"
                                                                style="animation: shake 3s infinite;">-
                                                                {{ number_format(100 - ($pro['discount'] / $pro['price']) * 100, 0, ',', '.') }}%
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="/gang-tay-chong-dau-safety-jogger-superpro"
                                                                title="{{ $pro['name'] }}">{{ $pro['name'] }}</a>
                                                        </h3>
                                                        @php
                                                            $phantram =
                                                                $pro['price'] > 0
                                                                    ? 100 - ($pro['discount'] / $pro['price']) * 100
                                                                    : 0;
                                                        @endphp
                                                        @if ($pro['price'] > 0)
                                                            @if ($pro['discount'] > 0 && $phantram > 0)
                                                                <div class="product-price-cart">

                                                                    <span class="price">{{number_format($pro['discount'], 0, ',', '.')}}đ</span>
                                                                    <span class="compare-price">{{ number_format($pro['price'], 0, ',', '.') }}đ</span>
                                                                </div>
                                                            @else
                                                                <div class="product-price-cart">
                                                                    <span class="price">{{ number_format($pro['price'], 0, ',', '.') }}đ</span>

                                                                </div>
                                                            @endif
                                                        @else
                                                            <div class="product-price-cart">
                                                                <span class="price">Đang cập nhật ...</span>
                                                            </div>
                                                        @endif
                                                        <div class="product-button">
                                                            <input class="hidden" type="hidden" name="variantId"
                                                                value="1" />
                                                          
                                                                <button class="btn-cart btn-views" title="Xem chi tiết"
                                                                    type="button"
                                                                    onclick="window.location.href='{{route('detailProduct',['cate'=>$pro['cate_slug'],'type'=>$pro['type_slug'] ? $pro['type_slug'] : 'loai','id'=>$pro['slug']])}}'">
                                                                    Xem chi tiết
                                                                </button>
                                                           

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                var tabUl = $('.section_product_tab_1 .tab_ul ul');
                var prevBtn = $(".section_product_tab_1 .tab_ul .prev");
                var nextBtn = $(".section_product_tab_1 .tab_ul .next");

                function checkOverflow() {
                    if (tabUl.get(0).scrollWidth > tabUl.get(0).clientWidth) {
                        prevBtn.show();
                        nextBtn.show();
                    } else {
                        prevBtn.hide();
                        nextBtn.hide();
                    }
                }

                prevBtn.click(function() {
                    var leftPos = tabUl.scrollLeft();
                    tabUl.animate({
                        scrollLeft: leftPos - 345
                    }, 500);
                });

                nextBtn.click(function() {
                    var leftPos = tabUl.scrollLeft();
                    tabUl.animate({
                        scrollLeft: leftPos + 150
                    }, 500);
                });

                checkOverflow();
                $(window).resize(checkOverflow);
            });
        </script>
        <style>
            @keyframes shake {

                0%,
                100% {
                    transform: translateX(0);
                }

                10%,
                30%,
                50%,
                70%,
                90% {
                    transform: translateX(-2px);
                }

                20%,
                40%,
                60%,
                80% {
                    transform: translateX(2px);
                }
            }
        </style>
        <section class="section-index section_choose">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="box_img_choose" data-aos="fade-right">
                            <img width="680" height="700" class="lazyload" data-src="{{ $taisao->image }}"
                                alt="Banner" src="{{ $taisao->image }}" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="section-title-choose" data-aos="fade-left">
                            <div class="sub_title">Tại sao chọn chúng tôi</div>

                        </div>
{{-- 
                        <ul class="why-feature-list" data-aos="fade-left">
                            <li class="why-feature-list-wrap">
                                <div class="why-feature-list-details">
                                    <h3 class="feature-title"><span class="number">01</span>
                                        An toàn là ưu tiên hàng đầu
                                    </h3>
                                    <p class="feature-text">
                                        Trang bị hệ thống cảm biến tự động, đảo chiều khi gặp vật cản.
                                        Công nghệ chống sao chép mã rolling code giúp bảo vệ tài sản.
                                        Nguồn dự phòng giúp cửa vẫn vận hành khi mất điện.
                                    </p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="why-feature-list-details">
                                    <h3 class="feature-title"><span class="number">02</span>
                                        Chất lượng vượt trội

                                    </h3>
                                    <p class="feature-text">
                                        Sử dụng vật liệu cao cấp, motor mạnh mẽ, bền bỉ theo thời gian.
                                        Sản xuất theo tiêu chuẩn chất lượng ISO, quy trình kiểm định nghiêm ngặt.
                                        Độ bền cao, chống ăn mòn, thích hợp môi trường Việt Nam.
                                    </p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="why-feature-list-details">
                                    <h3 class="feature-title"><span class="number">03</span>
                                        Thiết kế hiện đại – sang trọng
                                    </h3>
                                    <p class="feature-text">


                                        Kiểu dáng tinh gọn, thẩm mỹ cao, phù hợp mọi không gian.
                                        Cấu trúc tăng khả năng chống chịu, vận hành ổn định.
                                        Đa dạng mẫu mã, màu sắc, tùy chỉnh theo nhu cầu.
                                    </p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="why-feature-list-details">
                                    <h3 class="feature-title"><span class="number">04</span>
                                        Vận hành êm ái
                                    </h3>
                                    <p class="feature-text">
                                        Hoạt động nhẹ nhàng, hạn chế tiếng ồn tối đa.
                                        Motor thế hệ mới cho tuổi thọ cao, tiết kiệm điện.
                                        Đóng/mở nhanh, mượt, dễ sử dụng cho mọi thành viên.
                                    </p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="why-feature-list-details">
                                    <h3 class="feature-title"><span class="number">05</span>
                                        Bảo hành – bảo trì toàn diện
                                    </h3>
                                    <p class="feature-text">
                                        Hỗ trợ kỹ thuật 24/7, đội ngũ chuyên môn giàu kinh nghiệm.
                                        Bảo hành chính hãng, thay thế linh kiện nhanh chóng.
                                        Dịch vụ hậu mãi uy tín, đảm bảo cửa hoạt động ổn định lâu dài.
                                    </p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="why-feature-list-details">
                                    <h3 class="feature-title"><span class="number">06</span>
                                        Giá cả hợp lý & tiết kiệm
                                    </h3>
                                    <p class="feature-text">
                                        Quy trình sản xuất tối ưu, giá cạnh tranh.
                                        Chất lượng tương xứng với chi phí, mang lại giá trị lâu dài.
                                        Nhiều lựa chọn theo ngân sách, hỗ trợ tư vấn miễn phí.
                                    </p>
                                </div>
                            </li>
                        </ul> --}}
                        {!! $taisao->description !!}
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section-index section_team">
            <div class="img_top_pos spin">
                <img width="119" height="119"
                    src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/icon_team_top.png?1762572535707"
                    alt="Icon" />
            </div>
            <div class="img_bot_pos jump">
                <img width="101" height="101"
                    src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/icon_team_bot.png?1762572535707"
                    alt="Icon" />
            </div>
            <div class="container">
                <div class="section-title-team" data-aos="fade-left">
                    <div class="sub_title">Đội ngũ nhân viên</div>
                    <h2>
                        <a href="/doi-ngu" title="Đội Ngũ Nhân Viên Chuyên Nghiệp">Đội Ngũ Nhân Viên Chuyên
                            Nghiệp</a>
                    </h2>
                </div>
                <div class="desc" data-aos="fade-left">
                    Đội ngũ nhân viên có kiến thức chuyên môn, kinh nghiệm dày dạn qua nhiều năm, khả năng thích ứng
                    linh hoạt để mang đến những giải pháp hoàn hảo nhất cho khách hàng. Sự tận tâm và chuyên nghiệp của
                    chúng tôi cam kết sẽ đáp ứng và vượt qua mong đợi của khách hàng.
                </div>
                <div class="swiper_team swiper-container control-top" data-aos="fade-right">
                    <div class="swiper-wrapper ">
                        <div class=" swiper-slide">
                            <div class="th-team team-card style6">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/doingu_1.jpg?1762572535707"
                                            alt="Hoàng Quân" width="416" height="442" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <h3 class="box-title title">
                                                <a href="/hoang-quan" title="Hoàng Quân">Hoàng Quân</a>
                                            </h3>
                                            <span class="team-desig desig">Kiến trúc sư</span>
                                        </div>
                                        <div class="media-body">
                                            <a class="icon-btn" href="tel:18006750" title="1800 6750">
                                                <img width="16" height="16"
                                                    src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/phone-team.svg?1762572535707"
                                                    alt="1800 6750">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="th-social">
                                        <a href="https://www.facebook.com/sapo.vn" title="Facebook"
                                            target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 155.139 155.139"
                                                style="enable-background:new 0 0 155.139 155.139;"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z" />
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Instagram" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 409.61 409.61"
                                                style="enable-background:new 0 0 409.61 409.61;"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M307.205,0h-204.8C46.09,0,0.005,46.085,0.005,102.4v204.81c0,56.3,46.085,102.4,102.4,102.4h204.8 c56.315,0,102.4-46.1,102.4-102.4V102.4C409.605,46.085,363.52,0,307.205,0z M375.47,307.21c0,37.632-30.612,68.265-68.265,68.265 h-204.8c-37.637,0-68.265-30.633-68.265-68.265V102.4c0-37.642,30.628-68.265,68.265-68.265h204.8 c37.653,0,68.265,30.623,68.265,68.265V307.21z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <circle cx="315.755" cy="93.865" r="25.6" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M204.805,102.4c-56.566,0-102.4,45.839-102.4,102.4c0,56.54,45.834,102.41,102.4,102.41c56.55,0,102.4-45.87,102.4-102.41 C307.205,148.239,261.355,102.4,204.805,102.4z M204.805,273.075c-37.699,0-68.265-30.566-68.265-68.275 s30.566-68.265,68.265-68.265s68.265,30.556,68.265,68.265S242.504,273.075,204.805,273.075z" />
                                                    </g>
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Youtube" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938 C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527 C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991 c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764 c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861 C204.394,157.263,202.325,160.684,199.021,162.41z" />
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Tiktok" target="_blank">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="th-team team-card style6">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/doingu_2.jpg?1762572535707"
                                            alt="Quang Hiệp" width="416" height="442" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <h3 class="box-title title">
                                                <a href="/quang-hiep" title="Quang Hiệp">Quang Hiệp</a>
                                            </h3>
                                            <span class="team-desig desig">Kỹ sư xây dựng</span>
                                        </div>
                                        <div class="media-body">
                                            <a class="icon-btn" href="tel:19006750" title="1900 6750">
                                                <img width="16" height="16"
                                                    src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/phone-team.svg?1762572535707"
                                                    alt="1900 6750">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="th-social">
                                        <a href="#" title="Facebook" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 155.139 155.139"
                                                style="enable-background:new 0 0 155.139 155.139;"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z" />
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Instagram" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 409.61 409.61"
                                                style="enable-background:new 0 0 409.61 409.61;"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M307.205,0h-204.8C46.09,0,0.005,46.085,0.005,102.4v204.81c0,56.3,46.085,102.4,102.4,102.4h204.8 c56.315,0,102.4-46.1,102.4-102.4V102.4C409.605,46.085,363.52,0,307.205,0z M375.47,307.21c0,37.632-30.612,68.265-68.265,68.265 h-204.8c-37.637,0-68.265-30.633-68.265-68.265V102.4c0-37.642,30.628-68.265,68.265-68.265h204.8 c37.653,0,68.265,30.623,68.265,68.265V307.21z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <circle cx="315.755" cy="93.865" r="25.6" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M204.805,102.4c-56.566,0-102.4,45.839-102.4,102.4c0,56.54,45.834,102.41,102.4,102.41c56.55,0,102.4-45.87,102.4-102.41 C307.205,148.239,261.355,102.4,204.805,102.4z M204.805,273.075c-37.699,0-68.265-30.566-68.265-68.275 s30.566-68.265,68.265-68.265s68.265,30.556,68.265,68.265S242.504,273.075,204.805,273.075z" />
                                                    </g>
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Youtube" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938 C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527 C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991 c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764 c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861 C204.394,157.263,202.325,160.684,199.021,162.41z" />
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Tiktok" target="_blank">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="th-team team-card style6">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/doingu_3.jpg?1762572535707"
                                            alt="Văn Mạnh" width="416" height="442" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <h3 class="box-title title">
                                                <a href="/van-manh" title="Văn Mạnh">Văn Mạnh</a>
                                            </h3>
                                            <span class="team-desig desig">Kỹ sư công trình</span>
                                        </div>
                                        <div class="media-body">
                                            <a class="icon-btn" href="tel:18006750" title="1800 6750">
                                                <img width="16" height="16"
                                                    src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/phone-team.svg?1762572535707"
                                                    alt="1800 6750">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="th-social">
                                        <a href="#" title="Facebook" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 155.139 155.139"
                                                style="enable-background:new 0 0 155.139 155.139;"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z" />
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Instagram" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 409.61 409.61"
                                                style="enable-background:new 0 0 409.61 409.61;"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M307.205,0h-204.8C46.09,0,0.005,46.085,0.005,102.4v204.81c0,56.3,46.085,102.4,102.4,102.4h204.8 c56.315,0,102.4-46.1,102.4-102.4V102.4C409.605,46.085,363.52,0,307.205,0z M375.47,307.21c0,37.632-30.612,68.265-68.265,68.265 h-204.8c-37.637,0-68.265-30.633-68.265-68.265V102.4c0-37.642,30.628-68.265,68.265-68.265h204.8 c37.653,0,68.265,30.623,68.265,68.265V307.21z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <circle cx="315.755" cy="93.865" r="25.6" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M204.805,102.4c-56.566,0-102.4,45.839-102.4,102.4c0,56.54,45.834,102.41,102.4,102.41c56.55,0,102.4-45.87,102.4-102.41 C307.205,148.239,261.355,102.4,204.805,102.4z M204.805,273.075c-37.699,0-68.265-30.566-68.265-68.275 s30.566-68.265,68.265-68.265s68.265,30.556,68.265,68.265S242.504,273.075,204.805,273.075z" />
                                                    </g>
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Youtube" target="_blank">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938 C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527 C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991 c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764 c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861 C204.394,157.263,202.325,160.684,199.021,162.41z" />
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                        </a>
                                        <a href="#" title="Tiktok" target="_blank">
                                            <svg enable-background="new 0 0 512 512" height="512"
                                                viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="box_see_team" data-aos="zoom-in">
                    <a href="/doi-ngu" title="Xem tất cả" class="theme-btn btn-style-three exp-btn-title">
                        <span class="btn-wrap">
                            <span class="text-one">
                                Xem tất cả
                                <i>
                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                            fill="white"></path>
                                    </svg>
                                </i>
                            </span>
                            <span class="text-two">
                                Xem tất cả
                                <i>
                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                            fill="white"></path>
                                    </svg>
                                </i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                function runSwiperTeam() {
                    var swiper_team = null;

                    function initSwiperTeam() {
                        swiper_team = new Swiper('.swiper_team', {
                            slidesPerView: 3,
                            spaceBetween: 20,
                            watchOverflow: true,
                            slidesPerGroup: 1,
                            grabCursor: true,
                            loop: true,
                            navigation: {
                                nextEl: '.section_team .swiper-button-next',
                                prevEl: '.section_team .swiper-button-prev',
                            },
                            breakpoints: {
                                280: {
                                    slidesPerView: 1,
                                    spaceBetween: 14
                                },
                                450: {
                                    slidesPerView: 1.3,
                                    spaceBetween: 14
                                },
                                640: {
                                    slidesPerView: 2,
                                    spaceBetween: 14
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 14
                                },
                                992: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 2.5,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }

                    function toggleSwiperTeam() {
                        initSwiperTeam();
                    }
                    toggleSwiperTeam();
                    $(window).on('resize', function() {
                        toggleSwiperTeam();
                    });
                }
                runSwiperTeam();
            });
        </script> --}}
        <section class="section-index section_feedback">
            <div class="bg_pos">
                <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/service-one_shadow.png?1762572535707"
                    alt="icon" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12" data-aos="fade-left">
                        <div class="section-title-feedback">
                            <div class="sub_title">Phản hồi từ khách hàng</div>
                            <h2>
                                Khách Hàng Nói Gì?
                            </h2>
                        </div>
                        <div class="desc">
                            Những phản hồi chân thật từ Khách Hàng là minh chứng cho chất lượng và sự uy tín, luôn đồng
                            hành cùng Khách Hàng trong quá trình xây dựng
                        </div>
                        <div class="swiper_feedback swiper-container control-top">
                            <div class="swiper-wrapper">
                                @foreach ($ReviewCus as $rw)
                                    <div class=" swiper-slide">
                                        <div class="feedback-item">
                                            <span class="star-rating" style="--rating: 5"></span>
                                            <div class="block-content">
                                                {!! languageName( $rw->content ) !!}
                                            </div>
                                            <div class="author-detail">
                                                <div class="avatar">
                                                    <img data-src="{{ $rw->avatar}}"
                                                        alt="{!!languageName($rw->name)!!}<" width="200" height="200"
                                                        class="lazyload"
                                                        src="{{ $rw->avatar }}" />
                                                </div>
                                                <div class="author-content">
                                                    <b>{!!languageName($rw->name)!!}</b>
                                                    <span>{!!languageName($rw->position)!!}</span>
                                                </div>
                                                <div class="maker-quote"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                             
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12" data-aos="fade-right">
                        <div class="banner_feedback">
                            <img width="541" height="515" class="lazyload"
                                data-src="{{asset('frontend/images/onedor.png')}}"
                                alt="Banner"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                function runSwiperFeedback() {
                    var swiper_feedback = null;

                    function initSwiperFeedback() {
                        swiper_feedback = new Swiper('.swiper_feedback', {
                            slidesPerView: 1,
                            spaceBetween: 20,
                            watchOverflow: true,
                            slidesPerGroup: 1,
                            grabCursor: true,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            loop: true,
                            pagination: {
                                el: '.swiper_feedback .swiper-pagination',
                                clickable: true,
                            },
                            breakpoints: {
                                200: {
                                    slidesPerView: 1,
                                    spaceBetween: 14
                                },
                                768: {
                                    slidesPerView: 1,
                                    spaceBetween: 14
                                },
                                992: {
                                    slidesPerView: 1,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 1,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 1,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }

                    function destroySwiperFeedback() {
                        if (swiper_feedback) {
                            swiper_feedback.destroy(true, true);
                            swiper_feedback = null;
                        }
                    }

                    function toggleSwiperFeedback() {
                        if ($(window).width() <= 0 && swiper_feedback) {
                            destroySwiperFeedback();
                        } else if ($(window).width() > 0 && !swiper_feedback) {
                            initSwiperFeedback();
                        }
                    }
                    toggleSwiperFeedback();
                    $(window).on('resize', function() {
                        toggleSwiperFeedback();
                    });
                }
                runSwiperFeedback();
            });
        </script>
        {{-- <section class="section-index section_faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="banner_faq" data-aos="fade-right">
                            <img width="505" height="570" class="lazyload"
                                data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/img_faq_index.jpg?1762572535707"
                                alt="Banner"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="section-title-faq" data-aos="fade-left">
                            <div class="sub_title">Câu Hỏi Thường Gặp</div>
                            <h2>Giải Đáp Thắc Mắc Cùng Bean Construction</h2>
                        </div>
                        <div class="desc" data-aos="fade-left">
                            Nếu bạn không tìm thấy câu trả lời phù hợp, đừng ngần ngại liên hệ với chúng tôi qua
                            hotline, email, hoặc fanpage để được hỗ trợ tốt nhất!
                        </div>
                        <ul class="faq" data-aos="fade-left">
                            <li class="active">
                                <h3>
                                    Bean Construction có đảm bảo tiến độ thi công không?
                                    <span class="icon_nex">
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                </h3>
                                <div class="content-faq">
                                    Chúng tôi cam kết thi công đúng tiến độ đã thống nhất trong hợp đồng. Mỗi dự án đều
                                    có kế hoạch chi tiết, đội ngũ giám sát và quy trình kiểm soát chặt chẽ để đảm bảo
                                    bàn giao đúng hạn.
                                </div>
                            </li>
                            <li>
                                <h3>
                                    Công trình có được bảo hành sau khi hoàn thành không?
                                    <span class="icon_nex">
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                </h3>
                                <div class="content-faq" style="display:none">
                                    Có. Bean Construction cung cấp chính sách bảo hành rõ ràng cho từng hạng mục thi
                                    công. Trong thời gian bảo hành, mọi sự cố kỹ thuật sẽ được xử lý nhanh chóng và miễn
                                    phí theo quy định.
                                </div>
                            </li>
                            <li>
                                <h3>
                                    Có hỗ trợ tư vấn thiết kế và lựa chọn vật liệu không?
                                    <span class="icon_nex">
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                </h3>
                                <div class="content-faq" style="display:none">
                                    Chúng tôi có đội ngũ kiến trúc sư và kỹ sư giàu kinh nghiệm, sẵn sàng tư vấn giải
                                    pháp thiết kế, lựa chọn vật liệu phù hợp với nhu cầu, ngân sách và đảm bảo tính thẩm
                                    mỹ – bền vững cho công trình.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="testimonial-one_circle"></div>
            <div class="counter-one">
                <div class="counter-one_pattern lazyload"
                    data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/bg_step.png?1762572535707"></div>
                <div class="container">
                    <div class="row clearfix">
                        <div class="counter-block_one col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="counter-block_one-inner" data-aos="fade-up" data-aos-duration="500">
                                <div class="counter-block_one-outline"></div>
                                <div class="counter-block_one-count te-number count-box counted">
                                    <span class="count-text">Lấy yêu cầu</span>
                                    <sup>01</sup>
                                </div>
                                <div class="counter-block_one-text te-title">Tổng hợp yêu cầu khách hàng và đưa ra tư
                                    vấn, giải pháp từ đội ngũ chuyên nghiệp</div>
                            </div>
                        </div>
                        <div class="counter-block_one col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="counter-block_one-inner" data-aos="fade-up" data-aos-duration="1000">
                                <div class="counter-block_one-outline"></div>
                                <div class="counter-block_one-count te-number count-box counted">
                                    <span class="count-text">Lên ý tưởng</span>
                                    <sup>02</sup>
                                </div>
                                <div class="counter-block_one-text te-title">Từ yêu cầu khách hàng, đội ngũ chúng tôi
                                    đưa ra ý tưởng và thiết kế tối ưu nhất.</div>
                            </div>
                        </div>
                        <div class="counter-block_one col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="counter-block_one-inner" data-aos="fade-up" data-aos-duration="500">
                                <div class="counter-block_one-outline"></div>
                                <div class="counter-block_one-count te-number count-box counted">
                                    <span class="count-text">Đưa giải pháp</span>
                                    <sup>03</sup>
                                </div>
                                <div class="counter-block_one-text te-title">Chúng tôi còn tư vấn và cung cấp giải
                                    pháp phù hợp cho từng yêu cầu.</div>
                            </div>
                        </div>
                        <div class="counter-block_one col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="counter-block_one-inner" data-aos="fade-up" data-aos-duration="1000">
                                <div class="counter-block_one-outline"></div>
                                <div class="counter-block_one-count te-number count-box counted">
                                    <span class="count-text">Thi công ngay</span>
                                    <sup>04</sup>
                                </div>
                                <div class="counter-block_one-text te-title">Sau khi tư vấn và đề xuất giải pháp tối
                                    ưu, chúng tôi sẽ tiến hành thi công.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('.faq li h3').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var $li = $this.closest('li');
                $li.siblings().removeClass('active').find('.content-faq').slideUp();
                $li.toggleClass('active').find('.content-faq').slideToggle();
                return false;
            });
        </script>
        <section class="section-index section_tu_van_bao_gia lazyload"
            data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/bg_tu_van_bao_gia.jpg?1762572535707">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12" data-aos="fade-right">
                        <div class="section-title-baogia">
                            <div class="sub_title">Tư vấn báo giá</div>
                            <h2>
                                Liên Hệ Ngay Với Chúng Tôi!
                            </h2>
                        </div>
                        <div class="desc">
                            Đội ngũ chuyên viên sẵn sàng tư vấn chi tiết và cung cấp báo giá nhanh chóng, giúp bạn lựa
                            chọn giải pháp phù hợp và tối ưu chi phí.
                        </div>
                        <div class="box_see_baogia" data-aos="zoom-in">
                            <a href="javascript:;" title="Liên hệ ngay"
                                class="theme-btn btn-style-three exp-btn-title btn_bao_gia">
                                <span class="btn-wrap">
                                    <span class="text-one">
                                        Liên hệ ngay
                                        <i>
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                    fill="white"></path>
                                            </svg>
                                        </i>
                                    </span>
                                    <span class="text-two">
                                        Liên hệ ngay
                                        <i>
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                    fill="white"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12" data-aos="fade-left"
                        data-aos-duration="1000">
                        <div class="banner_feedback">
                            <img width="483" height="455" class="lazyload"
                                data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/img_tu_van_bao_gia.png?1762572535707"
                                alt="Banner"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('.btn_bao_gia').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#section_form').offset().top - 60
                }, 800);
            });
        </script> --}}
        <section class="section-index section_blog">
            <div class="container">
                <div class="section-title-blog" data-aos="fade-right">
                   
                    <h2>
                        <a href="tin-tuc" title="Cập Nhật Những Tin Tức Xây Dựng">Tin tức mới nhất</a>
                    </h2>
                </div>
                <div class="desc" data-aos="fade-right">
                    Mang đến cho bạn thông tin mới nhất về xu hướng, công nghệ và giải pháp trong lĩnh vực nhà cửa.
                </div>
                <div class="swiper_blogs swiper-container" data-aos="fade-left">
                    <div class="swiper-wrapper">
                        @foreach ($hotnews as $blog)
                    
                            <div class="swiper-slide">
                                <div class="item_blog">
                                    <a class="image-blog"
                                        href="{{route('detailBlog',['slug'=>$blog->slug])}}"
                                        title="{{$blog->name}}">
                                        @if($blog->cate)
                                            <div class="danhmucblog">{{languageName($blog->cate->name)}}</div>
                                        @endif
                                        <img src="{{$blog->image}}"
                                            data-src="{{$blog->image}}"
                                            alt="8 l&#253; do việc x&#226;y nh&#224; gặp trắc trở x&#226;y m&#227;i kh&#244;ng xong d&#249; đ&#227; chuẩn bị kỹ"
                                            class="lazyload duration-300" />
                                        <span class="user_date"> {{date('d/m/Y', strtotime($blog->created_at))}}</span>
                                    </a>
                                    <div class="blog_content">
                                        <h3><a href="{{route('detailBlog',['slug'=>$blog->slug])}}"
                                                title="{{$blog->name}}">{{languageName($blog->title)}}</a>
                                        </h3>
                                        <p class="update_date clearfix">
                                            <span class="user_name">Đăng bởi: <b>ONE DOOR</b></span>
                                        </p>
                                        <div class="conten_info_blog">
                                            <p class="blog_description">{!!languageName($blog->description)!!}</p>
                                            <a href="{{route('detailBlog',['slug'=>$blog->slug])}}"
                                                title="Đọc tiếp" class="read_more">Đọc tiếp >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="box_see_blog" data-aos="zoom-in">
                    <a href="{{route('allListBlog')}}" title="Xem tất cả" class="theme-btn btn-style-three exp-btn-title">
                        <span class="btn-wrap">
                            <span class="text-one">
                                Xem tất cả
                                <i>
                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                            fill="white"></path>
                                    </svg>
                                </i>
                            </span>
                            <span class="text-two">
                                Xem tất cả
                                <i>
                                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                            fill="white"></path>
                                    </svg>
                                </i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                function runSwiperBlogs() {
                    var blogs_pro = null;

                    function initSwiperBlogs() {
                        blogs_pro = new Swiper('.swiper_blogs', {
                            slidesPerView: 4,
                            spaceBetween: 20,
                            slidesPerGroup: 1,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            loop: true,
                            grabCursor: true,
                            navigation: {
                                nextEl: '.section_blog .swiper-button-next',
                                prevEl: '.section_blog .swiper-button-prev',
                            },
                            breakpoints: {
                                200: {
                                    slidesPerView: 1,
                                    spaceBetween: 14
                                },
                                640: {
                                    slidesPerView: 2,
                                    spaceBetween: 14
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                992: {
                                    slidesPerView: 2,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                },
                                1500: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }

                    function destroySwiperBlogs() {
                        if (blogs_pro) {
                            blogs_pro.destroy(true, true);
                            blogs_pro = null;
                        }
                    }

                    function toggleSwiperBlogs() {
                        if ($(window).width() <= 0 && blogs_pro) {
                            destroySwiperBlogs();
                        } else if ($(window).width() > 0 && !blogs_pro) {
                            initSwiperBlogs();
                        }
                    }
                    toggleSwiperBlogs();
                    $(window).resize(toggleSwiperBlogs);
                }
                runSwiperBlogs();
            });
        </script>
        <section class="section-index section_form" id="section_form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-md-4 col-sm-12 col-12">
                        <div class="box_info_form" data-aos="fade-right">
                            <div class="item_contact">
                                <div class="icon_contact ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                        viewBox="0 0 70 70" fill="none">
                                        <g clip-path="url(#clip0_389_16083)">
                                            <path
                                                d="M68.5417 32.0833C67.7367 32.0833 67.0833 31.43 67.0833 30.625C67.0833 15.3475 54.6525 2.91667 39.375 2.91667C38.57 2.91667 37.9167 2.26333 37.9167 1.45833C37.9167 0.653333 38.57 0 39.375 0C56.2625 0 70 13.7375 70 30.625C70 31.43 69.3467 32.0833 68.5417 32.0833ZM58.3333 30.625C58.3333 20.1717 49.8283 11.6667 39.375 11.6667C38.57 11.6667 37.9167 12.32 37.9167 13.125C37.9167 13.93 38.57 14.5833 39.375 14.5833C48.2213 14.5833 55.4167 21.7788 55.4167 30.625C55.4167 31.43 56.07 32.0833 56.875 32.0833C57.68 32.0833 58.3333 31.43 58.3333 30.625ZM64.8492 64.9571L67.7017 61.6758C69.1833 60.1942 70 58.2225 70 56.1283C70 54.0342 69.1833 52.0596 67.5588 50.4554L60.4246 44.9925C57.3679 41.9358 52.395 41.9329 49.3325 44.9838L44.8642 49.3413C34.1308 44.9692 25.3867 36.2163 20.6733 25.1242L25.0133 20.6763C28.0729 17.6167 28.0729 12.6379 25.1388 9.72125L19.425 2.30417C16.4587 -0.662083 11.2204 -0.592083 8.4 2.23708L4.97583 5.22375C1.76458 8.4175 0 12.7546 0 17.43C0 40.0312 29.9688 70 52.57 70C57.2454 70 61.5796 68.2354 64.8492 64.9571ZM17.2346 4.2175L22.9483 11.6346C24.8704 13.5567 24.8704 16.6863 22.9367 18.6229L17.9142 23.7738C17.5117 24.1879 17.3892 24.8004 17.605 25.3371C22.6479 37.8933 32.5179 47.7604 44.6892 52.4037C45.22 52.6079 45.8208 52.4825 46.2262 52.0887L51.3771 47.0662C51.3771 47.0662 51.3858 47.0575 51.3887 47.0517C53.2525 45.185 56.3588 45.0654 58.5054 47.1771L65.6396 52.64C67.5617 54.5621 67.5617 57.6888 65.5725 59.6867L62.7171 62.9679C60.0688 65.6221 56.4638 67.0833 52.57 67.0833C31.6867 67.0833 2.91667 38.3133 2.91667 17.43C2.91667 13.5363 4.37792 9.93125 6.96208 7.35L10.3892 4.36042C11.3692 3.38042 12.6613 2.90208 13.9329 2.90208C15.155 2.90208 16.3567 3.34542 17.2375 4.22042L17.2346 4.2175Z"
                                                fill="#FFB703"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_389_16083">
                                                <rect width="70" height="70" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="content_contact">
                                    <h3> Gọi Trung tâm hỗ trợ 24/7 </h3>
                                    <a class="all_sup" title="{{$setting->phone1}}" href="tel:{{$setting->phone1}}">
                                        {{$setting->phone1}}
                                    </a>
                                </div>
                            </div>
                            <div class="item_contact item_contact_mob">
                                <div class="icon_contact ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                        viewBox="0 0 70 70" fill="none">
                                        <g clip-path="url(#clip0_392_16117)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M33.0304 0.224684C31.5221 0.548024 30.5569 1.07384 27.5532 3.20843C26.0006 4.31175 24.5101 5.36394 24.2409 5.5466L23.7516 5.87869L17.9942 5.88088C12.2749 5.8832 12.2334 5.88525 11.6928 6.19136C11.3878 6.36418 11.0135 6.73851 10.8407 7.04353C10.5413 7.57209 10.5324 7.69746 10.5302 11.4308L10.528 15.274L5.43522 18.8786C2.63413 20.861 0.267528 22.577 0.175926 22.6917C-0.0831556 23.016 -0.0614173 66.8527 0.198075 67.5801C0.505965 68.4431 1.06665 69.1205 1.81792 69.5369L2.52995 69.9314H35.0007H67.4714L68.1915 69.5325C68.9487 69.1129 69.6795 68.2029 69.8222 67.5018C69.8646 67.2934 69.9528 67.0899 70.0183 67.0494C70.0851 67.0081 70.1374 57.2555 70.1374 44.8274C70.1374 31.0635 70.0888 22.709 70.009 22.7583C69.9384 22.8019 69.8308 22.7561 69.7697 22.6564C69.7088 22.5569 67.3672 20.8531 64.5661 18.8704L59.4733 15.2654L59.4711 11.4266C59.4689 7.69773 59.46 7.57209 59.1606 7.04353C58.9878 6.73851 58.6135 6.36418 58.3085 6.19136C57.7679 5.88525 57.7266 5.8832 52.0029 5.88088L46.2414 5.87869L43.7314 4.10271C39.8144 1.33115 39.3074 1.0022 38.4602 0.683239C36.6343 -0.00390927 34.8139 -0.157718 33.0304 0.224684ZM33.9069 2.41834C33.266 2.52552 31.9256 3.01566 31.4424 3.31959C30.671 3.80466 28.1725 5.61892 28.0884 5.75468C28.043 5.82824 30.8892 5.87869 35.0838 5.87869C38.9733 5.87869 42.13 5.85695 42.0987 5.83056C41.3607 5.20658 38.3609 3.18 37.8235 2.94224C36.6547 2.42545 35.1048 2.21804 33.9069 2.41834ZM12.8522 19.8632V31.5237L21.0037 38.2861C25.4869 42.0055 29.532 45.3743 29.9929 45.7721C31.6871 47.2354 33.0389 47.7764 35.0007 47.7766C37.0862 47.7767 38.2306 47.2747 40.5011 45.364C40.9754 44.9649 44.9152 41.6909 49.2562 38.0885L57.1491 31.5386V19.8708V8.20291H35.0007H12.8522V19.8632ZM35.2741 12.7998C31.3113 13.2116 28.5228 14.4579 25.6522 17.1004C23.6329 18.9594 21.8714 21.7746 21.1679 24.2674C20.9151 25.163 20.8586 25.7078 20.8566 27.2752C20.8534 29.5764 21.0567 30.4915 22.0109 32.4705C23.7378 36.052 26.6585 38.1383 31.2682 39.0833C37.8571 40.4339 43.6384 39.2824 47.4434 35.8612C48.904 34.5482 49.299 33.5972 48.6383 32.9851C48.3445 32.7128 48.0537 32.6252 47.5573 32.6598C47.4328 32.6685 46.8442 33.1583 46.2493 33.7483C44.0126 35.9672 41.1751 37.0979 37.3932 37.2775C34.8054 37.4004 31.9809 37.0225 29.5319 36.2257C25.9157 35.0493 23.3488 31.6392 23.1411 27.7363C23.052 26.0591 23.334 24.7073 24.1217 23.0369C25.8595 19.3512 29.4243 16.3995 33.2917 15.4441C34.8065 15.0699 37.1563 15.0341 38.6792 15.3619C41.964 16.0692 44.6828 18.7386 45.4518 22.0115C45.721 23.1569 45.7243 25.4098 45.4584 26.4603C44.9725 28.3803 43.6202 30.327 42.3835 30.887C41.5323 31.2726 40.166 31.2784 39.7858 30.8982C39.4454 30.5578 39.4439 30.6039 39.8464 29.0089C40.2515 27.4037 41.6999 20.2461 41.6999 19.8493C41.6999 19.6934 41.554 19.3962 41.3759 19.1891C41.1289 18.9021 40.9292 18.8123 40.5378 18.8123C39.8792 18.8123 39.4292 19.3047 39.3 20.1669L39.2068 20.7884L38.5574 20.181C35.3147 17.1477 30.504 18.7747 28.0912 23.7205C27.3607 25.2177 27.0756 26.3716 27.073 27.8419C27.0671 31.0422 28.9787 33.2807 31.9736 33.5804C33.4299 33.7261 35.4777 33.0889 36.7899 32.0814L37.3779 31.6301L37.7967 32.1869C38.0407 32.5116 38.5287 32.9048 38.9665 33.1299C39.6695 33.4912 39.8048 33.5128 41.0846 33.4681C42.272 33.4266 42.5709 33.3644 43.3573 32.9949C44.4411 32.4857 45.2071 31.8205 46.017 30.6855C46.814 29.5688 47.3766 28.338 47.7311 26.9362C47.9824 25.9424 48.0122 25.5264 47.9511 23.8649C47.8765 21.8414 47.6593 20.827 46.9853 19.3545C45.8552 16.8861 43.4968 14.6388 40.9781 13.6305C39.5895 13.0746 36.6916 12.6526 35.2741 12.7998ZM6.81075 20.7471C4.80399 22.157 3.17362 23.3546 3.1877 23.4088C3.20192 23.4629 4.84391 24.8647 6.83659 26.524L10.4596 29.541L10.4966 26.6557C10.5169 25.0688 10.5169 22.5135 10.4966 20.9772L10.4596 18.1841L6.81075 20.7471ZM59.4733 23.8582C59.4733 29.3227 59.483 29.5395 59.7208 29.3679C60.3937 28.8822 66.8552 23.4671 66.8485 23.3943C66.8419 23.3206 60.1583 18.5618 59.6644 18.2791C59.502 18.1862 59.4733 19.0261 59.4733 23.8582ZM33.8 21.1112C32.0898 21.6677 30.2698 23.8582 29.5981 26.1686C29.2756 27.2783 29.3609 28.8339 29.793 29.7174C30.4173 30.9941 31.8593 31.5336 33.5138 31.1096C34.6597 30.8161 35.538 30.2302 36.4585 29.1451C37.6739 27.7124 37.8413 27.3871 38.1654 25.8264L38.4657 24.3812L38.0522 23.4975C37.309 21.9095 36.3379 21.1018 35.0255 20.98C34.6735 20.9474 34.122 21.0063 33.8 21.1112ZM0.0673717 44.9803C0.0673717 57.1995 0.0835045 62.1982 0.103192 56.0886C0.12288 49.979 0.12288 39.9814 0.103192 33.8719C0.0835045 27.7622 0.0673717 32.761 0.0673717 44.9803ZM2.32487 46.0695C2.32487 65.1036 2.33895 66.3304 2.55647 66.1542C5.76048 63.5583 26.5924 46.1659 26.5924 46.0869C26.5924 46.0253 21.2399 41.5288 14.6979 36.0946C8.15593 30.6605 2.69565 26.1204 2.56413 26.0057C2.33636 25.8074 2.32487 26.7742 2.32487 46.0695ZM55.4811 35.9386C48.8112 41.4755 43.3663 46.0475 43.3815 46.0987C43.3965 46.1499 48.8537 50.7151 55.5085 56.2434L67.6081 66.295L67.6431 56.1845C67.6624 50.6237 67.6624 41.5285 67.6431 35.9728L67.6081 25.8716L55.4811 35.9386ZM16.4904 57.6114L4.47436 67.6072L19.7375 67.6419C28.1322 67.6611 41.8719 67.6611 50.2701 67.6419L65.5395 67.6072L54.2691 58.2505C48.0704 53.1044 42.6591 48.604 42.2441 48.2496L41.4896 47.6055L40.6719 48.2273C38.6728 49.7475 36.0066 50.4345 33.6298 50.0417C31.915 49.7584 30.5997 49.1669 28.9243 47.9253L28.5065 47.6158L16.4904 57.6114Z"
                                                fill="#FFB703"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_392_16117">
                                                <rect width="70" height="70" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="content_contact">
                                    <h3> Gửi mail cho chúng tôi </h3>
                                    <a class="all_sup " style="font-size: 25px" title="{{$setting->email}}" href="mailto:{{$setting->email}}">
                                        {{$setting->email}}
                                    </a>
                                </div>
                            </div>
                            <div class="img_contact_form">
                                <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/contact-info-img.png?1762572535707"
                                    width="301" height="420" alt="Banner" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-md-8 col-sm-12 col-12">
                        <div class="box_form_contact" data-aos="fade-left">
                            <div class="section-title-form">
                                <div class="sub_title">Tư vấn miễn phí</div>
                                <h2>
                                    Liên Hệ Ngay Để Được Tư Vấn
                                </h2>
                            </div>
                            <div class="desc">
                                Đội ngũ chuyên viên luôn sẵn sàng hỗ trợ, giải đáp thắc mắc và mang đến giải pháp phù
                                hợp nhất cho bạn.
                            </div>
                            <div id="pagelogin">
                                <form method="post" action="{{route('postcontact')}}" id="contact" accept-charset="UTF-8">
                                    @csrf
                                
                                  
                                    <div id="contact_result"></div>
                                    <div class="group_contact">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input placeholder="Họ và tên" type="text"
                                                    class="form-control  form-control-lg" required value=""
                                                    name="name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input type="number" placeholder="Điện thoại" name="phone"
                                                    class="form-control form-control-lg" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input placeholder="Email" type="email" required id="email1"
                                                    class="form-control form-control-lg" value=""
                                                    name="email">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input placeholder="Địa chỉ" type="text" required id="diachi1"
                                                    class="form-control form-control-lg" value=""
                                                    name="address">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <textarea placeholder="Nội dung " name="mess" id="comment"
                                                    class="form-control content-area form-control-lg" rows="5" Required></textarea>
                                                <div class="box_see_form" data-aos="zoom-in">
                                                    <button type="submit"
                                                        class="theme-btn btn-style-three exp-btn-title">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">
                                                                Gửi thông tin
                                                                <i>
                                                                    <svg width="9" height="9" viewBox="0 0 9 9"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                                            fill="white"></path>
                                                                    </svg>
                                                                </i>
                                                            </span>
                                                            <span class="text-two">
                                                                Gửi thông tin
                                                                <i>
                                                                    <svg width="9" height="9" viewBox="0 0 9 9"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                                            fill="white"></path>
                                                                    </svg>
                                                                </i>
                                                            </span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            document.getElementById('contact').addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                const form = this;

                // Hiển thị loading
                Swal.fire({
                    title: 'Đang gửi...',
                    text: 'Vui lòng chờ trong giây lát',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                fetch(this.action, {
                        method: this.method,
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                text: data.message,
                                confirmButtonText: 'Đóng',
                                confirmButtonColor: '#28a745'
                            });
                            // Reset form
                            form.reset();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Thất bại!',
                                text: data.message,
                                confirmButtonText: 'Thử lại',
                                confirmButtonColor: '#dc3545'
                            });
                        }
                    })
                    .catch(() => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            confirmButtonText: 'Đóng',
                            confirmButtonColor: '#dc3545'
                        });
                    });
            });
        </script>
        <section class="section-index section_brands">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="section-title-brand" data-aos="fade-righ">
                            <div class="sub_title">Đối tác chúng tôi</div>
                            <h2>
                                Đối Tác Lâu Năm Của Chúng Tôi
                            </h2>
                        </div>
                        <div class="desc" data-aos="fade-righ">
                            Chúng tôi tự hào được đồng hành cùng nhiều đối tác uy tín trong và ngoài nước, xây dựng mối
                            quan hệ hợp tác lâu dài dựa trên niềm tin, chất lượng và sự phát triển bền vững.
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <ul class="list_brand" data-aos="fade-left">
                            @foreach ($partner as $item)
                                <li class="item_brand">
                                    <a href="/collections/all" title="{{ $item->name }}" class="img_brand">
                                        <img data-src="{{ $item->image }}"
                                            alt="{{ $item->name }}" width="115" height="115" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </a>
                                </li>
                            @endforeach
                           
                    
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span
                        aria-hidden="true">&times;</span></span></button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>

    </div>
@endsection
