@extends('admin.layouts.app')
@section('title', 'Chỉnh Sửa Sản Phẩm')
@section('titleClick', 'Chỉnh Sửa Sản Phẩm')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('products_update')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Tên Sản Phẩm:</label>
                        <input type="text" class="form-control" name="name" value="{{$product['name']}}">
                    </div>
                </div>
                <div class="row">
                    <?php
                    function showCategories($categories, $parent_id = 0, $char = '', $product)
                    {
                        foreach ($categories as $item)
                        {
                            if ($item['parent_id'] == $parent_id)
                            {
                                if ($product->categories->id == $item['id']) {
                                    echo '<option value="'.$item['id'].'" selected>';
                                } else {
                                    echo '<option value="'.$item['id'].'">';
                                }
                                echo $char . $item['title'];
                                echo '</option>';
                                showCategories($categories, $item['id'], $char.'|---', $product);
                            }
                        }
                    }
                    ?>
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Danh Mục</label>
                        <select class="form-control" name="category_id">
                            <?php showCategories($categories, 0 , '', $product);?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4" class="form-inline">
                        <label>Xuất Xứ</label>
                        <input type="text" name="origin" class="form-control" value="{{$product['origin']}}">
                    </div>
                    <div class="form-group col-md-4" class="form-inline">
                        <label>Mã Sản Phẩm</label>
                        <input type="text" name="ma_sv" class="form-control" value="{{$product['ma_sv']}}">
                    </div>

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Giá:</label>
                        <input type="text" name="price" class="form-control" value="{{$product['price']}}">
                    </div>

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Giá Khuyến Mãi:</label>
                        <input type="text" name="price_km" class="form-control" value="{{$product['price_km']}}">
                    </div>

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Khối Lượng</label>
                        <input type="text" name="khoi_luong" class="form-control" value="{{$product['khoi_luong']}}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12" class="form-inline">
                        <label>Giới Thiệu Sản Phẩm</label>
                        <textarea class="form-control" rows="5" name="description"> {{$product['description']}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Content:</label>
                        <textarea id="editor1" name="content" rows="7" class="form-control ckeditor" placeholder="Write your message..">{{$product['content']}}</textarea>
                        <script src="/ckeditor/ckeditor.js"></script>

                        <script type="text/javascript">
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                </div>

                <div class="row" style="margin-top: 10px">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>KeyWord</label>
                        <input type="text" name="key_word" class="form-control" value="{{$product['key_word']}}">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                    <div class=" col-md-4">
                        <label>Hình ảnh:</label>
                        <input type="file" name="fileToUpload" id="avatar" accept="image/jpeg, image/jpg, image/png"
                               value="{{old('fileToUpload')}}" onchange="readURL(this)">
                        <img id="image" src="/upload/{{$product['avatar']}}" style="width: 150px; margin-top: 10px">
                    </div>
                    <div class=" col-md-4">
                        <label>Trạng Thái:</label>
                        <input type="checkbox" value="1" name="status" @if($product['status'] == 1) checked @endif> Check Hiện Thị / UnCheck Ẩn
                    </div>
                    <input type="hidden" name="idProduct" value="{{$product['id']}}">
                </div>
                <div class="row">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary"> Tạo Sản Phẩm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
<script type="application/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
            };
            $('#image').show();
            reader.readAsDataURL(input.files[0]);
        }
    }
    ;
</script>