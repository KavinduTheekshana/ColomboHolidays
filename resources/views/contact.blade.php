@extends('layouts.header')
@section('content')
<!-- INNER-BANNER -->
<div class="inner-banner style-6">
    <img class="center-image" src="img/inner/bg_3.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">

                    <h2 class="color-white">get in touch</h2>
                    <ul class="banner-breadcrumb color-white clearfix">
                        <li><a class="link-blue-2" href="#">Donec gravida euismod felis, quis dictum justo scelerisque
                                in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="detail-wrapper">
    <!-- CONTACT-FORM -->
    <div class="main-wraper padd-40">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <form class="contact-form" action="#">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-style-1 type-2 color-2">
                                    <input type="text" required="" placeholder="Enter your First name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-style-1 type-2 color-2">
                                    <input type="text" required="" placeholder="Enter your Last name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="input-style-1 type-2 color-2">
                                    <input type="email" required="" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <textarea class="area-style-1 color-1" required=""
                                    placeholder="Enter your comment"></textarea>
                                <button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>submit
                                        comment</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contact-about">
                        <h4 class="color-dark-2"><strong>contact info</strong></h4>
                        <p class="color-grey-3">Donec gravida euismod felis, quis dictum justo scelerisque in. Aenean
                            nec lacus ipsum. Suspendisse vel lobortis libero, eu imperdiet purus. Aenean nec lacus
                            ipsum.</p>
                    </div>
                    <div class="contact-info">
                        <h4 class="color-dark-2"><strong>contact info</strong></h4>
                        <div class="contact-line color-grey-3"><img src="img/phone_icon_2_dark.png" alt="">Phone: <a
                                class="color-dark-2" href="tel:93123456789">+93 123 456 789</a></div>
                        <div class="contact-line color-grey-3"><img src="img/mail_icon_b_dark.png" alt="">Email us: <a
                                class="color-dark-2 tt" href="#">admin@colomboholidays.com</a></div>
                        <div class="contact-line color-grey-3"><img src="img/loc_icon_dark.png" alt="">Address: <span
                                class="color-dark-2 tt">Aenean vulputate porttitor</span></div>
                    </div>
                    <div class="contact-socail">
                        <a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-skype"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-instagram"></i></a>
                        <a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- MAP BLOCK -->
<div class="map-block">
    <div id="map-canvas" class="style-2" data-lat="6.9157" data-lng="79.8636" data-zoom="15" data-style="2">
    </div>
    <div class="addresses-block">
        <a data-lat="6.9157" data-lng="79.8636" data-string="Colombo Municipal Council"></a>
    </div>
</div>
@endsection