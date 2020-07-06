@extends('admin.layout.index')
@section('content')
<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
    <!-- main content -->
    <div class="container-fluid">
        
        <h2>Data tables</h2>
        <p class="lead">
            Customized data table.
        </p>
        <hr>
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">
                    Data table
                </h4>
            </div> --}}
            <div class="py-4">
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Kiểu</th>
                                <th>Tóm Tắt</th>
                                <th>Số Tập</th>
                                <th>Thời Lượng</th>
                                <th>Ngày Công Chiếu</th>
                                <th>Nguồn</th>
                                <th>Ngôn Ngữ</th>
                                <th>Phân Loại</th>
                                <th>Trạng Thái</th>
                                <th>Hãng Sản Xuất</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>System ArchitectSystem</td>
                                <td>Edinburgh</td>
                                <td>System ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystemSystem ArchitectSystem</td>
                                <td>2011/04/25</td>
                                <td>System ArchitectSystem</td>
                                <td>2011/04/25</td>
                                <td>Edinburgh</td>
                                <td>System ArchitectSystem</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a href="#"><i class="material-icons">edit</i></a>
                                    <a href="#"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Kiểu</th>
                                <th>Tóm Tắt</th>
                                <th>Số Tập</th>
                                <th>Thời Lượng</th>
                                <th>Ngày Công Chiếu</th>
                                <th>Nguồn</th>
                                <th>Ngôn Ngữ</th>
                                <th>Phân Loại</th>
                                <th>Trạng Thái</th>
                                <th>Trailer</th>
                                <th>Hãng Sản Xuất</th>
                                <th>Thao Tác</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection