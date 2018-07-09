@extends('member.layouts.app')
@section('content')
   <div class="title_sanpham_center col-ld-12" style="width: 240px">
      <ul id="tabs">
         <center><a id="current" name="#tab1" href="#">Sản Phẩm Khuyến Mãi</a></center>
      </ul>
   </div>
   <div class="row" style="margin-bottom: 15px">
   </div>
   <div class="row">
      <div class="col-ld-12 col-md-12">
         <div class="0 block categorytabs">
            <div class="tab-content">
               <div class="row box-product" style="margin : 0px -5px -5px -5px;">
                  @foreach($productsKM as $value)
                     <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 0; padding-right: 0;">

                        <li class="cb-item " style="padding: 0px;">
                           <div class="cbi-content" style="border: 1px #c91d67 solid">
                              <b id="icon36" class="pi pix1">
                                 <span>-{{100-round($value['price_km']/$value['price']*100)}}</span>
                                 %
                              </b>
                              <a href="{{route('products_detail', [$value['slug'], $value['id']] )}}">
                                 <img src="/image/bg@1x1.png"
                                      style="background: url('/upload/{{$value['avatar']}}') center center/cover no-repeat; width: 100%;">
                              </a>
                              <div class="sli-name" style="margin-top: 5px">
                                 <a href="{{route('products_detail', [$value['slug'], $value['id']] )}}">
                                    {{$value['name']}}
                                 </a>
                              </div>

                              <ul class="spu-ul">
                                 <li class="old-price" style="float: left;">
                                    {{number_format($value['price'])}}
                                    <sup>đ</sup>
                                 </li>
                                 <li class="new-price" style="float: right">
                                    {{number_format($value['price_km'])}}
                                    <sup>đ</sup>
                                 </li>

                              </ul>
                           </div>

                        </li>
                     </ul>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection