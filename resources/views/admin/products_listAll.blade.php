@extends('admin.layouts.app')
@section('title', 'List Sản Phẩm')
@section('titleClick', 'Danh Sách Sản Phẩm ')
@section('content')
    <?php
    function showCategories($categories, $parent_id = 0, $char = '')
    {
        $requestData = app('request')->input('category');
        foreach ($categories as $item)
        {
            if ($item['parent_id'] == $parent_id)
            {
                if ($requestData == $item['id']) {
                    echo '<option value="'.$item['id'].'" selected>';
                } else {
                    echo '<option value="'.$item['id'].'">';
                }
                echo $char . $item['title'];
                echo '</option>';
                showCategories($categories, $item['id'], $char.'|---');
            }
        }
    }
    ?>
    <div class="container-fluid">
        <div class="row col-md-12" style="margin-bottom: 20px">
            <h5>Tìm Kiếm Sản Phẩm:</h5>
            <form action="" method="get" name="myForm">
                <div class="row col-md-5">
                    <select class="form-control" name="category">
                        <option></option>
                        <?php showCategories($categories);?>
                    </select>
                </div>
                <div class="col-md-5" style="margin-top: 3px">
                    <button type="submit" class="btn btn-primary btn-sm" style="background: #6200ff;color: white;border: #fffdfd;font-weight: bold;font-size: 14px;">
                        Tìm Kiếm
                    </button>
                </div>
            </form>
        </div>
        <div class="row">
            <table class="table" style="width:100%">
                <tr>
                    <th style="width:10%">ID</th>
                    <th style="width:20%">Hình Ảnh</th>
                    <th style="width:30%">Tên Sản Phẩm</th>
                    <th style="width:20%">Danh Mục</th>
                    <th style="width:10%">Trạng Thái</th>
                    <th style="width:5%">Giá</th>
                    <th style="width:5%">
                        <a href="{{route('products_create')}}">
                            <button type="button" class="btn btn-primary btn-sm" style="background: #6200ff;
    color: white;
    font-weight: bold;
    font-size: 14px;">
                                Thêm sản phẩm mới
                            </button>
                        </a>
                    </th>
                    <th style="width:10%"></th>
                </tr>
                @foreach($products as $value)
                    <tr>
                        <td style="width:10%">{{$value['id']}}</td>
                        <td style="width:20%">
                            <img class="cb-img lazy"
                                 src="/upload/{{$value['avatar']}}" style="display: block; width: 100px">
                        </td>
                        <td style="width:30%">{{$value['name']}}</td>
                        <td style="width:20%">{{$value->categories->title or ''}}</td>
                        <td style="width:10%; color: red">{{$value['status'] != null ? 'Hiện' : 'Ẩn'}}</td>
                        <td style="width:50%">{{number_format($value['price'])}} <span style="color: red">VNĐ</span></td>
                        <td style="width:5%">
                            <a href="{{route('products_edit', $value['id'])}}">
                                <button type="button" class="btn btn-primary btn-sm">
                                    Sửa
                                </button>
                            </a>
                        </td>
                        <td style="width:10%">
                            <form action="{{route('products_delete')}}" method="post" id="form_delete">
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
        <div class="row text-center">
            {{$products->links()}}
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