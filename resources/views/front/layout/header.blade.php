<header id="site-header" class="w3l-header fixed-top">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <h1><a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('ps/assets/images/ctg-fun-fab-icon.png')}}" alt="">
                    CTG FUN </a></h1>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ url()->current() == url('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{url('/')}}#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Genre <span class="fa fa-angle-down"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(count($responsesGenre)>0)
                            @foreach($responsesGenre as $genre)
                            <a class="dropdown-item" href="{{ url('show-all',$genre['catcode']) }}">{{$genre['catname']}}</a>
                            @endforeach
                            @endif
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Subscription</a>
                    </li> --}}
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{url('/')}}#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog <span class="fa fa-angle-down"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="blog.html">Blog</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                        </div>
                    </li> -->

                    @if(session()->has('username'))
                    <li class="nav-item {{ url()->current() == url('my-favorite') ? 'active' : '' }}">
                        
                        <a class="nav-link" href="{{ url('my-favorite') }}">My Favorite</a> 
                        
                    </li>
                    @endif

                    <li class="nav-item {{ url()->current() == url('login') ? 'active' : '' }}">
                        @if(session()->has('username'))
                        <a class="nav-link" href="{{ url('logout') }}">Logout</a>  
                                                   
                        @else
                        <a class="nav-link" href="{{ url('login') }}">Login</a> 
                        @endif
                    </li>
                </ul>

                <!--/search-right-->
                <!--/search-right-->
                <div class="search-right">
                    <a href="{{url('/')}}#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span class="fa fa-search ml-3" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <form action="{{url('/')}}#" method="post" class="search-box">
                                <input type="search" placeholder="Search your Keyword" name="search" required="required" autofocus="">
                                <button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
                            </form>
                            <div class="browse-items">
                                <h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
                                <ul class="search-items">
                                    @if(count($responsesGenre)>0)
                                        @foreach($responsesGenre as $genre)
                                        <li><a href="{{ url('show-all',$genre['catcode']) }}">{{$genre['catname']}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <a class="close" href="{{url('/')}}#close">×</a>
                    </div>
                    <!-- /search popup -->
                    <!--/search-right-->
                </div>


            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </div>
    </nav>
    <!--//nav-->
</header>