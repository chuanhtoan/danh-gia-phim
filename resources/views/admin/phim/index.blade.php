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

        /* Checkboxs the loai */
        /* Hiding the checkbox, but allowing it to be focused */
        .badgebox
        {
            opacity: 0;
        }

        .badgebox + .badge
        {
            /* Move the check mark away when unchecked */
            text-indent: -999999px;
            /* Makes the badge's width stay the same checked and unchecked */
            width: 27px;
        }

        .badgebox:focus + .badge
        {
            /* Set something to make the badge looks focused */
            /* This really depends on the application, in my case it was: */
            
            /* Adding a light border */
            box-shadow: inset 0px 0px 5px;
            /* Taking the difference out of the padding */
        }

        .badgebox:checked + .badge
        {
            /* Move the check mark back when checked */
            text-indent: 0;
        }

        /* truncate the loai */
        /* .truncate {
        display: table;
        table-layout: fixed;
        width: 100%;
        } */
    </style>

@endsection

@section('content')

<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
    
    <!-- main content -->
    <div class="container-fluid">
        
        <h2>Phim</h2>
        <p class="lead">
            Quản lý thông tin các Phim.
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
                                <th>Kiểu</th>
                                <th>Tóm Tắt</th>
                                <th>Thể Loại</th>
                                <th>Số Tập</th>
                                <th>Thời Lượng</th>
                                <th>Nguồn</th>
                                <th>Ngôn Ngữ</th>
                                <th>Phân Loại</th>
                                <th>Trạng Thái</th>
                                <th>Mùa</th>
                                <th>Hãng SX</th>
                                <th>Trailer</th>
                                <th>Điểm TB</th>
                                <th style="min-width: 110px;">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody id="products-list" name="products-list">
                            @foreach($products as $item)
                                <tr id="product{{$item->id}}" class="active">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->ten}}</td>
                                    <td>{{$item->kieu}}</td>
                                    <td>{{Str::limit($item->tomTat, 30)}}</td>
                                    <td>
                                        @foreach ($phim_theloais as $phim_theloai)
                                            @if ($phim_theloai->idPhim == $item->id)

                                                @foreach ($theloai as $tl)
                                                    @if ($tl->id == $phim_theloai->idTheLoai)
                                                        {{$tl->ten}},
                                                        <input type="hidden" class="hiddenvalue hidden_{{$item->id}}" value="{{$tl->id}}">
                                                    @endif
                                                @endforeach

                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$item->soTap}}</td>
                                    <td>{{$item->thoiLuong}}</td>
                                    <td>{{$item->nguon}}</td>
                                    <td>{{$item->ngonNgu}}</td>
                                    <td>{{$item->phanLoaiDoTuoi}}</td>
                                    <td>{{$item->trangThai}}</td>
                                    <td>{{$item->ngayCongChieu}}</td>
                                    <td>{{App\Model\HangSanXuat::find($item->idHangSanXuat)->ten}}</td>
                                    <td>
                                        @php $link = $item->trailer @endphp
                                        @if( $link!='' && $link!=null )
                                            <a href="{{$link}}">Link</a>
                                        @endif
                                    </td>
                                    <td>{{$item->diemTrungBinh}}</td>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="createEditModalLabel">Phim</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal classFormUpdate validate-form" novalidate="">
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group"> {{--input-group--}}
                        <label for="ten">Tên:</label>
                        <input type="text" name="ten" id="ten" class="form-control required" placeholder="Tên phim">
                        <p id="tenError" class="invalid-feedback d-inline text-danger"></p>
                        <br>
                        <label for="">Kiểu:</label>
                        <select name="kieu" id="kieu" class="form-control">
                            <option value="TV Series">TV Series</option>
                            <option value="Movie">Movie</option>
                            <option value="OVA">OVA</option>
                        </select>
                        <br>
                        <label for="">Tóm tắt:</label>
                        <textarea type="textarea" name="tomTat" id="tomTat" class="form-control" placeholder="Tóm tắt phim" rows="4"></textarea>
                        <br>
                        <label for="">Thể loại:</label>
                        <div>
                            @foreach ($theloai as $item)
                                <label for="theloai{{$item->id}}" class="btn btn-info">{{$item->ten}}
                                    <input type="checkbox" id="theloai{{$item->id}}" value="{{$item->id}}" class="badgebox form-control theloai_checkbox">
                                    <span class="badge">&check;</span>
                                </label>
                            @endforeach
                        </div>
                        <p id="theLoaiError" class="invalid-feedback d-inline text-danger"></p>
                        <br>
                        <label for="">Số tập:</label>
                        <input type="number" min="1" value="1" name="soTap" id="soTap" class="form-control">
                        <br>
                        <label for="">Thời lượng:</label>
                        <input type="text" name="thoiLuong" id="thoiLuong" class="form-control required" placeholder="Thời lượng phim (phút hoặc phút 1 tập)">
                        <br>
                        <label for="">Nguồn:</label>
                        <select name="nguon" id="nguon" class="form-control">
                            <option value="Manga">Manga</option>
                            <option value="Light Novel">Light Novel</option>
                            <option value="None">None</option>
                        </select>
                        <br>
                        <label for="">Ngôn ngữ:</label>
                        <select name="ngonNgu" id="ngonNgu" class="form-control">
                            <option value="Japanese">Japanese</option>
                            <option value="English">English</option>
                            <option value="Chinese">Chinese</option>
                        </select>
                        <br>
                        <label for="">Phân loại:</label>
                        <select name="phanLoaiDoTuoi" id="phanLoaiDoTuoi" class="form-control">
                            <option value="G">G</option>
                            <option value="PG">PG</option>
                            <option value="PG-13">PG-13</option>
                            <option value="R">R</option>
                            <option value="NC-17">NC-17</option>
                        </select>
                        <br>
                        <label for="">Trạng thái:</label>
                        <select name="trangThai" id="trangThai" class="form-control">
                            <option value="Đã kết thúc">Đã kết thúc</option>
                            <option value="Đang phát sóng">Đang phát sóng</option>
                        </select>
                        <br>
                        <label for="">Mùa:</label>
                        <input type="text" name="ngayCongChieu" id="ngayCongChieu" class="form-control required" placeholder="Mùa công chiếu phim">
                        <br>
                        <label for="">Trailer:</label>
                        <input type="text" name="trailer" id="trailer" class="form-control" placeholder="Link Video Trailer">
                        <br>
                        <label for="">Hãng sản xuất:</label>
                        <select name="idHangSanXuat" id="idHangSanXuat" class="form-control">
                            @foreach ($hangsanxuat as $item)
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
    @include('admin.phim.ajaxscript')
    @yield('ajax')

    {{-- alertify --}}
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

@endsection

