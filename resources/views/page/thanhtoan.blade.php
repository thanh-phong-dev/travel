@extends('layout.index1')
@section('content')
<div class="container breadcrub">
    <div>
        <a class="homebtn left" href="#"></a>
        <div class="left">
            <ul class="bcrumbs">
                <li>/</li>
                <li><a href="#">Khách sạn</a></li>
                <li>/</li>
                <li><a href="#">Thanh toán</a></li>
               			
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
        <!-- LEFT CONTENT -->
        <div class="col-md-8 pagecontainer2 offset-0">
            <div class="padding30 grey">
                <span class="size16px bold dark left">Nhập thông tin cá nhân</span>
                <div class="roundstep active right">1</div>
                <div class="clearfix"></div>
                <div class="line4"></div>
                Vui lòng cho chúng tôi biết thông tin cá nhân của bạn và bạn phải đủ từ 18 tuổi trở lên <br><br>
                <div class="col-md-4 textright">
                    <div class="margtop15"><span class="dark"></span>Họ và tên: <span class="red">*</span></div>
                </div>
            <form action="thanh-toan/{{$khachsan->id}}/{{$khachsan->TenKhongDau}}.html" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="col-md-4">
                    <span class="size12">Họ và tên</span>
                    <input type="text" name="HoTen" class="form-control " placeholder="">
                </div>
                <div class="col-md-4 textleft margtop15">
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-4 textright">
                    <div class="margtop7"><span class="dark">Số điện thoại</span><span class="red">*</span></div>
                </div>
                
                <div class="col-md-4 ">
                    <span class="size12">Số điện thoại liên lạc</span>	
                    <input type="text" name="SoDienThoai" class="form-control" placeholder="">
                </div>
                <div class="clearfix"></div>

                <br>
                <div class="col-md-4">
                </div>
                <div class="col-md-8 textleft">
                    Yêu cầu giường ngủ/ hút thuốc
                    <!-- Collapse 3 -->	
                    <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse3"></button>
                    <div id="collapse3" class="collapse">
                        <textarea rows="3" class="form-control margtop10"></textarea>
                    </div>
                    <!-- End of collapse 3 -->
                    <div class="clearfix"></div>				

                    Yêu cầu đặc biệt		
                    <!-- Collapse 4 -->	
                    <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse4"></button>
                    <div id="collapse4" class="collapse">
                        <textarea rows="3" class="form-control margtop10"></textarea>
                    </div>
                    <!-- End of collapse 4 -->
                    <div class="clearfix"></div>	
                    
                </div>
                <div class="clearfix"></div>
                
                
                <br>
                <br>
                <span class="size16px bold dark left">Thanh toán khi nhận phòng hoặc thanh toán ngay</span>
                <div class="roundstep right">2</div>
                <div class="clearfix"></div>
                <div class="line4"></div>		
            
                
                
                <br>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    Enter a coupon code
                    <!-- Collapse 5 -->	
                    <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse5"></button>
                    <div id="collapse5" class="collapse">
                        <input type="text" class="form-control margtop10" placeholder="">
                    </div>
                    <!-- End of collapse 5 -->
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 textleft">
                </div>
                <div class="clearfix"></div>
                

                <br>
                <!-- Nav tabs -->
                <ul class="nav navigation-tabs">
                  <li class="active"><a href="#card" data-toggle="tab">Credit/Debit card</a></li>
                  <li><a href="#paypal" data-toggle="tab">Paypal</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content4">
                
                  <!-- Tab 1 -->
                  <div class="tab-pane active" id="card">
                  
                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark">Debit/Credit Card Number:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft">
                        </div>
                        <div class="clearfix"></div>
                        
                        <br>
                        <div class="col-md-4 textright">
                            <div class="margtop7"><span class="dark">Card Type:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control mySelectBoxClass hasCustomSelect" style="-webkit-appearance: menulist-button; width: 203px; position: absolute; opacity: 0; height: 34px; font-size: 14px;">
                              <option selected="">xxx-xxx-xxx-772</option>
                              <option>xxx-xxx-xxx-039</option>
                            </select><span class="customSelect form-control mySelectBoxClass" style="display: inline-block;"><span class="customSelectInner" style="width: 187px; display: inline-block;">xxx-xxx-xxx-772</span></span>
                        </div>
                        <div class="col-md-4 textleft">
                        </div>
                        <div class="clearfix"></div>
                        
                        <br>
                        <div class="col-md-4 textright">
                            <div class="margtop7"><span class="dark">Expiration Date:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            
                            <div class="w50percent">
                                <div class="wh90percent">
                                    <select class="form-control mySelectBoxClass hasCustomSelect" style="-webkit-appearance: menulist-button; width: 91px; position: absolute; opacity: 0; height: 34px; font-size: 14px;">
                                      <option selected="">01 JAN</option>
                                      <option>02 FEB</option>
                                      <option>03 MAR</option>
                                      <option>04 APR</option>
                                      <option>05 MAY</option>
                                      <option>06 JUN</option>
                                      <option>07 JUL</option>
                                      <option>08 AUG</option>
                                      <option>09 SEP</option>
                                      <option>10 OCT</option>
                                      <option>11 NOV</option>
                                      <option>12 DEC</option>
                                    </select><span class="customSelect form-control mySelectBoxClass" style="display: inline-block;"><span class="customSelectInner" style="width: 75px; display: inline-block;">01 JAN</span></span>						
                                </div>
                            </div>
                            <div class="w50percentlast">
                                <div class="wh90percent right">
                                    <select class="form-control mySelectBoxClass hasCustomSelect" style="-webkit-appearance: menulist-button; width: 91px; position: absolute; opacity: 0; height: 34px; font-size: 14px;">
                                      <option selected="">14</option>
                                      <option>15</option>
                                      <option>16</option>
                                      <option>17</option>
                                      <option>18</option>
                                      <option>19</option>
                                      <option>20</option>
                                      <option>21</option>
                                      <option>22</option>
                                      <option>23</option>
                                      <option>24</option>
                                      <option>25</option>
                                      <option>26</option>
                                    </select><span class="customSelect form-control mySelectBoxClass" style="display: inline-block;"><span class="customSelectInner" style="width: 75px; display: inline-block;">14</span></span>						
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 textleft">
                        </div>
                        <div class="clearfix"></div>
                        
              
                        <br>
                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark">Card Identification Number:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft margtop15">What's this?
                        </div>
                        <div class="clearfix"></div>

                        
                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark">Billing ZIP Code:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft margtop15">
                        </div>
                        <div class="clearfix"></div>
                        
                        
                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark"> Cardholder Name:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft margtop15">(as it appears on the card)
                        </div>
                        <div class="clearfix"></div>
                  
                  </div>
                  <!-- End of Tab 1 -->					  
                  
                  <!-- Tab 2 -->					  
                  <div class="tab-pane" id="paypal">
                    
                    <div class="alert alert-warning fade in">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong>Important:</strong> You will be redirected to PayPal's website to securely complete your payment. 
                    </div>

                    <button type="submit" class="btn-search5">Proceed to paypal</button>

                  </div>
                  <!-- End of Tab 2 -->	
                </div>

                
                <br>
                <br>
                <span class="size16px bold dark left">Chúng tôi sẽ gửi thông tin qua Email</span>
                <div class="roundstep right">3</div>
                <div class="clearfix"></div>
                <div class="line4"></div>		
                Nhập vào mail của bạn
                <br> 
                
                <div class="col-md-4 textright">
                    <div class="mt15"><span class="dark">Email :</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <input type="text" name="Email" class="form-control margtop10" placeholder="">
                </div>
                <div class="col-md-4 textleft">
                </div>
                <div class="clearfix"></div>
                <br>
                <br>
                <span class="size16px bold dark left">Thông tin thêm</span>
                <div class="roundstep right">4</div>
                <div class="clearfix"></div>
                <div class="line4"></div>		
                
                <div class="alert alert-info">
                Bạn có thể thanh toán khi nhận phòng
                 và không tính phí khi bạn hủy phòng
                <br>
                <p class="size12"></p>
                </div>		
               </a> 
                
                
        
            </div>
    
        </div>
        <!-- END OF LEFT CONTENT -->			
        
        <!-- RIGHT CONTENT -->
        <div class="col-md-4">
            
            <div class="pagecontainer2 paymentbox grey">
                <div class="padding30">
                    @foreach($khachsanmaster as $ks)
                <img src="upload/khachsan/{{$ks->Hinh}}" height="80px" class="left margright20" alt="">
                <span class="opensans size18 dark bold">{{$ks->Ten}}</span>
                   
                @if($ks->Sao==1)
                <img src="upload/sao/1.png" height="21px" alt="" class=""/>
                @elseif($ks->Sao==2)
                <img src="upload/sao/2.png" height="21px" alt="" class=""/>
                @elseif($ks->Sao==3)
                <img src="upload/sao/3.png" height="21px" alt="" class=""/>
                @elseif($ks->Sao==4)
                <img src="upload/sao/4.png" height="21px" alt="" class=""/>
                @elseif($ks->Sao==5)
                <img src="upload/sao/5.png" alt="" class=""/>
                @endif
                    @endforeach
                </div>
                <div class="line3"></div>
                
                <div class="hpadding30 margtop30">
                    <table class="table table-bordered margbottom20">
                        <tbody><tr>
                            <td>Guests recommendations</td>
                            <td class="center green bold">97%</td>
                        </tr>
                        <tr>
                            <td>Đánh giá</td>
                            <td class="center green bold">4.5</td>
                        </tr>
                        <tr>
                            <td colspan="2"><span class="dark">Loại phòng</span>: {{$khachsan->TenPhong}}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><span class="dark"> Ngày nhận phòng
                             <input type="date" name="NgayDat" id="today" class="form-control mySelectCalendar">
                            </td>

                        </tr>
                        <tr>
                                <td colspan="2"><span class="dark">Ngày trả phòng
                                <input type="date" name="NgayTra" class="form-control mySelectCalendar">
                                </td>
                            </tr>
                           </tr>
                            <tr>
                            <td colspan="2"><span class="dark">Ngày ở
                            <input type="text" id="a" name="SoNgayO" class="form-control" min="1" value="1"  onkeyup="tinh()">
                            </td>
                        </tr>
                        <tr>
                                <td colspan="2"><span class="dark">Tiền
                            <?php 
                            $num = $khachsan->Gia;  
                            $formattedNum = number_format($num);?>
                                <input type="text" id="b" name="Tien" class="form-control" min="1" value="{{  $formattedNum }}"  onkeyup="tinh()">
                                </td>
                            </tr>
                            <tr>
                                    <td colspan="2"><span class="dark">Tổng tiền
                                    <input type="text" id="result" name="TongTien" class="form-control" value="{{$formattedNum}}">
                                    </td>
                                </tr>
                        <tr>
                            <td>
                                <span class="dark">{{$khachsan->TenPhong}}</span>:{{$khachsan->SoNguoi}} người <br>
                                <span class="dark">Người lớn</span>:{{$khachsan->NguoiLon}} người <br>
                                <span class="dark">Trẻ em</span>:{{$khachsan->TreEm}} người <br>
                                <!-- Collapse 1 -->	
                                <!-- End of collapse 1 -->
                                <div class="clearfix"></div>	
                                <!-- End of collapse 1 -->
                                <div class="clearfix"></div>	
                            </td>
                          
                            <?php 
                            $num = $khachsan->Gia;  
                            $formattedNum = number_format($num);?>
                            <td class="center">
                                    {{$formattedNum}} <sup>đ</sup>/đêm                                
                            <br>
                            </td>
                        
                        </tr>
                    </tbody></table>
                <button type="submit" class="bluebtn margtop20">Đặt Phòng</button>	

                </form>
                </div>	
                <div class="line3"></div>
                <div class="padding30">					
                    <span class="left size14 dark">Tổng tiền:</span>
                    <span class="right lred2 bold size18">$192.15</span>
                    <div class="clearfix"></div>
                </div>
           


            </div><br>
            
            <div class="pagecontainer2 needassistancebox">
                <div class="cpadding1">
                    <span class="icon-help"></span>
                    <h3 class="opensans">Liên hệ</h3>
                    <p class="size14 grey">Chúng tôi phục vụ 24/7 để giúp bạn giải quyết các vấn đề đặt phòng hoặc trả lời bất kỳ câu hỏi nào liên quan</p>
                    <p class="opensans size30 lblue xslim">0832210125</p>
                </div>
            </div><br>
            
            <br>
        
        </div>
        <!-- END OF RIGHT CONTENT -->
        
        
    </div>
    
    
</div>
<script>
        let today = new Date().toISOString().substr(0, 10);
        document.querySelector("#today").value = today;
      </script>
        <script language="javascript">

                var tramngin=",000 vnđ";
                var trieu = ",000,000"
                // Hàm tính kết quả
                function tinh()
                {
                  // Lấy 3 ô input
                  var a = document.getElementById("a");
                  var b = document.getElementById("b");
                  var result = document.getElementById("result");
                if(a.value >= 10) {
                        // Tính tổng hai ô đầu tiên
                 
                    var tong = parseInt(a.value) * parseInt(b.value) ;
                  
                  // Gán giá trị vào ô thứ ba
                  // Phải kiểm tra tổng hai số này có bị lỗi hay không
                  if (!isNaN(tong)){
                    result.value = tong + trieu;
                  }
                } else {
                          // Tính tổng hai ô đầu tiên
                 
                          var tong = parseInt(a.value) * parseInt(b.value) ;
                  
                  // Gán giá trị vào ô thứ ba
                  // Phải kiểm tra tổng hai số này có bị lỗi hay không
                  if (!isNaN(tong)){
                    result.value = tong + tramngin;
                }
              
                }
                }
              </script>
@endsection