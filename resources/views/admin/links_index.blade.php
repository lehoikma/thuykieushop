@extends('admin.layouts.app')
@section('title', 'List Category')
@section('titleClick', 'Tạo Links')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{route('links_save')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-4" class="form-inline">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-md-8" class="form-inline">
                        <label>Links</label>
                        <input type="text" class="form-control" name="link" value="http://">
                    </div>
                </div>

                <div class="row">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary"> Tạo</button>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên</th>
                            <th>Links</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($link as $value)
                            <tr>
                                <td>{{$value['id']}}</td>
                                <td>{{$value['name']}}</td>
                                <td>{{$value['link']}}</td>
                                <td style="width:5%">
                                        <input id="idLink" type="hidden" name="id" value="{{$value['id']}}">
                                        <button type="button" class="btn btn-primary btn-sm delete" data-datac="{{$value['id']}}">
                                            Xoá
                                        </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".delete").click(function () {
                var idLink = $(this).attr('data-datac');
                var url = '{{ route('links_delete') }}';
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {'_token': "{{ csrf_token() }}", 'idLink' : idLink},
                    success: function( msg ) {
                        location.reload();
                    }
                });
            });
        })
    </script>
@endsection