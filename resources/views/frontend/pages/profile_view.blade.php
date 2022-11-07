<!DOCTYPE html>
<html>
@include('frontend.includes.head')
<body>
<!--header-->
@include('frontend.includes.nav')
<!---->
<div class="container">




    <div class="container pb-60">
        <div class="row">
                <div style="width: 20%;float: left;margin-top: 10px">
                    <p>
                    Hello,{{auth()->user()->name}}
                    </p>
                    <h4>Manage My Account</h4>
                    <ol>
                        <p><a href="{{route('profile.view')}}">My profile</a></p>
                    </ol>

                </div>
            <div class="col-md-12" style="width: 80%;float: right;height:500px" >
                <h2>Manage My Account</h2>

                <div  style=" background: #f0faf7;height: 50%;width: 100%">
                    <div class="w3-card" style="float:left;margin: 10px;width: 30%">
                        <p>My profile|<a href="{{route('profile.edit')}}" style="color: blue"><strong>Edit</strong> </a></p>
                        <p> {{auth()->user()->name}}</p>

                        <p>{{auth()->user()->email}}</p>

                    </div>
{{--                    <div class="w3-card" style="float:left;background: white;width: 2%;height: 100%">--}}
{{--                        <p></p>--}}
{{--                    </div>--}}

                </div>


            </div>
        </div>
    </div>
</div><!--end container-->



@include('frontend.includes.footer')

@include('sweetalert::alert')

</body>
</html>
