@extends('layout.index1')
@section('content')
<div class="container breadcrub">
   <div>
      <a class="homebtn left" href="#"></a>
      <div class="left">
         <ul class="bcrumbs">
            <li>/</li>
            <li><a href="#" class="active">Tin tức</a></li>
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
            <p class="lato size30 slim">Tin tức mới nhất</p>
            <p class="aboutarrow"></p>
         </div>
         <div class="line3"></div>
         <div class="hpadding50c">
            <!-- LEFT IMG -->
            <div class="col-md-8 cpdd01 grey2" id="co">
               @foreach($tintuc as $tt)
               <div class="abover">
                  <div class="abbg">
                     <a href="upload/tintuc/{{$tt->Hinh}}" class="blogpost-hover" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><span class="glyphicon glyphicon-zoom-in"></span></a>
                  </div>
                  <img src="upload/tintuc/{{$tt->Hinh}}" class="fwimg" alt="{{$tt->TieuDe}}"/>
               </div>
               <br/>
               <a href="chi-tiet-tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"><span class="lato size22 dark bold">{{$tt->TieuDe}}</span></a><br/>
               <?php
                  $thoigian=$tt->created_at; 
                  $dateM=date("d-m-Y",strtotime($thoigian)); ?>    
               <span class="grey">{{$dateM}}/Đăng bởi {{$tt->NguoiDang}}</span><br/>
               <div class="line4 
                  des" data-maxlength="250">
                  <p> {!!$tt->TomTat!!}</p>
               </div>
               <br/><br/>
               <br/><br/>
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
               <div class="line4"></div>
               <ul>
                  {!!$tintuc->links()!!}
               </ul>
            </div>
            <!-- END OF LEFT IMG -->
            <!-- IMG RIGHT TEXT -->
            <div class="col-md-4 cpdd02">
               <div class="opensans grey">
                  <form action="timkiem" method="POST"> 
                     <input type="hidden" name="_token" value="{{csrf_token()}}" />
                     <input value="" type="text" placeholder="Tìm kiếm.." class="form-control logpadding" name="tukhoa"><br/>
                  </form>
                  <span class="lato size18 dark bold">Địa điểm được yêu thích</span><br/>
                  <ul class="blogcat">
                     @foreach($loaitin as $lt)
                     <li><a href="dia-diem/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a> <span class="badge indent0"></span></li>
                     @endforeach
                  </ul>
                  <br/>
                  <!-- Nav tabs -->
                  <ul class="nav navigation-tabs3">
                     <li class="active"><a href="#tab-newtopic" data-toggle="tab"><span class="glyphicon glyphicon-star"></span>Khách sạn nổi bật</a></li>
                  </ul>
                  <div class="tab-content4">
                     <!-- Tab 1 -->
                     <div class="tab-pane active" id="tab-newtopic">
                        @foreach($khachsan as $ks)
                        <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><img alt="{{$ks->Ten}}" class="left mr20" src="upload/khachsan/{{$ks->Hinh}}" style="
                           height: 70px;
                           width: 100px;
                           "></a>
                        <a class="dark" href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><b> {{$ks->Ten}}</b></a><br>
                        <?php 
                           $num = $ks->Gia;  
                           $formattedNum = number_format($num);?>
                        <span class="opensans green bold size14">{{$formattedNum}} <sup>đ</sup></span> <span class="grey">/đêm</span><br>
                        @if($ks->Sao==1)
			                <img src="upload/sao/1.png" alt="" class=""/>
						@elseif($ks->Sao==2)
							<img src="upload/sao/2.png" alt="" class=""/>
						@elseif($ks->Sao==3)
							<img src="upload/sao/3.png" alt="" class=""/>
					    @elseif($ks->Sao==4)
							<img src="upload/sao/4.png" alt="" class=""/>
				        @elseif($ks->Sao==5)
							<img src="upload/sao/5.png" alt="" class=""/>
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
                  <br/><br/>
               </div>
            </div>
            <!-- END OF IMG RIGHT TEXT -->
            <div class="clearfix"></div>
            <br/><br/>
         </div>
         <div class="clearfix"></div>
         <br/><br/>
      </div>
      <!-- END CONTENT -->			
   </div>
</div>
<script>
   $(".des p").text(function(index, currentText) {
     var maxLength = $(this).parent().attr('data-maxlength');
     if (currentText.length >= maxLength) {
       return currentText.substr(0, maxLength) + "...xem tiếp";
     } else {
       return currentText
     }
   });
</script>
@endsection