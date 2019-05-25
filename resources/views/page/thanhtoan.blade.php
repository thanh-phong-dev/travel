@extends('layout.index1')
@section('content')

<body id="top" class="thebg" style="">
    
	<div class="navbar-wrapper2 navbar-fixed-top" style="min-height: 110px;">
      <div class="container">
		<div class="navbar mtnav" style="top: 30px;">
			<div class="container offset-3">
			  <!-- Navigation-->
			  <div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="index-2.html" class="navbar-brand"><img src="images/logo.png" alt="Travel Agency Logo" class="logo" style="display: inline-block; width: 120px;"></a>
			  </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				  <li class="dropdown active">
					<a data-toggle="dropdown" class="dropdown-toggle" href="index-2.html">Home <span class="badge indent0">1</span><b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu posright-0">
					  <li>
							<div class="row dropwidth01">
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Homepages</li>	
								  <li><a href="index-2.html">Home 1 minimal</a></li>
								  <li><a href="index2.html">Home 2 offers</a></li>
								  <li><a href="index3.html">Home 3 full search</a></li>
								  <li><a href="index4.html">Home 4 presentation</a></li>
								  <li><a href="index5.html">Home 5 footer2</a></li>
								  <li><a href="index6.html">Home 6 full</a></li>
								  <li><a href="index7.html">Home 7 </a></li>
								  <li><a href="z-new-homepage.html">New Homepage</a> <span class="green">new</span></li>									  
								</ul>
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Intro pages</li>
								  <li><a href="intro.html">Intro 1</a></li>
								  <li><a href="intro2.html">Intro 2 - slides</a> <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="intro3.html">Intro 3 - slides2</a> <span class="glyphicon glyphicon-star lblue"></span></li>
								</ul>
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Colors</li>
								  <li><a href="#">Blue</a></li>
								  <li><a href="http://titanicthemes.com/travel/green/index.html">Green</a></li>
								  <li><a href="http://titanicthemes.com/travel/orange/index.html">Orange</a></li>
								  <li><a href="http://titanicthemes.com/travel/cyan/index.html">Cyan</a></li>
								  <li></li>
								  <li class="inactive size10 lgrey caps"><span class="glyphicon glyphicon-star "></span> Popular pages</li>								  
								</ul>
							</div>
					  </li>
					</ul>
				  </li>
				  <li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages <span class="badge indent0">14</span><b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu posright-0">
					  <li>
							<div class="row dropwidth01">
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Inner pages</li>	
								  <li><a href="list.html">List page 1</a></li>
								  <li><a href="list2.html">List page 2</a></li>
								  <li><a href="list3.html">List page 3</a></li>
								  <li><a href="list4.html">List page 4</a></li>
								  <li><a href="details.html">Details page</a></li>
								  <li><a href="payment.html">Payment</a></li>
								  <li><a href="blog.html">Blog page</a></li>
								  <li><a href="blog-details.html">Blog details</a></li>	
								  <li><a href="about.html">About</a></li>								  
								  <li><a href="contact.html">Contact</a></li>
								  <li><a href="profile.html">User Profile</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="login.html">Login</a></li>
								  <li><a href="dashboard/index.html">Dashboard</a>  <span class="glyphicon glyphicon-star lblue"></span></li>								  

						  
								</ul>	
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Update - <span class="green">14 New Pages</span></li>	
								  <li><a href="z-new-homepage.html">New Homepage</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="z-flights-list.html">Flights list</a>  <span class="glyphicon glyphicon-star lblue"></span></li>
								  <li><a href="z-flights-payment.html">Flights payment</a></li>
								  <li><a href="z-cruise-list.html">Cruise list</a></li>
								  <li><a href="z-cruise-payment.html">Cruise payment</a></li>
								  <li><a href="z-rentacar-list.html">Rent a car list</a></li>
								  <li><a href="z-rentacar-details.html">Rent a car details</a></li>
								  <li><a href="z-rentacar-payment.html">Rent a car payment</a></li>
								  <li><a href="z-transfers-list.html">Transfers list</a></li>
								  <li><a href="z-transfers-payment.html">Transfers payment</a></li>
								  <li><a href="z-activities-list.html">Activities list</a></li>
								  <li><a href="z-activities-details.html">Activities details</a></li>
								  <li><a href="z-activities-payment.html">Activities payment</a></li>
								  <li><a href="z-wearesearching.html">Loading page</a></li>
								</ul>								
								<ul class="droplist col-md-4">
								  <li class="dropdown-header">Bootstrap Shortcodes</li>	
								  <li><a href="http://getbootstrap.com/components/" target="_blank">Components</a></li>								  
								  <li><a href="http://getbootstrap.com/javascript/" target="_blank">Javascript</a></li>								  
								  <li><a href="http://getbootstrap.com/css/" target="_blank">Css</a></li>	
								  <li class="dropdown-header">Comming next</li>	
								  <li class="inactive"><a href="#">More Home pages</a></li>
								  <li class="inactive"><a href="#">Elements</a></li>
								  <li class="inactive"><a href="#">...</a></li>
								  <li></li>								  
								  <li class="inactive size10 lgrey caps"><span class="glyphicon glyphicon-star "></span> Popular pages</li>
								</ul>									
							</div>
					  </li>
					</ul>
				  </li>
				  <li><a href="#">Hotels</a></li>
				  <li><a href="#">Flights</a></li>
				  <li><a href="#">Vacations</a></li>
				  <li><a href="#">Cars</a></li>			  
				  <li><a href="#">Cruises</a></li>			  
				  <li><a href="#">Last minute</a></li>			  
				  <li><a href="#">Early booking</a></li>			  
				  <li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">Deals<b class="lightcaret mt-2"></b></a>
					<ul class="dropdown-menu">
					  <li class="dropdown-header">Aligned Right Dropdown</li>	
					  <li><a href="#">Sample Link 1</a></li>
					  <li><a href="#">Sample Link 2</a></li>
					</ul>
				  </li>		
				</ul>
			  </div>
			  <!-- /Navigation-->			  
			</div>
		
        </div>
      </div>
    </div>
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#">Hotels</a></li>
					<li>/</li>
					<li><a href="#">U.S.A.</a></li>
					<li>/</li>					
					<li><a href="#" class="active">New York</a></li>					
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
					<span class="size16px bold dark left">Who's traveling? </span>
					<div class="roundstep active right">1</div>
					<div class="clearfix"></div>
					<div class="line4"></div>
					Vui lòng cho chúng tôi biết thông tin cá nhân của bạn và bạn phải đủ từ 18 tuổi trở lên <br><br>
					
					<div class="col-md-4 textright">
						<div class="margtop15"><span class="dark"></span>Họ và tên: <span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">Họ và tên</span>
						<input type="text" class="form-control " placeholder="">
					</div>
					<div class="col-md-4 textleft margtop15">
					</div>
					<div class="clearfix"></div>
					
					<br>
					<div class="col-md-4 textright">
						<div class="margtop7"><span class="dark">Số điện thoại</span><span class="red">*</span></div>
					</div>
					{{-- <div class="col-md-4">
						<span class="size12">Country code*</span>						
						<select class="form-control mySelectBoxClass hasCustomSelect" style="-webkit-appearance: menulist-button; width: 203px; position: absolute; opacity: 0; height: 34px; font-size: 14px;">
						  <option selected="">xxx-xxx-xxx-772</option>
						  <option>xxx-xxx-xxx-039</option>
						</select><span class="customSelect form-control mySelectBoxClass" style="display: inline-block;"><span class="customSelectInner" style="width: 187px; display: inline-block;">xxx-xxx-xxx-772</span></span>
					</div> --}}
					<div class="col-md-4 ">
						<span class="size12">Số điện thoại liên lạc</span>	
						<input type="text" class="form-control" placeholder="">
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
					<span class="size16px bold dark left">Where should we send your confirmation?</span>
					<div class="roundstep right">3</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
					Please enter the email address where you would like to receive your confirmation.<br> 
					
					
					<div class="col-md-4 textright">
						<div class="mt15"><span class="dark">Email Address:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control margtop10" placeholder="">
					</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>
					
					<br>
					<br>
					<span class="size16px bold dark left">Review and book your trip</span>
					<div class="roundstep right">4</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
					
					<div class="alert alert-info">
					Important information about your booking:<br>
					<p class="size12">• This reservation is non-refundable and cannot be changed or canceled.</p>
					</div>		
					By selecting to complete this booking I acknowledge that I have read and accept the <a href="#" class="clblue">rules &amp; 
					restrictions</a> <a href="#" class="clblue">terms &amp; conditions</a> , and <a href="#" class="clblue">privacy policy</a>.	<br>		
					
					<button type="submit" class="bluebtn margtop20">Đặt Phòng</button>	
					
			
				</div>
		
			</div>
			<!-- END OF LEFT CONTENT -->			
			
			<!-- RIGHT CONTENT -->
			<div class="col-md-4">
				
				<div class="pagecontainer2 paymentbox grey">
					<div class="padding30">
						<img src="images/thumb.png" class="left margright20" alt="">
						<span class="opensans size18 dark bold">Mabely Grand Hotel</span>
						<span class="opensans size13 grey">Zakynthos, Greece</span><br>
						<img src="images/bigrating-5.png" alt="">
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
								<td colspan="2"><span class="dark">Loại phòng</span>: Standard Double Room</td>
							</tr>
							<tr>
								<td colspan="2"><span class="dark">5 Nights</span>: Sep/10/2013 - Sep/14/2013</td>
							</tr>
							<tr>
								<td>
									<span class="dark">Room 1</span>: 2 Adults<br>
									5 Nights
									<!-- Collapse 1 -->	
									<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse1"></button>
									<div id="collapse1" class="collapse">
										<div class="left size12 lblue">
											Thu Nov 14<br>
											Fri Nov 15
										</div>
										<div class="right size12 lblue">
											$15.92<br>
											$20.00
										</div><div class="clearfix"></div>	
									</div>
									<!-- End of collapse 1 -->
									<div class="clearfix"></div>	
									
									
									Taxes &amp; Fees per night
									
									<!-- Collapse 1 -->	
									<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse2"></button>
									<div id="collapse2" class="collapse">
										<div class="left size12 lred">
											Thu Nov 14<br>
											Fri Nov 15
										</div>
										<div class="right size12 lred">
											$1.51<br>
											$1.00
										</div><div class="clearfix"></div>	
									</div>
									<!-- End of collapse 1 -->
									<div class="clearfix"></div>	
									
								</td>
								<td class="center">
									avg./night<br>
									$35.92<br>
									$2.51<br>
								</td>
							</tr>
						</tbody></table>
					</div>	
					<div class="line3"></div>
					<div class="padding30">					
						<span class="left size14 dark">Trip Total:</span>
						<span class="right lred2 bold size18">$192.15</span>
						<div class="clearfix"></div>
					</div>


				</div><br>
				
				<div class="pagecontainer2 needassistancebox">
					<div class="cpadding1">
						<span class="icon-help"></span>
						<h3 class="opensans">Need Assistance?</h3>
						<p class="size14 grey">Our team is 24/7 at your service to help you with your booking issues or answer any related questions</p>
						<p class="opensans size30 lblue xslim">1-866-599-6674</p>
					</div>
				</div><br>
				
				<div class="pagecontainer2 loginbox">
					<div class="cpadding1">
						<span class="icon-lockk"></span>
						<h3 class="opensans">Log in</h3>
						<input type="text" class="form-control logpadding" placeholder="Username">
						<br>
						<input type="text" class="form-control logpadding" placeholder="Password">
						<div class="margtop20">
							<div class="left">
								<div class="checkbox padding0">
									<label>
									  <input type="checkbox">Remember
									</label>
								</div>
								<a href="#" class="greylink">Lost password?</a><br>
							</div>
							<div class="right">
								<button class="btn-search5" type="submit" onclick="errorMessage()">Login</button>	
							</div>
						</div>
						<div class="clearfix"></div><br>
					</div>
				</div><br>
			
			</div>
			<!-- END OF RIGHT CONTENT -->
			
			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
	

	
	
	<!-- FOOTER -->
	
	
	
	
	<!-- Javascript  -->
	<script src="assets/js/js-payment.js"></script>
	
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
  

<!-- Mirrored from titanicthemes.com/travel/blue/payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 15:40:36 GMT -->

<div id="ascrail2000" style="width: 5px; z-index: 9000; position: fixed; top: 0px; height: 100%; right: 0px;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 68px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2000-hr" style="height: 6px; z-index: 9000; position: fixed; left: 0px; width: 100%; bottom: 0px; display: none;"><div style="position: relative; top: 0px; height: 5px; width: 1366px; background-color: rgb(204, 204, 204); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></body>
@endsection