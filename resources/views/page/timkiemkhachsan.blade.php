@extends('layout.index1')
@section('content')
<body id="top" class="thebg" >
   <div class="container breadcrub">
      <div>
         <a class="homebtn left" href="#"></a>
         <div class="left">
            <ul class="bcrumbs">
               <li>/</li>
            <li><a href="#">Kết quả tìm kiếm của bạn </a></li>
            </ul>
         </div>
         <a class="backbtn right" href="#"></a>
      </div>
      <div class="clearfix"></div>
      <div class="brlines"></div>
   </div>
   <!-- CONTENT -->
   <div class="container">
      <div class="container pagecontainer offset-0">
         <!-- FILTERS -->
         <div class="col-md-3 filters offset-0">
            <!-- TOP TIP -->
            <div class="filtertip">
               <div class="padding20">
                  <?php 
                     $countHotels=$khachsan->count();
                     ?>
                  <p class="size30 " style="
                     font-family: cursive;
                     ">{{$countHotels}} khách sạn<span class=""></span></p>
                  <br>
                  <p class="size13"> Đang hoạt động</p>
               </div>
               <div class="tip-arrow"></div>
            </div>
            <div class="bookfilters hpadding20">
               <br/>
               <!-- HOTELS TAB -->
               <div class="hotelstab2 none">
                  <span class="opensans size13" style="
                     font-size: 19px;
                     ">Bạn muốn đi du lịch ở đâu?</span>
                  <form action="tim-kiem-khach-san.html" method="POST">
                     <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                     <input type="text" class="form-control" placeholder="Nhập nơi bạn muốn đi" name="tukhoa1">
                     <div class="clearfix pbottom15"></div>
                     <div class="w50percent">
                        <div class="wh90percent textleft">
                           <span class="opensans size13">Nhận phòng</span>
                           <input type="text" class="form-control mySelectCalendar" id="datepicker" placeholder="mm/dd/yyyy"/>
                        </div>
                     </div>
                     <div class="w50percentlast">
                        <div class="wh90percent textleft right">
                           <span class="opensans size13">Trả phòng</span>
                           <input type="text" class="form-control mySelectCalendar" id="datepicker2" placeholder="mm/dd/yyyy"/>
                        </div>
                     </div>
                     <div class="clearfix pbottom15"></div>
                     <div class="clearfix"></div>
                     <button type="submit" class="btn-search3">Tìm kiếm</button>
                  </form>
               </div>
            </div>
            <!-- END OF BOOK FILTERS -->	
            <div class="line2"></div>
            <div class="padding20title">
               <h3 class="opensans dark">Lọc theo</h3>
            </div>
            <div class="line2"></div>
            <!-- Star ratings -->	
            <button type="button" class="collapsebtn" data-toggle="collapse" data-target="#collapse1">
               Star rating <span class="collapsearrow"></span>
               </button>
               <div id="collapse1" class="collapse in">
                  <div class="hpadding20">
                        <form action="tim-kiem-khach-san.html" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                     <div class="checkbox">
                        <label>
                        <input type="checkbox"  name="tukhoa1" value="5" ><img src="images/filter-rating-5.png" class="imgpos1" alt=""/> 5 sao
                        </label>
                     </div>
                     <div class="checkbox">
                        <label>
                        <input type="checkbox" name="tukhoa1" value="4"><img src="images/filter-rating-4.png" class="imgpos1" alt=""/> 4 sao
                        </label>
                     </div>
                     <div class="checkbox">
                        <label>
                        <input type="checkbox"  name="tukhoa1" value="3"><img src="images/filter-rating-3.png" class="imgpos1" alt=""/> 3 sao
                        </label>
                     </div>
                     <div class="checkbox">
                        <label>
                        <input type="checkbox"  name="tukhoa1" value="2"> <img src="images/filter-rating-2.png" class="imgpos1" alt=""/> 2 sao
                        </label>
                     </div>
                     <div class="checkbox">
                        <label>
                        <input type="checkbox"  name="tukhoa1" value="1"><img src="images/filter-rating-1.png" class="imgpos1" alt=""/> 1 sao
                        </label>
                     </div>
                     <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </form>
                  </div>
                  <div class="clearfix"></div>
               </div>
   
            <!-- End of Star ratings -->	
            <div class="line2"></div>

            <!-- Price range -->					
              
            <button type="button" class="collapsebtn" data-toggle="collapse" data-target="#collapse2">
               Price range <span class="collapsearrow"></span>
             </button>
             <form action="tim-kiem-khach-san-theo-gia.html" method="POST">
               <input type="hidden" name="_token" value="{{csrf_token()}}"/>
             <div id="collapse2" class="collapse in">
                <div class="padding20">
                   <div class="layout-slider wh100percent">
                   <span class="cstyle09">
                     <input id="Slider1" type="slider" name="tukhoa1" value="1000000;2500000" />
                     <br>
                     <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                  </span>
                   </div>
                   <script type="text/javascript" >
                     jQuery("#Slider1").slider({ from: 300000, to: 5000000, step: 5, smooth: true, round: 0, dimension: "&nbsp;đ", skin: "round" });
                   </script>
                </div>
               
             </div>
             
            </form>
            <!-- End of Price range -->	
            <div class="line2"></div>
            <!-- Acomodations -->		
            <!-- End of Acomodations -->
            <div class="line2"></div>
            <!-- Hotel Preferences -->
            <!-- End of Hotel Preferences -->
            <div class="line2"></div>
            <div class="clearfix"></div>
            <br/>
            <br/>
            <br/>
         </div>
         <!-- END OF FILTERS -->
         <!-- LIST CONTENT-->
         <div class="rightcontent col-md-9 offset-0">
            <div class="hpadding20">
               <!-- Top filters -->
               <div class="topsortby">
                  
                     <div class="col-md-4 offset-0">
                        <div class="left mt7"><b>Sắp xếp :</b></div>
                        <form action="sap-xep.html" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="right wh70percent">
                           <select class="form-control" name="tukhoa">
                              <option value="1" selected>Giá tăng dần</option>
                              <option value="2">Giá giảm dần</option>
                              <option value="3">Sao tăng dần</option>
                              <option value="4">Sao giảm dần</option>
                           </select>
                          <button type="submit" class="btn btn-primary">Sắp xếp</button>
                        </div>
                     </form>
                     </div>
                  </div>
               <!-- End of topfilters-->
            </div>
            <!-- End of padding -->
            <br/><br/>
            <div class="clearfix"></div>
            <div class="itemscontainer offset-1">
               @foreach($khachsan as $ks)
               <div class="clearfix"></div>
               <div class="offset-2">
                  <hr class="featurette-divider3">
               </div>
               <div class="offset-2">
                  <div class="col-md-4 offset-0">
                     <div class="listitem2">
                        <a href="upload/khachsan/{{$ks->Hinh}}" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="upload/khachsan/{{$ks->Hinh}}" alt=""/></a>
                        <div class="liover"></div>
                        <a class="fav-icon" href="#"></a>
                        <a class="book-icon" href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"></a>
                     </div>
                  </div>
                  <div class="col-md-8 offset-0">
                     <div class="itemlabel3">
                        <div class="labelright">
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
                           <br/>
                           <?php 
                              $data=$ks->comment;
                              $data1=count($data);
                               ?>
                           <span class="size11 grey">{{$data1}} Bình luận</span><br/><br/>
                           <?php 
                              $num = $ks->Gia;  
                              $formattedNum = number_format($num);?>
                           <span class="green size18"><b></b> {{$formattedNum}} VNĐ</span><br/>
                           <span class="size11 grey">/đêm</span>
                           <br/><br/> 
                            <span style="
                            color: #00a561;
                            font-size: 14px;
                           ">Thanh toán tại khách sạn</span>
                           <br/><br><br><br>
                           <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html">  <button class="btn btn-warning" type="submit">Đặt ngay</button>	</a>
                        </div>
                        <div class="labelleft2">
                           <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><b>{{$ks->Ten}}</b></a>
                           <p>
                              <i class="fas fa-map-marker-alt" style="
                              margin-top: 15px;
                            "></i>   {{$ks->DiaChi}}
                           </p>
                          
                           <p >
                              {{$ks->TomTat}}
                           </p>
                           <br/>
                           <ul class="hotelpreferences">
                              <li class="icohp-hairdryer"></li>
                              <li class="icohp-garden"></li>
                              <li class="icohp-grill"></li>
                              <li class="icohp-kitchen"></li>
                              <li class="icohp-bar"></li>
                              <li class="icohp-living"></li>
                              <li class="icohp-tv"></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               <div class="clearfix"></div>
               <div class="offset-2">
                  <hr class="featurette-divider3">
               </div>
            </div>
            <!-- End of offset1-->		
            <div class="hpadding20">
            </div>
         </div>
         <!-- END OF LIST CONTENT-->
      </div>
      <!-- END OF container-->
   </div>
   <!-- END OF CONTENT -->
   <!-- FOOTER -->
   <script>
      let today = new Date().toISOString().substr(0, 10);
      document.querySelector("#datepicker").value = today;
   </script>
   <!-- Javascript -->	
   @endsection