<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />

    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.structure.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Colombo Holidays | {{$titleIdentity}}</title>


</head>

<body data-color="theme-1">



    <div class="loading">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_four"></div>
                <div class="object object_three"></div>
                <div class="object object_two"></div>
                <div class="object object_one"></div>
            </div>
        </div>
    </div>

    <header class="color-1 hovered menu-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav">
                        <a href="index.html" class="logo">
                            <img src="img/theme-1/logo_dark.png" alt="lets travel">
                        </a>
                        <div class="nav-menu-icon">
                            <a href="#"><i></i></a>
                        </div>
                        <nav class="menu">
                            <ul>
                                <li class="type-1 {{$activeStatusHome}}">
                                    <a href="/">home<span class="fa fa-angle-down"></span></a>
                                </li>

                                <li class="type-1 ">
                                    <a href="ContactUs">Tours<span class="fa fa-angle-down"></span></a>
                                </li>


                                <li class="type-1 ">
                                    <a href="ContactUs">Gallery<span class="fa fa-angle-down"></span></a>
                                </li>

                                <li class="type-1 ">
                                    <a href="ContactUs">News<span class="fa fa-angle-down"></span></a>
                                </li>

                                <li class="type-1 {{$activeStatusContactUs}}">
                                    <a href="ContactUs">Contact Us<span class="fa fa-angle-down"></span></a>
                                </li>







                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>



    @yield('content')



    <footer class="bg-dark type-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <img src="img/theme-1/logo.png" alt="" class="logo-footer">
                        <div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore magna aliqua. Ut aliquip ex ea commodo consequat.</div>
                        <div class="footer-share">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-pinterest"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
                    <div class="footer-block">
                        <h6>Travel News</h6>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="#">
                                <img class="img-responsive" src="img/home_6/news_1.jpg" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                                <span class="date-f">Mar 18, 2015</span>
                                <a href="#" class="r-more">read more</a>
                            </div>
                        </div>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="#">
                                <img class="img-responsive" src="img/home_6/news_2.jpg" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                                <span class="date-f">Mar 18, 2015</span>
                                <a href="#" class="r-more">read more</a>
                            </div>
                        </div>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="#">
                                <img class="img-responsive" src="img/home_6/news_3.jpg" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                                <span class="date-f">Mar 18, 2015</span>
                                <a href="#" class="r-more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <h6>Tags:</h6>
                        <a href="#" class="tags-b">flights</a>
                        <a href="#" class="tags-b">traveling</a>
                        <a href="#" class="tags-b">sale</a>
                        <a href="#" class="tags-b">cruises</a>
                        <a href="#" class="tags-b">cars</a>
                        <a href="#" class="tags-b">hotels</a>
                        <a href="#" class="tags-b">tours</a>
                        <a href="#" class="tags-b">booking</a>
                        <a href="#" class="tags-b">countries</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-block">
                        <h6>Contact Info</h6>
                        <div class="contact-info">
                            <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Aenean
                                    vulputate porttitor</span></div>
                            <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a
                                    href="tel:93123456789">+93
                                    123 456 789</a></div>
                            <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a
                                    href="mailto:">letstravel@mail.com</a></div>
                            <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a
                                    href="#">let’s_travel@world.com</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-link bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <span>&copy; 2015 All rights reserved. LET'STRAVEL</span>
                        </div>
                        <ul>
                            <li><a class="link-aqua" href="#">Privacy Policy </a></li>
                            <li><a class="link-aqua" href="#">About Us</a></li>
                            <li><a class="link-aqua" href="#">Support </a></li>
                            <li><a class="link-aqua" href="#">FAQ</a></li>
                            <li><a class="link-aqua" href="#">Blog</a></li>
                            <li><a class="link-aqua" href="#"> Forum</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/jquery.viewportchecker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/all.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>

</html>