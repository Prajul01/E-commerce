
<!DOCTYPE html>
<html>
@include('frontend.includes.head')
<body>
<!--header-->
@include('frontend.includes.nav')
<!---->
@yield('slider')

</a>
<!---->
@yield('banner')

@yield('content')

</div>
@include('frontend.includes.side')

<div class="clearfix"> </div>
</div>

<!---->

@include('frontend.includes.footer')
{{--@extends('layouts.app')--}}

</body>

</html>
