@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Địa điểm ăn uống
                    <small>Danh sách</small>
                    @if(session('thongbao'))
                      <div class="alert aler-sucess">
                        {{session('thongbao')}}
                    @endif
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên Thể Loại</th>
                        <th>Tóm Tắt</th>
                        <th>Hình</th>
                        <th>Hiển Thị</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($anuong as $tl)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tl->id}}</td>
                        <td>{{$tl->TieuDe}}</td>
                        <td>{{$tl->TomTat}}</td>
                        <td>{{$tl->Hinh}}</td>     
                        <td>   @if($tl->Hide==0)
                        {{"Ẩn"}} @else
                        {{"Hiện"}}
                        @endif</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/anuong/xoa/{{$tl->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/anuong/sua/{{$tl->id}}">Edit</a></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
