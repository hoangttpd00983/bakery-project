@extends('master')
@section('content')
<div class="row slider-main">
        <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
          <div id="wowslider-container1">
            <div class="ws_images">
              <ul>
                @foreach($slide as $sl)
              <li><a href="http://wowslider.net"><img src="source/assets/data1/images/{{$sl->image}}" alt="slider" title="Luz Bakery" id="wows1_0"/></a></li>
              
               @endforeach
            </ul>
          </div>
          
          </div>  
          <script type="text/javascript" src="source/assets/engine1/wowslider.js"></script>
          <script type="text/javascript" src="source/assets/engine1/script.js"></script>
          <!-- End WOWSlider.com BODY section -->
        </div>
        <!------END-SLIDER----->
        
        <!------CONTACT----->
        <div class="row row-contact">
          <div class="container">
            <ul class="nav-contact"> 
              <li>
                <a href="">
                  <i class="fa fa-phone">

                  </i>
                  0368 6545 222
                </a>
              </li>
              <li>
                <a href="">
                 <i class="fas fa-envelope"></i>
                 luz.bakery@gmail.com
               </a>
             </li>
             <li>
              <a href="">
               <i class="fab fa-facebook-f"></i>
             </a>
           </li>
           <li>
            <a href="">
             <i class="fab fa-instagram"></i>
           </a>
         </li>

         <li>
          <a href="">
           <i class="fab fa-google"></i>
         </a>
       </li>
     </ul>
   </div>
 </div>
 <!------END-CONTACT----->

 <!------PRODUCT----->
 <div class="main-product">
  <div class="container">
    <div class="row">
      <div class="heading">
        <h2 class="title-head">
          <a href="">Sản Phẩm Mới</a>
        </h2>
        <p>Tìm thấy {{count($new_product)}} sản phẩm</p>
      </div>

      <!------CAROUSEL-PRODUCT----->

      <div class="owl-carousel owl-theme">
        @foreach($new_product as $new)
        <div>
          <!------PRODUCT-ITEM----->
          <div class="item">
            <div class="product-box">
              <div class="procduct-thumnail">
                <div class="sale-icon">

                </div>
                <div class="product-img">
                  <a href=""><img src="source/images/{{$new->image}}"></a>
                </div>
                <div class="icon-heart">
                 <a href=""><i class="far fa-star"></i></a>
                 <a href=""><i class="far fa-star"></i></a>
                 <a href=""><i class="far fa-star"></i></a> 
                 <a href=""><i class="far fa-star"></i></a> 
                 <a href=""><i class="far fa-star"></i></a>   
               </div>
               <div class="product-info">
                <h3 class="product-name">
                  <a href="{{route('chitietsanpham',$new->id)}}">{{$new->name}}</a>
                </h3>
              </div>

              <div class="price-box">
                @if($new->promotion_price==0)
                <div class="product-price">
                  <span class="edit-product-price">{{number_format($new->unit_price)}} đ</span>
                  
                </div>
                @else
                <div class="product-price-old">
                  <span class="edit-product-price">{{number_format($new->promotion_price)}} đ</span>

                 <span class="edit-product-old">{{number_format($new->unit_price)}} đ</span>
                                </div>
               @endif
             </div>

             <div class="add-to-cart">
              <form>
                <button class="addcart btn">
                  <span><a href="{{route('themgiohang', $new->id)}}">Thêm Vào Giỏ</a></span>
                </button>
                <a class="show-product-icon btn-white btn" href="">
                  <i class="fa fa-search"></i>
                </a>
              </form>
            </div>

          </div>
        </div>
      </div>


      <!------PRODUCT-ITEM----->
    </div>

    @endforeach


<!------END-CAROUSEL-PRODUCT----->

</div>
</div>
</div>



