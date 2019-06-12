@extends('layout.index1')
@section('content')
<body id="top" class="thebg" style="">
    
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#" data-original-title="" title=""></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#" class="active" data-original-title="" title="">About us</a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="#" data-original-title="" title=""></a>
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
					<p class="lato size30 slim">Công ty du lịch Thanh Phong</p>
					<p class="aboutarrow"></p>
				</div>
				<div class="line3"></div>
				
				<div class="hpadding50c">	
					<p class="lato size22 slim textcenter">
                        Đại lý du lịch trực tuyến của bạn. Là một trong những công ty du lịch trực tuyến hàng đầu thế giới, chúng tôi dễ dàng lên kế hoạch cho chuyến đi công tác hoặc giải trí tiếp theo của bạn
					</p>
					<br>
					<div class="line3"></div>
					<br>

					<!-- LEFT IMG -->
					<?php $i=1;?>
					@foreach($gioithieu as $gt)
					@if($i==1)
					<div class="col-md-8 cpdd01">
						<img src="upload/gioithieu/{{$gt->Hinh}}" class="fwimg" alt="" height="750">
					</div>
					<?php $i++;?>
					@endif
					@endforeach
					<!-- END OF LEFT IMG -->
					
					<!-- IMG RIGHT TEXT -->
					<div class="col-md-4 cpdd02">
						<div class="opensans size18 grey">
							<span class="lato dark bold">Giới thiệu</span><br>
						
							Công ty du lịch Thanh Phong được thành lập từ năm 2015, đến nay Tugo đã có hơn 4 năm kinh nghiệm tổ chức tour du lịch hướng đến các thị trường cao cấp như: Hàn Quốc, Nhật Bản, Đài Loan, Úc, Pháp, Mỹ, Châu Âu. Trong 4 năm qua Tugo đã có những phát triển vượt bật như: mở 4 chi nhánh tại Tp Hồ Chí Minh, 1 chi nhánh tại Hà Nội.
							<span class="lato dark bold">Đánh giá</span><br>
							<div class="progress-about margbtm10">
							  <div class="progress-bar progress-bar-success pbar1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
								Thân thiện 90%
							  </div>
							</div>	
							<div class="progress-about margbtm10">
							  <div class="progress-bar progress-bar-success pbar2" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
								Chất lượng 100%
							  </div>
							</div>	
							
							<div class="progress-about">
							  <div class="progress-bar progress-bar-success pbar4" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
								Thái độ phục vụ 95%
							  </div>
							</div>	

						</div>
					</div>
					<!-- END OF IMG RIGHT TEXT -->
					<div class="clearfix"></div>
					<br><br>
					
				
					<span class="lato size18 dark bold">Team</span><br><br>
					<?php $i=1;?>
					@foreach($gioithieu as $gt)
					@if($gt->id >=5)
					<div class="col-md-4">
						<div class="abover ohidden">
							<div class="abbg" style="width: 316px; height: 228px; left: -316px;">
								<div class="socials-container" style="left: 130px; top: 105px;">
									<a href="#" data-placement="top" title="" class="left" data-original-title="Twitter"><span class="socials-twitter "></span></a>
									<a href="#" data-placement="top" title="" class="left" data-original-title="Facebook"><span class="socials-facebook "></span></a>
									<a href="#" data-placement="top" title="" class="left" data-original-title="Google Plus"><span class="socials-gplus "></span></a>
								</div>
							</div>
						<img src="upload/gioithieu/{{$gt->Hinh}}" class="fwimg" alt="" height="300">
							<div class="chart none easyPieChart" data-percent="69" style="float: right; margin-top: -60px; right: 10px; width: 50px; height: 50px; line-height: 50px;"><span class="countbouncerate">69</span>%<canvas width="50" height="50"></canvas></div>
						</div>
					<p class="lato lh2 mt10"><b>{{$gt->Ten}}</b><br>
						Marketing
						</p>
					</div>
					<?php $i++;?>
					@endif
					@endforeach
					<div class="clearfix"></div>
					<br>
					<br>
					<div class="line3"></div>
					<br>
					<br>
					<div class="col-md-4">
						<div class="opensans grey2">
							<span class="gcircle">1</span><span class="lato size18 dark mt6 ml10"><b>Short history</b></span><br><br>
							Suspendisse convallis, est mollis venenatis tristique, nisl lectus eleifend est, id ultrices diam dui at dolor. Praesent risus quam, sodales cursus cursus in, congue non enim. Vestibulum tristique mollis neque vitae tempus. 
							<ul class="checklist2">
								<li>Pellentesque non dolor urna</li>
								<li>Tempor nisl et enim sagittis egestas</li>
								<li>Aenean a purus vel nisi aliquet ultricies</li>
								<li>Ut nunc vivamus at erat ligula suspen</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">

						<p class="opensans grey2">
						<span class="gcircle">2</span><span class="lato size18 dark mt6 ml10"><b>Our main goal</b></span><br><br>
						Pellentesque non dolor urna. Praesent tempor nisl et enim sagittis egestas. Aenean a purus vel nisi aliquet ultricies vel ut nunc. Vivamus at erat ligula. Suspendisse bibendum tellus vitae ipsum malesuada euismod vel nec risus. Aliquam egestas sodales ornare. Pellentesque a lorem eget turpis venenatis tincidunt quis id magna. 
						<br>
						<br>
						Nulla faucibus nisl a arcu convallis bibendum at sed nulla. Proin tellus est, scelerisque ut luctus ut, tincidunt ac neque. 
						Phasellus lectus enim, convallis quis faucibus eget, mattis eget erat. Aliquam id metus ligula, vel laoreet lorem. Pellentesque varius dignissim orci eu accumsan. 
						</p>						
					</div>
					<div class="col-md-4">
	
						<p class="opensans grey2">
						<span class="gcircle">3</span><span class="lato size18 dark mt6 ml10"><b>Want to join us?</b></span><br><br>
						Pellentesque non dolor urna. Praesent tempor nisl et enim sagittis egestas. Aenean a purus vel nisi aliquet ultricies vel ut nunc. 
						<br>
						<br>
						Vivamus at erat ligula. Suspendisse bibendum tellus vitae ipsum malesuada euismod vel nec risus. Aliquam egestas sodales ornare. 
						Pellentesque a lorem eget turpis venenatis 
						tincidunt quis id magna. 
						<br>
						<button class="btn-search4 caps center margtop20">Apply now</button>
						</p>						
					</div>		
					<div class="clearfix"></div>	
				</div>
			<div class="clearfix"></div><br><br>
			</div>
			<!-- END CONTENT -->			
		</div>
     
	</div>
	<!-- END OF CONTENT -->
	<!-- FOOTER -->
	<!-- Javascript  -->
	<script src="assets/js/js-about.js"></script>
	
	<!-- Easy Pie Chart  -->
	<script src="assets/js/jquery.easy-pie-chart.js"></script>
	
    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- Custom Select -->
	<script type="text/javascript" src="assets/js/jquery.customSelect.js"></script>
	
	<!-- Load Animo -->
	<script src="plugins/animo/animo.js"></script>

    <!-- Picker -->	
	<script src="assets/js/jquery-ui.js"></script>	

    <!-- Picker -->	
    <script src="assets/js/jquery.easing.js"></script>	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  

<!-- Mirrored from titanicthemes.com/travel/blue/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 15:41:08 GMT -->

<div id="ascrail2000" style="width: 5px; z-index: 9000; position: fixed; top: 0px; height: 100%; right: 0px;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 48px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2000-hr" style="height: 6px; z-index: 9000; position: fixed; left: 0px; width: 100%; bottom: 0px; display: none;"><div style="position: relative; top: 0px; height: 5px; width: 1366px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></body>
@endsection