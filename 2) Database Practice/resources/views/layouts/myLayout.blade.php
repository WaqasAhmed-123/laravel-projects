<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>



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
<body>



    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-blue-600">
        <div class="navbar-header">
            <img src={{url('theme/assets/images/signature.png')}} alt="Logo" class="ml-20" width="150" height="60">

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>

        </div>
        

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
               <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                
            </ul>

            <div class="navbar-right">

                <ul class="nav navbar-nav navbar-right">


                    <!--This is Manage profile Segment-->
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span>loggedin User Name</span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href=#><i class="icon-cog5"></i> Update Profile</a></li>
                            <li><a href="#" ><i class="icon-lock2"></i> Update Password</a></li>
                            <li class="divider"></li>
                            <li><a href=#><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!--This is Manage profile Segment-->


                </ul>


                
            </div>
        </div>
    </div>
    <!-- /main navbar -->




    <div class="page-container">


        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-default">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material" >
                    <div class="category-content" style="border:1px solid lightgrey;">
                        <div class="sidebar-user-material-content">
                            
                            <h6 style="color:black;">loggedin User Name</h6>
                            <br />
                            <span class="text-size-small" style="color:black;">loggedin User Email</span>
                        </div>

                        <div class="sidebar-user-material-menu">
                            <a href="#user-nav" data-toggle="collapse"><span  style="color:black;">My Account</span> <i class="caret"></i></a>
                        </div>
                    </div>

                    <div class="navigation-wrapper collapse" id="user-nav">
                        <ul class="navigation">
                            
                            <li><a href=#><i class="icon-cog5"></i> <span>Update Profile</span></a></li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#updatePasswordModal"><i class="icon-lock2"></i> 
                                    <span>Update Password</span>
                                </a>
                            </li>
                            
                            <li><a href=#><i class="icon-switch2"></i> <span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->

                <!-- Side bar menu -->
                <div class="sidebar-category sidebar-category-visible" >

                    @include('layouts.partials.sidebar')
                </div>
                <!-- /Side bar menu -->
            </div>
        </div>
        <!-- /main sidebar -->


        <div class="bg-white">
            @yield('content')
        </div>


    </div>



</body>

</html>