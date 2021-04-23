@extends('layouts._frontend')

@section('content')
    <div class="section big-55-height over-hide z-bigger">

        <div class="parallax parallax-top" style="background-image: url('img/rooms.jpg')"></div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Our Rooms</div>
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

    <div class="section padding-top-bottom over-hide background-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="room-box background-white">
                        <div class="room-name">suite tanya</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="img/room3.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">pool suite</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 130$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/5.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <img src="img/1.svg" alt="">
                                <a href="rooms-gallery.html">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="room-box background-white">
                        <div class="room-name">suite helen</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="img/room4.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">small room</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 80$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/4.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/6.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <a href="rooms-gallery.html">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                    <div class="room-box background-white">
                        <div class="room-name">suite andrea</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="img/room5.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">Apartment</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 110$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/5.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <img src="img/6.svg" alt="">
                                <a href="rooms-gallery.html">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
                    <div class="room-box background-white">
                        <div class="room-name">suite diana</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="img/room6.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">big Apartment</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 160$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/5.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <img src="img/6.svg" alt="">
                                <a href="rooms-gallery.html">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                    <div class="room-box background-white">
                        <div class="room-name">suite andrea</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="img/room5.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">Apartment</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 110$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/5.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <img src="img/6.svg" alt="">
                                <a href="rooms-gallery.html">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
                    <div class="room-box background-white">
                        <div class="room-name">suite diana</div>
                        <div class="room-per">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="img/room6.jpg" alt="">
                        <div class="room-box-in">
                            <h5 class="">big Apartment</h5>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 160$</a>
                            <div class="room-icons mt-4 pt-4">
                                <img src="img/5.svg" alt="">
                                <img src="img/2.svg" alt="">
                                <img src="img/3.svg" alt="">
                                <img src="img/6.svg" alt="">
                                <a href="rooms-gallery.html">full info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section background-dark over-hide">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-1.jpg" alt="">
                            <div class="services-text-over">spa salon</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-2.jpg" alt="">
                            <div class="services-text-over">restaurant</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-3.jpg" alt="">
                            <div class="services-text-over">pool</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-4.jpg" alt="">
                            <div class="services-text-over">activities</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
