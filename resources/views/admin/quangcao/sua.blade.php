@extends('admin.layout.index')
@section('content')

<div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Cập nhật quảng cáo</h4>
                                @if(count($errors)>0)
                                <div class="alert alert-danger">
                                  @foreach($errors->all() as $err)
                                      {{$err}}<br>
                                  @endforeach
                              @endif
                              @if(session('thongbao'))
                                <div class="alert alert-success">
                                  {{session('thongbao')}}
                              @endif
                                <form class="" action="admin/quangcao/sua/{{$quangcao->id}}" method="POST" enctype="multipart/form-data"  >
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="form-group"><label>Tên</label>
                                        <div><input data-parsley-type="alphanum" type="text" name="Ten" class="form-control"
                                                required placeholder="Nhập đường dẫn quảng cáo" value="{{$quangcao->Ten}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh quảng cáo</label>
                                        <p>
                                        <img src="upload/quangcao/{{$quangcao->Hinh}}" width="150px" alt="">
                                        </p>
                                        <input type="file" name="Hinh1">
                                    </div>
                                    <div class="form-group"><label>Đường dẫn quảng cáo </label>
                                        <div><input data-parsley-type="alphanum" type="text" name="link" class="form-control"
                                                required placeholder="Nhập đường dẫn quảng cáo" value="{{$quangcao->link}}"></div>
                                    </div>
                                    <div class="form-group">
                                            <label>Trạng Thái</label><br/>
                                             <label class="radio-inline">
                                                  <input name="HienThi" value="1"
                                                    @if($quangcao->HienThi==1)
                                                  {{"checked"}}
                                                 @endif
                                                  checked="" type="radio">Hiển thị
                                                 </label><br/>
                                                 <label class="radio-inline">
                                           <input name="HienThi" value="0"
                                                    @if($quangcao->HienThi==0)
                                             {{"checked"}}
                                              @endif
                                               type="radio">Ẩn
                                            </label>
                                                    </div>
                                   
                                        <div class="form-group">
                                                <div><button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Cập nhật</button>
                                                    <button type="reset"
                                                        class="btn btn-secondary waves-effect m-l-5">Hủy</button></div>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- end col -->
                   <!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div><!-- content -->
        
    </div>
@endsection