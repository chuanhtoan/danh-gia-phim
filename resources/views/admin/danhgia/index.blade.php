@extends('admin.layout.index')

@section('above_head')

    {{-- style button thêm --}}
    <style>
        .btn_add {
            float: right;
            padding-right: 1.25rem;
            margin-top: 1px;
            margin-bottom: 7px;
        }
    </style>

@endsection

@section('content')

<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
    
    <!-- main content -->
    <div class="container-fluid">
        
        <h2>Đánh Giá</h2>
        <p class="lead">
            Quản lý thông tin các đánh giá.
        </p>
        <hr>
        <div class="card">
            <div class="py-4">

                {{-- Create Button --}}
                <div class="btn_add">
                    <a href="{{route('danhgia.create')}}" id="btn_add" name="btn_add" class="btn btn-success btn-detail">Add</a>
                </div>

                {{-- table --}}
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Phim</th>
                                <th>Tài Khoản</th>
                                <th>Điểm</th>
                                <th>Ngày</th>
                                <th style="min-width: 110px;">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="products-list" name="products-list">
                            @foreach($products as $item)
                                <tr id="product{{$item->id}}" class="active">
                                    <td>{{$item->id}}</td>
                                    <td>{{App\Model\Phim::find($item->idPhim)->ten}}</td>
                                    <td>{{App\User::find($item->idUser)->username}}</td>
                                    <td>{{$item->diem}}</td>
                                    <td>{{$item->ngay}}</td>
                                    <td>
                                        <div style="display: inline-block">
                                            <a href="{{route('danhgia.edit',$item->id)}}" class="btn btn-warning btn-detail open_modal">Edit</a>
                                            <button class="btn btn-danger delete-product" value="{{$item->id}}">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



{{-- Delete Modal --}}
<div id="deleteModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deleteModalLabel">Thông báo!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <label id="lableXoa"></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn-delete" value="delete">Xoá</button>
                <input type="hidden" id="product_id_delete" name="product_id_delete" value="0">
            </div>
        </div>
    </div>
</div>



@section('above_body')

    {{-- validate --}}
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

    {{-- alertify --}}
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    {{-- Delete Ajax --}}
    <script>
        $(document).ready(function(){

            // Descending ID Table
            $('#data-table').DataTable().order([ 0, "desc" ]).draw();

            //get base URL *********************
            var url = '/admin/danhgia';
            
            // delete product and remove it from TABLE list ***************************
            var product_id;

            $(document).on('click','.delete-product',function(){
                product_id = $(this).val();
                
                // Populate Data in Delete Modal Form
                $.ajax({
                    type: "GET",
                    url: url + '/' + product_id,
                    success: function (data) {
                        $('#lableXoa').html('Xóa đánh giá "' + data.id + '" ?');
                        $('#deleteModal').modal('show');
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });

                // console.log('product_id 1: ', product_id);
            });

            // Delete Data
            $("#btn-delete").click(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })
                $.ajax({
                    type: "DELETE",
                    url: url + '/' + product_id,
                    success: function (data) {
                        $("#product" + product_id).remove();
                        $('#deleteModal').modal('hide');
                        // alertify
                        alertify.success('Xóa thành công');
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });

            // enter key press submit function
            $(document).keypress(function(e) {
                // disable form enter key press
                if (e.which == '13') {
                    e.preventDefault();
                }
                // enter key press on modal open
                if ($("#createEditModal").hasClass('show') && (e.keycode == 13 || e.which == 13)) {
                    var hl = $("#frmProducts").valid();    
                    if(hl){
                        thucHienAjax();
                    }
                }
            });

        });
    </script>

@endsection

