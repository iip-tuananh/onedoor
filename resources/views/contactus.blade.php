@extends('layouts.main.master')
@section('title')
    Liên hệ với chúng tôi
@endsection
@section('description')
    Liên hệ với chúng tôi
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')

@endsection
@section('js')
@endsection
@section('content')
    <div class="bodywrap">

        <section class="bread-crumb"
            style="background-image: url({{asset('frontend/images/ngang.jpg')}});">

          
        </section>
        <div class="layout-contact">
            <div class="container">
                
                </ul>
                <h1 class="title-head-contact d-none">Thông Tin Liên Hệ</h1>
                <div class="bg-shadow">
                    <div class="row mb-30">
                        <div class="col-md-12 col-12">
                            <div class="section-title-about">
                                <h2>Thông Tin Liên Hệ</h2>
                            </div>
                            <div class="desc">
                                Với sứ mệnh "Khách hàng là ưu tiên số 1" chúng tôi luôn mạng lại giá trị tốt nhất
                            </div>
                        </div>

                        <div class="col-md-3 col-12">
                            <div class="box_contact">
                                <span class="icon_cont">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 0C12.9715 0 7.10938 5.66172 7.10938 12.8906C7.10938 15.6408 7.93578 18.0931 9.5218 20.3911L19.0135 35.202C19.474 35.922 20.527 35.9206 20.9865 35.202L30.5194 20.3407C32.0713 18.1469 32.8906 15.5709 32.8906 12.8906C32.8906 5.78273 27.1079 0 20 0ZM20 18.75C16.7693 18.75 14.1406 16.1213 14.1406 12.8906C14.1406 9.65992 16.7693 7.03125 20 7.03125C23.2307 7.03125 25.8594 9.65992 25.8594 12.8906C25.8594 16.1213 23.2307 18.75 20 18.75Z"
                                            fill="#F1592B" />
                                        <path
                                            d="M29.1613 26.9293L23.2604 36.1549C21.733 38.5363 18.2585 38.5285 16.7384 36.1571L10.828 26.9317C5.62766 28.1341 2.42188 30.3367 2.42188 32.9688C2.42188 37.5361 11.4788 40 20 40C28.5212 40 37.5781 37.5361 37.5781 32.9688C37.5781 30.3348 34.3679 28.131 29.1613 26.9293Z"
                                            fill="#F1592B" />
                                    </svg>
                                </span>
                                <b>Địa chỉ 1</b>

                                {{$setting->address1}}

                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="box_contact">
                                <span class="icon_cont">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 0C12.9715 0 7.10938 5.66172 7.10938 12.8906C7.10938 15.6408 7.93578 18.0931 9.5218 20.3911L19.0135 35.202C19.474 35.922 20.527 35.9206 20.9865 35.202L30.5194 20.3407C32.0713 18.1469 32.8906 15.5709 32.8906 12.8906C32.8906 5.78273 27.1079 0 20 0ZM20 18.75C16.7693 18.75 14.1406 16.1213 14.1406 12.8906C14.1406 9.65992 16.7693 7.03125 20 7.03125C23.2307 7.03125 25.8594 9.65992 25.8594 12.8906C25.8594 16.1213 23.2307 18.75 20 18.75Z"
                                            fill="#F1592B" />
                                        <path
                                            d="M29.1613 26.9293L23.2604 36.1549C21.733 38.5363 18.2585 38.5285 16.7384 36.1571L10.828 26.9317C5.62766 28.1341 2.42188 30.3367 2.42188 32.9688C2.42188 37.5361 11.4788 40 20 40C28.5212 40 37.5781 37.5361 37.5781 32.9688C37.5781 30.3348 34.3679 28.131 29.1613 26.9293Z"
                                            fill="#F1592B" />
                                    </svg>
                                </span>
                                <b>Địa chỉ 2</b>

                                {{$setting->address2}}

                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="box_contact">
                                <span class="icon_cont">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_91_24409)">
                                            <path
                                                d="M30.4107 26.4608C29.1039 25.1707 27.4725 25.1707 26.174 26.4608C25.1835 27.443 24.193 28.4252 23.2191 29.424C22.9527 29.6987 22.728 29.757 22.4034 29.5739C21.7625 29.2243 21.0799 28.9413 20.464 28.5584C17.5923 26.7521 15.1868 24.4299 13.0559 21.8162C11.9988 20.5178 11.0583 19.1277 10.4007 17.5629C10.2675 17.2466 10.2925 17.0385 10.5505 16.7804C11.541 15.8232 12.5066 14.841 13.4804 13.8589C14.8372 12.4938 14.8372 10.8956 13.4721 9.52225C12.698 8.73983 11.9239 7.97405 11.1498 7.19163C10.3508 6.39257 9.56002 5.58517 8.75263 4.79443C7.44582 3.52092 5.81439 3.52092 4.51591 4.80275C3.51707 5.78494 2.55986 6.7921 1.54438 7.75764C0.603806 8.64827 0.12936 9.73866 0.0294763 11.0122C-0.128672 13.0848 0.379068 15.0408 1.0949 16.9469C2.55986 20.8923 4.79059 24.3966 7.49577 27.6095C11.1498 31.9544 15.5114 35.3921 20.6138 37.8725C22.9111 38.9879 25.2917 39.8452 27.8803 39.9867C29.6616 40.0866 31.2098 39.6371 32.45 38.2471C33.299 37.2982 34.2562 36.4325 35.1552 35.5252C36.4869 34.1768 36.4953 32.5454 35.1718 31.2136C33.5903 29.6238 32.0005 28.0423 30.4107 26.4608Z"
                                                fill="#F1592B" />
                                            <path
                                                d="M28.8207 19.8269L31.8921 19.3025C31.4093 16.4808 30.0775 13.9255 28.0549 11.8945C25.9157 9.75533 23.2105 8.4069 20.2307 7.99072L19.7979 11.0788C22.1035 11.4034 24.201 12.4439 25.8574 14.1003C27.4223 15.6651 28.4461 17.6461 28.8207 19.8269Z"
                                                fill="#F1592B" />
                                            <path
                                                d="M33.6237 6.47578C30.0779 2.92992 25.5914 0.690861 20.6389 0L20.2061 3.08806C24.4844 3.68736 28.3632 5.62677 31.4263 8.68154C34.3312 11.5865 36.2374 15.2572 36.9282 19.2942L39.9996 18.7698C39.1922 14.0919 36.9865 9.84685 33.6237 6.47578Z"
                                                fill="#F1592B" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_91_24409">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <b>Hotline</b>
                                <a class="fone" href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="box_contact">
                                <span class="icon_cont">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.9184 21.6603L22.5683 25.0217C21.2098 26.385 18.8195 26.4143 17.4316 25.0217L14.0813 21.6603L2.04883 33.7318C2.49672 33.9389 2.99055 34.0625 3.51555 34.0625H36.4843C37.0093 34.0625 37.503 33.9391 37.9507 33.7319L25.9184 21.6603Z"
                                            fill="#F1592B" />
                                        <path
                                            d="M36.4841 5.9375H3.51539C2.99039 5.9375 2.49656 6.06109 2.04883 6.2682L14.9064 19.1684C14.9073 19.1693 14.9083 19.1695 14.9091 19.1703C14.91 19.1712 14.9102 19.1723 14.9102 19.1723L19.0909 23.3669C19.5349 23.8109 20.4648 23.8109 20.9088 23.3669L25.0887 19.173C25.0887 19.173 25.0897 19.1712 25.0905 19.1703C25.0905 19.1703 25.0924 19.1693 25.0933 19.1684L37.9505 6.26813C37.5028 6.06094 37.0091 5.9375 36.4841 5.9375Z"
                                            fill="#F1592B" />
                                        <path
                                            d="M0.373906 7.90723C0.142187 8.37582 0 8.89598 0 9.45316V30.5469C0 31.1041 0.142031 31.6243 0.373828 32.0928L12.4272 20.0004L0.373906 7.90723Z"
                                            fill="#F1592B" />
                                        <path
                                            d="M39.626 7.90698L27.5728 20.0003L39.626 32.0929C39.8577 31.6243 39.9999 31.1042 39.9999 30.5468V9.45308C39.9999 8.89573 39.8577 8.37558 39.626 7.90698Z"
                                            fill="#F1592B" />
                                    </svg>
                                </span>
                                <b>Email</b>
                                <a href="javascript:void(0)"
                                    title="{{ $setting->email }}"><span class="__cf_email__"
                                       data-cfemail="90e3e5e0e0ffe2e4d0e3f1e0ffbee6fe">{{ $setting->email }}</span></a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row row-cus">
                        <div class="col-lg-7 col-12 mb-30">
                            <div class="form-contact">
                                <div class="section-title-contact">
                                    <div class="sub_title">Liên hệ với ONE DOOR</div>
                                    <h2>Để Lại Thông Tin Tư Vấn</h2>
                                </div>
                                <div class="desc_cont">
                                    Chúng tôi luôn sẵn sàng lắng nghe và hỗ trợ bạn. Hãy để lại thông tin liên hệ để đội ngũ
                                    ONE DOOR tư vấn giải pháp thiết kế phù hợp và hiệu quả nhất.
                                </div>

                                <div id="pagelogin">
                                    <form method="post" action="{{route('postcontact')}}" id="contact" accept-charset="UTF-8">
                                        @csrf
                          
                                        <div class="group_contact">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input placeholder="Họ và tên" type="text"
                                                        class="form-control  form-control-lg" required value=""
                                                        name="name">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input type="number" placeholder="Điện thoại" name="phone"
                                                        class="form-control form-control-lg" required>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <input placeholder="Email" type="email"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required
                                                        id="email1" class="form-control form-control-lg"
                                                        value="" name="email">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <input placeholder="Địa chỉ" type="text" required id="diachi1"
                                                        class="form-control form-control-lg" value=""
                                                        name="address">
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <textarea placeholder="Nội dung" name="mess" id="comment"
                                                        class="form-control content-area form-control-lg" rows="5" Required></textarea>
                                                    <div class="box_see_form" data-aos="zoom-in">
                                                        <button type="submit"
                                                            class="theme-btn btn-style-three exp-btn-title">
                                                            <span class="btn-wrap">
                                                                <span class="text-one">Gửi thông tin <i><svg
                                                                            width="9" height="9"
                                                                            viewBox="0 0 9 9" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                                                fill="white"></path>
                                                                        </svg></i></span>
                                                                <span class="text-two">Gửi thông tin <i><svg
                                                                            width="9" height="9"
                                                                            viewBox="0 0 9 9" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0.46967 7.46967C0.176777 7.76256 0.176777 8.23744 0.46967 8.53033C0.762563 8.82322 1.23744 8.82322 1.53033 8.53033L0.46967 7.46967ZM8.75 1C8.75 0.585786 8.41421 0.25 8 0.25L1.25 0.25C0.835786 0.25 0.5 0.585786 0.5 1C0.5 1.41421 0.835786 1.75 1.25 1.75L7.25 1.75V7.75C7.25 8.16421 7.58579 8.5 8 8.5C8.41421 8.5 8.75 8.16421 8.75 7.75V1ZM1 8L1.53033 8.53033L8.53033 1.53033L8 1L7.46967 0.46967L0.46967 7.46967L1 8Z"
                                                                                fill="white"></path>
                                                                        </svg></i></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 mb-30">
                            <div id="contact_map" class="map">
                                {!! $setting->iframe_map !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span
                        aria-hidden="true">&times;</span></span></button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>

     
    @endsection
