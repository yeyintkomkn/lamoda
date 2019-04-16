@extends('layouts.userlayout.user_app')

@section('title')
    Home|Lamoda
    @endsection
@section('slide')
    @include('layouts.userlayout.banner_slider')
    @endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="headline center">

                    <h1>Our Services</h1>
                    <h6>Lamoda Myanmar</h6>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="service-box style-1 well">
                    {{--  <i class="fas fa-star-of-life"></i>  --}}
                    <div class="service-box-content">
                        <h4><a href="{{url('services')}}">{{$product_type['suit_type'][0]['name']}}</a></h4>
                        <p>{{substr($product_type['suit_type'][0]['detail'],0,200)}}... 
                            <a href="{{url('services')}}">Read More</a>
                        </p>
                    </div><!-- service-box-content -->
                </div><!-- service-box -->
            </div><!-- col -->     
            
            <div class="col-sm-4">
                <div class="service-box style-1 well">
                   
                    <div class="service-box-content">
                        <h4><a href="{{url('services')}}">{{$product_type['suit_type'][1]['name']}}</a></h4>
                        <p>{{substr($product_type['suit_type'][1]['detail'],0,200)}}... 
                                <a href="{{url('services')}}">Read More</a>
                            </p>
                    </div><!-- service-box-content -->
                </div><!-- service-box -->
            </div><!-- col --> 

            <div class="col-sm-4">
                <div class="service-box style-1 well">
                   
                    <div class="service-box-content">
                        <h4><a href="{{url('services')}}">{{$product_type['suit_type'][2]['name']}}</a></h4>
                        <p>{{substr($product_type['suit_type'][2]['detail'],0,180)}}...
                                <a href="{{url('services')}}">Read More</a>
                            </p>
                    </div><!-- service-box-content -->
                </div><!-- service-box -->
            </div><!-- col --> 

        </div><!-- row -->

        <div class="row">
            <p class="pull-right" style="color:blue"><a href="{{url('services')}}"><i class="fas fa-arrow-right"></i>See All Services</a><p>
        </div>
    </div><!-- container -->

    <section class="full-section" id="section-1">
        <div class="full-section-container">

            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        {{--<p><img src="{{asset('images/lamoda/banner3.jpg')}}" alt=""></p>--}}

                        <p class="visible-xs"><img src="{{asset('images/lamoda/banner3.jpg')}}" alt=""></p>

                    </div><!-- col -->
                    <div class="col-sm-4">

                        <div class="headline">

                            <h2>La Moda Suits</h2>
                            {{--<h6>Remember that fredom is the key</h6>--}}

                        </div><!-- headline -->

                        <p>{{$site_profile->about_us}}</p>
                        <br>

                        {{-- <a class="btn btn-default" href="#">Read more</a> --}}

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- full-section-container -->
    </section><!-- full-section -->

    <section class="full-section dark-section" id="section-2">
        <div class="full-section-container">

            <div class="container">
                <div class="row">
                    <h5 class="text-center font_myanmar" style="letter-spacing: 2px;">မည္သုိ႔ပင္ခက္ခဲသည့္ Design ျဖစ္ေနပါေစ
                        Lamoda Suits က customers စိတ္တိုင္းက် ခ်ဴပ္ေပးသည့္ အားျဖင့္ ဝန္ေဆာင္မႉ ေပးေနပါၿပီ ။</h5>
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- full-section-container -->
    </section><!-- full-section -->






    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <ul class="filter">
                    <li>
                        <a href="#" class="active" onclick="new function () {
                                    document.getElementById('suits').style.display='block';
                                }" data-filter=".suits">Suits</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('waistcoats').style.display='block';
                                }" data-filter=".waistcoats">WaistCoats</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('blazers').style.display='block';
                                }" data-filter=".blazers">Blazers</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('shirts').style.display='block';
                                }" data-filter=".shirts">Shirts</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('pants').style.display='block';
                                }" data-filter=".pants">Pants</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('shoes').style.display='block';
                                }" data-filter=".shoes">Shoes</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('skirt_and_blouse').style.display='block';
                                }" data-filter=".skirt_and_blouse">Skirt & Blouses</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('accessories').style.display='block';
                                }" data-filter=".accessories">Accessories</a>
                    </li>
                    {{--  <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('suits').style.display='block';
                                }" data-filter=".female_suit">Female</a>
                    </li>
                    <li>
                        <a href="#" onclick="new function () {
                                    document.getElementById('suits').style.display='block';
                                }" data-filter=".accessories">Accessories</a>
                    </li>  --}}
                </ul>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="isotope col-5 small-gutter" style="margin-bottom:50px;">
        @foreach($suits as $data)
            <div class="isotope-item suits">
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <img src="{{$data['photo_url']}}" alt="" height="300">
                        <div class="portfolio-item-details">
                            <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                            <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                            <h6>{{$data['price']}} Kyats</h6>
                        </div><!-- portfolio-item-details -->
                    </div><!-- portfolio-item-thumbnail -->
                </div><!-- portfolio-item -->
            </div><!-- isotope-item -->
            @endforeach
            <div id="waistcoats" style="display: none;">
                @foreach($waistcoats as $data)
                    <div class="isotope-item waistcoats">
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumbnail">
                                <img src="{{$data['photo_url']}}" alt="" height="300">
                                <div class="portfolio-item-details">
                                    <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                                    <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                                    <h6>{{$data['price']}} Kyats</h6>
                                </div><!-- portfolio-item-details -->
                            </div><!-- portfolio-item-thumbnail -->
                        </div><!-- portfolio-item -->
                    </div><!-- isotope-item -->
                @endforeach
            </div>
            <div id="blazers" style="display: none;">
                @foreach($blazers as $data)
                    <div class="isotope-item blazers">
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumbnail">
                                <img src="{{$data['photo_url']}}" alt="" height="300">
                                <div class="portfolio-item-details">
                                    <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                                    <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                                    <h6>{{$data['price']}} Kyats</h6>
                                </div><!-- portfolio-item-details -->
                            </div><!-- portfolio-item-thumbnail -->
                        </div><!-- portfolio-item -->
                    </div><!-- isotope-item -->
                @endforeach
            </div>
            <div id="shirts" style="display: none;">
                @foreach($shirts as $data)
                    <div class="isotope-item shirts">
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumbnail">
                                <img src="{{$data['photo_url']}}" alt="" height="300">
                                <div class="portfolio-item-details">
                                    <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                                    <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                                    <h6>{{$data['price']}} Kyats</h6>
                                </div><!-- portfolio-item-details -->
                            </div><!-- portfolio-item-thumbnail -->
                        </div><!-- portfolio-item -->
                    </div><!-- isotope-item -->
                @endforeach
            </div>
            <div id="pants" style="display: none;">
                @foreach($pants as $data)
                    <div class="isotope-item pants">
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumbnail">
                                <img src="{{$data['photo_url']}}" alt="" height="300">
                                <div class="portfolio-item-details">
                                    <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                                    <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                                    <h6>{{$data['price']}} Kyats</h6>
                                </div><!-- portfolio-item-details -->
                            </div><!-- portfolio-item-thumbnail -->
                        </div><!-- portfolio-item -->
                    </div><!-- isotope-item -->
                @endforeach
            </div>

            <div id="shoes" style="display: none;">
                @foreach($shoes as $data)
                    <div class="isotope-item shoes">
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumbnail">
                                <img src="{{$data['photo_url']}}" alt="" height="300">
                                <div class="portfolio-item-details">
                                    <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                                    <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                                    <h6>{{$data['price']}} Kyats</h6>
                                </div><!-- portfolio-item-details -->
                            </div><!-- portfolio-item-thumbnail -->
                        </div><!-- portfolio-item -->
                    </div><!-- isotope-item -->
                @endforeach
            </div>
            <div id="skirt_and_blouse" style="display: none;">
                @foreach($skirt_and_blouse as $data)
                    <div class="isotope-item skirt_and_blouse">
                        <div class="portfolio-item">
                            <div class="portfolio-item-thumbnail">
                                <img src="{{$data['photo_url']}}" alt="" height="300">
                                <div class="portfolio-item-details">
                                    <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                                    <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                                    <h6>{{$data['price']}} Kyats</h6>
                                </div><!-- portfolio-item-details -->
                            </div><!-- portfolio-item-thumbnail -->
                        </div><!-- portfolio-item -->
                    </div><!-- isotope-item -->
                @endforeach
            </div>
        <div id="accessories" style="display: none;">
            @foreach($accessories as $data)
                <div class="isotope-item accessories">
                    <div class="portfolio-item">
                        <div class="portfolio-item-thumbnail">
                            <img src="{{$data['photo_url']}}" alt="" height="300">
                            <div class="portfolio-item-details">
                                <a class="fancybox zoom-action" data-fancybox-group="portfolio" href="{{$data['photo_url']}}">+</a>
                                <h6><a href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a></h6>
                                <h6>{{$data['price']}} Kyats</h6>
                            </div><!-- portfolio-item-details -->
                        </div><!-- portfolio-item-thumbnail -->
                    </div><!-- portfolio-item -->
                </div><!-- isotope-item -->
            @endforeach
        </div>

    </div><!-- isotope -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="hr"></div>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <br><br>

    {{-- <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="headline center">

                    <h1>We are the best</h1>
                    <h6>Lamoda Myanamr</h6>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->


    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="{{$site_profile->youtube_url}}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                </div><!-- embed-responsive -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container --> --}}

    {{-- //show feedback --}}
    <section class="full-section dark-section" id="section-9">
        <div class="full-section-container">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center">Customer Feedbacks</h1>
                        <div class="owl-carousel testimonials-slider">
                            @foreach ($feedbacks as $item)
                                <div class="item">

                                    <div class="testimonial">
    
                                        <h2>Lamoda</h2>
    
                                        <img src="{{$item['photo_url']}}" alt="" width="250" height="300">
    
                                        <blockquote>
    
                                            <h6>&quot;{{substr($item['created_at'],0,10)}}&quot;</h6>
    
                                            <p>{{$item['description']}}</p>
    
                                            <h6 class="testimonial-author">{{$item['name']}}r<small>{{$item['position']}}</small></h6>
    
                                        </blockquote>
    
                                    </div><!-- testimonial -->
    
                                </div><!-- item -->
                            @endforeach
                            
                          
                        </div><!--testimonials-slider -->

                        <div class="testimonials-slider-navigation">
                            <span class="prev"><i class="fas fa-chevron-circle-left" style="font-size:30px;"></i></span>
                            <span class="next"><i class="fas fa-chevron-circle-right" style="font-size:30px;"></i></i></span>
                        </div><!-- testimonials-slider-navigation -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- full-section-container -->
    </section><!-- full-section -->


    <br><br>

@endsection