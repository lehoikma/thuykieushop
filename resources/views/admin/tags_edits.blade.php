@extends('admin.layouts.app')
@section('title', 'Mỹ Phẩm Unique')
@section('titleClick', 'Sửa Tags')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('tags_edit_save')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Tên Tags:</label>
                        <input type="text" class="form-control" id="email" name="name" value="{{$tag['name']}}">
                        <input type="hidden" class="form-control" name="idTags" value="{{$tag['id']}}">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection