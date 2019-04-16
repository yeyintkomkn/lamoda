@extends('layouts.userlayout.user_app')

@section('title')
Services|Lamoda
@endsection

@section('css')
<style type="text/css">
    h3{
        margin-left: 19px;
        color: blue;
    }
    .panel-heading{
        padding-left: 20px;
    }
</style>
@endsection

@section('content')
    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="page-header-simbol">S</div>

                </div><!-- col -->
                <div class="col-sm-9">

                    <h2>Services</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="headline">

                    <h1>Our Services</h1>
                    <h6>See all the services that we offer</h6>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <br><br>

    <div class="container">
        <div class="row">
            <h3>Suit Types</h3>
            @foreach($product_type['suit_type'] as $data)
            <div class="col-sm-3 col-md-3">
                <div class="panel-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{$data['name']}}</div>
                        <div class="panel-body">
                            <p>{{$data['detail']}}</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('product/suit/'.$data['id'])}}">View Photo</a>
                        </div>
{{--                      <div class="panel-body">{{substr($data['detail'],0,150)}}--}}
                                {{--<a href="">Read More</a></div>--}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
             <h3>Accessory Types</h3>
            @foreach($product_type['accessories_type'] as $data)
                @if($data['detail']!=".")
            <div class="col-sm-4 col-md-4">
                <div class="panel-group">
                    <div class="panel panel-primary">
                      <div class="panel-heading">{{$data['name']}}</div>
                        <div class="panel-body">
                            <p>{{$data['detail']}}</p>
                        </div>
                        <div class="panel-footer">
                            <a href="{{url('product/accessory/'.$data['id'])}}">View Photo</a>
                        </div>
                      {{--<div class="panel-body">{{substr($data['detail'],0,150)}}--}}
                                {{--<a href="">Read More</a></div>--}}
                    </div>
                </div>
            </div>
                @endif
            @endforeach
        </div>

        {{--<div class="row">--}}
             {{--<h3>Waistcoat Types</h3>--}}
            {{--@foreach($product_type['waistcoat_type'] as $data)--}}
                {{--@if($data['detail']!=".")--}}
           {{--<div class="col-sm-4 col-md-4">--}}
                {{--<div class="panel-group">--}}
                    {{--<div class="panel panel-primary">--}}
                      {{--<div class="panel-heading">{{$data['name']}}</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<p>{{$data['detail']}}</p>--}}
                        {{--</div>--}}
                        {{--<div class="panel-footer">--}}
                            {{--<a href="{{url('product/accessory/'.$data['id'])}}">View Photo</a>--}}
                        {{--</div>--}}
                      {{--<div class="panel-body">{{substr($data['detail'],0,150)}}--}}
                                {{--<a href="">Read More</a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
                {{--@endif--}}
            {{--@endforeach--}}
        {{--</div>--}}
<!-- row -->
    </div><!-- container -->

<!--  -->
    <br>
@endsection

@section('js')

@endsection