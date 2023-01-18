@extends('front.layout.main')
@section('content')

@if($responses)
<section class="w3l-text-8 genre-single">
    <div class="container py-5">
        <div class="d-grid-1 py-lg-4">
            <div class="text">
                <div class="genre-single-page my-lg-5 my-4">
                    <div class="row ab-grids-sec align-items-center">
                        <div class="col-lg-4 gen-right">
                            <a href="#"><img class="img-fluid" src="{{$responses['poster']}}"></a>
                        </div>
                        <div class="col-lg-8 gen-left pl-lg-4 mt-lg-0 mt-5">

                            <h3 class="hny-title">{{$responses['title']}}</h3>
                            <p class="mt-2">{{ $responses['plot'] }}</p>
                            <ul class="admin-post mt-1">
                                <li>
                                    <a href="#"><span class="fa fa-clock-o"></span> {{$responses['released']}}</a>
                                </li>
                                <li>
                                    <a href="#"><span class="fa fa-user"></span> Admin</a>
                                </li>
                                <li>
                                    <a href="#"><span class="fa fa-heart-o"></span> 50</a>
                                </li>
                                <li>
                                    <a href="#"><span class="fa fa-comments-o"></span> 20
                                        Comments</a>
                                </li>
                            </ul>
                            <div class="share-more d-flex mt-4">
                                <a href="#" class="btn read-button">Buy From $10 </a>
                                <a href="#" class="btn read-button ml-3">Preview</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="genre-single-page mb-lg-5 mb-4">
                    <div class="row ab-grids-sec">
                        <!-- <div class="col-lg-5 gen-right-1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam id quisquam ipsam
                                molestiae ad eius accusantium? Nulla dolorem perferendis inventore! posuere cubilia
                                Curae;
                                Nunc non risus in justo convallis feugiat.</p>
                        </div> -->
                        <div class="col-lg-12 gen-right-1">
                            <div class="mb-3">
                                <p><b>Actors :</b> </p>
                                <p>{{$responses['actors']}} </p>
                            </div>
                            <div class="mb-3">
                                <p><b>Director :</b> </p>
                                <p>{{$responses['director']}}</p>
                            </div>
                            <div class="mb-3">
                                <p><b>Director :</b> </p>
                                <p>{{$responses['writer']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3l-about4" id="about">
                    <div class="new-block">
                        <div class="pop-img-ab position-relative" style="background:url({{ $responses['poster'] }}) no-repeat center;">
                            <div class="history-info">
                                <!-- <a href="#popup-video" class="play-view text-center position-absolute">
												  <span class="video-play-icon">
													  <span class="fa fa-play"></span>
												  </span>
											  </a> -->

                                <a href="genre-single.html#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                </a>

                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/395376850" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!--grids-sec1-->
@if(count($responses['similar'])>0)
<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-3">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <div class="headerhny-left">
                        <h3 class="hny-title">Similar Content</h3>
                    </div>
                    <div class="headerhny-right text-lg-right">
                        <h4><a class="show-title" href="{{url('show-all',$responses['similar'][0]['catcode'])}}">Show all</a></h4>
                    </div>
                </div>
            </div>
            <div class="w3l-populohny-grids">
                @foreach($responses['similar'] as $index => $item)
                @if($index <= 7) <div class="item vhny-grid">
                    <div class="box16">
                        <a href="{{ url('content-details',$item['contentid']) }}">
                            <figure>
                                <img class="img-fluid" src="{{$item['cover']}}" alt="">
                            </figure>
                            <div class="box-content">
                                <h3 class="title">{{$item['title']}}</h3>
                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> {{ $item['runtime'] }} ‧ {{ $item['year']}}

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
@endif
<!--//grids-sec1-->
@else
<section class="w3l-text-8 genre-single">
    <div class="container py-5">
        <div class="d-grid-1 py-lg-4">
            <div class="text">

            </div>
        </div>
    </div>

</section>
@endif

@endsection