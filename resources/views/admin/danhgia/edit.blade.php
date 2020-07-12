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
    <script type="text/javascript" src="/plugins/ckeditor/ckeditor.js"></script>

@endsection

@section('content')

<div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
    
    <!-- main content -->
    <div class="container-fluid">
        <h2>Sửa Đánh Giá</h2>
        <p class="lead">
            Sửa thông tin đánh giá.
        </p>
        <hr>
        <div class="card" style="margin-bottom: 14rem">
            <div class="card-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal classFormUpdate validate-form" novalidate="" enctype="multipart/form-data" action="{{route('danhgia.store')}}" method="post">
                    {{ method_field('PUT') }}
                    @csrf
                    <input type="hidden" name="class_id" class="class-id" id="class-id">
                    <div class="form-group">
                        <label for="idPhim">Phim:</label>
                        <select name="idPhim" id="idPhim" class="form-control">
                            @foreach ($phim as $item)
                            <option 
                            @if ($item->id == $products->idPhim)
                                selected
                            @endif
                            value="{{$item->id}}">{{$item->ten}}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for="idUser">Tài khoản:</label>
                        <select name="idUser" id="idUser" class="form-control">
                            @foreach ($user as $item)
                            <option 
                            @if ($item->id == $products->idUser)
                                selected
                            @endif
                            value="{{$item->id}}">{{$item->username}}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for="diem">Điểm:</label>
                        <input type="number" min="1" max="10" value="{{$products->diem}}" name="diem" id="diem" class="form-control">
                        <br>
                        <label for="noiDung">Nội dung:</label>
                        <input type="hidden" id="noiDung-input" value="{{$products->noiDung}}">
                        <textarea name="noiDung" value="{{$products->noiDung}}" id="noiDung" rows="10" cols="80"></textarea>
                        <br>
                        <label for="ngay">Ngày:</label>
                        <input type="text" id="ngay" name="ngay" class="datepicker form-control" data-date-end-date="0d" data-date-format="yyyy/mm/dd" data-date-today-btn=true data-date-today-highlight=true data-date-auto-close=true data-date-default-viewDate="today" value="{{$products->ngay}}">
                        {{-- buttons --}}
                        <br>
                        <div style="display: inline-block;float: right">
                            <a href="{{route('danhgia.index')}}" class="btn btn-warning" style="margin-right: .5rem">Quay Về</a>
                            <a id="btn-save" value="update" class="btn btn-primary" style="margin-right: .5rem;color: white">Lưu</a>
                            <input type="hidden" id="product_id" name="product_id" value="{{($products->id)}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



@section('above_body')

    {{-- CKEDITOR --}}
    <script>
        CKEDITOR.replace('noiDung',{
            filebrowserBrowseUrl : '/plugins/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : '/plugins/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : '/plugins/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
        CKEDITOR.instances['noiDung'].setData($('#noiDung-input').val());
        CKEDITOR.config.height = '600';
    </script>

    {{-- validate --}}
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

    {{-- alertify --}}
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    {{-- Script Create Ajax --}}
    <script>
        $(document).ready(function(){

            // Descending ID Table
            $('#data-table').DataTable().order([ 0, "desc" ]).draw();

            //get base URL *********************
            // var url = $('#url').val();
            var url = '/admin/danhgia';

            // create new product ***************************
            $("#btn-save").click(function(){
                var hl = $("#frmProducts").valid();    
                if(hl){
                    thucHienAjax();
                }
            });

            $("#frmProducts").validate({
                onfocusout: function (element) {
                    if ($(element).val() == "") return;
                    var hl = $(element).valid();
                    if (hl) {
                        if ($(element).hasClass('is-invalid'))
                            $(element).removeClass("form-control is-invalid");
                        $(element).addClass('form-control is-valid');
                    }
                }, onkeyup: false,
                rules: {
                    diem: {
                        required: true,
                        min: 0,
                        max: 10,
                    },
                    noiDung: {
                        required: true,
                        maxlength: 3000,
                    },
                    ngay: {
                        required: true,
                    },
                },
                messages: {
                    diem: {
                        required: 'Bạn phải nhập trường này',
                        min: 'Điểm thấp nhất là 0',
                        max: 'Điểm cao nhất là 10',
                    },
                    noiDung: {
                        required: 'Bạn phải nhập trường này',
                        maxlength: 'Tối đa 3000 kí tự',
                    },
                    ngay: {
                        required: 'Bạn phải nhập trường này'
                    },
                }, errorPlacement: function (err, elemet) {
                    err.insertAfter(elemet);    
                    err.addClass('invalid-feedback d-inline text-danger');
                    elemet.addClass('form-control is-invalid');
                    $('.focus-input100-1,.focus-input100-2').addClass('hidden');
                }
            });

            function thucHienAjax(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                // e.preventDefault(); 
                var formData = {
                    idPhim: $('#idPhim').val(),
                    idUser: $('#idUser').val(),
                    diem: $('#diem').val(),
                    noiDung: CKEDITOR.instances['noiDung'].getData(),
                    ngay: $('#ngay').val(),
                }

                $.ajax({
                    type: "POST",
                    method:'put',
                    url: '/admin/danhgia/' + $('#product_id').val(),
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        alertify.success('Sửa thành công');
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }
        
        });
    </script>

@endsection

