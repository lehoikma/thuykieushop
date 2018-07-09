@extends('member.layouts.app')
@section('content')
    <section id="ves-massbottom" class="ves-massbottom">
        <div class="container">
            <div class="0 block categorytabs">
                <div class="title_sanpham_center" style="margin-bottom: 10px;">
                    <div id="title_sanpham_center" style="border-radius: 5px;">
                        <ul id="tabs" style="
                            width: 180px;
                            border-radius: 6px;
                        ">
                            <center><a id="current" name="#tab1" href="#">Tags : {{$tags['name']}} </a></center>
                        </ul>
                    </div>
                </div>
                {{--<div class="tab-content">--}}
                    {{--<div class="row box-product" style="margin : 0px -5px -5px -5px;">--}}
                        {{--@foreach($products as $value)--}}
                            {{--<ul class="col-lg-2 col-md-2 col-sm-6 col-xs-12" style="padding-left: 0; padding-right: 0; ">--}}

                                {{--<li class="cb-item " style="padding: 0px;">--}}
                                    {{--<div class="cbi-content" style="border: 1px #c91d67 solid">--}}
                                        {{--<a href="{{route('products_detail', [$value['slug'], $value['id']])}}">--}}
                                            {{--<img src="/image/bg@1x1.png"--}}
                                                 {{--style="background: url('/upload/{{$value['avatar']}}') center center/cover no-repeat; width: 100%;">--}}
                                            {{--<img class="cb-img lazy" title="{{$value['name']}}" alt="{{$value['name']}}"--}}
                                                 {{--src="/upload/{{$value['avatar']}}" style="display: block;">--}}
                                        {{--</a>--}}
                                        {{--<div class="sli-name">--}}
                                            {{--<a href="{{route('products_detail', [$value['slug'], $value['id']])}}">--}}
                                                {{--{{$value['name']}}--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<ul class="spu-ul">--}}
                                            {{--<li class="new-price">--}}
                                                {{--{{number_format($value['price'])}}--}}
                                                {{--<sup>đ</sup>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
@endsection