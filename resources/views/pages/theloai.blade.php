@extends('layout.index')

@section('css')
    <style>
        ul.pagination {
            padding: 0;
            list-style: none;
            text-align: center;
            font-size: 0;
        }

        ul.pagination li {
            display: inline;
            font-size: 1rem;
            font-weight: bold;
        }

        ul.pagination li a {
            background-color: #eee;
            color: #686868;
            font-weight: 700;
            padding: 8px 10px;
            border-radius: 3px;

            display: inline-block;
            min-width: 16px;
            line-height: 20px;
            text-decoration: none;
            box-sizing: content-box;
            text-align: center;
            margin: 4px;
        }

        ul.pagination li a.active {
            background-color: #7FDBFF;
            padding: 8px 10px;
            margin: 4px;
            color: white;
            border: 1px solid #7FDBFF;
            font-weight: 700;
            border-radius: 3px;
        }

        ul.pagination li.active {
            background: #7FDBFF;
            padding: 8px 10px;
            margin: 4px;
            color: white;
            border: 1px solid #7FDBFF;
            font-weight: 700;
            border-radius: 3px;
        }

        ul.pagination li a:hover {
            background: #7FDBFF;
        }

        ul.pagination li.disabled {
            color: #ddd;
            padding: 8px 10px;
            border: 1px solid #ddd;
            margin: 4px;
        }
    </style>
@endsection

@section('content')
<div class="site-content">			
    <div class="uk-grid uk-grid-small">
        
        {{--  --}}
        <div class="uk-width-medium-4-6">
            <h2 class="latest-posted-title">
                <i class="icon-th-large"></i> Thể loại: {{$theloai->ten}}
            </h2><!-- .latest-posted-title -->
            
            <div class="uk-grid uk-grid-small latest-posted">
                
                @foreach ($phims as $phim)
                    <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                        <div class="single-posted">
                            <a href="/phim/{{$phim->id}}">
                                <div class="posted-thumb">
                                    <img src="{{asset('images/upload')}}/{{$phim->hinh}}" style="object-fit: cover;">
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
            
            {{-- Pagination --}}
            {{$phims->links()}}

        </div><!-- .uk-width-medium-4-6 -->
        {{--  --}}
        
        @include('pages.timkiemtheloai')
        @yield('timkiemtheloai')

    </div><!-- .uk-grid .uk-grid-small -->
</div><!-- .site-content -->

@endsection
