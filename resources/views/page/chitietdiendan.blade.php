@extends('layout.index1')
@section('content')
<body id="top" class="thebg" style="">
   <div class="container breadcrub">
      <div>
         <a class="homebtn left" href="#"></a>
         <div class="left">
            <ul class="bcrumbs">
               <li>/</li>
               <li><a href="#" class="active">Câu hỏi : {{$diendan->TieuDe}}</a></li>
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
               <p class="lato size30 slim">Diễn đàn</p>
               <p class="aboutarrow"></p>
            </div>
            <div class="line3"></div>
            <div class="hpadding50c">
               <!-- LEFT IMG -->
               <div class="col-md-8 cpdd01 grey2">
                  <div class="abover">
                  </div>
                  <br>
                  <span class="lato size22 dark bold">{{$diendan->TieuDe}}</span><br>
                  <?php 
                     $data= $diendan->comment;
                     $demcomment=count($data);
                     ?>
                  <span class="grey">Đăng lúc: {{$diendan->created_at}}/ {{$demcomment}} bình luận / Đăng bởi <a href="#"> </a>{{$diendan->NguoiDang}}</span><br>
                  <div class="line4"></div>
                  {{--  test--}}
                  <div class="container">
                        <h2>Bình luận bài viết</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Bình luận</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Bình luận từ FaceBook</a>
                          </li>
                        </ul>
                      
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div id="home" class="container tab-pane active"><br>
                            <h3>Bình luận</h3>
                            @if(Auth::User() == null)
                            <span class="size14 dark bold">Bình Luận<span> (vui lòng đăng nhập để bình luận)</span></span>
                            <br><br>
                            <a href="dang-nhap.html"><button class="btn btn-primary">Đăng nhập</button> </a>
                            @else
                            
                            <div class="line4"></div>
                            <form action="binhluan/{{$diendan->id}}" method="POST">
                               <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                               <textarea name="NoiDung" class="form-control" rows="3"></textarea><br>
                               <button  type="submit" class="btn btn-primary">Đăng<span ></span></button>
                            </form>
                            <br><br><br>
                            <span class="size14 dark bold">{{$demcomment}} Bình luận</span>
                            <div class="line4"></div>
                            @foreach($diendan->comment as $cm)
                            <div class="wh20percent left textleft">
                               <div class="circlewrap2"><img alt="" class="circleimg" src="images/user-avatar.jpg"></div>
                            </div>
                       
                            <div class="wh80percent right">
                               <a href="#" class="lblue bold"> {{$cm->user->name}}</a>   <br>
                               {{$cm->NoiDung}}
                               <br><span class="grey size12"> {{$cm->created_at}}  <a href="#" class="grey"></a></span>
                            </div>
                            <br>
                         
                            <div class="clearfix"></div>
                            <div class="line4"></div>
                            @endforeach
                            @endif
                          </div>
                          <div id="menu1" class="container tab-pane fade"><br>
                           <h3>Bình luận</h3>
                           <div class="fb-comments" data-href="https://www.facebook.com/ITthanhphong/{{$diendan->id}}" data-numposts="5"></div>
                          </div>
                        </div>
                      </div>
                  {{-- endtest --}}
                  
                  <br>
                  <br>
               </div>
               <!-- END OF LEFT IMG -->
               <!-- IMG RIGHT TEXT -->
               <div class="col-md-4 cpdd02">
                  <div class="opensans grey">
                     <!-- Nav tabs -->
                     <ul class="nav navigation-tabs3">
                        <li class="active"><a href="#tab-newtopic" data-toggle="tab"><span class="glyphicon glyphicon-star"></span>Khách sạn nổi bật</a></li>
                     </ul>
                     <div class="tab-content4">
                        <!-- Tab 1 -->
                        <div class="tab-pane active" id="tab-newtopic">
                           @foreach($khachsan as $ks)
                           <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><img alt="{{$ks->Ten}}" class="left mr20" src="upload/khachsan/{{$ks->Hinh}}"  style="
                              height: 78px;
                              width: 117px;
                              "></a>
                           <a class="dark" href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><b>{{$ks->Ten}}</b></a><br>
                           <?php 
                              $num = $ks->Gia;  
                              $formattedNum = number_format($num);?>
                           <span class="opensans green bold size14">{{ $formattedNum }}</span> <span class="grey">đ/đêm</span><br>
                           @if($ks->Sao==1)
                           <img src="upload/sao/1.png" alt="" class="mt-10"/>
                           @elseif($ks->Sao==2)
                           <img src="upload/sao/2.png" alt="" class="mt-10"/>
                           @elseif($ks->Sao==3)
                           <img src="upload/sao/3.png" alt="" class="mt-10"/>
                           @elseif($ks->Sao==4)
                           <img src="upload/sao/4.png" alt="" class="mt-10"/>
                           @elseif($ks->Sao==5)
                           <img src="upload/sao/5.png" alt="" class="mt-10"/>
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
   <!-- Mirrored from titanicthemes.com/travel/blue/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 15:40:48 GMT -->
   <div id="ascrail2000" style="width: 5px; z-index: 9000; position: fixed; top: 0px; height: 100%; right: 0px;">
      <div style="position: relative; top: 0px; float: right; width: 5px; height: 58px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
   </div>
   <div id="ascrail2000-hr" style="height: 6px; z-index: 9000; position: fixed; left: 0px; width: 100%; bottom: 0px; display: none;">
      <div style="position: relative; top: 0px; height: 5px; width: 1366px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
   </div>
</body>
@endsection