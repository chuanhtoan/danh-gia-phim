@extends('layout.index')

@section('content')
<div class="site-content">			
    <div class="uk-grid uk-grid-small">
        <div class="uk-width-small-1-1 uk-width-medium-6-10 uk-width-large-5-10">
            <div id="site-slideshow" class="glide">		
                <h2 class="slide-title">
                    <i class="icon-star"></i> Popular
                </h2><!-- .slide-title -->
                
                <div class="glide__wrapper">
                    <ul class="glide__track">
                        <li class="glide__slide">
                            <a href="post.html">
                                <img src="img/Tokyo-Ghoul-re-Cropped.jpg">
                                <span>Tokyo Ghoul:re (02/??) [HD] [Subbed]</span>
                            </a>
                        </li><!-- .glide__slide -->
                        
                        <li class="glide__slide">
                            <a href="post.html">
                                <img src="img/Black-Clover-Cropped.jpg">
                                <span>Black Clover (27/??) [HD] [Subbed]</span>
                            </a>
                        </li><!-- .glide__slide -->
                        
                        <li class="glide__slide">
                            <a href="post.html">
                                <img src="img/Boruto-Next-Generations-Cropped.jpg">
                                <span>Boruto: Naruto Next Generations (53/??) [HD] [Subbed]</span>
                            </a>
                        </li><!-- .glide__slide -->
                        
                        <li class="glide__slide">
                            <a href="post.html">
                                <img src="img/Steins;Gate-0-Cropped.jpg">
                                <span>Steins;Gate 0 (01/??) [HD] [Subbed]</span>
                            </a>
                        </li><!-- .glide__slide -->
                    </ul><!-- .glide__track -->
                </div><!-- .glide__wrapper -->
                
                <div class="glide__bullets"></div>							
            </div><!-- .glide -->
            
            <h2 class="ovas-entries-title">
                <i class="icon-camera"></i> OVA & Specials
            </h2><!-- .ovas-entries-title -->
            
            <div class="ovas-entries">
                <div class="uk-scrollable-text">
                    <div class="ova-entry">
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/Boruto-Next-Generations-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        Boruto: Naruto Next Generations OVAs [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </div><!-- .ova-entry -->
                    
                    <div class="ova-entry">
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/Steins;Gate-0-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        Steins;Gate 0 Specials [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </div><!-- .ova-entry -->
                </div><!-- .uk-scrollable-text -->
            </div><!-- .ovas-entries -->
        </div><!-- .uk-width-small-1-1 .uk-width-medium-6-10 .uk-width-large-5-10 -->
        
        <div class="uk-width-small-1-1 uk-width-medium-4-10 uk-width-large-3-10">
            <h2 class="latest-entries-title"><i class="icon-list-bullet"></i> Latest Episodes</h2>
            
            <div class="latest-entries">
                <dl class="uk-description-list-line uk-scrollable-text">
                    <dt>
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/Steins;Gate-0-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        Steins;Gate 0 (01/??) [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </dt>
                    
                    <dt>
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/Last-Period-Owarinaki-Rasen-no-Monogatari-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        Last Period: Owarinaki Rasen no Monogatari (01/??) [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </dt>
                    
                    <dt>
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/Boruto-Next-Generations-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        Boruto: Naruto Next Generations (53/??) [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </dt>
                    
                    <dt>
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/Yu-Gi-Oh!-VRAINS-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        Yu-Gi-Oh! VRAINS (47/??) [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </dt>
                    
                    <dt>
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/3D-Kanojo-Real-Girl-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        3D Kanojo: Real Girl (02/??) [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </dt>
                    
                    <dt>
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-3-10">
                                <a href="post.html">
                                    <img src="img/Lupin-III-Part-V-75x75.jpg">
                                </a>
                            </div><!-- .uk-width-3-10 -->
                            
                            <div class="uk-width-7-10">
                                <h3>
                                    <a href="post.html">
                                        Lupin III: Part V (02/??) [HD] [Subbed]
                                    </a>
                                </h3>
                            </div><!-- .uk-width-7-10 -->
                        </div><!-- .uk-grid .uk-grid-small -->
                    </dt>
                </dl><!-- .uk-description-list-line -->
            </div><!-- .latest-entries -->
        </div><!-- .uk-width-small-1-1 .uk-width-medium-4-10 .uk-width-large-3-10 -->
        
        <div class="uk-width-large-2-10 uk-visible-large">
            <div class="one-sixty-wide">
                <a class="uk-text-center" href="#">
                    <img src="img/160x600.png" title="160x600 Banner">
                </a>
            </div><!-- .one-sixty-wide -->
        </div><!-- .uk-width-large-2-10 .uk-visible-large -->
        
        @include('pages.danhsachphim')
        @yield('danhsachphim')
        
        @include('pages.timkiemtheloai')
        @yield('timkiemtheloai')

    </div><!-- .uk-grid .uk-grid-small -->
</div><!-- .site-content -->

@endsection