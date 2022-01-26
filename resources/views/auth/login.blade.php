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
    <!-- LOGIN FORM -->
    <!--===================================================-->
    <div class="lock-wrapper">
        <div class="panel lock-box">
            <h4> Hello User !</h4>
            <p class="text-center">Please login to Access your Account</p>
            <div class="row">
                <form method="POST" action="{{ route('login') }}" class="form-inline">
                    @csrf
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label class="text-muted">Email ID</label>
                            <input id="signupInputEmail1" type="email" placeholder="Enter Email ID" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="text-left">
                            <label for="signupInputPassword" class="text-muted">Password</label>
                            <input id="signupInputPassword" type="password" placeholder="Password" class="form-control lock-input" name="password" required autocomplete="current-password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                            <div class="pull pad-btm">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                        <button type="submit" class="btn btn-block btn-primary">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="registration"> Don't have an account ! <a href="{{route('register')}}"> <span class="text-primary"> Sign Up </span> </a> </div>
    </div>
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
</body>
</html>
