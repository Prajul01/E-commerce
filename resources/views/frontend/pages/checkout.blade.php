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
                                {!! Form::text('name', '', [ 'class'=>'form-control', 'placeholder'=>'Enter name']); !!}
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-sm-10">
                                {!! Form::text('email', '', [ 'class'=>'form-control', 'placeholder'=>'Enter email address']); !!}
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-sm-10">
                                {!! Form::text('phone', '', [ 'class'=>'form-control', 'placeholder'=>'Enter phone number']); !!}
                                @error('phone')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-sm-10">
                                {!! Form::text('address', '', [ 'class'=>'form-control', 'placeholder'=>'Enter address']); !!}
                                @error('address')
                                <p class="text-danger">{{$message}}</p>
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
