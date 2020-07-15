@section('right_drawer')
<div class="mdk-drawer js-mdk-drawer" id="user-drawer" data-position="right" data-align="end">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
            <nav class="drawer drawer--light">
                <div class="drawer-spacer drawer-spacer-border">
                    <div class="media align-items-center">
                        <img src="{{asset('backend/images/empty.png')}}" class="img-fluid rounded-circle mr-2" width="35" alt="">
                        <div class="media-body">
                            <a class="h5 m-0"><b>{{Auth::guard('admin')->user()->username}}</b></a>
                            <div>Quản lý tài khoản</div>
                        </div>
                    </div>
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="userMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item">
                        <a href="{{route('user.index')}}">
                            <i class="material-icons">account_circle</i>
                            <span class="drawer-menu-text"> Tài khoản</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="/admin/logout">
                            <i class="material-icons">exit_to_app</i>
                            <span class="drawer-menu-text">Đăng Xuất</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
    
@endsection