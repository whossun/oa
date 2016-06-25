<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.useso.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('assets/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('assets/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
</head>


<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<!-- BEGIN HEADER -->
@include('layouts.header')
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    @include('layouts.sidebar')
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" id="pjax-container">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            {{--<!-- @include('layouts.theme') -->--}}
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->

            @yield('page-bar')

            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            @yield('page-title')
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            @yield('page-body')
            <!-- END DASHBOARD STATS 1-->


        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer pull-right">
    <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
        <a href="#" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="{{ asset('assets/js/respond.min.js') }}"></script>
<script src="{{ asset('assets/js/excanvas.min.js') }}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap-confirmation.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/js/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/quick-sidebar.min.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

@yield('module_js')
</body>

</html>