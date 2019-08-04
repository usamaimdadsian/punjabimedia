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
      <meta name="description" content="Comedy at it's best. Watch online funny stage dramas for free. The biggest dramas database. Watch dramas in high quality without registration.  Just a better place for stage dramas for free">
    @endif
    <meta name="keywords" content="Pakistani stage dramas, HD dramas, Top Pakistani Dramas, What are the best TV shows released?, FULL list of dramas, dramas in pakistan, dramas pakistan, pakistani dramas,  dramas, dramas pakistani list, Punjabi Dramas, Punjabi funny dramas full length">
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
    {{-- Google Adscene --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-5784479528577464",
        enable_page_level_ads: true
      });
    </script>
    {{-- End Google Adscene --}}
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