@extends('layouts.userlayout.user_app')

@section('title')
    Feedback|Lamoda
@endsection

@section('css')
<style>
    .feedback_photo{
        width:100%;
        height:500px!important;
    }
    .left_item-details{
        margin-top: 100px;
    }

    .checked {
        color: orange!important;
    }
</style>
@endsection

@section('content')


    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="page-header-simbol">F</div>

                </div><!-- col -->
                <div class="col-sm-9">

                    <h2>Customer Feedback</h2>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="headline center">

                    <h1 class="lamoda_font">{{$site_profile->name}}</h1>
                    <h6>Our Customer Feedback</h6>

                </div><!-- headline -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="portfolio-item portfolio-creative thumbnail-left">
                <input type="hidden" value="{{$i=1}}">
                    @foreach($feedbacks as $item)
                        @if($i%2!=0)
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="left_item-details font_myanmar">

                                    <h4>{{$item['name']}}</h4>
                                    <!-- <strong>{{$item['position']}}</strong> -->
                                    <div>
                                       @for($i=0;$i<$item['rating'];$i++)
                                        <span class="fa fa-star checked"></span>
                                            @endfor
                                    </div>
                                    <p class="font_myanmar">{{$item['description']}}</p>

                                </div><!-- portfolio-item-details -->

                            </div><!-- col -->
                            <div class="col-sm-6">

                                <div class="portfolio-item-thumbnail">

                                    <img class="feedback_photo" src="{{$item['photo_url']}}" alt="">



                                </div><!-- portfolio-item-thumbnail -->

                            </div><!-- col -->
                        </div><!-- row -->
                        @endif
                        @if($i%2==0)
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="portfolio-item-thumbnail">

                                    <img class="feedback_photo" src="{{$item['photo_url']}}" alt="">



                                </div><!-- portfolio-item-thumbnail -->

                            </div><!-- col -->
                            <div class="col-sm-6">
                                <div class="left_item-details font_myanmar">

                                    <h4>{{$item['name']}}</h4>
                                    <!-- <strong>{{$item['position']}}</strong> -->
                                    <div>
                                        @for($i=0;$i<$item['rating'];$i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                    </div>
                                    <p class="font_myanmar">{{$item['description']}}</p>

                                </div><!-- portfolio-item-details -->

                             </div><!-- col -->

                         </div><!-- row -->
                        @endif
                            <input type="hidden" value="{{$i++}}">
                    @endforeach
                </div><!-- portfolio-item -->


            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <ul class="pagination text-center">
                    {{--<li class="active"><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{$paginate->links()}}
                </ul>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->




@endsection

@section('js')

@endsection