<!-----PRODUCT BAN CHAY---->
<div class="main-product">
  <div class="container">
    <div class="row">
      <div class="heading">
        <h2 class="title-head">
          <a href="">Sản Phẩm Khuyến Mãi</a>
        </h2>
        <p>Tìm thấy {{count($new_product)}} sản phẩm</p>
      </div>

      <!------CAROUSEL-PRODUCT----->

      <div class="owl-carousel owl-theme">
        @foreach($new_product as $new)
        <div>
          <!------PRODUCT-ITEM----->
          <div class="item">
            <div class="product-box">
              <div class="procduct-thumnail">
                <div class="sale-icon">

                </div>
                <div class="product-img">
                  <a href=""><img src="source/images/{{$new->image}}"></a>
                </div>
                <div class="icon-heart">
                 <a href=""><i class="far fa-star"></i></a>
                 <a href=""><i class="far fa-star"></i></a>
                 <a href=""><i class="far fa-star"></i></a> 
                 <a href=""><i class="far fa-star"></i></a> 
                 <a href=""><i class="far fa-star"></i></a>   
               </div>
               <div class="product-info">
                <h3 class="product-name">
                  <a href="{{route('chitietsanpham',$new->id)}}">{{$new->name}}</a>
                </h3>
              </div>

              <div class="price-box">
                @if($new->promotion_price==0)
                <div class="product-price">
                  <span class="edit-product-price">{{number_format($new->unit_price)}} đ</span>
                  
                </div>
                @else
                <div class="product-price-old">
                  <span class="edit-product-price">{{number_format($new->promotion_price)}} đ</span>

                 <span class="edit-product-old">{{number_format($new->unit_price)}} đ</span>
                                </div>
               @endif
             </div>

             <div class="add-to-cart">
              <form>
                <button class="addcart btn">
                  <span><a href="{{route('themgiohang', $new->id)}}">Thêm Vào Giỏ</a></span>
                </button>
                <a class="show-product-icon btn-white btn" href="">
                  <i class="fa fa-search"></i>
                </a>
              </form>
            </div>

          </div>
        </div>
      </div>


      <!------PRODUCT-ITEM----->
    </div>

    @endforeach


<!------END-CAROUSEL-PRODUCT----->

</div>
</div>
</div>

<!-----END-PRODUCT BAN CHAY--->
<!------END-PRODUCT----->
</div>
<!------COOKIES-SECTION----->

<div class="main-cookies">
  <div class="container">
    <div class="row">
      <div class="section-category-frame">
        <div class="section-category-img">
          <a href="">
            <img class="img-cookies" src="source/images/cookies.jpg">
          </a>
        </div>
        <div class="section-category-info">
          <h3>
            <a href="">Bánh Cookies</a>
          </h3>
          <div class="cookies-content">
            <p>Những chiếc bánh cookie bắt nguồn từ xứ sở của hoa Tulip với cái tên là “Koekje”. Tuy nhiên, những chiếc bánh cookie chỉ thật sự nổi tiếng khi được nước Mỹ “quảng cáo”, chúng được chế biến cùng với chocolate chip để tăng thêm hương vị ngọt...</p>
          </div>

          <div class="btn-cookies">
            <a href="">Thưởng Thức Ngay</a>
          </div>

          <div class="index-carou owl-carousel owl-theme">
            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/cookie7.jpg">
                  </a>
                </div>
              </div>
            </div>
            
            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/cookie7.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/cookie7.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/cookie7.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/cookie7.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/cookie7.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/cookie7.jpg">
                  </a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!------END-COOKIES-SECTION----->

<!------BANNER----->
  <div class="banner">
    <div class="container">
      <div class="row bg-banner">
        <div class="bg-opacity"></div>
        <div class="col-md-4 ">
          <h3>Bảo đảm chất lượng</h3>
          <p>Nguyên liệu được chọn lọc và xử lý trong quy trình khép kín, đảm bảo chất lượng và an toàn vệ sinh thực phẩm</p>
        </div>
        <div class="col-md-4">
          <h3>Hương vị tự nhiên</h3>
          <p>Chỉ sử dụng nguyên liệu tự nhiên, mang đến một sản phẩm thơm ngon mà không mất đi bản sắc tự nhiên vốn có</p>
        </div>
        <div class="col-md-4">
          <h3>Công thức đặc biệt</h3>
          <p>Sản phẩm được làm từ những công thức đặc biệt đã trải qua nhiều năm nghiên cứu và phát triển</p>
        </div>
      </div>
    </div>
  </div>

<!------END-BANNER----->

<!------BLOGS----->

<div class="blogs-content">
  <div class="container">
    <div class="row title-blogs">
        <h3>Công Thức Mới</h3>
    </div>
    <div class="row">
      
      <div class="col-md-3">
        <div class="blog-item-frame">
          <div class="blog-item-thumnail">
            <a href="">
              <img src="images/blog1.jpg">
            </a>
          </div>
          <div class="blog-text">
            <h3><a href="" title="Cách làm bánh Panna Cotta trà xanh thơm mát">
            Cách làm bánh Panna Cotta trà xanh thơm mát</a></h3>
            <p>Tuy có cách làm khá cầu kỳ với nhiều lớp bánh khác nhau, nhưng thành quả thì lại rất “ngọt ngào” </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="blog-item-frame">
          <div class="blog-item-thumnail">
            <a href="">
              <img src="images/blog2.jpg">
            </a>
          </div>
          <div class="blog-text">
            <h3><a href="" title="Cách làm bánh Black Forest mê hoặc">
            Cách làm bánh Black Forest mê hoặc</a></h3>
            <p>Tuy có cách làm khá cầu kỳ với nhiều lớp bánh khác nhau, nhưng thành quả thì lại rất “ngọt ngào” </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="blog-item-frame">
          <div class="blog-item-thumnail">
            <a href="">
              <img src="images/blog3.jpg">
            </a>
          </div>
          <div class="blog-text">
            <h3><a href=" " title="Cách làm mousse chanh leo">
            Cách làm mousse chanh leo</a></h3>
            <p>Tuy có cách làm khá cầu kỳ với nhiều lớp bánh khác nhau, nhưng thành quả thì lại rất “ngọt ngào” </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="blog-item-frame">
          <div class="blog-item-thumnail">
            <a href="">
              <img src="images/blog4.jpg">
            </a>
          </div>
          <div class="blog-text">
            <h3><a href="">
            Cách làm bánh Matcha Delight</a></h3>
            <p>Tuy có cách làm khá cầu kỳ với nhiều lớp bánh khác nhau, nhưng thành quả thì lại rất “ngọt ngào” </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!------END-BLOGS----->
