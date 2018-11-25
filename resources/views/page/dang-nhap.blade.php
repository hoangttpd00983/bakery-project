@extends('master')
@section('content')
<div class="login-box">
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="login-form">
                  <div class="title-login">
                    <h1>Đăng nhập tài khoản</h1>
                  </div>
                  <div class="form-content">
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email" class="text-form">Email address:</label>
                        <input type="email" class="form-control form-border" id="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd" class="text-form">Password:</label>
                        <input type="password" class="form-control form-border" id="pwd">
                      </div>
                      <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input " type="checkbox"> Remember me
                        </label>
                      </div>
                      <div class="sub">
                      <button type="submit" class="btn btn-sub">Đăng nhập</button>
                      <a href="" class="qmk">Quên mật khẩu?</a>
                    </div>
                    </form>
                    
                  </div>

                </div>
                <div class="text-regis">
                      <span>Bạn chưa có tài khoản. Đăng ký <a href="">tại đây</a></span>
                    </div>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
@endsection