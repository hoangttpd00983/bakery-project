@extends('master')
@section('content')
<div class="container">
  <div style="width: 100%; text-align: center;" class="">
    <a href="{{route('trang-chu')}}">Trang chủ</a>/<span>Sản Phẩm</span>
  </div>
          <div class="product-detail-box">
            <div class="row">
              <div class=" col-md-9">
                <div class="row">
                  <div class="col-md-6 left-detail">
                    <div class="img-detail">
                      <a href="">
                        <img src="source/images/{{$sanpham->image}}">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6 content-detail">
                    <h1>{{$sanpham->name}}</h1>
                    <div class="price-box">
                      @if($sanpham->promotion_price==0)
                      <span class="price-detail">{{number_format($sanpham->unit_price)}}đ</span>
                      @else
                      <span class="price-detail">{{number_format($sanpham->promotion_price)}}đ</span>
                      <span class="edit-product-old"> {{number_format($sanpham->unit_price)}}đ</span>
                      @endif 
                    </div> 
                    <div class="product-description">
                      <p>{{$sanpham->description}}</p>
                    </div>  
                    <div class="form-product">
                      <div class="input-group">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn "  data-type="minus" data-field="">
                            <span class="glyphicon glyphicon-minus">-</span>
                          </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn " data-type="plus" data-field="">
                            <span class="">+</span>
                          </button>
                        </span>
                      </div>
                      <div class="btn-add">
                        <button class="addcart-detail btn">
                          <span>Thêm Vào Giỏ</span>
                        </button>
                      </div> 

                    </div>
                    <div class="social">
                      <a href=""><i class="fab fa-facebook"></i></a>
                      <a href=""><i class="fab fa-twitter-square"></i></a>
                      <a href=""><i class="fab fa-google-plus-square"></i></a>
                      <a href=""><i class="fab fa-instagram"></i></a>
                    </div>


                  </div>
                  <ul class="nav nav-tabs bg-bot">
                    <li class="nav-item bg-nav">
                      <a class="nav-link active" data-toggle="tab" href="#home">Mô tả</a>
                    </li>
                    <li class="nav-item bg-nav">
                      <a class="nav-link" data-toggle="tab" href="#menu1">Hướng dẫn</a>
                    </li>
                    <li class="nav-item bg-nav">
                      <a class="nav-link" data-toggle="tab" href="#menu2">Đánh giá</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content border-content">
                    <div class="tab-pane container active" id="home">
                      <p>
                        Bánh kem bắp có nguồn gốc từ nước Pháp, qua quá trình chế biết cầu  kì từ chưng cất sữa bắp đến đánh kem, làm cốt,… đem đến món bánh thơm ngon với vị bắp đặc trưng cùng nhiều chất dinh dưỡng cần thiết cho cơ thể. 


                      </p>
                    </div>
                    <div class="tab-pane container fade" id="menu1">
                      <h5>Nguyên liệu làm bánh gato kem tươi</h5>
<p>250gr bột mì <br>
350gr heavy cream <br>
4 quả trứng<br>
150gr đường<br>
2 muỗng cà phê bột nở<br>
1 muỗng cà phê muối<br>
1 muỗng cà phê vanilla dạng lỏng<br>
100gr dâu tây</p></div>
                    <div class="tab-pane container fade" id="menu2">3</div>
                  </div>
                </div>
              </div>

              <div class=" col-md-3">
                <div class="step-order">
                  <div class="step-top step-height">
                   <div class="left-shipping"> <span><i class="fas fa-shipping-fast"></i></span></div>
                   <div class="right-shipping">

                    <h5 class="title-step">GIAO HÀNG TẬN NƠI</h5>

                    <p>Miễn phí vận chuyển với đơn hàng trên 300.000 đ </p>
                  </div>
                </div>
                <div class="step-mid step-height">
                  <div class="left-shipping"> <span><i class="fas fa-hand-holding-usd"></i></span></div>
                   <div class="right-shipping">
                     
                    <h5 class="title-step">THANH TOÁN KHI NHẬN</h5>

                      <p>Bạn thoải mái nhận & kiểm tra hàng trước khi trả tiền.</p>
                  </div>

                </div>
                <div class="step-bot step-height">
                  
                  <div class="left-shipping"> <span><i class="fas fa-medal"></i></span></div>
                   <div class="right-shipping">
                     
                    <h5 class="title-step">BẢO ĐẢM CHẤT LƯỢNG</h5>

                    <p>Chất lượng sản phẩm luôn được đặt lên hàng đầu</p>
                  </div>

                </div>
              </div>
            </div>

            <!-- Nav tabs -->

          </div>


        </div>
      </div>
    </div>
@endsection