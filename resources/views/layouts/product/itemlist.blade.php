@php
    $img = json_decode($pro->images);
    $khuyenmai = json_decode($pro->preserve);
    $thongso = json_decode($pro->size);
    $phantram = $pro['price'] > 0 ? 100 - ($pro['discount'] / $pro['price']) * 100 : 0;
    $actualPrice = $pro['discount'] > 0 ? $pro['discount'] : $pro['price'];
    $vendorName = isset($pro->thuonghieu) && $pro->thuonghieu ? $pro->thuonghieu->name : '';
    $productTags = isset($pro->tags) && $pro->tags ? (is_array(json_decode($pro->tags, true)) ? implode(',', json_decode($pro->tags, true)) : $pro->tags) : '';
@endphp

<div class="col-xl-3 col-md-3 col-sm-6 col-xs-6 col-6 product-item" 
     data-price="{{ $actualPrice }}" 
     data-name="{{ $pro['name'] }}" 
     data-id="{{ $pro['id'] }}"
     data-vendor="{{ $vendorName }}"
     data-tags="{{ $productTags }}">   
      <div class="item_product_main">
        <form action="" method="post" class="variants product-action item-product-main duration-300"
            enctype="multipart/form-data">
            <div class="product-thumbnail">
                <a class="image_thumb scale_hover"
                    href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'type'=>$pro['type_slug'] ? $pro['type_slug'] : 'loai','id'=>$pro['slug']])}}"
                    title="{{ $pro['name'] }}">
                    <img class="lazyload duration-300 image1" src="{{ $img[0] }}" data-src="{{ $img[0] }}"
                        alt="{{ $pro['name'] }}">
                    <img class="lazyload duration-300 image2" src="{{ isset($img[1]) ? $img[1] : $img[0] }}"
                        data-src="{{ isset($img[1]) ? $img[1] : $img[0] }}" alt="{{ $pro['name'] }}">
                </a>
                <div class="badge">
                    <span class="new">HOT</span>
                </div>
                <a href="javascript:void(0)" class="setWishlist btn-views ">
                    <img width="100" height="25" src="{{ $setting->logo }}" alt="logo" />
                </a>
                @if ($pro['discount'] > 0)
                    <span class="flash-sale" style="animation: shake 3s infinite;">-
                        {{ number_format(100 - ($pro['discount'] / $pro['price']) * 100, 0, ',', '.') }}%
                    </span>
                @endif
            </div>
            <div class="product-info">
                <h3 class="product-name line-clamp-2-new">
                    <a href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'type'=>$pro['type_slug'] ? $pro['type_slug'] : 'loai','id'=>$pro['slug']])}}"
                        title="{{ $pro['name'] }}">{{ $pro['name'] }}</a>
                </h3>
                @php
                    $phantram = $pro['price'] > 0 ? 100 - ($pro['discount'] / $pro['price']) * 100 : 0;
                @endphp
                @if ($pro['price'] > 0)
                    @if ($pro['discount'] > 0 && $phantram > 0)
                        <div class="product-price-cart">

                            <span class="price">{{ number_format($pro['discount'], 0, ',', '.') }}đ</span>
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
                    <input class="hidden" type="hidden" name="variantId" value="1" />
                    
                        <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                            onclick="window.location.href='{{route('detailProduct',['cate'=>$pro['cate_slug'],'type'=>$pro['type_slug'] ? $pro['type_slug'] : 'loai','id'=>$pro['slug']])}}'}">
                            Xem chi tiết
                </div>
            </div>
        </form>
    </div>
</div>
