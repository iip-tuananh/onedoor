@extends('layouts.main.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ languageName($product->description) }}
@endsection
@section('image')
    @php
        $img = json_decode($product->images);
        $thongso = json_decode($product->size);
        $variants = json_decode($product->variant);
        $khuyenmai = json_decode($product->preserve);
        $linksp = json_decode($product->ingredient);
        $phantram = $product->price > 0 ? 100 - ($product->discount / $product->price) * 100 : 0;
    @endphp
    {{ url('' . $img[0]) }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('frontend/css/product_style.scss.css')}}">
@endsection
@section('script')
@endsection
@section('content')
<div class="bodywrap">
<section class="bread-crumb" style="background-image: url({{asset('frontend/images/ngang.jpg')}});">
   <div class="container">
   </div>
</section>
<section class="product layout-product" itemscope itemtype="https://schema.org/Product">
 

   <div class="container">
     <ul class="breadcrumb" >
         <li class="home">
            <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li>
            <a class="changeurl"  href="{{ route('allListProCate', ['danhmuc' => $product->cate_slug]) }}"><span >{!! languageName($product->cate->name) !!}</span></a>						
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li><strong><span>{{$product->name}}</span></strong>
         <li>
      </ul>
      <div class="details-product">
         <div class="margin-bottom-20">
            <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form" action="/cart/add" method="post" class="form-inline">
               @csrf
               <input type="hidden" name="product_id" value="{{ $product->id }}">
               <input type="hidden" name="product_name" value="{{ $product->name }}">
               <input type="hidden" name="product_price" value="{{ $product->price }}">
               <input type="hidden" name="product_discount" value="{{ $product->discount }}">
               <input type="hidden" name="product_image" value="{{ $img[0] }}">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-12 col-12 product-detail-left product-images">
                     <div class="sticky">
                        <div class="product-image-block relative">
                           <div class="swiper-container gallery-top">
                              <div class="swiper-wrapper" id="lightgallery">
                                @foreach ($img as $key => $item)
                                    <a class="swiper-slide" data-hash="{{ $key }}" href="{{ $item }}" title="Click để xem">
                                    <img height="370" width="480" src="{{ $item }}" alt="{{ $product->name }}" data-image="{{ $item }}" class="img-responsive mx-auto d-block swiper-lazy" />
                                    </a>
                                @endforeach
                                 
                              </div>
                           </div>
                           <div class="swiper-container gallery-thumbs">
                              <div class="swiper-wrapper">
                                @foreach ($img as $key => $item)
                                    <div class="swiper-slide" data-hash="{{ $key }}">
                                    <div class="p-100">
                                        <img height="80" width="80" src="{{ $item }}" alt="{{ $product->name }}" data-image="{{ $item }}" class="swiper-lazy" />
                                    </div>
                                    </div>
                                @endforeach
                                
                              </div>
                              <div class="swiper-button-next">
                              </div>
                              <div class="swiper-button-prev">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-12 col-12 details-pro">
                     <h1 class="title-product">{{ $product->name }}</h1>
                     <div class="reviews_details_product ">
                        <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail" data-id="58701664" data-target="#tab-3"></div>
                     </div>
                     <div class="product-top clearfix">
                        <div class="sku-product clearfix d-none">
                           <span itemprop="type" itemtype="http://schema.org/Type" itemscope>
                              <meta itemprop="name" content="Quần áo phản quang" />
                              Loại: <strong>{{ $product->type }}</strong>
                           </span>
                        </div>
                     </div>
                     <div class="product-top clearfix">
                        <div class="sku-product clearfix">
                           <span itemprop="brand" itemtype="http://schema.org/Brand" itemscope>
                              <meta itemprop="name" content="ONE DOOR" />
                              Thương hiệu: <strong style="color: #cf2025">ONE DOOR</strong>
                           </span>
                        </div>
                     </div>
                  
                     <div class="inventory_quantity">
                        <span class="mb-break">
                        <span class="stock-brand-title">Tình trạng:</span>
                        <span class="a-stock">
                        Còn hàng
                        </span>
                        </span>
                     </div>
                     <div class="motangan">
                        {!! languageName($product->description) !!}
                     </div>

                     <div class="khuyen-mai">
                        <h3 class="title">
                           Chương Trình Khuyến Mãi
                        </h3>
                        <div class="content">
                           <ul>
                            @foreach ($khuyenmai as $item)
                            
                                <li>{{ $item->detail }}</li>
                            @endforeach
                              
                              
                           </ul>
                        </div>
                     </div>
                     @if ($product->price > 0)
                        @if ($product->discount > 0 && $phantram > 0 && $product->status_variant != 1)
                           <div class="price-box clearfix">
                              <span class="special-price">
                                 <span class="price product-price bk-product-price">{{ number_format($product->discount, 0, ',', '.') }}₫</span>
                                 <meta itemprop="price" content="{{ $product->discount }}">
                                 <meta itemprop="priceCurrency" content="VND">
                              </span>
                              <!-- Giá Khuyến mại -->
                              <span class="old-price" itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/priceSpecification">
                                 <del class="price product-price-old">
                                 {{ number_format($product->price, 0, ',', '.') }}₫
                                 </del>
                                 <meta itemprop="price" content="{{ $product->price }}">
                                 <meta itemprop="priceCurrency" content="VND">
                              </span>
                              <!-- Giá gốc -->
                              <span class="sale-off">-  
                              {{ round($phantram) }}% 
                              </span>
                           </div>
                        @else
                           <div class="price-box clearfix">
                              <span class="special-price">
                                 <span class="price product-price bk-product-price" id="variant-price">{{ number_format($product->price, 0, ',', '.') }}₫</span>
                                 <meta itemprop="price" content="{{ $product->price }}">
                                 <meta itemprop="priceCurrency" content="VND">
                              </span>
                              <!-- Giá Khuyến mại -->
                           </div>
                        @endif
                     @else
                        <div class="price-box clearfix">
                           <span class="special-price">
                              <span class="price product-price bk-product-price">Đang cập nhật</span>
                           </span>
                           <!-- Giá Khuyến mại -->
                        </div>
                     @endif
                     <div class="form-product">
                        <div class="box-variant clearfix  d-none ">
                           <input type="hidden" id="one_variant" name="variantId" value="168201963" />
                        </div>
                        <div class="boz-form ">
                           <div class="flex-quantity">
                              <div class="custom custom-btn-number show">
                                 <span>Số lượng: </span>
                                 <div class="input_number_product">									
                                    <button class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button">-</button>
                                    <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                    <button class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button"><span>+</span></button>
                                 </div>
                              </div>
                              <div class="btn-mua button_actions clearfix">
                                 <button class="btn-buyNow btn btn-primary">
                                 <span class="txt-main">Mua ngay</span>
                                 </button>
                                 <button type="submit" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart btn-extent">
                                 <span class="txt-main">Thêm vào giỏ</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                     {{-- <div class="block-policy">
                        <div class="policy-content row">
                           <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                              <div class="policy-item duration-300">
                                 <div class="icon aspect-1">
                                    <img width="64" height="64" class="lazyload" data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/sercs_1.png?1762572535707" alt="Bean Construction" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                 </div>
                                 <div class="info">
                                    <h3>Vận chuyển miễn phí</h3>
                                    <span>Hóa đơn trên 1tr5</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                              <div class="policy-item duration-300">
                                 <div class="icon aspect-1">
                                    <img width="64" height="64" class="lazyload" data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/sercs_2.png?1762572535707" alt="Bean Construction" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                 </div>
                                 <div class="info">
                                    <h3>Đổi hàng tận nhà</h3>
                                    <span>Trong vòng 15 ngày</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                              <div class="policy-item duration-300">
                                 <div class="icon aspect-1">
                                    <img width="64" height="64" class="lazyload" data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/sercs_3.png?1762572535707" alt="Bean Construction" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                 </div>
                                 <div class="info">
                                    <h3>Thanh toán COD</h3>
                                    <span>Yên tâm mua sắm</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                              <div class="policy-item duration-300">
                                 <div class="icon aspect-1">
                                    <img width="64" height="64" class="lazyload" data-src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/sercs_4.png?1762572535707" alt="Bean Construction" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                 </div>
                                 <div class="info">
                                    <h3>Hotline: 1800 6750</h3>
                                    <span>Hỗ trợ bạn từ 8h00-22h00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> --}}
                     <div class="support-product">
                        <div class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br> ĐỂ GIÚP ĐỠ BẠN</div>
                        <div class="image">
                           <img width="400" height="400" src="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/evo_product_support.png?1762572535707" alt="Hỗ trợ trực tuyến">
                        </div>
                        <div class="title2">Để được hỗ trợ tốt nhất. Hãy gọi</div>
                        <div class="phone">
                           <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a>
                        </div>
                        <div class="or">
                           <span>Hoặc</span>
                        </div>
                        <div class="title3">Chat hỗ trợ trực tuyến</div>
                        <a title="Chat với chúng tôi" class="chat" href="{{$setting->GA}}" target="_blank">Chat với chúng tôi</a>
                     </div>
                  
                  </div>
               </div>
            </form>
            <div class="row">
            
             {{-- bạn thích --}}
               <div class="col-xl-3 col-lg-3 order-xl-2 order-lg-2 col-md-12 col-12">
                  <div class="sticky_left">
                     <div class="product-favi">
                        <a href="san-pham-noi-bat" title="Có Thể Bạn Thích">
                           <div class="title-head">
                              Có Thể Bạn Thích 
                           </div>
                        </a>
                        <div class="product-favi-content">
                            @foreach ($random as $item)
                            @php
                                $imgs = json_decode($item->images)
                            @endphp
                                <div class="product-view">
                                <div class="image_thumb">
                                    <a class="box_img_pro" href="{{route('detailProduct', ['cate' => $item->cate_slug, 'type' => $item->type_slug, 'id' => $item->slug])}}" title="{{ $item->name }}">
                                    <img width="480" height="480" class="lazyload" src="{{$imgs[0]}}"  data-src="{{$imgs[0]}}" alt="{{ $item->name }}">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="{{route('detailProduct', ['cate' => $item->cate_slug, 'type' => $item->type_slug, 'id' => $item->slug])}}" title="{{ $item->name }}">{{ $item->name }}</a></h3>
                                    <div class="price-box">
                                        @if ($item->price > 0)
                                            @if ($item->discount > 0)
                                                <span class="price">{{ number_format($item->discount, 0, ',', '.') }}₫</span>
                                                <span class="compare-price">{{ number_format($item->price, 0, ',', '.') }}₫</span>
                                            @else
                                                <span class="price">{{ number_format($item->price, 0, ',', '.') }}₫</span>
                                            @endif
                                        @else
                                            <span class="price">Đang cập nhật</span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                            @endforeach
                         
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-xl-9 col-lg-9 order-xl-1 order-lg-1 col-md-12 col-12">
                  <div class="product-review-details ">
                     <div class="product-tab e-tabs not-dqtab">
                        <ul class="tabs tabs-title clearfix">
                           <li class="tab-link active" data-tab="#tab-1">
                              <h3>Mô tả</h3>
                           </li>
                           <li class="tab-link" data-tab="#tab-tskt">
                              <h3>Thông số kỹ thuật</h3>
                           </li>
                           
                        </ul>
                        <div class="tab-float">
                           <div id="tab-1" class="tab-content active content_extab">
                              <div class="rte product_getcontent product-review-content">
                                 <div class="ba-text-fpt ">
                                    {!! languageName($product->content) !!}
                                 </div>
                              </div>
                           </div>
                           {{-- thông số kỹ thuật --}}
                           <div id="tab-tskt" class="tab-content content_extab">
                              <div class="rte">
                                 <div class="specifications">
                                 <div class="box_content_spe">
                                     @if (!empty($product->km))
                                    
                                                    {!! languageName($product->km) !!}
                                                @else
                                                    Đang cập nhật ...
                                                @endif
                                 </div>
                                 </div>
                              </div>
                           </div>
                        
                        </div>
                     </div>
                     <div class="product-favi">
                        <a href="san-pham-noi-bat" title="Có Thể Bạn Thích">
                           <div class="title-head">
                              Có Thể Bạn Thích
                           </div>
                        </a>
                        <div class="product-favi-content">
                            @foreach ($random as $item)
                            @php
                                $imgs = json_decode($item->images)
                            @endphp
                                <div class="product-view">
                                <div class="image_thumb">
                                    <a class="box_img_pro" href="{{route('detailProduct', ['cate' => $item->cate_slug, 'type' => $item->type_slug, 'id' => $item->slug])}}" title="{{ $item->name }}">
                                    <img width="480" height="480" class="lazyload" src="{{ $imgs[0] }}"  data-src="{{ $imgs[0] }}" alt="{{ $item->name }}">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="{{route('detailProduct', ['cate' => $item->cate_slug, 'type' => $item->type_slug, 'id' => $item->slug])}}" title="{{ $item->name }}">{{ $item->name }}</a></h3>
                                    <div class="price-box">
                                        @if ($item->price > 0)
                                            @if ($item->discount > 0)
                                                <span class="price">{{ number_format($item->discount, 0, ',', '.') }}₫</span>
                                                <span class="compare-price">{{ number_format($item->price, 0, ',', '.') }}₫</span>
                                            @else
                                                <span class="price">{{ number_format($item->price, 0, ',', '.') }}₫</span>
                                            @endif
                                        @else
                                            <span class="price">Đang cập nhật</span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                            @endforeach
                         
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class=" product-related section-index product-swipers">
                  <div class="section-title">
                     <h2>
                        <a href="javascript:void(0)" title="Sản Phẩm Liên Quan">
                        Sản Phẩm Liên Quan
                        </a>
                     </h2>
                
                  </div>
                  <div class="swiper_product_related swiper-container">
                     <div class="swiper-wrapper">
                        @foreach ($productlq as $pro)
                            <div class="swiper-slide">
                            @include('layouts.product.item')
                            </div>
                        @endforeach
                       
                     </div>
                     <div class="swiper-button-prev">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </div>
                     <div class="swiper-button-next">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <script>
               var swiper_related = new Swiper('.swiper_product_related', {
               	slidesPerView: 4,
               	spaceBetween: 20,
               	slidesPerGroup: 1,
               	navigation: {
               		nextEl: '.swiper_product_related .swiper-button-next',
               		prevEl: '.swiper_product_related .swiper-button-prev',
               	},
               	breakpoints: {
               		280: {
               			slidesPerView: 2,
               			spaceBetween: 15
               		},
               		640: {
               			slidesPerView: 2,
               			spaceBetween: 15
               		},
               		768: {
               			slidesPerView: 3,
               			spaceBetween: 15
               		},
               		992: {
               			slidesPerView: 4,
               			spaceBetween: 15
               		},
               		1025: {
               			slidesPerView: 5,
               			spaceBetween: 20
               		}
               	}
               });
            </script>
            <div class="col-12">
               <div class="section-recenview-product productRelate section-index">
                  <div class="section-title">
                     <h2>
                        Sản Phẩm Đã Xem
                     </h2>
                  </div>
                  <div class="recent-page-viewed">
                     <div class="products product_related recent-viewed  swiper-container ">
                        <div class="swiper-wrapper">
                        </div>
                        <div class="swiper-button-prev">
                           <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </div>
                        <div class="swiper-button-next">
                           <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
               <script>
                  if(localStorage.last_viewed_products != undefined){
                  	jQuery('.recent-page-viewed').removeClass('d-none');
                  	var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
                  	var recentview_promises = [];
                  	var size_pro_review = last_viewd_pro_array.length;
                  	if ( size_pro_review >= 14 ) {
                  		size_pro_review = 14;
                  	} else {
                  		size_pro_review = last_viewd_pro_array.length;
                  	}
                  	if (size_pro_review < 1 ) {
                  		jQuery('.recent-page-viewed').addClass('d-none');
                  	}else{
                  		jQuery('.recent-page-viewed').removeClass('d-none');
                  	}
                  	if (size_pro_review > 0 ) {
                  		for (i = 0; i < size_pro_review; i++){
                  			var alias_product = last_viewd_pro_array[i];
                  			if (!!alias_product.alias){
                  				var promise = new Promise(function(resolve, reject) {
                  					$.ajax({
                  						url:'/' + alias_product.alias + '?view=viewed',
                  						success: function(product){
                  							resolve(product);
                  
                  							$(document).ready(function () {
                  
                  								var modal = $('.quickview-product');
                  								var btn = $('.quick-view');
                  								var span = $('.quickview-close');
                  								btn.click(function () {
                  									modal.show();
                  								});
                  
                  								span.click(function () {
                  									modal.hide();
                  								});
                  
                  								$(window).on('click', function (e) {
                  									if ($(e.target).is('.modal')) {
                  										modal.hide();
                  									}
                  								});
                  							});
                  						},
                  						error: function(err){
                  							resolve('');
                  						}
                  					})
                  				});
                  				recentview_promises.push(promise);	
                  			}
                  		}
                  		Promise.all(recentview_promises).then(function(values) {
                  			$.each(values, function(i, v){
                  				if (v != '') {
                  					$('.recent-viewed .swiper-wrapper').append(v);
                  				}else {
                  					last_viewd_pro_array.splice(i,1);
                  				}
                  			});
                  			setTimeout(function () {
                  				var swiper = new Swiper('.recent-viewed', {
                  					slidesPerView: 4,
                  					spaceBetween: 20,
                  					slidesPerGroup: 1,
                  					slidesPerColumn: 1,
                  					navigation: {
                  						nextEl: '.recent-viewed .swiper-button-next',
                  						prevEl: '.recent-viewed .swiper-button-prev',
                  					},
                  					breakpoints: {
                  						280: {
                  							slidesPerView: 2,
                  							spaceBetween: 15
                  						},
                  						640: {
                  							slidesPerView: 2,
                  							spaceBetween: 15
                  						},
                  						768: {
                  							slidesPerView: 3,
                  							spaceBetween: 15
                  						},
                  						992: {
                  							slidesPerView: 4,
                  							spaceBetween: 15
                  						},
                  						1025: {
                  							slidesPerView: 5,
                  							spaceBetween: 20
                  						}
                  					}
                  				});
                  				awe_lazyloadImage();
                  			}, 500);
                  
                  			localStorage.setItem('last_viewed_products',JSON.stringify(last_viewd_pro_array));
                  			awe_lazyloadImage();
                  			
                  			favoriBean.Wishlist.wishlistProduct();
                  			
                  
                  beanComprare.Compare.compareProduct();
                  
                  		})
                  			.catch(function(productId){
                  			const listLocalStorage = (JSON.parse(localStorage.getItem('last_viewed_products')));
                  			for(let i = 0; i < listLocalStorage.length; ++i) {
                  				if(listLocalStorage[i].id == productId){
                  					listLocalStorage.splice(i,1);
                  				}
                  			}
                  			localStorage.setItem('last_viewed_products',JSON.stringify(listLocalStorage));
                  		});
                  
                  	}
                  }else{
                  	jQuery('.section-recenview-product').addClass('d-none');
                  }
               </script>
            </div>
         </div>
      </div>
   </div>
