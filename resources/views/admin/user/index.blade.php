@extends('admin.layout.index')

@section('above_head')

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}

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
        
        <h2>Tài Khoản</h2>
        <p class="lead">
            Quản lý thông tin các Tài Khoản.
        </p>
        <hr>
        <div class="card">
            <div class="py-4">
                
                {{-- table --}}
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="min-width: 100px">Tên tài Khoản</th>
                                <th>Email</th>
                                <th>Hình</th>
                                <th>Loại</th>
                                <th style="min-width: 110px;">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="products-list" name="products-list">
                            @foreach($products as $item)
                                <tr id="product{{$item->id}}" class="active">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->email}}</td>
                                    <td><img src="{{asset('images/upload')}}/{{$item->hinh}}" class="form-cotrol" width='70' class='img-thumbnail'></td>
                                    <td>{{$item->loai}}</td>
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

{{-- Create Edit Modal --}}
<div id="createEditModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="createEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="createEditModalLabel">Chỉnh sửa tài khoản: </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal classFormUpdate validate-form" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group"> {{--input-group--}}
                        <input type="hidden" name="username" id="username">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control required" placeholder="Email tài khoản">
                        <br>
                        <label for="">Hình:</label>
                        <br>

                        {{-- Chon Hinh --}}
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
                        
                        <a href="/plugins/filemanager/dialog.php?relative_url=1&type=1&field_id=image-input" class="btn btn-primary iframe-btn" type="button">Chọn</a>
                        <input type="hidden" id="image-input">
                        <img style="width:20%;" id="image-preview" class="image-preview" src="">

                        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
                        <script>
                            $('.iframe-btn').fancybox({
                                'width'     : 900,
                                'height'    : 600,
                                'type'      : 'iframe',
                                'autoScale' : false
                            });
                            function responsive_filemanager_callback(field_id){
                                var url=jQuery('#'+field_id).val();
                                $(".image-preview").attr('src','{{asset('images/upload')}}/'+url);
                            }
                        </script>
                        {{-- Chon Hinh --}}

                        <br>
                        <p id="textUnique2" class="invalid-feedback d-inline text-danger"></p>
                        <br>
                        <label for="loai">Loại tài khoản:</label>
                        <select name="loai" id="loai" class="form-control">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
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
    @include('admin.user.ajaxscript')
    @yield('ajax')

    {{-- alertify --}}
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

@endsection

