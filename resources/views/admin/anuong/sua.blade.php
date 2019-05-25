@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Địa điểm ăn uống
                    <small>{{$anuong->Ten}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                  @foreach($errors ->all as $err)
                    {{$err}}<br>
                  @endforeach
                @endif
                @if(session('thongbao'))
                  <div class="alert aler-sucess">
                    {{session('thongbao')}}
                @endif
                <form action="admin/anuong/sua/{{$anuong->id}}" method="POST">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="Ten" value="{{$anuong->TieuDe}}" />
                    </div>

                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea id="TomTat" class="form-control" rows="3" name="TomTat">
                        {{$anuong->TomTat}}</textarea>
                    </div>
                    <script>CKEDITOR.replace('TomTat' );</script>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="NoiDung" class="form-control" rows="3" name="NoiDung">
                        {{$anuong->NoiDung}}</textarea>
                    </div>
                    <script>CKEDITOR.replace('NoiDung' );</script>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <p>
                        <img src="upload/hinhanuong/{{$anuong->Hinh}}" width="90px" alt="">
                        </p>
                        <input type="file" name="Hinh">
                    </div>
                    <button type="submit" class="btn btn-default">OK</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
