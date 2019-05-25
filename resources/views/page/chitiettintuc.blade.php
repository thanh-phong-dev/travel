@extends('layout.index1')
@section('content')
	<div class="container breadcrub">
            <div>
                <a class="homebtn left" href="#"></a>
                <div class="left">
                    <ul class="bcrumbs">
                        <li>/</li>
                    <li><a href="#" class="active">{{$tintuc->loaitin->Ten}}</a></li>					
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
                        <p class="lato size30 slim">{{$tintuc->TieuDe}}</p>
                        <p class="aboutarrow"></p>
                    </div>
                    <div class="line3"></div>
                    
                    <div class="hpadding50c">
                        
                        <!-- LEFT IMG -->
                        <div class="col-md-8 cpdd01 grey2">
                            <div class="abover">
                                <div class="abbg">
                                    <a href="upload/tintuc/{{$tintuc->Hinh}}" class="blogpost-hover" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                </div>
                                <img src="upload/tintuc/{{$tintuc->Hinh}}" class="fwimg" alt=""/>
                            </div><br/>
                            
                        <span class="lato size22 dark bold">{{$tintuc->TieuDe}}</span><br/>
                        <?php
                            $thoigian=$tintuc->created_at; 
                            $dateM=date("d-m-Y",strtotime($thoigian)); ?> 
                            <span class="grey">{{$dateM}}<a href="#"></a> <a href="#"></a> Đăng bởi {{$tintuc->NguoiDang}} <a href="#"></a>, <span><i class="far fa-eye"></i> {{$tintuc->SoLuotXem}}</span>   </span>
                            <?php $i=count($tintuc->comment)?>
                            <i class="far fa-comments"> {{$i}}</i>
                            <br/>
                            
                            <div class="line4"></div>
                            {!!$tintuc->NoiDung!!}
                            <br/><br/>
                            <span class="glyphicon glyphicon-tag dark"></span><b>Tags: {{$tintuc->Tag}}</b> 
                            <br/><br/>
                            @if(Auth::User() == null)
                            <span class="size14 dark bold">Bình Luận<span> (đăng nhập để bình luận) ----></span></span>
                            
                            <a href="dang-nhap.html"><button class="btn btn-primary">Đăng nhập</button> </a>
                       
                            @else
                            <?php $i=count($tintuc->comment)?>
                            <span class="size14 dark bold">{{$i}} Bình Luận </span>
                            <div class="line4"></div>
                           
                            <form action="comment/{{$tintuc->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <textarea name="NoiDung" class="form-control" rows="3"></textarea><br/>
                            <button onclick="errorMessage()" type="submit" class="btn-search5">Bình luận <span class="glyphicon glyphicon-arrow-down"></span></button>
                            </form>
                            <br/><br/><br/>
                            
                            
                            @foreach($tintuc->comment as $cm)
                        
                            <span class="size14 dark bold">Bình luận</span>
                            <div class="line4"></div>
                            <div class="wh20percent left textleft">
                                <div class="circlewrap2"><img alt="" class="circleimg" src="images/user-avatar.jpg"></div>
                            </div>
                           
                            <div class="wh80percent right">
                              
                            <a href="#" class="lblue bold">{{$cm->user->name}}</a><br/>
                             {{$cm->NoiDung}}
                                <br/><span class="grey size12">{{$cm->created_at}} <a href="#" class="grey"></a></span>
                            </div>
                        
                            @endforeach
                            <div class="clearfix"></div>
                            <div class="line4"></div>						
                            
                            <div class="wh10percent left textleft"></div>
                           
                            <br/>
                            <br/>
                            @endif
                        </div>
                        <!-- END OF LEFT IMG -->
                        
                        <!-- IMG RIGHT TEXT -->
    
    
                        
                        <div class="col-md-4 cpdd02">
                            <div class="opensans grey">
                                <input type="text" placeholder="Tìm kiếm.." class="form-control logpadding" name="s"><br/>
                                <span class="lato size18 dark bold">Địa điểm được yêu thích</span><br/>
                                
                                <ul class="blogcat">
                                    @foreach($loaitin as $lt)
                                <li><a href="#">{{$lt->Ten}}</a> <span class="badge indent0"></span></li>
                                   @endforeach
                                </ul>
                                <br/>
                                
                                
                                <!-- Nav tabs -->
                                <ul class="nav navigation-tabs3">
                                  <li class="active"><a href="#tab-newtopic" data-toggle="tab"><span class="glyphicon glyphicon-star"></span> Featured</a></li>
                                  <li><a href="#tab-comments" data-toggle="tab"><span class="glyphicon glyphicon-stats"></span> Popular</a></li>
    
                                </ul>
                                
                                <div class="tab-content4">
                                    <!-- Tab 1 -->
                                    <div class="tab-pane active" id="tab-newtopic">
                                        <a href="#"><img alt="" class="left mr20" src="images/smallthumb-1.jpg"></a>
                                        <a class="dark" href="#"><b>Hotel Dany</b></a><br>
                                        <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                        <img alt="" src="images/filter-rating-5.png">
                                        <div class="line4"></div>
                                        <a href="#"><img alt="" class="left mr20" src="images/smallthumb-2.jpg"></a>
                                        <a class="dark" href="#"><b>Hotel Amaragua</b></a><br>
                                        <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                        <img alt="" src="images/filter-rating-5.png">
                                        <div class="line4"></div>
                                        <a href="#"><img alt="" class="left mr20" src="images/smallthumb-3.jpg"></a>
                                        <a class="dark" href="#"><b>Hotel Lotus</b></a><br>
                                        <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                        <img alt="" src="images/filter-rating-5.png">
                                    </div>
                                    <!-- End of Tab 1 -->
                                    
                                    <!-- Tab 2 -->
                                    <div class="tab-pane" id="tab-comments">
                                        <a href="#"><img alt="" class="left mr20" src="images/smallthumb-2.jpg"></a>
                                        <a class="dark" href="#"><b>Hotel Lotus</b></a><br>
                                        <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                        <img alt="" src="images/filter-rating-5.png">
                                        <div class="line4"></div>
                                        <a href="#"><img alt="" class="left mr20" src="images/smallthumb-3.jpg"></a>
                                        <a class="dark" href="#"><b>Hotel Dany</b></a><br>
                                        <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                        <img alt="" src="images/filter-rating-5.png">
                                        <div class="line4"></div>
                                        <a href="#"><img alt="" class="left mr20" src="images/smallthumb-1.jpg"></a>
                                        <a class="dark" href="#"><b>Hotel Amaragua</b></a><br>
                                        <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                        <img alt="" src="images/filter-rating-5.png">
                                    </div>
                                    <!-- End of Tab 2 -->
                                    
                                    <!-- Tab 3 -->
                                    <div class="tab-pane" id="tab-blogcomments">
    
                                    </div>
                                    <!-- End of Tab 3 -->
                                </div>
    
                                
                                
                                <span class="lato size18 dark bold">Archives</span><br/>
                                <ul class="blogcat">
                                    <li><a href="#">December 2013</a></li>
                                    <li><a href="#">November 2013</a></li>
                                    <li><a href="#">October 2013</a></li>
                                    <li><a href="#">September 2013</a></li>
                                    <li><a href="#">August 2013</a></li>
                                    <li><a href="#">July 2013</a></li>
                                    <li><a href="#">June 2013</a></li>
                                    <li><a href="#">May 2013</a></li>
                                    <li><a href="#">April 2013</a></li>
                                </ul>
                                
                                <br/><br/>
                                
                                
    
    
                            </div>
                        </div>
                        <!-- END OF IMG RIGHT TEXT -->
                        <div class="clearfix"></div>
                        <br/><br/>
                        
                    
    
                        
                        
                    </div>
                    
    
                    
                <div class="clearfix"></div><br/><br/>
                </div>
                <!-- END CONTENT -->			
            </div>
        </div>
        @endsection