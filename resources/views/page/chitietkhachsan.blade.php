@extends('layout.index1')
@section('content')
<div class="container breadcrub">
   <div>
      <a class="homebtn left" href="trang-chu.html"></a>
      <div class="left">
         <ul class="bcrumbs">
            <li>/</li>
            <li><a >Khách sạn</a></li>
            <li>/</li>
            <li><a >{{$khachsan->Ten}}</a></li>
         </ul>
      </div>
      <a class="backbtn right" href="#"></a>
   </div>
   <div class="clearfix"></div>
   <div class="brlines"></div>
</div>
<div class="container">
   <div class="container pagecontainer offset-0">
      <!-- SLIDER -->
      <div class="col-md-8 details-slider">
         <div id="c-carousel">
            <div id="wrapper">
               <div id="">
                  <div id="">
                     <div >
                        <div id="" >
                           <img src="upload/khachsan/{{$khachsan->Hinh}}" alt="" style="width: 759px;">
                           {{-- <img src="upload/khachsan/{{$khachsan->Hinh}}" alt="{{$khachsan->Ten}}" style="width: 759px;"> --}}
                           
                        </div>
                     </div>
                  </div>
                
               </div>
               <div class="clearfix"></div>
             
            </div>
         </div>
         <!-- /c-carousel -->
      </div>
      <!-- END OF SLIDER -->			
      <!-- RIGHT INFO -->
      <div class="col-md-4 detailsright offset-0">
         <div class="padding20">
            <h2 class="lh1">{{$khachsan->Ten}}</h2>
            <br/>
            <br/>
            @if($khachsan->Sao==1)
            <img src="upload/sao/1.png" alt="" class="mt-10"/>
            @elseif($khachsan->Sao==2)
            <img src="upload/sao/2.png" alt="" class="mt-10"/>
            @elseif($khachsan->Sao==3)
            <img src="upload/sao/3.png" alt="" class="mt-10"/>
            @elseif($khachsan->Sao==4)
            <img src="upload/sao/4.png" alt="" class="mt-10"/>
            @elseif($khachsan->Sao==5)
            <img src="upload/sao/5.png" alt="" class="mt-10"/>
            @endif
         </div>
         <div class="line3"></div>
         <div class="hpadding20">
            <h2 class="opensans slim green2">Tuyệt vời</h2>
         </div>
         <div class="line3 margtop20"></div>
         <div class="col-md-6 bordertype1 padding20">
            <span class="opensans size30 bold grey2">100%</span><br>
            Trả tiền khi nhận phòng
         </div>
         <div class="col-md-6 bordertype2 padding20">
            <span class="opensans size30 bold grey2">{{$khachsan->SoLuotXem}}</span> Lượt xem<br>
         </div>
         <div class="col-md-12 bordertype3">
            <img src="images/user-rating-4.png" alt=""><br>
            <?php 
               $data=$khachsan->comment;
               $data1=count($data);
               ?>
            <p 
               style="
               font-size: 17px;
               "
               >{{$data1}} Bình luận </p>
         </div>
         <div class="clearfix"></div>
         <br>
         
      </div>
      <!-- END OF RIGHT INFO -->
   </div>
   <!-- END OF container-->
   <div class="container mt25 offset-0">
      <div class="col-md-8 pagecontainer2 offset-0">
         <div class="cstyle10"></div>
         <ul class="nav nav-tabs" id="myTab">
            <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#summary"><span class="summary"></span><span class="hidetext">Giới thiệu</span>&nbsp;</a></li>
            <li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#roomrates"><span class="rates"></span><span class="hidetext">Chọn loại phòng</span>&nbsp;</a></li>
            <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#preferences"><span class="preferences"></span><span class="hidetext">Dịch vụ</span>&nbsp;</a></li>
            <li onclick="loadScript()" class=""><a data-toggle="tab" href="#maps"><span class="maps"></span><span class="hidetext">Maps</span>&nbsp;</a></li>
            <li onclick="mySelectUpdate(); trigerJslider(); trigerJslider2(); trigerJslider3(); trigerJslider4(); trigerJslider5(); trigerJslider6();" class=""><a data-toggle="tab" href="#reviews"><span class="reviews"></span><span class="hidetext">Đánh giá</span>&nbsp;</a></li>
            <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#thingstodo"><span class="thingstodo"></span><span class="hidetext">Things to do</span>&nbsp;</a></li>
         </ul>
         <div class="tab-content4">
            <!-- TAB 1 -->				
            <div id="summary" class="tab-pane fade ">
               <p class="hpadding20">
                  {!!$khachsan->NoiDung!!}
               </p>
            </div>
            <!-- TAB 2 -->
            <div id="roomrates" class="tab-pane fade active in">
               <br>
               <p class="hpadding20 dark">Loại phòng</p>
               <div class="line2"></div>
               @foreach($phongcuakhachsan as $pks)
               <div class="padding20">
                  <div class="col-md-4 offset-0">
                     <a href="#"><img src="images/items2/item1.jpg" alt="" class="fwimg"></a>
                  </div>
                  <div class="col-md-8 offset-0">
                     <div class="col-md-8 mediafix1">
                        <h4 class="opensans dark bold margtop1 lh1">{{$pks->TenPhong}}</h4>
                        Số người tối đa:{{$pks->SoNguoi}} <br/>
                        Người lớn:{{$pks->NguoiLon}}
                        ,Trẻ em:{{$pks->TreEm}}
                        <ul class="hotelpreferences margtop10">
                           <li class="icohp-internet"></li>
                           <li class="icohp-air"></li>
                           <li class="icohp-pool"></li>
                           <li class="icohp-childcare"></li>
                           <li class="icohp-fitness"></li>
                           <li class="icohp-breakfast"></li>
                           <li class="icohp-parking"></li>
                        </ul>
                        <div class="clearfix"></div>
                        <ul class="checklist2 margtop10">
                           <li>Hủy phòng miễn phí</li>
                           <li>Thanh toán khi nhận phòng</li>
                        </ul>
                     </div>
                     <div class="col-md-4 center bordertype4">
                        <?php 
                           $num = $pks->Gia;  
                           $formattedNum = number_format($num);?>
                        <span class="opensans green size24">{{ $formattedNum}}</span><br>
                        <span class="opensans lightgrey size12">VNĐ/Đêm</span><br><br>
                        <span class="lred bold">3 left</span><br><br>
                        <a href="thanh-toan/{{$pks->id}}/{{$pks->TenKhongDau}}.html"><button class="btn btn-warning">Đặt phòng</button></a>	
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="line2"></div>
               @endforeach
            </div>
            <!-- TAB 3 -->					
            <div id="preferences" class="tab-pane fade">
               <p class="hpadding20">
                  The hotel offers a snack bar/deli. A bar/lounge is on site where guests can unwind with a drink. Guests can enjoy a complimentary breakfast. An Internet point is located on site and high-speed wireless Internet access is complimentary.
               </p>
               <div class="line4"></div>
               <!-- Collapse 7 -->	
               <button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse7">
               Hotel facilities <span class="collapsearrow"></span>
               </button>
               <div id="collapse7" class="collapse in">
                  <div class="hpadding20">
                     <div class="col-md-4 offset-0">
                        <ul class="hotelpreferences2 left">
                           <li class="icohp-internet"></li>
                           <li class="icohp-air"></li>
                           <li class="icohp-pool"></li>
                           <li class="icohp-childcare"></li>
                           <li class="icohp-fitness"></li>
                           <li class="icohp-breakfast"></li>
                           <li class="icohp-parking"></li>
                           <li class="icohp-pets"></li>
                           <li class="icohp-spa"></li>
                           <li class="icohp-hairdryer"></li>
                        </ul>
                        <ul class="hpref-text left">
                           <li>High-speed Internet</li>
                           <li>Air conditioning</li>
                           <li>Swimming pool</li>
                           <li>Childcare</li>
                           <li>Fitness equipment</li>
                           <li>Free breakfast</li>
                           <li>Free parking</li>
                           <li>Pets allowed</li>
                           <li>Spa services on site</li>
                           <li>Hair dryer</li>
                        </ul>
                     </div>
                     <div class="col-md-4 offset-0">
                        <ul class="hotelpreferences2 left">
                           <li class="icohp-garden"></li>
                           <li class="icohp-grill"></li>
                           <li class="icohp-kitchen"></li>
                           <li class="icohp-bar"></li>
                           <li class="icohp-living"></li>
                           <li class="icohp-tv"></li>
                           <li class="icohp-fridge"></li>
                           <li class="icohp-microwave"></li>
                           <li class="icohp-washing"></li>
                           <li class="icohp-roomservice"></li>
                        </ul>
                        <ul class="hpref-text left">
                           <li>Courtyard garden</li>
                           <li>Grill / Barbecue</li>
                           <li>Kitchen</li>
                           <li>Bar</li>
                           <li>Living</li>
                           <li>TV</li>
                           <li>Fridge</li>
                           <li>Microwave</li>
                           <li>Washing maschine</li>
                           <li>Room service</li>
                        </ul>
                     </div>
                     <div class="col-md-4 offset-0">
                        <ul class="hotelpreferences2 left">
                           <li class="icohp-safe"></li>
                           <li class="icohp-playground"></li>
                           <li class="icohp-conferenceroom"></li>
                        </ul>
                        <ul class="hpref-text left">
                           <li>Reception Safe</li>
                           <li>Playground</li>
                           <li>Conference room</li>
                        </ul>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <!-- End of collapse 7 -->		
               <br>
               <div class="line4"></div>
               <!-- Collapse 8 -->	
               <button type="button" class="collapsebtn2" data-toggle="collapse" data-target="#collapse8">
               Room facilities <span class="collapsearrow"></span>
               </button>
               <div id="collapse8" class="collapse in">
                  <div class="hpadding20">
                     <div class="col-md-4">
                        <ul class="checklist">
                           <li>Climate control</li>
                           <li>Air conditioning</li>
                           <li>Direct-dial phone</li>
                           <li>Minibar</li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="checklist">
                           <li>Wake-up calls</li>
                           <li>Daily housekeeping</li>
                           <li>Private bathroom</li>
                           <li>Hair dryer</li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="checklist">
                           <li>Makeup/shaving mirror</li>
                           <li>Shower/tub combination</li>
                           <li>Satellite TV service</li>
                           <li>Electronic/magnetic keys</li>
                        </ul>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <!-- End of collapse 8 -->				
            </div>
            <!-- TAB 4 -->					
            <div id="maps" class="tab-pane fade">
               {!!$khachsan->Maps!!}
            </div>
            <!-- TAB 5 -->					
            <div id="reviews" class="tab-pane fade ">
               <div class="line4"></div>
               {{-- bình luận --}}
               @foreach($khachsan->comment as $cm)
               <div class="line2"></div>
               <div class="hpadding20">
                  <div class="col-md-4 offset-0 center">
                     <div class="padding20">
                        <div class="bordertype5">
                           <div class="circlewrap">
                              <img src="images/user-avatar.jpg" class="circleimg" alt="">
                              <span>{{$cm->DanhGia}}</span>
                           </div>
                           <span class="dark">by {{$cm->user->name}}</span>
                           <img src="images/check.png" alt=""><br>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 offset-0">
                     <div class="padding20">
                        @if($cm->DanhGia==5)
                        <span class="opensans size16 dark">Rất hài lòng</span><br>
                        @elseif($cm->DanhGia==4.5)
                        <span class="opensans size16 dark">Hài lòng</span><br>
                        @elseif($cm->DanhGia==4)
                        <span class="opensans size16 dark">Hài lòng</span><br>
                        @elseif($cm->DanhGia==3.5)
                        <span class="opensans size16 dark">Bình thường</span><br>
                        @elseif($cm->DanhGia==3)
                        <span class="opensans size16 dark">Bình thường</span><br>
                        @elseif($cm->DanhGia==2.5)
                        <span class="opensans size16 dark">Tệ</span><br>
                        @elseif($cm->DanhGia==2)
                        <span class="opensans size16 dark">Tệ</span><br>
                        @elseif($cm->DanhGia==1.5)
                        <span class="opensans size16 dark">Rất tệ</span><br>
                        @elseif($cm->DanhGia==1)
                        <span class="opensans size16 dark">Rất tệ</span><br>
                        @elseif($cm->DanhGia==0.5)
                        <span class="opensans size16 dark">Rất rất tệ</span><br>
                        @endif
                        <?php
                           $thoigian=$cm->created_at; 
                           $dateM=date("d-m-Y",strtotime($thoigian)); ?> 
                        <span class="opensans size13 lgrey">{{$dateM}}</span><br>
                        <p>{{$cm->NoiDung}}</p>
                        <ul class="circle-list">
                        <li>{{$cm->DanhGia}} sao</li>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               @endforeach
               {{-- end comment --}}
               <div class="line2"></div>
               <br>
               <br>
               <div class="hpadding20">
                  <span class="opensans dark size16 bold">Bình luận</span>
               </div>
               <div class="line2"></div>
               <form action="commentkhachsan/{{$khachsan->id}}" method="POST">
                  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                  <h1>Đánh giá</h1>
                  <fieldset class="rating">
                     <input type="radio" id="star5" name="DanhGia" value="5" />
                     <label class = "full" for="star5" title="Rất hài lòng"></label>
                     <input type="radio" id="star4half" name="DanhGia" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                     <input type="radio" id="star4" name="DanhGia" value="4" /><label class = "full" for="star4" title="Hài lòng"></label>
                     <input type="radio" id="star3half" name="DanhGia" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                     <input type="radio" id="star3" name="DanhGia" value="3" /><label class = "full" for="star3" title="Bình thường"></label>
                     <input type="radio" id="star2half" name="DanhGia" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                     <input type="radio" id="star2" name="DanhGia" value="2" /><label class = "full" for="star2" title="Tệ"></label>
                     <input type="radio" id="star1half" name="DanhGia" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                     <input type="radio" id="star1" name="DanhGia" value="1" /><label class = "full" for="star1" title="Rất tệ"></label>
                     <input type="radio" id="starhalf" name="DanhGia" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  <textarea name="NoiDung" class="form-control" rows="3"></textarea>
                  <br/>
                  <button onclick="errorMessage()" type="submit" class="btn-search5">Bình luận <span class="glyphicon glyphicon-arrow-down"></span></button>
               </form>
               <br/><br/><br/>
               <div class="wh66percent right offset-0">
                  <script>
                     //This is a fix for when the slider is used in a hidden div
                     function testTriger(){
                         setTimeout(function (){
                             $(".cstyle01").resize();
                         }, 500);	
                     }
                  </script>
               </div>
               <div class="clearfix"></div>
            </div>
            <!-- TAB 6 -->					
            <div id="thingstodo" class="tab-pane fade">
               <p class="hpadding20 opensans size16 dark bold">Attractions travelers recommend</p>
               <div class="line2"></div>
               <div class="padding20">
                  <div class="col-md-4 offset-0">
                     <a href="#"><img src="images/items2/item5.jpg" alt="" class="fwimg"></a>
                  </div>
                  <div class="col-md-8 offset-0">
                     <div class="col-md-8 mediafix1">
                        <span class="opensans dark size16 margtop1 margtop-5">Porto Limnionas Beach</span><br>
                        <span class="lblue">“Just Great!!!”</span> 08/27/2013<br>
                        <p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
                        <div class="clearfix"></div>
                     </div>
                     <div class="col-md-4 center bordertype4">
                        <img src="images/user-rating-4.png" alt=""><br>
                        <span class="opensans grey size14">31 reviews</span>
                        <br><br><br><br>
                        <button class="bookbtn mt1">More</button>	
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="line2"></div>
               <div class="padding20">
                  <div class="col-md-4 offset-0">
                     <a href="#"><img src="images/items2/item6.jpg" alt="" class="fwimg"></a>
                  </div>
                  <div class="col-md-8 offset-0">
                     <div class="col-md-8 mediafix1">
                        <span class="opensans dark size16 margtop1 margtop-5">Marathonissi (Turtle Island), Laganas</span><br>									
                        <span class="lblue">“Beautiful”</span> 08/27/2013<br>
                        <p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
                        <div class="clearfix"></div>
                     </div>
                     <div class="col-md-4 center bordertype4">
                        <img src="images/user-rating-5.png" alt=""><br>
                        <span class="opensans grey size14">23 reviews</span>
                        <br><br><br><br>
                        <button class="bookbtn mt1">More</button>	
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="line2"></div>
               <div class="padding20">
                  <div class="col-md-4 offset-0">
                     <a href="#"><img src="images/items2/item7.jpg" alt="" class="fwimg"></a>
                  </div>
                  <div class="col-md-8 offset-0">
                     <div class="col-md-8 mediafix1">
                        <span class="opensans dark size16 margtop1 margtop-5">Navagio Beach (Shipwreck Beach)</span><br>											
                        <span class="lblue">“like being on a tropical island”</span> 08/27/2013<br>
                        <p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
                        <div class="clearfix"></div>
                     </div>
                     <div class="col-md-4 center bordertype4">
                        <img src="images/user-rating-3.png" alt=""><br>
                        <span class="opensans grey size14">17 reviews</span>
                        <br><br><br><br>
                        <button class="bookbtn mt1">More</button>	
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="line2"></div>
               <div class="padding20">
                  <div class="col-md-4 offset-0">
                     <a href="#"><img src="images/items2/item8.jpg" alt="" class="fwimg"></a>
                  </div>
                  <div class="col-md-8 offset-0">
                     <div class="col-md-8 mediafix1">
                        <span class="opensans dark size16 margtop1 margtop-5">Blue Caves</span><br>										
                        <span class="lblue">“A must see”</span> 08/27/2013<br>
                        <p class="margtop10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit augue, placerat quis est eget, cursus dictum felis. Morbi non dui vitae nisl pharetra placerat.</p>
                        <div class="clearfix"></div>
                     </div>
                     <div class="col-md-4 center bordertype4">
                        <img src="images/user-rating-4.png" alt=""><br>
                        <span class="opensans grey size14">10 reviews</span>
                        <br><br><br><br>
                        <button class="bookbtn mt1">More</button>	
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="line2"></div>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="pagecontainer2 testimonialbox">
            <div class="cpadding0 mt-10">
               <span class="icon-quote"></span>
               <p class="opensans size16 grey2">Thật là thoải mái khi ở lại đây và nhân viên rất dễ chịu và chào đón nhiệt tình<br>
                  {{-- <span class="lato lblue bold size13"><i>by Ellison from United Kingdom</i></span>
               </p>
               --}}
            </div>
         </div>
         <div class="pagecontainer2 mt20 needassistancebox">
            <div class="cpadding1">
               <span class="icon-help"></span>
               <h3 class="opensans">Liên hệ</h3>
               <p class="size14 grey">Chúng tôi phục vụ 24/7 để giúp bạn giải quyết các vấn đề đặt phòng hoặc trả lời bất kỳ câu hỏi nào liên quan</p>
               <p class="opensans size30 lblue xslim">{{$khachsan->SoDienThoai}}</p>
            </div>
         </div>
         <br>
         <div class="pagecontainer2 mt20 alsolikebox">
            <div class="cpadding1">
               <span class="icon-location"></span>
               <h3 class="opensans">Bạn có thể quan tâm</h3>
               <div class="clearfix"></div>
            </div>
            @foreach($khachsanlienquan as $ks)
            <div class="line5"></div>
            <div class="cpadding1 ">
               <a href="#"><img src="upload/khachsan/{{$ks->Hinh}}" class="left mr20" alt="" style="
                  width: 100px;
                  height: 66px;
                  "></a>
               <a href="#" class="dark"><b>{{$ks->Ten}}</b></a><br>
               <?php 
                  $num = $ks->Gia;  
                  $formattedNum = number_format($num);?>
               <span class="opensans green bold size14">{{$formattedNum}}</span> <span class="grey">vnđ/đêm</span><br>
               <img src="images/filter-rating-5.png" alt="">
            </div>
            @endforeach
            <br>
         </div>
      </div>
   </div>
</div>
<style>@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
   fieldset, label { margin: 0; padding: 0; }
   body{ margin: 20px; }
   h1 { font-size: 1.5em; margin: 10px; }
   /****** Style Star Rating Widget *****/
   .rating { 
   border: none;
   float: left;
   }
   .rating > input { display: none; } 
   .rating > label:before { 
   margin: 5px;
   font-size: 1.25em;
   font-family: FontAwesome;
   display: inline-block;
   content: "\f005";
   }
   .rating > .half:before { 
   content: "\f089";
   position: absolute;
   }
   .rating > label { 
   color: #ddd; 
   float: right; 
   }
   /***** CSS Magic to Highlight Stars on Hover *****/
   .rating > input:checked ~ label, /* show gold star when clicked */
   .rating:not(:checked) > label:hover, /* hover current star */
   .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */
   .rating > input:checked + label:hover, /* hover current star when changing rating */
   .rating > input:checked ~ label:hover,
   .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
   .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
</style>
@endsection