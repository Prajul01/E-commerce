<!DOCTYPE html>
<html>
@include('frontend.includes.head')
<body>
<!--header-->
@include('frontend.includes.nav')
<!---->
<div class="container">


{{--</div>--}}

<div class="container pb-60">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Thank you for your order</h2>
            <p>A confirmation email was sent.</p>
            <div class="col-sm-6 order-md-2 text-left">
                <a href="{{route('frontend.home')}}" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>
</div><!--end container-->



@include('frontend.includes.footer')


</body>
</html>
