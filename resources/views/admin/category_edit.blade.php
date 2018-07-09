@extends('admin.layouts.app')
@section('title', 'Edit Category')
@section('titleClick', 'Sửa Danh Mục')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('category_update')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-2">
                        <label>Tên Danh Mục:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="title" value="{{$category['title']}}">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Danh Mục:</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="parent_id">
                            <option value="0">---------------</option>
                            @foreach($categories as $value)
                                <option value="{{$value['id']}}" @if($category['parent_id'] == $value['id']) selected @endif>{{$value['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Tên Seo:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="ten_seo" value="{{$category['name_seo']}}">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Từ Khoá:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="keyword" value="{{$category['keyword']}}">
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Mô tả:</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" rows="6" id="comment" name="description" >{{$category['description']}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                        <label>Vị Trí:</label>
                    </div>
                    <div class="col-md-1">
                        <input type="text" class="form-control"  name="orders" value="{{$category['orders']}}">
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
                <input type="hidden" name="idCategory" value="{{$category['id']}}">

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection