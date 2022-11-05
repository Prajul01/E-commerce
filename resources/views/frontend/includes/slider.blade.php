

<div class="container">
    <div class="shoes-grid">
        <a href="single.html">
@foreach($data['slider'] as $slider)
            <div class="wrap-in">
                <div class="wmuSlider example1 slide-grid">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-matter">
                                <div class="col-md-5 banner-bag">
                                    <img class="img-responsive " src="{{asset('frontend/images/bag.jpg')}}" alt=" " />
                                </div>
                                <div class="col-md-7 banner-off">
                                    <h2>FLAT {{$slider->title}} 0FF</h2>
                                    <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                    <span class="on-get">GET NOW</span>
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                        </article>


                    </div>
        </a>
        @endforeach
        <ul class="wmuSliderPagination">
            <li><a href="#" class="">0</a></li>
            <li><a href="#" class="">1</a></li>
            <li><a href="#" class="">2</a></li>
        </ul>
        <script src="{{asset('frontend/js/jquery.wmuSlider.js')}}"></script>
        <script>
            $('.example1').wmuSlider();
        </script>
    </div>
</div>


