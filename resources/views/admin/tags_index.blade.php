@extends('admin.layouts.app')
@section('title', 'Mỹ Phẩm Unique')
@section('titleClick', 'Tạo Tags')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('tag_create')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Tên Tags:</label>
                        <input type="text" class="form-control" id="email" name="name">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary"> Tạo Tag</button>
            </form>
        </div>
        <div class="row" style="margin-top: 30px">
            <a href="{{route('tag_list')}}">
                <button type="button" class="btn btn-primary"> Hiện Thị Tất cả Tag</button>
            </a>
        </div>
    </div>
@endsection