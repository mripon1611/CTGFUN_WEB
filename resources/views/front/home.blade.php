@extends('front.layout.main')
@section('content')
@foreach ($responses as $singleRes)
@if ($singleRes['contenttype'] == 4)
<!-- main-slider -->
<section class="w3l-main-slider position-relative py-5" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            @foreach ($singleRes['contents'] as $item)
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" style="background:url({{ $item['cover'] }}) no-repeat center !important; background-size:cover !important;">
                        <div class="banner-info">
                            <h3 class="py-4">{{ $item['title'] }}</h3>
                            <!-- <p>{{ $item['plot'] }}</p> -->
                            <a href="{{ url('content-details',$item['contentid']) }}" class="popup-with-zoom-anim play-view1">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                                <h6>Play Now</h6>
                            </a>
                            {{-- <a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                                <h6>Play Now</h6>
                            </a> --}}
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            {{-- <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://player.vimeo.com/video/323491174" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                            </div> --}}
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

@if($singleRes['contenttype'] == 3 || $singleRes['contenttype'] == 2)
<!--grids-sec1-->
<section class="w3l-grids">
    <div class="">
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

                                    {{-- <span class="post fa fa-heart text-right"></span> --}}
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


@if($singleRes['contenttype'] == 1)
<!--grids-sec2-->
<section class="w3l-grids">
    <div class="">
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

                                    {{-- <span class="post fa fa-heart text-right"></span> --}}
                                </h4>
                            </div>
                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <h3> <a class="title-gd" href="{{ url('content-details',$item['contentid']) }}">{{$item['title']}}</a></h3>
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

@endsection