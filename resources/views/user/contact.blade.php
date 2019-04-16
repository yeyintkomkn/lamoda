@extends('layouts.userlayout.user_app')

@section('title')
Contact|Lamoda
@endsection

@section('css')

@endsection

@section('content')
    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="page-header-simbol">C</div>

                </div><!-- col -->
                <div class="col-sm-9">

                    <h2>Contact</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="headline">

                    <h3>{{$site_profile->name}}</h3>
                    <h6>Contact information</h6>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <p>
                    {{substr($site_profile->about_us,0,200)}}
                    {{--<a href="{{url('about}}">Read More</a>--}}
                    <a href="{{url('about')}}">Read More</a>
                </p>

                <br>

                <div class="widget widget-contact">

                    <ul>
                        <li>
                            {{--<i class="mt-icon-pin"></i>--}}
                            <address>
                                <h6>La Moda Suits - 1</h6>
                                {{$site_profile->address1}}<br>
                                <a href="tel:{{json_decode($site_profile->phone1)[0]}}">{{json_decode($site_profile->phone1)[0]}}</a>   ,
                                <a href="tel:{{json_decode($site_profile->phone1)[1]}}">{{json_decode($site_profile->phone1)[1]}}</a><br><br>
                            </address>
                        </li>
                        <li>
                            <address>
                                <h6>La Moda Suits - 1</h6>
                                {{$site_profile->address1}}<br>
                                <a href="tel:{{json_decode($site_profile->phone1)[0]}}">{{json_decode($site_profile->phone1)[0]}}</a>   ,
                                <a href="tel:{{json_decode($site_profile->phone1)[1]}}">{{json_decode($site_profile->phone1)[1]}}</a><br><br>
                            </address>
                        </li>

                    </ul>

                </div><!-- widget-contact -->


            </div><!-- col -->
            <div class="col-sm-8">

                <form class="clearfix" name="contact-form" method="post" action="{{url('contact')}}">
                    <fieldset>
                        {{csrf_field()}}

                        <div class="text-primary">
                            {{ session('success_msg') }}
                        </div>

                        <input class="col-xs-12" id="name" type="text" name="name" placeholder="name">

                        <input class="col-xs-12" id="email" type="email" name="email" placeholder="e-mail">

                        <input class="col-xs-12" id="subject" type="text" name="title" placeholder="subject">

                        <textarea class="col-xs-12" id="message" name="message" rows="5" cols="25" placeholder="message"></textarea>

                        <input id="submit" type="submit" name="submit" value="Submit Message">

                    </fieldset>
                </form>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-12">--}}

                {{--<div class="map" data-zoom="15" data-address="Warwick, NY, USA" data-address-details="<img src='assets/images/logo.png'>"></div>--}}

            {{--</div><!-- col -->--}}
        {{--</div><!-- row -->--}}
    {{--</div><!-- container -->--}}
@endsection

@section('js')

@endsection