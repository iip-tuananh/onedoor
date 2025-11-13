@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/collection_style.scss.css')}}">
<style>
.filter-container__selected-filter {
    display: none;
    margin-bottom: 15px;
    background: #f8f9fa;
    padding: 15px;
    border-radius: 5px;
}

.filter-container__selected-filter-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid #dee2e6;
}

.filter-container__selected-filter-header-title {
    font-weight: 600;
    font-size: 14px;
}

.filter-container__clear-all {
    color: #dc3545;
    text-decoration: none;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.filter-container__clear-all:hover {
    color: #c82333;
}

.filter-container__selected-filter-list ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.filter-container__selected-filter-item {
    display: inline-block;
}

.filter-container__selected-filter-item a {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 12px;
    background: #cf2025;
   
    border-radius: 0;
    font-size: 13px;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.filter-container__selected-filter-item a:hover {
    background: #cf2025 !important;
    color: #fff;
    border-color: #cf2025;
}

.filter-container__selected-filter-item a i {
    font-size: 12px;
}

.count-filter-val {
    display: inline-block;
    min-width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    background: #dc3545;
    color: #fff;
    border-radius: 50%;
    font-size: 11px;
    margin-left: 5px;
}

.no-products-message {
    padding: 40px 20px;
    text-align: center;
}

.no-products-message p {
    font-size: 16px;
    color: #666;
}

.btn-quick-sort.active {
    background: ##cf2025;
    color: #fff;
}

.product-item {
    transition: opacity 0.3s ease;
}

@media (max-width: 991px) {
    .dqdt-sidebar {
        position: fixed;
        left: -300px;
        top: 0;
        width: 300px;
        height: 100vh;
        background: #fff;
        z-index: 9999;
        overflow-y: auto;
        transition: left 0.3s ease;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    }
    
    .dqdt-sidebar.openf {
        left: 0;
    }
    
    .open-filters {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0,0,0,0.5);
        z-index: 9998;
        display: none;
    }
    
    .open-filters.openf {
        display: block;
    }
}
</style>
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
<section class="bread-crumb" style="background-image: url({{asset('frontend/images/ngang.jpg')}});">
   
</section>
<div class="layout-collection">
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
         <li><strong ><span>{{ $title }}</span></strong></li>
      </ul>
      <div class="col-title d-none">
         <h1>{{ $title }}</h1>
      </div>
  
      <div class="row">
         <aside class="dqdt-sidebar left-content  col-lg-3 col-12">
            <div class="close-filters d-lg-none d-xl-none" title="Đóng bộ lọc">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
               </svg>
            </div>
            <div class="section-box-bg">
               <aside class="aside-item collection-category aside-cate">
                  <div class="aside-title">
                     Danh mục sản phẩm
                  </div>
                  <div class="aside-content aside-content-sub clearfix">
                     <ul class="navbar-pills nav-category">
                        @foreach ($categoryhome as $cate)
                            <li class="nav-item ">
                            <a href="{{route('allListProCate',['danhmuc' => $cate->slug])}}" class="nav-link" title="{{ languageName($cate->name) }}">{{languageName($cate->name) }} </a>
                            <span class="Collapsible__Plus"></span>
                            <ul class="dropdown-menu">
                                @foreach ($cate->typecate as $type)
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('allListType', ['danhmuc' => $cate->slug, 'loaidanhmuc' => $type->slug]) }}" title="{{ languageName($type->name) }}">{{ languageName($type->name) }} </a>
                                    </li>
                                @endforeach
                               
                            </ul>
                            </li>
                        @endforeach
                    
                     </ul>
                  </div>
               </aside>
               <script>
                  $('.nav-category .Collapsible__Plus').click(function(e){
                  	$(this).parent().toggleClass('active');
                  });
                  
                  // Hàm lọc item trong danh sách
                  window.filterItemInList = function($input) {
                      var searchTerm = $input.val().toLowerCase();
                      var $filterItems = $input.closest('.aside-item').find('.filter-item');
                      
                      $filterItems.each(function() {
                          var text = $(this).text().toLowerCase();
                          if (text.indexOf(searchTerm) > -1) {
                              $(this).show();
                          } else {
                              $(this).hide();
                          }
                      });
                  };
               </script>
               <div class="clearfix"></div>
               <div class="filter-content">
                  <div class="filter-container">
                     <div class="filter-container__selected-filter " style="display: none;">
                        <div class="filter-container__selected-filter-header clearfix">
                           <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                           <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all" title="Bỏ chọn hết">
                              Bỏ chọn hết 
                              <i class="icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10" height="10" x="0" y="0" viewBox="0 0 365.696 365.696" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                       <path xmlns="http://www.w3.org/2000/svg" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0" fill="#ffffff" data-original="#000000" style="" class=""></path>
                                    </g>
                                 </svg>
                              </i>
                           </a>
                        </div>
                        <div class="filter-container__selected-filter-list">
                           <ul></ul>
                        </div>
                     </div>
                     <!-- Lọc giá -->
                     <aside class="aside-item filter-price">
                        <div class="aside-title">
                           <h2><span>Chọn mức giá</span></h2>
                        </div>
                        <div class="aside-content filter-group content_price">
                           <ul>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="100-000d" for="filter-duoi-100-000d">
                                 <input type="checkbox" id="filter-duoi-100-000d"  data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
                                 <i class="fa"></i>
                                 Dưới 100.000đ
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="200-000d" for="filter-100-000d-200-000d">
                                 <input type="checkbox" id="filter-100-000d-200-000d"  data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)" data-operator="OR">
                                 <i class="fa"></i> 
                                 Từ 100.000đ - 200.000đ							
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="500-000d" for="filter-200-000d-500-000d">
                                 <input type="checkbox" id="filter-200-000d-500-000d"  data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 500.000đ" value="(>=200000 AND <=500000)" data-operator="OR">
                                 <i class="fa"></i> 
                                 Từ 200.000đ - 500.000đ							
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="1-000-000d" for="filter-500-000d-1-000-000d">
                                 <input type="checkbox" id="filter-500-000d-1-000-000d"  data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 1.000.000đ" value="(>=500000 AND <=1000000)" data-operator="OR">
                                 <i class="fa"></i> 
                                 Từ 500.000đ - 1 triệu							
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="2-000-000d" for="filter-1-000-000d-2-000-000d">
                                 <input type="checkbox" id="filter-1-000-000d-2-000-000d"  data-group="Khoảng giá" data-field="price_min" data-text="1.000.000đ - 2.000.000đ" value="(>=1000000 AND <=2000000)" data-operator="OR">
                                 <i class="fa"></i> 
                                 Từ 1 triệu - 2 triệu							
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="6-000-000d" for="filter-2-000-000d-6-000-000d">
                                 <input type="checkbox" id="filter-2-000-000d-6-000-000d"  data-group="Khoảng giá" data-field="price_min" data-text="2.000.000đ - 6.000.000đ" value="(>=2000000 AND <=6000000)" data-operator="OR">
                                 <i class="fa"></i> 
                                 Từ 2 triệu - 6 triệu							
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="15-000-000d" for="filter-6-000-000d-15-000-000d">
                                 <input type="checkbox" id="filter-6-000-000d-15-000-000d"  data-group="Khoảng giá" data-field="price_min" data-text="6.000.000đ - 15.000.000đ" value="(>=6000000 AND <=15000000)" data-operator="OR">
                                 <i class="fa"></i> 
                                 Từ 6 triệu - 15 triệu							
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="20-000-000d" for="filter-15-000-000d-20-000-000d">
                                 <input type="checkbox" id="filter-15-000-000d-20-000-000d" data-group="Khoảng giá" data-field="price_min" data-text="15.000.000đ - 20.000.000đ" value="(>=15000000 AND <=20000000)" data-operator="OR">
                                 <i class="fa"></i>
                                 Từ 15 triệu - 20 triệu							
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label data-filter="20-000-000d" for="filter-tren20-000-000d">
                                 <input type="checkbox" id="filter-tren20-000-000d" data-group="Khoảng giá" data-field="price_min" data-text="Trên 20.000.000đ" value="(>20000000)" data-operator="OR">
                                 <i class="fa"></i>
                                 Trên 20 triệu
                                 </label>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </aside>
                     <!-- End Lọc giá -->
                     
                     <!-- Lọc Công năng (Tags) -->
                     @if(isset($filter) && $filter->count() > 0)
                        @foreach($filter as $tagCate)
                           @if($tagCate->tags && $tagCate->tags->count() > 0)
                           <aside class="aside-item filter-tags">
                              <div class="aside-title">
                                 <h2 class="title-filter title-head margin-top-0"><span>{{ $tagCate->name }}</span></h2>
                              </div>
                            
                              <div class="aside-content filter-group">
                                 <ul>
                                    @foreach($tagCate->tags as $tag)
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                       <label for="filter-tag-{{ $tag->id }}">
                                       <input type="checkbox" id="filter-tag-{{ $tag->id }}" data-group="TAG" data-field="tags" data-text="{{ $tag->name }}" value="{{ $tag->slug }}" data-operator="OR">
                                       <i class="fa"></i>
                                       {{ $tag->name }}
                                       </label>
                                       </span>
                                    </li>
                                    @endforeach
                                 </ul>
                              </div>
                           </aside>
                           @endif
                        @endforeach
                     @endif
                     <!-- End Lọc Công năng -->
                     
                     <!-- Lọc Thương hiệu -->
                     {{-- <aside class="aside-item filter-vendor f-left">
                        <div class="aside-title">
                           <h2 class="title-filter title-head margin-top-0"><span>Thương hiệu</span></h2>
                        </div>
                        <div class="field-search input-group">
                           <input type="text" placeholder="Tìm kiếm" class="form-control filter-vendor-list" onkeyup="filterItemInList(jQuery('.filter-vendor-list'))">
                           <button class="btn btn-default">
                              <svg viewBox="0 0 451 451" style="width:20px;">
                                 <g fill="#000">
                                    <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3
                                       s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4
                                       C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3
                                       s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"></path>
                                 </g>
                              </svg>
                           </button>
                        </div>
                        <div class="aside-content margin-top-0 filter-group">
                           <ul>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-safety-jogger">
                                 <input type="checkbox" id="filter-safety-jogger" data-group="Hãng" data-field="vendor" data-text="Safety Jogger" value="(Safety Jogger)" data-operator="OR">
                                 <i class="fa"></i>
                                 Safety Jogger
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-day-dai-hp">
                                 <input type="checkbox" id="filter-day-dai-hp" data-group="Hãng" data-field="vendor" data-text="Dây Đai HP" value="(Dây Đai HP)" data-operator="OR">
                                 <i class="fa"></i>
                                 Dây Đai HP
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-kukje">
                                 <input type="checkbox" id="filter-kukje" data-group="Hãng" data-field="vendor" data-text="Kukje" value="(Kukje)" data-operator="OR">
                                 <i class="fa"></i>
                                 Kukje
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-bosch">
                                 <input type="checkbox" id="filter-bosch" data-group="Hãng" data-field="vendor" data-text="Bosch" value="(Bosch)" data-operator="OR">
                                 <i class="fa"></i>
                                 Bosch
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-black-decker">
                                 <input type="checkbox" id="filter-black-decker" data-group="Hãng" data-field="vendor" data-text="Black Decker" value="(Black Decker)" data-operator="OR">
                                 <i class="fa"></i>
                                 Black Decker
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-dewalt">
                                 <input type="checkbox" id="filter-dewalt" data-group="Hãng" data-field="vendor" data-text="Dewalt" value="(Dewalt)" data-operator="OR">
                                 <i class="fa"></i>
                                 Dewalt
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-hyundai">
                                 <input type="checkbox" id="filter-hyundai" data-group="Hãng" data-field="vendor" data-text="Hyundai" value="(Hyundai)" data-operator="OR">
                                 <i class="fa"></i>
                                 Hyundai
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-stihl">
                                 <input type="checkbox" id="filter-stihl" data-group="Hãng" data-field="vendor" data-text="Stihl" value="(Stihl)" data-operator="OR">
                                 <i class="fa"></i>
                                 Stihl
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-jogger">
                                 <input type="checkbox" id="filter-jogger" data-group="Hãng" data-field="vendor" data-text="Jogger" value="(Jogger)" data-operator="OR">
                                 <i class="fa"></i>
                                 Jogger
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-han-quoc">
                                 <input type="checkbox" id="filter-han-quoc" data-group="Hãng" data-field="vendor" data-text="Hàn Quốc" value="(Hàn Quốc)" data-operator="OR">
                                 <i class="fa"></i>
                                 Hàn Quốc
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-bao-ho-viet-nam">
                                 <input type="checkbox" id="filter-bao-ho-viet-nam" data-group="Hãng" data-field="vendor" data-text="Bảo hộ Việt Nam" value="(Bảo hộ Việt Nam)" data-operator="OR">
                                 <i class="fa"></i>
                                 Bảo hộ Việt Nam
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-dickies">
                                 <input type="checkbox" id="filter-dickies" data-group="Hãng" data-field="vendor" data-text="Dickies" value="(Dickies)" data-operator="OR">
                                 <i class="fa"></i>
                                 Dickies
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-den-giao-thong">
                                 <input type="checkbox" id="filter-den-giao-thong" data-group="Hãng" data-field="vendor" data-text="Đèn giao thông" value="(Đèn giao thông)" data-operator="OR">
                                 <i class="fa"></i>
                                 Đèn giao thông
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-trung-quoc">
                                 <input type="checkbox" id="filter-trung-quoc" data-group="Hãng" data-field="vendor" data-text="Trung Quốc" value="(Trung Quốc)" data-operator="OR">
                                 <i class="fa"></i>
                                 Trung Quốc
                                 </label>
                                 </span>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <span>
                                 <label for="filter-bean-cons">
                                 <input type="checkbox" id="filter-bean-cons" data-group="Hãng" data-field="vendor" data-text="Bean Cons" value="(Bean Cons)" data-operator="OR">
                                 <i class="fa"></i>
                                 Bean Cons
                                 </label>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </aside> --}}
                     <!-- End Lọc Thương hiệu -->
                     <!-- Lọc tag 1 -->
                     <!-- End lọc tag 1 -->
                     <!-- Lọc tag 2 -->
                     <!-- End lọc tag 2 -->
                     <!-- Lọc tag 3 -->
                  </div>
               </div>
            </div>
         </aside>
         <div class="block-collection col-lg-9 col-12">
            <div class="category-products products-view products-view-grid list_hover_pro">
               <div class="filter-containers">
                  <div class="sort-cate clearfix">
                     <div class="sort-cate-right">
                        <h3>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                              <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                           </svg>
                           Sắp xếp
                        </h3>
                        <ul>
                           <li class="btn-quick-sort default active">
                              <a href="javascript:;" onclick="sortby('default')" title="Mặc định"><i></i>Mặc định</a>
                           </li>
                           <li class="btn-quick-sort alpha-asc">
                              <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
                           </li>
                           <li class="btn-quick-sort alpha-desc">
                              <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a>
                           </li>
                           <li class="btn-quick-sort position-desc">
                              <a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng mới</a>
                           </li>
                           <li class="btn-quick-sort price-asc">
                              <a href="javascript:;" onclick="sortby('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                           </li>
                           <li class="btn-quick-sort price-desc">
                              <a href="javascript:;" onclick="sortby('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                           </li>
                        </ul>
                     </div>
                     <div class="sudes-filter">
                        <a class="btn btn-outline btn-filter" title="Bộ lọc">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                              <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                           </svg>
                           Bộ lọc
                           <span class="count-filter-val"></span>
                        </a>
                     </div>
                  </div>
                  <script>
                     function countFilterItem() {
                     	var countFilter = $('.filter-container__selected-filter-list ul li').length;
                     	$(".count-filter-val").text(countFilter);
                     }
                     countFilterItem();
                  </script>
               </div>
               <div class="products-view products-view-grid list_hover_pro">
                  <div class="row">
                    @foreach ($list as $pro)
                      @include('layouts.product.itemlist')
                    @endforeach
          
                  </div>
               </div>
               <div class="pagenav">
                 {{ $list->links() }}
               </div>
            </div>
        
         </div>
      </div>
   </div>
