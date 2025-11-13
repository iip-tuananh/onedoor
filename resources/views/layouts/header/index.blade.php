<header class="header hea-index">
    <div class="topbarhea">

    </div>
    <div class="main-header">
        <div class="container">
            <div class="box-hearder">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-8 col-5 header-logo">
                        <a href="{{ route('home') }}" class="logo-wrapper" title="{{ $setting->company }}">
                            <img width="388" height="108" src="" data-src="{{ $setting->logo }}"
                                alt="{{ $setting->company }}" class="lazyload">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="header-menu">
                            <div class="navigation-horizontal">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-xs-12 col-12 sudes-main-header tab-content-mb">
                                        <div class="col-menu">
                                            <ul class="nav nav_new_menu">
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="{{ route('home') }}"
                                                        title="Trang chủ">Trang chủ</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{route('aboutUs')}}" title="Về chúng tôi">Về
                                                        chúng tôi</a>
                                                </li>
                                                <li class="nav-item has-childs   has-mega has-mega-1 "
                                                    data-section="header_nav">
                                                    <a href="{{route('allProduct')}}" class="nav-link" title="Sản phẩm">
                                                        Sản phẩm
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                                        </svg>
                                                    </a>
                                                    <i class="open_mnu down_icon"></i>
                                                    <div class="mega-content dropdown-menu">
                                                        <div class="row d-flex ">
                                                            <div class="mega-menu-list  col-lg-9">
                                                                <ul class="level0 ">

                                                                    @foreach ($categoryhome as $category)
                                                                        <li
                                                                            class="level1 parent item fix-navs nav-item-lv2 has-childs2">
                                                                            <a class="hmega"
                                                                                href="{{ route('allListProCate', $category->slug) }}"
                                                                                title="{{ languageName($category->name) }}">{{ languageName($category->name) }}</a>
                                                                            <i class="open_mnu down_icon"></i>
                                                                            <ul class="level1 dropdown-menu">
                                                                                @foreach ($category->typeCate as $type)
                                                                                    <li class="level2 nav-item-lv3">
                                                                                        <a href="{{ route('allListType', ['danhmuc' => $category->slug, 'loaidanhmuc' => $type->slug]) }}"
                                                                                            title="{{ languageName($type->name) }}">{{ languageName($type->name) }}</a>
                                                                                    </li>
                                                                                @endforeach



                                                                            </ul>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="nav-item has-childs   " data-section="header_nav">
                                                    <a href="{{ route('allListBlog') }}" class="nav-link"
                                                        title="Tin tức">
                                                        Tin tức
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                                        </svg>
                                                    </a>
                                                    <i class="open_mnu down_icon"></i>
                                                    <ul class="dropdown-menu">

                                                        @foreach ($blogCate as $item)
                                                            <li class="nav-item-lv2">
                                                                <a class="nav-link"
                                                                    href="{{ route('listCateBlog', $item->slug) }}"
                                                                    title="{{ languageName($item->name) }}">{{ languageName($item->name) }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>

                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{ route('lienHe') }}"
                                                        title="Liên hệ">Liên hệ</a>
                                                </li>
                                                       <li class="nav-item has-childs   " data-section="header_nav">
                                                    <a href="javascript:void(0)" class="nav-link"
                                                        title="Chính sách">
                                                       Chính sách
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                                        </svg>
                                                    </a>
                                                    <i class="open_mnu down_icon"></i>
                                                    <ul class="dropdown-menu">

                                                        @foreach ($chinhsach as $item)
                                                            <li class="nav-item-lv2">
                                                                <a class="nav-link"
                                                                    href="{{route('pagecontent',$item->slug)}}"
                                                                    title="{{ $item->title }}">{{ $item->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <div class="control-menu">
                                       <a href="#" id="prev">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                             <path fill="#fff" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                                          </svg>
                                       </a>
                                       <a href="#" id="next">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                             <path fill="#fff" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                                          </svg>
                                       </a>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-7 header-right">
                        <div class="sudes-header-search">
                            <a class="button-search" href="javascript:;" title="Tìm kiếm">
                                <span class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <div class="sudes-header-cart header-action_cart">
                            <a class="a-hea" href="{{route('listCart')}}" aria-label="Giỏ hàng" title="Giỏ hàng">
                                <span class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                        </path>
                                    </svg>
                                    @php
                                        $cartQty = 0;
                                        $cart = session('cart', []);
                                        foreach ($cart as $item) {
                                            $cartQty += $item['quantity'];
                                        }
                                    @endphp
                                    <span class="count_item count_item_pr">{{ $cartQty }}</span>
                                </span>
                            </a>
                            <div class="top-cart-content">
                                <div class="CartHeaderContainer">
                                </div>
                            </div>
                        </div>
                        <button class="menu-icon md-hidden" aria-label="Menu" id="btn-menu-mobile" title="Menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-mobile">
        <div class="container">
            <div class="navigation-horizontal-mobile">
                <div class="title_menu md-hidden">
                    <ul id="tabs-menu-mb">
                        <li class="tab-link" data-tab="tab-menu-1">Menu</li>
                    </ul>
                    <div class="close-mb-menu"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 col-12 sudes-main-header tab-content-mb"
                        id="tab-menu-1">
                        <div class="col-menu">
                            <ul class="nav nav_new_menu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('home') }}" title="Trang chủ">Trang chủ</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('aboutUs') }}" title="Về chúng tôi">Về chúng
                                        tôi</a>
                                </li>
                                <li class="nav-item has-childs   has-mega has-mega-1 " data-section="header_nav">
                                    <a href="{{ route('allProduct') }}" class="nav-link" title="Sản phẩm">
                                        Sản phẩm
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </a>
                                    <i class="open_mnu down_icon"></i>
                                    <div class="mega-content dropdown-menu">
                                        <div class="row d-flex justify-content-center">
                                            <div class="mega-menu-list  col-lg-9">
                                                <ul class="level0 ">
                                                    @foreach ($categoryhome as $cate)
                                                        <li
                                                            class="level1 parent item fix-navs nav-item-lv2 has-childs2">
                                                            <a class="hmega"
                                                                href="{{ route('allListProCate', $cate->slug) }}"
                                                                title="{{ languageName($cate->name) }}">{{ languageName($cate->name) }}</a>
                                                            <i class="open_mnu down_icon"></i>
                                                            <ul class="level1 dropdown-menu">
                                                                @foreach ($cate->typeCate as $type)
                                                                    <li class="level2 nav-item-lv3">
                                                                        <a href="{{ route('allListType', ['danhmuc' => $cate->slug, 'loaidanhmuc' => $type->slug]) }}"
                                                                            title="{{ languageName($type->name) }}">{{ languageName($type->name) }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        

                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item has-childs   " data-section="header_nav">
                                    <a href="{{ route('allListBlog') }}" class="nav-link" title="Tin Tức">
                                        Tin Tức
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </a>
                                    <i class="open_mnu down_icon"></i>
                                    <ul class="dropdown-menu">

                                        @foreach ($blogCate as $item)
                                            <li class="nav-item-lv2">
                                                <a class="nav-link" href="{{ route('listCateBlog', $item->slug) }}"
                                                    title="{{ languageName($item->name) }}">{{ languageName($item->name) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>


                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('lienHe') }}" title="Liên hệ">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-overflow"></div>
</header>
