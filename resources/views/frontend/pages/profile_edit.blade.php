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
                    <form method="POST" action="{{ route('profile.update') }}">
                        {!! Form::hidden('_method', 'PUT') !!}
                        @csrf
                        @method('PUT')
                        <div  style=" background: #f0faf7;height: 50%;width: 100%">
                            <div class="w3-card" style="float:left;margin: 10px;">
                                <div style="float:left;margin-right:200px">
                                    <div>Full Name</div>
                                    <div>
                                        <input type="text" name="name" value="{{auth()->user()->name}}" style="background:#f0faf7">
{{--                                        <p style="color:darkgreen">{{auth()->user()->name}}</p>--}}

                                    </div>
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div style="float:left;margin-right:200px">
                                    <div>Email</div>
                                    <div>
                                        <input type="text" name="email" value="{{auth()->user()->email}}" style="background:#f0faf7">
{{--                                        <p style="color:darkgreen">{{auth()->user()->email}}</p></div>--}}
                                </div>
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="w3-card" style="float:left;margin-top: 10px;">
                                <div style="float:left;margin-right:200px">
                                    <div>Mobile</div>
                                    <div>
                                        <input type="text"  name="phone"value="{{auth()->user()->phone}}" style="background:#f0faf7">


                                    </div>
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div style="float:left;margin-right:200px">
                                    <div>Address</div>
                                    <div>
                                        <input type="text"  name="address"value="{{auth()->user()->address}}" style="background:#f0faf7">


                                    </div>
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div style="float:left;margin-right:200px">
                                    <div>Date of Birth</div>
                                    <div>
                                        <input type="date" name="birth" value="{{auth()->user()->birth}}" style="background:#f0faf7">
                                </div>
                                    @error('birth')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="w3-card" >
                                <div style="float:left;margin-right:200px">
                                    <div>Gender</div>
                                    <div>


                                        @if( auth()->user()->gender==null)
                                            <input type="radio" id="male" name="gender" value="1">
                                            <label for="male">Male</label><br>
                                            <input type="radio" id="fe-male" name="gender" value="2" >
                                            <label for="fe-male">Fe-Male</label>
                                        @elseif(auth()->user()->gender==2)
                                            <input type="radio" id="male" name="gender" value="1">
                                            <label for="male">Male</label><br>
                                            <input type="radio" id="fe-male" name="gender" value="2" checked>
                                            <label for="fe-male">Fe-Male</label>
                                        @elseif(auth()->user()->gender==1)
                                            <input type="radio" id="male" name="gender" value="1" checked>
                                            <label for="male">Male</label><br>
                                            <input type="radio" id="fe-male" name="gender" value="2">
                                            <label for="fe-male">Fe-Male</label><br>
                                        @endif



                                    </div>
                                    @error('gender')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                            </div>


                        </div>
                                <button type="submit"  style="margin-left:200px;width: 200px;background: lightskyblue">Update</button>
                            </div>
                        </div>



                    </form>

                </div>


            </div>
        </div>
    </div><!--end container-->

</div><!--end container-->



@include('frontend.includes.footer')

@include('sweetalert::alert')

</body>
</html>
