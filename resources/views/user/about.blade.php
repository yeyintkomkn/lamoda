@extends('layouts.userlayout.user_app')

@section('title')
    About|Lamoda
@endsection
@section('css')

@endsection

@section('content')
    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="page-header-simbol">A</div>

                </div><!-- col -->
                <div class="col-sm-9">

                    <h2>About</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-offset-4 col-sm-8">--}}

                {{----}}

            {{--</div><!-- col -->--}}
        {{--</div><!-- row -->--}}
    {{--</div><!-- container -->--}}

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <p><img class="wow zoomIn" src="{{asset('images/lamoda/banner3.jpg')}}" alt=""></p>

            </div><!-- col -->
            <div class="col-sm-8">
               <div class="row">
                   <div class="headline">

                       <h3>{{$site_profile->name}}</h3>

                   </div><!-- headline -->
               </div>
                <div class="row">
                        <p>{{$site_profile->about_us}}</p>

                </div><!-- row -->

                {{--<a class="btn btn-black" href="#">Read more</a>--}}

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    {{--<section class="full-section" id="section-8">--}}
        {{--<div class="full-section-container">--}}

            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-7">--}}

                        {{--<br>--}}

                        {{--<div class="headline">--}}

                            {{--<h1>Keep it <br> clean &amp; Simple!</h1>--}}
                            {{--<h6>All the mocups are included!</h6>--}}

                        {{--</div><!-- headline -->--}}

                        {{--<p>Suspendisse metus turpis, blandit sed dolor quis, commodo commodo elit. Sed sagittis mollis ligula eget rhoncus. Nam--}}
                            {{--blandit pellentesque odio.Sus pendisse metus turpis, blandit sed dolor quis, com modo commodo elit. Sed sagittis mollis--}}
                            {{--ligula eget rhoncus. Nam blandit pe llentesque odio.</p>--}}

                        {{--<ul class="disc-list">--}}
                            {{--<li>In eget nisi pharetra neque auctor lobortis</li>--}}
                            {{--<li>Fusce pretium arcu id pharetra pulvinar</li>--}}
                            {{--<li>Cras elementum eros in consequat convallis</li>--}}
                            {{--<li>Praesent nec magna sed nulla tempus</li>--}}
                        {{--</ul>--}}

                        {{--<br>--}}

                        {{--<a class="btn btn-black" href="#">Read more</a>--}}

                    {{--</div><!-- col -->--}}
                    {{--<div class="col-sm-5">--}}

                        {{--<div class="owl-carousel images-slider">--}}
                            {{--<div class="item">--}}
                                {{--<img src="{{asset('images/about/slider/image-1.jpg')}}'" alt="">--}}
                            {{--</div><!-- item -->--}}
                            {{--<div class="item">--}}
                                {{--<img src="{{asset('images/about/slider/image-2.jpg')}}" alt="">--}}
                            {{--</div><!-- item -->--}}
                            {{--<div class="item">--}}
                                {{--<img src="{{asset('images/about/slider/image-3.jpg')}}" alt="">--}}
                            {{--</div><!-- item -->--}}
                        {{--</div><!-- images-slider -->--}}

                        {{--<div class="images-slider-navigation">--}}
                            {{--<span class="prev"><i class="mt-icon-arrow-left"></i></span>--}}
                            {{--<span class="next"><i class="mt-icon-arrow-right-2"></i></span>--}}
                        {{--</div><!-- images-slider-navigation -->--}}

                    {{--</div><!-- col -->--}}
                {{--</div><!-- row -->--}}
            {{--</div><!-- container -->--}}

        {{--</div><!-- full-section-container -->--}}
    {{--</section><!-- full-section -->--}}

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-7">--}}

                {{--<br>--}}

                {{--<div class="headline">--}}

                    {{--<h1>The team</h1>--}}
                    {{--<h6>Read the latest news about our company</h6>--}}

                {{--</div><!-- headline -->--}}

            {{--</div><!-- col -->--}}
        {{--</div><!-- row -->--}}
    {{--</div><!-- container -->--}}

    {{--<br><br>--}}

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-4">--}}

                {{--<div class="about-me">--}}

                    {{--<div class="about-me-image">--}}

                        {{--<img src="{{asset('images/about/image-1.jpg')}}" alt="">--}}

                        {{--<div class="social-media">--}}

                            {{--<a class="behance" href="#"><i class="mt-icon-behance"></i></a>--}}
                            {{--<a class="twitter" href="#"><i class="mt-icon-twitter"></i></a>--}}
                            {{--<a class="google" href="#"><i class="mt-icon-google-plus"></i></a>--}}
                            {{--<a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>--}}

                        {{--</div><!-- social-media -->--}}

                    {{--</div><!-- about-me-image -->--}}

                    {{--<h4>Michael James</h4>--}}
                    {{--<h6>Manager</h6>--}}

                {{--</div><!-- about-me -->--}}

            {{--</div><!-- col -->--}}
            {{--<div class="col-sm-4">--}}

                {{--<div class="about-me">--}}

                    {{--<div class="about-me-image">--}}

                        {{--<img src="{{asset('images/about/image-2.jpg')}}" alt="">--}}

                        {{--<div class="social-media">--}}

                            {{--<a class="behance" href="#"><i class="mt-icon-behance"></i></a>--}}
                            {{--<a class="twitter" href="#"><i class="mt-icon-twitter"></i></a>--}}
                            {{--<a class="google" href="#"><i class="mt-icon-google-plus"></i></a>--}}
                            {{--<a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>--}}

                        {{--</div><!-- social-media -->--}}

                    {{--</div><!-- about-me-image -->--}}

                    {{--<h4>Elisabeth Conner</h4>--}}
                    {{--<h6>Designer</h6>--}}

                {{--</div><!-- about-me -->--}}

            {{--</div><!-- col -->--}}
            {{--<div class="col-sm-4">--}}

                {{--<div class="about-me">--}}

                    {{--<div class="about-me-image">--}}

                        {{--<img src="{{asset('images/about/image-3.jpg')}}" alt="">--}}

                        {{--<div class="social-media">--}}

                            {{--<a class="behance" href="#"><i class="mt-icon-behance"></i></a>--}}
                            {{--<a class="twitter" href="#"><i class="mt-icon-twitter"></i></a>--}}
                            {{--<a class="google" href="#"><i class="mt-icon-google-plus"></i></a>--}}
                            {{--<a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>--}}

                        {{--</div><!-- social-media -->--}}

                    {{--</div><!-- about-me-image -->--}}

                    {{--<h4>Stuart Johnson</h4>--}}
                    {{--<h6>Html Coder</h6>--}}

                {{--</div><!-- about-me -->--}}

            {{--</div><!-- col -->--}}
        {{--</div><!-- row -->--}}
    {{--</div><!-- container -->--}}

   

    <br>
@endsection

@section('js')

@endsection