@extends('admin.layouts.app')
@section('title', 'Edit Tin Tức')
@section('titleClick', 'Edit Tin Tức')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('news_edit_save')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Tên Seo</label>
                        <input type="text" name="name_seo" class="form-control" value="{{$news['name_seo']}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12" class="form-inline">
                        <label>Giới Thiệu Sản Phẩm</label>
                        <textarea class="form-control" rows="5" name="description">{{$news['description']}}</textarea>
                    </div>
                </div>
                <label>Content:</label>
                <textarea id="editor1" name="content" rows="7" class="form-control ckeditor" placeholder="Write your message..">{{$news['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor1' );
                </script>

                <div class="row">
                    <div class=" col-md-8" style="margin-top: 10px">
                        <label>KeyWord</label>
                        <input type="text" name="key_word" class="form-control" value="{{$news['key_word']}}">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-8" style="margin-top: 10px">
                        <label>Tin khuyến mãi:</label>
                        <input type="checkbox" value="1" name="km"> Check Khuyến Mãi  / UnCheck Bình Thường
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-5">
                        <label>Trạng Thái:</label>
                        <input type="checkbox" value="1" name="status" @if($news['status_display'] == 1) checked @endif> Check Hiện Thị / UnCheck Ẩn
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-8" style="margin-top: 10px">
                        <label>Hình ảnh:</label>
                        <input type="file" name="fileToUpload">
                        <img id="image" src="/upload/{{$news['news_image']}}" style="width: 150px; margin-top: 10px">
                    </div>
                </div>
                <input type="hidden" name="idNews" value="{{$news['id']}}">
                <div class="row" style="text-align: center">
                    <button type="submit" class="btn btn-primary"> Sửa Tin Tức</button>
                </div>

            </form>
        </div>
    </div>
@endsection