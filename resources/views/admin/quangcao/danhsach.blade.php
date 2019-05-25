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
                                    <h4 class="mt-0 header-title">Danh sách quảng cáo</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Hình quảng cáo</th>
                                                <th>Link</th>
                                                <th>Trạng thái</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($quangcao as $tt)
                                            <tr>
                                                <td>{{$tt->Ten}}</td>
                                               <td><img src="upload/quangcao/{{$tt->Hinh}}" width="185px" height="150px" alt=""></td>
                                                <td>{{$tt->link}}</td>
                                                <td>@if($tt->HienThi==0)
                                                        {{"Ẩn"}}
                                                        @else
                                                        {{"Hiển thị"}}
                                                        @endif
                                                        </td> 
                                                        <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/quangcao/sua/{{$tt->id}}" style="
                                                            color: blue;">Cập nhật</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- end row --> 
                </div><!-- container-fluid -->
            </div><!-- content -->
        </div>
            @endsection
            <script type="text/javascript">
                function confirmAction() {
                     return confirm("Bạn có chắc là muốn xóa không?")
                   }
              </script>
  