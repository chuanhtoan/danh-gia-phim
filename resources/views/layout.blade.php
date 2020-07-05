<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AnimeDL</title>
		<link rel="shortcut icon" href="{{asset('frontend/css/images/favicon.ico')}}" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" href="{{asset('frontend/css/images/apple-touch-icon.png')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/uikit.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/glide.core.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/js/uikit.min.js')}}"></script>
		<script src="{{asset('frontend/js/fontawesome-all.min.js')}}"></script>
		<script src="{{asset('frontend/js/glide.min.js')}}"></script>
		<script src="{{asset('frontend/js/site-scripts.js')}}"></script>
    </head>
	
    <body>
		<div class="wrapper">
			<header class="site-header">
				<div class="topbar">
					<div class="uk-grid uk-grid-small">
						<div class="uk-width-medium-7-10 uk-hidden-small">
							<i class="icon-lightbulb"></i>
							<span>Tip: You can put a comment, tip or announcement link here!</span>
						</div><!-- .uk-width-medium-7-10 .uk-hidden-small -->
						
						<div class="uk-width-medium-3-10">
							<div class="uk-text-right">
								<a href="#" title="Follow us on Facebook!" target="_blank">
									<i class="icon-facebook-squared"></i>
								</a>
								
								<a href="#" title="Follow us on Twitter!" target="_blank">
									<i class="icon-twitter-squared"></i>
								</a>
								
								<a href="#" title="Follow us on Google Plus!" target="_blank">
									<i class="icon-gplus-squared"></i>
								</a>
								
								<a href="#" title="Follow our Feed!" target="_blank">
									<i class="icon-rss-squared"></i>
								</a>
							</div><!-- .uk-text-right -->
						</div><!-- .uk-width-medium-3-10 -->
					</div><!-- .uk-grid .uk-grid-small -->
				</div><!-- .topbar -->	
				
				<div class="heading">
					<div class="uk-grid uk-grid-small">
						<div class="uk-width-small-1-1 uk-width-medium-3-10">
							<a href="#"><img class="site-logo" src="{{asset('frontend/img/logo.jpg')}}" alt="Logo"></a>
						</div><!-- .uk-width-small-1-1 .uk-width-medium-3-10 -->	
						
						<div class="uk-width-small-1-1 uk-width-medium-7-10 uk-hidden-small">
							<a href="#"><img class="uk-float-right" src="{{asset('frontend/img/728x90.png')}}" alt="728x90 Banner"></a>
						</div><!-- .uk-width-small-1-1 .uk-width-medium-7-10 .uk-hidden-small -->
					</div><!-- .uk-grid .uk-grid-small -->
				</div><!-- .heading -->				
				
				<div class="navbar">
					<ul>
						<li><a href="index.html"><i class="icon-home"></i> Home</a></li>
						<li><a href="page.html"><i class="icon-star"></i> Page</a></li>
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
			
			@yield('content')
			
			<footer class="site-footer">				
				<div class="footer">
					Copyright © 2018 AnimeDL
				</div><!-- .footer -->
				<a href="javascript:void(0)" class="back-to-top" title="To the Top!"><i class="icon-up-open"></i></a>
			</footer><!-- .site-footer -->
		</div><!-- .wrapper -->
	</body>
</html>