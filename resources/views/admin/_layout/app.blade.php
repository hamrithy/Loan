<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Joli Admin - Responsive Bootstrap Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ url('joli/css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>

    @yield('app')

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="/joli/audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="/joli/audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="/joli/js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/joli/js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/joli/js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='/joli/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="/joli/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="/joli/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

    <script type="text/javascript" src="/joli/js/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="/joli/js/plugins/morris/morris.min.js"></script>
    <script type="text/javascript" src="/joli/js/plugins/rickshaw/d3.v3.js"></script>
    <script type="text/javascript" src="/joli/js/plugins/rickshaw/rickshaw.min.js"></script>
    <script type='text/javascript' src='/joli/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
    <script type='text/javascript' src='/joli/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
    <script type='text/javascript' src='/joli/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type="text/javascript" src="/joli/js/plugins/owl/owl.carousel.min.js"></script>

    <script type="text/javascript" src="/joli/js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="/joli/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="/joli/js/settings.js"></script>

    <script type="text/javascript" src="/joli/js/plugins.js"></script>
    <script type="text/javascript" src="/joli/js/actions.js"></script>

    <script type="text/javascript" src="/joli/js/demo_dashboard.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>
</html>