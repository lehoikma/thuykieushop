@extends('member.layouts.app')
@if(count($product) > 0)
    @section('description')@if(isset($category1))<?php end($category1); $ct = \App\Models\Categories::where('id', $category1[key($category1)])->first();?>{{$ct->description}}@else
        <?php $a = \App\Models\Categories::where('id', $product[0]->category_id)->first()?>{{$a['description']}}@endif
    @endsection
    @section('keywords')@if(isset($category1))<?php end($category1); $ct = \App\Models\Categories::where('id', $category1[key($category1)])->first();?>{{$ct->keyword}}@else
        <?php $a = \App\Models\Categories::where('id', $product[0]->category_id)->first()?>{{$a['keyword']}}@endif
    @endsection
    @section('title')@if(isset($category1))<?php end($category1); $ct = \App\Models\Categories::where('id', $category1[key($category1)])->first();?>{{$ct->name_seo}}@else
        <?php $a = \App\Models\Categories::where('id', $product[0]->category_id)->first()?>{{$a['name_seo']}}@endif
    @endsection
@else
    @section('description')@if(isset($category1))<?php end($category1); $ct = \App\Models\Categories::where('id', $category1[key($category1)])->first();?>{{$ct->description}}@else
        <?php $a = \App\Models\Categories::where('id', $id)->first()?>{{$a['description']}}@endif
    @endsection
    @section('keywords')@if(isset($category1))<?php end($category1); $ct = \App\Models\Categories::where('id', $category1[key($category1)])->first();?>{{$ct->keyword}}@else
        <?php $a = \App\Models\Categories::where('id', $id)->first()?>{{$a['keyword']}}@endif
    @endsection
    @section('title')@if(isset($category1))<?php end($category1); $ct = \App\Models\Categories::where('id', $category1[key($category1)])->first();?>{{$ct->name_seo}}@else
        <?php $a = \App\Models\Categories::where('id', $id)->first()?>{{$a['name_seo']}}@endif
    @endsection
@endif
@section('content')
    <section id="ves-massbottom" class="ves-massbottom">
        <div class="container">
            <div class="0 block categorytabs">
                @if(isset($category1))
                    <?php end($category1); ?>
                        <div class="row" style="border: 1px solid rgba(156, 102, 154, 0.37)">
                            <div class ="col-md-2">
                                <img src="https://lipstick.vn/wp-content/uploads/2016/07/logo-chanel-catelogy.png" style="padding: 10px">
                            </div>
                            <div class="col-md-10" style="padding: 10px;font-family: monospace;">
                                <?php $ct = \App\Models\Categories::where('id', $category1[key($category1)])->first();
                                ?>
                                <p>{{ $ct->description}} </p>
                            </div>
                        </div>
                @else
                        <div class="row" style="border: 1px solid rgba(156, 102, 154, 0.37)">
                            <div class ="col-md-2">
                                <img src="https://lipstick.vn/wp-content/uploads/2016/07/logo-chanel-catelogy.png" style="padding: 10px">
                            </div>
                            @if(count($product) > 0)
                                <div class="col-md-10" style="padding: 10px;font-family: monospace;">
                                    <?php $a = \App\Models\Categories::where('id', $product[0]->category_id)->first()?>
                                        {{$a['description']}}
                                </div>
                            @else
                                <div class="col-md-10" style="padding: 10px;font-family: monospace;">
                                    <?php $a = \App\Models\Categories::where('id', $id)->first()?>
                                    {{$a['description']}}
                                </div>
                            @endif
                        </div>
                @endif
                <div class="tab-content">
                    @if(isset($category1))
                        <div class="row box-product" style="margin : 0px -5px -5px -5px;">
                            @foreach($product as $value)
                                <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 0; padding-right: 0; ">
                                    <li class="cb-item " style="padding: 0px;">
                                        <div class="cbi-content" style="border: 1px #c91d67 solid">
                                                                                    <a href="{{route('products_detail', [$value['slug'], $value['id']])}}">
                                            <img src="/image/bg@1x1.png"
                                            style="background: url('/upload/{{$value['avatar']}}') center center/cover no-repeat; width: 100%;">
                                            </a>
                                            <div class="sli-name">
                                                <a href="{{route('products_detail', [$value['slug'], $value['id']])}}">
                                                {{$value['name']}}
                                                </a>
                                            </div>
                                            <ul class="spu-ul">
                                                <li class="new-price">
                                                    {{number_format($value['price'])}}
                                                    <sup>đ</sup>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="row">
                            {{$product->links()}}
                        </div>
                    @else
                        <div class="row box-product" style="margin : 0px -5px -5px -5px;">
                            @foreach($product as $value)
                                    <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 0; padding-right: 0; ">
                                        <li class="cb-item " style="padding: 0px;">
                                            <div class="cbi-content" style="border: 1px #c91d67 solid">
                                                <a href="{{route('products_detail', [$value['slug'], $value['id']])}}">
                                                    <img src="/image/bg@1x1.png"
                                                         style="background: url('/upload/{{$value['avatar']}}') center center/cover no-repeat; width: 100%;">
                                                </a>
                                                <div class="sli-name">
                                                    <a href="{{route('products_detail', [$value['slug'], $value['id']])}}">
                                                        {{$value['name']}}
                                                    </a>
                                                </div>
                                                <ul class="spu-ul">
                                                    <li class="new-price">
                                                        {{number_format($value['price'])}}
                                                        <sup>đ</sup>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                            @endforeach
                        </div>
                        <div class="row">
                            {{$product->links()}}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection