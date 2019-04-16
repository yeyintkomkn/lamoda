@extends('layouts.userlayout.user_app')

@section('title')

@endsection

@section('css')

@endsection

@section('content')

    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="page-header-simbol">S</div>

                </div><!-- col -->
                <div class="col-sm-9">

                    <h2>Shop</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="product">

                    <div class="images">

                        <div class="owl-carousel product-slider">
                            <div class="item">
                                <img src="{{$product_detail['photo_url']}}" alt="" height="600px">
                            </div><!-- item -->
                            {{--<div class="item">--}}
                                {{--<img src="{{asset('images/shop/product-slider/image-2.jpg')}}" alt="">--}}
                            {{--</div><!-- item -->--}}
                            {{--<div class="item">--}}
                                {{--<img src="{{asset('images/shop/product-slider/image-3.jpg')}}" alt="">--}}
                            {{--</div><!-- item -->--}}
                        </div><!-- product-slider -->

                        {{--<div class="product-slider-navigation">--}}
                            {{--<span class="prev"><i class="mt-icon-arrow-left"></i></span>--}}
                            {{--<span class="next"><i class="mt-icon-arrow-right-2"></i></span>--}}
                        {{--</div><!-- product-slider-navigation -->--}}

                    </div><!-- images -->

                    <div class="summary entry-summary">

                        <h4 class="page-header">{{$product_detail['type']['name']}}</h4>

                        <p class="font_myanmar">{{$product_detail['type']['detail']}}</p>

                        <h3 class="price">{{$product_detail['price']}} Kyats</h3>

                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6">--}}

                                {{--<h5 class="text-default-color">Select Size</h5>--}}

                                {{--<ul class="size-list">--}}
                                    {{--<li><a href="#">S</a></li>--}}
                                    {{--<li><a href="#">M</a></li>--}}
                                    {{--<li><a href="#">L</a></li>--}}
                                {{--</ul>--}}

                            {{--</div><!-- col -->--}}
                            {{--<div class="col-sm-6">--}}

                                {{--<h5 class="text-default-color">Size guide</h5>--}}

                            {{--</div><!-- col -->--}}
                        {{--</div><!-- row -->--}}

                        <br><br>

                        {{--<a class="btn btn-default add_to_cart" href="#">Add to Cart</a>--}}

                    </div><!-- summary -->

                </div><!-- product -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-12">--}}

                {{--<div class="tabs">--}}

                    {{--<ul class="nav nav-tabs">--}}
                        {{--<li class="active"><a href="#tab-1-1" data-toggle="tab"><i class="mt-icon-note"></i>Description</a></li>--}}
                        {{--<li><a href="#tab-1-2" data-toggle="tab"><i class="mt-icon-list"></i>Comments &amp; Reviews (5)</a></li>--}}
                        {{--<li><a href="#tab-1-3" data-toggle="tab"><i class="mt-icon-tag"></i>Size guide</a></li>--}}
                    {{--</ul>--}}

                    {{--<div class="tab-content">--}}
                        {{--<div class="tab-pane fade in active" id="tab-1-1">--}}

                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim nisi eu odio viverra ornare non id diam.--}}
                                {{--Aliquam dapibus condimentum ante vel iaculis. Duis eget ante congue, vestibulum diam ac, tincidunt dolor. Mauris mollis--}}
                                {{--eu quam eget auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris--}}
                                {{--in feugiat nulla. Fusce sollicitudin imperdiet luctus. Pellentesque at sodales elit. Donec ac mauris sem. Quisque--}}
                                {{--suscipit nisi vitae consequat ultricies. Curabitur dolor dolor, facilisis id purus ut, eleifend mollis felis. Praesent--}}
                                {{--ipsum augue, placerat ac tincidunt id, pellentesque ac est. Aenean nec dolor sollicitudin nunc rutrum mattis a pharetra--}}
                                {{--tellus.</p>--}}

                        {{--</div><!-- tab-pane -->--}}
                        {{--<div class="tab-pane fade" id="tab-1-2">--}}

                            {{--<h6>Paul Wilson</h6>--}}

                            {{--<p>Aliquam dapibus condimentum ante vel iaculis. Duis eget ante congue, vestibulum diam ac, tincidunt dolor. Mauris mollis--}}
                                {{--eu quam eget auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>--}}

                            {{--<h6>Linda Jones</h6>--}}

                            {{--<p>Morbi ac maximus turpis, ut sodales ante. Quisque porta eros elit, sed auctor magna commodo nec. Aenean volutpat--}}
                                {{--interdum mollis. Donec porttitor massa vel massa egestas elementum. Aenean pretium ligula nec sapien molestie, eget--}}
                                {{--pulvinar erat.</p>--}}

                            {{--<h6>John William</h6>--}}

                            {{--<p>Quisque commodo ut odio ut facilisis. Nunc vitae ullamcorper tortor. Ut egestas placerat nisl, pulvinar varius magna--}}
                                {{--sodales vel. Praesent suscipit nulla a nibh facilisis.</p>--}}

                            {{--<h6>Martin Smith</h6>--}}

                            {{--<p>Donec porttitor massa vel massa egestas elementum. Aenean pretium ligula nec sapien molestie, eget pulvinar erat--}}
                                {{--tristique. Aliquam vehicula a felis elementum consectetur. In sodales magna erat, sed luctus nulla lacinia quis.</p>--}}

                            {{--<h6>Maria Carter</h6>--}}

                            {{--<p>Pellentesque nibh dolor, tincidunt ut purus bibendum, luctus volutpat urna. Duis consequat venenat odio eget--}}
                                {{--lobortis. Fusce a orci vitae nisi congue volutpat.</p>--}}

                        {{--</div><!-- tab-pane -->--}}
                        {{--<div class="tab-pane fade" id="tab-1-3">--}}

                            {{--<p>Pellentesque nibh dolor, tincidunt ut purus bibendum, luctus volutpat urna. Duis consequat venenat odio eget--}}
                                {{--lobortis. Fusce a orci vitae nisi congue volutpat. Vestibulum volutpat odio at leo gravida condimentum. Vivamus id tempor--}}
                                {{--augue. Nam et commodo sapien. Nullam consectetur porta nulla sed dignissim. Vivamus pretium metus nec tincidunt--}}
                                {{--sollicitudin. Mauris suscipit cursus erat, id dignissim quam vulputate a. Nullam eget lorem urna. Quisque risus leo,--}}
                                {{--laoreet quis nisl sit amet, rhoncus ultricies velit. Praesent consequat ex at pharetra faucibus. Etiam at libero vel--}}
                                {{--dolor pretium aliquam. Mauris urna magna, ultricies sed tempus non, semper sed nulla. </p>--}}

                        {{--</div><!-- tab-pane -->--}}
                    {{--</div><!-- tab-content -->--}}

                {{--</div><!-- tabs -->--}}

            {{--</div><!-- col -->--}}
        {{--</div><!-- row -->--}}
    {{--</div><!-- container -->--}}

    {{--<br><br>--}}

    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-right">

                <div class="headline">

                    <h1>You may <br class="visible-lg-block"> also <br class="visible-lg-block"> like this</h1>
                    <h6>Related products</h6>

                </div><!-- headline -->

                {{--<p>Suspendisse metus turpis, blandit sed dolor quis, commodo commodo elit. Sed sagittis mollis ligula eget rhoncus. Nam blandit--}}
                    {{--pellentesque.</p>--}}

                <br>

                <p class="last"><a class="btn btn-black" href="#">Discover more</a></p>

            </div><!-- col -->
            <div class="col-sm-9">

                <ul class="products isotope col-3">
                    @foreach($suggest_product as $data)
                    <li class="product isotope-item">

                        <a class="product-name" href="#">
                            <img src="{{$data['photo_url']}}" height="300" alt="">
                            <p>{{$data['type']['name']}}</p>
                        </a>

                        <h3 class="price">{{$data['price']}} Kyats</h3>

                        <a class="btn btn-black add_to_cart_button" href="{{url('product_detail/'.$data['id'])}}">More</a>

                    </li><!-- isotope-item -->
                        @endforeach
                </ul>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
@endsection

@section('js')

@endsection