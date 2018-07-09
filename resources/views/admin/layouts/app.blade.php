<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    {{--<link rel="icon" type="image/png" href="/img/favicon.ico">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
        <!--
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
        -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{route('admin_top')}}" class="simple-text">
                    Thuy Kieu Shop
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{route('admin_top')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('list_orders')}}">
                        <i class="pe-7s-user"></i>
                        <p>Danh Sách Đặt Hàng</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('category_list')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh Sách Danh Mục</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('products_list')}}">
                        <i class="pe-7s-folder"></i>
                        <p>Danh Sách Sản Phẩm</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('news_list')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Danh Sách Tin Tức </p>
                    </a>
                </li>

                <li>
                    <a href="{{route('links_index')}}">
                        <i class="pe-7s-science"></i>
                        <p>Tạo Links</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('contact_index')}}">
                        <i class="pe-7s-bell"></i>
                        <p>Liên hệ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('titleClick')</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('admin_logout')}}">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            @yield('content')
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left text-center">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.facebook.com/lehoiqb">Creative HoiLV</a>, made with love for a better web
                </nav>
                <p class="copyright pull-right">

                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

</html>
