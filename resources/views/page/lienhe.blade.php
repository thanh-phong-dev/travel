@extends('layout.index1')
@section('content')
<div id="dajy" class="mtslide sliderbg fixed cstyle11">	
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.45481331385!2d106.78012791380068!3d10.852970592269598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527727f3a61b3%3A0xfb9a35128b0866f4!2zMTggxJDGsOG7nW5nIDkwNCwgUGjGsOG7nW5nIFTDom4gUGjDuiwgUXXhuq1uIDksIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1557247935200!5m2!1svi!2s" width="1380" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
    

<!-- WRAP -->
<div class="wrap cstyle03">
    
    <div class="container mt-200 z-index100">		
      <div class="row">
        <div class="col-md-12">
            <div class="bs-example bs-example-tabs cstyle04">
            
                <div class="tab-content">

                    <div class="col-md-4">
                    <form action="lien-he.html" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <span class="opensans size24 slim">Liên hệ</span>
                        <input type="text" name="name" placeholder="Tên của bạn" class="form-control logpadding margtop10">
                        <input type="text" name="sodienthoai" placeholder="Số Điện Thoại" class="form-control logpadding margtop20">
                        <input type="text" name="email" placeholder="E-mail" class="form-control logpadding margtop20">
                    </div>
                    <div class="col-md-4">
                        <label for="">Lời nhắn</label>
                        <textarea name="LoiNhan" rows="9" class="form-control margtop10"></textarea>
                    </div>
                    <div class="col-md-4 opensans grey">
                        Địa chỉ:<br/>
                        <span class="dark">
                            16/2B đường 904<br/>
                           phường Hiệp Phú<br/>
                           Q9.TPHCM<br/>
                        </span>
                        <br/>
                        Phone<br/>
                        <p class="opensans size30 lblue xslim">083-2210-125</p>
                        Email<br/>
                        <a href="mailto:thanhphong9718@gmail.com" class="green2">thanhphong9718@gmail.com</a>
                    </div>
                </div>
                
                <div class="searchbg3">
                    <button type="submit" class="btn-search right mr20">Gửi liên hệ</button>
                    </form>
                </div>
                    
            </div>
        </div>
      </div>
    </div>
    

    
    <div class="lastminutecontact lcfix">
        <div class="container lmc">	
            <img src="images/rating-4.png" alt=""/><br/>
            LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep 27h Aug from $209/person<br/>
            <form action="http://titanicthemes.com/travel/blue/details.html" >
                <button class="btn iosbtn" type="submit">Read more</button>
            </form>
        </div>
    </div>
    

    
    
    <!-- FOOTER -->
    
    <div class="footerbg sfix3">
        <div class="container">		
            <footer>
                <div class="footer">
                    <a href="#" class="social1"><img src="images/icon-facebook.png" alt=""/></a>
                    <a href="#" class="social2"><img src="images/icon-twitter.png" alt=""/></a>
                    <a href="#" class="social3"><img src="images/icon-gplus.png" alt=""/></a>
                    <a href="#" class="social4"><img src="images/icon-youtube.png" alt=""/></a>
                    <br/><br/>
                    Copyright &copy; 2013 <a href="#">Travel Agency</a> All rights reserved. <a href="http://titanicthemes.com/">TitanicThemes.com</a>
                    <br/><br/>
                    <a href="#top" id="gotop2" class="gotop"><img src="images/spacer.png" alt=""/></a>
                </div>
            </footer>
        </div>	
    </div>
    
    

    
    
</div>
@endsection