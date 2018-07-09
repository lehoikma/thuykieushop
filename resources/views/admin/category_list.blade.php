@extends('admin.layouts.app')
@section('title', 'List Danh Mục')
@section('titleClick', 'List Danh Mục')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Tên danh mục</th>
                    <th>
                        <a href="{{route('admin_categories')}}">
                            <button type="button" class="btn btn-primary btn-sm" style="background: #6200ff;
    color: white;
    font-weight: bold;
    font-size: 14px;">
                                Thêm danh mục mới
                            </button>
                        </a>
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categoriesParent as $category)
                    <tr>
                        <td>{{$category['id']}}</td>
                        <td><b>{{$category['title']}}</b></td>
                        <td style="text-align: center" width="10%">
                            <a href="{{route('category_edit', $category['id'])}}">
                                <button type="button" class="btn btn-primary btn-sm">
                                    Sửa
                                </button>
                            </a>
                        </td>
                        <td style="text-align: center" width="10%">
                            <form action="{{route('categories_delete')}}" method="post" id="form_delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $category['id'] }}">
                                <button id="delete" type="submit" class="btn btn-primary btn-sm">
                                    Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    @foreach($categories as $value)
                        @if($value['parent_id'] == $category['id'])
                            <tr>
                                <td></td>
                                <td><i>--- {{$value['title']}}</i></td>
                                <td style="text-align: center" width="10%">
                                    <a href="{{route('category_edit', $value['id'])}}">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Sửa
                                        </button>
                                    </a>
                                </td>
                                <td style="text-align: center" width="10%">
                                    <form action="{{route('categories_delete')}}" method="post" id="form_delete">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id" value="{{ $value['id'] }}">
                                        <button id="delete" type="submit" class="btn btn-primary btn-sm">
                                            Xoá
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $("button").click(function () {
                if (this.id == "delete") {
                    if (!confirm('Bạn có muốn xoá danh mục không ?')) {
                        return false;
                    }
                    return true;
                }
            });
        })
    </script>
@endsection