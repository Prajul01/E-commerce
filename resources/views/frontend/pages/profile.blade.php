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
                    <div class="w3-card" style="float:left;margin: 10px;">
                        <div style="float:left;margin-right:200px">
                            <div>Full Name</div>
                            <div>
                                <p style="color:darkgreen">{{auth()->user()->name}}</p>

                            </div>
                        </div>
                        <div style="float:left;margin-right:200px">
                            <div>Email</div>
                            <div>
                                <p style="color:darkgreen">{{auth()->user()->email}}</p></div>
                        </div>
                        <div style="float:left;">
                            <div>Mobile</div>
                            <div> @if(auth()->user()->phone==null)
                                    <p style="color:red">Add  your gender in profile</p>
                                @else
                                    <p style="color:darkgreen">{{auth()->user()->phone}}</p>
                                @endif
                                    </div>

                        </div>
                </div>
                    <br>

                    <div  style=" background: #f0faf7;height: 50%;width: 100%">
                        <div class="w3-card" style="float:left;margin: 10px;">
                            <div style="float:left;margin-right:200px">
                                <div>DOB</div>

                                <div> @if(auth()->user()->birth==null)
                                        <p style="color:red">Add  your  date of birth in profile</p>
                                    @else

                                        <p style="color:darkgreen">{{auth()->user()->birth}}</p>


                                    @endif
                                </div>

                            </div>
                            </div>
                            <div style="float:left;margin-right:200px">
                                <div>Gender</div>
                                <div>
                                    @if(auth()->user()->gender==null)
                                          <p style="color:red">Add  your gender in profile</p>
                                    @else
                                        <p style="color:darkgreen">
                                            @if(auth()->user()->gender==1)
                                                Male
                                            @else
                                                Fe-Male
                                            @endif
                                        </p>

                                    @endif

                                </div>

                            </div>


                        </div>
                    <a href="{{route('profile.edit')}}" class="btn btn-info" style="margin-left: 10px;width: 200px"> Edit Profile</a>


            </div>


        </div>
    </div>
</div><!--end container-->



@include('frontend.includes.footer')

@include('sweetalert::alert')

</body>
</html>