</section>
<
<script>
   var getLimit = 6;
   var alias = 'ao-phan-quang-ghile-tui-hop-nhieu-tui-dung-vai-sieu-thoang';
   
   function activeTab(obj){
   	$('.product-tab ul li').removeClass('active');
   	$(obj).addClass('active');
   	var id = $(obj).attr('data-tab');
   	$('.tab-content').removeClass('active');
   	$(id).addClass('active');
   }
   
   
   $('.product-tab ul li').click(function(){
   	activeTab(this);
   	return false;
   });
   var galleryThumbs = new Swiper('.gallery-thumbs', {
   	spaceBetween: 5,
   	slidesPerView: 10,
   	freeMode: true,
   	lazy: true,
   	watchSlidesVisibility: true,
   	watchSlidesProgress: true,
   	hashNavigation: true,
   	slideToClickedSlide: true,
   	breakpoints: {
   		260: {
   			slidesPerView: 3,
   			spaceBetween: 10,
   		},
   		300: {
   			slidesPerView: 4,
   			spaceBetween: 10,
   		},
   		500: {
   			slidesPerView: 4,
   			spaceBetween: 10,
   		},
   		640: {
   			slidesPerView: 4,
   			spaceBetween: 10,
   		},
   		768: {
   			slidesPerView: 5,
   			spaceBetween: 10
   		},
   		992: {
   			slidesPerView: 5,
   			spaceBetween: 10,
   		},
   		1024: {
   			slidesPerView: 5,
   			spaceBetween: 10
   		},
   		1199: {
   			slidesPerView: 5,
   			spaceBetween: 10
   		}
   	},
   	navigation: {
   		nextEl: '.gallery-thumbs .swiper-button-next',
   		prevEl: '.gallery-thumbs .swiper-button-prev',
   	},
   });
   var galleryTop = new Swiper('.gallery-top', {
   	spaceBetween: 10,
   	lazy: true,
   	hashNavigation: true,
   	thumbs: {
   		swiper: galleryThumbs
   	}
   });
   var swiper = new Swiper('.product-relate-swiper', {
   	slidesPerView: 4,
   	loop: false,
   	grabCursor: true,
   	spaceBetween: 30,
   	roundLengths: true,
   	slideToClickedSlide: false,
   	navigation: {
   		nextEl: '.product-relate-swiper .swiper-button-next',
   		prevEl: '.product-relate-swiper .swiper-button-prev',
   	},
   	autoplay: false,
   	breakpoints: {
   		260: {
   			slidesPerView: 'auto',
   			spaceBetween: 15
   		},
   		500: {
   			slidesPerView: 2,
   			spaceBetween: 15
   		},
   		640: {
   			slidesPerView: 3,
   			spaceBetween: 15
   		},
   		768: {
   			slidesPerView: 3,
   			spaceBetween: 30
   		},
   		991: {
   			slidesPerView: 4,
   			spaceBetween: 30
   		},
   		1200: {
   			slidesPerView: 4,
   			spaceBetween: 30
   		}
   	}
   });
   $(document).ready(function() {
   	$("#lightgallery").lightGallery({
   		thumbnail: false
   	}); 
   });
   // Xử lý nút "Mua ngay"
   $('.btn-buyNow').on('click', function(event) {
   	event.preventDefault();
   	
   	// Lưu giá trị số lượng hiện tại
   	var currentQty = $('#qtym').val();
   	
   	// Set số lượng về 1 cho nút mua ngay
   	$('#qtym').val(1);
   	
   	$.ajax({
   		url: '{{ route("add.to.cart") }}',
   		type: "post",
   		data: $("#add-to-cart-form").serialize(),
   		headers: {
   			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   		},
   		success: function(data){
   			// Khôi phục lại số lượng ban đầu
   			$('#qtym').val(currentQty);
   			// Chuyển sang trang giỏ hàng
   			window.location.href = "{{ route('listCart') }}";
   		},
   		error: function(){
   			// Khôi phục lại số lượng ban đầu nếu có lỗi
   			$('#qtym').val(currentQty);
   			alert('Có lỗi xảy ra. Vui lòng thử lại!');
   		}
   	});
   });
   
   // Xử lý nút "Thêm vào giỏ"
   $('.btn_add_cart').on('click', function(event) {
   	event.preventDefault();
   	
   	var $button = $(this);
   	var originalText = $button.find('.txt-main').text();
   	
   	// Disable button và thay đổi text
   	$button.prop('disabled', true);
   	$button.find('.txt-main').text('Đang thêm...');
   	
   	$.ajax({
   		url: '{{ route("add.to.cart") }}',
   		type: "post",
   		data: $("#add-to-cart-form").serialize(),
   		headers: {
   			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   		},
   		success: function(response){
			if(response.success) {
				// Hiển thị thông báo thành công
				$button.find('.txt-main').text('Đã thêm!');
				
				// Cập nhật số lượng giỏ hàng nếu có element hiển thị
				if(response.cartCount) {
					$('.count-cart, .cart-count, .count_item, .count_item_pr').text(response.cartCount);
				}
				
				// Hiển thị thông báo
				showNotification('Đã thêm ' + $('#qtym').val() + ' sản phẩm vào giỏ hàng!', 'success');   				// Reset button sau 2 giây
   				setTimeout(function() {
   					$button.prop('disabled', false);
   					$button.find('.txt-main').text(originalText);
   				}, 2000);
   			} else {
   				$button.prop('disabled', false);
   				$button.find('.txt-main').text(originalText);
   				showNotification('Có lỗi xảy ra. Vui lòng thử lại!', 'error');
   			}
   		},
   		error: function(){
   			$button.prop('disabled', false);
   			$button.find('.txt-main').text(originalText);
   			showNotification('Có lỗi xảy ra. Vui lòng thử lại!', 'error');
   		}
   	});
   });
   
   // Hàm hiển thị thông báo
   function showNotification(message, type) {
   	var alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
   	var alertHtml = '<div class="alert ' + alertClass + ' alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px;">' +
   		message +
   		'<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
   		'<span aria-hidden="true">&times;</span>' +
   		'</button>' +
   		'</div>';
   	
   	$('body').append(alertHtml);
   	
   	// Tự động ẩn sau 3 giây
   	setTimeout(function() {
   		$('.alert').fadeOut(function() {
   			$(this).remove();
   		});
   	}, 3000);
   }
   $('.btn--view-more').on('click', function(e){
   	e.preventDefault();
   	var $this = $(this);
   	if( $('.product-review-details .product-review-content').hasClass('expanded')) {
   		$('html, body').animate({ scrollTop: $('.product-review-details').offset().top - 110 }, 'slow');
   	}
   	$this.parents('.product-review-details').find('.product-review-content').toggleClass('expanded');
   	$(this).toggleClass('active');
   	return false;
   });
   
   $(document).ready(function ($){
   	var product = {"id":58701664,"name":"Áo phản quang ghile túi hộp nhiều túi đựng vải siêu thoáng","alias":"ao-phan-quang-ghile-tui-hop-nhieu-tui-dung-vai-sieu-thoang","vendor":"Bảo hộ Việt Nam","type":"Quần áo phản quang","content":"<p>– Kiểu dáng: Áo gilê, may dây phản quang trước ngực và đằng sau</p>\n<p>– Áo Gilê được may từ chất liệu kaki dù thoáng mát, trước và sau may thêm sợi phản quang màu ghi phù hợp với công nhân làm việc trong môi trường sáng và tối.<br>– Sản phẩm được thiết kế khỏe, đẹp.<br>– Sản phẩm thiết kế có 3 túi đựng đồ trên/ dưới.</p>\n<p>– Các size: freesz</p>\n<p>– Nhận đặt in và thêu logo lên áo</p>\n<p>– Thời gian giao hàng: 02 đến 05 ngày</p>\n<p><img src=\"https://bizweb.dktcdn.net/100/601/974/files/ao-phan-quang-ghile-new-4.jpg?v=1758160465307\"></p>\n<h6>Thông số kỹ thuật</h6>\n<table style=\"border-collapse: collapse; width: 100%; height: 39.1876px;\" border=\"1\"><colgroup><col style=\"width: 50.00%;\"><col style=\"width: 50.00%;\"></colgroup>\n<tbody>\n<tr style=\"height: 19.5938px;\">\n<td style=\"height: 19.5938px;\"><span>Nhà sản xuất</span></td>\n<td style=\"height: 19.5938px;\"><span>Bảo hộ Việt Nam</span></td>\n</tr>\n<tr style=\"height: 19.5938px;\">\n<td style=\"height: 19.5938px;\"><span>Nước sản xuất</span></td>\n<td style=\"height: 19.5938px;\"><span>Việt Nam</span></td>\n</tr>\n<tr>\n<td><span>Chất liệu vải</span></td>\n<td><span>Vải nhập</span></td>\n</tr>\n<tr>\n<td><span>Tiêu chuẩn chất lượng</span></td>\n<td><span>TCVN 2607-78</span></td>\n</tr>\n<tr>\n<td><span>Màu sắc</span></td>\n<td><span>Màu xanh nõn pha phối đen</span></td>\n</tr>\n<tr>\n<td><span>Kích cỡ</span></td>\n<td><span>66*55cm</span></td>\n</tr>\n</tbody>\n</table>","summary":"","template_layout":"product","available":true,"tags":["combo_luoi-phan-quang-an-toan-ao-lien-quan-vest-mua-he","combo_ao-phan-quang-nhap-nhay-den-led-sac-voi-den-flash","combo_ao-phan-quang-luoi-bao-ho-an-toan-ky-thuat-xay-dung","new"],"price":135000.0000,"price_min":135000.0000,"price_max":135000.0000,"price_varies":false,"compare_at_price":170000.0000,"compare_at_price_min":170000.0000,"compare_at_price_max":170000.0000,"compare_at_price_varies":false,"variants":[{"id":168201963,"barcode":null,"sku":null,"unit":null,"title":"Default Title","options":["Default Title"],"option1":"Default Title","option2":null,"option3":null,"available":true,"taxable":false,"price":135000.0000,"compare_at_price":170000.0000,"inventory_management":"","inventory_policy":"deny","inventory_quantity":0,"weight_unit":"g","weight":0,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/601/974/products/e53e6db5-a6cd-4d17-90e4-9883ca9c248a.jpg?v=1758160568760"}}],"featured_image":{"src":"https://bizweb.dktcdn.net/100/601/974/products/e53e6db5-a6cd-4d17-90e4-9883ca9c248a.jpg?v=1758160568760"},"images":[{"src":"https://bizweb.dktcdn.net/100/601/974/products/e53e6db5-a6cd-4d17-90e4-9883ca9c248a.jpg?v=1758160568760"},{"src":"https://bizweb.dktcdn.net/100/601/974/products/765248d9-7b7f-4281-9e5d-6f95fcd31b19.jpg?v=1758160568760"}],"options":["Title"],"created_on":"2025-09-18T08:56:08","modified_on":"2025-09-18T09:58:35","published_on":"2025-09-18T08:56:09"};
   	var alias_pro = 'ao-phan-quang-ghile-tui-hop-nhieu-tui-dung-vai-sieu-thoang';
   	var array_list = [product];
   	var list_viewed_pro_old = localStorage.getItem('last_viewed_products');
   	var last_viewed_pro_new = "";
   	if(list_viewed_pro_old == null || list_viewed_pro_old == '')
   		last_viewed_pro_new = array_list;
   	else{
   		var list_viewed_pro_old = JSON.parse(localStorage.last_viewed_products);
   		list_viewed_pro_old.splice(5, 1);
   		for (i = 0; i < list_viewed_pro_old.length; i++) {
   			if ( list_viewed_pro_old[i].alias == alias_pro ) {
   				list_viewed_pro_old.splice(i,1);
   				break;
   			}
   		}
   		list_viewed_pro_old.unshift(array_list[0]);
   		last_viewed_pro_new = list_viewed_pro_old;
   	}
   	localStorage.setItem('last_viewed_products',JSON.stringify(last_viewed_pro_new));
   });
   
   
   // Check if either specificationsDiv or viewContentDiv is absent or empty.
   // If true, hide the productBarDiv by adding the 'hidden' class.
   $(document).ready(function() {
   	var productBarDiv = $('.product-sidebar');
   	var productDetailsDiv = $('.product-review-details');
   	var hasSpecifications = true;
   	if (hasSpecifications == false) {
   		productBarDiv.addClass('hidden');
   	}
   });
   $('.playVideo').on('click', function(e){
   	var idVideo = $(this).attr('data-video');
   	$('.popup-video').addClass('active');
   	$('.popup-video .body-popup').html(`<iframe width="560" height="315" src="https://www.youtube.com/embed/` + idVideo + `" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`)
   });
   $('.close-popup-video').on('click', function(e){
   	$('.popup-video').removeClass('active');
   	$('.popup-video .body-popup').html(' ');
   });
   
   $('.sapo-product-reviews-badge-detail').click(function(){
   	scrollToxx();
   })
   function scrollToxx() {
   		$('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top - 70}, 'slow');
   		$('.tab-content, .product-tab .tab-link').removeClass('active');
   		$('#tab-3, .product-tab .tab-link:nth-child(3)').addClass('active');
   		return false;
   }
</script>
<div id="js-global-alert" class="alert alert-success" role="alert">
   <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span></button>
   <h5 class="alert-heading"></h5>
   <p class="alert-content"></p>
</div>
<link href="//bizweb.dktcdn.net/100/601/974/themes/1047016/assets/bpr-products-module.css?1762572535707" rel="stylesheet" type="text/css" media="all" />
<div class="sapo-product-reviews-module"></div>

@endsection