{{--  --}}
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta
         http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport"
         content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>Quản lí du lịch Việt</title>
      <base href="{{asset('')}}">
      <meta content="Admin
         Dashboard" name="description">
      <meta content="Themesbrand"
         name="author">
      <link rel="shortcut icon"
         href="Admin_MonNgonViet/assets/images/favicon.ico">
      <link
         href="Admin_MonNgonViet/assets/css/bootstrap.min.css" rel="stylesheet"
         type="text/css">
      <link href="Admin_MonNgonViet/assets/css/metismenu.min.css"
         rel="stylesheet" type="text/css">
      <link href="Admin_MonNgonViet/assets/css/icons.css"
         rel="stylesheet" type="text/css">
      <link href="Admin_MonNgonViet/assets/css/style.css"
         rel="stylesheet" type="text/css">
   </head>
   <body>
      <!-- Begin page -->
      <div
         class="wrapper-page">
         <div class="card">
            <div class="card-body">
               <h3
                  class="text-center m-0"><img src="upload/logo/logo.png"
                  height="50" alt="logo"></h3>
               <div
                  class="p-3">
                  <h4 class="text-muted font-18 m-b-5
                     text-center">Welcome</h4>
                  <p class="text-muted
                     text-center">Đăng nhập để tiếp tục</p>
                  <form
                     class="form-horizontal m-t-30" action="admin/dangnhap" method="POST">
                     <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                     <div
                        class="form-group"><label for="username">Email</label>
                        <input type="email" class="form-control"
                           id="email" name="email" placeholder="Nhập email">
                     </div>
                     <div
                        class="form-group"><label for="userpassword">Password</label>
                        <input type="password" class="form-control"
                           id="userpassword" name="password" placeholder="Nhập
                           password">
                     </div>
                     <div class="form-group row
                        m-t-20">
                        <div class="col-6">
                           <div
                              class="custom-control custom-checkbox"><input
                              type="checkbox"
                              class="custom-control-input"
                              id="customControlInline"> <label
                              class="custom-control-label"
                              for="customControlInline">Nhớ mật khẩu</label></div>
                        </div>
                        <div
                           class="col-6 text-right"><button class="btn
                           btn-primary w-md waves-effect
                           waves-light" type="submit">Đăng nhập</button></div>
                     </div>
                     <div
                        class="form-group m-t-10 mb-0 row">
                        <div
                           class="col-12 m-t-20"></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div
            class="m-t-40 text-center">
            <p>© 2019 <i class="mdi
               mdi-heart text-danger"></i> by Thanh Phong Hutecher</p>
         </div>
      </div>
      <!-- jQuery  --><script
         src="Admin_MonNgonViet/assets/js/jquery.min.js"></script><script
         src="Admin_MonNgonViet/assets/js/bootstrap.bundle.min.js"></script><script
         src="Admin_MonNgonViet/assets/js/metisMenu.min.js"></script><script
         src="Admin_MonNgonViet/assets/js/jquery.slimscroll.js"></script><script
         src="Admin_MonNgonViet/assets/js/waves.min.js"></script><script
         src="Admin_MonNgonViet/plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- App js --><script
         src="Admin_MonNgonViet/assets/js/app.js"></script>
   </body>
</html>