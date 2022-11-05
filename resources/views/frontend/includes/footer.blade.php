<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter">
                <h6>NEWS-LETTER</h6>
                <div class="sub-left-right">
                    <form action="{{ route('suscribers.store')}}" method="POST">
                        @csrf
                        @if(auth()->user() != NULL)
                            <input type="hidden" value="{{auth()->user()->name}}" name="name">
                            <input type="hidden" value="{{auth()->user()->email}}" name="email" id="email">
                        @endif
                        @if(auth()->user() == NULL)

{{--                            <a href="{{ route('login') }}" class="btn-success">Suscribe</a>--}}
                        @else
                                                <input type="submit" value="SUBSCRIBE" />
                        @endif
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="latter-right">
                <p>FOLLOW US</p>
                <ul class="face-in-to">
                    <li><a href="#"><span> </span></a></li>
                    <li><a href="#"><span class="facebook-in"> </span></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-cate">
                <h6>CATEGORIES</h6>

                <ul>
                    @foreach($data['category'] as $cat)
                        <li><a href="{{route('frontend.category',$cat->id)}}" id="category_id">{{$cat->name}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="footer-bottom-cate bottom-grid-cat">
                <h6>FEATURE </h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li ><a href="#">Dignissim neque</a></li>
                    <li ><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                </ul>
            </div>
{{--            <div class="footer-bottom-cate">--}}
{{--                <h6>TOP BRANDS</h6>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Curabitur sapien</a></li>--}}
{{--                    <li><a href="#">Dignissim purus</a></li>--}}
{{--                    <li><a href="#">Tempus pretium</a></li>--}}
{{--                    <li ><a href="#">Dignissim neque</a></li>--}}
{{--                    <li ><a href="#">Ornared id aliquet</a></li>--}}
{{--                    <li><a href="#">Ultrices id du</a></li>--}}
{{--                    <li><a href="#">Commodo sit</a></li>--}}
{{--                    <li ><a href="#">Urna ac tortor sc</a></li>--}}
{{--                    <li><a href="#">Ornared id aliquet</a></li>--}}
{{--                    <li><a href="#">Urna ac tortor sc</a></li>--}}
{{--                    <li ><a href="#">Eget nisi laoreet</a></li>--}}
{{--                    <li ><a href="#">Faciisis ornare</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="footer-bottom-cate cate-bottom">
                <h6>OUR ADDERSS</h6>
                @foreach($data['footer'] as $footer)
                <ul>
                    <li>{{$footer->address}} </li>

                    <li class="phone">PH : {{$footer->phone}}</li>
{{--                    <li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>--}}
                </ul>
                @endforeach
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
