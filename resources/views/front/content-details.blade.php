@extends('front.layout.main')
@section('content')

@if($responses)

<!--/breadcrumbs -->
<div class="w3l-breadcrumbs">
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="{{url('/')}}">Home</a> » <span class="breadcrumb_last" aria-current="page">Details</span>
        </div>
    </nav>
</div>
<!--//breadcrumbs -->

<section class="w3l-text-8 genre-single">
    <div class="container">
        <div class="d-grid-1">
            {{-- <div class="w3l-about4" id="about" style="">
                <div class="new-block" style="">
                  <div class="pop-img-ab position-relative">
                    <video id="my-video" class="video-js" controls preload="auto" width="1150px" height="100%" poster="{{$responses['poster']}}" data-setup='{"fluid": true, "autoplay":true, "playbackRates": [0.5,1,1.25,1.5, 2]
                }'>
                        <source src="{{$responses['urls'][0]['serverurl']}}" type="video/mp4" />
                        <source src="{{$responses['urls'][0]['serverurl']}}" type="video/webm" />
                        <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                        >
                        </p>
                    </video>
                  </div>
                </div>
            </div> --}}
            <div class="text">
                {{-- <div class="w3l-about4" id="about">
                    <div class="new-block">
                        <div class="pop-img-ab position-relative" style="background:url({{ $responses['poster'] }}) no-repeat center;">
                            <div class="history-info">

                                <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                </a>

                                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://player.vimeo.com/video/323491174" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                            </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                                    <a href="javascript:void(0)" onclick="addOrRemoveFav('{{$responses['movieid']}}')"><span class="fa {{$responses['infav'] == 1 ? 'fa-heart' : 'fa-heart-o'}}" id="idAddOrRemove"></span> Favorite</a>
                                    <input type="hidden" id="idInFav" value="{{$responses['infav']}}">
                                    <script>
                                        function addOrRemoveFav(movieid){
                                            let idAddOrRemove = document.getElementById("idAddOrRemove");
                                            let idInFav = document.getElementById("idInFav");
                                            
                                            $.ajax({
                                                url: "{{ url('addOrRemoveFav') }}",
                                                method: "POST",
                                                data: {
                                                    '_token': '{{ csrf_token() }}',
                                                    'movieid': movieid,
                                                    'infav': idInFav.value == 1 ? 0 : 1,
                                                },
                                                success: function(data) {
                                                    if(idInFav.value == 0){
                                                        idAddOrRemove.className = 'fa fa-heart';
                                                        idInFav.value = 1;
                                                    }else{
                                                        idAddOrRemove.className = 'fa fa-heart-o';
                                                        idInFav.value = 0;
                                                    }
                                                } 
                                            });
                                        }
                                    </script>
                                </li>
                            </ul>
                            <div class="share-more d-flex mt-4">
                                <a href="#" class="btn read-button">Play Now </a>
                                @if($responses['trailer'] != "")

                                <div class="history-info">

                                    <a href="#small-dialog" class="btn read-button ml-3 popup-with-zoom-anim play-view text-center position-absolute">
                                        Preview
                                    </a>
    
                                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                        @php
                                            $url = str_replace("watch?v=", "embed/",$responses['trailer'])
                                        @endphp
                                        <iframe class="embed-responsive-item" src="{{ $url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="genre-single-page mb-lg-5 mb-4">
                    <div class="row ab-grids-sec">
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
                                <p><b>Writers :</b> </p>
                                <p>{{$responses['writer']}}</p>
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


  <script src="https://vjs.zencdn.net/7.21.1/video.min.js"></script>

@endsection



