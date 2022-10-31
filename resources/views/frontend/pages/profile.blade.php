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
                <h2>Profile</h2>
                <form method="POST" action="{{ route('profile.update') }}">
                    {!! Form::hidden('_method', 'PUT') !!}
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                    <div class="row mb-3">
                        <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{auth()->user()->name}}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <br>
                    <div class="row mb-3">
                        <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <br>
                    <div class="row mb-2">
                        <label for="password" class="col-md-2 ">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <br>
{{--                    <div class="row mb-3">--}}
{{--                        <label for="password-confirm" class="col-md-2 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <input id="password-confirm" type="password" class="form-control" name="password-confirm" >--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4" style="margin-left: 10%;margin-top: 10px;">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div><!--end container-->



@include('frontend.includes.footer')

@include('sweetalert::alert')

</body>
</html>
