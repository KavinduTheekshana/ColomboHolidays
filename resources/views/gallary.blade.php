@extends('layouts.header')
@section('content')

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
    <img class="center-image" src="img/gallery/bg_3.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h2 class="color-white">gallery</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TEAM -->
<div class="main-wraper padd-70-0">
    <div class="filter style-2">
        <ul class="filter-nav">
            <li class="selected"><a href="#all" data-filter="*">all</a></li>
            <li><a href="#tours" data-filter=".tours">tours</a></li>
            <li><a href="#cruises" data-filter=".cruises">cruises</a></li>
            <li><a href="#flights" data-filter=".flights">flights</a></li>
            <li><a href="#hotels" data-filter=".hotels">hotels</a></li>
        </ul>
    </div>
    <div class="filter-content row popup-gallery">
        <div class="grid-sizer col-mob-12 col-xs-6 col-sm-4 no-padding"></div>

        @foreach ($gallery as $item)
        <div class="item {{$item->tags}} gal-item style-2 col-mob-12 col-xs-6 col-sm-4 no-padding">
            <a class="black-hover" href="{{$item->image}}">
                <img class="img-full img-responsive" src="{{$item->image}}" alt="">
                <div class="tour-layer delay-1"></div>
                <div class="vertical-align">
                    <h3 class="color-white"><b>{{$item->title}}</b></h3>
                    <h5 class="color-white">{{$item->subtitle}}</h5>
                </div>
            </a>
        </div>

        @endforeach



    </div>
</div>


@endsection