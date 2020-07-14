@section('header')
<header class="site-header">
    <div class="topbar">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-medium-7-10 uk-hidden-small">
                <i class="icon-lightbulb"></i>
                <span>Tip: You can put a comment, tip or announcement link here!</span>
            </div><!-- .uk-width-medium-7-10 .uk-hidden-small -->
        </div><!-- .uk-grid .uk-grid-small -->
    </div><!-- .topbar -->	
    
    <div class="heading">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-small-1-1 uk-width-medium-3-10">
                <a href="#"><img class="site-logo" src="img/logo.jpg" alt="Logo"></a>
            </div><!-- .uk-width-small-1-1 .uk-width-medium-3-10 -->	
            
            <div class="uk-width-small-1-1 uk-width-medium-7-10 uk-hidden-small">
                <a href="#"><img class="uk-float-right" src="img/728x90.png" alt="728x90 Banner"></a>
            </div><!-- .uk-width-small-1-1 .uk-width-medium-7-10 .uk-hidden-small -->
        </div><!-- .uk-grid .uk-grid-small -->
    </div><!-- .heading -->				
    
    <div class="navbar">
        <ul>
            <li><a href="/"><i class="icon-home"></i> Trang Chủ</a></li>
            <li><a href="/bangxephang"><i class="icon-star"></i> Bảng Xếp Hạng</a></li>
            <li class="active">
                <a href="#"><i class="icon-list-bullet"></i> Series</a>
                <ul>
                    <li><a href="#">Most Popular</a>
                        <ul>
                            <li><a href="post.html">One Piece</a></li>
                            <li><a href="post.html">Overlord</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Most Downloaded</a>
                        <ul>
                            <li><a href="post.html">Monster Musume</a></li>
                            <li><a href="post.html">Boruto</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="search.html"><i class="icon-search"></i> Advanced Search</a></li>
        </ul>
    </div><!-- .navbar -->
</header><!-- .site-header -->

@endsection