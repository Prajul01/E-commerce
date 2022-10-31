@extends('frontend.layout.frontend')
@section('slider')

    <div class="container">
        <div class="shoes-grid">









            <a href="">
                <div class="wrap-in">
                    <div class="wmuSlider example1 slide-grid">
                        <div class="wmuSliderWrapper">
                            @foreach($data['slider'] as $s)
                                <article style="position: absolute; width: 100%; opacity: 0;">



                                    <div class="banner-matter">
                                        <div class="col-md-5 banner-bag">
                                            <img class="img-responsive " src="{{asset('uploads/images/slider/'.$s->image)}}" alt=" ">
                                        </div>
                                        <div class="col-md-7 banner-off">
                                            <h2>FLAT {{$s->percent}}% 0FF</h2>
                                            <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                            <p>{!! $s->description !!} </p>
                                            <span class="on-get">GET NOW</span>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>


                                </article>
                            @endforeach


                        </div>
            </a>



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
@endsection

@section('banner')
    <br>
    @foreach($data['banner'] as $banner)

        <div class="shoes-grid-left"  >

            <a href="">

                <div class="col-md-6 con-sed-grid sed-left-top" style="margin-right: 15px" >
                    <div class=" elit-grid" >

                        <h4>{{$banner->name}}</h4>
                        <label>FOR ALL PURCHASE VALUEs</label>
                        <p>{!! $banner->description !!} </p>
                        <span class="on-get">GET NOW</span>
                    </div>
                    <img class="img-responsive shoe-left" src="{{asset('uploads/images/banner/'.$banner->image)}}" style="height: 150px;width: 150px" />


                    <div class="clearfix"> </div>
                </div>
            </a>
        </div>
    @endforeach
    <br>

@endsection

@section('content')
    <div class="products">
        <h5 class="latest-product">LATEST PRODUCTS</h5>
        <a class="view-all" href="product.html">VIEW ALL<span> </span></a>
    </div>
    <div class="product-left" >
        @foreach($data['product'] as $product)
            <div class="col-md-4 chain-grid" style="margin: 10px" >
                <a href="{{route('frontend.single',$product->id)}}" >
                    <img src="{{asset('uploads/images/product/'.$product->image)}}"  alt="" style="height: 300px; width: 243px; boarder:15px" >

                    {{--                <img class="img-responsive chain" src="{{asset('uploads/images/product/'.$product->image)}}" height="auto" width="auto"  alt=" " /></a>--}}
                    <span class="star"> </span>
                    <div class="grid-chain-bottom" >
                        <h6><a href="{{route('frontend.single',$product->id)}}">{{$product->name}}</a></h6>
                        <div class="star-price" >
                            <div class="dolor-grid" >
                                <span class="actual">Rs {{$product->price}}</span>

{{--                                <span class="rating">--}}
{{--									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">--}}
{{--									        <label for="rating-input-1-5" class="rating-star1"> </label>--}}
{{--									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">--}}
{{--									        <label for="rating-input-1-4" class="rating-star1"> </label>--}}
{{--									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">--}}
{{--									        <label for="rating-input-1-3" class="rating-star"> </label>--}}
{{--									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">--}}
{{--									        <label for="rating-input-1-2" class="rating-star"> </label>--}}
{{--									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">--}}
{{--									        <label for="rating-input-1-1" class="rating-star"> </label>--}}
{{--							    	   </span>--}}
                            </div>
                            <form action="{{ route('cart.store',$product->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(auth()->user() != NULL)
                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                @endif
                                <input type="hidden" value="{{$product->id}}" name="product_id">
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
                            <div class="clearfix"> </div>
                        </div>
                    </div>
            </div>
        @endforeach

        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>

@endsection








