<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    @include('layouts._meta_head')
</head>
<body>

<div class="loader">
    <div class="loader__figure"></div>
</div>

<svg class="hidden">
    <svg id="icon-nav" viewBox="0 0 152 63">
        <title>navarrow</title>
        <path d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z"/>
    </svg>
</svg>


<!-- Nav and Logo
================================================== -->

<nav id="menu-wrap" class="menu-back cbp-af-header">
    <div class="menu-top background-black">
        <div class="container">
            <div class="row">
                <div class="col-6 px-0 px-md-3 pl-1 py-3">
                    <span class="call-top">call us:</span> <a href="#" class="call-top">(381) 60 422 4256</a>
                </div>
                <div class="col-6 px-0 px-md-3 py-3 text-right">
                    <a href="#" class="social-top">fb</a>
                    <a href="#" class="social-top">tw</a>
                    <div class="lang-wrap">
                        eng
{{--                        <ul>--}}
{{--                            <li><a href="#">ger</a></li>--}}
{{--                            <li><a href="#">rus</a></li>--}}
{{--                            <li><a href="#">ser</a></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <a href="/" >
            <div class="logo">
                <h5 class="text-white">{!! config('app.name') !!}</h5>
{{--                <img src="img/logo.png" alt="">--}}
            </div>
        </a>
        <ul>
            <li>
                <a class="curent-page" href="/" >home</a>
            </li>
            <li>
                <a href="{{ route('page.our-rooms') }}" >rooms</a>
                <ul>
                    <li><a href="{{ route('page.our-rooms') }}">Our Rooms</a></li>
                    <li><a href="{{ route('page.room-gallery') }}">Room Gallery</a></li>
{{--                    <li><a href="rooms-video.html">Room Video</a></li>--}}
                </ul>
            </li>
{{--            <li>--}}
{{--                <a href="#" >pages</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Explore</a></li>--}}
{{--                    <li><a href="search.html">Search</a></li>--}}
{{--                    <li><a href="tandc.html">Terms &amp; Conditions</a></li>--}}
{{--                    <li><a href="services.html">Services</a></li>--}}
{{--                    <li><a href="restaurant.html">Restaurant</a></li>--}}
{{--                    <li><a href="#">Testimonials</a></li>--}}
{{--                    <li><a href="#">Gallery</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li>
                <a href="{{ route('page.about-us') }}">about us</a>
            </li>
            <li>
                <a href="{{ route('page.news') }}">news</a>
            </li>
            <li>
                <a href="{{ route('page.contact') }}">contact</a>
            </li>
            <li>
                <a href="#"><span>book now</span></a>
            </li>
        </ul>
    </div>
</nav>

<!-- Primary Page Layout
================================================== -->
@yield('content')
{{--<div class="section">--}}
{{--    <div id="owl-sep-2" class="owl-carousel owl-theme">--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/1.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/1-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/2.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/2-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/3.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/3-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/4.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/4-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/5.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/5-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/6.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/6-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/7.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/7-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/8.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/8-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/9.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/9-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/10.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/10-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/1.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/1-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/2.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/2-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/3.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/3-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/4.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/4-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <a href="img/gallery/5.jpg" data-fancybox="gallery">--}}
{{--                <div class="img-wrap gallery-small">--}}
{{--                    <img src="img/gallery/5-s.jpg" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@include('layouts._footer')

</body>
</html>
