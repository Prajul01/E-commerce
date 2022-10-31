
<!DOCTYPE html>
<html>


@include('frontend.includes.head')
<body>
<!--header-->
@include('frontend.includes.nav')
<!---->

<div class="container">

    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <ul id="etalage">
                    <li>
                        <a href="optionallink.html">
                            <img src="{{asset('uploads/images/product/'.$data['pro']->image)}}" alt="">
{{--                            <img class="etalage_thumb_image" src="images/s4.jpg" class="img-responsive" />--}}
                        </a>
                    </li>

                </ul>
                <div class="clearfix"> </div>
            </div>

            <div class="desc1 span_3_of_2">


                <h4>{{$data['pro']->name}}</h4>
                <div class="cart-b">
                    <div class="left-n ">Rs: {{$data['pro']->price}}</div>
                    <form action="{{ route('cart.store',$data['pro']->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(auth()->user() != NULL)
                            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                        @endif
                        <input type="hidden" value="{{$data['pro']->id}}" name="product_id">
                        <div style="float:right;">
                            <input  type="number" name="quantity" value="1" min="1" style="width: 40px; margin-right: 10px;">
                            @if(auth()->user() == NULL)
                            <a href="{{ route('login') }}" class="border-1">
Add to cart


                            </a>
                            @else
                                <a >

                                    <button class="now-get get-cart-in"  >Add To Cart</button>

                                </a>
                            @endif


                        </div>
                    </form>
{{--                    <a class="now-get get-cart-in">ADD TO CART</a>--}}
                    <div class="clearfix"></div>
                </div>

                <p>{!! $data['pro']->short_description !!}
                    </p>
                <div class="share">
                    <h5>Share Product :</h5>
                    <ul class="share_nav">
                        <li><a href="#"><img src="{{asset('frontend/images/facebook.png')}}" title="facebook"></a></li>
                        <li><a href="#"><img src="{{asset('frontend/images/twitter.png')}}" title="Twiiter"></a></li>
                        <li><a href="#"><img src="{{asset('frontend/images/gpluse.png')}}" title="Google+"></a></li>
                    </ul>
                </div>


            </div>

            <div class="clearfix"> </div>
        </div>


        <div class="toogle">
            <h3 class="m_3">Product Details</h3>
            <p class="m_text">
                {!! $data['pro']->description !!}
            </p>
        </div>
    </div>

    <!---->
    @include('frontend.includes.side')
    <div class="clearfix"> </div>
</div>


<!---->
@include('frontend.includes.footer')
</body>
</html>html
