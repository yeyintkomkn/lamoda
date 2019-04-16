<!-- HEADER -->
<header id="header">

    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6" style="padding:0px;">

                <!-- LOGO -->
                <div id="logo" style="margin:0px">
                    <a href="{{url('/')}}">
                        <img src="{{asset('images/lamoda/logo.jpeg')}}" id="lamoda_logo" alt="">
                        {{-- <h2 style="margin: 0;">Lamoda</h2> --}}
                    </a>
                </div><!-- LOGO -->

            </div><!-- col -->
            <div class="col-sm-9">

                <!-- MENU -->
                <nav>

                    <a id="mobile-menu-button" href="#">
                        <i class="fas fa-bars"></i></i>
                    </a>

                    <ul class="menu clearfix" id="menu">
                        <li class="dropdown @if($page_url=='home') active @endif">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="dropdown @if($page_url=='product') active @endif" >
                            <a href="#">Products</a>
                            <ul>
                                <li class="dropdown">
                                    <a href="#">Suits</a>
                                    <ul style="width:300px">
                                        @foreach($product_type['suit_type'] as $data)
                                            <li><a href="{{url('product/suit/'.$data['id'])}}">{{$data['name']}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Waistcoats</a>
                                    <ul style="width:300px">
                                        @foreach($product_type['waistcoat_type'] as $data)
                                            <li><a href="{{url('product/waistcoat/'.$data['id'])}}">{{$data['name']}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Accessories</a>
                                    <ul style="width:300px">
                                        @foreach($product_type['accessories_type'] as $data)
                                            @if($data['level']==0)
                                                <li><a href="{{url('product/accessory/'.$data['id'])}}">{{$data['name']}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @foreach($product_type['accessories_type'] as $data)
                                    @if($data['level']==1)
                                        <li><a href="{{url('product/accessory/'.$data['id'])}}">{{$data['name']}}</a></li>
                                    @endif
                                @endforeach


                            </ul>
                                {{-- @foreach($suit_types as $data)
                                <li><a href="{{url('suit_type/'.$data['id'])}}">{{$data['name']}}</a></li>
                                @endforeach --}}
                        </li>
                        <li class="dropdown @if($page_url=='service') active @endif">
                            <a href="{{url('services')}}">Services</a>
                        </li>
                        <li class="dropdown @if($page_url=='order') active @endif">
                            <a href="{{url('order')}}">Order</a>
                        </li>
                        <li class="dropdown @if($page_url=='feedback') active @endif">
                            <a href="{{url('customer_feedback')}}">Feedbacks</a>
                        </li>
                        <li class="dropdown @if($page_url=='about') active @endif">
                            <a href="{{url('about')}}">About Us</a>
                        </li>
                        <li class="dropdown @if($page_url=='contact') active @endif">
                            <a href="{{url('contact')}}">Contact</a>
                        </li>
                    </ul>

                </nav>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</header><!-- HEADER -->

