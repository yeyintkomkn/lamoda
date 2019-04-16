<!-- Developed By Ye Yint Ko 4/5/2019 -->
<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>@yield('title')</title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="{{asset('images/lamoda/icon.jpeg')}}">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="{{asset('frontend/images/apple-touch-180x180.png')}}">

    <!-- FONTS -->
    <link rel="stylesheet" href="{{url('frontend/css/google_font1.css')}}">
    <link rel="stylesheet" href="{{url('css/myanmar.css')}}">

    <!-- BOOTSTRAP CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- MT ICONS FONT -->
    <link rel="stylesheet" href="{{url('frontend/css/mt-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
     <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="{{url('frontend/css/fabcybox.css')}}">

    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="{{url('frontend/css/setting.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/layer.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/navigation.css')}}">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{url('frontend/css/own_car.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/own_trn.css')}}">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="{{url('frontend/css/ytplayer.css')}}">

    <!-- NOUISLIDER -->
    <link rel="stylesheet" href="{{url('frontend/css/noui.css')}}">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="{{url('frontend/css/animated.css')}}">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="{{url('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/page-style.css')}}">

    <!-- STYLE SWITCHER -->
    <link rel="stylesheet" href="{{url('frontend/css/theme-option.css')}}">

    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" href="{{url('css/font_myanmar.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
   <style>
       .lamoda_font{
           font-family: 'Great Vibes', cursive;

       }
       .banner_title{
           font-size:80px;
       }
   </style>

    <link rel="stylesheet" href="{{url('plugin/fxss-rate/rate.css')}}">
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--}}


    @yield('css')

</head>

<body>

<div id="main-container">

   @include('layouts.userlayout.header')
    <!-- CONTENTs -->
    <div id="page-content">
        @yield('slide')

        @yield('content')

        @include('layouts.userlayout.footer')

    </div><!-- MAIN CONTAINER -->


    <!-- GO TOP -->
    <a id="scroll-up"><i class="fas fa-arrow-alt-circle-up"></i></a>


    {{-- <!-- STYLE SWITCHER -->
    <div id="theme-options"></div> --}}
</div>
<!-- jQUERY -->

{{--<script src="{{asset('js/core/jquery.min.js')}}"></script>--}}
<script src="{{url('frontend/js/jquery2.1.4.js')}}"></script>
<script src="{{url('plugin/fxss-rate/rate.js')}}"></script>

<!-- BOOTSTRAP JS --><!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- VIEWPORT -->
    <script src="{{url('frontend/js/viewport.js')}}"></script>

    <!-- MENU -->
    <script src="{{url('frontend/js/hoverinter.js')}}"></script>
    <script src="{{url('frontend/js/superfish.js')}}"></script>

    <!-- FANCYBOX -->
    <script src="{{url('frontend/js/fancybox.js')}}"></script>

    <!-- REVOLUTION SLIDER -->
    <script src="{{url('frontend/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.actions.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.migration.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{url('frontend/js/revolution.extension.video.min.js')}}"></script>

    <!-- OWL Carousel -->
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>

    <!-- PARALLAX -->
    <script src="{{url('frontend/js/jquery.stellar.min.js')}}"></script>

    <!-- ISOTOPE -->
    <script src="{{url('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>

    <!-- PLACEHOLDER -->
    <script src="{{url('frontend/js/jquery.placeholder.min.js')}}"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src="{{url('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.form.min.js')}}"></script>

    {{--<!-- GOOGLE MAPS -->--}}
    {{--<script src="{{url('frontend/js/googlemap.js')}}"></script>--}}
    {{--<script src="{{url('frontend/js/gmap3.min.js')}}"></script>--}}

    <!-- CHARTS -->
    <script src="{{url('frontend/js/jquery.easypiechart.min.js')}}"></script>

    <!-- COUNTER -->
    <script src="{{url('frontend/js/jQuerySimpleCounter.js')}}"></script>

    <!-- YOUTUBE PLAYER -->
    <script src="{{url('frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>

    <!-- INSTAFEED -->
    <script src="{{url('frontend/js/instafeed.min.js')}}"></script>

    <!-- NOUISLIDER -->
    <script src="{{url('frontend/js/nouislider.min.js')}}"></script>

    <!-- ANIMATIONS -->
    <script src="{{url('frontend/js/wow.min.js')}}"></script>

    <!-- COUNTDOWN -->
    <script src="{{url('frontend/js/jquery.countdown.min.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{url('frontend/js/custom.js')}}"></script>

    <!-- STYLE SWITCHER -->
    <script src="{{url('frontend/js/jquery.cookie.js')}}"></script>
    <script src="{{url('frontend/js/theme-options.js')}}"></script>
    <script>

        $("#rateBox").rate({
            length: 5,
            value: 4,
            readonly: false,
            size: '30px',
            selectClass: 'fxss_rate_select',
            incompleteClass: 'fxss_rate_no_all_select',
            customClass: 'custom_class',
            callback: function(object){
                console.log(object);
                star=object.index;
                $('#rating').val((star+1));
            }
        });
    </script>

    @yield('js')
</body>
<!-- Developed By Ye Yint Ko -->
</html>
