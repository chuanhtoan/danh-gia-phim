@section('timkiemtheloai')
<div class="uk-width-medium-2-6">
    <div class="site-widgets">
        <div class="single-widget">
            <h4 class="widget-title">
                <i class="icon-search"></i> Tìm Kiếm
            </h4><!-- .widget-title -->
            
            <form class="uk-form">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-5-6">
                        <input type="text" class="uk-form-large uk-width-1-1" placeholder="Tìm kiếm...">
                    </div><!-- .uk-width-5-6 -->
                    
                    <div class="uk-width-1-6">
                        <button type="submit" class="uk-button uk-width-1-1"><i class="icon-search"></i></button>
                    </div><!-- .uk-width-1-6 -->
                </div><!-- .uk-grid .uk-grid-collapse -->
            </form><!-- .uk-form -->
        </div><!-- .single-widget -->
        
        <div class="single-widget">
            <h4 class="widget-title">
                <i class="icon-tags"></i> Thể Loại
            </h4><!-- .widget-title -->
            
            <div class="widget-content">
                <div class="genre-list">
                    @foreach ($theloais as $theloai)
                        <a class="genre" href="genres.html">{{$theloai->ten}}</a>
                    @endforeach
                </div><!-- .genre-list -->
            </div><!-- .widget-content -->
        </div><!-- .single-widget -->
        
        <div class="single-widget">
            <h4 class="widget-title">
                <i class="icon-megaphone"></i> Quảng Cáo
            </h4><!-- .widget-title -->
            
            <div class="widget-content">
                <a href="#" class="thirty-zero-wide"><img src="img/300x250.png" alt="300x250 Banner"></a>
            </div><!-- .widget-content -->
        </div><!-- .single-widget -->
    </div><!-- .site-widgets -->
</div><!-- .uk-width-medium-2-6 -->
    
@endsection