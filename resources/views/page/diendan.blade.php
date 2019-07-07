@extends('layout.index1')
@section('content')
<body id="top" class="thebg" style="">
   <div class="container breadcrub">
      <div>
         <a class="homebtn left" href="#"></a>
         <div class="left">
            <ul class="bcrumbs">
               <li>/</li>
               <li><a href="#" class="active">Diễn đàn du lịch Việt</a></li>
            </ul>
         </div>
         <a class="backbtn right" href="#"></a>
      </div>
      <div class="clearfix"></div>
      <div class="brlines"></div>
   </div>
   <!-- CONTENT -->
   <div class="container">
      <div class="container mt25 offset-0">
         <!-- CONTENT -->
         <div class="col-md-12 pagecontainer2 offset-0">
            <div class="hpadding50c">
               @if(Auth::User() == null)
               <p class="lato size30 slim" style="
               margin-left: 1px;
              ">Diễn đàn du lịch Việt</p>  
                <button class="btn btn-info" onclick="location.href='dang-nhap.html'">Đăng nhập</button> 
                <button class="btn btn-danger" onclick="location.href='dang-ki-user.html'">Đăng ký</button>
               
               @else
               <p class="lato size30 slim" style="
               margin-left: 22px;
              ">Diễn đàn du lịch Việt</p> 
              <button class="btn btn-warning" onclick="location.href='dien-dan-cau-hoi.html'">Đăng câu hỏi</button>
               @endif
               <p class=""></p>
            </div>
            <div class="line3"></div>
            <div class="hpadding50c">
               <!-- LEFT IMG -->
               <div class="col-md-8 cpdd01 grey2">
                  @foreach($diendan as $dd)
                  <div class="abover">
                  </div>
                  <br>
                  <a href="chi-tiet/{{$dd->id}}/{{$dd->TieuDeKhongDau}}.html"> <span class="lato size22 dark bold">{{$dd->TieuDe}}</span><br></a>
                  <?php 
                     $data= $dd->comment;
                     $demcomment=count($data);
                     ?>
                  <span class="grey">{{$dd->created_at}} {{$demcomment}} bình luận / lượt xem {{$dd->LuotXem}}/ Đăng bởi {{$dd->NguoiDang}}</span><br>
                  <div class="line4"></div>
                  @endforeach
                  <script>
                     //------------------------------
                     //CaroufredSell
                     //------------------------------
                     jQuery(document).ready(function(jQuery){
                     
                         jQuery("#foo5").carouFredSel({
                             width: "100%",
                             height: 407,
                             items: {
                                 visible: 5,
                                 minimum: 1,
                                 start: 2
                             },
                             scroll: {
                                 items: 1,
                                 easing: "easeInOutQuad",
                                 duration: 500,
                                 pauseOnHover: true
                             },
                             auto: false,
                             prev: {
                                 button: "#prev_btn",
                                 key: "left"
                             },
                             next: {
                                 button: "#next_btn",
                                 key: "right"
                             },				
                             swipe: true
                         });
                       
                     });
                  </script>
                  <!-- Carousel -->
                  <br>
                  <div class="line4"></div>
                  <ul class="pagination right paddingbtm20">
                  {!!$diendan->links()!!}
               </div>
               <!-- END OF LEFT IMG -->
               <!-- IMG RIGHT TEXT -->
               <div class="col-md-4 cpdd02">
                  <ul class="nav navigation-tabs3">
                     <li class="active"><a href="#tab-newtopic" data-toggle="tab"><span class="glyphicon glyphicon-star"></span>Khách sạn nổi bật</a></li>
                  </ul>
                  <div class="tab-content4">
                     <!-- Tab 1 -->
                     <div class="tab-pane active" id="tab-newtopic">
                        @foreach($khachsan as $ks)
                        <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><img alt="{{$ks->Ten}}" class="left mr20" src="upload/khachsan/{{$ks->Hinh}}" style="
                           height: 78px;
                           width: 117px;
                           "></a>
                        <a class="dark" href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><b>{{$ks->Ten}}</b></a><br>
                        <?php $date=$dt?>
                        @if($date==1 || $date==2 || $date==3 || $date==4)
                        <?php 
                           $num = $ks->Gia;  
                           $formattedNum = number_format($num);?>
                        <span class="opensans green bold size14">{{$formattedNum}} <sup>đ</sup></span> <span class="grey">/đêm</span><br>
                        @elseif($date==5 || $date==6 || $date==0 )
                        <?php 
                        $num = $ks->GiaCuoiTuan;  
                        $formattedNum = number_format($num);?>
                        <span class="opensans green bold size14">{{$formattedNum}} <sup>đ</sup></span> <span class="grey">/đêm</span><br>
                           @endif
                        @if($ks->Sao==1)
                        <img src="upload/sao/1.png" alt="" />
                        @elseif($ks->Sao==2)
                        <img src="upload/sao/2.png" alt="" />
                        @elseif($ks->Sao==3)
                        <img src="upload/sao/3.png" alt="" />
                        @elseif($ks->Sao==4)
                        <img src="upload/sao/4.png" alt="" />
                        @elseif($ks->Sao==5)
                        <img src="upload/sao/5.png" alt="" />
                        @endif
                        <div class="line4"></div>
                        @endforeach
                     </div>
                     <!-- End of Tab 1 -->
                     <!-- Tab 2 -->
                     <!-- End of Tab 2 -->
                     <!-- Tab 3 -->
                     <div class="tab-pane" id="tab-blogcomments">
                     </div>
                     <!-- End of Tab 3 -->
                  </div>
                  <br><br>
               </div>
            </div>
            <!-- END OF IMG RIGHT TEXT -->
            <div class="clearfix"></div>
            <br><br>
         </div>
         <div class="clearfix"></div>
         <br><br>
      </div>
      <!-- END CONTENT -->			
   </div>
</div>
   <!-- END OF CONTENT -->
   <!-- FOOTER -->
   <!-- Javascript  -->
   <script src="assets/js/js-blog.js"></script>
   <!-- Easy Pie Chart  -->
   <script src="assets/js/jquery.easy-pie-chart.js"></script>
   <!-- Nicescroll  -->	
   <script src="assets/js/jquery.nicescroll.min.js"></script>
   <!-- Custom functions -->
   <script src="assets/js/functions.js"></script>
   <!-- Custom Select -->
   <script type="text/javascript" src="js/lightbox.js"></script>	
   <!-- Custom Select -->
   <script type="text/javascript" src="assets/js/jquery.customSelect.js"></script>
   <!-- Load Animo -->
   <script src="plugins/animo/animo.js"></script>
   <!-- CarouFredSel -->
   <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
   <script src="assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
   <script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
   <script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
   <script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
   <!-- JUI -->	
   <script src="assets/js/jquery-ui.js"></script>	
   <!-- Picker -->	
   <script src="assets/js/jquery.easing.js"></script>	
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="dist/js/bootstrap.min.js"></script>
   <!-- Mirrored from titanicthemes.com/travel/blue/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 15:40:48 GMT -->
   <div id="ascrail2000" style="width: 5px; z-index: 9000; position: fixed; top: 0px; height: 100%; right: 0px;">
      <div style="position: relative; top: 12px; float: right; width: 5px; height: 39px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
   </div>
   <div id="ascrail2000-hr" style="height: 6px; z-index: 9000; position: fixed; left: 0px; width: 100%; bottom: 0px; display: none;">
      <div style="position: relative; top: 0px; height: 5px; width: 1366px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
   </div>
</body>
@endsection