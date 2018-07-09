@extends('admin.layouts.app')
@section('title', 'List Category')
@section('titleClick', 'List Tags')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Tên</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $value)
                    <tr>
                        <td>{{$value['id']}}</td>
                        <td>{{$value['name']}}</td>
                        <td style="width:5%">
                            <a href="{{route('tags_edit', $value['id'])}}">
                                <button type="button" class="btn btn-primary btn-sm">
                                    Sửa
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('tag_delete')}}" method="post" id="form_delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $value['id'] }}">
                                <button id="delete" type="submit" class="btn btn-primary btn-sm">
                                    Xoá
                                </button>
                            </form>

                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{$tags->links()}}
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $("button").click(function () {
                if (this.id == "delete") {
                    if (!confirm('Bạn có muốn xoá tag không ?')) {
                        return false;
                    }
                    return true;
                }
            });
        })
    </script>
@endsection