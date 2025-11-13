@extends('layouts.main.master')
@section('title')
{{ $title_page }}
@endsection
@section('description')
Tin tức cập nhật
@endsection
@section('image')
{{ url('' . $banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('content')
<section class="bread-crumb mb-15">
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-12 a-left">
            <ul class="breadcrumb m-0 px-0">
               <li>
                  <a href="{{route('home')}}" target="_self"><span>Trang chủ</span></a>
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li class="active">
                  <span>Tất cả tin tức</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="blogpage section">
   <div class="containers" itemscope="" itemtype="https://schema.org/Blog">
      <div class="wrap_background_aside margin-bottom-0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-12 py-3 content-blog">
                  <h1 class="title_page mb-3">Tin tức mới</h1>
                  <div class="row">
                     @foreach ($blog as $item)
                        <div class="col-md-4 col-6">
                           <div class="blogwp clearfix">
                              <a class="image-blog card-img-top text-center position-relative 
                                 d-flex align-items-center justify-content-center
                                 aspect-ratio
                                 "
                                 href="{{route('detailBlog',$item->slug)}}"
                                 title="Chính Sách Bảo Hành Hãng Casper 2025"
                                 style=" --width: 400;
                                 --height: 270;">
                              <img class="img-fluid m-auto mh-100 w-auto"
                                 src="{{$item->image}}"
                                 alt="Chính Sách Bảo Hành Hãng Casper 2025">
                              </a>
                              <div class="content_blog clearfix card-body px-0 py-2">
                                 <h3>
                                    <a class="link"
                                       href="{{route('detailBlog',$item->slug)}}"
                                       title="Chính Sách Bảo Hành Hãng Casper 2025">{!!languageName($item->title)!!}</a>
                                 </h3>
                                 <div class="media">
                                    <div class="media-body">
                                       <div class="text-muted mt-0">
                                          {{date('d/m/Y', strtotime($item->created_at))}}
                                       </div>
                                    </div>
                                 </div>
                                 <p class="justify">
                                    <span class="art-summary">
                                    <div class="line-camp-3">{!!languageName($item->description)!!}</div>
                                    </span>
                                    <a class="button_custome_35 link"
                                       href="{{route('detailBlog',$item->slug)}}"
                                       title="Đọc tiếp">Đọc tiếp</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     @endforeach
                
              
                  </div>
               </div>
           
            </div>
            <div class="row">
              <div class="col-lg-12 col-12 d-flex justify-content-center">
               {{ $blog->links() }}
               </div> 
            </div>
         </div>
      </div>
   </div>
</section>
@endsection