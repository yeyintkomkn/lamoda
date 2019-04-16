<!-- FOOTER -->
<footer id="footer-container">

    <div id="footer-top">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="widget widget-text">

                        <p class="text-center">
                            {{--<img src="{{asset('assets/images/logo-white.png')}}" alt="">--}}
                            <h2 class="text-center">La Moda Suits</h2>
                        </p>

                    </div><!-- widget-text -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </div><!-- footer-top -->

    <div id="footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <div class="widget widget-text">

                        <h6 class="widget-title">About Concept</h6>

                        <p>{{substr($site_profile->about_us,0,300)}}....<br>
                            <a href="{{url('about')}}">Read More</a>
                        </p>

                    </div><!-- widget-text -->

                </div><!-- col -->
               
                <div class="col-sm-3">

                    <div class="widget widget-contact">

                        <h6 class="widget-title">La Moda Suits - 1</h6>

                        <ul>
                            <li>{{$site_profile->address1}}</li>
                            <li><span class="hidden-sm">Phone: </span><a href="tel:{{json_decode($site_profile->phone1)[0]}}">{{json_decode($site_profile->phone1)[0]}}</a></li>
                            <li><span class="hidden-sm">Phone: </span><a href="tel:{{json_decode($site_profile->phone1)[1]}}">{{json_decode($site_profile->phone1)[1]}}</a></li>
                            <li><span class="hidden-sm">Email: </span><a href="mailto:{{$site_profile->email}}">{{$site_profile->email}}</a></li>
                            <li><a href="{{$site_profile->facebook_url}}" target="_blank"><i class="fab fa-facebook fa-3x"></i></a></li>
                        </ul>

                    </div><!-- widget-contact -->

                </div><!-- col -->
                <div class="col-sm-3">


                    <div class="widget widget-contact">

                        <h6 class="widget-title">La Moda Suits - 2</h6>

                        <ul>
                            <li>{{$site_profile->address2}}</li>
                            <li><span class="hidden-sm">Phone: </span><a href="tel:{{json_decode($site_profile->phone2)[0]}}">{{json_decode($site_profile->phone2)[0]}}</a></li>
                            <li><span class="hidden-sm">Phone: </span><a href="tel:{{json_decode($site_profile->phone2)[1]}}">{{json_decode($site_profile->phone2)[1]}}</a></li>
                            <li><span class="hidden-sm">Email: </span><a href="mailto:{{$site_profile->email}}">{{$site_profile->email}}</a></li>
                            <li><a href="{{$site_profile->facebook_url}}" target="_blank"><i class="fab fa-facebook fa-3x"></i></a></li>
                        </ul>

                    </div><!-- widget-contact -->

                </div><!-- col -->

                <div class="col-sm-3">

                        <div class="widget widget-tags">
    
                            <h6 class="widget-title">Feedback</h6>
    
                            <div class="row">
                                <form action="{{url('/upload_feedback')}}" method="post" enctype="multipart/form-data" class="form-group">
                                    {{csrf_field()}}
                                    <input type="hidden" value="website" name="type">
                                    <input type="file" class="form-control {{ $errors->has('photo') ? ' is-invalid' : '' }}" placeholder="Your Photo" id="image" name="photo" required>
                                    @if ($errors->has('photo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('photo') }}</strong>
                                        </span>
                                    @endif
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>

                                    <input type="text" class="form-control" id="position" name="position" placeholder="Postion" required>

                                    <div id="rateBox"></div>
                                    <input type="hidden" name="rating" id="rating" value="4">
                                    <textarea class="form-control" id="description" name="description" placeholder="Write Here.." required></textarea>
                               
                                    <input type="submit" value="Send" class="btn pull-right">
                                </form>
                            </div>
    
                        </div><!-- widget-tags -->
    
                    </div><!-- col -->


            </div><!-- row -->
        </div><!-- container -->


    </div><!-- footer -->

</footer><!-- FOOTER -->

