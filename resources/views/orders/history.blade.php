<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch Sử Đơn Hàng</title>
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('products.index') }}" class="back-btn">&larr; Quay lại</a>
        <h1>Lịch Sử Đơn Hàng</h1>
    </header>

    <div class="container">
        @if($orders->isEmpty())
            <div class="no-orders">
                <p>Bạn chưa có đơn hàng nào.</p>
            </div>
        @else
            <table class="order-table">
                <thead>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Ngày Đặt</th>
                        <th>Tổng Tiền</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr class="order-item">
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                            <td>{{ number_format($order->total_price, 0, ',', '.') }} VND</td>
                            <td class="{{ $order->status }}">{{ ucfirst($order->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <footer>
        <p>&copy; 2025 Thương mại điện tử</p>
    </footer>
</body>
</html>
