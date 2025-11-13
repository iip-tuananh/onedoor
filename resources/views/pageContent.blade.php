@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')

@endsection
@section('js')
@endsection
@section('content')

<section class="bread-crumb mb-15" style="background-image: url({{asset('frontend/images/ngang.jpg')}});">
	<span class="crumb-border"></span>
	<div class="container">
		<div class="row">
			<div class="col-12 a-left">
			
			</div>
		</div>
	</div>
</section>
<section class="page section">
	<div class="container card py-2">
			<ul class="breadcrumb m-0 px-0">					
					<li>
						<a href="{{route('home')}}" target="_self"><span>Trang chủ</span></a>
						<span class="mr_lr">&nbsp;/&nbsp;</span>		
					</li>
					
					<li class="active">
						<span>{{$pagecontentdetail->title}}</span>
						
					</li>
					
				</ul>
		<div class="wrap_background_aside margin-bottom-40">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="heading-bar">
							<h1 class="title_page"><a href="javascript:0">{{$pagecontentdetail->title}}</a></h1>
					</div>

					<div class="content-page rte py-3">
						{!!$pagecontentdetail->content!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection