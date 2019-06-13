@extends('layout.index')
@section('content')
<div class="container mt-200 z-index100">		
    <div class="row">
      <div class="col-md-4">
          <div class="bs-example bs-example-tabs cstyle04">
          
              <ul class="nav nav-tabs" id="myTab">
                  {{-- <li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#air"><span class="hotel"></span> Khách sạn</a></li> --}}
                  <li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#hotel"><span class="hotel"></span>Khách sạn</a></li>
                  <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#car"><span class="car"></span>Xe</a></li>
              </ul>
              
              <div class="tab-content3" id="myTabContent">
                  
                  <!--End of 1st tab -->
                  
                  <div id="hotel" class="tab-pane fade active in">

                      <span class="opensans size18">Bạn muốn đi du lịch ở đâu?</span>
                      <div class="">
                        <form action="tim-kiem-khach-san.html" method="POST">
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <input type="text" class="form-control" placeholder="Nhập nơi bạn muốn đi" name="tukhoa1"> 
                      <br/>
                      <div class="w50percent">
                          <div class="wh90percent textleft">
                              <span class="opensans size13"><b>Nhập phòng</b></span>
                              <input type="date" class="form-control mySelectCalendar" id="today" placeholder="mm/dd/yyyy"/>
                          </div>
                      </div>

                      <div class="w50percentlast">
                          <div class="wh90percent textleft right">
                              <span class="opensans size13"><b>Trả phòng</b></span>
                              <input type="date" class="form-control mySelectCalendar" id="" placeholder="mm/dd/yyyy"/>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="room1 margtop15">
                          <div class="w50percentlast">	
                              <div class="wh90percent textleft right ohidden">
                                  <div class="w50percent">
                                      <div class="wh90percent textleft left">
                                          <span class="opensans size13"><b>Người lớn</b></span>
                                          <select class="form-control mySelectBoxClass">
                                            <option>1</option>
                                            <option selected>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                      </div>
                                  </div>							
                                  <div class="w50percentlast">
                                      <div class="wh90percent textleft right ohidden">
                                      <span class="opensans size13"><b>Trẻ em</b></span>
                                          <select class="form-control mySelectBoxClass">
                                            <option>0</option>
                                            <option selected>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
               	

                  
                  </div>
                  <!--End of 2nd tab -->
                  
                  <div id="car" class="tab-pane fade">

                      <div class="w50percent">
                          <div class="wh90percent textleft">
                              <span class="opensans size13"><b>Điểm đón</b></span>
                              <input type="text" class="form-control" placeholder="Nhập điểm đón">
                          </div>
                      </div>

                      <div class="w50percentlast">
                          <div class="wh90percent textleft right">
                              <span class="opensans size13"><b>Điểm đến</b></span>
                              <input type="text" class="form-control" placeholder="Nhập điểm đến">
                          </div>
                      </div>
                      
                      
                      <div class="clearfix"></div><br/>
                      <div class="w50percent">
                          <div class="wh90percent textleft">
                              <span class="opensans size13"><b>Ngày đón</b></span>
                              <input type="text" class="form-control mySelectCalendar" id="datepicker5" placeholder="mm/dd/yyyy"/>
                          </div>
                      </div>

                      <div class="w50percentlast">
                          <div class="wh90percent textleft right">
                              <span class="opensans size13"><b>Giờ</b></span>
                              <select class="form-control mySelectBoxClass">
                                <option>12:00 AM</option>
                                <option>12:30 AM</option>
                                <option>01:00 AM</option>
                                <option>01:30 AM</option>
                                <option>02:00 AM</option>
                                <option>02:30 AM</option>
                                <option>03:00 AM</option>
                                <option>03:30 AM</option>
                                <option>04:00 AM</option>
                                <option>04:30 AM</option>
                                <option>05:00 AM</option>
                                <option>05:30 AM</option>
                                <option>06:00 AM</option>
                                <option>06:30 AM</option>
                                <option>07:00 AM</option>
                                <option>07:30 AM</option>
                                <option>08:00 AM</option>
                                <option>08:30 AM</option>
                                <option>09:00 AM</option>
                                <option>09:30 AM</option>
                                <option>10:00 AM</option>
                                <option selected>10:30 AM</option>
                                <option>11:00 AM</option>
                                <option>11:30 AM</option>
                                <option>12:00 PM</option>
                                <option>12:30 PM</option>								  
                                <option>01:00 PM</option>
                                <option>01:30 PM</option>
                                <option>02:00 PM</option>
                                <option>02:30 PM</option>
                                <option>03:00 PM</option>
                                <option>03:30 PM</option>
                                <option>04:00 PM</option>
                                <option>04:30 PM</option>
                                <option>05:00 PM</option>
                                <option>05:30 PM</option>
                                <option>06:00 PM</option>
                                <option>06:30 PM</option>
                                <option>07:00 PM</option>
                                <option>07:30 PM</option>
                                <option>08:00 PM</option>
                                <option>08:30 PM</option>
                                <option>09:00 PM</option>
                                <option>09:30 PM</option>
                                <option>10:00 PM</option>
                                <option>10:30 PM</option>
                                <option>11:00 PM</option>
                                <option>11:30 PM</option>								  
                              </select>
                          </div>
                      </div>
                      
                      <div class="clearfix"></div>
                  </div>
              </div>
                          <button type="submit" class="btn-search">Tìm kiếm</button>
                      </form>
                  </div>
                  
          </div>
      </div>
      @foreach($tinnoibat as $tt)
      <div class="col-md-4">
          <div class="shadow cstyle05">
          <div class="fwi one"><img src="upload/khachsan/{{$tt->Hinh}}" alt="{{$tt->Ten}}" /><div class="mhover none"><span class="icon"><a href="list4.html"><img src="images/spacer.png" alt=""/></a></span></div></div>
              <div class="ctitle">{{$tt->Ten}}<a href="khach-san/{{$tt->id}}/{{$tt->TenKhongDau}}.html"><img src="images/spacer.png" alt=""/></a>
                        <?php 
                            $num = $tt->Gia;  
                            $formattedNum = number_format($num);?>
                  <span>{{$formattedNum }} <sup>đ</sup></span>
              </div>
          </div>
      </div>
     @endforeach
    </div>
  </div>
  
  <div class="deals3">
      <div class="container">	
          <div class="row">
            @foreach($khachsan as $ks)
              <div class="col-md-4">
                  <span class="dtitle">{{$ks->Ten}}</span>
                  <div class="deal">
                  <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><img src="upload/khachsan/{{$ks->Hinh}}" alt="{{$ks->Ten}}" class="dealthumb" style="
                        height: 50px;
                        width: 50px;
                         "/></a>
                      <div class="dealtitle">
                          <p><a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html" class="dark">{{$ks->Ten}}</a></p>
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
                          <span class="size13 grey mt-9"></span>
                      </div>
                      <div class="dealprice">
                            <?php 
                            $num = $ks->Gia;  
                            $formattedNum = number_format($num);?>
                          <p class="size12 grey lh2">Từ <span class="price">{{$formattedNum}}<sup>đ</sup></span><br/>/ đêm</p>
                      </div>					
                  </div>
     
              </div>
              @endforeach
              <!-- End of first row-->
              
              {{-- <div class="col-md-4">
                  <span class="dtitle">Early Booking</span>			
                  <div class="deal">
                      <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                      <div class="dealtitle">
                          <p><a href="details.html" class="dark">Comfort Suites Paradise Island</a></p>
                          <img src="images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Bahamas</span>
                      </div>
                      <div class="dealprice">
                          <p class="size12 grey lh2">from<span class="price">$29</span><br/>per night</p>
                      </div>					
                  </div>
                  <div class="deal">
                      <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                      <div class="dealtitle">
                          <p><a href="details.html" class="dark">Barcelo Malaga</a></p>
                          <img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Spain</span>
                      </div>
                      <div class="dealprice">
                          <p class="size12 grey lh2">from<span class="price">$32</span><br/>per night</p>
                      </div>					
                  </div>	
                  <div class="deal">
                      <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                      <div class="dealtitle">
                          <p><a href="details.html" class="dark">Palatino Hotel</a></p>
                          <img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                      </div>
                      <div class="dealprice">
                          <p class="size12 grey lh2">from<span class="price">$90</span><br/>per night</p>
                      </div>					
                  </div>				
              </div>
              <!-- End of first row-->
              
              <div class="col-md-4">
                  <span class="dtitle">Hot Deals</span>			
                  <div class="deal">
                      <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                      <div class="dealtitle">
                          <p><a href="details.html" class="dark">Parayso Hotel And Spa</a></p>
                          <img src="images/smallrating-4.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                      </div>
                      <div class="dealprice">
                          <p class="size12 grey lh2">from<span class="price">$49</span><br/>per night</p>
                      </div>					
                  </div>
                  <div class="deal">
                      <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                      <div class="dealtitle">
                          <p><a href="details.html" class="dark">Village Inn Studios & Family Apartments</a></p>
                          <img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                      </div>
                      <div class="dealprice">
                          <p class="size12 grey lh2">from<span class="price">$79</span><br/>per night</p>
                      </div>					
                  </div>	
                  <div class="deal">
                      <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb"/></a>
                      <div class="dealtitle">
                          <p><a href="details.html" class="dark">Diana Hotel</a></p>
                          <img src="images/smallrating-3.png" alt="" class="mt-10"/><span class="size13 grey mt-9">Zakynthos</span>
                      </div>
                      <div class="dealprice">
                          <p class="size12 grey lh2">from<span class="price">$299</span><br/>per night</p>
                      </div>					
                  </div>				
              </div> --}}
              <!-- End of first row-->			
          </div>
      </div>
  </div>
  
  <div class="lastminute3">
  </div>	
  <div class="container cstyle06">	
      <div class="row anim2">
        <div class="col-md-3">
          <h2>Top những nơi được yêu thích<br/></h2><br/>
          Những nơi được yêu thích nhất năm 2019
        </div>
        <div class="col-md-9">
        
          <!-- Carousel -->
          <div class="wrapper">
              <div class="list_carousel">
                  <ul id="foo">
                        @foreach($loaitin as $lt)
                      <li>
                      <a href="dia-diem/{{$lt->id}}/{{$lt->TenKhongDau}}.html"><img src="upload/hinhloaitin/{{$lt->Hinh}}" style="
                        height: 179px;
                        width: 255px;
                             "  alt="{{$lt->Ten}}"/></a>
                          <div class="m1">
                          <h6 class="lh1 dark"><b>Tham quan {{$lt->Ten}}</b></h6>
                              <h6 class="lh1 green">Thanh toán khi nhận phòng</h6>							
                          </div>
                      </li>
                      @endforeach
                 
                  </ul>
                  <div class="clearfix"></div>
                  <a id="prev_btn" class="prev" href="#"><img src="images/spacer.png" alt=""/></a>
                  <a id="next_btn" class="next" href="#"><img src="images/spacer.png" alt=""/></a>
              </div>
          </div>

        
        </div>
      </div>	
    
      <hr class="featurette-divider2">

      <div class="row anim3">
        <div class="col-md-3">
          <h2>Xem những bài blog mới nhất về du lịch<br/></h2><br/>
          
        </div>
        <div class="col-md-9">
        
          <!-- Carousel -->
          <div class="wrapper">
              <div class="list_carousel">		
                  <ul id="foo2">
                      @foreach($tintuc as $tt)
                      <li>
                      <a href="chi-tiet-tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"><img src="upload/tintuc/{{$tt->Hinh}}" alt="" style="
                            height: 179px;
                            width: 255px;
                                 " /></a>
                          <div class="m1">
                          <h6 class="lh1 dark"><b>{{$tt->TieuDe}}</b></h6>
                              <h6 class="lh1 green">Save up to 30%</h6>							
                          </div>							
                      </li>
                      @endforeach
                     					
                  </ul>
                  <div class="clearfix"></div>
                  <a id="prev_btn2" class="prev" href="#"><img src="images/spacer.png" alt=""/></a>
                  <a id="next_btn2" class="next" href="#"><img src="images/spacer.png" alt=""/></a>
              </div>
          </div>
        
        </div>
      </div>			

  </div>
  <script>
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
  </script>
@endsection