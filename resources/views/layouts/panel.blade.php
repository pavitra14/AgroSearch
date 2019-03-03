<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', config("app.name"))</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="{{asset('icons/ios/ios-appicon-180-180.png')}}">
	<script src="{{asset('js/pace.min.js')}}"></script>

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('css/flags.css')}}">
	<link rel="stylesheet" href="{{asseT('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('css/scrollbar.css')}}">
	<link rel="stylesheet" href="{{asset('css/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
	<link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('css/dbresponsive.css')}}">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css" integrity="sha256-SMGbWcp5wJOVXYlZJyAXqoVWaE/vgFA5xfrH3i/jVw0=" crossorigin="anonymous" />


	<script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>

	@yield('head', '')
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--************************************
                Wrapper Start
        *************************************-->
        <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
            @include('components.dashboard.nav')
            @yield('heading')
            <!--************************************
                    Main Start
            *************************************-->
            <main id="tg-main" class="tg-main tg-haslayout">
                @include('components.dashboard.alerts')
                @yield('content')
                

                   
            </main>
            <!--************************************
                    Main End
            *************************************-->
            <!--************************************
                    Footer Start
            *************************************-->
            <footer id="tg-footer" class="tg-footer tg-haslayout">
                <nav class="tg-footernav">
                    <ul>
                        <li><a href="javascript:void(0);">Listing Policy</a></li>
                        <li><a href="javascript:void(0);">Terms of Use</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                    </ul>
                </nav>
                <span class="tg-copyright">2019 All Rights Reserved &copy; {{config('app.name')}}</span>
            </footer>
            <!--************************************
                    Footer End
            *************************************-->
        </div>
        <!--************************************
                Wrapper End
        *************************************-->
        @yield('before_body','')
	<script src="{{asset('js/vendor/jquery-library.js')}}"></script>
	<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	<script src="{{asset('js/tinymce/tinymce.min-apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci.js')}}"></script>
	<script src="http://exprostudio.com/html/classified/JS/responsivethumbnailgallery.js"></script>
	<script src="{{asset('js/jquery.flagstrap.min.js')}}"></script>
	<script src="{{asset('js/backgroundstretch.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/jquery.vide.min.js')}}"></script>
	<script src="{{asset('js/jquery.collapse.js')}}"></script>
	<script src="{{asset('js/scrollbar.min.js')}}"></script>
	<script src="http://exprostudio.com/html/classified/JS/chartist.min.js"></script>
	<script src="{{asset('js/prettyPhoto.js')}}"></script>
	<script src="{{asset('js/jquery-ui.js')}}"></script>
	<script src="{{asset('js/countTo.js')}}"></script>
	<script src="{{asset('js/appear.js')}}"></script>
	<script src="{{asset('js/gmap3.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/en-gb.js" integrity="sha256-VWXSrU6D6hQJ7MEZ9062PvZDwmeRuZ8eE/ToQ2N3QjA=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
    <script>
			if ('serviceWorker' in navigator ) {
			  window.addEventListener('load', function() {
				  navigator.serviceWorker.register('{{asset("service-worker.js")}}').then(function(registration) {
					  // Registration was successful
					  console.log('ServiceWorker registration successful with scope: ', registration.scope);
				  }, function(err) {
					  // registration failed :(
					  console.log('ServiceWorker registration failed: ', err);
				  });
			  });
		  }
		</script>
		@yield('script','')
    </body>
    </html>