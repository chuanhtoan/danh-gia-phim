@section('left_drawer')
<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

            <nav class="drawer  drawer--dark">
                <div class="drawer-spacer">
                    <div class="media align-items-center">
                        <a href="{{route('hangsanxuat.index')}}"><img alt="Logo" src="{{asset('backend/images/logo_only.png')}}" /></a>
                        <div class="media-body" style="padding-left: 14px; margin-top: 10px">
                            <a href="{{route('hangsanxuat.index')}}" class="h5 m-0 text-link">Utako | Admin</a>
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
                        <a href="{{route('nhanvat.index')}}">
                            <i class="material-icons">movies</i>
                            <span class="drawer-menu-text"> Bảng Xếp Hạng</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="{{route('phim.index')}}">
                            <i class="material-icons">local_movies</i>
                            <span class="drawer-menu-text"> Bài Viết</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="{{route('theloai.index')}}">
                            <i class="material-icons">dns</i>
                            <span class="drawer-menu-text"> Đánh Giá</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{route('hangsanxuat.index')}}">
                            <i class="material-icons">store</i>
                            <span class="drawer-menu-text"> Báo Cáo</span>
                        </a>
                    </li>
                    <li class="drawer-menu-item ">
                        <a href="{{route('hangsanxuat.index')}}">
                            <i class="material-icons">store</i>
                            <span class="drawer-menu-text"> Tài khoản</span>
                        </a>
                    </li>
                </ul>

                <!-- HEADING -->
                <div class="py-2 drawer-heading">
                    Components
                </div>

                <!-- MENU -->
                <ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#uiComponentsMenu" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
                            <i class="material-icons">library_books</i>
                            <span class="drawer-menu-text"> UI Components</span>
                        </a>
                        <ul class="collapse " id="uiComponentsMenu">
                            <li class="drawer-menu-item "><a href="ui-buttons.html">Buttons</a></li>
                            <li class="drawer-menu-item "><a href="ui-colors.html">Colors</a></li>
                            <li class="drawer-menu-item "><a href="ui-grid.html">Grid</a></li>
                            <li class="drawer-menu-item "><a href="ui-icons.html">Icons</a></li>
                            <li class="drawer-menu-item "><a href="ui-typography.html">Typography</a></li>
                            <li class="drawer-menu-item "><a href="ui-drag-drop.html">Drag &amp; Drop</a></li>
                            <li class="drawer-menu-item "><a href="ui-loaders.html">Loaders</a></li>
                        </ul>
                    </li>


                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#formsMenu" aria-controls="formsMenu" aria-expanded="false" class="collapsed">
                            <i class="material-icons">text_format</i>
                            <span class="drawer-menu-text"> Forms</span>
                        </a>
                        <ul class="collapse " id="formsMenu">
                            <li class="drawer-menu-item "><a href="form-controls.html">Form Controls</a></li>
                            <li class="drawer-menu-item "><a href="checkboxes-radios.html">Checkboxes &amp; Radios</a></li>
                            <li class="drawer-menu-item "><a href="switches-toggles.html">Switches &amp; Toggles</a></li>
                            <li class="drawer-menu-item "><a href="form-layout.html">Layout Variations</a></li>
                            <li class="drawer-menu-item "><a href="validation.html">Validation</a></li>
                            <li class="drawer-menu-item "><a href="custom-forms.html">Custom Forms</a></li>
                            <li class="drawer-menu-item "><a href="text-editor.html">Text Editor</a></li>
                            <li class="drawer-menu-item "><a href="datepicker.html">Datepicker</a></li>
                        </ul>
                    </li>
                    <li class="drawer-menu-item  ">
                        <a href="ui-tables.html">
                        <i class="material-icons">tab</i>
                        <span class="drawer-menu-text"> Tables</span>
                    </a>
                    </li>
                    <li class="drawer-menu-item  ">
                        <a href="ui-notifications.html">
                        <i class="material-icons">notifications</i>
                        <span class="drawer-menu-text"> Notifications</span>
                    </a>
                    </li>
                    <li class="drawer-menu-item  ">
                        <a href="charts.html">
                        <i class="material-icons">equalizer</i>
                        <span class="drawer-menu-text"> Charts</span>
                    </a>
                    </li>
                    <li class="drawer-menu-item  ">
                        <a href="events-calendar.html">
                        <i class="material-icons">event_available</i>
                        <span class="drawer-menu-text"> Calendar</span>
                    </a>
                    </li>
                    <li class="drawer-menu-item  ">
                        <a href="maps.html">
                        <i class="material-icons">pin_drop</i>
                        <span class="drawer-menu-text"> Maps</span>
                    </a>
                    </li>
                </ul>


                <!-- HEADING -->
                <div class="py-2 drawer-heading">
                    Pages
                </div>

                <!-- MENU -->
                <ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
                    <li class="drawer-menu-item">
                        <a href="account.html">
                        <i class="material-icons">edit</i>
                        <span class="drawer-menu-text">Edit Account</span>
                    </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="login.html">
                        <i class="material-icons">lock</i>
                        <span class="drawer-menu-text">Login</span>
                    </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="signup.html">
                        <i class="material-icons">account_circle</i>
                        <span class="drawer-menu-text">Sign Up</span>
                    </a>
                    </li>
                    <li class="drawer-menu-item">
                        <a href="forgot-password.html">
                        <i class="material-icons">help</i>
                        <span class="drawer-menu-text">Forgot Password</span>
                    </a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</div>
    
@endsection