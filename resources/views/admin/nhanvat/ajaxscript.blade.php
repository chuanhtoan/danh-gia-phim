@section('ajax')

<script>
$(document).ready(function(){

    //get base URL *********************
    var url = '/admin/nhanvat';


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts_Create').trigger("reset");
        $('#textUnique').html("");
        $('#hinh').removeClass('is-invalid');
        $('#createModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        $('#textUnique').html("");
        $('#hinh').removeClass('is-invalid');

        document.getElementById("frmProducts_Create").action = "/admin/nhanvat/"+product_id;
    
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
                $('#createModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


    
    // create new product / update existing product ***************************
    $("#btn-save").click(function(){
        var hl = $("#frmProducts_Create").valid();    
        if(hl){
            ajaxTaoNhanVat($("#frmProducts_Create"));
        }
    });

    $("#frmProducts_Create").validate({
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
                tenHinh = fr.result;
            }
            fr.readAsDataURL(files[0]);
        }

    });

    function ajaxTaoNhanVat(form){

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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form,
            type: 'post',
            url: '/admin/nhanvat',
            async:false,
            success: function (data) {                
                console.log(data.hinh);

                var image_link = "{{asset('backend/images/nhanvat/')}}/" + tenHinh;

                var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + $("#ten").val() + '</td><td>' + $("#loai").val() + '</td><td>' 
                + '<img src="' + image_link + '" class="form-cotrol" width="70" class="img-thumbnail">' 
                + '</td><td>' + $('#idPhim option:selected').html();
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger delete-product" value="' + data.id + '">Delete</button></td></tr>';
                
                $('#products-list').append(product);
                    // alertify
                alertify.success('Thêm thành công');
                
                $('#frmProducts_Create').trigger("reset");
                $('#createModal').modal('hide');
            },
            error: function (data) {
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
