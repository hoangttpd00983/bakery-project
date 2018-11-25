<header class="header">

        <div class="container">
          <div class="header-main">
            <div class="row">
              <div class="col-sm-3">
                <div class="logo">
                  <a href="" class="logo-wrapper">
                    <img src="source/images/logo.png">
                  </a>
                </div>
              </div>
              <div class="col-sm-9">
                <!------NAV----->
                <nav class="navbar navbar-expand-sm">
                  <!-- Brand -->
                  <!-- Links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('trang-chu')}}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Giới Thiệu</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Sản Phẩm
                      </a>
                      <div class="dropdown-menu sub-menu">
                        @foreach($loai_sp as $loai)
                        <a class="dropdown-item" href="#">{{$loai->name}}</a>
                        @endforeach
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Công Thức</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                    <li class="heading-search">
                      <a class="nav-link" href="#">
                        <i class="fa fa-search"></i>
                      </a>
                      <div class="search-form">

                      </div>
                    </li>
                    <li class="heading-user nav-item dropdown ">
                      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                      </a>
                    <div class="dropdown-menu dropdown-menu-user">
                        
                        <a class="left-dn" style="color: #000" class="" href="{{route('dang-nhap')}}">Đăng nhập</a>
                        <a style="color: #000" class="" href="#">Đăng ký</a>
                        
                      </div>
                    </li>
                    <li class="heading-cart">
                      <a class="nav-link" href="{{route('gio-hang')}}">
                        <i class="fas fa-shopping-cart"></i><span>(@if(Session::has('cart')) {{Session('cart')->totalQty}}@else 0 @endif)</span>
                      </a>
                    </li>

                 
                  </ul>
                </nav>

                <!------END-NAV----->
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="under-header">

      </div>