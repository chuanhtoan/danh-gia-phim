@extends('layout.index')
@section('css')
    {{-- Thong Bao && Errors --}}
    <style>
        @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
        .info-msg,
        .success-msg,
        .warning-msg,
        .error-msg {
            margin: 10px 0;
            padding: 10px;
            border-radius: 3px 3px 3px 3px;
        }
        .info-msg {
            color: #059;
            background-color: #BEF;
        }
        .success-msg {
            color: #270;
            background-color: #DFF2BF;
        }
        .warning-msg {
            color: #9F6000;
            background-color: #FEEFB3;
        }
        .error-msg {
            color: #D8000C;
            background-color: #FFBABA;
        }
    </style>

    {{-- Danh Gia --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	/* body{margin-top:20px;} */

        .comment-wrapper .panel-body {
            max-height:650px;
            overflow:auto;
        }

        .comment-wrapper .media-list .media img {
            width:64px;
            height:64px;
            border:2px solid #e5e7e8;
        }

        .comment-wrapper .media-list .media {
            border-bottom:1px dashed #efefef;
            margin-bottom:25px;
        }
    </style>

    {{-- Rating Stars --}}
    <style>
        /* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
        .rating-group {
            display: inline-flex;
            margin-right: 0;
        }
        
        /* make hover effect work properly in IE */
        .rating__icon {
            pointer-events: none;
        }
        
        /* hide radio inputs */
        .rating__input {
        position: absolute !important;
        left: -9999px !important;
        }
        
        /* hide 'none' input from screenreaders */
        .rating__input--none {
            display: none
        }

        /* set icon padding and size */
        .rating__label {
            cursor: pointer;
            padding: 0 0.1em;
            font-size: 2rem;
        }
        
        /* set default star color */
        .rating__icon--star {
            color: orange;
        }

        /* if any input is checked, make its following siblings grey */
        .rating__input:checked ~ .rating__label .rating__icon--star {
            color: #ddd;
        }
        
        /* make all stars orange on rating group hover */
        .rating-group:hover .rating__label .rating__icon--star {
            color: orange;
        }

        /* make hovered input's following siblings grey on hover */
        .rating__input:hover ~ .rating__label .rating__icon--star {
            color: #ddd;
        }
    </style>

    {{-- Ckeditor --}}
    <script type="text/javascript" src="/plugins/ckeditor/ckeditor.js"></script>

    {{-- Pagination --}}
    <style>
        .pagination {
            width: 100%;
            /* margin: 0 auto; */
            display: flex;
            justify-content: center;
        }
    </style>
@endsection
@section('content')
<div class="site-content">			
    <div class="uk-grid uk-grid-small">
        <div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-8-10">
            <div class="entry-details">
                <h2 class="entry-title">
                    {{$phim->ten}}
                </h2><!-- .entry-title -->
                
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="error-msg"><i class="fa fa-times-circle" style="margin-right: 10px"></i>{{$error}}</div>
                    @endforeach
                @endif

                @if (session('thongbao'))
                    <div class="success-msg"><i class="fa fa-times-circle" style="margin-right: 10px"></i>{{session('thongbao')}}</div>
                @endif

                @if (session('loi'))
                    <div class="error-msg"><i class="fa fa-times-circle" style="margin-right: 10px"></i>{{session('loi')}}</div>
                @endif

                <div class="entry-content">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-small-1-1 uk-width-medium-3-10">
                            <div class="entry-cover">
                                <img src="{{asset('images/upload')}}/{{$phim->hinh}}" alt="{{$phim->ten}}">
                                
                                <a href="#entry-report" class="entry-report" title="Report Broken Links!" data-uk-modal="{center:true}">
                                    <i class="icon-flag"></i>
                                </a><!-- .entry-report -->
                                
                                <div class="entry-status">
                                    <div class="status"><i class="icon-television"></i> Trạng thái: <strong>{{$phim->trangThai}}</strong></div>
                                </div><!-- .entry-status -->
                            </div><!-- .entry-cover -->
                        </div><!-- .uk-width-small-1-1 .uk-width-medium-3-10 -->
                        
                        <div class="uk-width-small-1-1 uk-width-medium-7-10">
                            <div class="entry-details">
                                <ul class="entry-tabs" data-uk-switcher="{connect: '#entry-tab-content', animation: 'fade'}">
                                    <li class="uk-active">
                                        <a href="javascript:void(0)"><i class="icon-list"></i> Thông tin</a>
                                    </li>
                                    
                                    <li><a href="javascript:void(0)"><i class="icon-play"></i> Trailer</a></li>
                                </ul><!-- .entry-tabs -->
                                
                                <ul id="entry-tab-content" class="uk-switcher">
                                    <li>
                                        <dl class="uk-description-list-horizontal">
                                            <dt>Loại:</dt>
                                            <dd>
                                                <a>{{$phim->kieu}}</a>
                                            </dd>
                                            
                                            <dt>Tóm tắt:</dt>
                                            <dd> {{$phim->tomTat}} </dd>
                                            
                                            <dt>Thể loại:</dt>
                                            <dd>
                                                @foreach ($phim_theloais as $phim_theloai)
                                                    @if ($phim_theloai->idPhim == $phim->id)

                                                        @foreach ($theloais as $tl)
                                                            @if ($tl->id == $phim_theloai->idTheLoai)
                                                                <a href="/theloai/{{$tl->id}}">{{$tl->ten}}</a>
                                                            @endif
                                                        @endforeach

                                                    @endif
                                                @endforeach
                                            </dd>
                                        </dl><!-- .uk-description-list-horizontal -->
                                    </li>
                                    
                                    <li>
                                        <div class="entry-trailer">
                                            <iframe allowfullscreen="allowfullscreen" src="{{$phim->trailer}}"></iframe>
                                        </div><!-- .entry-trailer -->
                                    </li>
                                </ul><!-- .uk-switcher -->
                            </div><!-- .entry-details -->
                        </div><!-- .uk-width-small-1-1 .uk-width-medium-7-10 -->
                    </div><!-- .uk-grid .uk-grid-small -->							
                </div><!-- .entry-content -->
            </div><!-- .entry-details -->
        </div><!-- .uk-width-small-1-1 .uk-width-medium-1-1 .uk-width-large-8-10 -->
        
        <div class="uk-width-large-2-10 uk-visible-large">
            <div class="one-sixty-wide">
                <a class="uk-text-center">
                    <img src="{{asset('frontend/img/logo_side_banner.png')}}" title="160x600 Banner">
                </a>
            </div><!-- .one-sixty-wide -->
        </div><!-- .uk-width-large-2-10 .uk-visible-large -->
    </div><!-- .uk-grid .uk-grid-small -->
    
    <div class="entry-episodes">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-small-1-1 uk-width-medium-7-10">
                <h3 class="eplist-title">
                    <i class="icon-th-list"></i> Nhân vật
                </h3><!-- .eplist-title -->
                
                {{-- list nhan vat --}}
                <div class="uk-grid uk-grid-small latest-posted">
                    @foreach ($nhanvats as $nhanvat)
                        <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-2">
                            <div class="media">
                                <a class="pull-left">
                                    <img src="{{asset('images/upload')}}/{{$nhanvat->hinh}}" alt="Avatar" style="width: 150px;height: 150px;border-radius: 8px;object-fit:cover;margin: 10px;">
                                </a>
                                <div class="media-body">
                                    <br>
                                    <strong >Tên nhân vật:</strong>
                                    <p class="text-success">{!! $nhanvat->ten !!}</p>
                                    <strong >Loại nhân vật</strong>
                                    <p class="text-success">{!! $nhanvat->loai !!}</p>
                                </div>
                            </div>
                        </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                    @endforeach
                    
                </div><!-- .uk-grid .uk-grid-small .latest-posted -->
                
                {{-- Pagination --}}
                {{$nhanvats->links()}}

            </div><!-- .uk-width-small-1-1 .uk-width-medium-7-10 -->
            
            <div class="uk-width-small-1-1 uk-width-medium-3-10">
                <h3 class="specs-title">
                    <i class="icon-info-circled"></i> Thông tin chi tiết
                </h3><!-- .specs-title -->
                
                <div class="specs-content">
                    <table class="uk-table uk-table-striped">
                        <tr>
                            <td><strong>Tiêu đề:</strong> {{$phim->ten}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Số tập:</strong> {{$phim->soTap}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Thời lượng:</strong> {{$phim->thoiLuong}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Nguồn:</strong> {{$phim->nguon}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Ngôn ngữ:</strong> {{$phim->ngonNgu}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Phân loại:</strong> {{$phim->phanLoaiDoTuoi}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Trạng thái:</strong> {{$phim->trangThai}}</td>
                        </tr>
                        
                        <tr>
                            <td><strong>Mùa:</strong> {{$phim->ngayCongChieu}}</td>
                        </tr>

                        <tr>
                            <td><strong>Hãng sản xuất:</strong> {{$phim->soTap}}</td>
                        </tr>

                        <tr>
                            <td><strong>Điểm trung bình:</strong> {{$phim->diemTB}}</td>
                        </tr>
                    </table><!-- .uk-table .uk-table-striped -->
                    
                    {{-- <a href="#" target="_blank" class="slide-button">
                        <span class="slide-square"><i class="icon-download"></i></span>
                        <span class="slide-title">Download All</span>
                    </a><!-- .slide-button --> --}}
                </div><!-- .specs-content -->
            </div><!-- .uk-width-small-1-1 .uk-width-medium-3-10 -->
        </div><!-- .uk-grid .uk-grid-small -->
    </div><!-- .entry-episodes -->
    
    <div class="entry-comments">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-small-1-1">
                <h3 class="comments-title">
                    <i class="icon-comment"></i> Đánh giá
                </h3><!-- .specs-title -->
                
                @include('pages.danhgia')
                @yield('danhgias')
                
            </div>
        </div>
    </div>
    
    <div id="entry-report" class="uk-modal">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close icon-cancel"></a>
            
            <div class="uk-modal-header">
                <h5>Báo Cáo</h5>
            </div>
            
            <form class="uk-form" method="post" action="/baoCao/{{$phim->id}}">
                @csrf
                <div class="uk-form-row">
                    <label class="uk-form-label" for="noiDung">Nội dung:</label>
                    <textarea id="noiDung" name="noiDung" rows="4" class="uk-width-1-1 uk-margin-small-top"></textarea>
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="uk-modal-close uk-button">Hủy</button>
                    <button type="submit" class="uk-button uk-button-primary">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- .site-content -->

@endsection
