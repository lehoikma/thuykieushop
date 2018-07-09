@extends('admin.layouts.app')
@section('title', 'Mỹ Phẩm Unique')
@section('titleClick', 'Tạo Danh Mục')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('category_add')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-2">
                        <label>Tên Danh Mục:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Danh Mục Cha:</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="parent_id">
                            <option value="0">---------------</option>
                            @foreach($categories as $value)
                                <option value="{{$value['id']}}">{{$value['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Tên Seo:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="ten_seo">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Từ Khoá:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="keyword">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Mô tả:</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" rows="6" id="comment" name="description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Vị Trí:</label>
                    </div>
                    <div class="col-md-1">
                        <input type="text" class="form-control"  name="orders">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Trạng Thái:</label>
                    </div>
                    <div class="col-md-5">
                            <input type="checkbox" value="1" name="status"> Check Hiện Thị / UnCheck Ẩn
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"> Cập Nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection