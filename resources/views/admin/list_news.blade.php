@extends('admin.layouts.app')
@section('title', 'List Tin Tức')
@section('titleClick', 'List Tin Tức ')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <table class="table" style="width:100%">
                <tr>
                    <th style="width:10%">id</th>
                    <th style="width:50%">Tên</th>
                    <th style="width:20%">Trạng Thái</th>
                    <th style="width:10%">
                        <a href="{{route('news_add')}}">
                            <button type="button" class="btn btn-primary btn-sm" style="background: #6200ff;
    color: white;
    font-weight: bold;
    font-size: 14px;">
                                Thêm tin tức mới
                            </button>
                        </a>
                    </th>
                    <th style="width:10%">
                    </th>
                </tr>
                @foreach($news as $value)
                    <tr>
                        <td style="width:10%">{{$value['id']}}</td>
                        <td style="width:50%">{{$value['title']}}</td>
                        <td style="width: 20%">{{$value['status_display'] == 1 ? 'Hiện' : 'Ẩn'}}</td>
                        <td style="width:5%">
                            <a href="{{route('news_edit', $value['id'])}}">
                                <button type="button" class="btn btn-primary btn-sm">
                                    Sửa
                                </button>
                            </a>
                        </td>
                        <td style="width:5%">
                            <form action="{{route('news_delete')}}" method="post" id="form_delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $value['id'] }}">
                                <button id="delete" type="submit" class="btn btn-primary btn-sm">
                                    Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $("button").click(function () {
                if (this.id == "delete") {
                    if (!confirm('Bạn có muốn xoá tin tức không ?')) {
                        return false;
                    }
                    return true;
                }
            });
        })
    </script>
@endsection