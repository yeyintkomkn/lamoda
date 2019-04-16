@extends('layouts.userlayout.user_app')

@section('title')
    Order|Lamoda
@endsection

@section('css')

@endsection

@section('content')
    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="page-header-simbol">O</div>

                </div><!-- col -->
                <div class="col-sm-9">

                    <h2>Order</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="headline">

                    <h3>You Can Order Our Produts</h3>
                    <h6>Customer information</h6>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <div class="row">
                    <p> @if(Session::has('success_msg'))
                        <p class="alert alert-success">{{ session('success_msg') }}</p>

                        @endif
                    </p>
                </div>
                <form class="clearfix" name="contact-form" method="post" action="{{url('submit_order')}}">
                    {{csrf_field()}}
                    <fieldset>

                        <div id="alert-area"></div>

                        <input class="col-xs-12" id="name" type="text" name="name" placeholder="name" required>

                        <input class="col-xs-12" id="phone" type="tel" name="phone" placeholder="phone" required>

                        <input class="col-xs-12" id="email" type="email" name="email" placeholder="email">

                        <textarea class="col-xs-12" id="address" name="address" placeholder="address" required></textarea>

                        <select class="col-xs-12" id="product_type" name="product_type[]" multiple>
                            <optgroup label="Suits">
                                @foreach($product_type['suit_type'] as $data)
                                  <option value="{{$data['name']}}">{{$data['name']}}</option>
                                  @endforeach
                            </optgroup>
                            <optgroup label="Accessories">
                                @foreach($product_type['accessories_type'] as $data)
                                    @if($data['level']==0)
                                        <option value="{{$data['name']}}">{{$data['name']}}</option>
                                    @endif
                                @endforeach
                            </optgroup>

                            <optgroup label="Waistcoats">
                                @foreach($product_type['waistcoat_type'] as $data)
                                    <option value="{{$data['name']}}">{{$data['name']}}</option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Other">
                            @foreach($product_type['accessories_type'] as $data)
                                @if($data['level']==1)
                                    <option value="{{$data['name']}}">{{$data['name']}}</option>
                                @endif
                            @endforeach
                            </optgroup>

                        </select>
                        <textarea class="col-xs-12" id="order_detail" name="order_detail" rows="5" cols="25" placeholder="Order Detail..." required></textarea>

                        <input id="submit" type="submit" name="submit" value="Submit Order">

                    </fieldset>
                </form>

            </div><!-- col -->
            <div class="col-md-2"></div>
            <div class="col-sm-4">

                <p>{{substr($site_profile->about_us,0,200)}}
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

                {{--<div class="widget widget-social">--}}

                {{--<div class="social-media">--}}

                {{--<a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>--}}
                {{--<a class="twitter" href="#"><i class="mt-icon-twitter"></i></a>--}}
                {{--<a class="google" href="#"><i class="mt-icon-google-plus"></i></a>--}}
                {{--<a class="pinterest" href="#"><i class="mt-icon-pinterest"></i></a>--}}
                {{--<a class="youtube" href="#"><i class="mt-icon-youtube-play"></i></a>--}}

                {{--</div><!-- social-media -->--}}

                {{--</div><!-- widget-social -->--}}

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

@endsection

@section('js')

@endsection