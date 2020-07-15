@extends('layout.index')

@section('content')
<div class="site-content">			
    <div class="uk-grid uk-grid-small">
        @include('pages.toppage')
        @yield('toppage')
        
        @include('pages.danhsachphim')
        @yield('danhsachphim')
        
        @include('pages.timkiemtheloai')
        @yield('timkiemtheloai')

    </div><!-- .uk-grid .uk-grid-small -->
</div><!-- .site-content -->

@endsection