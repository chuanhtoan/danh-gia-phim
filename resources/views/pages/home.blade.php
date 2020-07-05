@extends('layout')
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
                                <img src="{{asset('frontend/img/Tokyo-Ghoul-re-Cropped.jpg')}}">
                                <span>Tokyo Ghoul:re (02/??) [HD] [Subbed]</span>
                            </a>
                        </li><!-- .glide__slide -->
                        
                        <li class="glide__slide">
                            <a href="post.html">
                                <img src="{{asset('frontend/img/Black-Clover-Cropped.jpg')}}">
                                <span>Black Clover (27/??) [HD] [Subbed]</span>
                            </a>
                        </li><!-- .glide__slide -->
                        
                        <li class="glide__slide">
                            <a href="post.html">
                                <img src="{{asset('frontend/img/Boruto-Next-Generations-Cropped.jpg')}}">
                                <span>Boruto: Naruto Next Generations (53/??) [HD] [Subbed]</span>
                            </a>
                        </li><!-- .glide__slide -->
                        
                        <li class="glide__slide">
                            <a href="post.html">
                                <img src="{{asset('frontend/img/Steins;Gate-0-Cropped.jpg')}}">
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
                                    <img src="{{asset('frontend/img/Boruto-Next-Generations-75x75.jpg')}}">
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
                                    <img src="{{asset('frontend/img/Steins;Gate-0-75x75.jpg')}}">
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
                                    <img src="{{asset('frontend/img/Steins;Gate-0-75x75.jpg')}}">
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
                                    <img src="{{asset('frontend/img/Last-Period-Owarinaki-Rasen-no-Monogatari-75x75.jpg')}}">
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
                                    <img src="{{asset('frontend/img/Boruto-Next-Generations-75x75.jpg')}}">
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
                                    <img src="{{asset('frontend/img/Yu-Gi-Oh!-VRAINS-75x75.jpg')}}">
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
                                    <img src="{{asset('frontend/img/3D-Kanojo-Real-Girl-75x75.jpg')}}">
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
                                    <img src="{{asset('frontend/img/Lupin-III-Part-V-75x75.jpg')}}">
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
                    <img src="{{asset('frontend/img/160x600.png')}}" title="160x600 Banner">
                </a>
            </div><!-- .one-sixty-wide -->
        </div><!-- .uk-width-large-2-10 .uk-visible-large -->
        
        <div class="uk-width-medium-4-6">
            <h2 class="latest-posted-title">
                <i class="icon-th-large"></i> Latest Posted
            </h2><!-- .latest-posted-title -->
            
            <div class="uk-grid uk-grid-small latest-posted">
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Steins;Gate-0-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 4</div>
                            
                            <div class="posted-meta">Abril 11, 2018</div>
                    
                            <h3 class="posted-title">
                                Steins;Gate 0 (01/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Alice-or-Alice-Siscon-Niisan-to-Futago-no-Imouto-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 1</div>
                            
                            <div class="posted-meta">Abril 11, 2018</div>
                    
                            <h3 class="posted-title">
                                Alice or Alice: Siscon Niisan to Futago no Imouto (02/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Last-Period-Owarinaki-Rasen-no-Monogatari-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 1</div>
                            
                            <div class="posted-meta">Abril 11, 2018</div>
                    
                            <h3 class="posted-title">
                                Last Period: Owarinaki Rasen no Monogatari (01/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Boruto-Next-Generations-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 3</div>
                            
                            <div class="posted-meta">Abril 11, 2018</div>
                    
                            <h3 class="posted-title">
                                Boruto: Naruto Next Generations (53/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Yu-Gi-Oh!-VRAINS-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 6</div>
                            
                            <div class="posted-meta">Abril 11, 2018</div>
                    
                            <h3 class="posted-title">
                                Yu-Gi-Oh! VRAINS (47/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/3D-Kanojo-Real-Girl-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 2</div>
                            
                            <div class="posted-meta">Abril 10, 2018</div>
                    
                            <h3 class="posted-title">
                                3D Kanojo: Real Girl (02/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Lupin-III-Part-V-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 2</div>
                            
                            <div class="posted-meta">Abril 10, 2018</div>
                    
                            <h3 class="posted-title">
                                Lupin III: Part V (02/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Hitori-no-Shita-The-Outcast-2nd-Season-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 0</div>
                            
                            <div class="posted-meta">Abril 10, 2018</div>
                    
                            <h3 class="posted-title">
                                Hitori no Shita: The Outcast 2nd Season (13/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Tachibanakan-Triangle-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 4</div>
                            
                            <div class="posted-meta">Abril 10, 2018</div>
                    
                            <h3 class="posted-title">
                                Tachibanakan Triangle (02/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Tokyo-Ghoul-re-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 2</div>
                            
                            <div class="posted-meta">Abril 10, 2018</div>
                    
                            <h3 class="posted-title">
                                Tokyo Ghoul:re (02/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Gundam-Build-Divers-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 1</div>
                            
                            <div class="posted-meta">Abril 10, 2018</div>
                    
                            <h3 class="posted-title">
                                Gundam Build Divers (02/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
                
                <div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="single-posted">
                        <a href="post.html">
                            <div class="posted-thumb">
                                <img src="{{asset('frontend/img/Black-Clover-300x168.jpg')}}">
                            </div><!-- .posted-thumb -->
                            
                            <div class="posted-comments"><i class="icon-comment"></i> 2</div>
                            
                            <div class="posted-meta">Abril 10, 2018</div>
                    
                            <h3 class="posted-title">
                                Black Clover (27/??) [HD] [Subbed]
                            </h3><!-- .posted-title -->
                        </a>
                    </div><!-- .single-posted -->
                </div><!-- .uk-width-small-1-3 .uk-width-medium-1-2 .uk-width-large-1-3 -->
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
        
        <div class="uk-width-medium-2-6">
            <div class="site-widgets">
                <div class="single-widget">
                    <h4 class="widget-title">
                        <i class="icon-search"></i> Search
                    </h4><!-- .widget-title -->
                    
                    <form class="uk-form">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-5-6">
                                <input type="text" class="uk-form-large uk-width-1-1" placeholder="Search...">
                            </div><!-- .uk-width-5-6 -->
                            
                            <div class="uk-width-1-6">
                                <button type="submit" class="uk-button uk-width-1-1"><i class="icon-search"></i></button>
                            </div><!-- .uk-width-1-6 -->
                        </div><!-- .uk-grid .uk-grid-collapse -->
                    </form><!-- .uk-form -->
                </div><!-- .single-widget -->
                
                <div class="single-widget">
                    <h4 class="widget-title">
                        <i class="icon-tags"></i> Genres
                    </h4><!-- .widget-title -->
                    
                    <div class="widget-content">
                        <div class="genre-list">
                            <a class="genre" href="genres.html">Action</a>
                            <a class="genre" href="genres.html">Adventure</a>							
                            <a class="genre" href="genres.html">Cooking</a>
                            <a class="genre" href="genres.html">Comedy</a>
                            <a class="genre" href="genres.html">Drama</a>
                            <a class="genre" href="genres.html">Ecchi</a>
                            <a class="genre" href="genres.html">Fantasy</a>
                            <a class="genre" href="genres.html">Gaming</a>
                            <a class="genre" href="genres.html">Gore</a>
                            <a class="genre" href="genres.html">Harem</a>
                            <a class="genre" href="genres.html">Historic</a>
                            <a class="genre" href="genres.html">Horror</a>
                            <a class="genre" href="genres.html">Idol</a>
                            <a class="genre" href="genres.html">Kids</a>
                            <a class="genre" href="genres.html">Magic</a>
                            <a class="genre" href="genres.html">Martial Arts</a>										
                            <a class="genre" href="genres.html">Mecha</a>
                            <a class="genre" href="genres.html">Militar</a>
                            <a class="genre" href="genres.html">Mistery</a>
                            <a class="genre" href="genres.html">Parody</a>
                            <a class="genre" href="genres.html">Post-Apocaliptic</a>
                            <a class="genre" href="genres.html">Psychological</a>
                            <a class="genre" href="genres.html">Romance</a>
                            <a class="genre" href="genres.html">Samurai</a>
                            <a class="genre" href="genres.html">School</a>
                            <a class="genre" href="genres.html">Sci-Fi</a>
                            <a class="genre" href="genres.html">Seinen</a>
                            <a class="genre" href="genres.html">Shoujo</a>
                            <a class="genre" href="genres.html">Shounen</a>
                            <a class="genre" href="genres.html">Slice of Life</a>
                            <a class="genre" href="genres.html">Specials</a>
                            <a class="genre" href="genres.html">Sports</a>
                            <a class="genre" href="genres.html">Supernatural</a>
                            <a class="genre" href="genres.html">Suspense</a>
                            <a class="genre" href="genres.html">Terror</a>
                            <a class="genre" href="genres.html">Vampires</a>
                            <a class="genre" href="genres.html">Yuri</a>
                        </div><!-- .genre-list -->
                    </div><!-- .widget-content -->
                </div><!-- .single-widget -->
                
                <div class="single-widget">
                    <h4 class="widget-title">
                        <i class="icon-megaphone"></i> Advertising
                    </h4><!-- .widget-title -->
                    
                    <div class="widget-content">
                        <a href="#" class="thirty-zero-wide"><img src="{{asset('frontend/img/300x250.png')}}" alt="300x250 Banner"></a>
                    </div><!-- .widget-content -->
                </div><!-- .single-widget -->
            </div><!-- .site-widgets -->
        </div><!-- .uk-width-medium-2-6 -->
    </div><!-- .uk-grid .uk-grid-small -->
</div><!-- .site-content -->
@endsection