<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
      <meta name="theme-color" content="#d70018">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
      <meta name='revisit-after' content='2 days' />
      <meta name="viewport" content="width=device-width">
      <title>@yield('title')</title>
      <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
      <meta http-equiv="Content-Language" content="vi" />
      <link rel="alternate" href="{{ url()->current() }}" hreflang="vi-vn" />
      <meta name="description" content="@yield('description')">
      <meta name="robots" content="index, follow" />
      <meta name="googlebot" content="index, follow">
      <meta name="revisit-after" content="1 days" />
      <meta name="generator" content="@yield('title')" />
      <meta name="rating" content="General">
      <meta name="application-name" content="@yield('title')" />
      <meta name="theme-color" content="#ed3235" />
      <meta name="msapplication-TileColor" content="#ed3235" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-title" content="{{ url()->current() }}" />
      <link rel="apple-touch-icon-precomposed" href="@yield('image')" sizes="700x700">
      <meta property="og:url" content="">
      <meta property="og:title" content="@yield('title')">
      <meta property="og:description" content="@yield('description')">
      <meta property="og:image" content="@yield('image')">
      <meta property="og:site_name" content="{{ url()->current() }}">
      <meta property="og:image:alt" content="@yield('title')">
      <meta property="og:type" content="website" />
      <meta property="og:locale" content="vi_VN" />
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@{{ url() - > current() }}" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <meta name="twitter:url" content="" />
      <meta itemprop="name" content="@yield('title')">
      <meta itemprop="description" content="@yield('description')">
      <meta itemprop="image" content="@yield('image')">
      <meta itemprop="url" content="">
      <link rel="canonical" href="{{ \Request::url() }}">
      <!-- <link rel="amphtml" href="amp/" /> -->
      <link rel="image_src" href="@yield('image')" />
      <link rel="image_src" href="@yield('image')" />
      <link rel="shortcut icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
      <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <link rel="preload" as="script"
        href="{{asset('frontend/js/jquery.js?1762572535707')}}" />
    <script src="{{asset('frontend/js/jquery.js?1762572535707')}}" type="text/javascript">
    </script>
    <link rel="preload" as="script"
        href="{{asset('frontend/js/swiper.js?1762572535707')}}" />
    <script src="{{asset('frontend/js/swiper.js?1762572535707')}}" type="text/javascript">
    </script>
    <link rel="preload" as="script"
        href="{{asset('frontend/js/lazy.js?1762572535707')}}" />
    <script src="{{asset('frontend/js/lazy.js?1762572535707')}}" type="text/javascript">
    </script>
    @yield('js')
    <link rel="preload" as='image' media="screen and (max-width: 480px)"
        href="//bizweb.dktcdn.net/thumb/grande/100/601/974/themes/1047016/assets/slider_1.jpg?1762572535707">
    <link rel="preload" as='image'
        href="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/header_pattent.png?1762572535707">
    <link rel="preload" as='image'
        href="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/footer_pattent.png?1762572535707">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/main.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/index.scss.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/aos_anima.css') }}">
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}">
    <link rel="preload" as='style' type="text/css"
        href="{{ asset('frontend/css/quickviews_popup_cart.scss.css') }}">
    <style>
        :root {
            --mainColor:#cf2025 ;
            --subColor: #000000;
            --textColor: #000000;
            --hover: #000000;
            --colorContact: #cf2025;
            --price: #cf2025;
            --bgFoot: #ffffff;
            --rotate-letter: 7deg;
            --rotate-letter: 8deg;
            --icon-size: 107px;
        }
    </style>
    <link rel="stylesheet"
        href="{{asset('frontend/css/bootstrap-4-3-min.css?1762572535707')}}" type="text/css" media="all" />
    <link href="{{asset('frontend/css/main.scss.css?1762572535707')}}" rel="stylesheet"
        type="text/css" media="all" />
    <link href="{{asset('frontend/css/index.scss.css?1762572535707')}}" rel="stylesheet"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('frontend/css/aos_anima.css?1762572535707')}}">
    <link href="{{asset('frontend/css/quickviews_popup_cart.scss.css?1762572535707')}}"
        rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/blogcss.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/breadcrumb_style.scss.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/contact_style.scss.css')}}">
    @yield('css')



    {{-- <script src="/dist/js/stats.min.js?v=96f2ff2"></script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            awe_lazyloadImage();
            /*Header promotion*/

            function getItemSearch(name, smartjson) {
                return fetch(`https://${window.location.hostname}/search?q=${name}&view=${smartjson}&type=product`)
                    .then(res => res.json())
                    .catch(err => console.error(err));
            }

            var searchRecent = document.querySelector('.search-suggest .search-recent');
            var searchRecentList = localStorage.getItem('search_recent_list');
            var recentList = searchRecentList ? JSON.parse(searchRecentList) : [];

            if (recentList.length > 0) {
                searchRecent.classList.remove('d-none');
                var searchList = searchRecent.querySelector('.search-list');
                recentList.forEach(function(item) {
                    var link = document.createElement('a');
                    link.href = `/search?query=${encodeURIComponent(item)}&type=product`;
                    link.textContent = item;
                    link.title = `Tìm kiếm ${item}`;
                    link.classList.add('search-item');

                    var closeSpan = document.createElement('span');
                    closeSpan.textContent = 'Đóng';
                    closeSpan.title = 'Đóng';
                    closeSpan.classList.add('close');

                    closeSpan.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var index = recentList.indexOf(item);
                        if (index !== -1) {
                            recentList.splice(index, 1);
                            localStorage.setItem('search_recent_list', JSON.stringify(recentList));
                            searchList.removeChild(link);
                            if (recentList.length == 0) {
                                searchRecent.classList.toggle('d-none');
                            }
                        }
                    });

                    link.appendChild(closeSpan);
                    searchList.appendChild(link);
                });
            }

            var searchInput = document.querySelectorAll(
                '.header_tim_kiem input[type="text"], .search-mobile input[type="text"]');
            searchInput.forEach(function(input) {
                input.addEventListener('keyup', function(e) {
                    let term = this.value.trim();
                    let data = '';
                    var resultbox = '';
                    if (term.length > 1) {
                        searchRecent.classList.add('d-none');

                        async function goawaySearch() {
                            data = await getItemSearch(term, 'smartjson');
                            setTimeout(function() {
                                var sizeData = Object.keys(data).length;
                                if (sizeData > 0) {
                                    Object.keys(data).forEach(function(key) {
                                        if (data[key].compare_price !== 0) {
                                            resultbox +=
                                                `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span><span class="compare-price">${data[key].compare_price}</span></div></div></a>`;
                                        } else {
                                            resultbox +=
                                                `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span></div></div></a>`;
                                        }
                                    });
                                    resultbox +=
                                        `<a href="/search?query=${term}&type=product" class="see-all-search" title="Xem tất cả">Xem tất cả kết quả »</a>`;
                                    document.querySelector('.list-search').innerHTML =
                                        resultbox;
                                } else {
                                    document.querySelector('.list-search').innerHTML =
                                        '<div class="not-pro">Không có thấy kết quả tìm kiếm</div>';
                                }
                            }, 200);
                        }

                        goawaySearch();
                    } else {
                        if (recentList.length > 0) {
                            searchRecent.classList.remove('d-none');
                        }
                        document.querySelector('.list-search').innerHTML = '';
                    }
                });
            });


            function getItemSearchCompare(name, smartjsonpro) {
                return fetch(
                        `https://${window.location.hostname}/search?q=name:(*${name}*)&view=${smartjsonpro}&type=product`
                    )
                    .then(res => res.json())
                    .catch(err => console.error(err))
            }
            $('.header_compare input[type="text"]').bind('keyup change', function(e) {
                let termcom = $(this).val().trim();
                let datacom = '';
                var resultboxcom = '';
                if (termcom.length > 1) {
                    async function goawaySearchcom() {
                        datacom = await getItemSearchCompare(termcom, 'smartjsonpro');
                        setTimeout(function() {
                            var sizeDatacom = Object.keys(datacom).length;
                            if (sizeDatacom > 0) {
                                Object.keys(datacom).forEach(function(key) {
                                    if (datacom[key].compare_price != 0 && datacom[key]
                                        .type != '') {
                                        resultboxcom +=
                                            `<div class="product-smart"><a class="image_thumb" href="${datacom[key].url}" title="${datacom[key].name}"><img width="480" height="480" class="lazyload loaded" src="${datacom[key].image}" data-src="${datacom[key].image}" alt="${datacom[key].name}" data-was-processed="true"></a><div class="product-info"><h3 class="product-name"><a href="${datacom[key].url}">${datacom[key].name}</a></h3><div class="price-box"><span class="price">${datacom[key].price}</span><span class="compare-price">${datacom[key].compare_price}</span></div><a href="javascript:void(0)" class="setCompare btn-views js-compare-product-add" data-compare="${datacom[key].alias}" data-type="${datacom[key].type}" tabindex="0" title="So sánh"><svg enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Random" d="m31.648 40h-19.648c-2.209 0-4-1.791-4-4s1.791-4 4-4h19.648c9.021 0 17.541 4.383 22.785 11.725l4.651 6.511-4.916 6.882-6.245-8.743c-3.745-5.244-9.829-8.375-16.275-8.375zm87.18 49.172-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-6.445 0-12.529-3.131-16.275-8.375l-6.245-8.743-4.916 6.882 4.651 6.511c5.244 7.342 13.763 11.725 22.785 11.725h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656zm0-56-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-9.021 0-17.541 4.383-22.787 11.727l-25.639 35.896c-3.748 5.246-9.832 8.377-16.278 8.377h-19.648c-2.209 0-4 1.791-4 4s1.791 4 4 4h19.648c9.021 0 17.541-4.383 22.787-11.727l25.639-35.896c3.748-5.246 9.832-8.377 16.278-8.377h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656z"/> </svg> </a></div></div>`
                                    } else if (datacom[key].compare_price != 0 &&
                                        datacom[key].type == '') {
                                        resultboxcom +=
                                            `<div class="product-smart"><a class="image_thumb" href="${datacom[key].url}" title="${datacom[key].name}"><img width="480" height="480" class="lazyload loaded" src="${datacom[key].image}" data-src="${datacom[key].image}" alt="${datacom[key].name}" data-was-processed="true"></a><div class="product-info"><h3 class="product-name"><a href="${datacom[key].url}">${datacom[key].name}</a></h3><div class="price-box"><span class="price">${datacom[key].price}</span><span class="compare-price">${datacom[key].compare_price}</span></div><a href="javascript:void(0)" class="setCompare btn-views js-compare-product-add" data-compare="${datacom[key].alias}" data-type="default-type" tabindex="0" title="So sánh"><svg enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Random" d="m31.648 40h-19.648c-2.209 0-4-1.791-4-4s1.791-4 4-4h19.648c9.021 0 17.541 4.383 22.785 11.725l4.651 6.511-4.916 6.882-6.245-8.743c-3.745-5.244-9.829-8.375-16.275-8.375zm87.18 49.172-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-6.445 0-12.529-3.131-16.275-8.375l-6.245-8.743-4.916 6.882 4.651 6.511c5.244 7.342 13.763 11.725 22.785 11.725h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656zm0-56-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-9.021 0-17.541 4.383-22.787 11.727l-25.639 35.896c-3.748 5.246-9.832 8.377-16.278 8.377h-19.648c-2.209 0-4 1.791-4 4s1.791 4 4 4h19.648c9.021 0 17.541-4.383 22.787-11.727l25.639-35.896c3.748-5.246 9.832-8.377 16.278-8.377h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656z"/> </svg></a></div></div>`
                                    } else if (datacom[key].compare_price == 0 &&
                                        datacom[key].type != '') {
                                        resultboxcom +=
                                            `<div class="product-smart"><a class="image_thumb" href="${datacom[key].url}" title="${datacom[key].name}"><img width="480" height="480" class="lazyload loaded" src="${datacom[key].image}" data-src="${datacom[key].image}" alt="${datacom[key].name}" data-was-processed="true"></a><div class="product-info"><h3 class="product-name"><a href="${datacom[key].url}">${datacom[key].name}</a></h3><div class="price-box"><span class="price">${datacom[key].price}</span></div><a href="javascript:void(0)" class="setCompare btn-views js-compare-product-add" data-compare="${datacom[key].alias}" data-type="${datacom[key].type}" tabindex="0" title="So sánh"><svg enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Random" d="m31.648 40h-19.648c-2.209 0-4-1.791-4-4s1.791-4 4-4h19.648c9.021 0 17.541 4.383 22.785 11.725l4.651 6.511-4.916 6.882-6.245-8.743c-3.745-5.244-9.829-8.375-16.275-8.375zm87.18 49.172-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-6.445 0-12.529-3.131-16.275-8.375l-6.245-8.743-4.916 6.882 4.651 6.511c5.244 7.342 13.763 11.725 22.785 11.725h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656zm0-56-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-9.021 0-17.541 4.383-22.787 11.727l-25.639 35.896c-3.748 5.246-9.832 8.377-16.278 8.377h-19.648c-2.209 0-4 1.791-4 4s1.791 4 4 4h19.648c9.021 0 17.541-4.383 22.787-11.727l25.639-35.896c3.748-5.246 9.832-8.377 16.278-8.377h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656z"/> </svg></a></div></div>`
                                    } else {
                                        resultboxcom +=
                                            `<div class="product-smart"><a class="image_thumb" href="${datacom[key].url}" title="${datacom[key].name}"><img width="480" height="480" class="lazyload loaded" src="${datacom[key].image}" data-src="${datacom[key].image}" alt="${datacom[key].name}" data-was-processed="true"></a><div class="product-info"><h3 class="product-name"><a href="${datacom[key].url}">${datacom[key].name}</a></h3><div class="price-box"><span class="price">${datacom[key].price}</span></div><a href="javascript:void(0)" class="setCompare btn-views js-compare-product-add" data-compare="${datacom[key].alias}" data-type="default-type" tabindex="0" title="So sánh"><svg enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Random" d="m31.648 40h-19.648c-2.209 0-4-1.791-4-4s1.791-4 4-4h19.648c9.021 0 17.541 4.383 22.785 11.725l4.651 6.511-4.916 6.882-6.245-8.743c-3.745-5.244-9.829-8.375-16.275-8.375zm87.18 49.172-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-6.445 0-12.529-3.131-16.275-8.375l-6.245-8.743-4.916 6.882 4.651 6.511c5.244 7.342 13.763 11.725 22.785 11.725h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656zm0-56-16-16c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l9.172 9.172h-9.992c-9.021 0-17.541 4.383-22.787 11.727l-25.639 35.896c-3.748 5.246-9.832 8.377-16.278 8.377h-19.648c-2.209 0-4 1.791-4 4s1.791 4 4 4h19.648c9.021 0 17.541-4.383 22.787-11.727l25.639-35.896c3.748-5.246 9.832-8.377 16.278-8.377h9.992l-9.172 9.172c-1.563 1.563-1.563 4.094 0 5.656.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.562 1.563-4.094 0-5.656z"/> </svg></a></div></div>`
                                    }
                                });
                                $('.list-compare').html(resultboxcom);
                            } else {
                                $('.list-compare').html(
                                    '<div class="not-pro">Không có thấy kết quả tìm kiếm</div>'
                                );
                            }
                        }, 500);
                    }
                    goawaySearchcom();
                    setTimeout(function() {
                        beanComprare.Compare.compareProduct();
                    }, 1000);
                } else {
                    $('.list-compare').html('');
                }
            });

        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    
    <!-- SweetAlert2 CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="opacity_menu"></div>
    @include('layouts.header.index')

    @yield('content')
    @include('layouts.footer.index')
    <div class="popup-search">
        <div class="search-header">
            <div class="list-top-item header_tim_kiem">
                <form action="{{ route('search_result') }}" method="get" class="header-search-form input-group search-bar" role="search">
                    <input name="keywordsearch" id="search-input-ajax" required class="input-group-field auto-search search-auto form-control"
                        placeholder="Tìm kiếm..." autocomplete="off" type="text">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                    <div class="search-results-ajax" style="display: none; position: absolute; top: 100%; left: 0; right: 0; background: white; border: 1px solid #ddd; border-radius: 4px; max-height: 400px; overflow-y: auto; z-index: 1000; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"></div>
                   
                </form>
            </div>
        </div>
        <div class="close-popup-search">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <script>
        const header = document.querySelector('header.header');
        let headerHeight = header.offsetHeight;
        let resizeWindow = window.innerWidth;
        let offsetStickyHeader = header.offsetHeight;
        let offsetStickyDown = 0;
        let resizeTimer;

        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content-mb');

        const handleResize = () => {
            if (resizeTimer) clearTimeout(resizeTimer);

            resizeTimer = setTimeout(() => {
                const newWidth = window.innerWidth;

                if (resizeWindow !== newWidth) {
                    header.classList.remove('hSticky');
                    header.style.minHeight = '';

                    headerHeight = header.offsetHeight;
                    header.style.minHeight = `${headerHeight}px`;

                    resizeWindow = newWidth;
                }
            }, 200);
        };

        const handleScroll = () => {
            const scrollTop = window.scrollY;

            if (scrollTop > offsetStickyHeader && scrollTop > offsetStickyDown) {
                header.classList.add('hSticky');
            }

            if (scrollTop <= offsetStickyDown && scrollTop <= offsetStickyHeader) {
                header.classList.remove('hSticky');
            }

            offsetStickyDown = scrollTop;
        };

        const handleTabClick = (tabLink) => {
            const tabId = tabLink.dataset.tab;

            tabLinks.forEach((link) => link.classList.remove('active'));
            tabLink.classList.add('active');

            tabContents.forEach((tabContent) => tabContent.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
        };

        const initializeTabs = () => {
            if (window.innerWidth <= 991) {
                const tabMenu1 = document.getElementById('tab-menu-1');
                const tabLinkMenu1 = document.querySelector('.tab-link[data-tab="tab-menu-1"]');

                tabMenu1.classList.add('active');
                tabLinkMenu1.classList.add('active');

                tabLinks.forEach((tabLink) => {
                    tabLink.addEventListener('click', () => handleTabClick(tabLink));
                });
            }
        };

        window.addEventListener('resize', handleResize);
        window.addEventListener('scroll', handleScroll);

        tabLinks.forEach((tabLink) => {
            tabLink.addEventListener('click', () => handleTabClick(tabLink));
        });

        document.addEventListener('DOMContentLoaded', initializeTabs);
    </script>
    <link rel="preload" as="style"
        href="{{asset('frontend/css/ajaxcart.scss.css?1762572535707')}}" type="text/css">
    <link href="{{asset('frontend/css/ajaxcart.scss.css?1762572535707')}}"
        rel="stylesheet" type="text/css" media="all" />
    <div class="backdrop__body-backdrop___1rvky"></div>

    <div id="popup-cart-desktop" class="popup-cart">
        <div class="header-popcart">
            <div class="top-cart-header">
                <span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="check-circle"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="svg-inline--fa fa-check-circle fa-w-16">
                        <path fill="currentColor"
                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z"
                            class=""></path>
                    </svg>
                    Bạn đã thêm [<a class="cart-popup-name" href="#"></a>] vào giỏ hàng
                </span>
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng">
                Giỏ hàng của bạn hiện có <span class="count_item_pr"></span> sản phẩm
            </a>
            <a title="Đóng" class="cart_btn-close" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    width="512" height="512" x="0" y="0" viewBox="0 0 365.696 365.696"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                            fill="#ffffff" data-original="#000000" style="" class="" />
                    </g>
                </svg>
            </a>
        </div>
        <div class="cartPopupContainer">
        </div>
    </div>
    <div id="popup-cart-mobile" class="popup-cart-mobile">
        <div class="header-popcart">
            <div class="top-cart-header">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="682.66669pt"
                        viewBox="-21 -21 682.66669 682.66669" width="682.66669pt">
                        <path
                            d="m322.820312 387.933594 279.949219-307.273438 36.957031 33.671875-314.339843 345.023438-171.363281-162.902344 34.453124-36.238281zm297.492188-178.867188-38.988281 42.929688c5.660156 21.734375 8.675781 44.523437 8.675781 68.003906 0 148.875-121.125 270-270 270s-270-121.125-270-270 121.125-270 270-270c68.96875 0 131.96875 26.007812 179.746094 68.710938l33.707031-37.113282c-58.761719-52.738281-133.886719-81.597656-213.453125-81.597656-85.472656 0-165.835938 33.285156-226.273438 93.726562-60.441406 60.4375-93.726562 140.800782-93.726562 226.273438s33.285156 165.835938 93.726562 226.273438c60.4375 60.441406 140.800782 93.726562 226.273438 93.726562s165.835938-33.285156 226.273438-93.726562c60.441406-60.4375 93.726562-140.800782 93.726562-226.273438 0-38.46875-6.761719-75.890625-19.6875-110.933594zm0 0" />
                    </svg>
                    Mua hàng thành công
                </span>
            </div>
            <div class="media-content bodycart-mobile">
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng"> Giỏ hàng của bạn hiện có <span
                    class="count_item_pr"></span> sản phẩm </a>
            <a title="Đóng" class="cart_btn-close iconclose" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                    style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z" />
                        </g>
                    </g>
                </svg>
            </a>
            <div class="bottom-action">
                <div class="cart_btn-close btn btn-extent">
                    Tiếp tục mua hàng
                </div>
                <a href="/cart" class="checkout btn btn-primary" title="Xem giỏ hàng">
                    Xem giỏ hàng
                </a>
            </div>
            <div class="bottom-action2">
                <a href="/checkout" class="checkout btn btn-primary" title="Thanh toán ngay">
                    Thanh toán ngay
                </a>
            </div>
        </div>
    </div>

    {{-- giỏ hàng --}}
    {{-- end giỏ hàng --}}
    {{-- 
    <div id="quick-view-product" class="quickview-product" style="display:none;">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product"></div>
        <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
                <div class="row">
                    <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-5">
                        <div class="image-block large-image col_large_default">
                            <span class="view_full_size">
                                <a class="img-product" title="Ảnh sản phẩm" href="javascript:;">
                                    <img src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/logo.png?1762572535707"
                                        id="product-featured-image-quickview"
                                        class="img-responsive product-featured-image-quickview" alt="quickview" />
                                </a>
                            </span>
                            <div class="loading-imgquickview" style="display:none;"></div>
                        </div>
                        <div class="more-view-wrapper clearfix">
                            <div class="thumbs_quickview owl_nav_custome1 swiper-container"
                                id="thumbs_list_quickview">
                                <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper"
                                    id="thumblist_quickview"></ul>
                                <div class="swiper-button-prev">
                                </div>
                                <div class="swiper-button-next">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-7 details-pro style_product style_border">
                        <div class="box-product-info">
                            <div class="head-qv group-status">
                                <h3 class="qwp-name title-product">abc</h3>
                                <div class="vend-qv group-status">
                                    <div class="left_vend">
                                        <div class="first_status ">Thương hiệu:
                                            <span class="vendor_ status_name"></span>
                                        </div>
                                        <span class="line_tt">|</span>
                                        <div class="top_sku first_status">Mã sản phẩm:
                                            <span class="sku_ status_name"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quickview-info">
                                <span class="prices price-box">
                                    <span class="price product-price"></span>
                                    <del class="old-price"></del>
                                </span>
                            </div>
                            <div class="product-description product-summary">
                                <div class="rte">
                                </div>
                            </div>
                            <form action="/cart/add" method="post" enctype="multipart/form-data"
                                class="quick_option variants form-ajaxtocart form-product">
                                <span class="price-product-detail d-none" style="opacity: 0;">
                                    <span class=""></span>
                                </span>
                                <select name='variantId' class="d-none" style="display:none"></select>
                                <div class="form_product_content">
                                    <div class="count_btn_style quantity_wanted_p">
                                        <div class=" soluong1 clearfix">
                                            <div class="input_number_product">
                                                <a class="btn_num num_1 button button_qty" href="javascript:;"
                                                    onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">-</a>
                                                <input type="text" id="quantity-detail" name="quantity"
                                                    value="1" maxlength="2"
                                                    class="form-control prd_quantity"
                                                    onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                    onchange="if(this.value == 0)this.value=1;">
                                                <a class="btn_num num_2 button button_qty" href="javascript:;"
                                                    onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
                                            </div>
                                        </div>
                                        <div class="button_actions clearfix">
                                            <button type="submit"
                                                class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail btn btn-primary">
                                                <span class="btn-content text_1">Thêm vào giỏ hàng</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                    class="svg-inline--fa fa-times fa-w-10">
                    <path fill="currentColor"
                        d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                        class=""></path>
                </svg>
            </a>
        </div>
    </div> --}}

    <link rel="preload" as="script"
        href="{{asset('frontend/js/quickview.js?1762572535707')}}" />
    <script src="{{asset('frontend/js/waypoints.js?1762572535707')}}" type="text/javascript">
    </script>
    <script src="{{asset('frontend/js/counterup.js?1762572535707')}}" type="text/javascript">
    </script>
    <link rel="preload" as="script"
        href="{{asset('frontend/js/main.js?1762572535707')}}" />
    <script src="{{asset('frontend/js/main.js?1762572535707')}}" type="text/javascript">
    </script>
    <script src="{{asset('frontend/js/index.js?1762572535707')}}" type="text/javascript">
    </script>
    <link rel="preload" as="script"
        href="{{asset('frontend/js/aos_anima.js?1762572535707')}}" />
    <script src="{{asset('frontend/js/aos_anima.js?1762572535707')}}" type="text/javascript">
    </script>
    <div class="box_poly_hea hid-mb d-none">
        <div class="item-policy-content">
            <span class="sub-text"><span class="count-text js-compare-count">0</span> sản phẩm</span>
        </div>
    </div>





    <div class="fix-phone">

        <a class="phone-box" href="tel:{{$setting->phone1}}" title="Hotline">
            <svg version="1.1" class="play0 pa-2" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 473.806 473.806"
                style="enable-background:new 0 0 473.806 473.806;" xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4 c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8 c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6 c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5 c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26 c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9 c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806 C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20 c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6 c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1 c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3 c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5 c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8 c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9 l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1 C420.456,377.706,420.456,388.206,410.256,398.806z" />
                        <path
                            d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2 c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11 S248.656,111.506,256.056,112.706z" />
                        <path
                            d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11 c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2 c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z" />
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
            <span>Hotline</span>
        </a>
        @php
            $zalo = json_decode($setting->google);
        @endphp
        @foreach ($zalo as $item)
            
        @endforeach
        <a target="_blank" href="https://zalo.me/{{$item}}" title="Chat zalo" class="zalo-box">
            <svg class="pa-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" viewBox="0 0 614.501 613.667" xml:space="preserve">
                <path fill="currentColor"
                    d="M464.721,301.399c-13.984-0.014-23.707,11.478-23.944,28.312c-0.251,17.771,9.168,29.208,24.037,29.202   c14.287-0.007,23.799-11.095,24.01-27.995C489.028,313.536,479.127,301.399,464.721,301.399z">
                </path>
                <path fill="currentColor"
                    d="M291.83,301.392c-14.473-0.316-24.578,11.603-24.604,29.024c-0.02,16.959,9.294,28.259,23.496,28.502   c15.072,0.251,24.592-10.87,24.539-28.707C315.214,313.318,305.769,301.696,291.83,301.392z">
                </path>
                <path fill="currentColor"
                    d="M310.518,3.158C143.102,3.158,7.375,138.884,7.375,306.3s135.727,303.142,303.143,303.142   c167.415,0,303.143-135.727,303.143-303.142S477.933,3.158,310.518,3.158z M217.858,391.083   c-33.364,0.818-66.828,1.353-100.133-0.343c-21.326-1.095-27.652-18.647-14.248-36.583c21.55-28.826,43.886-57.065,65.792-85.621   c2.546-3.305,6.214-5.996,7.15-12.705c-16.609,0-32.784,0.04-48.958-0.013c-19.195-0.066-28.278-5.805-28.14-17.652   c0.132-11.768,9.175-17.329,28.397-17.348c25.159-0.026,50.324-0.06,75.476,0.026c9.637,0.033,19.604,0.105,25.304,9.789   c6.22,10.561,0.284,19.512-5.646,27.454c-21.26,28.497-43.015,56.624-64.559,84.902c-2.599,3.41-5.119,6.88-9.453,12.725   c23.424,0,44.123-0.053,64.816,0.026c8.674,0.026,16.662,1.873,19.941,11.267C237.892,379.329,231.368,390.752,217.858,391.083z    M350.854,330.211c0,13.417-0.093,26.841,0.039,40.265c0.073,7.599-2.599,13.647-9.512,17.084   c-7.296,3.642-14.71,3.028-20.304-2.968c-3.997-4.281-6.214-3.213-10.488-0.422c-17.955,11.728-39.908,9.96-56.597-3.866   c-29.928-24.789-30.026-74.803-0.211-99.776c16.194-13.562,39.592-15.462,56.709-4.143c3.951,2.619,6.201,4.815,10.396-0.053   c5.39-6.267,13.055-6.761,20.271-3.357c7.454,3.509,9.935,10.165,9.776,18.265C350.67,304.222,350.86,317.217,350.854,330.211z    M395.617,369.579c-0.118,12.837-6.398,19.783-17.196,19.908c-10.779,0.132-17.593-6.966-17.646-19.512   c-0.179-43.352-0.185-86.696,0.007-130.041c0.059-12.256,7.302-19.921,17.896-19.222c11.425,0.752,16.992,7.448,16.992,18.833   c0,22.104,0,44.216,0,66.327C395.677,327.105,395.828,348.345,395.617,369.579z M463.981,391.868   c-34.399-0.336-59.037-26.444-58.786-62.289c0.251-35.66,25.304-60.713,60.383-60.396c34.631,0.304,59.374,26.306,58.998,61.986   C524.207,366.492,498.534,392.205,463.981,391.868z">
                </path>
            </svg>
            <span>Chat zalo</span>
        </a>
        <a class="fb-box" target="_blank" href="{{$setting->GA}}" title="Messenger">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28" height="28"
                fill="currentColor">
                <path
                    d="M 16 4 C 9.410156 4 4 9.136719 4 15.5 C 4 18.890625 5.570313 21.902344 8 24 L 8 28.625 L 12.4375 26.40625 C 13.566406 26.746094 14.746094 27 16 27 C 22.589844 27 28 21.863281 28 15.5 C 28 9.136719 22.589844 4 16 4 Z M 16 6 C 21.558594 6 26 10.265625 26 15.5 C 26 20.734375 21.558594 25 16 25 C 14.804688 25 13.664063 24.773438 12.59375 24.40625 L 12.1875 24.28125 L 10 25.375 L 10 23.125 L 9.625 22.8125 C 7.40625 21.0625 6 18.441406 6 15.5 C 6 10.265625 10.441406 6 16 6 Z M 14.875 12.34375 L 8.84375 18.71875 L 14.25 15.71875 L 17.125 18.8125 L 23.09375 12.34375 L 17.8125 15.3125 Z" />
            </svg>
            <span>Messenger</span>
        </a>
    </div>
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>



    <script>
        AOS.init({
            once: true,
            duration: 800
        });
        
        // AJAX Search
        let searchTimeout;
        $('#search-input-ajax').on('input', function() {
            clearTimeout(searchTimeout);
            const keyword = $(this).val().trim();
            const $resultsDiv = $('.search-results-ajax');
            
            if (keyword.length < 2) {
                $resultsDiv.hide().html('');
                return;
            }
            
            searchTimeout = setTimeout(function() {
                $.ajax({
                    url: '{{ route("autosearchcomplete") }}',
                    type: 'POST',
                    data: {
                        keyword: keyword,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.products && response.products.length > 0) {
                            let html = '<div style="padding: 10px;">';
                            
                            response.products.forEach(function(product) {
                                const price = product.discount > 0 ? product.discount : product.price;
                                let priceDisplay = '';
                                
                                if (price > 0) {
                                    priceDisplay = '<div style="color: #e74c3c; font-weight: 600;">' + new Intl.NumberFormat('vi-VN').format(price) + 'đ</div>';
                                } else {
                                    priceDisplay = '<div style="color: #999; font-style: italic;">Liên hệ</div>';
                                }
                                
                                html += '<a href="' + product.url + '" class="search-item-ajax" style="display: flex; padding: 10px; border-bottom: 1px solid #f0f0f0; text-decoration: none; color: inherit; align-items: center;">';
                                html += '<img src="' + product.image + '" alt="' + product.name + '" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px; margin-right: 10px;">';
                                html += '<div style="flex: 1;">';
                                html += '<div style="font-weight: 500; margin-bottom: 4px;">' + product.name + '</div>';
                                html += priceDisplay;
                                html += '</div>';
                                html += '</a>';
                            });
                            
                            if (response.total > 5) {
                                html += '<div style="text-align: center; padding: 10px; color: #666;">Còn ' + (response.total - 5) + ' sản phẩm khác...</div>';
                            }
                            
                            html += '</div>';
                            $resultsDiv.html(html).show();
                        } else {
                            $resultsDiv.html('<div style="padding: 15px; text-align: center; color: #999;">Không tìm thấy sản phẩm</div>').show();
                        }
                    },
                    error: function() {
                        $resultsDiv.html('<div style="padding: 15px; text-align: center; color: #e74c3c;">Có lỗi xảy ra</div>').show();
                    }
                });
            }, 300);
        });
        
        // Enter to submit form
        $('#search-input-ajax').on('keypress', function(e) {
            if (e.which === 13) {
                $('.search-results-ajax').hide();
                $(this).closest('form').submit();
            }
        });
        
        // Click outside to close
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.header-search-form').length) {
                $('.search-results-ajax').hide();
            }
        });
    </script>
    
    @yield('script')
</body>

</html>
