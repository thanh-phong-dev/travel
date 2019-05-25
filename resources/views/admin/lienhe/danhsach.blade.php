@extends('admin.layout.index')
@section('content')
    <!-- Begin page -->
 
        <!-- Top Bar Start -->
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                      
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Loại Tin</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Lời nhắn</th>
                                                <th>Ngày gửi</th>
                                                <th>Chỉnh sửa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lienhe as $sl)
                                            <tr class="odd gradeX" align="center">
                                                <td>{{$sl->id}}</td>
                                                <td>{{$sl->Ten}}</td>
                                                <td>{{$sl->Email}}</td>
                                                <td>{{$sl->SoDienThoai}}</td>
                                                <td>{{$sl->LoiNhan}}</td>
                                                <td>{{$sl->created_at}}</td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lienhe/xoa/{{$sl->id}}"> Delete</a></td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                  
                </div><!-- container-fluid -->
            </div><!-- content -->
        </div>
    
            @endsection