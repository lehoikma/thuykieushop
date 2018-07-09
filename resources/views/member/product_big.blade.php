@extends('member.layouts.app')
@section('content')
    <div class="title_sanpham_center col-ld-12" style="width: 240px">
        <ul id="tabs">
            <center><a id="current" name="#tab1" href="#">Sản Phẩm Bán Chạy</a></center>
        </ul>
    </div>
    <div class="row" style="margin-bottom: 15px">
    </div>
    <div class="row">
        <div class="col-ld-12 col-md-12">
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