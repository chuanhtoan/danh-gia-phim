@section('ajax')

<script>
$(document).ready(function(){

    //get base URL *********************
    var url = '/admin/nhanvat';


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#textUnique').html("");
        $('#hinh').removeClass('is-invalid');
        $('#createEditModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        $('#textUnique').html("");
        $('#hinh').removeClass('is-invalid');

        document.getElementById("frmProducts").action = "/admin/nhanvat/"+product_id;
    
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                // console.log(data);
                $('#product_id').val(data.id);
                $('#ten').val(data.ten);
                $('#loai').val(data.loai);
                $('#idPhim').val(data.idPhim);
                $('#btn-save').val("update");
                $('#createEditModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


    
    // create new product / update existing product ***************************
    $("#btn-save").click(function(){
        var hl = $("#frmProducts").valid();    
        if(hl){
            thucHienAjax($("#frmProducts"));
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
            ten: {
                required: true,
                maxlength: 50
            },
            loai: {
                required: true,
                maxlength: 50
            },
        },
        messages: {
            ten: {
                required: 'Bạn phải nhập trường này',
                maxlength: "Tối đa 50 kí tự"
            },
            loai: {
                required: 'Bạn phải nhập trường này',
                maxlength: "Tối đa 50 kí tự"
            },
        }, errorPlacement: function (err, elemet) {
            err.insertAfter(elemet);    
            err.addClass('invalid-feedback d-inline text-danger');
            elemet.addClass('form-control is-invalid');
            $('.focus-input100-1,.focus-input100-2').addClass('hidden');
        }
    });

    $("#hinh").on('change', function (evt) {
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;

        // FileReader support
        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function () {
                $("#bia").attr('src',fr.result) ;
            }
            fr.readAsDataURL(files[0]);
        }

    });

    function thucHienAjax(form){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        var form = new FormData();
        form.append('hinh',$("#hinh").prop('files')[0]);
        form.append('ten',$("#ten").val());
        form.append('loai',$("#loai").val());
        form.append('idPhim',$("#idPhim").children('option:selected').val());

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();;
        var my_url = '/admin/nhanvat';

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }

        $.ajax({
            type: type,
            url: my_url,
            data: form,
            dataType: 'json',
            success: function (data) {
                var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + data.ten + '</td><td>' + data.loai + '</td><td>' 
                + data.hinh + '</td><td>' 
                + $('#idPhim option:selected').html();
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger delete-product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#products-list').append(product);
                    // alertify
                    alertify.success('Thêm thành công');
                }else{ //if user updated an existing record
                    $("#product" + product_id).replaceWith( product );
                    // alertify
                    alertify.success('Sửa thành công');
                }
                $('#frmProducts').trigger("reset");
                $('#createEditModal').modal('hide');
            },
            error: function (data) {
                // $('#ten').addClass('is-invalid');
                // $('#textUnique').html(JSON.parse(data.responseText).errors.hinh[0]);
                // console.log(JSON.parse(data.responseText).errors);
                console.log('Error:', data);
            }
        });
    }


    
    // delete product and remove it from TABLE list ***************************
    $(document).on('click','.delete-product',function(){
         var product_id = $(this).val();
        
        // Populate Data in Delete Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                $('#lableXoa').html('Xóa nhân vật "' + data.ten + '" ?');
                $('#deleteModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
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
    });
    
});
</script>

@endsection
