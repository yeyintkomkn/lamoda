@extends('layouts.userlayout.user_app')

@section('title')
 Suits|Lamoda
@endsection

@section('css')

@endsection

@section('content')
    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="page-header-simbol">P</div>

                </div><!-- col -->
                <div class="col-sm-9">
                        <h2 class="text-center">
                            @if(isset($products[0]['type']['name']))
                            {{$products[0]['type']['name']}}
                            @endif
                            @if(!isset($products[0]['type']['name']))
                            Sorry, No Data!!!
                            @endif
                        </h2>
                </div>
                {{--  <div class="col-sm-4">  --}}

                    {{-- <h2>Product</h2> --}}

                {{--  </div><!-- col -->  --}}
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                {{--<div class="widget widget-search">--}}

                    {{--<form name="search" method="get" action="{{url('/search')}}">--}}
                        {{--<fieldset>--}}
                            {{--<input type="search" id="keyword" name="search" placeholder="search...">--}}
                            {{--<input type="submit" value="">--}}
                        {{--</fieldset>--}}
                    {{--</form>--}}

                {{--</div><!-- widget-search -->--}}

                <div class="widget">

                    <h6>Suit Types</h6>

                    <ul>
                        @foreach($product_type['suit_type'] as $data)
                        <li><a href="{{url('product/suit/'.$data['id'])}}">{{$data['name']}}</a></li>
                         @endforeach
                    </ul>

                </div><!-- widget-categories -->

                <div class="widget">
                    <h6>Waistcoats</h6>
                    <ul>
                        @foreach($product_type['waistcoat_type'] as $data)
                            <li><a href="{{url('product/waistcoat/'.$data['id'])}}">{{$data['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>

                 <div class="widget">
                    <h6>Accessories</h6>
                    <ul>
                        @foreach($product_type['accessories_type'] as $data)
                            @if($data['level']==0)
                                <li><a href="{{url('product/accessory/'.$data['id'])}}">{{$data['name']}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <div class="widget">
                    <h6>Other</h6>
                    <ul>
                        @foreach($product_type['accessories_type'] as $data)
                            @if($data['level']==1)
                                <li><a href="{{url('product/accessory/'.$data['id'])}}">{{$data['name']}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>




                <div class="widget widget-recent-posts">

                    <h6 class="widget-title">Latest Posts</h6>

                    <ul>
                        @foreach($latest_products as $data)
                            <li>
                                <div class="post-thumbnail">
                                    <img src="{{$data['photo_url']}}" alt="" height="50">
                                    {{--<a class="fancybox" href="{{$data['photo_url']}}'">+</a>--}}
                                </div><!-- post-thumbnail -->

                                <a class="post-title" href="{{url('product_detail/'.$data['id'])}}">{{$data['type']['name']}}</a>

                                <p class="post-price">{{$data['price']}}</p>

                                {{--<a class="read-more" href="#">Shop Now</a>--}}
                            </li>
                            @endforeach
                    </ul>

                </div><!-- widget-recent-posts -->

                {{-- <div class="widget widget-price-selector">

                    <h6 class="widget-title">Price Filter</h6>

                    <div id="slider"></div>

                    <div class="slider-value">
                        <span class="text-uppercase text-default-color hidden-sm">Price: </span>
                        <span class="example-val" id="lower-value"></span> -
                        <span class="example-val" id="upper-value"></span>
                    </div><!-- slider-value -->

                    <a class="btn btn-default" href="#">Filter</a>

                </div><!-- widget-price-selector --> --}}

            </div><!-- col -->
            <div class="col-sm-9">
                
                <ul class="products isotope col-3">
                    @foreach($products as $data)
                    <li class="product isotope-item">

                        <a class="product-name" href="#">
                            <img src="{{$data['photo_url']}}" height="300px" width="100%" alt="">
                            <p>{{$data['suit_type_name']}}</p>
                        </a>

                        <h3 class="price" style="font-size:20px">{{$data['price']}} Kyats</h3>

                        <a class="btn btn-black add_to_cart_button" href="{{url('product_detail/'.$data['id'])}}">Detail</a>

                    </li><!-- isotope-item -->
                    @endforeach
                </ul><!-- products -->

                <div style="clear: both;"> {{$paginate->links()}}</div>



            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
@endsection

@section('js')

@endsection