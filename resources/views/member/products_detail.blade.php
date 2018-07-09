@extends('member.layouts.app')
@section('description'){{$product['description']}} @endsection
@section('keywords'){{$product['key_word']}}@endsection
@section('title')
    {{$product['name']}}
@endsection
@section('content')
    <style type="text/css">
        .fixed {position:fixed; top: 10px;
            z-index: 9999;}
        @media only screen and (max-width: 500px) {
            .test-image img {
                width: 100% !important;
                height:auto !important;
            }
        }
    </style>
    <div id="content" style="margin-left: 0px;">
        <div class="product-view">
            <div class="product-essential">
                <div class="row" style="margin-left: 0px;margin-right: 0px;margin-bottom: 15px; ">
                    <div class="col-lg-4 col-sm-4 col-xs-12 product-img-box" style="padding-top: 20px">
                        <div class="row-fluid">
                            <div style="min-width: 100%; min-height: 100%">
                                <div id="wrap" style="top:0px;z-index:9999;">
                                <a href="{{ \Request::fullUrl() }}" class="cloud-zoom" id="zoom1" rel="adjustX: 10, adjustY:-4" style="position: relative; display: block;">
                                        <center><img src="/upload/{{$product['avatar']}}" style="max-width: 100%; height: 275px; display: block;"></center>
                                    </a><div class="mousetrap" style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 324px; height: 324px; left: 0px; top: 0px; cursor: pointer;"></div></div>
                                {{--<img src="/upload/{{$product['avatar']}}" style="max-width: 100%; max-height: 380px; display: block;">--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-xs-12 product-shop">
                        <div class="wrap-product-shop" style="margin-left: 10px;">
                            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                                <label class="item_name"><h1 style="color: #426aca">{{$product['name']}}</h1></label>
                            </div>
                            <div class="row" style="border-top: 1px solid #91288F;border-bottom: 1px solid #91288F;margin-left: 0px;margin-right: 0px;margin-bottom: 10px;">
                                <div class="col-lg-12 col-sm-12 col-xs-12 product-shop" style="border-right: 1px solid #91288F;">
                                    <table border="0px;" style="width: 100%;">
                                        <tbody><tr>
                                            <td style="width: 50%;border-right: 1px solid #91288F; border-left: 1px solid #91288F ">Loại sản phẩm:</td>
                                            <td style="width: 50%;">
                                                <a href="{{route('categories_list_product', [$product->categories->slug, $product->categories->id])}}">
                                                    {{$product->categories->title}}
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid #91288F; border-left: 1px solid #91288F">Mã sản phẩm:</td>
                                            <td style="">{{$product['ma_sv']}}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid #91288F; border-left: 1px solid #91288F">Xuất xứ:</td>
                                            <td>{{$product['origin']}}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid #c91d67; border-left: 1px solid #91288F">Khối lượng</td>
                                            <td>{{ceil($product['khoi_luong']) or 'Đang cập nhật'}}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-right: 1px solid #c91d67; border-left: 1px solid #91288F">Giá Bán</td>
                                            @if($product['price_km'] != null)
                                                <td style="color: #C91D67; text-decoration: line-through;">{{$product['price']}} <sup>đ</sup></td>
                                            @else
                                                <td style="color: #C91D67">{{$product['price']}} <sup>đ</sup></td>
                                            @endif
                                        </tr>
                                        @if($product['price_km'] != null)
                                            <tr>
                                                <td style="border-right: 1px solid #c91d67; border-left: 1px solid #91288F">Giá Khuyến Mãi</td>
                                                <td style="color: #C91D67">{{$product['price']}} <sup>đ</sup></td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="border-right: 1px solid #c91d67; border-left: 1px solid #91288F">Lượt xem:</td>
                                            <td>{{$product['view']}}</td>
                                        </tr>
                                        <tr style="margin-top: 20px;">
                                            <td style="border-right: 1px solid #c91d67; border-left: 1px solid #91288F; border-top: 1px solid #91288f; padding: 10px; text-align: center">
                                                <form action="{{route('save_session_orders')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="idProductOrders" type="hidden" value="{{$product['id']}}">
                                                    <div id="scroller-anchor"></div>
                                                    <div id="hehi">
                                                        <button id= "scroller" type="submit" class="ShopCartAddNew" style="border:none; border-radius: 6px;"></button>
                                                        <button id="keke" type="button"  style="border:none; border-radius: 6px; width: 140px;
                                                                height: 40px;
                                                                background: #e62af3;
                                                                color: white;
                                                                display: none;
                                                                font-size: 14px;">
                                                            Hotline : 9999999999
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td style="border-top: 1px solid #91288f; padding-top: 20px;">
                                                <div style="float:left;margin-right: 15px;">
                                                    <b:if cond="data:post.isFirstPost">
                                                        <script>
                                                            (function (d) {
                                                                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) { return; }
                                                                js = d.createElement('script'); js.id = 1503214996582110; js.async = true;
                                                                js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                                                d.getElementsByTagName('head')[0].appendChild(js);
                                                            }(document));
                                                        </script>
                                                    </b:if>
                                                    <fb:like expr:href="data:post.canonicalUrl" layout="button_count" send="true" show_faces="false" font="arial" action="like" colorscheme="light" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;color_scheme=light&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Flinkstore.vn%2Fson-3ce-mood-recipe-matte-lip-color-117-chicful-sp1068&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f3a23925ac3c048" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FiKWhU6BAGf7.js%3Fversion%3D42%23cb%3Df38fbd9b0c64cc%26domain%3Dlinkstore.vn%26origin%3Dhttp%253A%252F%252Flinkstore.vn%252Ff1caab3ad2badf4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Flinkstore.vn%2Fson-3ce-mood-recipe-matte-lip-color-117-chicful-sp1068&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=true&amp;show_faces=false" style="border: none; visibility: visible; width: 122px; height: 20px;" class=""></iframe></span></fb:like>
                                                </div>
                                                <script type="text/javascript" src="http://apis.google.com/js/plusone.js" gapi_processed="true">
                                                    { lang: 'vi-VN' }
                                                </script>
                                                <div style="float:left;margin-left: 15px;">
                                                    <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1492165093598" name="I0_1492165093598" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;expr%3Ahref=data%3Apost.canonicalUrl&amp;hl=vi-VN&amp;origin=http%3A%2F%2Flinkstore.vn&amp;url=http%3A%2F%2Flinkstore.vn%2Fson-3ce-mood-recipe-matte-lip-color-117-chicful-sp1068&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.iOLPYRfsiLs.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCP7j_mW8QXYCU-CXzMtBglP0nSPew#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1492165093598&amp;parent=http%3A%2F%2Flinkstore.vn&amp;pfname=&amp;rpctoken=23738786" data-gapiattached="true" title="+1"></iframe></div></div>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <script type="text/javascript">
                                    $(function() {
                                        moveScroller();
                                    });
                                </script>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left: 0px;margin-right: 0px;">
                    <div class="title_sanpham_center" style="margin-bottom: 10px;">
                        <div class="title_sanpham_center" style="margin-bottom: 10px;">
                            <div id="title_sanpham_center" style="border-radius: 5px;">
                                <ul id="tabs" style="
                            width: 180px;
                            border-radius: 8px;
                        ">
                                    <center><a id="current" name="#tab1" href="#">Chi tiết sản phẩm</a></center>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>
                    <div class="test-image">
                        {!! $product['content'] !!}
                    </div>
                    <p></p>
                </div>
                @if(isset($news->tags->name))
                    <div class="row">
                        <b style="color: #0000cc; font-size: 14px">Tag</b> :
                        <span style="color: darkmagenta; font-size: 14px"><a>{{$news->tags->name}}</a></span>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="title_sanpham_center" style="margin-bottom: 10px;">
        <div class="title_sanpham_center" style="margin-bottom: 10px;">
            <div id="title_sanpham_center" style="border-radius: 5px;">
                <ul id="tabs" style="
                            width: 180px;
                            border-radius: 8px;
                        ">
                    <center><a id="current" name="#tab1" href="#">Sản phẩm khác</a></center>
                </ul>
            </div>
        </div>
    </div>
    <div class="row box-product" style="margin-bottom: 0px;margin-left: -5px;margin-right: -5px;">
        @foreach($productsAll as $value)
            <ul class="col-lg-33 col-md-33 col-sm-66 col-xs-12" style="padding-left: 0; padding-right: 0;">

                <li class="cb-item " style="margin-bottom: 0px;padding: 1px;">
                    <div class="cbi-content" style="border: 1px #c91d67 solid;margin:10px 5px;">
                        <a href="">
                            <img src="/image/bg@1x1.png"
                                 style="background: url('/upload/{{$value['avatar']}}') center center/cover no-repeat; width: 100%;">
                        </a>
                        <div class="sli-name" style="padding-left: 8px;padding-right: 8px;height: 56px;">
                            <a href="">
                                {{$value['name']}}
                            </a>
                        </div>
                        <ul class="spu-ul" style="padding-left: 0px;padding-right: 0px">
                            <li class="new-price" style="font-size: 14px">
                                {{number_format($value['price'])}}
                                <sup>đ</sup>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        @endforeach
    </div>
    <script type="application/javascript">
            function moveScroller() {
                var $anchor = $("#scroller-anchor");
                var $scroller = $('#hehi');
                var $scrol = $('#keke');

                var move = function() {
                    var st = $(window).scrollTop();
                    var ot = $anchor.offset().top;
                    if(st > ot) {
                        $scrol.css({
                            display: "inline",
                        });
                        $scroller.css({
                            position: "fixed",
                            top: "0px",
                            'z-index': "9999",
//                            right: 0,
//                            top: 10
                        });
                    } else {
                        if(st <= ot) {
                            $scrol.css({
                                display: "none",
                            });
                            $scroller.css({
                                position: "relative",
                                top: ""
                            });
                        }
                    }
                };
                $(window).scroll(move);
                move();
            }
    </script>
@endsection