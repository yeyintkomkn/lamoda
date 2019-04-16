<style>
        .tp-rightarrow,.tp-leftarrow{
            display: none;
        }

        
</style>

<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul>
            <li data-transition="slotfade-horizontal">

                <img src="{{asset('images/lamoda/banner1.jpg')}}" alt="">

                <div class="tp-caption banner_title"
                     data-x="30"
                     data-y="225"
                     data-speed="700"
                     data-start="2200"
                     data-transform_in="x:-100;s:700;"
                     data-transform_out="x:-100;s:700;"
                     style="color:white">
                   <p class="lamoda_font">La Moda</p>
                </div>

                <div class="tp-caption text"
                     data-x="30"
                     data-y="300"
                     data-speed="700"
                     data-start="2500"
                     data-transform_in="x:-100;s:700;"
                     data-transform_out="x:-100;s:700;"
                     style="color:white">
                    <address>
                         <h6>La Moda Suits - 1</h6>
                         {{$site_profile->address1}}<br>
                        <a class="banner_text" style="color: white;" href="tel:{{json_decode($site_profile->phone1)[0]}}">{{json_decode($site_profile->phone1)[0]}}</a>   ,
                        <a class="banner_text" style="color: white;" href="tel:{{json_decode($site_profile->phone1)[1]}}">{{json_decode($site_profile->phone1)[1]}}</a><br><br>
                    </address>
                    <address>
                        <h6>La Moda Suits - 1</h6>
                        {{$site_profile->address1}}<br>
                        <a class="banner_text" style="color: white;" href="tel:{{json_decode($site_profile->phone1)[0]}}">{{json_decode($site_profile->phone1)[0]}}</a>   ,
                        <a class="banner_text" style="color: white;" href="tel:{{json_decode($site_profile->phone1)[1]}}">{{json_decode($site_profile->phone1)[1]}}</a><br><br>
                    </address>
                </div>

                {{-- <div class="tp-caption social-media"
                     data-x="150"
                     data-y="190"
                     data-speed="700"
                     data-start="3100"
                     data-transform_in="x:-100;s:700;"
                     data-transform_out="x:-100;s:700;">
                    <a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>
                </div> --}}

            </li>

            {{--<li data-transition="slotfade-horizontal">--}}

                {{--<img src="{{asset('images/lamoda/banner2.jpg')}}" alt="">--}}

                {{--<div class="tp-caption title"--}}
                     {{--data-x="30"--}}
                     {{--data-y="225"--}}
                     {{--data-speed="700"--}}
                     {{--data-start="2200"--}}
                     {{--data-transform_in="x:-100;s:700;"--}}
                     {{--data-transform_out="x:-100;s:700;"--}}
                     {{--style="color:white">--}}
                    {{--Lamoda--}}
                {{--</div>--}}

                {{--<div class="tp-caption text"--}}
                     {{--data-x="30"--}}
                     {{--data-y="300"--}}
                     {{--data-speed="700"--}}
                     {{--data-start="2500"--}}
                     {{--data-transform_in="x:-100;s:700;"--}}
                     {{--data-transform_out="x:-100;s:700;"--}}
                     {{--style="color:white">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mesuada <br>--}}
                    {{--luctus velit ut ornare. Pellentesque tempor, justo vitae.--}}
                {{--</div>--}}

                {{-- <div class="tp-caption social-media"--}}
                     {{--data-x="150"--}}
                     {{--data-y="190"--}}
                     {{--data-speed="700"--}}
                     {{--data-start="3100"--}}
                     {{--data-transform_in="x:-100;s:700;"--}}
                     {{--data-transform_out="x:-100;s:700;">--}}
                    {{--<a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>--}}
                {{--</div> --}}

            {{--</li>--}}

            <li data-transition="slotfade-horizontal">

                <img src="{{asset('images/lamoda/banner3.jpg')}}" alt="">

                <div class="tp-caption banner_title"
                     data-x="30"
                     data-y="225"
                     data-speed="700"
                     data-start="2200"
                     data-transform_in="x:-100;s:700;"
                     data-transform_out="x:-100;s:700;"
                     style="color:white">
                   <p class="lamoda_font">La Moda</p>
                </div>

                <div class="tp-caption text"
                     data-x="30"
                     data-y="300"
                     data-speed="700"
                     data-start="2500"
                     data-transform_in="x:-100;s:700;"
                     data-transform_out="x:-100;s:700;"
                     style="color:white">
                    <address>
                        <h6>La Moda Suits - 1</h6>
                        {{$site_profile->address1}}<br>
                        <a style="color: white;" href="tel:{{json_decode($site_profile->phone1)[0]}}">{{json_decode($site_profile->phone1)[0]}}</a>   ,
                        <a style="color: white;" href="tel:{{json_decode($site_profile->phone1)[1]}}">{{json_decode($site_profile->phone1)[1]}}</a><br><br>
                    </address>
                    <address>
                        <h6>La Moda Suits - 1</h6>
                        {{$site_profile->address1}}<br>
                        <a style="color: white;" href="tel:{{json_decode($site_profile->phone1)[0]}}">{{json_decode($site_profile->phone1)[0]}}</a>   ,
                        <a style="color: white;" href="tel:{{json_decode($site_profile->phone1)[1]}}">{{json_decode($site_profile->phone1)[1]}}</a><br><br>
                    </address>
                </div>

                {{-- <div class="tp-caption social-media"
                     data-x="150"
                     data-y="190"
                     data-speed="700"
                     data-start="3100"
                     data-transform_in="x:-100;s:700;"
                     data-transform_out="x:-100;s:700;">
                    <a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>
                </div> --}}

            </li>

        </ul>
    </div><!-- rev_slider -->
</div><!-- rev_slider_wrapper -->
