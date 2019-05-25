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
                                    <h4 class="mt-0 header-title">Danh Sách Slide</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tiêu Đề</th>
                                                <th>Hình</th>
                                                
                                                <th>Thao tác</th>
                                              
                                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $i=1; ?>
                                                @foreach($slide as $tt)
                                                 <tr>
                                                <td> <?php echo $i; ?></td>
                                                <td>{{$tt->Ten}}</td>
                                                <td><img src="upload/slide/{{$tt->Hinh}}" width="100px" height="70px" alt=""></td>
                                              
                                                <td class="center"><i class="mdi mdi-table-edit"></i> <a href="admin/slide/sua/{{$tt->id}}" style="
                                                    color: blue;">Cập nhật </a>| <a href="admin/slide/xoa/{{$tt->id}}" style="
                                                color: red;
                                                " onclick="return confirmAction()">Xóa</a></td>
                                              
                                            
                                                
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
  