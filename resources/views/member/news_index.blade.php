@extends('member.layouts.app')
@section('description'){{$news['description']}} @endsection
@section('keywords'){{$news['key_word']}}@endsection
@section('title')
    {{$news['name_seo']}}
@endsection
@section('content')
    <style type="text/css">
        @media only screen and (max-width: 500px) {
            .test-image img {
                width: 100% !important;
                height:auto !important;
            }
        }
    </style>
    <div class="row">
        <div class="title_sanpham_center" style="margin-bottom: 10px;">
            <div id="title_sanpham_center" style="border-radius: 5px;">
                <ul id="tabs" style="
                            width: 180px;
                            border-radius: 6px;
                        ">
                    <center><a id="current" name="#tab1" href="#">Tin t&#7913;c - C&#7849;m nang</a></center>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 10px; margin-top: 15px; color: #426aca;">
            {{$news['title']}}
        </h3>
        <div class="test-image">
            {!! $news['content'] !!}
        </div>
    </div>
    @if(isset($news->tags->name))
        <div class="row">
            <b style="color: #0000cc; font-size: 14px">Tag</b> :
            <span style="color: darkmagenta; font-size: 14px">{{$news->tags->name }}</span>
        </div>
    @endif
    <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 25px;margin-bottom: 20px;">
        <div class="title_sanpham_center" style="margin-bottom: 10px;">
            <div id="title_sanpham_center" style="border-radius: 5px;">
                <ul id="tabs" style="
                            width: 180px;
                            border-radius: 6px;
                        ">
                    <center><a id="current" name="#tab1" href="#">Tin t&#7913;c khác</a></center>
                </ul>
            </div>
        </div>
        @foreach($newsAll as $value)
            <div class="row" style="margin-left: 0px; margin-right: 0px; margin-top: 10px;">
                <div class="col-lg-2 col-md-2">
                    <center><img src="/upload/{{$value['news_image']}}" style="height: 170px; max-width: 100%"></center>
                </div>
                <div class="col-lg-10 col-md-10">
                    <a href="{{route('news_detail', [$value['slug'], $value['id']])}}">
                        <h3 style="margin-left: 10px;">{{$value['title']}}</h3>
                    </a>
                    <h4 style="margin-left: 10px;">{{$value['description']}}</h4>
                </div>
            </div>
        @endforeach
    </div>
@endsection