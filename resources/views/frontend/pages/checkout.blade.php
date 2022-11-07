<!DOCTYPE html>
<html>
@include('frontend.includes.head')
<body>
<!--header-->
@include('frontend.includes.nav')
<!---->



<!--main area-->

<!---->
<div class="container">

    <!---->
    <div class="main">
        <div class="reservation_top">
            <div class=" contact_right">
                <h3>Billing Address</h3>
                <div class="contact-form">
                    <form method="post" action="{{route('sendConfirmationemail')}}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{auth()->user()->name}} " class="form-control" readonly>
                                @error('name')
                                <p class="text-danger">{{$message}} </p>
                                @enderror
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="{{auth()->user()->email}} " class="form-control" readonly>

                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="phone" value="{{auth()->user()->phone}} " class="form-control" readonly>

                                @error('phone')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="address" value="{{auth()->user()->address}} " class="form-control" readonly>

                                @error('address')
                                <p class="text-danger">{{$message}}You can add this from your profile</p>
                                @enderror
                            </div>
                        </div>
                        <input type="submit"  value="Place Order">
                        <div class="clearfix"> </div>
                    </form>
                    <address class="address">
                        <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
                        <dl>
                            <dt> </dt>
                            <dd>Freephone:<span> +1 800 254 2478</span></dd>
                            <dd>Telephone:<span> +1 800 547 5478</span></dd>
                            <dd>FAX: <span>+1 800 658 5784</span></dd>
                            <dd>E-mail:&nbsp; <a href="mailto@vintage.com">info(at)bigshop.com</a></dd>
                        </dl>
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->

<!--end main content area-->
@include('frontend.includes.footer')


</body>
</html>html
