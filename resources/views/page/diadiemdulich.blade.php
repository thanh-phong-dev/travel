@extends('layout.index1')
@section('content')
  <body id="top" class="thebg" >
    <div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#">Địa điểm</a></li>
					<li>/</li>
					<li><a href="#">{{$loaitin->Ten}}</a></li>
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
						<div class="clearfix"></div><br/>
						<!-- HOTELS TAB -->
						<div class="hotelstab2 none">
							<span class="opensans size13" style="
							font-size: 19px;
						">Bạn muốn đi du lịch ở đâu?</span>
							<form action="tim-kiem-khach-san.html" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							<input type="text" class="form-control" placeholder="Nhập nơi bạn muốn đi">
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
				
				<div class="padding20title"><h3 class="opensans dark">Filter by</h3></div>
				<div class="line2"></div>
				
				<!-- Star ratings -->	
				<button type="button" class="collapsebtn" data-toggle="collapse" data-target="#collapse1">
				  Star rating <span class="collapsearrow"></span>
				</button>

				<div id="collapse1" class="collapse in">
					<div class="hpadding20">
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-5.png" class="imgpos1" alt=""/> 5 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-4.png" class="imgpos1" alt=""/> 4 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-3.png" class="imgpos1" alt=""/> 3 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-2.png" class="imgpos1" alt=""/> 2 Stars
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"><img src="images/filter-rating-1.png" class="imgpos1" alt=""/> 1 Star
							</label>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- End of Star ratings -->	
				
				<div class="line2"></div>
				
				<!-- Price range -->					
			
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
								
								<div class="left mt7"><b>Sort by:</b></div>
								
								<div class="right wh70percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Guest rating</option>
									  <option>5 stars</option>
									  <option>4 stars</option>
									  <option>3 stars</option>
									  <option>2 stars</option>
									  <option>1 stars</option>
									</select>
								</div>

						</div>			
						<div class="col-md-4">
							<div class="w50percent">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Name</option>
									  <option>A to Z</option>
									  <option>Z to A</option>
									</select>
								</div>
							</div>
							<div class="w50percentlast">
								<div class="wh90percent">
									<select class="form-control mySelectBoxClass ">
									  <option selected>Price</option>
									  <option>Ascending</option>
									  <option>Descending</option>
									</select>
								</div>
							</div>					
						</div>
						<div class="col-md-4 offset-0">
							<button class="popularbtn left">Most Popular</button>
							<div class="right">
								<button class="gridbtn" onClick="window.open('list2.html','_self');">&nbsp;</button>
								<button class="listbtn active">&nbsp;</button>
								<button class="grid2btn" onClick="window.open('list3.html','_self');">&nbsp;</button>
							</div>
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
                    <div class="offset-2"><hr class="featurette-divider3"></div>
                    
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
																	@endif<br/><br/><br/>
																		<img src="images/user-rating-5.png" width="60" alt=""/><br/>
																		<?php 
																		$data=$ks->comment;
																		$data1=count($data);
																		?>
                                    <span class="size11 grey">{{$data1}} Bình luận</span><br/><br/>
                                    <?php 
                                    $num = $ks->Gia;  
                                    $formattedNum = number_format($num);?>
                                    
                                  <span class="green size18"><b></b> {{$formattedNum}} VNĐ</span><br/>
                                   
                                    <span class="size11 grey">avg/night</span><br/><br/><br/>
                                    <form action="http://titanicthemes.com/travel/blue/details.html">
                                     <button class="bookbtn mt1" type="submit">Book</button>	
                                    </form>			
                                </div>
                                <div class="labelleft2">			
                                <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><b>{{$ks->Ten}}</b></a>
                                <br/><br/><br/>
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
                    <div class="offset-2"><hr class="featurette-divider3"></div>
                    
    
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
	<script>
			let today = new Date().toISOString().substr(0, 10);
			document.querySelector("#datepicker").value = today;
		  </script>
@endsection