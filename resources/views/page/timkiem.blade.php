@extends('layout.index1')
@section('content')
<div class="container breadcrub">
   <div>
      <a class="homebtn left" href="#"></a>
      <div class="left">
         <ul class="bcrumbs">
            <li>/</li>
         <li><a href="#" class="active">Kết quả tìm kiếm của bạn về {{$tukhoa}}</a></li>
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
      <?php $checkketqua= $tintuc->count(); ?>
     
      <div class="col-md-12 pagecontainer2 offset-0">
         <div class="hpadding50c">
            <p class="lato size30 slim">Tin tức mới nhất</p>
            <p class="aboutarrow"></p>
         </div>
         <div class="line3"></div>
         <div class="hpadding50c">
            <!-- LEFT IMG -->
            <div class="col-md-8 cpdd01 grey2">
               @if($checkketqua>0)
               @foreach($tintuc as $tintuc)
               <div class="abover">
                  <div class="abbg">
                     <a href="upload/tintuc/{{$tintuc->Hinh}}" class="blogpost-hover" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><span class="glyphicon glyphicon-zoom-in"></span></a>
                  </div>
                  <img src="upload/tintuc/{{$tintuc->Hinh}}" class="fwimg" alt=""/>
               </div>
               <br/>
               <a href="chi-tiet-tin-tuc/{{$tintuc->id}}/{{$tintuc->TieuDeKhongDau}}.html"><span class="lato size22 dark bold">{{$tintuc->TieuDe}}</span></a><br/>
               <?php
                  $thoigian=$tintuc->created_at; 
                  $dateM=date("d-m-Y",strtotime($thoigian)); ?>    
               <span class="grey">{{$dateM}}<a href="#"></a> <a href="#"></a>/Đăng bởi <a href="#">{{$tintuc->NguoiDang}}</a></span><br/>
               <div class="line4 
                  des" data-maxlength="250">
                  <p> {!!$tintuc->TomTat!!}</p>
               </div>
               <br/><br/>
               <a href="chi-tiet-tin-tuc/{{$tintuc->id}}/{{$tintuc->TieuDeKhongDau}}.html">
               <br/>
               </a>
               <br/><br/>
               @endforeach
               @else 
               <p style="font-size:25px">
                  Không tìm thấy kết quả bạn cần tìm về "{{$tukhoa}}"
               </p>
               @endif
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
            </div>
            <!-- END OF LEFT IMG -->
            <!-- IMG RIGHT TEXT -->
            <div class="col-md-4 cpdd02">
               <div class="opensans grey">
                     <form action="timkiem" method="POST"> 
                           <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <input type="text"  placeholder="Tìm kiếm" class="form-control logpadding" name="tukhoa" >
                      </form>
                   <br/>
                  <span class="lato size18 dark bold">Địa điểm được yêu thích</span><br/>
                  <ul class="blogcat">
                     @foreach($loaitin as $lt)
                     <li><a href="#">{{$lt->Ten}}</a> <span class="badge indent0"></span></li>
                     @endforeach
                  </ul>
                  <br/>
                  <!-- Nav tabs -->
                  <ul class="nav navigation-tabs3">
                     <li class="active"><a href="#tab-newtopic" data-toggle="tab"><span class="glyphicon glyphicon-star"></span>Khách sạn nổi bật</a></li>
                  </ul>
                  <div class="tab-content4">
                     <!-- Tab 1 -->
                     @foreach($khachsannoibat as $ks)
                     <div class="tab-pane active" id="tab-newtopic">
                           <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><img alt="{{$ks->Ten}}" class="left mr20" src="upload/khachsan/{{$ks->Hinh}}" style="
                              height: 78px;
                              width: 117px;
                              "></a>
                        <a class="dark" href="#"><b>{{$ks->Ten}}</b></a><br>
                        <?php 
                        $num = $ks->Gia;  
                        $formattedNum = number_format($num);?>
                     <span class="opensans green bold size14">{{$formattedNum}} <sup></sup></span> <span class="grey">đ/đêm</span><br>
                     @if($ks->Sao==1)
                     <img src="upload/sao/1.png" alt="" />
                     @elseif($ks->Sao==2)
                     <img src="upload/sao/2.png" alt="" />
                     @elseif($ks->Sao==3)
                     <img src="upload/sao/3.png" alt="" />
                     @elseif($ks->Sao==4)
                     <img src="upload/sao/4.png" alt=""/>
                     @elseif($ks->Sao==5)
                     <img src="upload/sao/5.png" alt="" />
                     @endif
                     <div class="line4"></div>
                     @endforeach
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