<!------GATO-COOL-SECTION----->

<div class="main-cookies">
  <div class="container">
    <div class="row">
      <div class="section-category-frame">
        <div class="section-category-img">
          <a href="">
            <img class="img-cookies" src="images/cookies.jpg">
          </a>
        </div>
        <div class="section-category-info">
          <h3>
            <a href="">Bánh lạnh</a>
          </h3>
          <div class="cookies-content">
            <p>Dòng bánh lạnh là tên gọi chung cho những loại bánh mềm mịn, tươi mát như tiramisu, pana cotta, cheesecake, bánh mousse…Những loại bánh này thường sử dụng nhiều kem, có kết cấu mềm mịn và được làm lạnh trước khi đem ra thưởng thức.</p>
          </div>

          <div class="btn-cookies">
            <a href="">Thưởng Thức Ngay</a>
          </div>

          <div class="index-carou owl-carousel owl-theme">
            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/sp8.jpg">
                  </a>
                </div>
              </div>
            </div>
            
            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/sp7.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/sp6.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/sp5.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/sp4.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/sp3.jpg">
                  </a>
                </div>
              </div>
            </div>

            <div>
              <div class="product-box-cookie">
                <div class="procduct-thumnail-cookie">
                  <a href="">
                    <img src="source/images/sp2.jpg">
                  </a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!------END-GATO-COOL-SECTION----->
<!------ABOUT-SECTION----->
 <div class="about-main">
   <div class="container">
     <div class="row">
       <div class="col-lg-6 col-md-12">
         <div class="about-section">
           <h3>Luz Bakery</h3>
           <a href="">
             <img src="source/images/sec_about_page_logo.png">
           </a>
           <div class="about-content">
             <p>Đắm mình trong không gian ồn ào nhộn nhịp của thành phố mang tên Bác, bạn không những được tận hưởng cảm xúc thi vị của Sài Gòn, mà còn được thưởng thức hương vị Pháp ngay trong lòng Sài Gòn.</p>
             <p>Nằm trên con phố đông đúc và cổ kính, Luz Bakery từ lâu đã trở thành điểm đến của những người yêu thích bánh ngọt Pháp. Với niềm đam mê về chất Pháp, Luz Bakery đã mang hương vị pháp “nguyên chất” đến với những thực khách Việt Nam.</p>
             <p>Luz Bakery là một thương hiệu nổi tiếng cho những ai yêu thích văn hóa ẩm thực Pháp. Nằm trên cái “chất” của Sài Gòn, chất của người tìm về cội nguồn văn hóa, du khách sẽ bắt gặp Luz Bakery tại Số 70 Lữ Gia, Quận 10. Vừa tìm hiểu về văn hóa Sài Gòn, du khách có thể thưởng thức hương vị Pháp tại đây, với một không gian rất nhộn nhịp của Sài Thành.</p>
             <p>Luz Bakery được sản xuất trên dây chuyền hiện đại, với những nguyên liệu được nhập khẩu trực tiếp từ các nước có truyền thống làm bánh lâu đời trên thế giới. Thực khách tới đây có thể thưởng thức rất nhiều loại bánh : Bánh Sinh Nhật, Bánh Cưới, Bánh Valentine, Bánh Giáng sinh… Barkery, Bánh mỳ Pháp, Pizza, Hotdog, Patechaux, Cookies, và cả Bánh Trung thu ….</p>
             <p>Tất cả những yếu tố đó đã tạo lên một thương hiệu Luz Bakery.</p>
           </div>
         </div>
       </div>
       <div class="col-lg-6 col-md-12">
        <div class="about-bg">
         <a href="">
           <img src="source/images/sec_about_page.png">
         </a>
       </div>
       </div>
     </div>
   </div>
 </div>
<!------END-ABOUT-SECTION----->
@endsection('content')