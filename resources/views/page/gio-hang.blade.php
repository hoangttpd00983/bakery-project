@extends('master')
@section('content')
<div class="cart-box">
          <div class="container">
            <div class="row heading-cart-product">
              <div class="col-md-12">
                <h5>GIỎ HÀNG <span class="count-sp">(1 sản phẩm)</span></h5>

              </div>
            </div>
            <div class="row">
              <div class="col-md-9 cart-box-left">
                <div class="row">
                 <div class="col-md-3">
                  <div class="cart-img">
                    <img src="source/images/sp1a.jpg">
                  </div>
                </div>
                <div class="col-md-9 cart-center">
                  <div class="name-pr-cart">
                    <p>
                    Bánh Kem Oreo</p>
                    <a class="action-delete" href="">Xóa</a>
                  </div>
                  <div class="price-pr-cart">
                    <p>32.000đ</p>
                  </div>
                  <div class="quantity-cart">
                    <div class="form-product cart-padd">
                      <div class="input-group input-cart">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn line "  data-type="minus" data-field="">
                            <span class="glyphicon glyphicon-minus">-</span>
                          </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number ipt-height" value="1" min="1" max="100">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn line " data-type="plus" data-field="">
                            <span class="">+</span>
                          </button>
                        </span>
                      </div>

                    </div>
                  </div>
                </div>
                
              </div>
              
            </div>
            <div class="col-md-3 cart-box-right">
             <div class="cart-price-total">
              <div class="price-top">
                <h6>Tạm tính:<span class="price1">544.000đ</span></h6>
              </div>
              <div class="in-price-total">
                <h6>Thành tiền:<span class="price2">544.000đ</span></h6>
              </div>
              <button class="btncart btn-bill1 btn">
                <span>Thanh toán ngay</span>
              </button>
              <button class="btncart btn-bill2 btn">
                <span>Tiếp tục mua hàng</span>
              </button>
            </div>
          </div>
          </div>
        </div>
@endsection        