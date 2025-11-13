@extends('layouts.main.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    Danh sách {{ $title }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('script')
@endsection
@section('css')
@endsection
@section('content')
trang tđư
@endsection
