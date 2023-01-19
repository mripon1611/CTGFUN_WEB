@extends('front.layout.main')
@section('content')

<!--/breadcrumbs -->
<div class="w3l-breadcrumbs">
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="{{url('/')}}">Home</a> » <span class="breadcrumb_last" aria-current="page">My Favorite</span>
        </div>
    </nav>
</div>
<!--//breadcrumbs -->

<!--grids-sec1-->
<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-4">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <div class="headerhny-left">
                        <h3 class="hny-title">Favorite</h3>
                    </div>
                </div>
            </div>
            <div class="w3l-populohny-grids">
                @if(count($responses['contents'])>0)
                @foreach($responses['contents'] as $content)
                <div class="item vhny-grid">
                    <div class="box16 mb-0">
                        <a href="{{ url('content-details',$content['contentid']) }}">
                            <figure>
                                <img class="img-fluid" src="{{$content['cover']}}" alt="">
                            </figure>
                            <div class="box-content">
                                <h3 class="title">{{$content['title']}}</h3>
                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> {{$content['runtime'] != "N/A" ? $content['runtime'] : ''}}

                                    </span>

                                    <span class="post fa fa-heart text-right"></span>
                                </h4>
                            </div>
                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>

    </div>
</section>
<!--//grids-sec1-->

@endsection