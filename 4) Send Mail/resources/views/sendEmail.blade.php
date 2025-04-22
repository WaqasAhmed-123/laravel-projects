<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sned Email</title>


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

<body class="navbar-bottom login-container">


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">


                <!-- Simple login form -->
                <form action="{{url('/postSendEmail')}}" class="login-form" method="post">
                    {{ csrf_field() }}

                    <div class="panel panel-body">

                        @if (\Session::has('success'))
                            <div class="alert alert-success" id="alertMsg">
                                {!! \Session::get('success') !!}
                            </div>
                        @elseif (\Session::has('error'))
                            <div class="alert alert-danger" id="alertMsg">
                                {!! \Session::get('error') !!}
                            </div>
                        @endif
                        

                        <div class="text-center">
                            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-mail5"></i></div>
                            <h5 class="content-group">Email Required <small class="display-block">Enter your email below</small></h5>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" required name="email">
                            <div class="form-control-feedback">
                                <i class="icon-mail5 text-muted"></i>
                            </div>
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn bg-pink-400 btn-block">Send Mail <i class="icon-circle-right2 position-right"></i></button>
                        </div>

                        <a href="{{url('/')}}" class="pull-right content-group text-bold">Back To Home Page</a>


                    </div>
                </form>
                <!-- /simple login form -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->



    <script>
        //function Used to hide automatically alert message after 4 seconds
        $("#alertMsg").fadeTo(6000, 500).slideUp(500, function () {
            $("#alertMsg").slideUp(600);
        });
    </script>

</body>
</html>
