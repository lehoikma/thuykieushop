<div class="container">
    <h2>Thông Tin Đặt Hàng</h2>
    <p>Cảm ơn <b>{{$content['name']}}</b> đã đặt hàng ở THUÝ KIỀU SHOP. Chúng tôi sẽ liên hệ sớm với bạn .</p>
    <table class="table">
        <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng giá</th>
        </tr>
        </thead>
        <tbody>
        <?php $count = 0;?>
        @foreach($content['body'] as $value)
            <tr>
                <td>{{$value->products['name']}}</td>
                <td>{{$value['numbers']}}</td>
                <td>{{$value['price_orders']}}</td>
            </tr>
            <?php $count += $value['price_orders']?>
        @endforeach
        </tbody>
    </table>
    <p>Tổng Hoá Đơn Đặt Hàng: {{$count}} VNĐ</p>
</div>
