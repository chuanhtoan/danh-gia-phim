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
                <div class="drawer-spacer bg-body-bg">
                    <div class="d-flex justify-content-between mb-2">
                        <p class="h6 text-gray m-0"><i class="material-icons align-middle md-18 text-primary">monetization_on</i> Balance</p>
                        <span>$21,011</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="h6 text-gray m-0"><i class="material-icons align-middle md-18 text-primary">shopping_cart</i> Sales</p>
                        <span>142</span>
                    </div>
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="userMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item">
                        <a href="account.html">
                            <i class="material-icons">lock</i>
                            <span class="drawer-menu-text"> Account</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="profile.html">
                            <i class="material-icons">account_circle</i>
                            <span class="drawer-menu-text"> Profile</span>
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