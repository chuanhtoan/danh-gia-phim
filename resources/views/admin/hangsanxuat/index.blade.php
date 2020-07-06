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
                            @foreach($arr as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->ten}}</td>
                                    <td>
                                        <a href="{{route('hangsanxuat.edit',$item->id)}}"><i class="material-icons">edit</i></a>
                                        <a href="#" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">delete</i></a>
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

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Xóa hãng sản xuất này?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$arr[0]->ten}}
            </div>
            <div class="modal-footer">
                <form action="{{route('hangsanxuat.destroy',$arr[0]->id)}}">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Xóa</button>
                </form>
            </div>
        </div>
    </div>
</div>