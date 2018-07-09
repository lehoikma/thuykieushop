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
                <ul id="tabs" style="
                            width: 160px;
                            border-radius: 6px;
                        ">
                    <center><a id="current" name="#tab1" href="#">Giỏ hàng</a></center>
                </ul>
            <div class="content col-xs-12" id="box-shopcart">
                @if(!empty($products))
                    <form name="form1" method="post">
                    <div id="no-more-tables">
                        <table id="giohang" class="col-md-12 table-bordered table-striped table-condensed cf" style="margin-top:10px">
                            <thead class="cf">
                                <tr>
                                    <th class="visible-lg" align="center"></th>
                                    <th>Tên sản phẩm</th>
                                    <th align="center">Giá bán</th>
                                    <th align="center">Số lượng</th>
                                    <th align="center">Tổng giá</th>
                                    <th align="center">Công cụ</th>
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
                                    <td width="10%" align="center">
                                        <div class="price-real">{{$value->price_km ? number_format($value->price_km) :
                                         number_format($value->price)}} VNĐ</div>
                                    </td>
                                    <td width="10%" align="center">
                                        <?php $countBooking = array_count_values(Session::get('hello')['cart']);?>
                                        {{--<input type="text" class="shopee-button-outline shopee-button-outline-mid" value="{{$countBooking[$value->id]}}">--}}
                                            {{$countBooking[$value->id]}}
                                    </td>
                                    <td width="10%" align="center" class="price-total">
                                        {{$value->price_km ? number_format($value->price_km*$countBooking[$value->id]) :
                                        number_format($value->price*$countBooking[$value->id])}} VNĐ
                                    </td>
                                    <td width="" align="center">
                                        <input type="hidden" class="deleteSession" name="deleteSession" value="{{$value->id}}">
                                        <a href="{{route('deleteSession', $value->id)}}">
                                            <button type="button" class="btn btn-default">
                                                Xoá
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $count += $value->price_km ?
                                    $value->price_km*$countBooking[$value->id] :
                                    $value->price*$countBooking[$value->id];
                                ?>
                            @endforeach
                            <tr>
                                <td colspan="4" style="padding:10px">
                                    <h3 class="all-cart-price" style="color: #c91d67">Tổng giá:</h3>
                                </td>
                                <td colspan="2" style="padding:10px">
                                    <h3 class="all-cart-price" style="color: #c91d67">{{number_format($count)}} VNĐ</h3>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <a href="{{route('home')}}">
                                        <button type="button" class="btn success btn-hihi">MUA TIẾP</button>
                                    </a>
                                    <a href="{{route('pay_orders')}}">
                                        <button type="button" class="btn btn- btn-hihi">THANH TOÁN </button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                 @else
                    Không có sản phẩm nào trong giỏ hàng.
                @endif
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection