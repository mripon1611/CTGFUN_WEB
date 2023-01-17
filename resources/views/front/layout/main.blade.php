
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ProShowz a Entertainment Category Bootstrap Responsive Website Template | Home
	:: W3layouts</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{ asset('ps/assets/css/style-liberty.css') }}">
	<!-- Template CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&amp;display=swap"
		rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
<script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src="{{asset('ps/assets/js/autotrack.js')}}"></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="{{asset('ps/assets/css/font-awesome.min.css')}}">
<!-- New toolbar-->

<!-- <div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div> -->

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>


	<!-- header -->
	@include('front.layout.header')
	<!-- //header -->

	{{-- main body --}}
	@yield('content')
	{{-- main body end --}}
	
	<!-- //tabs-->
	<div style="margin: 8px auto; display: block; text-align:center;">

		<!---728x90--->
 
	</div>
	<!-- footer-66 -->
	@include('front.layout.footer')
	<!--//footer-66 -->


<div id = "v-w3layouts"></div>

<script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '//a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
</body>

</html>
<!-- responsive tabs -->
@include('front.layout.main-script')