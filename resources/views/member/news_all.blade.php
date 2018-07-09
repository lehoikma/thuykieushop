@extends('member.layouts.app')
@section('content')
    <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 0px;margin-bottom: 20px;">
        <div class="title_sanpham_center" style="margin-bottom: 10px;">
            <div id="title_sanpham_center" style="border-radius: 5px;">
                <ul id="tabs" style="
                            width: 180px;
                            border-radius: 8px;
                        ">
                    <center><a id="current" name="#tab1" href="#">Tin tức - Cẩm nang</a></center>
                </ul>
            </div>
        </div>
        @foreach($news as $value)
        <div class="row" style="margin-left: 0px;margin-right: 0px;margin-top: 10px;">
            <div class="col-lg-2 col-md-2">
                <center><img src="upload/{{$value['news_image']}}" style="height : 170px;max-width: 100%"></center>
            </div>
            <div class="col-lg-10 col-md-10">
                <a href="{{route('news_detail',[$value['slug'], $value['id']])}}">
                    <h3 style="margin-left: 10px;">{{$value['title']}}</h3>
                </a>
                <h4 style="margin-left: 10px;">
                    {{ $value['description'] }}
                </h4>
            </div>
        </div>
        @endforeach
        <div class="text-center" style="justify-content: center;display: grid;">
            {{$news->links()}}
        </div>
    </div>
@endsection