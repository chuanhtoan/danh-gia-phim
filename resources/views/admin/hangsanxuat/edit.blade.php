@extends('admin.layout.index')
@section('content')
<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
    <!-- main content -->
    <div class="container-fluid">
        
        <h2>Hãng Sản Xuất</h2>
        <p class="lead">
            Quản lý thông tin các hãng sản xuất.
        </p>
        <hr>
        <div class="card">
            <div class="py-4">
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Hãng Sản Xuất</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text"></td>
                                <td>{{$item->ten}}</td>
                                <td>
                                    <a href="#"><i class="material-icons">edit</i></a>
                                    <a href="#"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection