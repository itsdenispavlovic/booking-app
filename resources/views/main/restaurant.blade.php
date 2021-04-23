@extends('layouts._frontend')

@section('content')

    <div class="section big-55-height over-hide z-bigger">

        <div id="poster_background-res"></div>
        <div id="video-wrap" class="parallax-top">
            <video id="video_background" preload="auto" autoplay loop="loop" muted="muted" poster="img/trans.png">
                <source src="video/video-res.mp4" type="video/mp4">
            </video>
        </div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Restaurant</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom-smaller background-dark-2 over-hide">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="color-grey">A new dimension of luxury.</h5>
                    <p class="color-white mt-3 mb-3"><em>our presentation, 0:48 min</em></p>
                    <a href="https://vimeo.com/54851233" class="video-button" data-fancybox><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top over-hide">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="services-box restaurant text-center">
                        <img src="img/res-1.png" alt="">
                        <h5 class="mt-3">High quality foods</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mt-md-0">
                    <div class="services-box restaurant text-center">
                        <img src="img/res-2.png" alt="">
                        <h5 class="mt-3">Inspiring recipes</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mt-md-0">
                    <div class="services-box restaurant text-center">
                        <img src="img/res-3.png" alt="">
                        <h5 class="mt-3">Salutary meals</h5>
                        <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam.</p>
                        <a class="mt-1 btn btn-primary" href="services.html">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom z-bigger">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 align-self-center">
                    <div class="subtitle with-line text-center mb-4">main dishes</div>
                    <h3 class="text-center padding-bottom-small">Our menu</h3>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-6" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                    <div class="restaurant-box">
                        <img src="img/food1.jpg" alt="">
                        <h6><span>imported salmon steak</span></h6>
                        <p><span>salmon / veggies / oil</span></p>
                        <h5><span>$32</span></h5>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
                    <div class="restaurant-box">
                        <img src="img/food2.jpg" alt="">
                        <h6><span>tuna roast source</span></h6>
                        <p><span>tuna / potatoes / rice</span></p>
                        <h5><span>$47</span></h5>
                    </div>
                </div>
                <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                    <div class="restaurant-box">
                        <img src="img/food3.jpg" alt="">
                        <h6><span>salted fried chicken</span></h6>
                        <p><span>chicken / olive oil / salt</span></p>
                        <h5><span>$26</span></h5>
                    </div>
                </div>
                <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
                    <div class="restaurant-box">
                        <img src="img/food4.jpg" alt="">
                        <h6><span>crab with curry sources</span></h6>
                        <p><span>crab / potatoes / rice</span></p>
                        <h5><span>$64</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom-smaller background-dark over-hide z-too-big">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-xl-4 px-sm-0">
                                <div class="booking-sep-wrap">
                                    <div class="input-daterange input-group" id="flight-datepicker-1">
                                        <div class="form-item">
                                            <span class="fontawesome-calendar"></span>
                                            <input class="input-sm" type="text" autocomplete="off" id="start-date" name="start" placeholder="check-in" data-date-format="DD, MM d"/>
                                            <span class="date-text date-depart"></span>
                                        </div>
                                        <div class="form-item">
                                            <span class="fontawesome-calendar"></span>
                                            <input class="input-sm" type="text" autocomplete="off" id="end-date" name="end" placeholder="check-out" data-date-format="DD, MM d"/>
                                            <span class="date-text date-return"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-2 px-sm-0">
                                <div class="quantity">
                                    <input type="number" min="1" max="9999" step="1" value="1" >
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-2 px-sm-0">
                                <a class="booking-button-big" href="search.html">check<br>availability</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
