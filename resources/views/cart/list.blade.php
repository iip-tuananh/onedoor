@extends('layouts.main.master')
@section('title')
    Giỏ hàng của bạn
@endsection
@section('description')
    {{$setting->webname}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('frontend/css/cartpage.scss.css')}}" type="text/css" media="all" />
@endsection
@section('content')
    @php
        $total = 0;
        $qty = 0;
        $cartcontent = session('cart', []);
        // Debug: Xem dữ liệu giỏ hàng
        // dd($cartcontent, count($cartcontent));
    @endphp
    @foreach ((array) $cartcontent as $id => $details)
        @php
            if (isset($details['variant'])) {
                $total += $details['price'] * $details['quantity'];
            } else {
                if ($details['discount'] > 0) {
                    $total += $details['discount'] * $details['quantity'];
                } else {
                    $total += $details['price'] * $details['quantity'];
                }
            }
            $qty += $details['quantity'];
        @endphp
    @endforeach
    <div class="bodywrap">

        <section class="bread-crumb"
            style="background-image: url({{asset('frontend/images/ngang.jpg')}});">
        </section>
        <section class="main-cart-page main-container col1-layout">
            <div class="main container cartpcstyle">
                 <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{route('home')}}"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>&nbsp;</span>
                    </li>
                    <li><strong><span>Giỏ hàng</span></strong></li>
                </ul>
                <div class="wrap_background_aside margin-bottom-40">
                @if (count($cartcontent) > 0)
                <form action="{{route('checkout')}}" method="post">
                  @csrf
                  
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-12 col-cart-left">
                            <div class="bg-shadow margin-bottom-20">
                                <div class="header-cart">
                                  <div class="title-block-page">
                                        <h3 class="title_cart">
                                            <span>Giỏ hàng của bạn</span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="cart-page d-xl-block d-none">
                                    <div class="drawer__inner">
                                        <div class="CartPageContainer">
                                            <div class="cart ajaxcart cartpage">
                                                <div class="cart-header-info">
                                                    <div>Thông tin sản phẩm</div>
                                                    <div>Đơn giá</div>
                                                    <div>Số lượng</div>
                                                    <div>Thành tiền</div>
                                                </div>
                                                <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items carttuan" id="cartbody">
                                                    @foreach ($cartcontent as $key => $item)
                                                    {{-- @php
                                                        dd($cartcontent)
                                                    @endphp --}}
                                                    <div class="ajaxcart__row">
                                                        <div class="ajaxcart__product cart_product" data-line="1">
                                                            <a href="" class="ajaxcart__product-image cart_image" title="{{ $item['name'] }}">
                                                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                                            </a>
                                                            <div class="grid__item cart_info">
                                                                <div class="ajaxcart__product-name-wrapper cart_name">
                                                                    <a href="" class="ajaxcart__product-name h4 line-clamp line-clamp-2-new" title="{{ $item['name'] }}">{{ $item['name'] }}</a>
                                                                    @if (isset($item['variant']))
                                                                        <span class="ajaxcart__product-meta variant-title">{{ $item['variant'] }}</span>
                                                                    @endif
                                                                    <a title="Xóa" class="cart__btn-remove remove-item-cart remove-item-cart-tuan-detail" href="javascript:;" data-id="{{ $key }}">Xóa</a>
                                                                </div>
                                                                <div class="grid">
                                                                    <div class="grid__item one-half text-right cart_prices">
                                                                        @if (isset($item['variant']))
                                                                            <span class="cart-price">{{ number_format($item['price']) }}₫</span>
                                                                        @else
                                                                            @if ($item['discount'] > 0)
                                                                                <span class="cart-price">{{ number_format($item['discount']) }}₫</span>
                                                                            @else
                                                                                <span class="cart-price">{{ number_format($item['price']) }}₫</span>
                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="grid">
                                                                    <div class="grid__item one-half cart_select">
                                                                        <div class="ajaxcart__qty input-group-btn">
                                                                            <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count items-count-tuan" data-key="{{ $key }}" data-action="decrease" aria-label="-"> - </button>
                                                                            <input type="text" name="quantity" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{ $item['quantity'] }}" min="0" id="quantity-{{ $key }}" aria-label="quantity" pattern="[0-9]*">
                                                                            <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count items-count-tuan" data-key="{{ $key }}" data-action="increase" aria-label="+"> + </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="grid">
                                                                    <div class="grid__item one-half text-right cart_total_price">
                                                                        @php
                                                                            if (isset($item['variant'])) {
                                                                                $subtotal = $item['price'] * $item['quantity'];
                                                                            } else {
                                                                                if ($item['discount'] > 0) {
                                                                                    $subtotal = $item['discount'] * $item['quantity'];
                                                                                } else {
                                                                                    $subtotal = $item['price'] * $item['quantity'];
                                                                                }
                                                                            }
                                                                        @endphp
                                                                        <span class="cart-price">{{ number_format($subtotal) }}₫</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-mobile-page d-block d-xl-none">
                                    <div class="CartMobileContainer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-12 col-cart-right">
                            <div class="sticky">
                                <div class="bg-shadow margin-bottom-20">
                                    <div class="ajaxcart__footer">
                                        <div class="checkout-header">
                                            Thông tin đơn hàng
                                        </div>
                                        <div class="checkout-body">
                                            <div class="summary-total">
                                                <div class="content-items">
                                                    <div class="item-content-left">Tổng tiền</div>
                                                    <div class="item-content-right"><span class="total-price" style="color:red">{{ number_format($total) }}₫</span></div>
                                                </div>
                                            </div>
                                            <div class="summary-action">
                                                <p>Chúng tôi luôn đảm bảo hàng hóa ở chất lượng tốt nhất</p>
                                                <p>Mọi phản ánh về hàng hóa xin liên hệ về hotline <a href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a></p>
                                            </div>

                                            <div class="summary-button">
                                                <div class="cart__btn-proceed-checkout-dt">
                                                    <button type="submit" class="button btn btn-default cart__btn-proceed-checkout btn-primary duration-300 btn-danger mirror-effect-button" id="btn-proceed-checkout" title="Thanh toán ngay">Thanh toán ngay</button>
                                                </div>
                                                <a class="return_buy btn btn-extent duration-300 btn-tieptuc" title="Tiếp tục mua hàng" href="{{ route('home') }}">Tiếp tục mua hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">Không có sản phẩm nào. Quay lại <a href="{{ route('home') }}" class="alert-link">cửa hàng</a> để tiếp tục mua sắm.</div>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </section>
    </div>
    
    <!-- Modal xác nhận xóa sản phẩm -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa sản phẩm</h5>
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Hủy</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    // Xử lý nút tăng/giảm số lượng
    $('.items-count-tuan').on('click', function(e) {
        e.preventDefault();
        
        var $button = $(this);
        var key = $button.data('key');
        var action = $button.data('action');
        var $quantityInput = $('#quantity-' + key);
        var currentQty = parseInt($quantityInput.val());
        var newQty = currentQty;
        
        // Tính toán số lượng mới
        if (action === 'increase') {
            newQty = currentQty + 1;
        } else if (action === 'decrease') {
            if (currentQty > 1) {
                newQty = currentQty - 1;
            } else {
                return; // Không giảm nếu số lượng = 1
            }
        }
        
        // Disable button để tránh click nhiều lần
        $button.prop('disabled', true);
        
        // Gọi AJAX để cập nhật số lượng
        $.ajax({
            url: '{{ route("cart.updateQuantity") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                key: key,
                quantity: newQty
            },
            success: function(response) {
                if (response.success) {
                    // Cập nhật số lượng trong input
                    $quantityInput.val(newQty);
                    
                    // Cập nhật thành tiền cho sản phẩm
                    var $row = $button.closest('.ajaxcart__row');
                    var price = response.item.variant ? response.item.price : 
                                (response.item.discount > 0 ? response.item.discount : response.item.price);
                    var subtotal = price * newQty;
                    $row.find('.cart_total_price .cart-price').text(number_format(subtotal) + '₫');
                    
                    // Cập nhật tổng tiền giỏ hàng
                    $('.total-price').text(number_format(response.total) + '₫');
                    
                    // Cập nhật số lượng giỏ hàng trong header
                    if (response.qty !== undefined) {
                        $('.count-cart, .cart-count, .count_item, .count_item_pr').text(response.qty);
                    }
                    
                    // Enable lại button
                    $button.prop('disabled', false);
                } else {
                    alert('Có lỗi xảy ra. Vui lòng thử lại!');
                    $button.prop('disabled', false);
                }
            },
            error: function(xhr) {
                alert('Có lỗi xảy ra. Vui lòng thử lại!');
                $button.prop('disabled', false);
            }
        });
    });
    
    // Xử lý nút xóa sản phẩm
    var deleteKey = null;
    var $deleteButton = null;
    var $deleteRow = null;
    
    $('.remove-item-cart-tuan-detail').on('click', function(e) {
        e.preventDefault();
        
        deleteKey = $(this).data('id');
        $deleteButton = $(this);
        $deleteRow = $(this).closest('.ajaxcart__row');
        
        // Hiển thị modal xác nhận - sử dụng vanilla JS thay vì Bootstrap
        document.getElementById('confirmDeleteModal').style.display = 'block';
        document.body.classList.add('modal-open');
        
        // Thêm backdrop
        if (!document.querySelector('.modal-backdrop')) {
            var backdrop = document.createElement('div');
            backdrop.className = 'modal-backdrop fade show';
            document.body.appendChild(backdrop);
        }
    });
    
    // Đóng modal khi click nút Hủy hoặc X
    $('.modal .close, .modal .btn-secondary').on('click', function() {
        document.getElementById('confirmDeleteModal').style.display = 'none';
        document.body.classList.remove('modal-open');
        $('.modal-backdrop').remove();
    });
    
    // Đóng modal khi click bên ngoài
    $(document).on('click', '.modal', function(e) {
        if (e.target.id === 'confirmDeleteModal') {
            document.getElementById('confirmDeleteModal').style.display = 'none';
            document.body.classList.remove('modal-open');
            $('.modal-backdrop').remove();
        }
    });
    
    // Xử lý khi nhấn nút Xóa trong modal
    $('#confirmDeleteBtn').on('click', function() {
        // Ẩn modal
        document.getElementById('confirmDeleteModal').style.display = 'none';
        document.body.classList.remove('modal-open');
        $('.modal-backdrop').remove();
        
        if (!deleteKey || !$deleteButton || !$deleteRow) {
            return;
        }
        
        // Disable button
        $deleteButton.prop('disabled', true);
        $deleteButton.text('Đang xóa...');
        
        // Gọi AJAX để xóa sản phẩm
        $.ajax({
            url: '{{ route("cart.remove") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: deleteKey
            },
            success: function(response) {
                if (response.success) {
                    // Hiển thị thông báo xóa thành công
                    showNotification('Đã xóa sản phẩm khỏi giỏ hàng!', 'success');
                    
                    // Thêm hiệu ứng fade out và xóa dòng
                    $deleteRow.fadeOut(300, function() {
                        $(this).remove();
                        
                        // Kiểm tra nếu giỏ hàng trống
                        if ($('.ajaxcart__row').length === 0) {
                            location.reload(); // Reload để hiển thị thông báo giỏ hàng trống
                        } else {
                            // Cập nhật tổng tiền
                            if (response.total !== undefined) {
                                $('.total-price').text(number_format(response.total) + '₫');
                            }
                            
                            // Cập nhật số lượng giỏ hàng trong header
                            if (response.qty !== undefined) {
                                $('.count-cart, .cart-count, .count_item, .count_item_pr').text(response.qty);
                            }
                        }
                    });
                    
                    // Reset biến
                    deleteKey = null;
                    $deleteButton = null;
                    $deleteRow = null;
                } else {
                    alert('Có lỗi xảy ra khi xóa sản phẩm!');
                    $deleteButton.prop('disabled', false);
                    $deleteButton.text('Xóa');
                }
            },
            error: function(xhr) {
                alert('Có lỗi xảy ra. Vui lòng thử lại!');
                $deleteButton.prop('disabled', false);
                $deleteButton.text('Xóa');
            }
        });
    });
    
    // Hàm format số tiền
    function number_format(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    
    // Hàm hiển thị thông báo
    function showNotification(message, type) {
        var alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
        var icon = type === 'success' ? '✓' : '✕';
        var alertHtml = '<div class="alert ' + alertClass + ' alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 99999; min-width: 300px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">' +
            '<strong>' + icon + '</strong> ' + message +
            '<button type="button" class="close" onclick="this.parentElement.remove()" aria-label="Close">' +
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
});
</script>
@endsection
