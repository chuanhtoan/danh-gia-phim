@extends('admin.layout.index')

@section('above_head')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
        
        <h2>Nhân Vật</h2>
        <p class="lead">
            Quản lý thông tin các Nhân Vật.
        </p>
        <hr>
        <div class="card">
            <div class="py-4">

                {{-- Create Button --}}
                <div class="btn_add">
                    <button id="btn_add" name="btn_add" class="btn btn-success btn-detail">Add</button>
                </div>

                {{-- table --}}
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="min-width: 100px">Tên</th>
                                <th>Loại</th>
                                <th>Hình</th>
                                <th>Phim</th>
                                <th style="min-width: 110px;">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="products-list" name="products-list">
                            @foreach($products as $item)
                                <tr id="product{{$item->id}}" class="active">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->ten}}</td>
                                    <td>{{$item->loai}}</td>
                                    <td><img src="{{asset('backend/images/nhanvat/')}}/{{$item->hinh}}" class="form-cotrol" width='70' class='img-thumbnail'></td>
                                    <td>{{App\Model\Phim::find($item->idPhim)->ten}}</td>
                                    <td>
                                        <div style="display: inline-block">
                                            <button class="btn btn-warning btn-detail open_modal" value="{{$item->id}}">Edit</button>
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

{{-- Create Modal --}}
<div id="createModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="createModalLabel">Nhân Vật</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmProducts_Create" name="frmProducts_Create" class="form-horizontal classFormUpdate validate-form" novalidate="" enctype="multipart/form-data" method="post" action="{{route('nhanvat.store')}}">
                    @csrf
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group"> {{--input-group--}}
                        <label for="ten">Tên:</label>
                        <input type="text" name="ten" id="ten" class="form-control required" placeholder="Tên nhân vật">
                        <br>
                        <label for="ten">Loại:</label>
                        <input type="text" name="loai" id="loai" class="form-control required" placeholder="Loại nhân vật (Nam nữ chính phụ)">
                        <br>
                        <label for="">Hình:</label>
                        <input type="file" name="hinh" id="hinh" class="form-control">
                        <img class="form-cotrol" id="bia" width='70' class='img-thumbnail'>
                        <p id="textUnique" class="invalid-feedback d-inline text-danger"></p>
                        <br>
                        <label for="">Phim:</label>
                        <select name="idPhim" id="idPhim" class="form-control">
                            @foreach ($phim as $item)
                            <option value="{{$item->id}}">{{$item->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btn-cancel" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn-save" value="update">Lưu</button>
                <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
    </div>
</div>

{{-- Edit Modal
<div id="editModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editModalLabel">Nhân Vật</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmProducts_Edit" name="frmProducts_Edit" class="form-horizontal classFormUpdate validate-form" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group">
                        <label for="ten">Tên:</label>
                        <input type="text" name="ten" id="ten" class="form-control required" placeholder="Tên nhân vật">
                        <br>
                        <label for="ten">Loại:</label>
                        <input type="text" name="loai" id="loai" class="form-control required" placeholder="Loại nhân vật (Nam nữ chính phụ)">
                        <br>
                        <label for="">Hình:</label>
                        <input type="file" name="hinh" id="hinh" class="form-control">
                        <img class="form-cotrol" id="bia" width='70' class='img-thumbnail'>
                        <p id="textUnique" class="invalid-feedback d-inline text-danger"></p>
                        <br>
                        <label for="">Phim:</label>
                        <select name="idPhim" id="idPhim" class="form-control">
                            @foreach ($phim as $item)
                            <option value="{{$item->id}}">{{$item->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btn-cancel" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn-save" value="update">Lưu</button>
                <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
    </div>
</div> --}}

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

    {{-- ajax thêm xóa sửa --}}
    @include('admin.nhanvat.ajaxscript')
    @yield('ajax')

    {{-- alertify --}}
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

@endsection
