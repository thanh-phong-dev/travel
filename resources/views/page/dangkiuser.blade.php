<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from brandio.io/envato/iofrm/html/register6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2019 14:44:24 GMT -->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Du lịch Việt</title>
      <base href="{{asset('')}}">
      <link rel="stylesheet" type="text/css" href="login_user/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="login_user/css/fontawesome-all.min.css">
      <link rel="stylesheet" type="text/css" href="login_user/css/iofrm-style.css">
      <link rel="stylesheet" type="text/css" href="login_user/css/iofrm-theme6.css">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
   <body>
      <div class="form-body">
      <div class="website-logo">
         <a href="index.html">
            <div class="logo">
               <img class="logo-size" src="images/logo-light.svg" alt="">
            </div>
         </a>
      </div>
      <div class="row">
      <div class="img-holder">
         <div class="bg"></div>
         <div class="info-holder">
            <img src="login_user/images/graphic2.svg" alt="">
         </div>
      </div>
      <div class="form-holder">
         <div class="form-content">
            <div class="form-items">
               <h3>Đăng nhập</h3>
               <p>Đăng ký tài khoản để nhận được thông tin khuyến mãi sớm nhất</p>
               <div class="page-links">
                  <a href="dang-nhap.html">Đăng nhập</a><a href="dang-ki-user.html" class="active">Đăng ký</a>
               </div>
               <form action="dang-ki-user.html" method="POST">
                  @if(count($errors)>0)
                  <div class="alert alert-danger">
                     @foreach($errors->all() as $err)
                     {{$err}}<br>
                     @endforeach
                     @endif
                     @if(session('thongbao'))
                     <div class="alert alert-success">
                        {{session('thongbao')}}
                        @endif
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input class="form-control" type="text" name="lastname" placeholder="Họ" required>
                        <input class="form-control" type="text" name="name" placeholder="Tên" required>
                        <input class="form-control" type="text" name="sdt" placeholder="Số điện thoại" required>
                        <input class="form-control" type="email" name="email" placeholder="Địa chỉ E-mail" required>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="g-recaptcha" data-sitekey="6LeJJqoUAAAAAAvJA-o3pQHsM6DJ0ibyxe1FcEWY" data-callback="YourOnSubmitFn"></div>
                           </div><br/>
                        <div class="form-button">
                           <button id="submit" type="submit" class="ibtn">Đăng ký</button>
                        </div>
               </form>
               <div class="other-links">
               <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
               </div>
               </div>
               </div>
            </div>
         </div>
      </div>
      <script src="login_user/js/jquery.min.js"></script>
      <script src="login_user/js/popper.min.js"></script>
      <script src="login_user/js/bootstrap.min.js"></script>
      <script src="login_user/js/main.js"></script>
   </body>
   <!-- Mirrored from brandio.io/envato/iofrm/html/register6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2019 14:44:24 GMT -->
</html>