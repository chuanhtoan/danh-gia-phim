@section('left_drawer')
<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

            <nav class="drawer  drawer--dark">
                <div class="drawer-spacer">
                    <div class="media align-items-center">
                        <a href="{{route('phim.index')}}"><img alt="Logo" src="{{asset('backend/images/logo_only.png')}}" /></a>
                        <div class="media-body" style="padding-left: 14px; margin-top: 10px">
                            <a href="{{route('phim.index')}}" class="h5 m-0 text-link">Utako | Admin</a>
                        </div>
                    </div>
                </div>

                <!-- HEADING -->
                <div class="py-2 drawer-heading">
                    Quản lý Phim
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item">
                    {{-- <li class="drawer-menu-item active "> --}}
                        <a href="{{route('phim.index')}}">
                            <i class="material-icons">local_movies</i>
                            <span class="drawer-menu-text"> Phim</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="{{route('theloai.index')}}">
                            <i class="material-icons">dns</i>
                            <span class="drawer-menu-text"> Thể Loại</span>
                            {{-- <span class="badge badge-pill badge-success ml-1">4</span> --}}
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{route('hangsanxuat.index')}}">
                            <i class="material-icons">store</i>
                            <span class="drawer-menu-text"> Hãng Sản Xuất</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{route('nhanvat.index')}}">
                            <i class="material-icons">movies</i>
                            <span class="drawer-menu-text"> Nhân Vật</span>
                        </a>
                    </li>
                </ul>

                <!-- HEADING -->
                <div class="py-2 drawer-heading">
                    Quản lý Phim
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item ">
                        <a href="{{route('bangxephang.index')}}">
                            <i class="material-icons">trending_up</i>
                            <span class="drawer-menu-text"> Bảng Xếp Hạng</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="{{route('baiviet.index')}}">
                            <i class="material-icons">dashboard</i>
                            <span class="drawer-menu-text"> Bài Viết</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="{{route('danhgia.index')}}">
                            <i class="material-icons">account_balance_wallet</i>
                            <span class="drawer-menu-text"> Đánh Giá</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{route('baocao.index')}}">
                            <i class="material-icons">announcement</i>
                            <span class="drawer-menu-text"> Báo Cáo</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{route('user.index')}}">
                            <i class="material-icons">account_circle</i>
                            <span class="drawer-menu-text"> Tài khoản</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
    
@endsection