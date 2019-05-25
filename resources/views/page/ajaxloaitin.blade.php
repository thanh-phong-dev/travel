@foreach($tintuc as $tt)
<div class="abover">
    <div class="abbg">
        <a href="upload/tintuc/{{$tt->Hinh}}" class="blogpost-hover" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><span class="glyphicon glyphicon-zoom-in"></span></a>
    </div>
    <img src="upload/tintuc/{{$tt->Hinh}}" class="fwimg" alt=""/>
</div><br/>

<a href="chi-tiet-tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html"><span class="lato size22 dark bold">{{$tt->TieuDe}}</span></a><br/>
<?php
$thoigian=$tt->created_at; 
$dateM=date("d-m-Y",strtotime($thoigian)); ?>    
<span class="grey">{{$dateM}}<a href="#"></a> <a href="#"></a>/Đăng bởi <a href="#">{{$tt->NguoiDang}}</a></span><br/>
<div class="line4 
des" data-maxlength="250">
<p> {!!$tt->TomTat!!}</p> 
</div>

<br/><br/>
<a href="chi-tiet-tin-tuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
    <br/>
    <button onclick="errorMessage()" type="submit" class="btn-search5">Xem thêm<span class="glyphicon glyphicon-arrow-right"></span></button>
</a>
<br/><br/>
@endforeach 

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
<ul>
    {!!$tintuc->links()!!}
</ul>