</div>
<script>
   /*
   * HỆ THỐNG LỌC VÀ SẮP XẾP SẢN PHẨM
   * - Lọc theo khoảng giá
   * - Lọc theo loại sản phẩm
   * - Lọc theo thương hiệu
   * - Sắp xếp theo tên, giá, mới nhất
   */
   
   var colName = "Tất cả sản phẩm";
   
   var colId = 0;
   
   var selectedViewData = "data";
   
   // Biến lưu trữ các bộ lọc đã chọn
   var selectedPriceRanges = [];
   var selectedVendors = [];
   var selectedTags = [];
   var currentSort = 'default';
   var currentPage = 1;
   
   // Hàm kiểm tra giá có nằm trong khoảng không
   function isPriceInRange(price, rangeValue) {
       // Loại bỏ dấu ngoặc đơn
       rangeValue = rangeValue.replace(/[()]/g, '');
       
       if (rangeValue.includes('>=') && rangeValue.includes('<=')) {
           // Khoảng từ A đến B: (>=100000 AND <=200000)
           const matches = rangeValue.match(/\d+/g);
           if (matches && matches.length >= 2) {
               const minPrice = parseInt(matches[0]);
               const maxPrice = parseInt(matches[1]);
               return price >= minPrice && price <= maxPrice;
           }
       } else if (rangeValue.startsWith('<') && !rangeValue.includes('=')) {
           // Dưới X: (<100000)
           const maxPrice = parseInt(rangeValue.match(/\d+/)[0]);
           return price < maxPrice;
       } else if (rangeValue.startsWith('>') && !rangeValue.includes('=')) {
           // Trên X: (>20000000)
           const minPrice = parseInt(rangeValue.match(/\d+/)[0]);
           return price > minPrice;
       }
       return false;
   }
   
   // Hàm lọc sản phẩm
   function filterProducts() {
       let visibleCount = 0;
       
       $('.product-item').each(function() {
           let show = true;
           const productPrice = parseFloat($(this).data('price')) || 0;
           const productVendor = String($(this).data('vendor') || '').toLowerCase();
           const productTags = String($(this).data('tags') || '').toLowerCase();
           
           // Lọc theo giá
           if (selectedPriceRanges.length > 0) {
               let matchPrice = false;
               selectedPriceRanges.forEach(function(range) {
                   if (isPriceInRange(productPrice, range)) {
                       matchPrice = true;
                   }
               });
               if (!matchPrice) show = false;
           }
           
           // Lọc theo thương hiệu
           if (selectedVendors.length > 0) {
               let matchVendor = false;
               selectedVendors.forEach(function(vendor) {
                   if (productVendor.indexOf(vendor.toLowerCase()) > -1) {
                       matchVendor = true;
                   }
               });
               if (!matchVendor) show = false;
           }
           
           // Lọc theo tags (công năng)
           if (selectedTags.length > 0) {
               let matchTag = false;
               selectedTags.forEach(function(tag) {
                   if (productTags.indexOf(tag.toLowerCase()) > -1) {
                       matchTag = true;
                   }
               });
               if (!matchTag) show = false;
           }
           
           if (show) {
               $(this).show();
               visibleCount++;
           } else {
               $(this).hide();
           }
       });
       
       // Hiển thị thông báo nếu không có sản phẩm
       if (visibleCount === 0) {
           if ($('.no-products-message').length === 0) {
               $('.products-view-grid .row').append('<div class="col-12 no-products-message"><p class="text-center">Không tìm thấy sản phẩm phù hợp</p></div>');
           }
       } else {
           $('.no-products-message').remove();
       }
       
       updateFilterCount();
   }
   
   // Hàm cập nhật số lượng bộ lọc
   function updateFilterCount() {
       const totalFilters = selectedPriceRanges.length + selectedVendors.length + selectedTags.length;
       $('.count-filter-val').text(totalFilters > 0 ? totalFilters : '');
       
       if (totalFilters > 0) {
           updateSelectedFilterDisplay();
           $('.filter-container__selected-filter').show();
       } else {
           $('.filter-container__selected-filter').hide();
       }
   }
   
   // Hàm hiển thị các bộ lọc đã chọn
   function updateSelectedFilterDisplay() {
       const $filterList = $('.filter-container__selected-filter-list ul');
       $filterList.empty();
       
       // Hiển thị giá đã chọn
       selectedPriceRanges.forEach(function(range) {
           const $checkbox = $(`.content_price input[value="${range}"]`);
           const text = $checkbox.data('text');
           $filterList.append(`
               <li class="filter-container__selected-filter-item" data-price="${range}">
                   <a href="javascript:;" onclick="removePriceFilter('${range}')">
                       <i class="fa fa-close"></i> ${text}
                   </a>
               </li>
           `);
       });
       
       // Hiển thị thương hiệu đã chọn
       selectedVendors.forEach(function(vendor) {
           const $checkbox = $(`.filter-vendor input[value*="${vendor}"]`);
           const text = $checkbox.parent().text().trim();
           $filterList.append(`
               <li class="filter-container__selected-filter-item" data-vendor="${vendor}">
                   <a href="javascript:;" onclick="removeVendorFilter('${vendor}')">
                       <i class="fa fa-close"></i> ${text}
                   </a>
               </li>
           `);
       });
       
       // Hiển thị tags đã chọn
       selectedTags.forEach(function(tag) {
           const $checkbox = $(`.filter-tags input[value="${tag}"]`);
           const text = $checkbox.data('text');
           $filterList.append(`
               <li class="filter-container__selected-filter-item" data-tag="${tag}">
                   <a href="javascript:;" onclick="removeTagFilter('${tag}')">
                       <i class="fa fa-close"></i> ${text}
                   </a>
               </li>
           `);
       });
   }
   
   // Hàm xóa bộ lọc giá
   window.removePriceFilter = function(range) {
       $(`.content_price input[value="${range}"]`).prop('checked', false);
       selectedPriceRanges = selectedPriceRanges.filter(r => r !== range);
       filterProducts();
   };
   
   // Hàm xóa bộ lọc thương hiệu
   window.removeVendorFilter = function(vendor) {
       $(`.filter-vendor input[value*="${vendor}"]`).prop('checked', false);
       selectedVendors = selectedVendors.filter(v => v !== vendor);
       filterProducts();
   };
   
   // Hàm xóa bộ lọc tags
   window.removeTagFilter = function(tag) {
       $(`.filter-tags input[value="${tag}"]`).prop('checked', false);
       selectedTags = selectedTags.filter(t => t !== tag);
       filterProducts();
   };
   
   // Hàm xóa tất cả bộ lọc
   window.clearAllFiltered = function() {
       $('.filter-price input, .filter-vendor input, .filter-tags input').prop('checked', false);
       selectedPriceRanges = [];
       selectedVendors = [];
       selectedTags = [];
       filterProducts();
   };
   
   // Hàm sắp xếp sản phẩm
   window.sortby = function(sortType) {
       currentSort = sortType;
       $('.btn-quick-sort').removeClass('active');
       $(`.btn-quick-sort.${sortType}`).addClass('active');
       
       const $container = $('.products-view-grid .row');
       const $products = $container.find('.product-item').get();
       
       $products.sort(function(a, b) {
           const $a = $(a);
           const $b = $(b);
           
           switch(sortType) {
               case 'alpha-asc':
                   return $a.data('name').localeCompare($b.data('name'));
               case 'alpha-desc':
                   return $b.data('name').localeCompare($a.data('name'));
               case 'price-asc':
                   return parseFloat($a.data('price')) - parseFloat($b.data('price'));
               case 'price-desc':
                   return parseFloat($b.data('price')) - parseFloat($a.data('price'));
               case 'created-desc':
                   return $b.data('id') - $a.data('id');
               default:
                   return 0;
           }
       });
       
       $.each($products, function(index, item) {
           $container.append(item);
       });
   };
   
   // Hàm phân trang
   window.doSearch = function(page) {
       currentPage = page;
       // Có thể implement AJAX để load sản phẩm theo trang
       console.log('Loading page: ' + page);
   };
   
   // Khởi tạo sự kiện khi trang load
   $(document).ready(function() {
       // Sự kiện cho checkbox giá
       $('.content_price input[type="checkbox"]').on('change', function() {
           const value = $(this).val();
           if ($(this).is(':checked')) {
               selectedPriceRanges.push(value);
           } else {
               selectedPriceRanges = selectedPriceRanges.filter(r => r !== value);
           }
           filterProducts();
       });
       
       // Sự kiện cho checkbox thương hiệu
       $('.filter-vendor input[type="checkbox"]').on('change', function() {
           const value = $(this).val();
           let vendor = '';
           // Lấy giá trị vendor từ value attribute
           const matches = value.match(/\(([^)]+)\)/);
           if (matches && matches[1]) {
               vendor = matches[1];
           }
           if (vendor && $(this).is(':checked')) {
               selectedVendors.push(vendor);
           } else if (vendor) {
               selectedVendors = selectedVendors.filter(v => v !== vendor);
           }
           filterProducts();
       });
       
       // Sự kiện cho checkbox tags (công năng)
       $('.filter-tags input[type="checkbox"]').on('change', function() {
           const value = $(this).val();
           if ($(this).is(':checked')) {
               selectedTags.push(value);
           } else {
               selectedTags = selectedTags.filter(t => t !== value);
           }
           filterProducts();
       });
       
       // Sự kiện mở/đóng bộ lọc trên mobile
       $('.btn-filter').on('click', function() {
           $('.dqdt-sidebar').addClass('openf');
           $('.open-filters').addClass('openf');
       });
       
       $('.close-filters').on('click', function() {
           $('.dqdt-sidebar').removeClass('openf');
           $('.open-filters').removeClass('openf');
       });
   });
   
   var swiperbanner1 = new Swiper('.banner-swiper', {
   	slidesPerView: 3,
   	loop: false,
   	grabCursor: true,
   	spaceBetween: 30,
   	roundLengths: true,
   	slideToClickedSlide: false,
   	navigation: {
   		nextEl: '.banner-swiper .swiper-button-next',
   		prevEl: '.banner-swiper .swiper-button-prev',
   	},
   	autoplay: false,
   	breakpoints: {
   		300: {
   			slidesPerView: 1,
   			spaceBetween: 10
   		},
   		500: {
   			slidesPerView: 1,
   			spaceBetween: 10
   		},
   		640: {
   			slidesPerView: 2,
   			spaceBetween: 10
   		},
   		768: {
   			slidesPerView: 2,
   			spaceBetween: 20
   		},
   		991: {
   			slidesPerView: 3,
   			spaceBetween: 20
   		},
   		1200: {
   			slidesPerView: 3,
   			spaceBetween: 20
   		}
   	}
   });
   $('.view_mores a.one').click(function() {
   	$(this).addClass('active');
   	$('.view_mores a.two').removeClass('active');
   	$('.content_coll').addClass('active');
   	$('.bg_cl').addClass('active');
   });
   $('.view_mores a.two').click(function() {
   	$(this).addClass('active');
   	$('.view_mores a.one').removeClass('active');
   	$('.content_coll').removeClass('active');
   	$('.bg_cl').removeClass('active');
   });
</script>



@endsection