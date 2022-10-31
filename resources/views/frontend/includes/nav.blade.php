<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
{{--            <div class="top-header-right">--}}
{{--                <div class="down-top">--}}
{{--                    <select class="in-drop">--}}
{{--                        <option value="English" class="in-of">English</option>--}}
{{--                        <option value="Japanese" class="in-of">Japanese</option>--}}
{{--                        <option value="French" class="in-of">French</option>--}}
{{--                        <option value="German" class="in-of">German</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="down-top top-down">--}}
{{--                    <select class="in-drop">--}}

{{--                        <option value="Dollar" class="in-of">Dollar</option>--}}
{{--                        <option value="Yen" class="in-of">Yen</option>--}}
{{--                        <option value="Euro" class="in-of">Euro</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <!---->--}}
{{--                <div class="clearfix"> </div>--}}
{{--            </div>--}}
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="{{route('frontend.home')}}"><img src="{{asset('frontend/images/logo.png')}}" alt=" " /></a>
                </div>

                <div class="search">
                    <div class="w3l_search">
                        <form action="{{ route('frontend.product') }}" method="GET" role="search">

                            <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                                <input type="text" class="form-control mr-2" name="term" placeholder="Search Products"id="term" >
                                <a href="{{ route('frontend.product') }}" class=" mt-1">
                            <span class="input-group-btn">

                            </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="header-bottom-right">

                @if(auth()->user() != NULL)

                    <div class="account"><a href="{{route('profile.edit')}}"><span> </span>{{auth()->user()->name}}</a></div>

                <ul class="login">
                    <div  aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </ul>
                @else
                    <ul class="login">
                        <li><a href="{{ route('login') }}"><span> </span>LOGIN</a></li> |
                        <li ><a href="{{ route('register') }}">SIGNUP</a></li>
                    </ul>
                @endif
                    @if(auth()->user() != NULL)
                <div class="cart">
                    <a href="{{ route('cart.list')}}"><span> </span>CART</a>
                </div>
                    @endif
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>


    </div>
</div>
