@extends('layout.index2')
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
                            <br>
                            <a href="http://travel.maycaphegiasi.com/{{$tintuc->id}}/{{$tintuc->TieuDeKhongDau}}.html" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <br>
                             <div class="fb-share-button" data-href="http://travel.maycaphegiasi.com/{{$tintuc->id}}/{{$tintuc->TieuDeKhongDau}}.html" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FDu-L%25E1%25BB%258Bch-Vi%25E1%25BB%2587t-2520965421276655%2F%3Fmodal%3Dadmin_todo_tour&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            <br>
                            <div class="fb-like" data-href="https://www.facebook.com/Du-L%E1%BB%8Bch-Vi%E1%BB%87t-2520965421276655/?modal=admin_todo_tour" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                            <div class="line4"></div>
                            {!!$tintuc->NoiDung!!}
                            <br/><br/>
                            <span class="glyphicon glyphicon-tag dark"></span><b>Tags: {{$tintuc->Tag}}</b> 
                            <br/><br/>
                            {{-- test --}}
                            <div class="container">
                                <h2>Toggleable Tabs</h2>
                                <br>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home">Bình luận</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu1">Bình luận trên FaceBook</a>
                                  </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div id="home" class="container tab-pane active"><br>
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
                            <?php $data=$tintuc->comment->sortbyDesc('id')
                            ?>
                            @foreach($data as $cm)
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
                                  <div id="menu1" class="container tab-pane fade"><br>
                                    <h3>Bình luận</h3>
                                    <div class="fb-comments" data-href="https://www.facebook.com/ITthanhphong/{{$tintuc->id}}" data-numposts="5"></div>
                                  </div>
                                </div>
                              </div>
                              {{-- end --}}
                           
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
                                  <li class="active"><a href="#tab-newtopic" data-toggle="tab"><span class="glyphicon glyphicon-star"></span> Khách sạn nổi bật</a></li>
    
                                </ul>
                                
                                <div class="tab-content4">
                                    <!-- Tab 1 -->
                                    <div class="tab-pane active" id="tab-newtopic">
                                        @foreach($khachsan as $ks)
                                        <a href="khach-san/{{$ks->id}}/{{$ks->TenKhongDau}}.html"><img alt="{{$ks->Ten}}" class="left mr20" src="upload/khachsan/{{$ks->Hinh}}" style="
                                            height: 78px;
                                            width: 117px;
                                        "></a>
                                        <a class="dark" href="#"><b>{{$ks->Ten}}</b></a><br>
                                        <?php 
                                        $num = $ks->Gia;  
                                        $formattedNum = number_format($num);?>
                                        <span class="opensans green bold size14">{{$formattedNum}} </span> <span class="grey">vnđ/đêm</span><br>
                                        
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
                <div class="clearfix"></div><br/><br/>
                </div>
                <!-- END CONTENT -->			
            </div>
        </div>
        @endsection