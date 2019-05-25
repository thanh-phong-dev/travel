<div class="navbar-wrapper2 navbar-fixed-top">
    <div class="container">
      <div class="navbar mtnav">

          <div class="container offset-3">
            <!-- Navigation-->
            <div class="navbar-header">
              <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="trang-chu.html" class="navbar-brand"><img src="images/logo.png" alt="Travel Agency Logo" class="logo"/></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="trang-chu.html">Trang chủ</a>
                  
                </li>
                {{-- <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Hỏi đáp <span class="badge indent0"></span><b class="lightcaret mt-2"></b></a>
                  
                </li> --}}
                <li><a href="tin-tuc.html">Tin tức</a></li>
                <li><a href="khach-san.html">Khách sạn</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Khuyến mãi</a></li>
                <li><a href="dien-dan.html">Hỏi đáp</a></li>
                <li><a href="lien-he.html">Liên hệ quảng cáo</a></li>
                @if(Auth::User() != null)
                <li><a href="dangxuatuser">Chào {{Auth::user()->name}}, Đăng xuất</a></li>
                @else

                <li><a href="dang-nhap.html">Đăng nhập</a></li>
                
                </li>	
                @endif

              </ul>
            </div>
            <!-- /Navigation-->			  
          </div>
      
      </div>
    </div>
  </div>