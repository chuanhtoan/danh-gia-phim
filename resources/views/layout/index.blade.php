<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Utako | Đánh giá phim</title>
		<link rel="shortcut icon" href="{{asset('backend/images/icon.png')}}" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/apple-touch-icon.png')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/uikit.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/glide.core.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/js/uikit.min.js')}}"></script>
		<script src="{{asset('frontend/js/fontawesome.min.js')}}"></script>
		<script src="{{asset('frontend/js/glide.min.js')}}"></script>
		<script src="{{asset('frontend/js/site-scripts.js')}}"></script>
		
		{{-- Material icons --}}
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        {{-- Css --}}
		@yield('css')
		
    </head>
	
    <body>
		<div class="wrapper">
            
            @include('layout.header')
            @yield('header')
			
            @yield('content')
            
            {{-- Footer --}}
			<footer class="site-footer">				
				<div class="footer">
					@ Utako - Website đánh giá và xếp hạng phim
				</div><!-- .footer -->
				<a href="javascript:void(0)" class="back-to-top" title="To the Top!"><i class="icon-up-open"></i></a>
			</footer><!-- .site-footer -->
        </div><!-- .wrapper -->
        
        {{-- Script --}}
        @yield('script')

	</body>
</html>