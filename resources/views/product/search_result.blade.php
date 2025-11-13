@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$product->total()}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<style>.search_0{color:var(--mainColor);font-size:1.2rem}.b_search svg{max-height:120px}.b_search svg .m_color{fill:var(--mainColor)}.t-search{font-size:1rem}</style>
@endsection
@section('content')
<section class="bread-crumb"
            style="background-image: url({{asset('frontend/images/ngang.jpg')}});">
        </section>
<div class="contentWarp ">
	<div class="breadcrumbs">
	   <div class="container position-relative">
		  <ul class="breadcrumb align-items-center m-0 pl-0 pr-0 small pt-2 pb-2">
			 <li class="home">
				<a href="{{route('home')}}" title="Trang chủ">
				   <svg width="12" height="10.633">
					  <use href="#svg-home"></use>
				   </svg>
				   Trang chủ
				</a>
				<span class="slash-divider ml-2 mr-2">/</span>
			 </li>
			 <li>Kết quá tìm kiếm - </li>
		  </ul>
	   </div>
	</div>
	<section class="search-layout">
	   <div class="container rounded" style="min-height: 350px">
		  <div class="category-products position-relative mt-4 mb-4 pt-3 pb-2 b_search">
			 <h1 class="h3 mb-3 t-search" style="font-size: 20px">Có {{$product->total()}} kết quả tìm kiếm với từ khóa "{{$keyword}}"</h1>
			 <div class="row slider-items">
				@foreach ($product as $item)
				
					@include('layouts.product.itemlist',['pro'=>$item])
			
				@endforeach
				
			 </div>
			     <div class="row">
              <div class="col-lg-12 col-12 d-flex justify-content-center">
            	{{ $product->appends(['keywordsearch' => $keyword])->links() }}
               </div> 
            </div>
		  </div>
	   </div>
	</section>
 </div>
@endsection