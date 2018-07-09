
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta name="Thuy Kieu Shop" content="Thuý Kiều Shop - Mỹ Phẩm Chính Hãng Cao Cấp" charset="Thuy Kieu Shop" />
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta property="og:site_name" content="thuykieushop.vn" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="content-language" content="vi" />
    <title> @yield('title')</title>
    <link type="text/css" rel="stylesheet" href="/Styles/nivo-slider.css" />
    <link type="text/css" rel="stylesheet" href="/Themes/Default/Styles/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="/Themes/Default/Styles/styles.css" />
    <link type="text/css" rel="stylesheet" href="/Styles/validationEngine.jquery.css" />
    <link type="text/css" rel="stylesheet" href="/Styles/jquery.autocomplete.css" />
    <link type="text/css" rel="stylesheet" href="/Styles/ddsmoothmenu.css" />

    <link rel="stylesheet" type="text/css" href="/Styles/detail.css" />
    <link rel="stylesheet" type="text/css" href="/Styles/ShopCart.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script src="/Scripts/cloud-zoom.1.0.2.js"></script>
    <script src="/Scripts/detail.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollToTop').fadeIn();
                } else {
                    $('.scrollToTop').fadeOut();
                }
            });
            $('.scrollToTop').click(function () {
                $('html, body').animate({ scrollTop: 0 }, 800);
                return false;
            });
        });
    </script>
    <script type="text/javascript" src="/Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/Scripts/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/Scripts/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="/Scripts/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="/Scripts/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="/Scripts/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="/Scripts/ddsmoothmenu.js"></script>

