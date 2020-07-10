@section('ajax')

<script>
$(document).ready(function(){

    //get base URL *********************
    // var url = $('#url').val();
    var url = '/admin/theloai';


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#textUnique').html("");
        $('#ten').removeClass('is-invalid');
        $('#createEditModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        $('#textUnique').html("");
        $('#ten').removeClass('is-invalid');
    
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                console.log(data);
                $('#product_id').val(data.id);
                $('#ten').val(data.ten);
                $('#moTa').val(data.moTa);
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
            ten: {
                required: true,
                maxlength: 50
            },
            moTa: {
                maxlength: 300
            },
        },
        messages: {
            ten: {
                required: 'Bạn phải nhập trường này',
                maxlength: "Tối đa 50 kí tự"
            },
            moTa: {
                maxlength: "Tối đa 300 kí tự"
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
            ten: $('#ten').val(),
            moTa: $('#moTa').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();;
        var my_url = '/admin/theloai';

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + data.ten + '</td><td>' + data.moTa;
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
                $('#ten').addClass('is-invalid');
                $('#textUnique').html(JSON.parse(data.responseText).errors.ten[0]);
                console.log('Error:', data);
            }
        });
    }


    
    // delete product and remove it from TABLE list ***************************
    var product_id;

    $(document).on('click','.delete-product',function(){
         var product_id = $(this).val();
        
        // Populate Data in Delete Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + product_id,
            success: function (data) {
                $('#lableXoa').html('Xóa thể loại "' + data.ten + '" ?');
                $('#deleteModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
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
</script>

@endsection
