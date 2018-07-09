@extends('member.layouts.app')
@section('content')
    <style type="text/css">
        .btn-hihi {
            color: #fff;
            background-color: #ae8ac8;
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style>
    <div class="shop">
        <div class="box_containerlienhe">
            <div class="title-global">
                <h2 style="color: #9f439d; margin-bottom: 15px">ĐẶT HÀNG VÀ THANH TOÁN</h2>
                <div class="clearfix"></div></div>
        <form action="{{route('pay_orders_save')}}" method="post">
            {{csrf_field()}}
            <div class="col-xs-12 col-sm-6 bill_form">
                <div class="title" style="color: #e46060;font-size: 16px;margin-bottom: 15px;">Thông tin thanh toán</div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Họ tên<span>*</span></label>
                        <div class="col-sm-9">
                            <input class="t form-control" name="name" id="ten" type="text" value="{{old('name')}}">
                            @if ($errors->has('name'))
                                <p class="help-block text-left"
                                   style="color: red">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Điện thoại<span>*</span></label>
                        <div class="col-sm-9">
                            <input class="t form-control" name="phone" id="dienthoai" type="text" value="{{old('phone')}}">
                            @if ($errors->has('phone'))
                                <p class="help-block text-left"
                                   style="color: red">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Địa chỉ<span>*</span></label>
                        <div class="col-sm-9">
                            <input class="t form-control" name="address" id="diachi" type="text" value="{{old('address')}}">
                            @if ($errors->has('address'))
                                <p class="help-block text-left"
                                   style="color: red">{{ $errors->first('address') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">E-Mail<span>*</span></label>
                        <div class="col-sm-9">
                            <input class="t form-control" name="email" id="email" type="text" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <p class="help-block text-left"
                                   style="color: red">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12" id="box-shopcart">
                @if(!empty($products))
                    <div id="no-more-tables">
                        <table id="giohang" class="col-md-12 table-bordered table-striped table-condensed cf" style="margin-top:10px">
                            <thead class="cf">
                                <tr>
                                    <th class="visible-lg" align="center"></th>
                                    <th>Tên sản phẩm</th>
                                    <th align="center">Giá bán</th>
                                    <th align="center">Số lượng</th>
                                    <th align="center">Tổng giá</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $count = 0; ?>
                            @foreach($products as $value)
                                <tr bgcolor="#FFFFFF">
                                    <td class="visible-lg" width="10%" align="center">
                                        <img src="/image/bg@1x1.png"
                                             style="background: url('/upload/{{$value->avatar}}') center center/cover no-repeat; width: 100%;">
                                    </td>
                                    <td width="50%">
                                        <a class="name" href="{{route('products_detail', [$value->slug, $value->id])}}">
                                            {{strtoupper($value->name)}}
                                        </a>
                                    </td>
                                    <td width="" align="center">
                                        <div class="price-real">{{$value->price_km ? number_format($value->price_km) :
                                         number_format($value->price)}} VNĐ</div>
                                    </td>
                                    <td width="" align="center">
                                        <?php $countBooking = array_count_values(Session::get('hello')['cart']);?>
                                        {{$countBooking[$value->id]}}
                                    </td>
                                    <td width="" align="center" class="price-total">
                                        {{$value->price_km ? number_format($value->price_km*$countBooking[$value->id]) :
                                        number_format($value->price*$countBooking[$value->id])}} VNĐ
                                    </td>
                                </tr>
                                <?php
                                $count += $value->price_km ?
                                    $value->price_km*$countBooking[$value->id] :
                                    $value->price*$countBooking[$value->id];
                                ?>
                            @endforeach
                            <tr>
                                <td colspan="6" style="padding:10px">
                                    <h3 class="all-cart-price">Tổng giá: {{number_format($count)}} VNĐ</h3>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <a href="{{route('member_orders')}}">
                                        <button type="button" class="btn btn- btn-hihi">QUAY LẠI GIỎ HÀNG</button>
                                    </a>
                                    <button type="submit" class="btn btn- btn-hihi">XÁC NHẬN THANH TOÁN </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                 @else
                    Không có sản phẩm nào trong giỏ hàng.
                @endif
            </div>
            <div class="clearfix"></div>
        </form>
        </div>
    </div>
@endsection