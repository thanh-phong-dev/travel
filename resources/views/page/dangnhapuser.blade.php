<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2019 14:43:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Du lịch Việt</title>
    <base href="{{asset('')}}">
		
    <link rel="stylesheet" type="text/css" href="login_user/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login_user/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="login_user/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="login_user/css/iofrm-theme6.css">
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
                            <a href="dang-nhap.html" class="active">Đăng nhập</a><a href="dang-ki-user.html">Đăng ký</a>
                        </div>
                        <form action="dang-nhap.html" method="POST">
														<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Đăng nhập</button> <a href="forget6.html">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="facebook/redirect">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
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

<!-- Mirrored from brandio.io/envato/iofrm/html/login6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2019 14:43:12 GMT -->
</html>