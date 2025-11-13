@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức cập nhật
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')

@endsection
@section('content')
<div class="bodywrap">
<section class="bread-crumb" style="background-image: url({{asset('frontend/images/ngang.jpg')}});">
   
</section>
<div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
  
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
         <li class="home">
            <a  href="{{route('allListBlog')}}" ><span >Tin Tức</span></a>						
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         
         <li><strong ><span>{{$title_page}}</span></strong></li>
      </ul>
      <div class="row">
         <div class="col-lg-12 col-12">
            <div class="title-page blog-title d-none">
               <h1 class="btxt_blog">Tin tức</h1>
            </div>
         </div>
         <div class="right-content col-lg-12 col-12 order-lg-2">
            <div class="box_blog_list">
               <div class="row list-news">
                  @if (count($blog) == 0)
                     <p class="text-center" style="text-align: center; width:100%">Chưa có bài viết nào trong mục này!</p>

                  @else
                  @foreach ($blog as $item)
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="item_blog">
                           <a  class="image-blog" href="{{route('detailBlog',$item->slug)}}" title="{!!languageName($item->title)!!}">
                           <img src="{{$item->image}}" data-src="{{$item->image}}" alt="{!!languageName($item->title)!!}" class="lazyload duration-300" />
                           <span class="user_date"> {{$item->created_at}}</span> 
                           </a>
                           <div class="blog_content">
                              <h3><a href="{{route('detailBlog',$item->slug)}}" title="{!!languageName($item->title)!!}">{!!languageName($item->title)!!}</a></h3>
                              <p class="update_date clearfix">
                                 <span class="user_name">Đăng bởi: <b>ONE DOOR</b></span> 
                              </p>
                              <div class="conten_info_blog">
                                 <p class="blog_description">{!!languageName($item->description)!!}</p>
                                 <a href="{{route('detailBlog',$item->slug)}}" title="Đọc tiếp" class="read_more">Đọc tiếp >></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
                
                  <div class="pagi-div">
                     <nav class="clearfix relative nav_pagi w_100 ">
                     {{ $blog->links() }}
                     </nav>
                  </div>
                  @endif
               </div>
            </div>
         </div>
       
      </div>
   </div>
</div>
<div class="ab-module-article-mostview"></div>
<script>
   var swipertopic = new Swiper('.swipertopic', {
   	slidesPerView: 5,
   	spaceBetween: 20,
   	breakpoints: {
   		300: {
   			slidesPerView: 1.4,
   			spaceBetween: 20
   		},
   		768: {
   			slidesPerView: 3.2,
   			spaceBetween: 20
   		},
   		1024: {
   			slidesPerView: 3.2,
   			spaceBetween: 20
   		},
   		1199: {
   			slidesPerView: 4.2,
   			spaceBetween: 20
   		}
   	}
   });
</script>
<div id="js-global-alert" class="alert alert-success" role="alert">
   <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span></button>
   <h5 class="alert-heading"></h5>
   <p class="alert-content"></p>
</div>
<script>
   (function($){"use strict";$.ajaxChimp={responses:{"We have sent you a confirmation email":0,"Please enter a valueggg":1,"An email address must contain a single @":2,"The domain portion of the email address is invalid (the portion after the @: )":3,"The username portion of the email address is invalid (the portion before the @: )":4,"This email address looks fake or invalid. Please enter a real email address":5},translations:{en:null},init:function(selector,options){$(selector).ajaxChimp(options)}};$.fn.ajaxChimp=function(options){$(this).each(function(i,elem){var form=$(elem);var email=form.find("input[type=email]");var label=form.find("label[for="+email.attr("id")+"]");var settings=$.extend({url:form.attr("action"),language:"en"},options);var url=settings.url.replace("/post?","/post-json?").concat("&c=?");form.attr("novalidate","true");email.attr("name","EMAIL");form.submit(function(){var msg;function successCallback(resp){if(resp.result==="success"){msg="We have sent you a confirmation email";label.removeClass("error").addClass("valid");email.removeClass("error").addClass("valid")}else{email.removeClass("valid").addClass("error");label.removeClass("valid").addClass("error");var index=-1;try{var parts=resp.msg.split(" - ",2);if(parts[1]===undefined){msg=resp.msg}else{var i=parseInt(parts[0],10);if(i.toString()===parts[0]){index=parts[0];msg=parts[1]}else{index=-1;msg=resp.msg}}}catch(e){index=-1;msg=resp.msg}}if(settings.language!=="en"&&$.ajaxChimp.responses[msg]!==undefined&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]){msg=$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]}label.html(msg);label.show(2e3);if(settings.callback){settings.callback(resp)}}var data={};var dataArray=form.serializeArray();$.each(dataArray,function(index,item){data[item.name]=item.value});$.ajax({url:url,data:data,success:successCallback,dataType:"jsonp",error:function(resp,text){console.log("mailchimp ajax submit error: "+text)}});var submitMsg="Submitting...";if(settings.language!=="en"&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language]["submit"]){submitMsg=$.ajaxChimp.translations[settings.language]["submit"]}label.html(submitMsg).show(2e3);return false})});return this}})(jQuery);
</script>

@endsection