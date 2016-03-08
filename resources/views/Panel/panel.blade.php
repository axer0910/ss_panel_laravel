<!doctype html>
<html class="no-js" lang="">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->
    <title>MarisaGo</title>
    <!-- page level plugin styles -->
    <link rel="stylesheet" href="{{asset('/asset/vendor/offline/theme.css')}}">
    <link rel="stylesheet" href="{{asset('/asset/vendor/pace/theme.css')}}">
    <!-- /page level plugin styles -->
    <!-- core styles -->
    <link rel="stylesheet" href="{{asset('/asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/asset/css/animate.min.css')}}">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('/asset/css/skins/palette.1.css')}}" id="skin">
    <link rel="stylesheet" href="{{asset('/asset/css/fonts/style.1.css')}}" id="font">
    <link rel="stylesheet" href="{{asset('/asset/css/skins/main.css')}}">
    <!-- template styles -->

    <!-- HTML5 shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="{{asset('/asset/vendor/modernizr.js')}}')}}"></script>
    <!-- core scripts -->
    <script src="{{asset('/asset/vendor/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('/asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/asset/vendor/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/asset/vendor/jquery.placeholder.js')}}"></script>
    <script src="{{asset('/asset/vendor/fastclick.js')}}"></script>
    <!-- /core scripts -->
</head>

<!-- body -->

<body>
<div class="app">
    <!-- top header -->
    <header class="header header-fixed navbar">

        <div class="brand">
            <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>

            <a href="index.php" class="navbar-brand text-white">
                <i class="fa fa-stop mg-r-sm"></i>
                    <span class="heading-font">
                        Marisa<b>GO</b>
                    </span>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right off-right">
            <li class="hidden-xs dropdown show-on-hover">
                <a href="javascript:;">
                    客户端下载<i class="caret mg-l-xs hidden-xs no-margin"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{url('/d/shadowsocks.rar')}}">
                            <span>ShadowSocks For Windows</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/d/shadowsocks.apk')}}'">
                            <span>ShadowSocks For Android</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/d/shadowsocks.dmg')}}">
                            <span>ShadowSocks For Mac</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/d/anyconnect.msi')}}">
                            <span>cisco anyconnect客户端for windows</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="quickmenu">
                <a href="javascript:;" data-toggle="dropdown">
                    <img src="{{asset('/asset/img/faceless.jpg')}}" class="avatar pull-left img-circle" alt="user" title="user">
                    <i class="caret mg-l-xs hidden-xs no-margin"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                    <li>
                        <a href="javascript:;">
                            <div class="pd-t-sm">
                                流量数字<br>
                                <small class="text-muted">...GB used</small>
                            </div>
                            <div class="progress progress-xs no-radius no-margin mg-b-sm">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="UpdateProfile.php">修改资料</a>
                    </li>


                    <li>
                        <a href="help.php">使用帮助</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{url('/auth/logout')}}">登出</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- /top header -->
    <section class="layout">
        <!-- sidebar menu -->
        <aside class="sidebar canvas-left">
            <!-- main navigation -->
            <nav class="main-navigation">
                <ul>
                    <li>
                        <a href="index.php">
                            <i class="fa fa-coffee"></i>
                            <span>主页</span>
                        </a>
                    </li>

                    <li class="dropdown show-on-hover">
                        <a href="pricing.php">
                            <i class="fa fa-tasks"></i>
                            <span>购买</span>
                        </a>

                    </li>

                    <li class="dropdown  show-on-hover">
                        <a href="UpdateProfile.php">
                            <i class="fa fa-file"></i>
                            <span>修改资料</span>
                        </a>

                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-info"></i>
                            <span>邀请（即将开通）</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /main navigation -->


            <!-- footer -->
            <footer>
                <div class="about-app pd-md animated pulse">
                    <a href="javascript:;">
                        <img src="{{asset('/asset/img/about.png')}}" alt="">
                    </a>
                        <span>
                            <b>Cameo</b>&#32;is a responsive admin template powered by bootstrap 3.
                            <a href="javascript:;">
                                <b>Find out more</b>
                            </a>
                        </span>
                </div>

                <div class="footer-toolbar pull-left">
                    <a href="help.php" class="pull-left help">
                        <i class="fa fa-question-circle"></i>
                        <a id="help" href="help.php">&nbsp;使用帮助</a>
                    </a>

                    <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </div>
            </footer>
            <!-- /footer -->
        </aside>
        <!-- /sidebar menu -->
@yield('contents')

    </section>

</div>


<!-- page level scripts -->
<script src="{{asset('/asset/vendor/easy-pie-chart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('/asset/vendor/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('/asset/vendor/offline/offline.min.js')}}"></script>

<!-- page level scripts -->


<!-- /page level scripts -->
<!-- template scripts -->
<script src="{{asset('/asset/js/off-canvas.js')}}"></script>
<script src="{{asset('/asset/js/main.js')}}"></script>
<!-- /template scripts -->


</body>
<!-- /body -->

</html>