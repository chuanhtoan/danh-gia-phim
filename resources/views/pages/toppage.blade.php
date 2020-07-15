@section('toppage')
<div class="uk-width-small-1-1 uk-width-medium-6-10 uk-width-large-5-10">
    <div id="site-slideshow" class="glide">		
        <h2 class="slide-title">
            <i class="icon-star"></i> Phổ biến
        </h2><!-- .slide-title -->
        
        <div class="glide__wrapper">
            <ul class="glide__track">
                @foreach ($phim_slides as $phim)
                    <li class="glide__slide">
                        <a href="/phim/{{$phim->id}}">
                            <img src="{{asset('images/upload')}}/{{$phim->hinh}}" style="object-fit: cover;">
                            <span>{{$phim->ten}}</span>
                        </a>
                    </li><!-- .glide__slide -->    
                @endforeach
            </ul><!-- .glide__track -->
        </div><!-- .glide__wrapper -->
        
        <div class="glide__bullets"></div>							
    </div><!-- .glide -->
    
    <h2 class="ovas-entries-title">
        <i class="icon-camera"></i> Xem gì hôm nay
    </h2><!-- .ovas-entries-title -->
    
    <div class="ovas-entries">
        <div class="uk-scrollable-text">
            @foreach ($phim_ovas as $phim)
                <div class="ova-entry">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-3-10">
                            <a href="/phim/{{$phim->id}}">
                                <img src="{{asset('images/upload')}}/{{$phim->hinh}}" style="object-fit: cover;">
                            </a>
                        </div><!-- .uk-width-3-10 -->
                        
                        <div class="uk-width-7-10">
                            <h3>
                                <a href="/phim/{{$phim->id}}">
                                    {{$phim->ten}} ({{$phim->soTap}}/{{$phim->soTap}}) [{{$phim->thoiLuong}}] [{{$phim->kieu}}] [{{$phim->phanLoaiDoTuoi}}] [{{$phim->nguon}}]
                                </a>
                            </h3>
                        </div><!-- .uk-width-7-10 -->
                    </div><!-- .uk-grid .uk-grid-small -->
                </div><!-- .ova-entry -->
            @endforeach
        </div><!-- .uk-scrollable-text -->
    </div><!-- .ovas-entries -->
</div><!-- .uk-width-small-1-1 .uk-width-medium-6-10 .uk-width-large-5-10 -->

<div class="uk-width-small-1-1 uk-width-medium-4-10 uk-width-large-3-10">
    <h2 class="latest-entries-title"><i class="icon-list-bullet"></i> Mới cập nhật</h2>
    
    <div class="latest-entries">
        <dl class="uk-description-list-line uk-scrollable-text">
            @foreach ($phim_tapmois as $phim)
                <dt>
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-3-10">
                            <a href="/phim/{{$phim->id}}">
                                <img src="{{asset('images/upload')}}/{{$phim->hinh}}" style="width: 100px;height: 100px;object-fit: cover;">
                            </a>
                        </div><!-- .uk-width-3-10 -->
                        
                        <div class="uk-width-7-10">
                            <h3>
                                <a href="/phim/{{$phim->id}}">
                                    {{$phim->ten}} ({{$phim->soTap}}/{{$phim->soTap}}) [{{$phim->kieu}}] [{{$phim->phanLoaiDoTuoi}}] [{{$phim->ngayCongChieu}}]
                                </a>
                            </h3>
                        </div><!-- .uk-width-7-10 -->
                    </div><!-- .uk-grid .uk-grid-small -->
                </dt>
            @endforeach
        </dl><!-- .uk-description-list-line -->
    </div><!-- .latest-entries -->
</div><!-- .uk-width-small-1-1 .uk-width-medium-4-10 .uk-width-large-3-10 -->

<div class="uk-width-large-2-10 uk-visible-large">
    <div class="one-sixty-wide">
        <a class="uk-text-center" href="#">
            <img src="{{asset('frontend/img/logo_side_banner.png')}}" title="160x600 Banner">
        </a>
    </div><!-- .one-sixty-wide -->
</div><!-- .uk-width-large-2-10 .uk-visible-large -->    

@endsection