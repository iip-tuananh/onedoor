@extends('layouts.main.master')
@section('title')
    {{ languageName($blog_detail->title) }}
@endsection
@section('description')
    {{ languageName($blog_detail->description) }}
@endsection
@section('image')
    {{ url('' . $blog_detail->image) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <section class="bread-crumb"
        style="background-image: url({{asset('frontend/images/ngang.jpg')}});">

        <div class="container">


        </div>
    </section>

    <section class="blogpage">
        <div class="container layout-article" itemscope itemtype="https://schema.org/Article">

            <div class="bg_blog">


                <article class="article-main">
                    <div class="row row-cus">
                        <div class="col-12">
                            <ul class="breadcrumb mb-3">
                                <li class="home">
                                    <a href="{{ route('home') }}"><span>Trang chủ</span></a>
                                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                                class=""></path>
                                        </svg>&nbsp;</span>
                                </li>

                                <li>
                                    <a href="{{route('allListBlog')}}"><span>Tin tức</span></a>
                                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                                class=""></path>
                                        </svg>&nbsp;</span>
                                </li>
                                <li><strong><span style="color: white">{{ languageName($blog_detail->title) }}</span></strong></li>
                            </ul>
                        </div>
                        <div class="right-content col-lg-12 col-12 order-lg-2 ">

                            <div class="article-details bg-shadow clearfix">
                                <h1 class="article-title">{{ languageName($blog_detail->title) }}</h1>
                                <div class="posts">
                                    <div class="time-post f">

                                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="svg-inline--fa fa-clock fa-w-16">
                                            <path fill="currentColor"
                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                                class=""></path>
                                        </svg>

                                       {{ date('d/m/Y', strtotime($blog_detail->created_at)) }}
                                    </div>
                                    <div class="time-post">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            class="svg-inline--fa fa-user fa-w-14">
                                            <path fill="currentColor"
                                                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                                class=""></path>
                                        </svg>
                                        <span>ONE DOOR</span>
                                    </div>
                                </div>


                               <div class="rte article-content-main">
                                    {!! languageName($blog_detail->content) !!}
                               </div>
                              





                            </div>

                        </div>
                      

                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="blog_related">
                                <div class="title">Tin Tức Liên Quan</div>


                                <div class="blog-swiper swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach ($bloglq as $item)
                                            <div class="swiper-slide">
                                                <div class="item_blog">
                                                    <a class="image-blog" href="{{ route('detailBlog', [$item->slug]) }}"
                                                        title="{{ languageName($item->title) }}">

                                                        <img src="{{ $item->image }}" data-src="{{ $item->image }}"
                                                            alt="{{ languageName($item->title) }}"
                                                            class="lazyload duration-300" />

                                                        <span
                                                            class="user_date">{{ date('d/m/Y', strtotime($item->created_at)) }}</span>
                                                    </a>
                                                    <div class="blog_content">
                                                        <h3><a href="{{ route('detailBlog', [$item->slug]) }}"
                                                                title="{{ languageName($item->title) }}">{{ languageName($item->title) }}</a>
                                                        </h3>
                                                        <p class="update_date clearfix">
                                                            <span class="user_name">Đăng bởi: <b>ONE DOOR</b></span>

                                                        </p>
                                                        <div class="conten_info_blog">
                                                            <p class="blog_description">
                                                                {{ languageName($item->description) }}</p>

                                                            <a href="{{ route('detailBlog', [$item->slug]) }}"
                                                                title="Đọc tiếp" class="read_more">Đọc tiếp >></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </section>



    <script>
        var swiperwish = new Swiper('.blog-swiper', {
            slidesPerView: 1,
            loop: false,
            grabCursor: true,
            spaceBetween: 20,
            roundLengths: true,
            slideToClickedSlide: false,
            navigation: {
                nextEl: '.blog-swiper .swiper-button-next',
                prevEl: '.blog-swiper .swiper-button-prev',
            },
            autoplay: false,
            breakpoints: {
                300: {
                    slidesPerView: 1.3,
                    spaceBetween: 15
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
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1500: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        });
    </script>
@endsection
