<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless Management Theme</title>



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
    <div class="navbar navbar-inverse bg-info-400">
        <div class="navbar-header">
            <img src={{url('theme/assets/images/zymah-logo.png')}} alt="Logo" class="ml-20" width="150" height="60">

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>

        </div>
        

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
               <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-puzzle3"></i>
                            <span class="visible-xs-inline-block position-right">Git updates</span>
                            <span class="status-mark border-orange-400"></span>
                        </a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">
                                Git updates
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-sync"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body width-350">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Add full font overrides for popovers and tooltips
                                        <div class="media-annotation">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                        <div class="media-annotation">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                        <div class="media-annotation">Dec 18, 18:36</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Have Carousel ignore keyboard events
                                        <div class="media-annotation">Dec 12, 05:46</div>
                                    </div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li> -->
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
                            <li><a href="#" data-toggle="modal" data-target="#updatePasswordModal"><i class="icon-lock2"></i> Update Password</a></li>
                            <li class="divider"></li>
                            <li><a href=#><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!--This is Manage profile Segment-->


                </ul>


                <!-- <p class="navbar-text"><span class="label bg-success-400">Online</span></p> -->

                <!-- <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-bell2"></i>
                                <span class="visible-xs-inline-block position-right">Activity</span>
                                <span class="status-mark border-orange-400"></span>
                            </a>

                            <div class="dropdown-menu dropdown-content">
                                <div class="dropdown-content-heading">
                                    Activity
                                    <ul class="icons-list">
                                        <li><a href="#"><i class="icon-menu7"></i></a></li>
                                    </ul>
                                </div>

                                <ul class="media-list dropdown-content-body width-350">
                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                            <div class="media-annotation">4 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>
                                        </div>

                                        <div class="media-body">
                                            Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                            <div class="media-annotation">36 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i class="icon-plus3"></i></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch in <span class="text-semibold">Limitless</span> repository
                                            <div class="media-annotation">2 hours ago</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i class="icon-truck"></i></a>
                                        </div>

                                        <div class="media-body">
                                            Shipping cost to the Netherlands has been reduced, database updated
                                            <div class="media-annotation">Feb 8, 11:30</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i class="icon-bubble8"></i></a>
                                        </div>

                                        <div class="media-body">
                                            New review received on <a href="#">Server side integration</a> services
                                            <div class="media-annotation">Feb 2, 10:20</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
                                        </div>

                                        <div class="media-body">
                                            <strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                            <div class="media-annotation">Feb 1, 05:46</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-bubble8"></i>
                                <span class="visible-xs-inline-block position-right">Messages</span>
                                <span class="status-mark border-orange-400"></span>
                            </a>

                            <div class="dropdown-menu dropdown-content width-350">
                                <div class="dropdown-content-heading">
                                    Messages
                                    <ul class="icons-list">
                                        <li><a href="#"><i class="icon-compose"></i></a></li>
                                    </ul>
                                </div>

                                <ul class="media-list dropdown-content-body">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                            <span class="badge bg-danger-400 media-badge">5</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="media-heading">
                                                <span class="text-semibold">James Alexander</span>
                                                <span class="media-annotation pull-right">04:58</span>
                                            </a>

                                            <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                            <span class="badge bg-danger-400 media-badge">4</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="media-heading">
                                                <span class="text-semibold">Margo Baker</span>
                                                <span class="media-annotation pull-right">12:16</span>
                                            </a>

                                            <span class="text-muted">That was something he was unable to do because...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                        <div class="media-body">
                                            <a href="#" class="media-heading">
                                                <span class="text-semibold">Jeremy Victorino</span>
                                                <span class="media-annotation pull-right">22:48</span>
                                            </a>

                                            <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                        <div class="media-body">
                                            <a href="#" class="media-heading">
                                                <span class="text-semibold">Beatrix Diaz</span>
                                                <span class="media-annotation pull-right">Tue</span>
                                            </a>

                                            <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                        <div class="media-body">
                                            <a href="#" class="media-heading">
                                                <span class="text-semibold">Richard Vango</span>
                                                <span class="media-annotation pull-right">Mon</span>
                                            </a>

                                            <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                        </div>
                                    </li>
                                </ul>

                                <div class="dropdown-content-footer">
                                    <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                                </div>
                            </div>
                        </li>
                </ul> -->
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

                    @include('layout.partials.sidebar')
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