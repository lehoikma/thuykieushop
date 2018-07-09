@extends('member.layouts.app')
@section('description')Thuý Kiều Shop chuyên phân phối mỹ phẩm cao cấp chính hãng như phấn, son môi, trang điểm mắt, phấn má hồng, nước hoa, bộ dụng cụ làm đẹp… với giá cả cạnh tranh nhất. Muốn Chảnh Phải Đẹp - Muốn Đẹp Hãy Đến Thuý Kiều Shop. @endsection
@section('keywords')thuy kieu, thuy kieu shop @endsection
@section('title') Thuý Kiều Shop - Mỹ Phẩm Chính Hãng Cao Cấp @endsection
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-8 highlighted">
            <div class="row-fluid">
                <div class="zone zone-slide-image">
                    <div class="slider-wrapper theme-default">
                        <div id="nivoSlider_78c36e58491842b681decba767d4160a" class="nivoSlider" style="max-width:680;max-height:350;">
                            <a href="#"><img src="Media/Default/Slideshow/3.png" alt title /></a>
                            <a href="#"><img src="Media/Default/Slideshow/4.png" alt title /></a>
                            <a href="#"><img src="Media/Default/Slideshow/5.png" alt title /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid hidden-xs hidden-sm" style="margin-top: 5px;">
                <div style="border: 1px #91288F solid;border-radius:4px;height: 180px;">
                    <div class="list_carousel responsive" style="margin: 7px;height: 170px;">
                        <ul id="foo4" style="width: 90%;margin-left: 1px;">
                            @foreach($productAll as $value)
                                <li>
                                    <a href="{{route('products_detail', [$value['slug'], $value['id']] )}}">
                                        <img src="/image/bg@1x1.png"
                                             style="background: url('/upload/{{$value['avatar']}}') center center/cover no-repeat; width: 100%;">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <script type="text/javascript" language="javascript">
                        $(function () {
                            $('#foo4').carouFredSel({
                                responsive: true,
                                width: '100%',
                                scroll: 4,
                                items: {
                                    width: 170,
                                    visible: {
                                        min: 4,
                                        max: 4
                                    }
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 highlighted">
            <div class="container">
                <div id="ves-verticalmenu" class="block ves-verticalmenu highlighted hidden-xs hidden-sm" style="border: 0; padding-left: 10px">
                    <ul id="tabs">
                        <center><a id="current" name="#tab1" href="#">Tin Tức - Cẩm Nang</a></center>
                    </ul>
                    <div class="block-content">
                        <div class="navbar navbar-inverse" style="margin-bottom: 9px;">
                            <div class="row-fluid" style="margin-bottom: 8px;">
                                @foreach($news as $value)
                                    <dl class="dl-horizontal" style="margin-bottom: 7px; font-family: Tahoma">
                                        <dt style="text-align: center;">
                                            <a href="{{route('news_detail', [$value['slug'], $value['id']])}}">
                                                <img style="vertical-align: middle;margin-top: 5px; margin-left: 5px; width: 45px;height: 45px;" title="{{$value['title']}}" alt="{{$value['title']}}"
                                                     src="upload/{{$value['news_image']}}">
                                            </a>
                                        </dt>
                                        <dd>
                                            <a style="font-size: 14px;color: #91288F;height: 50px;" href="{{route('news_detail', [$value['slug'], $value['id']])}}">
                                                {{$value['title']}}
                                            </a>
                                        </dd>
                                    </dl>
                                @endforeach
                            </div>
                            <div class="text-center"><a href="{{route('news_all')}}" style="color: #c83a3a">Xem thêm...</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-ld-12 col-md-12">
            <div id="" style="width: 180px; margin-top: 10px; border-radius: 8px; padding: 10px 0px; background: #e62af3; text-align: center; text-transform: uppercase">
                <a href="{{route('sale')}}" id="current" style="    color: #faecff;
    font-weight: bold;">Khuyến mãi</a>
            </div>
            <div class="0 block categorytabs">
                <div class="tab-content">
                    <div class="row box-product" style="margin : 0px -5px -5px -5px;">
                        @foreach($productsKM as $value)
                            <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 0; padding-right: 0;">

                                <li class="cb-item " style="padding: 0px;">
                                    <div class="cbi-content" style="border: 1px #c91d67 solid">
                                        <b id="icon36" class="pi pix1">
                                            <span>-{{100-round($value['price_km']/$value['price']*100)}}</span>
                                            %
                                        </b>
                                        <a href="{{route('products_detail', [$value['slug'], $value['id']] )}}">
                                            <img src="/image/bg@1x1.png"
                                                 style="background: url('/upload/{{$value['avatar']}}') center center/cover no-repeat; width: 100%;">
                                        </a>
                                        <div class="sli-name" style="margin-top: 5px">
                                            <a href="{{route('products_detail', [$value['slug'], $value['id']] )}}">
                                                {{$value['name']}}
                                            </a>
                                        </div>

                                        <ul class="spu-ul">
                                            <li class="old-price" style="float: left;">
                                                {{number_format($value['price'])}}
                                                <sup>đ</sup>
                                            </li>
                                            <li class="new-price" style="float: right">
                                                {{number_format($value['price_km'])}}
                                                <sup>đ</sup>
                                            </li>

                                        </ul>
                                    </div>

                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-ld-12 col-md-12">
            <div id="" style="width: 180px; margin-top: 10px; border-radius: 8px; padding: 10px 0px; background: #e62af3; text-align: center; text-transform: uppercase">
                <a href="{{route('product_big')}}" id="current" style="    color: #faecff;
    font-weight: bold;">Sản phẩm bán chạy</a>
            </div>
            <div class="0 block categorytabs">
                <div class="tab-content">
                    <div class="row box-product" style="margin : 0px -5px -5px -5px;">
                        @if(!empty($orders->toArray()))
                                @foreach($orders as $value)
                                <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 0; padding-right: 0; " >
                                    <li class="cb-item " style="padding: 0px;">
                                        <div class="cbi-content" style="border: 1px #c91dc1 solid">
                                            <a href="{{route('products_detail', [$value->products->slug, $value->products->id] )}}">
                                                <img src="/image/bg@1x1.png"
                                                     style="background: url('/upload/{{$value->products->avatar or ''}}') center center/cover no-repeat; width: 100%;">
                                            </a>

                                            <div class="sli-name">
                                                <a href="{{route('products_detail', [$value->products->slug, $value->products->id] )}}">
                                                    {{$value->products->name}}
                                                </a>
                                            </div>
                                            <ul class="spu-ul">
                                                <li class="new-price">
                                                    {{$value->products->price}}
                                                    <sup>đ</sup>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection