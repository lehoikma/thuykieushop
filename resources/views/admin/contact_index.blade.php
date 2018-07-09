@extends('admin.layouts.app')
@section('title', 'Liên Hệ')
@section('titleClick', 'Liên Hệ')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Số Điện Thoai</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($contact as $value)
                    <tr class="success">
                        <td>{{$value['id']}}</td>
                        <td>{{$value['name']}}</td>
                        <td>{{$value['tel']}}</td>
                        <td>{{$value['email']}}</td>
                        <td>
                            <form action="{{route('contact_lh')}}" method="post" id="form_delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $value['id'] }}">
                                <button id="delete" type="submit" class="btn btn-primary btn-sm">
                                    Đã Liên Hệ
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection