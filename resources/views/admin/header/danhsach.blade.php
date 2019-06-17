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
                                    <h4 class="mt-0 header-title">Thông tin công ty</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Hình LoGo</th>
                                                <th>Số điện thoại</th>
                                                <th>Email</th>
                                                <th>Đại chỉ</th>
                                                <th>FaceBook</th>
                                                <th>Thao tác</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                                @foreach($header as $tt)
                                                <tr>
                                               <td><?php echo $i?></td>
                                               <td><img src="upload/logo/{{$tt->Hinh}}" alt="" width="150px"></td>
                                               <td>{{$tt->Sdt}}</td>
                                               <td>{{$tt->Email}}</td>
                                               <td  style="white-space: normal;">{{$tt->DiaChi}}</td>
                                               <td>{{$tt->LinkFb}}</td>
                                               <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/header/sua/{{$tt->id}}" style="
                                                color: blue;">Cập nhật</a></td>
                                                <?php $i++; ?>
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
            <script type="text/javascript">
                function confirmAction() {
                     return confirm("Bạn có chắc là muốn xóa không?")
                   }
              </script>
  