</head>
<body id="offcanvas-container" class=" cms-index-index cms-home offcanvas-container layout-fullwidth fs12 ">
<section id="page" class="offcanvas-pusher" role="main">
    <section id="header" class="header">

        <style>
            h3 {
                font-size: 15px;
                line-height: 20px;
                color: #1366AE;
            }

            #search-site {
                border: 1px solid #91288F;
                border-radius: 4px;
                text-align :center;
                height: 35px;
                position: relative;
                margin-top: 0px;
                margin-bottom: 10px;
            }

            .topinput {
                background: none repeat scroll 0 0 #fff;
                border: 0 none;
                float: left;
                font-size: 13px;
                height: 30px;
                padding-top: 3px;
                position: relative;
                text-indent: 10px;
                width: 90%;
            }

            .btntop {
                background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
                border: 0 none;
                height: 33px;
                vertical-align: middle;
            }

            .iconmenu-topsearch {
                display: block;
                height: 23px;
                margin: 0 auto;
                width: 23px;
            }

            [class^="iconmenu-"], [class*="iconmenu-"] {
                background-image: url("/Images/seach.png");
                margin-left: 0px;
                line-height: 23px;
                vertical-align: middle;
                width: 24px;
            }
            /*menutop*/
            header {
                width: 100%;
                background: none;
                height: 38px;
                line-height: 38px;
            }
            .hamburger {
                background: none;
                border: 0 none;
                color: #c91d67;
                cursor: pointer;
                font-size: 1.3em;
                font-weight: bold;
                line-height: 38px;
                outline: medium none;
                padding: 0px 30px 0px 0px;
                position: absolute;
                right: 0px;
                top: 0;
                z-index: 10000000000000;
            }
            .cross {
                background: none;
                position: absolute;
                top: 0px;
                right: 0px;
                padding: 5px 30px 0px 0px;
                color: #c91d67;
                border: 0;
                font-size: 1.3em;
                line-height: 38px;
                font-weight: bold;
                cursor: pointer;
                outline: medium none;
                z-index: 10000000000000;
            }

            .menu {
                z-index: 1000000;
                font-weight: bold;
                font-size: 1em;
                width: 100%;
                background: #ffffff;
                position: absolute;
            }

            .menu ul {
                margin: 0px 20px 0px 0px;
                padding: 0;
                list-style-type: none;
                list-style-image: none;
            }

            .menu li {
                display: block;
                padding: 15px 0 15px 0;
                border-bottom: #c91d67 1px solid;
                padding-left : 15px;
            }

            .menu li:hover {
                display: block;
                background: #c91d67;
                color: #ffffff;
                padding: 15px 0 15px 0;
                padding-left : 15px;
            }

            .menu ul li a {
                text-decoration: none;
                margin: 0px;
                color: #c91d67;
            }

            .menu ul li a:hover {
                color: #c91d67;
                text-decoration: none;
            }

            .menu a {
                text-decoration: none;
                color: #c91d67;
            }

            .menu a:hover {
                text-decoration: none;
                color: white;
            }

            .glyphicon-home {
                color: white;
                font-size: 1.8em;
                margin-top: 5px;
                margin: 0 auto;
            }
        </style>
        <section id="topbar" style="height: 38px;">
            <div class="container hidden-xs hidden-sm" style="margin-bottom: 0px;height: 38px;">
                <div class="container-inner clearfix ">
                    <div class="quick-access dropdown">
                        <div class="pull-right dropdown-menu">
                            <div class="topLinks pull-right">
                                <ul class="links">
                                    <li class="first">
                                        <a title="Trang chủ" href="{{route('home')}}">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a title="Giới thiệu" href="">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a title="Sản phẩm tại" href="{{route('products_all')}}">Sản phẩm</a>
                                    </li>
                                    <li>
                                        <a title="Tin tức" href="{{route('news_all')}}">Tin tức</a>
                                    </li>
                                    <li>
                                        <a title="Chính sách & Quy định" href="#">Hướng dẫn Mua hàng</a>
                                    </li>
                                    <li class="last">
                                        <a title="Liên hệ" href="{{route('contact')}}">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="header-main">
            <div class="container">
                <div class="header-wrap clearfix">
                    <div class="row">
                        <div class="col-lg-22 col-md-22" style="text-align :center;">
                            <div class="logo">
                                <strong>Link Store</strong>
                                <a title="Link Store" href="{{route('home')}}">
                                    <img style="margin-top: -16px;" src="/Media/Default/UploadFiles/logolinkstore_1.png">
                                </a>
                            </div>
                        </div>
                        <div class="top-search col-lg-99 col-md-9 col-sm-9">
                            <div class="row" style="margin-top : 10px;">
                                <div class="top-search col-lg-5 col-md-5 col-sm-5">
                                    <form action="{{route('search_products')}}" method="post">
                                        {{csrf_field()}}
                                        <div id="search-site">
                                            <input id="search-keyword" class="topinput" type="text" style="height: 32px; border: 0px; box-shadow: none;"
                                                   name="search" autocomplete="off" title="Xin chào! Quý khách cần tìm sp gì?"
                                                   onblur="if(this.value=='') this.value=this.title;"
                                                   onfocus="if(this.value== this.title) this.value='';"
                                                   value="Xin chào! Quý khách cần tìm sp gì?">
                                            <button class="btntop" type="submit">
                                                <i class="iconmenu-topsearch"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $("#search-keyword").autocomplete("/get-san-pham", {
                                                minLength: 1,

                                                formatItem: function (item) {
                                                    return item[0];
                                                }
                                            });
                                            $("#search-keyword").result(function (event, data) {
                                                $(this).val(data[0]);
                                            });
                                        });
                                    </script>
                                </div>
                                <div class="top-search col-lg-7 col-md-7 col-sm-7" style="text-align : center;">
                                    <h4 style="color: #91288F; text-align: center;">Hotline: 0932 79 8368 - 0985 985 997
                                        <a href="{{route('member_orders')}}">
                                            <img style="margin-top: 0px;width: 36px;" src="/Images/checkout-xxl.png"> Giỏ Hàng ({{
                                            isset(Session::get('hello')['cart']) ? count(Session::get('hello')['cart']) : 0
                                            }})
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(".cross").hide();
            $(".menu").hide();
            $(".hamburger").click(function () {
                $(".menu").slideToggle("slow", function () {
                    $(".hamburger").hide();
                    $(".cross").show();
                });
            });

            $(".cross").click(function () {
                $(".menu").slideToggle("slow", function () {
                    $(".cross").hide();
                    $(".hamburger").show();
                });
            });
        </script>

    </section>
    <div class="zone zone-content">
        <style type="text/css" media="all">

            .list_carousel {
                width: 360px;
            }
            .list_carousel ul {
                margin: 0;
                padding: 0;
                list-style: none;
                display: block;
            }
            .list_carousel li {
                font-size: 13px;
                text-align: center;
                width: 170px;
                height: 170px;
                padding: 0px;
                margin: 0px;
                margin-top: 0px;
                display: block;
                float: left;
            }
            .list_carousel.responsive {
                width: auto;
                margin-left: 0;
            }
            .fix-border li {
                margin-bottom: 4px;
            }
        </style>
        <div class="col-lg-22 col-md-22">
            <div class="container">
                <div id="ves-verticalmenu" class="ves-verticalmenu">
                    <ul id="tabs">
                        <center><a id="current" name="#tab1" href="#">Hãng sản xuất</a></center>
                    </ul>
                    <div id="contentdm">
                        <div id="tab1" style="display: block;">
                            <div class="block-content">
                                <?php
                                    $categories = \App\Models\Categories::orderBy('orders', 'asc')->get();
                                ?>

                                <div class="navbar navbar-inverse">
                                    <ul class="ul-menu" style="font-size: 15px;">

                                        <div class="ddsmoothmenu-v" id="smoothmenu2">
                                            <ul style="padding: 0px 0px 15px 0px;">
                                                @foreach($categories as $goal)
                                                    @if($goal['parent_id'] == 0)
                                                    <li style="z-index: 100; padding: 5px">
                                                            <a href="{{route('categories_list_product', [$goal['slug'], $goal['id']])}}" style="font-family: Tahoma"> {{ $goal->title }} </a>
                                                        @if(!empty($goal->subgoals()->orderBy('orders', 'asc')->get()->toArray()))
                                                            <ul style="display: none; top: 0px; visibility: visible;">
                                                        @endif
                                                                @foreach($goal->subgoals()->orderBy('orders', 'asc')->get() as $subgoal)
                                                                            <li>
                                                                                <a href="{{route('categories_list_product', [$subgoal['slug'], $subgoal['id']])}}" style="font-family: Tahoma">
                                                                                    {{$subgoal['title']}}
                                                                                </a>
                                                                            </li>
                                                                @endforeach
                                                         @if(!empty($goal->subgoals()->orderBy('orders', 'asc')->get()->toArray()))
                                                            </ul>
                                                         @endif
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </ul>
                                    <script type="text/javascript">
                                        ddsmoothmenu.init({
                                            mainmenuid: "smoothmenu2",
                                            orientation: 'v',
                                            classname: 'ddsmoothmenu-v',
                                            contentsource: "markup"
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ves-verticalmenu" class="ves-verticalmenu" style="margin-top: 10px;">
                    <ul id="tabs">
                        <center><a id="current" name="#tab1" href="#">Tìm kiếm theo giá</a></center>
                    </ul>
                    <div class="navbar navbar-inverse">
                        <div class="container">
                            <form action="{{route('search_products_price')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="sel1">Hãng Sản Xuất :</label>
                                    <select class="form-control" id="sel1" name="category">
                                        <option value="0">Vui lòng chọn</option>
                                        @php
                                            $categories = \App\Models\Categories::all();
                                        @endphp
                                        @foreach($categories as $value)
                                            <option value="{{$value['id']}}">{{$value['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="sel1">Khoảng Giá bán :</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <select class="form-control" id="sel1" name="price_start">
                                        <option value="0">0</option>
                                        <option value="100000">100,000</option>
                                        <option value="200000">200,000</option>
                                        <option value="300000">300,000</option>
                                        <option value="400000">400,000</option>
                                        <option value="500000">500,000</option>
                                        <option value="600000">600,000</option>
                                        <option value="700000">700,000</option>
                                        <option value="800000">800,000</option>
                                        <option value="900000">900,000</option>
                                        <option value="1000000">> 1 Triệu</option>
                                      </select>
                                    </span>
                                    <span class="input-group-btn">
                                      <select class="form-control" id="sel1" name="price_end">
                                        <option value="0">0</option>
                                        <option value="0">0</option>
                                        <option value="100000">100,000</option>
                                        <option value="200000">200,000</option>
                                        <option value="300000">300,000</option>
                                        <option value="400000">400,000</option>
                                        <option value="500000">500,000</option>
                                        <option value="600000">600,000</option>
                                        <option value="700000">700,000</option>
                                        <option value="800000">800,000</option>
                                        <option value="900000">900,000</option>
                                        <option value="1000000">> 1 Triệu</option>
                                      </select>
                                    </span>
                                </div>
                                <div class="text-center" style="margin-top: 10px; margin-bottom: 10px">
                                    <input id="submit" class="btn" type="submit" value="Search" style="width: 100px; ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="ves-verticalmenu" class="ves-verticalmenu hidden-xs" style="margin-top: 10px;">
                    <img src="/Images/banner1.jpg" style="border: 1px solid;color: #91288f;">
                </div>
                <div id="ves-verticalmenu" class="ves-verticalmenu hidden-xs" style="margin-top: 10px;">
                    <img src="/Images/banner3.jpg" style="border: 1px solid;color: #91288f;">
                </div>
            </div>
        </div>
        <div class="col-lg-99 col-md-99">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <a href="#" class="scrollToTop"></a>

    <div class="footer-wrap" style="margin-left: 10px;margin-right: 10px;">
        <footer class="footers-content">
            <div class="footers-top-content">
                <div class="container">
                    <div class="row" style="border-bottom: 1px solid #a856a7; padding-bottom: 10px">
                        {{--<div class="col-md-2 col-sm-3">--}}
                            {{--<center><a title="Link Store" href="index.html">--}}
                                    {{--<img style="margin-top: 0px;" src="/Media/Default/UploadFiles/logolinkstore_1.png">--}}
                                {{--</a></center>--}}
                            {{--<br>--}}
                        {{--</div>--}}
                        <div class="col-md-12 col-sm-12" style="position: static;">
                            <div class="zone zone-footer">
                                <div class="col-md-3 col-sm-3">
                                    <center><a title="Link Store" href="index.html">
                                        <img style="margin-top: 0px;" src="/Media/Default/UploadFiles/logolinkstore_1.png">
                                    </a></center>
                                <br>
                                </div>
                                <div class="col-md-3 col-xs-12" style="padding-left: 50px;">
                                    <div class="colF fix-border" style="list-style: none">
                                        <h4 class="title" style="font-size: 20px;margin-bottom: 15px;color: rebeccapurple">Thuý Kiều Shop</h4>
                                        <li>
                                            <a title="Trang chủ" href="{{route('home')}}">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a title="Giới thiệu" href="">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a title="Sản phẩm tại" href="{{route('products_all')}}">Sản phẩm</a>
                                        </li>
                                        <li>
                                            <a title="Tin tức" href="{{route('news_all')}}">Tin tức</a>
                                        </li>

                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12" style="padding-left: 50px;">
                                    <div class="colF fix-border" style="list-style: none">
                                        <h4 class="title" style="font-size: 20px;margin-bottom: 15px;color: rebeccapurple">Life Sports</h4>
                                        <li>
                                            <a href="http://votapacs.com/thong-tin/10.html">Về chúng tôi</a>
                                        </li>
                                        <li>
                                            <a href="http://votapacs.com/thong-tin/11.html">Chính sách bảo mật</a>
                                        </li>
                                        <li>
                                            <a href="http://votapacs.com/thong-tin/12.html">Liên hệ</a>
                                        </li>
                                        <li>
                                            <a href="http://votapacs.com/thong-tin/14.html">Điều khoản sử dụng</a>
                                        </li>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12" style="padding-left: 50px;">
                                    <div class="colF fix-border" style="list-style: none">
                                        <h4 class="title" style="font-size: 20px;margin-bottom: 15px;color: rebeccapurple">Hỗ trợ khách hàng</h4>
                                        <li>
                                            <a href="http://votapacs.com/thong-tin/10.html">Email :  Thuykieushop@gmail.com</a>
                                        </li>
                                        <li>
                                            <a href="http://votapacs.com/thong-tin/11.html">ĐT: 0932 79 8368 - 0985 985 997 </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        Copyright © 2017   -|-   THUYKIEUSHOP - SHOP MỸ PHẨM HÀN QUỐC<br>
                        Địa chỉ: 635 Quang Trung, Phường 11, Quận Gò Vấp, Hồ Chí Minh. -|- Hotline: 0932 79 8368 - 0985 985 997

                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>
<script type="text/javascript" src="/Scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Scripts/jquery.validate.unobtrusive.js"></script>
<script type="text/javascript" src="/Scripts/jquery.unobtrusive-ajax.min.js"></script>
<script type="text/javascript" src="/Scripts/jquery.fineuploader-3.7.0.min.js"></script>
<script type="text/javascript" src="/Scripts/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/Scripts/user_jquery.popup.js"></script>
<script type="text/javascript" src="/Scripts/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript">$(document).ready(function(){
        $('#nivoSlider_78c36e58491842b681decba767d4160a').nivoSlider({ controlNavThumbs: false, controlNav: false, effect: 'random', pauseTime: 4000 });
    });</script>
<script type="text/javascript" src="/Scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="/Scripts/jquery.colorbox-min.js"></script>
<script>
    function resetTabs() {
        $("#contentdm > div").hide(); //Hide all content
        $("#tabs a").attr("id", ""); //Reset id's
    }
    var myUrl = window.location.href; //get URL
    var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For localhost/tabs.html#tab2, myUrlTab = #tab2
    var myUrlTabName = myUrlTab.substring(0, 4); // For the above example, myUrlTabName = #tab
    (function () {
        $("#contentdm > div").hide(); // Initially hide all content
        $("#tabs li:first a").attr("id", "current"); // Activate first tab
        $("#contentdm > div:first").fadeIn(); // Show first tab content
        $("#tabs a").on("click", function (e) {
            e.preventDefault();
            if ($(this).attr("id") == "current") { //detection for current tab
                return
            }
            else {
                resetTabs();
                $(this).attr("id", "current"); // Activate this
                $($(this).attr('name')).fadeIn(); // Show content for current tab
            }
        });
        for (i = 1; i <= $("#tabs li").length; i++) {
            if (myUrlTab == myUrlTabName + i) {
                resetTabs();
                $("a[name='" + myUrlTab + "']").attr("id", "current"); // Activate url tab
                $(myUrlTab).fadeIn(); // Show url tab content
            }
        }
    })()
</script>
</body>
</html>