@section('ajax')

{{-- Drag and drop sortable --}}
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function () {
    var table = $("#data-table").DataTable();

    $( "#products-list" ).sortable({
        items: "tr",
        cursor: 'move',
        opacity: 0.6,
        update: function() {
            sendOrderToServer();
        }
    });

    function sendOrderToServer() {
        var order = [];
        var token = $('meta[name="csrf-token"]').attr('content');
        $('tr.active').each(function(index,element) {
            order.push({
                id: $(this).attr('data-id'),
                position: index+1
            });
        });

        $.ajax({
        type: "POST", 
        dataType: "json", 
        url: "{{ url('admin/phim_bangxephang/post-sortable') }}",
            data: {
            order: order,
            _token: token
        },
        success: function(response) {
            if (response.status == "success") {
                console.log(response);
            } else {
                console.log(response);
            }
        }
        });
    }
    });
</script>

<script>
$(document).ready(function(){

    // tang hang modal them
    var table = $("#data-table").DataTable();
    var currentrows = table.rows().count()+1;

    //get base URL *********************
    var url = '/admin/phim_bangxephang';


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#textUnique').html("");
        $('#hang').val(currentrows);
        $('#idPhim').removeClass('is-invalid');
        $('#createEditModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var product_id = $(this).val();
        $('#textUnique').html("");
        $('#idPhim').removeClass('is-invalid');
    
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/show/' + product_id,
            success: function (data) {
                $('#product_id').val(data.id);
                $('#idPhim').val(data.idPhim);
                $('#hang').val(data.hang);
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
            // ten: {
            //     required: true,
            //     maxlength: 50
            // },
        },
        messages: {
            // ten: {
            //     required: 'Bạn phải nhập trường này',
            //     maxlength: "Tối đa 50 kí tự"
            // },
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
            idBangXepHang: $('#idBangXepHang').val(),
            idPhim: $('#idPhim').val(),
            hang: $('#hang').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var product_id = $('#product_id').val();;
        var my_url = '/admin/phim_bangxephang';

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
        
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var product = '<tr id="product' + data.id + '"><td>' + data.hang + '</td><td>' 
                + $('#idPhim option:selected').html();
                product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                product += ' <button class="btn btn-danger delete-product" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#products-list').append(product);
                    // alertify
                    alertify.success('Thêm thành công');
                    // tang hang modal them
                    currentrows++;
                }else{ //if user updated an existing record
                    $("#product" + product_id).replaceWith( product );
                    // alertify
                    alertify.success('Sửa thành công');
                }
                $('#frmProducts').trigger("reset");
                $('#createEditModal').modal('hide');
            },
            error: function (data) {
                $('#idPhim').addClass('is-invalid');
                $('#textUnique').html(JSON.parse(data.responseText).errors.idPhim[0]);
                console.log('Error:', data);
            }           
        });
    }


    
    // delete product and remove it from TABLE list ***************************
    var product_id;

    $(document).on('click','.delete-product',function(){
        product_id = $(this).val();
        
        // Populate Data in Delete Modal Form
        $('#lableXoa').html('Xóa phim này?');
        $('#deleteModal').modal('show');
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
