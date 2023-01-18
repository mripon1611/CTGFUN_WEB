@extends('front.layout.main')
@section('content')
@foreach ($responses as $singleRes)
@if ($singleRes['contenttype'] == 4)
<!-- main-slider -->
<section class="w3l-main-slider position-relative" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            @foreach ($singleRes['contents'] as $item)
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" style="background:url({{ $item['cover'] }}) no-repeat center !important; width:100%;">
                        <div class="banner-info">
                            <!-- <h3>{{ $item['title'] }}</h3> -->
                            <!-- <p>{{ $item['plot'] }}</p> -->
                            <a href="{{url('/')}}#small-dialog1" class="popup-with-zoom-anim play-view1">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                                <h6>Watch Trailer</h6>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://player.vimeo.com/video/323491174" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- //banner-slider-->
<!-- main-slider -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->
</div>
@endif

@if($singleRes['contenttype'] == 3)
<!--grids-sec1-->
<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-3">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <div class="headerhny-left">
                        <h3 class="hny-title">{{$singleRes['catname']}}</h3>
                    </div>
                    <div class="headerhny-right text-lg-right">
                        <h4><a class="show-title" href="{{url('show-all',$singleRes['catcode'])}}">Show all</a></h4>
                    </div>
                </div>
            </div>
            <div class="w3l-populohny-grids">
                @foreach($singleRes['contents'] as $index => $item)
                @if($index <= 11) <div class="item vhny-grid">
                    <div class="box16">
                        <a href="{{ url('content-details',$item['contentid']) }}">
                            <figure>
                                <img class="img-fluid" src="{{$item['cover']}}" alt="">
                            </figure>
                            <div class="box-content">
                                <h3 class="title">{{$item['title']}}</h3>
                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> {{ $item['year']}}

                                    </span>

                                    <span class="post fa fa-heart text-right"></span>
                                </h4>
                            </div>
                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                        </a>
                    </div>
            </div>
            @else
            @break
            @endif
            @endforeach
        </div>
    </div>
    </div>
</section>
<!--//grids-sec1-->
@endif

@if($singleRes['contenttype'] == 2)
<!--mid-slider -->
<section class="w3l-mid-slider position-relative">
    <div class="companies20-content">
        <div class="owl-mid owl-carousel owl-theme">
            @foreach($singleRes['contents'] as $index => $item)
            @if($index <= 4) <div class="item">
                <li>
                    <div class="slider-info mid-view bg bg2">
                        <div class="container">
                            <div class="mid-info">
                                <span class="sub-text">{{$item['genre']}}</span>
                                <h3>{{$item['title']}}</h3>
                                <p>{{$item['year']}} ‧ {{$item['runtime'] !="N/A" ? $item['runtime'] : ''}}</p>
                                <a class="watch" href="{{ url('content-details',$item['contentid']) }}"><span class="fa fa-play" aria-hidden="true"></span>
                                    Watch Trailer</a>
                            </div>
                        </div>
                    </div>
                </li>
        </div>
        @else
        @break
        @endif
        @endforeach
    </div>
    </div>
</section>
<!-- //mid-slider-->
@endif
@if($singleRes['contenttype'] == 1)
<!--grids-sec2-->
<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-3">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <div class="headerhny-left">
                        <h3 class="hny-title">{{$singleRes['catname']}}</h3>
                    </div>
                    <div class="headerhny-right text-lg-right">
                        <h4><a class="show-title" href="{{url('show-all',$singleRes['catcode'])}}">Show all</a></h4>
                    </div>
                </div>
            </div>
            <div class="owl-three owl-carousel owl-theme">
                @foreach($singleRes['contents'] as $index => $item)
                @if($index <= 11) <div class="item vhny-grid">
                    <div class="box16 mb-0">
                        <a href="{{ url('content-details',$item['contentid']) }}">
                            <figure>
                                <img class="img-fluid" src="{{$item['cover']}}" alt="">
                            </figure>
                            <div class="box-content">
                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> {{$item['runtime'] !="N/A" ? $item['runtime'] : ''}}

                                    </span>

                                    <span class="post fa fa-heart text-right"></span>
                                </h4>
                            </div>
                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <h3> <a class="title-gd" href="#">{{$item['title']}}</a></h3>
                    <p>{{$item['year']}}</p>
                    <!-- <div class="button-center text-center mt-4">
                        <a href="#" class="btn watch-button">Watch now</a>
                    </div> -->

            </div>
            @else
            @break
            @endif
            @endforeach
        </div>
    </div>

    </div>
</section>
<!--grids-sec2-->
@endif

@endforeach




<!--/tabs-->
<!-- <section class="w3l-albums py-5" id="projects">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div id="parentHorizontalTab">
                    <ul class="resp-tabs-list hor_1">
                        <li>Recent Movies</li>
                        <li>Popular Movies</li>
                        <li>Trend Movies</li>
                        <div class="clear"></div>
                    </ul>
                    <div class="resp-tabs-container hor_1">
                        <div class="albums-content">
                            <div class="row">
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}">

                                                <img src="{{asset('ps/assets/images/m6.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Long Shot</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m5.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Jumanji</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m4.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Little Women</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m1.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Rocketman</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m2.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Doctor Sleep</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="genre.html"><img src="{{asset('ps/assets/images/m3.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Knives Out</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/n1.jpg')}}" class="img-fluid" alt="author image">
                                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">No Time to Die</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/n2.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Mulan</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/n3.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Free Guy</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="albums-content">
                            <div class="row">
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m1.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Rocketman</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m2.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Doctor Sleep</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m3.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Knives Out</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m7.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Frozen 2</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m8.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Toy Story 4</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m9.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Joker</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="albums-content">
                            <div class="row">
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m7.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Frozen 2</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m8.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Toy Story 4</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m9.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Joker</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m10.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">Alita</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m11.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">The Lego</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                    <div class="slider-info">
                                        <div class="img-circle">
                                            <a href="{{asset('ps/genre.html')}}"><img src="{{asset('ps/assets/images/m12.jpg')}}" class="img-fluid" alt="author image">
                                                <div class="overlay-icon">

                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="message">
                                            <p>English</p>
                                            <a class="author-book-title" href="{{asset('ps/genre.html')}}">The Hustle</a>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                </span>

                                                <span class="post fa fa-heart text-right"></span>
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection