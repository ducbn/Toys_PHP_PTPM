<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Hàng</title>
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('orders.history') }}" class="back-btn">&larr; Quay lại</a>
        <h1>Chi Tiết Đơn Hàng</h1>
    </header>

    <div class="container">
        <div class="order-details">
            <h2>Đơn Hàng #{{ $order->id }}</h2>
            <p><strong>Ngày Đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Tổng Tiền:</strong> {{ number_format($order->total_price, 0, ',', '.') }} VND</p>
            <p><strong>Trạng Thái:</strong> {{ ucfirst($order->status) }}</p>
            <h3>Chi Tiết Sản Phẩm</h3>
            <ul>
                @foreach($order->orderItems as $item)
                    <li>{{ $item->product->name }} - Số lượng: {{ $item->quantity }} - Giá: {{ number_format($item->product->price, 0, ',', '.') }} VND</li>
                @endforeach
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Thương mại điện tử</p>
    </footer>
</body>
</html>
