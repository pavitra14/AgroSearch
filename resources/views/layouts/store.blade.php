<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', config("app.name"))</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('icons/ios/ios-appicon-180-180.png')}}">
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
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    @yield('head', '')
</head>

<body class="tg-home tg-homeone">
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!--************************************
			Wrapper Start
	*************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        @include('components.store.nav')
        @if (Route::currentRouteName() == 'home')
        @include('components.store.homeslider')
        @endif
        @yield('content')
        <!--************************************
				Footer Start
		*************************************-->
        <footer id="tg-footer" class="tg-footer tg-haslayout">

            <div class="clearfix"></div>
            <div class="container">
                <div class="row">
                    <div class="tg-footerinfo">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
                            <div class="tg-widget tg-widgetsearchbylocations">
                                <div class="tg-widgettitle">
                                    <h3>Search By Locations:</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li><a href="javascript:void(0);">- Jabalpur</a></li>
                                        <li><a href="javascript:void(0);">- Benguluru</a></li>
                                        <li><a href="javascript:void(0);">- Indore</a></li>
                                        <li><a href="javascript:void(0);">- Bhopal</a></li>
                                        <li><a href="javascript:void(0);">- Ahemdabad</a></li>
                                        <li><a href="javascript:void(0);">- Chennai</a></li>
                                        <li><a href="javascript:void(0);">- Jaipur</a></li>
                                        <li><a href="javascript:void(0);">- Chandigarh</a></li>
                                        <li><a href="javascript:void(0);">- Ranchi</a></li>
                                        <li><a href="javascript:void(0);">- Amritsar</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="javascript:void(0);">- Madhya Pradesh</a></li>
                                        <li><a href="javascript:void(0);">- Punjab</a></li>
                                        <li><a href="javascript:void(0);">- Sikkim</a></li>
                                        <li><a href="javascript:void(0);">- Haryana</a></li>
                                        <li><a href="javascript:void(0);">- Arunachal Pradesh</a></li>
                                        <li><a href="javascript:void(0);">- Kerela</a></li>
                                        <li><a href="javascript:void(0);">- Maharashtra</a></li>
                                        <li><a href="javascript:void(0);">- Karnataka</a></li>
                                        <li><a href="javascript:void(0);">- Uttar Pradesh</a></li>
                                        <li><a href="javascript:void(0);">View All</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="tg-widget tg-widgettext">
                                <div class="tg-widgetcontent">
                                    <strong class="tg-logo"><a href="javascript:void(0);"><img src="{{asset('logo_white.png')}}"
                                                alt="image description"></a></strong>
                                    <div class="tg-description">
                                        <p>
                                            AgroSearch : Share, Sell and Rent Agriculture equipments
                                        </p>
                                    </div>

                                    <nav class="tg-footernav">
                                        <ul>
                                            <li><a href="javascript:void(0);">Listing Policy</a></li>
                                            <li><a href="javascript:void(0);">Terms of Use</a></li>
                                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                            <li><a href="javascript:void(0);">Sitemap</a></li>
                                            <li><a href="javascript:void(0);">News</a></li>
                                        </ul>
                                    </nav>
                                    <span class="tg-copyright">2018 All Rights Reserved &copy; Narcodes </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('{{asset("service-worker.js")}}').then(function (registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function (err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
        var x = document.getElementById('location');

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.value = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            var url = "https://api.opencagedata.com/geocode/v1/json?q=" + lat + "+" + lon +
                "&key=20a5e3ef0fd3490588ac72099bc527ef";
            $.ajax({
                dataType: "json",
                url: url,
                data: '',
                success: function(data){
									x.value = data.results[0].components.county;
								}
            });
        }
				$(document).ready(function(){
					getLocation();
				});
    </script>
    @yield('script','')
</body>

</html>
