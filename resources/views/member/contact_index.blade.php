@extends('member.layouts.app')
@section('content')
        <div class="title_sanpham_center" style="width: 240px">
            <ul id="tabs">
                <center><a id="current" name="#tab1" href="#">Liên hệ với Thuý Kiều Shop</a></center>
            </ul>

        </div>
        <div class="row">
        </div>
        <div class="row-fluid" style="margin-left: 10px;margin-top: 25px;">
            <div class="row-fluid">
                <div class="field span6">
                    <p>Địa Chỉ Shop: </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0521015066533!2d105.78402621431833!3d21.030601193092668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4c76b12a3b%3A0x9a311c833456d5f0!2zRHV5IFTDom4sIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1492932985523" frameborder="0" style="border:0;    width: 100%;
    height: 300px;" allowfullscreen></iframe>
                </div>
                <div class="field span6">
                    <h3>Thuý Kiều Shop - Mỹ phẩm Hàn Quốc, mỹ phẩm Âu Mỹ, nước hoa Pháp, Ý</h3>
                    <p style="font-size: 14px;"> Địa chỉ: Hà Nội - 099999999<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="row-fluid" style=" border-radius: 5px;padding: 15px 10px 17px; margin-left: 0px;">
            <form action="{{route('save_contact')}}" method="POST">
                {{csrf_field()}}
                <div class="row-fluid">
                    <div class="field span6">
                        <div class="span12">
                            <label accesskey="U" for="first_name">Họ tên (*)</label>
                            <input id="HoTen" name="name" type="text" value="{{old('name')}}">
                        </div>
                        @if ($errors->has('name'))
                            <p class="help-block text-left"
                               style="color: red">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="field span6">
                        <div class="span12">
                            <label accesskey="O" for="last_name">Địa chỉ (*)</label>
                            <input id="DiaChi" name="address" type="text" value="{{old('address')}}">
                        </div>
                        @if ($errors->has('address'))
                            <p class="help-block text-left"
                               style="color: red">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="field span6">
                        <div class="span12">
                            <label accesskey="E" for="email">Email (*)</label>
                            <input id="Email" name="email" type="text" value="{{old('email')}}">
                        </div>
                        @if ($errors->has('email'))
                            <p class="help-block text-left"
                               style="color: red">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="field span6">
                        <div class="span12">
                            <label accesskey="P" for="phone">Số điện thoại (*)</label>
                            <input id="Phone" name="tel" type="text" value="{{old('tel')}}">
                        </div>
                        @if ($errors->has('tel'))
                            <p class="help-block text-left"
                               style="color: red">{{ $errors->first('tel') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="field span6">
                        <div class="span12">
                            <label accesskey="C" for="comments">Nội dung (*)</label>
                            <textarea id="NoiDung" name="comments" rows="6" style="height :200px"></textarea>
                        </div>
                        @if ($errors->has('comments'))
                            <p class="help-block text-left"
                               style="color: red">{{ $errors->first('comments') }}</p>
                        @endif
                    </div>
                </div>
                <div class="divider"></div>
                <div class="button-align">
                    <input id="submit" class="btn" type="submit" value="Gửi liên hệ" style="width: 100px; ">
                </div>
            </form>
        </div>

@endsection