<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name') }}</title>
    <link href="{{ asset('logo.png')}}" rel="icon">
    <!--STYLESHEET-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
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
    <!--Bootstrap Table [ OPTIONAL ]-->
    <link href="{{asset('asset_dashboard/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('asset_dashboard/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{asset('asset_dashboard/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('asset_dashboard/plugins/pace/pace.min.js')}}"></script>

    <!--Full Calendar [ OPTIONAL ]-->
    <link href="{{asset('asset_dashboard/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet">

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{asset('asset_dashboard/js/demo/tables-datatables.js')}}"></script>
</head>
<body>
<div id="container" class="effect mainnav-full">
    <div id="profilebody">
        <div class="pad-all animated fadeInDown">
            <div class="row">
                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                    <div class="panel panel-default mar-no">
                        <div class="panel-body">
                            <a href="JavaScript:void(0);">
                                <div class="pull-left">
                                    <p class="profile-title text-bricky">Users</p>
                                </div>
                                <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                    <div class="panel panel-default mar-no">
                        <div class="panel-body">
                            <a href="JavaScript:void(0);">
                                <div class="pull-left">
                                    <p class="profile-title text-bricky">Inbox</p>
                                </div>
                                <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                    <div class="panel panel-default mar-no">
                        <div class="panel-body">
                            <a href="JavaScript:void(0);">
                                <div class="pull-left">
                                    <p class="profile-title text-bricky">FAQ</p>
                                </div>
                                <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                    <div class="panel panel-default mar-no">
                        <div class="panel-body">
                            <a href="JavaScript:void(0);">
                                <div class="pull-left">
                                    <p class="profile-title text-bricky">Settings</p>
                                </div>
                                <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                    <div class="panel panel-default mar-no">
                        <div class="panel-body">
                            <a href="JavaScript:void(0);">
                                <div class="pull-left">
                                    <p class="profile-title text-bricky">Calender</p>
                                </div>
                                <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                    <div class="panel panel-default mar-no">
                        <div class="panel-body">
                            <a href="JavaScript:void(0);">
                                <div class="pull-left">
                                    <p class="profile-title text-bricky">Pictures</p>
                                </div>
                                <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.navbar')
    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        @yield('content')
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
    </div>
    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">
        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pull-right">
            <ul class="footer-list list-inline">
                <li>
                    <p class="text-sm">SEO Proggres</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                    </div>
                </li>
                <li>
                    <p class="text-sm">Online Tutorial</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                    </div>
                </li>
                <li>
                    <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                </li>
            </ul>
        </div>
        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">Ros Cheat Version 1.0</div>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <p class="pad-lft">&#0169; 2022 Stock M</p>
    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->
    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->
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
<!--Jquery Nano Scroller js [ REQUIRED ]-->
<script src="{{asset('asset_dashboard/plugins/nanoscrollerjs/jquery.nanoscroller.min.js')}}"></script>
<!--Metismenu js [ REQUIRED ]-->
<script src="{{asset('asset_dashboard/plugins/metismenu/metismenu.min.js')}}"></script>
<!--Jasmine Admin [ RECOMMENDED ]-->
<script src="{{asset('asset_dashboard/js/scripts.js')}}"></script>
<!--Switchery [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/switchery/switchery.min.js')}}"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/parsley/parsley.min.js')}}"></script>
<!--Jquery Steps [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/jquery-steps/jquery-steps.min.js')}}"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<!--Bootstrap Wizard [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
<!--Masked Input [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/masked-input/bootstrap-inputmask.min.js')}}"></script>
<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>
<!--Flot Chart [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/flot-charts/jquery.flot.min.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/flot-charts/jquery.flot.spline.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/moment-range/moment-range.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
<!--Flot Order Bars Chart [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<!--Morris.js [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/morris-js/morris.min.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/morris-js/raphael-js/raphael.min.js')}}"></script>
<!--Easy Pie Chart [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<!--Fullscreen jQuery [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/screenfull/screenfull.js')}}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="{{asset('asset_dashboard/js/demo/index.js')}}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="{{asset('asset_dashboard/js/demo/wizard.js')}}"></script>
<!--Form Wizard [ SAMPLE ]-->
<script src="{{asset('asset_dashboard/js/demo/form-wizard.js')}}"></script>
<!--DataTables [ OPTIONAL ]-->
<script src="{{asset('asset_dashboard/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<!--DataTables Sample [ SAMPLE ]-->
<script src="{{asset('asset_dashboard/js/demo/tables-datatables.js')}}"></script>

<script src="{{asset('asset_dashboard/plugins/fullcalendar/lib/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset('asset_dashboard/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<!--Full Calendar [ SAMPLE ]-->
<script src="{{asset('asset_dashboard/js/demo/fullcalendar.js')}}"></script>
<script src="{{asset('asset_dashboard/js/demo/charts-morris.js')}}"></script>
<script src="{{asset('asset_dashboard/js/demo/tables-datatables.js')}}"></script>

<!--Chart Total-->
<script src="{{asset('asset_dashboard/js/chart-flot.js')}}"></script>
</body>
</html>
