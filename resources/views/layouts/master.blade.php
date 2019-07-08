<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="author" content="Usama Imdad">
    @if (!request()->is('single/*'))
      <meta name="description" content="Watch online funny stage dramas for free, watch dramas in high quality without registration.  Just a better place for stage dramas for free, Dramas, Pakistani stage dramas, HD dramas, Top Pakistani Dramas, What are the best TV shows released in 2019? FULL list of dramas ..., dramas in pakistan, dramas of pakistan, dramas pakistan, dramas pakistani, pakistani dramas, dramas videos, dramas movies, drama queen, dramas, dramas hindi, dramas pakistani list, dramas in urdu, dramas urdu, dramas funny, dramas romance, dramas pak, dramas online, dramasonline, dramas movies 2018, dramas rating, dramas list, pakistani dramas online, dramas central, dramas watch online, dramas download, dramas all, dramas top, funny, funny videos, funny jokes, funny jokes in hindi, funny youtube videos, funny comedy video, funny video comedy, funny comedy, funny riddles, funny hindi movies, funny youtube, funny punjabi movies, comedy, comedy video, comedy hindi, comedy in hindi, comedy hindi video, comedy video hindi, comedy jokes, comedy film, comedy show, comedy hd video, comedy video hd, comedy comedy, comedy scene, comedy punjabi, comedy funny video, comedy, video funny, comedy youtube, comedy new, comedy best movies, comedy punjabi movies, comedy youtube video, comedy full movie, punjabi, punjabi videos, punjabi film, punjabi movies download, punjabi movie new, punjabi, new movies, punjabi comedy, punjabi comedy movies, dramas urdu 1, dramas 4 u, dramas actress, dramas status, dramas to watch, dramas online.com, dramas today, dramas name, dramas websites, dramas now, dramas to watch 2019, dramas 2017 pakistani, dramas 2018 pakistani, dramas pakistani 2018, dramas pakistani 2019">
    @endif
    <meta name="keywords" content="Pakistani stage dramas, HD dramas, Top Pakistani Dramas, What are the best TV shows released in 2019? FULL list of dramas ..., dramas in pakistan, dramas of pakistan, dramas pakistan, dramas pakistani, pakistani dramas, dramas videos, dramas movies, drama queen, dramas, dramas hindi, dramas pakistani list, dramas in urdu, dramas urdu, dramas funny, dramas romance, dramas pak, dramas online, dramasonline, dramas movies 2018, dramas rating, dramas list, pakistani dramas online, dramas central, dramas watch online, dramas download, dramas all, dramas top, funny, funny videos, funny jokes, funny jokes in hindi, funny youtube videos, funny comedy video, funny video comedy, funny comedy, funny riddles, funny hindi movies, funny youtube, funny punjabi movies, comedy, comedy video, comedy hindi, comedy in hindi, comedy hindi video, comedy video hindi, comedy jokes, comedy film, comedy show, comedy hd video, comedy video hd, comedy comedy, comedy scene, comedy punjabi, comedy funny video, comedy, video funny, comedy youtube, comedy new, comedy best movies, comedy punjabi movies, comedy youtube video, comedy full movie, punjabi, punjabi videos, punjabi film, punjabi movies download, punjabi movie new, punjabi, new movies, punjabi comedy, punjabi comedy movies, dramas urdu 1, dramas 4 u, dramas actress, dramas status, dramas to watch, dramas online.com, dramas today, dramas name, dramas websites, dramas now, dramas to watch 2019, dramas 2017 pakistani, dramas 2018 pakistani, dramas pakistani 2018, dramas pakistani 2019">
    <meta name="robots" content="index, follow">
    <meta name="category" content="Stage, Comedy Club, Entertainment">

    @yield('title')
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    		function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- //for-mobile-apps -->

    @if (request()->is('drama/*'))
      <script src="{{asset('js/drama.js')}}"></script>
    @endif
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/contactstyle.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/faqstyle.css')}}" type="text/css" media="all" />
    <link href="{{asset('css/single.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/medile.css')}}" rel='stylesheet' type='text/css' />
    <!-- banner-slider -->
    <link href="{{asset('css/jquery.slidey.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <!-- news-css -->
    <link rel="stylesheet" href="{{asset('css/news.css')}}" type="text/css" media="all" />
    <!-- //news-css -->
    <!-- list-css -->
    {{-- <link rel="stylesheet" href="{{asset('css/list.css')}}" type="text/css" media="all" /> --}}
    <!-- //list-css -->
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->
    <link href="{{asset('css/owl.carousel')}}.css" rel="stylesheet" type="text/css" media="all">
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function() {
    		$("#owl-demo").owlCarousel({

    		  autoPlay: 3000, //Set AutoPlay to 3 seconds

    		  items : 5,
    		  itemsDesktop : [640,4],
    		  itemsDesktopSmall : [414,3]

    		});
    	});
    </script>
    <!-- //banner-bottom-plugin -->
    <link href='{{asset('//fonts.googleapis.com')}}/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
    		$(".scroll").click(function(event){
    			event.preventDefault();
    			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    		});
      });
    </script>
    <!-- start-smoth-scrolling -->
    @yield('css')
    <style>
      .w3l-movie-gride-agile
      {
        height: 333px;
      }
      .w3l-movie-gride-agile .w3l-movie-text
      {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
      }
    </style>
    <!-- Default Statcounter code for Pakistanistagedramas.ml
    http://pakistanistagedramas.ml -->
    <script type="text/javascript">
    var sc_project=12031468;
    var sc_invisible=0;
    var sc_security="7df7f999";
    var scJsHost = "https://";
    document.write("<sc"+"ript type='text/javascript' src='" +
    scJsHost+
    "statcounter.com/counter/counter.js'></"+"script>");
    </script>
    <noscript><div class="statcounter"><a title="Web Analytics"
    href="https://statcounter.com/" target="_blank"><img
    class="statcounter"
    src="https://c.statcounter.com/12031468/0/7df7f999/0/"
    alt="Web Analytics"></a></div></noscript>
    <!-- End of Statcounter Code -->

    {{-- Google tracker --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143368910-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143368910-1');
    </script>
</head>
<body>
    <script>
      var APP_URL = {!! json_encode(url('/')) !!}+"/";
    </script>
    @include('includes.messages')
    @include('includes.header')
    @include('includes.popup-login')
    @include('includes.navigation')
    @include('includes.social_icons')

    @yield('content')

    @include('includes.footer')
</body>
</html>