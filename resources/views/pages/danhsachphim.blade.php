@section('danhsachphim')
<div class="uk-width-medium-4-6">
    <h2 class="latest-posted-title">
        <i class="icon-th-large"></i> Latest Posted
    </h2><!-- .latest-posted-title -->
    
    <div class="uk-grid uk-grid-small latest-posted">
        
        @foreach ($phims as $phim)
            <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                <div class="single-posted">
                    <a href="post.html">
                        <div class="posted-thumb">
                            <img src="{{asset('images/upload/blank.png')}}">
                        </div><!-- .posted-thumb -->
                        
                        {{-- <div class="posted-comments"><i class="icon-comment"></i> 4</div> --}}
                                
                        <div class="posted-meta">{{$phim->ngayCongChieu}}</div>
                
                        <h3 class="posted-title">
                            {{$phim->ten}}
                        </h3><!-- .posted-title -->
                    </a>
                </div><!-- .single-posted -->
            </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
        @endforeach
        
    </div><!-- .uk-grid .uk-grid-small .latest-posted -->
    
    <div class="site-pagination">
        <ul class="uk-pagination">
            <li class="uk-disabled"><span><i class="icon-angle-double-left"></i></span></li>
            <li class="uk-active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><span>...</span></li>
            <li><a href="#">19</a></li>
            <li><a href="#">20</a></li>
            <li><a href="#"><i class="icon-angle-double-right"></i></a></li>
        </ul><!-- .uk-pagination -->
    </div><!-- .site-pagination -->
</div><!-- .uk-width-medium-4-6 -->

@endsection