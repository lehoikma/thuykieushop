@extends('admin.layouts.app')
@section('title', 'Edit Category')
@section('titleClick', 'Danh Sách Đặt Hàng')
@section('content')
    <div class="col-md-12">
        <h5 style="color: rebeccapurple; font-weight: bold">CHƯA XỬ LÝ</h5>
        <div id="no-more-tables">
            <table id="giohang" class="col-md-12 table-bordered table-striped table-condensed cf" style="margin-top:10px">
                <thead class="cf">
                <tr>
                    <th class="visible-lg" style="text-align: center"></th>
                    <th style="text-align: center">Ngày đặt hàng</th>
                    <th style="text-align: center">Tên sản phẩm</th>
                    <th style="text-align: center">Địa Chỉ</th>
                    <th style="text-align: center">Số lượng</th>
                    <th style="text-align: center">Tổng giá</th>
                    <th style="text-align: center">Công cụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orderNo as $value)
                    <tr bgcolor="#FFFFFF">
                        <td class="visible-lg" width="10%" align="center">
                            <img src="/image/bg@1x1.png" style="background: url('/upload/{{$value->products->avatar}}') center center/cover no-repeat; width: 100%;">
                        </td>
                        <td width="30%" style="text-align: center">
                                {{date("d-m-Y", strtotime($value->created_at))}}
                        </td>
                        <td width="30%" style="text-align: center">
                            <a class="name" href="#">
                                {{$value->products->name}}
                            </a>
                        </td>
                        <td width="30%" style="text-align: center">
                            <div class="price-real">
                                {{$value->members->name}} - {{$value->members->address}}-{{$value->members->phone}}-{{$value->members->mail}}
                            </div>
                        </td>
                        <td width="" style="text-align: center">
                            {{$value['numbers']}}
                        </td>
                        <td width="" style="text-align: center" class="price-total">
                            {{$value['price_orders']}}
                        </td>
                        <td width="" style="text-align: center">
                            <a href="{{route('switch_status', $value['id'])}}">
                                <button type="button" class="btn btn-default" id="xuly_done">
                                    Đã Xử Lý
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-12">
        <h5 style="color: rebeccapurple; font-weight: bold; margin-top: 30px">ĐÃ XỬ LÝ</h5>
        <div id="no-more-tables">
            <table id="giohang" class="col-md-12 table-bordered table-striped table-condensed cf" style="margin-top:10px">
                <thead class="cf">
                <tr>
                    <th class="visible-lg" style="text-align: center"></th>
                    <th style="text-align: center">Ngày đặt hàng</th>
                    <th style="text-align: center">Tên sản phẩm</th>
                    <th style="text-align: center">Địa Chỉ</th>
                    <th style="text-align: center">Số lượng</th>
                    <th style="text-align: center">Tổng giá</th>
                    <th style="text-align: center">Công cụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orderYes as $value)
                    <tr bgcolor="#FFFFFF">
                        <td class="visible-lg" width="10%" align="center">
                            <img src="/image/bg@1x1.png" style="background: url('/upload/{{$value->products->avatar}}') center center/cover no-repeat; width: 100%;">
                        </td>
                        <td width="30%" style="text-align: center">
                            {{date("d-m-Y", strtotime($value->created_at))}}
                        </td>
                        <td width="30%">
                            <a class="name" href="#">
                                {{$value->products->name}}
                            </a>
                        </td>
                        <td width="30%" align="center">
                            <div class="price-real">
                                {{$value->members->name}} - {{$value->members->address}}-{{$value->members->phone}}-{{$value->members->mail}}
                            </div>
                        </td>
                        <td width="" align="center">
                            {{$value['numbers']}}
                        </td>
                        <td width="" align="center" class="price-total">
                            {{$value['price_orders']}}
                        </td>
                        <td width="" align="center">
                            <a href="{{route('switch_status1', $value['id'])}}">
                                <button type="button" class="btn btn-default" id="xuly_done">
                                    Chưa Xử Lý
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{$orderYes->links()}}
            </div>
        </div>
    </div>
@endsection