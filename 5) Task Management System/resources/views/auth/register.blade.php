<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>


    <!-- Global stylesheets -->
    <link href="{!! asset('theme/assets/css/icons/icomoon/styles.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/assets/css/bootstrap.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/assets/css/core.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/assets/css/components.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/assets/css/colors.css') !!}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/loaders/pace.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/core/libraries/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/core/libraries/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/loaders/blockui.min.js') !!}"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/visualization/d3/d3.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/visualization/d3/d3_tooltip.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/forms/styling/switchery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/forms/styling/uniform.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/forms/selects/bootstrap_multiselect.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/ui/moment/moment.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/pickers/daterangepicker.js') !!}"></script>

    <script type="text/javascript" src="{!! asset('theme/assets/js/core/app.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('theme/assets/js/pages/dashboard.js') !!}"></script>
    <!-- /theme JS files -->
    <!-- /Custom add libraries -->

    <script type="text/javascript" src="{!! asset('theme/assets/js/plugins/tables/datatables/datatables.min.js') !!}"></script>
    <link href="{!! asset('theme/assets/css/icons/fontawesome/styles.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('theme/assets/css/icons/fontawesome/fonts/fontawesome-webfont.svg') !!}" rel="stylesheet" type="text/css">


</head>

<body class="login-container">

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Advanced login -->
                <form action="{{ route('register') }}" method="post" class="login-form">
                    {{ csrf_field() }}

                    <div class="panel panel-body">

                        
                        <div class="text-center">
                            <h5 class="content-group-lg">Create new account</h5>
                        </div>


                        <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Please Enter Your Full Name">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>

                            @if ($errors->has('name'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" name="contact" value="{{ old('contact') }}" required placeholder="Enter Your Contact Number Here">
                            <div class="form-control-feedback">
                                <i class="icon-phone2 text-muted"></i>
                            </div>
                            
                            @if ($errors->has('contact'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter Your Email Here">
                            <div class="form-control-feedback">
                                <i class="icon-mail5 text-muted"></i>
                            </div>

                            @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" class="form-control" name="password" required placeholder="Enter Your Password Here">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>

                            @if ($errors->has('password'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                            <div class="form-control-feedback">
                                <i class="icon-check text-muted"></i>
                            </div>

                        </div>



                        <center class="form-group">

                            <button type="submit" class="btn bg-pink-400 btn-block">Register</button>
                        </center>




                        <a href="{{ route('login') }}" class="pull-right content-group text-bold">Back To Sign In</a>

                    </div>
                </form>
                <!-- /advanced login -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</html>