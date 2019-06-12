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
                                <h4 class="mt-0 header-title">Cập nhật</h4>
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
                                <form class="" action="admin/gioithieu/sua/{{$gioithieu->id}}" method="POST" enctype="multipart/form-data"  >
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="form-group"><label>Tên</label>
                                        <div><input data-parsley-type="alphanum" type="text" name="Ten" class="form-control"
                                                required placeholder="" value="{{$gioithieu->Ten}}"></div>
                                    </div>
                                    <div class="form-group"><label>Chức vụ</label>
                                        <div><input data-parsley-type="alphanum" type="text" name="chucvu" class="form-control"
                                                required placeholder="" value="{{$gioithieu->ChucVu}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <p>
                                        <img src="upload/gioithieu/{{$gioithieu->Hinh}}" width="150px" alt="">
                                        </p>
                                        <input type="file" name="Hinh">
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