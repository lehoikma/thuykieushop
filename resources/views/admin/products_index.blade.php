@extends('admin.layouts.app')
@section('title', 'Mỹ Phẩm Unique')
@section('titleClick', 'Tạo Sản Phẩm')
@section('content')
    <?php
    function showCategories($categories, $parent_id = 0, $char = '')
    {
        foreach ($categories as $item)
        {
            if ($item['parent_id'] == $parent_id)
            {
                echo '<option value="'.$item['id'].'">';
                echo $char . $item['title'];
                echo '</option>';
                showCategories($categories, $item['id'], $char.'|---');
            }
        }
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('products_save')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Tên Sản Phẩm:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Danh Mục</label>
                        <select class="form-control" name="category_id">
                            <?php showCategories($categories);?>
                        </select>
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Xuất Xứ</label>
                        <input type="text" name="origin" class="form-control">
                    </div>

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Mã Sản Phẩm</label>
                        <input type="text" name="ma_sv" class="form-control">
                    </div>

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Giá:</label>
                        <input type="text" name="price" class="form-control">
                    </div>

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Giá Khuyến Mãi:</label>
                        <input type="text" name="price_km" class="form-control">
                    </div>

                    <div class="form-group col-md-4" class="form-inline">
                        <label>Khối Lượng</label>
                        <input type="text" name="khoi_luong" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12" class="form-inline">
                        <label>Giới Thiệu Sản Phẩm</label>
                        <textarea class="form-control" rows="5" name="description"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Content:</label>
                        <textarea id="editor1" name="content" rows="7" class="form-control ckeditor" placeholder="Write your message.."></textarea>
                        <script src="/ckeditor/ckeditor.js"></script>

                        <script type="text/javascript">
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                </div>

                <div class="row" style="margin-top: 10px">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>KeyWord</label>
                        <input type="text" name="key_word" class="form-control">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                    <div class=" col-md-4">
                        <label>Hình ảnh:</label>
                        <input type="file" name="fileToUpload">
                    </div>
                    <div class=" col-md-4">
                        <label>Trạng Thái:</label>
                        <input type="checkbox" value="1" name="status"> Check Hiện Thị / UnCheck Ẩn
                    </div>
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