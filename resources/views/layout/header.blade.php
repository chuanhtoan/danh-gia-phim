@section('header')
<header class="site-header">
    <div class="topbar">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-medium-7-10 uk-hidden-small">
                <i class="icon-lightbulb"></i>
                <span>Chào mừng đến với Utako - Website đánh giá và xếp hạng phim!</span>
            </div><!-- .uk-width-medium-7-10 .uk-hidden-small -->

            <div class="uk-width-medium-3-10">
                <div class="uk-text-right">
                    @if (!isset($nguoidung))
                        <a href="/login" title="Đăng nhập!" style="margin-right:20px">
                            <i class="material-icons">local_library</i>
                            <strong class="login_logout" style="position: relative;top: -5px;">Đăng nhập</strong>
                        </a>

                        <a href="/register" title="Đăng ký!" style="margin-right:10px">
                            <i class="material-icons">directions_walk</i>
                            <strong class="login_logout" style="position: relative;top: -5px;">Đăng ký</strong>
                        </a>
                    @else
                        <a title="Người dùng!" style="margin-right:20px">
                            <img style="width: 25px;position: relative;top: -5px;border-radius: 50%;" src="{{asset('images/upload')}}/{{$nguoidung->hinh}}" alt="Logo">
                            <strong class="login_logout" style="position: relative;top: -5px;">{{$nguoidung->username}}</strong>
                        </a>
                        
                        <a href="/logout" title="Đăng xuất!" style="margin-right:10px">
                            <i class="material-icons">login</i>
                            <strong class="login_logout" style="position: relative;top: -5px;">Đăng xuất</strong>
                        </a>
                    @endif
                </div><!-- .uk-text-right -->
            </div><!-- .uk-width-medium-3-10 -->
        </div><!-- .uk-grid .uk-grid-small -->
    </div><!-- .topbar -->	
    
    <div class="heading">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-small-1-1 uk-width-medium-3-10">
                <a href="#"><img class="site-logo" src="{{asset('frontend/img/logo_pages.png')}}" alt="Logo"></a>
            </div><!-- .uk-width-small-1-1 .uk-width-medium-3-10 -->	
            
            <div class="uk-width-small-1-1 uk-width-medium-7-10 uk-hidden-small">
                <a href="#"><img class="uk-float-right" src="{{asset('frontend/img/logo_top_banner.png')}}" alt="728x90 Banner" style="width: 800px"></a>
            </div><!-- .uk-width-small-1-1 .uk-width-medium-7-10 .uk-hidden-small -->
        </div><!-- .uk-grid .uk-grid-small -->
    </div><!-- .heading -->				
    
    <div class="navbar">
        <ul>
            <li><a href="/"><i class="icon-home"></i> Trang Chủ</a></li>
            @if (isset($nguoidung))
                <li><a href="/bangxephang"><i class="icon-star"></i> Bảng Xếp Hạng</a></li>
            @endif
            {{-- <li><a href="/baiviet"><i class="icon-list-bullet"></i> Bài Viết</a></li> --}}
            <li><a href="/search"><i class="icon-search"></i> Tìm kiếm</a></li>
        </ul>
    </div><!-- .navbar -->
</header><!-- .site-header -->

@endsection