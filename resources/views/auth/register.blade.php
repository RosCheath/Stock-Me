<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name') }}</title>
    <link href="{{ asset('logo.png')}}" rel="icon">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('asset_dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="{{asset('asset_dashboard/css/style.css')}}" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{asset('asset_dashboard/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="{{asset('asset_dashboard/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{asset('asset_dashboard/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('asset_dashboard/css/demo/jasmine.css')}}" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{asset('asset_dashboard/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('asset_dashboard/plugins/pace/pace.min.js')}}"></script>
</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
<div id="container" class="cls-container">
    <!-- REGISTRATION FORM -->
    <!--===================================================-->
    <div class="lock-wrapper">
        <div class="panel lock-box">
            <h4> Hello User !</h4>
            <p class="text-center">Please login to Access your Account</p>
            <div class="row">
                <form id="registration" class="form-inline" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div id="demo-error-container"></div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="signupInputName" class="control-label">Full Name</label>
                            <input id="signupInputName" type="text" placeholder="Enter Full Name" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="signupInputEmail" class="control-label">Email Address</label>
                            <input id="signupInputEmail" type="email" placeholder="Enter Email Address" class="form-control" name="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="signupInputPassword" class="control-label">Password</label>
                            <input id="signupInputPassword" type="password" placeholder="Password" class="form-control lock-input" name="password" required autocomplete="new-password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="signupInputRepassword" class="control-label">Retype Password</label>
                            <input id="signupInputRepassword" type="password" placeholder="Retype Password" class="form-control lock-input" name="password_confirmation" required autocomplete="new-password" />
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
{{--                    <div class="form-group col-md-12 col-sm-12 col-xs-12">--}}
{{--                        <div class="text-left pad-btm">--}}
{{--                            <label for="checkboxtickmark" class="form-checkbox form-icon control-label">--}}
{{--                                <input id="checkboxtickmark" type="checkbox" name="agree" value="agree" >--}}
{{--                                Agree with the terms and conditions--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-block btn-primary">
                        {{ __('Register') }}
                    </button>
                </form>
            </div>
        </div>
        <div class="registration"> Already registered! <a href="{{route('login')}}"> <span class="text-primary"> Please Login Here </span> </a> </div>
    </div>
    <!--===================================================-->
    <!-- REGISTRATION FORM -->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->
<!--jQuery [ REQUIRED ]-->
<script src="{{asset('asset_dashboard/js/jquery-2.1.1.min.js')}}"></script>
<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('asset_dashboard/js/bootstrap.min.js')}}"></script>
<!--Fast Click [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/fast-click/fastclick.min.js')}}"></script>
<!--Switchery [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/switchery/switchery.min.js')}}"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>
<!--Demo script [ DEMONSTRATION ]-->
<script src="{{asset('asset_dashboard/js/demo/pages-register.js')}}"></script>
</body>
</html>
